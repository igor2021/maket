jQuery(document).ready(function ($) {
	
		//new_ad  toggle
	$('.new-ad__hideMap').click(function() {
				$('.new-ad__map').slideToggle(800);
						var text6 = $('.new-ad__hideMap').text();
				$('.new-ad__hideMap').text(
					text6 == "Скрыть карту" ? "Раскрыть карту" : "Скрыть карту");
		});

	//ads mobi toggle
		$('.b-ads__item-arblock').click(function() {
			$('.b-ads__item-work').slideToggle(500);
			$('.mobi__arrow1').toggleClass('active');
					var text5 = $('.b-ads__item-work__arrow').text();
			$('.b-ads__item-work__arrow').text(
					text5 == "Скрыть" ? "Показать" : "Скрыть");
		});

		$('.b-ads__item-arblock2').click(function() {
			$('.b-ads__item-current').slideToggle(500);
			$('.mobi__arrow2').toggleClass('active');
					var text5 = $('.b-ads__item-current__arrow').text();
			$('.b-ads__item-current__arrow').text(
					text5 == "Скрыть" ? "Показать" : "Скрыть");
		});

		$('.b-ads__item-arblock3').click(function() {
			$('.b-ads__item-made').slideToggle(500);
			$('.mobi__arrow3').toggleClass('active');
					var text5 = $('.b-ads__item-made__arrow').text();
			$('.b-ads__item-made__arrow').text(
					text5 == "Скрыть" ? "Показать" : "Скрыть");
		});


	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

});



	

