<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bio Trĩ - Bào tử lợi khuẩn sống cho người bệnh Trĩ</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/style.css?ver=05" rel="stylesheet">
    <link rel="stylesheet" href="./css/animate.css">
    <link type="image/x-icon" href="./images/sanpham-img.png" rel="shortcut icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script>function validateForm(){var e=document.getElementById("name").value,n=document.getElementById("phone").value;if(""==n)alert("Vui lòng nhập Số điện thoai!");else if(/^[0-9]+$/.test(n)){if(""!=e)return!0;alert("Vui lòng nhập Họ và Tên!")}else alert("Vui lòng nhập Số điện thoại hợp lệ!");return!1}
        function validateForm2(){var e=document.getElementById("name2").value,n=document.getElementById("phone2").value;if(""==n)alert("Vui lòng nhập Số điện thoai!");else if(/^[0-9]+$/.test(n)){if(""!=e)return!0;alert("Vui lòng nhập Họ và Tên!")}else alert("Vui lòng nhập Số điện thoại hợp lệ!");return!1}</script>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '315357972553841');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=315357972553841&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Global site tag (gtag.js) - AdWords: 790124487 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-790124487"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-790124487');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 790124487 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-790124487"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-790124487');
    </script>
</head>

<body>
<div class="main-wrapper">
<!--    HEADER-->
    <section class="content-sec header-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="order-form-col">
<!--                        <form action="post.php" onsubmit="return validateForm()" method="POST" role="form" class="form-order">-->
                        <form class="form-order" onsubmit="return validateForm()" action="https://docs.google.com/forms/d/1qTXeZzis9qMyhb2m-w4IxpiKlDVpg77VSfK7IRWAGpk/formResponse" method="POST" role="form">
                            <input type="hidden" name="click_id" value="<?php echo (string)@$_GET['click_id']; ?>">

                            <legend>Đặt mua nhận ngay ưu đãi</legend>
                            <div class="content">
                                <div class="form-group">
                                    <label for="">Số điện thoại của bạn</label>
                                    <input type="tel" class="form-control" id="phone" name="entry.134259433">
                                </div>
                                <div class="form-group">
                                    <label for="">Tên của bạn</label>
                                    <input type="text" class="form-control" id="name" name="entry.137168616">
                                </div>
                                <div class="price">
                                    <p class="text-price">380.000Đ/Hộp</p>
                                    <p class="text-price text-price2">2 Hộp - Free Ship</p>
                                    <p class="text-price text-price2">3 Hộp - <span>Giảm 150k</span></p>
                                    <p class="info">1 hộp 20 ống (dùng 10 - 20 ngày)<br/>giao hàng toàn quốc</p>
                                </div>
                                <button type="submit" class="btn btn-primary js_submit">Đặt mua ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="sanpham-img sanpham-img1">
                        <img src="images/sanpham-img.png" alt="Sản Phẩm">
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--    TRIEU CHUNG-->
    <section class="content-sec trieuchung-sec">
        <div class="container">
            <div class="row">
                <div class="main-title">
                    <h2><span>Bio TRĨ - cung cấp bào tử lợi khuẩn sống dạng nước, tạo kháng thể,</span> xử lý tận gốc vấn đề táo bón, trĩ</h2>
                    <hr class="main-line"/>
                </div>
                <div class="col-md-6">
                    <div class="benhtri-video">
                        <iframe src="https://player.vimeo.com/video/289211384" width="100%" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mota">
                        <h3><span>Táo bón - Khó đại tiện - Chảy máu - Đau rát</span> là biểu hiện của <span>BỆNH TRĨ</span></h3>
                    </div>
                    <div class="mota-chitiet">
                        <ul>
                            <li>Táo bón kinh niên - nguyên nhân chính gây TRĨ.</li>
                            <li>Bề mặt ruột kém kháng thể gây ra táo bón.</li>
                            <li>Hệ lợi khuẩn kém phát triển gây ra phân cứng dẫn đến táo bón.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mota-readmore">
                    <p><span>Bio Trĩ - Bào tử lợi khuẩn tinh khiết</span> giúp người bệnh Trĩ tạo kháng thể, tăng sức đề kháng, tạo màng sinh học, làm mềm phân, tăng độ nhớt, nhuận tràng 1 cách tự nhiên.</p>
                </div>
            </div>
        </div>
    </section>


