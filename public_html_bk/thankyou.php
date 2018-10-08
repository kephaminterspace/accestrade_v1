<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width,minimum-scale=1,initial-scale=1" name="viewport">
	<meta content="index,follow,all" name="robots">
	<meta content="vi" http-equiv="content-language">

	<title>Thank you</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">
</head>
<style>
	.thankyou{
		font-family: arial;
		font-size: 24px !important;
		border-radius: 4px;
		background-color: #87CEFA;
		color: #fff;
		padding: 50px 30px;
		margin: 100px auto;
		text-align: center;
		line-height: 1.8em;
	}
	.thankyou a{
		color: #5d5de6;
		text-decoration: none;
	}
	.thankyou a:hover{
		text-decoration: underline;
	}
	.check{
		font-size: 2.4em;
		color: #0e8ee4;
	}
</style>
<body>
<section class="section zero">
</section>
<section class="section intro">
	<div class="container">
		<div class="row">
			<div class="col-md-12  text-center ">
				<div class="thankyou">
					<div class="check">
						✔
					</div>
					<p style="font-family: Pinyon Script;font-size: 2em;line-height: 1.4em;">
						Thank you
					</p>
					<p>
                        Bạn đã đặt hàng thành công.<br/>Chúng tôi sẽ liên lạc với bạn qua số điện thoại trong thời gian sớm nhất!
					</p>
					<a onclick="goBack()" href="#" style="font-size: 1em;">Quay lại</a>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
    function goBack() {
        window.history.back();
    }
</script>

<!-- Event snippet for Bio Trĩ conversion page -->
<script>
    gtag('event', 'conversion', {'send_to': 'AW-790124487/iIZ-CLW8qogBEMev4fgC'});
</script>
</body>
</html>