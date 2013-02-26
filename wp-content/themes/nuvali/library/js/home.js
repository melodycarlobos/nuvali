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