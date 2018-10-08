$(document).ready(function(){
	"use strict";
	$(".navList li").click(function() {
		$(this).addClass("active").siblings().removeClass("active");
	});
	$( ".mbMenu" ).on( "click", function() {
      $( ".bar" ).toggleClass( "change", 1000);
    });
	
	$(".mbMenu").click(function(){
        $(".dropMenu").slideToggle(250);
				$(".mbMenu").toggleClass("active");
				$("body").toggleClass("active_menu");
    });
	$(".menuList li").click(function() {
		$(this).addClass("active").siblings().removeClass("active");
	});
	$(document).on('click', 'a[href^="#"]', function(e) {
    var id = $(this).attr('href');
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }
    e.preventDefault();
		if ($(window).width() < 1170) {
			var pos1 = $id.offset().top - 110.75;
			$('body, html').animate({
				scrollTop: pos1
			},800);
		} else {
			var pos2 = $id.offset().top - 90;
			$('body, html').animate({
				scrollTop: pos2
			},800);
		}
		$("body").removeClass("active_menu");
		$(".dropMenu").hide();
		$(".mbMenu").removeClass("active");
		$(".mbMenu .bar").removeClass("change");
	});
	var head = $('.headerArea');
	if ($(window).width() < 1170) {
		$("textarea").attr("rows","3");
	  head.addClass("headerSP").removeClass("headerPC");
	}
	else {
	 head.removeClass("headerSP").addClass("headerPC");
	}
	$(".sec01List").slick({
		infinite: true,
		slidesToShow: 1,
		slidesToRoll: 1,
		autoplay: true,
  	autoplaySpeed: 3000,
		speed: 1000,
		prevArrow: '<img src="images/ico_prev01.png" alt="" width="30" height="75" class="slick-prev"/>',
		nextArrow: '<img src="images/ico_next01.png" alt="" width="30" height="75" class="slick-next"/>',
		responsive: [
    {
      breakpoint: 1170,
      settings: {
				arrows: false
      }
    }]
	});
	$(".mainVisualList").slick({
		infinite: true,
		slidesToShow: 1,
		slidesToRoll: 1,
		autoplay: true,
  	autoplaySpeed: 13000,
		speed: 1000,
		prevArrow: false,
		nextArrow: '<img src="images/ico_next02.png" alt="" width="15" height="48" class="slick-next"/>'
	});
	$('.bannerList').slick({
  dots: false,
  speed: 1000,
  slidesToShow: 1,
  slidesToScroll: 1,
	autoplay: true,
  autoplaySpeed: 3000,
	prevArrow: '<img src="images/ico_prev.png" alt="" width="30" height="75" class="slick-prev"/>',
	nextArrow: '<img src="images/ico_next.png" alt="" width="30" height="75" class="slick-next"/>',
  responsive: [
    {
      breakpoint: 1170,
      settings: {
				arrows: false,
        centerMode: true,
				centerPadding: "16.5px"
      }
    }
  ]
});
	
$('.sliderFor').slick({
  slidesToShow: 1,
	slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.sliderNav',
	swipe: false
});
$('.sliderNav').slick({
  slidesToShow: 3,
	slidesToScroll: 1,
  asNavFor: '.sliderFor',
  dots: false,
  focusOnSelect: true
});
 
	var request;
	$("#contact").submit(function(event){
    if (request) {
        request.abort();
    }
    var $form = $(this);
    var $inputs = $form.find("input, select, button, textarea");
    var serializedData = $form.serialize();
    $inputs.prop("disabled", true);
    request = $.ajax({
        url: "https://script.google.com/macros/s/AKfycbxXGiAgEYFs1rLVEy6v22yHrzr1WwiLFuVXj6hK7Hcu1-ZxGjM/exec",
        type: "post",
        data: serializedData
    });
    request.done(function (response, textStatus, jqXHR){
        console.log("Hooray, it worked!");
        console.log(response);
        console.log(textStatus);
        console.log(jqXHR);
    });
    request.fail(function (jqXHR, textStatus, errorThrown){
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });
    request.always(function () {
        $inputs.prop("disabled", false);
    });
    event.preventDefault();
	});
	$("#contact").on("submit",function(e) {
		e.preventDefault();
		$(".alert-success").css("display", "block");
		$(".modal-backdrop.in").css("display", "block");
	});
	if ($(".alert-success").css("display") === "block") {
		$("body").addClass("show");
	}
	$(".alert-success").on("click", function() {
		$(".alert-success").css("display", "none");
		$(".modal-backdrop.in").css("display", "none");
		$("input, textarea").val("");
		$("body").removeClass("show");
	});
});

