$(document).ready(function(){
		var $slider_wrapper_width = new Array();
		var $slider_container_count = new Array();
		var $slider_container_index = new Array();
		var $slider_current_position = new Array();
		var $slider_remainder = new Array();

		$('.slider').each(function(index){
			$(this).addClass(index+1);
			$(this).find('.buttons.left').addClass((index+1)+ '');
			$(this).find('.buttons.right').addClass((index+1)+ '');

			$slider_wrapper_width[index] = 0;
			$slider_container_count[index] = 0;
			$slider_container_index[index] = 0;
			$slider_current_position[index] = 0;
			$slider_remainder[index] = 0;


			console.log($(this).attr('class') + 'pota');
		});

	$('.slider').children('.buttons.right').click(function(){
		var $class_id = $(this).attr('class').split(' ')[2];
		console.log($class_id + 'IS THE CLASS');
		var $slider_images = $('.slider').eq($class_id-1).find('.pic-object');
		var $slider_images_count = $slider_images.length;
		var $slider_wrapper = $('.slider').eq($class_id-1).find('.pic-object-wrapper');
	

		$slider_images.each(function(index){

			$slider_wrapper_width[$class_id-1] += parseInt($slider_images.eq(index).css('width').split('px')[0]);

		});

		$slider_wrapper.css('width', $slider_wrapper_width[$class_id-1]  + 'px');

		if(($slider_images_count%4) === 0){
			$slider_container_count[$class_id-1] = $slider_images_count / 4;
		}else{
			$slider_remainder[$class_id-1]  = $slider_images_count % 4;
			$slider_container_count[$class_id-1]  +=1;
			$slider_container_count[$class_id-1]  = parseInt($slider_images_count / 4);
		}


		if($slider_container_index[$class_id-1]  < ($slider_container_count[$class_id-1] -1) ){
			$slider_container_index[$class_id-1]  += 1;
			$slider_current_position[$class_id-1]  += 516;

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position[$class_id-1]  + 'px', 'swing']
			},1000);
		}else if(($slider_container_index[$class_id-1] === ($slider_container_count[$class_id-1]-1))&&($slider_remainder[$class_id-1]  > 0)){
			console.log("DAAN KA D2 UTANG NA LOOB!!!");
			$slider_container_index[$class_id-1]  += 1;
			$slider_current_position[$class_id-1]  += (129 * $slider_remainder[$class_id-1] );

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position[$class_id-1]  + 'px', 'swing']
			},1000);
		}else{
			$slider_container_index[$class_id-1]  = 0;
			$slider_current_position[$class_id-1]  = 0;

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position[$class_id-1]  + 'px', 'swing']
			},1000);
		}
		console.log($slider_container_index[$class_id-1] );
		console.log($slider_current_position[$class_id-1] );
	});

	$('.slider').children('.buttons.left').click(function(){
		var $class_id = $(this).attr('class').split(' ')[2];

		var $slider_images = $('.slider').eq($class_id-1).find('.pic-object');
		var $slider_images_count = $slider_images.length;
		var $slider_wrapper = $('.slider').eq($class_id-1).find('.pic-object-wrapper');
	

		$slider_images.each(function(index){

			$slider_wrapper_width[$class_id-1]  += parseInt($slider_images.eq(index).css('width').split('px')[0]);

		});

		$slider_wrapper.css('width', $slider_wrapper_width[$class_id-1] + 'px');

		if(($slider_images_count%4) === 0){
			$slider_container_count[$class_id-1]  = $slider_images_count / 4;
		}else{
			$slider_remainder[$class_id-1]  = $slider_images_count % 4;
			$slider_container_count[$class_id-1]  +=1;
			$slider_container_count[$class_id-1]  = parseInt($slider_images_count / 4);
		}


		if(($slider_container_index[$class_id-1]  < ($slider_container_count[$class_id-1] ))&&($slider_container_index[$class_id-1]  > 0)){
			$slider_container_index[$class_id-1]  -= 1;
			$slider_current_position[$class_id-1]  -= 516;

			$slider_wrapper.animate({
				left: ['-' + $slider_current_position[$class_id-1] + 'px', 'swing']
			},1000);

		}else if(($slider_container_index[$class_id-1]  === ($slider_container_count[$class_id-1] ))&&($slider_remainder[$class_id-1]  > 0)){
			$slider_container_index[$class_id-1]  = $slider_container_count[$class_id-1] -1;
			$slider_current_position[$class_id-1]  = $slider_current_position[$class_id-1]  - ($slider_remainder[$class_id-1]  * 129);
			console.log('current_position' + $slider_current_position);
			$slider_wrapper.animate({
				left: ['-' + $slider_current_position[$class_id-1] +'px', 'swing']
			},1000);
		}else{

		}
		console.log('remainder' + $slider_remainder[$class_id-1] );
		console.log($slider_container_count[$class_id-1] );
		console.log($slider_container_index[$class_id-1] );
		console.log($slider_current_position[$class_id-1] );

	});
});