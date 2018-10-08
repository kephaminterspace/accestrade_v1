<?php
$pub_default = 'machine';

//$URL_PATH = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$post['offer_id']       = 'biotri';
$post['click_id']       = @$_POST['click_id'];
$post['landing_page']   = @$_SERVER['HTTP_HOST'];

$post['customer_name'] = @$_POST['name'];
$post['customer_phone'] = @$_POST['phone'];
$post['customer_phone'] = (substr($post['customer_phone'], 0, 1) != "0" && strlen($post['customer_phone']) < 11) ? "0".$post['customer_phone'] : $post['customer_phone'];

$post['extra_infos'] = array(
    'product_category_id' => '1'
);

function get_click_id_cookie($url){
	$ch         = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	$result     = curl_exec($ch);
	preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
	$cookies    = array();
	foreach($matches[1] as $item) {
		parse_str($item, $cookie);
		$cookies = array_merge($cookies, $cookie);
	}
	if(!empty($cookies['click_id'])){
		return $cookies['click_id'];
	}else{
		return '';
	}
}

function call_post($url, $data, $auth = null){
	$timeout        = 10000;
	$http_header    = [
		"content-type: application/json",
		"Access-Control-Allow-Origin: *",
		"Access-Control-Allow-Credentials: true",
		"Access-Control-Allow-Methods: GET, POST"
	];
	if(!empty($auth)){
		$http_header[] = "authorization: " . $auth;
	}
	$curl = curl_init();
	curl_setopt_array($curl, array(
		CURLOPT_URL                 => $url,
		CURLOPT_RETURNTRANSFER      => true,
		CURLOPT_ENCODING            => '',
		CURLOPT_CONNECTTIMEOUT_MS   => $timeout,
		CURLOPT_TIMEOUT_MS          => $timeout,
		CURLOPT_HTTP_VERSION        => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST       => 'POST',
		CURLOPT_SSL_VERIFYPEER      => false,
		CURLOPT_POSTFIELDS          => json_encode($data),
		CURLOPT_HTTPHEADER          => $http_header,
		CURLOPT_VERBOSE             => true
	));
	$response   = curl_exec($curl);
	curl_close($curl);
	return $response;
}

//if(empty($post['click_id'])){
//	$post['click_id'] = get_click_id_cookie('http://go.masoffer.net/v2/'.$post['offer_id'].'/'.$pub_default.'?img=1');
//}

//API Dev
//$response = call_post("http://cpl-tracking.test.masoffer.tech/v1/postbacks.json", $post);

//API Product
$response = call_post("http://cpl-tracking.masoffer.net/v1/postbacks.json", $post);

$response_decode = json_decode($response);

if ($response_decode->message != 'send postback successfully') {
	$logs = date('Y-m-d H:i:s | ') . json_encode($post) . ' | ' . $response;
	file_put_contents('/tmp/'.$post['offer_id'].'-error.log', $response.PHP_EOL , FILE_APPEND | LOCK_EX);
}

header('Location: thankyou.php');
header('Access-Control-Allow-Origin: *');