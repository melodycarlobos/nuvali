$(document).ready(function(){
		var $slider_wrapper_width = 0;
		var $slider_container_count = 0;
		var $slider_container_index = 0;
		var $slider_current_position = 0;
		var $slider_remainder = 0;

		$('.slider').each(function(index){
			$(this).addClass('' + (index+1) + '');
			$(this).find('.buttons.left').addClass('' + (index+1) + '');
			$(this).find('.buttons.right').addClass('' + (index+1) + '');
	
			console.log($(this).attr('class') + 'pota');
		});

	$('.slider').children('.buttons.right').click(function(){
		var $class_id = $(this).attr('class').split(' ')[2];
		console.log($class_id + 'IS THE CLASS');
		var $slider_images = $('.slider.' + $class_id).find('.pic-object');
		var $slider_images_count = $slider_images.length;
		var $slider_wrapper = $('.slider.' + $class_id).find('.pic-object-wrapper');
	

		$slider_images.each(function(index){

			$slider_wrapper_width += parseInt($slider_images.eq(index).css('width').split('px')[0]);

		});

		$slider_wrapper.css('width', $slider_wrapper_width + 'px');

		if(($slider_images_count%4) === 0){
			$slider_container_count = $slider_images_count / 4;
		}else{
			$slider_remainder = $slider_images_count % 4;
			$slider_container_count +=1;
			$slider_container_count = parseInt($slider_images_count / 4);
		}


		if($slider_container_index < ($slider_container_count-1) ){
			$slider_container_index += 1;
			$slider_current_position += 516;

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position + 'px', 'swing']
			},1000);
		}else if(($slider_container_index === ($slider_container_count-1))&&($slider_remainder > 0)){
			console.log("DAAN KA D2 UTANG NA LOOB!!!");
			$slider_container_index += 1;
			$slider_current_position += (129 * $slider_remainder);

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position + 'px', 'swing']
			},1000);
		}else{
			$slider_container_index = 0;
			$slider_current_position = 0;

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position + 'px', 'swing']
			},1000);
		}
		console.log($slider_container_index);
		console.log($slider_current_position);
	});

	$('.slider').children('.buttons.left').click(function(){
		var $class_id = $(this).attr('class').split(' ')[2];

		var $slider_images = $('.slider.' + $class_id).find('.pic-object');
		var $slider_images_count = $slider_images.length;
		var $slider_wrapper = $('.slider.' + $class_id).find('.pic-object-wrapper');
	

		$slider_images.each(function(index){

			$slider_wrapper_width += parseInt($slider_images.eq(index).css('width').split('px')[0]);

		});

		$slider_wrapper.css('width', $slider_wrapper_width + 'px');

		if(($slider_images_count%4) === 0){
			$slider_container_count = $slider_images_count / 4;
		}else{
			$slider_remainder = $slider_images_count % 4;
			$slider_container_count +=1;
			$slider_container_count = parseInt($slider_images_count / 4);
		}


		if(($slider_container_index < ($slider_container_count))&&($slider_container_index > 0)){
			$slider_container_index -= 1;
			$slider_current_position -= 516;

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position + 'px', 'swing']
			},1000);

		}else if(($slider_container_index === ($slider_container_count))&&($slider_remainder > 0)){
			$slider_container_index = $slider_container_count-1;
			$slider_current_position = $slider_current_position - ($slider_remainder * 129);
			console.log('current_position' + $slider_current_position);
			$slider_wrapper.animate({
				left: ['-' + $slider_current_position+'px', 'swing']
			},1000);
		}else{

		}
		console.log('remainder' + $slider_remainder);
		console.log($slider_container_count);
		console.log($slider_container_index);
		console.log($slider_current_position);

	});
});