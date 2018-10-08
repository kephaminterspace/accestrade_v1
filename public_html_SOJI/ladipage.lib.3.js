//Accesstrade tracking
var AT = {
    cookie_duration: 30, // 30 days
    aff_sid_param: "aff_sid",
    is_reoccur: 1,

    init: function (options) {
        this.cookie_duration = options['cookie_duration'] ? options['cookie_duration'] : 30;
        this.aff_sid_param = options['aff_sid_param'] ? options['aff_sid_param'] : "aff_sid";
        this.is_reoccur = options['is_reoccur'] == 0 ? 0 : 1;
    },

    track: function () {
        var sid = this.get_param(this.aff_sid_param);
        if (sid) {
            this.set_cookie("_aff_sid", sid, this.cookie_duration);
        }
    },

    get_param: function (name, url) {
        if (!url) url = (window.location != window.parent.location) ? document.referrer : document.location.href;
        name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
        var regexS = "[\\?&]" + name + "=([^&#]*)";
        var regex = new RegExp(regexS);
        var results = regex.exec(url);
        return results == null ? null : results[1];
    },

    set_cookie: function (n, v, e) {
        var d = new Date();
        d.setTime(d.getTime() + (e * 24 * 60 * 60 * 1000));
        var ee = "expires=" + d.toUTCString();
        cookie_domain = this.cookie_domain || window.location.hostname;
        document.cookie = n + "=" + v + "; " + ee + ";domain=" + cookie_domain + "; path=/";
    },

    get_cookie: function (cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    }
};

AT.track();

// document.getElementById("aff_sid").value = AT.get_cookie("_aff_sid");

    function validateform(phone, name, quantity){
        var result = false;
        if ("" != name){
            if ("" == phone) alert("Vui lòng nhập Số điện thoai!"); else if (/^[0-9]+$/.test(phone)) {
                if ("" != quantity){
                        result = true;
                }else alert("Vui lòng nhập Số lượng!");
            } else alert("Vui lòng nhập Số điện thoại hợp lệ!");
          }else alert("Vui lòng nhập Họ và Tên!");
        return result
    }


    jQuery("#BUTTON551, #BUTTON376").click(function(event){
        event.preventDefault(); // cancel default behavior
        jQuery(this).removeAttr( "onclick" );
        var form_id = jQuery(this).attr("id");
        var check_validate = false;
        var data = {};

        if(form_id == "BUTTON551"){
            data = {"campaign_id": "400",
                    "full_name": jQuery("#ITEM_FORM549 input[name='name']").val(),
                    "phone": jQuery("#ITEM_FORM550 input[name='phone']").val(),
                    "email": "",
                    "address": "",
                    "aff_sid": AT.get_cookie("_aff_sid"),
                    "product_id": "Soji1",
                    "product_name": "Soji1",
                    "product_price": "790000",
                    "product_quantity": 1};
            check_validate = validateform(jQuery("#ITEM_FORM550 input[name='phone']").val(), jQuery("#ITEM_FORM549 input[name='name']").val(), "1");
        }else if(form_id == "BUTTON376"){
            var product_quantity = "1";
            var product_quantity1 = jQuery(".lapa_quantity1").val();
            if (product_quantity1 == "Mua 3 tặng 1"){
                product_quantity = "3";
            }else if (product_quantity1 == "Mua 4 tặng 1"){
                product_quantity = "4";
            }else if (product_quantity1 == "Mua 5 tặng 1"){
                product_quantity = "5";
            }else{
                if(!product_quantity1){
                    product_quantity = "1"
                }else{
                    product_quantity = product_quantity1;
                }
            }

            data = {"campaign_id": "400",
                    "full_name": jQuery(".lapa_name1").val(),
                    "phone": jQuery(".lapa_phone1").val(),
                    "email": "",
                    "address": jQuery(".lapa_address1").val(),
                    "aff_sid": AT.get_cookie("_aff_sid"),
                    "product_id": "Soji1",
                    "product_name": "Soji1",
                    "product_price": "790000",
                    "product_quantity": product_quantity};
            console.log(data);

            check_validate = validateform(jQuery(".lapa_phone1").val(), jQuery(".lapa_name1").val(), jQuery(".lapa_quantity1").val());
        }

        if(check_validate){
            jQuery.ajax({
                    url: "http://206.189.86.199:23163/callApi",
                    //url: "https://iframe.lapa.pub/callApi",
                    method: "POST",
                    data: data,
                    dataType: 'json',
                    success: function (resp) {
                        if (resp.status == 'true') {
                            alert("Đăng ký thành công");

                        } else {
                            alert("Đăng ký thất bại, Mời bạn thử lại");
                        }
                        if (!AT.is_reoccur) {
                            AT.set_cookie("_aff_sid", "", 0);
                        }
                    },
                    complete: function (xhr, textStatus) {
                        if (xhr.status == 400) {
                            alert(xhr.responseText);
                        }else{
                            alert("Đăng ký thành công");
                        }
                    }
                });
        }
    });



