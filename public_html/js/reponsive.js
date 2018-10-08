/* CHECK DEVICE */
	window.__ua = function(u){
		return {
		isTablet:(u.indexOf('windows') != -1 && u.indexOf('touch') != -1)
		  || u.indexOf('ipad') != -1
		  || (u.indexOf('android') != -1 && u.indexOf('mobile') == -1)
		  || (u.indexOf('firefox') != -1 && u.indexOf('tablet') != -1)
		  || u.indexOf('kindle') != -1
		  || u.indexOf('silk') != -1
		  || u.indexOf('playbook') != -1,
		isSmartPhone:(u.indexOf('windows') != -1 && u.indexOf('phone') != -1)
		  || u.indexOf('iphone') != -1
		  || u.indexOf('ipod') != -1
		  || (u.indexOf('android') != -1 && u.indexOf('mobile') != -1)
		  || (u.indexOf('firefox') != -1 && u.indexOf('mobile') != -1)
		  || u.indexOf('blackberry') != -1,
		isMSIE: /*@cc_on!@*/false,
		ie: (function (){
		  if (window.ActiveXObject === undefined) return null;
		  if (!document.querySelector) return 7;
		  if (!document.addEventListener) return 8;
		  if (!window.atob) return 9;
		  if (!document.__proto__) return 10;
		  return 11;
		})()
		}
	};
	/* utility */
	$(function() {
		if(window.__ua(window.navigator.userAgent.toLowerCase()).isTablet){
			var w = "1200";
			$('meta[name="viewport"]').remove();
			$('head').append('<meta name="viewport" content="width='+w+', minimum-scale="1", maximum-scale="1", user-scalable=yes">');
		}
		if(window.__ua(window.navigator.userAgent.toLowerCase()).isSmartPhone){
			var w = "device-width";
			$('meta[name="viewport"]').remove();
			$('head').append('<meta name="viewport" content="width='+w+', user-scalable=yes">');
			if($(window).width()>768){
				var w = "767";
				$('meta[name="viewport"]').remove();
				$('head').append('<meta name="viewport" content="width='+w+', minimum-scale='+screen.width/w+', maximum-scale='+screen.width/w+', user-scalable=yes">');
			}
			else{
			
			}
		}
		
		$(window).resize(function(){
			if(window.__ua(window.navigator.userAgent.toLowerCase()).isTablet){
				var w = "1200";
				$('meta[name="viewport"]').remove();
				$('head').append('<meta name="viewport" content="width='+w+', minimum-scale="1", maximum-scale="1", user-scalable=yes">');
			}
			if(window.__ua(window.navigator.userAgent.toLowerCase()).isSmartPhone){
				var w = "device-width";
				$('meta[name="viewport"]').remove();
				$('head').append('<meta name="viewport" content="width='+w+', user-scalable=yes">');
				if($(window).width()>768){
					var w = "767";
					$('meta[name="viewport"]').remove();
					$('head').append('<meta name="viewport" content="width='+w+', minimum-scale='+screen.width/w+', maximum-scale='+screen.width/w+', user-scalable=yes">');
				}
				else{
				
				}
			}
		});
	});
	window.onorientationchange = function() { 
		var orientation = window.orientation; 
		switch(orientation) { 
			case 0:
			case 90:
			case -90:
			if(window.__ua(window.navigator.userAgent.toLowerCase()).isTablet){
				var w = "1200";
				$('meta[name="viewport"]').remove();
				$('head').append('<meta name="viewport" content="width='+w+', minimum-scale="1", maximum-scale="1", user-scalable=yes">');
			}
			if(window.__ua(window.navigator.userAgent.toLowerCase()).isSmartPhone){
				var w = "device-width";
				$('meta[name="viewport"]').remove();
				$('head').append('<meta name="viewport" content="width='+w+', user-scalable=yes">');
				if($(window).width()>768){
					var w = "767";
					$('meta[name="viewport"]').remove();
					$('head').append('<meta name="viewport" content="width='+w+', minimum-scale='+screen.width/w+', maximum-scale='+screen.width/w+', user-scalable=yes">');
				}
				else{
				
				}
			}
			break;
		break; } 
	};