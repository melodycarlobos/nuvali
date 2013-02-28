$(document).ready(function(){



	//choose property slider

  
	$(".slider").diyslider({
	    width: "850px", // width of the slider
	    height: "85px", // height of the slider
	    display: 3, // number of slides you want it to display at once
	    loop: false // disable looping on slides
	}); // this is all you need!

	// use buttons to change slide
	$("#go-left").bind("click", function(){

	    // Go to the previous slide
	    $(".slider").diyslider("move", "back");
	});
	$("#go-right").bind("click", function(){

	    // Go to the previous slide
	    $(".slider").diyslider("move", "forth");
	});

	$(".properties").click(function () {
       var $month = $('div.month#'+ $(this).attr('id'));
       var $currentmonth = $month.text();
       console.log($currentmonth);
   var showmonth = $('#showmonth').html($currentmonth);
    });



	$('.nu_living-info').each(function(index){
		console.log(index + ": " + $(this).attr('class').split(' ')[1]);
		
		$('.nu_living-info-slider').find('.slider-body-image.'+ $(this).attr('class').split(' ')[1] +'').first().addClass('slider-image-selected').css('display', 'block');
	});

	

	setInterval(function(){
		nextSlide();
	},4000);

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


	$('.buttons-container').find('.button').click(function(){
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



});