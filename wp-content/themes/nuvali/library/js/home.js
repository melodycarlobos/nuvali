/* --- Tab Script --- */

$(document).ready(function(){
	$('#content2-nav li').click(function(){
		if($(this).hasClass('selected') === false){
			$('.selected').removeClass('selected');
			$(this).addClass('selected');

			if($(this).hasClass('calendar-option') === true){
				$('#content2-content-text .list-view').hide();
				$('#content2-content #content2-nav2').hide();
				$('#content2-content-text .calendar').show();
			}else{
				$('#content2-content-text .calendar').hide();
				$('#content2-content-text .list-view').show();
				$('#content2-content #content2-nav2').show();		
			}
		}
	});
});

/* --- End script --- */


$(function(){
	var timer = window.setInterval(nextSlide, 5000);

	var $slider_images = $('.home-upper-image').find('.home-upper-slider-image');
	var $slider_texts = $('.home-upper-image').find('.home-upper-text');

	$slider_images.each(function(index){
		$(this).attr('id', index + 1);
	});

	$slider_texts.each(function(index){
		$(this).attr('id', index + 1);
	});

	$slider_images.first().addClass('slider-selected');


	$('.home-upper-slider-image').each(function(index){
		console.log(index + ": " + $(this).attr('id'));
		$('<div class="button"></div>').insertBefore($('#home-upper-nav img:last-child'));
		$('#home-upper-nav div:nth-last-child(2)').attr('id', $(this).attr('id') );

	});


	$('.home-upper-image').find('.home-upper-text#' + $('.home-upper-image img:first-child').attr('id')).show('fast',function(){
		$(this).animate({
			left: ["800px", 'swing']
		},700);
				
	});

	$('#home-upper-nav div:nth-child(2)').addClass('button-selected');

	if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
		$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
	}

	$('#home-upper-nav .button').click(function(){
		var $image_selected = $('.home-upper-image').find("img.slider-selected");
		window.clearInterval(timer);
  		timer = window.setInterval(nextSlide, 4000);

		$('#home-upper-nav').find('.button-selected').css('background-color', '#006a3b');
		$('#home-upper-nav').find('.button-selected').removeClass('button-selected');

		$(this).addClass('button-selected');

		if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
			$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
		}
		
		var $image = $('.home-upper-image').find("img.home-upper-slider-image#"+ $(this).attr('id'));
		
		if($image[0] != $image_selected[0]){
			$image_selected.removeClass('slider-selected');

			$image_selected.fadeOut('normal', function(){
				$image.fadeIn('normal');
				$image.addClass('slider-selected');
			});


			// $image.fadeIn('normal', function(){
			// 	$image.addClass('slider-selected');
			// 	$image_selected.fadeOut('normal');
			// });

			$('.home-upper-image').find('.home-upper-text#' + $image_selected.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["1600px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});

			$('.home-upper-image').find('.home-upper-text#' + $image.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);
				
			});
		}
		

	});

	
	$('#home-upper-right-arrow-nav').click(function(){

		var $image_selected = $('.home-upper-image').find("img.slider-selected");
		var id_array = [];

		var $test = $('.home-upper-image').not("img.slider-selected");

		window.clearInterval(timer);
  		timer = window.setInterval(nextSlide, 4000);

		$test.each(function(index){
			console.log( "this is fuckin shet:" +  index);
		});

		

		if($image_selected.next().hasClass('home-upper-slider-image') === true){
			$image_selected.removeClass('slider-selected');
			$image = $image_selected.next();

			$image_selected.fadeOut('normal', function(){
				$image.fadeIn('normal');
				$image.addClass('slider-selected');
			});

			// $image_selected.next().fadeIn('normal', function(){
			// 	$image.addClass('slider-selected');
			// 	$image_selected.fadeOut('normal');
			// });

			console.log($image_selected.next().attr('id'));


			var $button = $('#home-upper-nav').find('.button#' + $image_selected.next().attr('id'));

			$('#home-upper-nav').find('.button-selected').css('background-color', '#006a3b');
			$('#home-upper-nav').find('.button-selected').removeClass('button-selected');

			$($button).addClass('button-selected');

			if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
				$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
			}

			$('.home-upper-image').find('.home-upper-text#' + $image_selected.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["1600px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});

			$('.home-upper-image').find('.home-upper-text#' + $image_selected.next().attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);

			});

			


		}else{
			$image_selected.removeClass('slider-selected');
			$image = $('.home-upper-image img.home-upper-slider-image:first-child');

			$image_selected.fadeOut('normal', function(){
				$image.fadeIn('normal');
				$image.addClass('slider-selected');
			});
			// $image.fadeIn('normal', function(){
			// 	$image.addClass('slider-selected');
			// 	$image_selected.fadeOut('normal');
			// });

			console.log($image.attr('id'));


			var $button = $('#home-upper-nav').find('.button#' + $image.attr('id'));

			$('#home-upper-nav').find('.button-selected').css('background-color', '#006a3b');
			$('#home-upper-nav').find('.button-selected').removeClass('button-selected');

			$($button).addClass('button-selected');

			if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
				$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
			}

			$('.home-upper-image').find('.home-upper-text#' + $image_selected.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["1600px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});

			$('.home-upper-image').find('.home-upper-text#' + $image.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);

			});

		}
	});

	$('#home-upper-left-arrow-nav').click(function(){
		var $image_selected = $('.home-upper-image').find("img.slider-selected");
		window.clearInterval(timer);
  		timer = window.setInterval(nextSlide, 4000);
		
		if($image_selected.prev().hasClass('home-upper-slider-image') === true){
			$image_selected.removeClass('slider-selected');
			$image = $image_selected.prev();

			$image_selected.fadeOut('normal', function(){
				$image.fadeIn('normal');
				$image.addClass('slider-selected');
			});

			// $image_selected.prev().fadeIn('normal', function(){
			// 	$image.addClass('slider-selected');
			// 	$image_selected.fadeOut('normal');
			// });

			console.log($image_selected.prev().attr('id'));

			var $button = $('#home-upper-nav').find('.button#' + $image_selected.prev().attr('id'));
			
			$('#home-upper-nav').find('.button-selected').css('background-color', '#006a3b');
			$('#home-upper-nav').find('.button-selected').removeClass('button-selected');

			$($button).addClass('button-selected');

			if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
				$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
			}

			$('.home-upper-image').find('.home-upper-text#' + $image_selected.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["1600px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});



			$('.home-upper-image').find('.home-upper-text#' + $image_selected.prev().attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);

			});

		}else{
			$image_selected.removeClass('slider-selected');
			$image = $('.home-upper-image img.home-upper-slider-image').last();

			$image_selected.fadeOut('normal', function(){
				$image.fadeIn('normal');
				$image.addClass('slider-selected');
			});
			// $image.fadeIn('normal', function(){
			// 	$image.addClass('slider-selected');
			// 	$image_selected.fadeOut('normal');
			// });

			console.log($image.attr('id'));


			var $button = $('#home-upper-nav').find('.button#' + $image.attr('id'));

			$('#home-upper-nav').find('.button-selected').css('background-color', '#006a3b');
			$('#home-upper-nav').find('.button-selected').removeClass('button-selected');

			$($button).addClass('button-selected');

			if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
				$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
			}

			$('.home-upper-image').find('.home-upper-text#' + $image_selected.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["1600px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});

			$('.home-upper-image').find('.home-upper-text#' + $image.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);
			});
		}	

		
	});