<!--    DOI TUONG-->
    <section class="content-sec doituong-sec">
        <div class="container">
            <div class="row">
                <div class="main-title">
                    <h2>Những ai dễ bị táo bón, trĩ?</h2>
                    <hr class="main-line"/>
                </div>
                <div class="col-md-4">
                    <img src="images/namgioi-img.png" alt="Nam Giới">
                    <div class="detail-content-col">
                        <h3>Dân văn phòng</h3>
                        <p>Ngồi nhiều, lười vận động, uống nhiều rượu bia, ăn nhiều thịt động vật.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/phunu-img.png" alt="Phụ Nữ">
                    <div class="detail-content-col">
                        <h3>Phụ nữ có thai & cho con bú</h3>
                        <p>Rối loạn tiêu hóa khi mang thai, sau sinh, áp lực vùng xương chậu lớn, dễ bị tụ máu, sưng tĩnh mạch hậu môn.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="images/nguoigia-img.png" alt="Người Cao Tuổi">
                    <div class="detail-content-col">
                        <h3>Người có tuổi & cao tuổi</h3>
                        <p>Chức năng tiêu hóa, bài tiết, hấp thụ đang bị lão hóa theo thời gian.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="btn btn-tuvan">
                    <a data-scroll="#form-ord"><button type="button" class="btn btn-primary js_submit">Đăng ký tư vấn miễn phí</button></a>
                </div>
            </div>
        </div>
    </section>


<!--    GIOI THIEU-->
    <section class="content-sec gioithieu-sec">
        <div class="container">
            <div class="row">
                <div class="main-title">
                    <h2>Bào tử lợi khuẩn Bio Trĩ khác biệt hoàn toàn so với sản phẩm thông thường</h2>
                    <hr class="main-line"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="sosanh sosanh-first sosanh-left">
                        <div class="sosanh-chitiet">
                            <h4>Có trên 3 tỷ Bào tử lợi khuẩn sống trong 1 ống</h4>
                            <p>Bào tử lợi khuẩn sống, tinh khiết dạng nước, được sản xuất trên dây chuyền công nghệ cấp cao của Mỹ & EU.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="sosanh sosanh-second">
                        <div class="sosanh-chitiet">
                            <h4>Công nghệ đột phá trên thế giới</h4>
                            <p>Bio Trĩ được sản xuất bằng công nghệ mới nhất của Phòng thí nghiệm trọng điểm Công nghệ Protein và Enzym thuộc Trường ĐHKHTN.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="sosanh sosanh-third sosanh-left">
                        <div class="sosanh-chitiet">
                            <h4>Tăng kháng thể cho ruột</h4>
                            <p>Tăng kháng thể làm sạch, làm trẻ hóa bề mặt ruột, tạo môi trường có lợi cho lợi khuẩn, xử lý tận gốc vấn đề táo bón, tránh tái phát bệnh Trĩ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="sosanh sosanh-fourth">
                        <div class="sosanh-chitiet">
                            <h4>Màng sinh học bảo vệ ruột</h4>
                            <p>Tạo màng sinh học tại các vùng bị viêm nhiễm, làm lành vết viêm ở khu vực tĩnh mạch hậu môn đang bị tổn thương.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--    Y KIEN KHACH HANG-->
    <section class="content-sec feedback-sec">
        <div class="container">
            <div class="row">
                <div class="main-title">
                    <h2>Ý kiến của khách hàng</h2>
                    <hr class="main-line"/>
                    <span style="color: #c7184b;"><i>Trên 7000 khách hàng trên toàn quốc hài lòng về sản phẩm</i></span>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-2">
                    <img src="images/hoangnam-img.png" alt="Hoàng Nam">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="ykien-khachhang">
                        <p>Tôi mới dùng Bio Trĩ được 1 tháng, thấy bệnh chuyển biến khá tốt, đi đại tiện không còn khó chịu, nặng nề như trước nữa.
                            Sử dụng lợi khuẩn Bio Trĩ cơ thể thấy nhẹ nhàng hơn, giúp giảm bớt nỗi khổ của dân văn phòng chúng tôi.</p>
                        <h5>Anh Hoàng Nam (40 tuổi)</h5>
                    </div>
                </div>
            </div>
            <div class="row ykien-row">
                <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-2">
                    <div class="ykien-khachhang">
                        <p>Tình cờ biết được Bio Trĩ qua 1 người bạn nên tôi cũng thử. Tôi bị trĩ lâu lắm rồi, ăn không ngon ngủ không yên vì bệnh.
                            Thật may, bệnh của tôi đang có dấu hiệu tích cực rồi, hết đi nặng chảy máu, dễ đi hơn trước rất nhiều. Cảm ơn các bạn đã giới thiệu cho tôi bài thuốc tốt.</p>
                        <h5>Bác Lụa (52 tuổi)</h5>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="images/quanglua-img.png" alt="Bác Lụa">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-2">
                    <img src="images/lethu-img.png" alt="Lê Thu">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="ykien-khachhang">
                        <p>Nỗi khổ khó nói của những người phụ nữ sau sinh chính là bệnh Trĩ. Tôi cũng vô cùng khó chịu với căn bệnh này. Vô tình tôi đọc được thông tin từ Bio Trĩ qua Báo Chí.
                        Tìm hiểu thì thấy đây là 1 công nghệ hoàn toàn mới, giá phù hợp nên dùng thử. Không ngờ kết quả lại hơn mong đợi như thế.</p>
                        <h5>Chị Lê Thu (34 tuổi)</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--    GIAI PHAP DE XUAT-->
    <section class="content-sec giaiphap-sec">
        <div class="container">
            <div class="row">
                <div class="btn btn-tuvan">
                    <a data-scroll="#form-ord"><button type="button" class="btn btn-primary js_submit">Đăng ký tư vấn miễn phí</button></a>
                </div>
            </div>
        </div>
    </section>


