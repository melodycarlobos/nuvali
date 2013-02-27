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



$(function(){
	$('.home-upper-slider-image').each(function(index){
		console.log(index + ": " + $(this).attr('id'));
		$('<div class="button"></div>').insertBefore($('#home-upper-nav img:last-child'));
		$('#home-upper-nav div:nth-last-child(2)').attr('id', $(this).attr('id') );
	});


	$('#home-upper-nav div:nth-child(2)').addClass('button-selected');

	if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
		$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
	}

	$('#home-upper-nav .button').click(function(){
		var $image_selected = $('.home-upper-image').find("img.slider-selected")

		$('#home-upper-nav').find('.button-selected').css('background-color', '#006a3b');
		$('#home-upper-nav').find('.button-selected').removeClass('button-selected');

		$(this).addClass('button-selected');

		if($('#home-upper-nav').find('.button-selected').hasClass('button-selected') === true){
			$('#home-upper-nav').find('.button-selected').css('background-color', 'white');
		}
		
		var $image = $('.home-upper-image').find("img.home-upper-slider-image#"+ $(this).attr('id'));
		
		if($image[0] != $image_selected[0]){
			$image_selected.removeClass('slider-selected');
			$image.fadeIn('normal', function(){
				$image.addClass('slider-selected');
				$image_selected.fadeOut('normal');
			});

			$('.home-upper-image').find('.home-upper-text#' + $image_selected.attr('id')).show('fast',function(){
				$(this).animate({
					left: ["1300px", 'swing']
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

		$test.each(function(index){
			console.log( "this is fuckin shet:" +  index);
		});

		

		if($image_selected.next().hasClass('home-upper-slider-image') === true){
			$image_selected.removeClass('slider-selected');
			$image = $image_selected.next();
			$image_selected.next().fadeIn('normal', function(){
				$image.addClass('slider-selected');
				$image_selected.fadeOut('normal');
			});

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
					left: ["1300px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});

			$('.home-upper-image').find('.home-upper-text#' + $image_selected.next().attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);

			});

			


		}
	});

	$('#home-upper-left-arrow-nav').click(function(){
		var $image_selected = $('.home-upper-image').find("img.slider-selected");

		if($image_selected.prev().hasClass('home-upper-slider-image') === true){
			$image_selected.removeClass('slider-selected');
			$image = $image_selected.prev();
			$image_selected.prev().fadeIn('normal', function(){
				$image.addClass('slider-selected');
				$image_selected.fadeOut('normal');
			});

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
					left: ["1300px", 'swing']
				},700, function(){
				$(this).hide();
				});

			});



			$('.home-upper-image').find('.home-upper-text#' + $image_selected.prev().attr('id')).show('fast',function(){
				$(this).animate({
					left: ["800px", 'swing']
				},700);

			});

		}

		
	});



});