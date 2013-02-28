$(document).ready(function(){

	$('.nu_living-info-slider').find('.slider-body-image.1#1').addClass('slider-image-selected').css('display', 'block');

	$('.buttons-container').find('.button').click(function(){
		// var $button_class = $(this).attr('class');
		// var $button_id = $(this).attr('id');
		// var $image_class = $('.nu_living-info-slider').find('.slider-body-image.' + $button_class + '#' + $button_id).attr('class');
		// var $image_id = $('.nu_living-info-slider').find('.slider-body-image.' + $button_class + '#' + $button_id).attr('id');
		// var $image_selected = $('.nu_living-info-slider').find('.slider-body-image.' + $button_class + '.slider-image-selected');

		// if($button_class === $image_class){
		// 	if($image_selected.attr('id') === $image_id){
		// 		$image_selected.fadeOut();
		// 	}
		// }
		var $image_selected = $('.nu_living-info-slider').find('.slider-body-image.' + $button_class + '.slider-image-selected');

	});
});