<!--    FOOTER-->
    <section class="content-sec footer-sec">
        <div class="container">
            <div class="row">
                <div class="main-title">
                    <h2>Chứng nhận quốc tế và Việt Nam</h2>
                    <hr class="main-line"/>
                </div>
                <div class="chungnhan-img">
                    <img src="images/chungnhan-img.png" alt="Chứng Nhận">
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="order-form-col">
                        <div class="form-title">
                            <h2>Bio Trĩ - Bào tử lợi khuẩn sống</h2>
                        </div>
<!--                        <form action="post.php" onsubmit="return validateForm2()" id="form-ord" method="POST" role="form" class="form-order">-->
                        <form class="form-order" onsubmit="return validateForm2()" id="form-ord" action="https://docs.google.com/forms/d/1qTXeZzis9qMyhb2m-w4IxpiKlDVpg77VSfK7IRWAGpk/formResponse" method="POST" role="form">
                            <input type="hidden" name="click_id" value="<?php echo (string)@$_GET['click_id']; ?>">
                            <legend>Đặt mua nhận ngay ưu đãi</legend>
                            <div class="content">
                                <div class="form-group">
                                    <label for="">Số điện thoại của bạn</label>
                                    <input type="tel" class="form-control" id="phone2" name="entry.134259433">
                                </div>
                                <div class="form-group">
                                    <label for="">Tên của bạn</label>
                                    <input type="text" class="form-control" id="name2" name="entry.137168616">
                                </div>
                                <div class="price">
                                    <p class="text-price">380.000Đ/Hộp</p>
                                    <p class="text-price text-price2">2 Hộp - Free Ship</p>
                                    <p class="text-price text-price2">3 Hộp - <span>Giảm 150k</span></p>
                                    <p class="info">1 hộp 20 ống (dùng 10 - 20 ngày) giao hàng toàn quốc</p>
                                </div>
                                <button type="submit" class="btn btn-primary js_submit">Đặt mua ngay</button>
                            </div>
                        </form>
                        <br/>
                        <div class="text-note"><span>*Sản phẩm này không phải là thuốc,<br/>công dụng phụ thuộc vào cơ địa mỗi người</span></div><br/>

                        <div class="footer-more-info">
                            <h5>Giải pháp mới CHO NGƯỜI BỆNH TRĨ MỌI CẤP ĐỘ.</h5>
                            <p>Một sản phẩm của:</p>
                            <img src="../images/logo-img.png" alt="Logo">
                            <p>VĂN PHÒNG: TẦNG 9 - 98 HOÀNG QUỐC VIỆT - HÀ NỘI<br/>WWW.BIOTRI.COM.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="family-img">
                        <img src="images/family-img.png" alt="Family">
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Data scroll -->
<script>
    $(function() {
        $('[data-scroll]').click(function() {
            var target = $(this).data('scroll');
            $('html,body').animate({
                scrollTop: $(target).offset().top
            }, 700);
            return false;
        });
    });
</script>
</body>
</html>