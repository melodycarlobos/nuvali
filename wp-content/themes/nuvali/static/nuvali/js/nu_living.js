$(document).ready(function(){

	/* ---- This will add some visibility to the first images on each group image on each slider ---- */

	$('.nu_living-info').each(function(index){
		// console.log(index + ": " + $(this).attr('class').split(' ')[1]);
		$(this).addClass('' + (index+1) + '');
		console.log($(this).attr('class').split(' ')[1]);

		var $class = $(this).attr('class').split(' ')[1];
		console.log($class + 'tangina class');
		var $class_images = $('.nu_living-info.' + $class +  ' .nu_living-info-slider').find('.slider-body-image');
		var $button_slider = $('.nu_living-info.' + $class +  ' .slider-body').find('.buttons-container');

		$class_images.each(function(index){

			$(this).addClass('' + $class + '');
			$(this).attr('id', '' + (index+1) + '');
			$button_slider.append('<div class="button"></div>');
			$button_slider.children().last().addClass('' + $class + '');
			$button_slider.children().last().attr('id', '' + (index+1)+ '');
		});

			
		$('.nu_living-info-slider').find('.slider-body-image.'+ $(this).attr('class').split(' ')[1] +'').first().addClass('slider-image-selected').css('display', 'block');
		


	});

	
	/* ---- End  ---- */

	var $interval = 4000 // this could be changed
	var timer = window.setInterval(nextSlide, $interval);



	


	/* ---- Event Script for buttons with a class corresponds to group and id corresponds to each image ---- */

	$('.buttons-container').find('.button').click(function(){
		window.clearInterval(timer);
  		timer = window.setInterval(nextSlide, 4000);

		var $button_class = $(this).attr('class').split(' ')[1];
		var $button_id = $(this).attr('id');
		var $image = $('.nu_living-info-slider').find('.slider-body-image.' + $button_class + '#' + $button_id);
		var $image_class = $('.nu_living-info-slider').find('.slider-body-image.' + $button_class + '#' + $button_id).attr('class').split(' ')[1];
		var $image_id = $('.nu_living-info-slider').find('.slider-body-image.' + $button_class + '#' + $button_id).attr('id');
		var $image_selected = $('.nu_living-info-slider').find('.slider-body-image.' + $button_class + '.slider-image-selected');

		if($button_class === $image_class){
			if($image_selected.attr('id') != $image_id){
				$image_selected.removeClass('slider-image-selected').css('display', 'none');
			
				$image.addClass('slider-image-selected');
				$image.fadeIn('normal');
			}
		}

	});

	/* --- End Event Script ---- */

	/* ----- Automatically change the image to next slide every 4 seconds ------*/

	

	function nextSlide(){


		var $image_count = $('.nu_living-info-slider').find('.slider-body-image.1').length;

		$('.nu_living-info').each(function(index){
			var $class = $(this).attr('class').split(' ')[1];
			var $image_selected_image = $('.nu_living-info-slider').find('.slider-body-image.'+ $class  +'.slider-image-selected')
		
			if($image_selected_image.next().hasClass('slider-body-image') === true){
				$image_selected_image.css('display', 'none');
				$image_selected_image.removeClass('slider-image-selected');
				$image_selected_image.next().addClass('slider-image-selected');
				$image_selected_image.next().fadeIn('normal');
			}else{
				$image_selected_image.css('display', 'none');
				$image_selected_image.removeClass('slider-image-selected');
				$('.nu_living-info-slider').find('.slider-body-image.' + $class + '').first().addClass('slider-image-selected');
				$('.nu_living-info-slider').find('.slider-body-image.' + $class + '').first().fadeIn('normal');
			}
		});
		
	}

	/* ---- End setInterval script ----- */

});