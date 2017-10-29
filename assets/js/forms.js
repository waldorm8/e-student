$(document).ready(function(){
	$('.bt-register').click(function(){
	if($('.f-register').hasClass("hidden")){
		$('.f-login').fadeOut(1000, function(){
			$('.f-login').addClass("hidden");
			$('span.bt-login').css("color", "white");
		});
		$(".f-register").fadeIn(1000, function(){
			$('.f-register').removeClass("hidden");
			$('span.bt-register').css("color", "#63D5C4");
		});	
	}
});
	$('.bt-login').click(function(){
		if($('.f-login').hasClass("hidden")){
			$(".f-login").fadeIn(1000, function(){
				$('.f-login').removeClass("hidden");
				$('span.bt-login').css("color", "#63D5C4");
			});

			$(".f-register").fadeOut(1000, function(){
				$('.f-register').addClass("hidden");
				$('span.bt-register').css("color", "white");
			});	
		}
	});
});



