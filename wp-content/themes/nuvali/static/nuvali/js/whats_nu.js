$(document).ready(function(){
	var $slider_images = $('.pic-object-container .pic-object-wrapper').find('.pic-object');
	var $slider_images_count = $slider_images.length;
	var $slider_wrapper = $('.pic-object-container .pic-object-wrapper');
	var $slider_wrapper_width = 0;
	var $slider_container_count = 0;
	var $slider_container_index = 0;
	var $slider_current_position = 0;
	var $slider_remainder = 0;

	$slider_images.each(function(index){

		$slider_wrapper_width += parseInt($slider_images.eq(index).css('width').split('px')[0]);

	});

	$slider_wrapper.css('width', $slider_wrapper_width + 'px');

	if(($slider_images_count%4) === 0){
		$slider_container_count = $slider_images_count / 4;
	}else{
		$slider_remainder = $slider_images_count % 4;
		$slider_container_count = parseInt($slider_images_count / 4);
	}

	$('.slider').find('.buttons.right').click(function(){
		if($slider_container_index < ($slider_container_count-1) ){
			$slider_container_index += 1;
			$slider_current_position += 516;

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position + 'px', 'swing']
			},1000);
		}else if(($slider_container_index === ($slider_container_count-1))&&($slider_remainder > 0)){
			console.log("DAAN KA D2!!!");
			$slider_container_index = 0;
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
		console.log('slider index': + $slider_container_index)
	});

	$('.slider').find('.buttons.left').click(function(){
		$slider_wrapper.animate({
			left: ['0px', 'swing']
		},1000);
	});
});