$( document ).ready(function(){
	$('.slogan').on('click', function(event) {

        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $('#footer').offset().top
        }, 400);
        event.preventDefault();
    });	

	$('.js-example-basic-single').select2();
	$('.form-ft').bind('keyup change', function(){
	    var show = true;
	    
	    $(this).children('input').each(function(i){
	        if($(this).val().length==0){
	            
	            show = false;
	        };
	    });

	    if(show){
	    	$('.form-ft').removeClass('col-md-offset-3');
	        $('.select-hidden').fadeIn();
	  //    	var typingTimer;                
			// var doneTypingInterval = 2000;  
			// $('#cmnd').keyup(function(){
			//     clearTimeout(typingTimer);
			    
			//         typingTimer = setTimeout(function(){
			//             var phone =  $('#phone').val();    
			// 		    var fullname =  $('#fullname').val();      
			// 		    var email = $('#email').val();
			// 		    var cmnd = $('#cmnd').val();
			// 		    var namsinh = $('#namsinh').val();
			// 		    var thunhap = $('#thunhap').val();
			// 		    var congviec = $('#congviec').val();
			// 		    var sotienvay = $('#sotienvay').val();
			// 		    var tinh = $('#tinh').val();
					    
					    
					  
			// 		    $.ajax({
			// 		      type: "POST",
			// 		      url: "api/register.php",      
			// 		      data: {fullname:fullname,email:email,phone:phone,cmnd:cmnd,namsinh:namsinh,thunhap:thunhap,congviec:congviec,sotienvay:sotienvay,tinh:tinh},
			// 		      success: function(data){  
			// 		        data = JSON.parse(data);            
			// 		      }
			// 		    }); 
			             
			             
			//         }, doneTypingInterval);
			    
			// });
	    } 
	});    

	
	
    $('.tab-kh').click(function(event){
			//var tab_id = $(this).attr('data-tab');
			//$('#intro').fadeIn('slow');
			var $this = $(event.currentTarget);
			var tab_id = $this.data('tab');
			//console.log(tab_id);
			$('.tab-kh').parent('li').removeClass('active');
			$('.cmt').removeClass('active');

			$(this).addClass('active');
			$('[data-tab="'+tab_id+'"]').parent('li').addClass('active');
			$("#"+tab_id).addClass('active');
	});
   if($(window).width() > 768){    
	   $(window).scroll(function() {
	        if ($(this).scrollTop() > 50) {
		        
		        $('.logo-header').css('top','10px');
		    }   
		    else
		    {
		    	$('.logo-header').css('top','10px');
			   // $('.navbar-inverse').css('background','transparent');
		    } 
		});

		// $('#myCarousel .carousel-inner .item iframe').attr('height') = $('#myCarousel .carousel-inner .item img').height();        

    }

  //   $('#media').carousel({
  //   pause: true,
  //   interval: false,
  // });

  (function() {
	"use strict";

	var docElem = document.documentElement,
		didScroll = false,
			changeHeaderOn = 550;
			document.querySelector( '#back-to-top' );
		function init() {
			window.addEventListener( 'scroll', function() {
				if( !didScroll ) {
					didScroll = true;
					setTimeout( scrollPage, 50 );
				}
			}, false );
		}
		
	})();

	$(window).scroll(function(event){
		var scroll = $(window).scrollTop();
		if (scroll >= 50) {
		    $('.top').addClass('show');
		} else {
		    $('.top').removeClass('show');
		}
	});

	$('.top').on('click',function(){
	    $('html, body').animate({scrollTop: 0}, 'slow');
	    return false;
	});

	
	
	// console.log($('#myCarousel .carousel-inner .item iframe').attr('height'));
	var stringPathName = window.location.pathname;
	console.log(stringPathName);

	function updateURL() {
      if (history.pushState) {
          var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?para=hello';
          window.history.pushState({path:newurl},'',newurl);
      }
    }

	$('.navbar-nav li a').on('click',function(){
		var $this = $(this).attr('href');
		var stringPathName = window.location.pathname;
		var newurl = stringPathName + $this;
		
		if (history.pushState) {
           // var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + stringPathName ;
           window.history.pushState({path:newurl},'',newurl);
      	}
		// console.log(stringPathName);
	});



});

$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  for (var i=0;i<2;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});

$(document).ready(function() {
    $("#cmnd, #phone").keydown(function (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
});


// var d = new Date();
// var weekday = new Array(7);
// weekday[0] =  "Sunday";
// weekday[1] = "Monday";
// weekday[2] = "Tuesday";
// weekday[3] = "Wednesday";
// weekday[4] = "Thursday";
// weekday[5] = "Friday";
// weekday[6] = "Saturday";

// var n = weekday[d.getDay()];

// if(n != "Sunday" || n != "Saturday")
// {
	
	
//     document.getElementsByClassName("bg-form-register_thanks")[0].innerHTML = "<span style='font-size: 22px;'>BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG <br/> CHÚNG TÔI SẼ LIÊN HỆ BẠN TRONG 24h TỚI!</span>";
//     document.getElementsByClassName("footer_thanks")[0].innerHTML = "<span style='font-size: 22px;'>BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG <br/> CHÚNG TÔI SẼ LIÊN HỆ BẠN TRONG 24h TỚI!!</span>";
    
// }

// else{
// 	document.getElementsByClassName("bg-form-register_thanks")[0].innerHTML = "<span style='font-size: 22px;'>BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG <br/> CHÚNG TÔI SẼ LIÊN HỆ BẠN VÀO THỨ 2 TUẦN TỚI!</span>";
//     document.getElementsByClassName("footer_thanks")[0].innerHTML = "<span style='font-size: 22px;'>BẠN ĐÃ ĐĂNG KÝ THÀNH CÔNG <br/> CHÚNG TÔI SẼ LIÊN HỆ BẠN VÀO THỨ 2 TUẦN TỚI!</span>";
// }