/* ----- Automatically change the image to next slide every 4 seconds ------*/


	
	// launchInterval();
	
	// function launchInterval(){
	// 	var $interval = 4000 // this could be changed
	// 	setInterval(function(){
	// 		();
	// 	},$interval);
	// }

	function nextSlide(){
		var $current_slide = $('.home-upper-image').find('.home-upper-slider-image.slider-selected');
		var $slider_images = $('.home-upper-image').find('.home-upper-slider-image');

		if($current_slide.next().hasClass('home-upper-slider-image') === true ){
			$current_slide.removeClass('slider-selected');
			$current_slide.fadeOut('normal', function(){
				$current_slide.next().fadeIn('normal');
				$current_slide.next().addClass('slider-selected');



			});

			var $button = $('#home-upper-nav').find('.button#' + $current_slide.next().attr('id'));

			$('#home-upper-nav').find('.button-selected').css('background-color', '#006a3b');
			$('#home-upper-nav').find('.button-selected').removeClass('button-selected');

			$($button).addClass('button-selected');

			if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
				$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
			}

			$('.home-upper-image').find('.home-upper-text#' + $current_slide.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["1600px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});

			$('.home-upper-image').find('.home-upper-text#' + $current_slide.next().attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);

			});
		}else{
			$current_slide.removeClass('slider-selected');
			$current_slide.fadeOut('normal', function(){
				$slider_images.first().fadeIn('normal');
				$slider_images.first().addClass('slider-selected');
			});

			var $button = $('#home-upper-nav').find('.button#' + $slider_images.first().attr('id'));

			$('#home-upper-nav').find('.button-selected').css('background-color', '#006a3b');
			$('#home-upper-nav').find('.button-selected').removeClass('button-selected');

			$($button).addClass('button-selected');

			if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
				$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
			}

			$('.home-upper-image').find('.home-upper-text#' + $current_slide.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["1600px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});

			$('.home-upper-image').find('.home-upper-text#' + $slider_images.first().attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);

			});
		}
	
	}
	

	/* ---- End setInterval script ----- */



});