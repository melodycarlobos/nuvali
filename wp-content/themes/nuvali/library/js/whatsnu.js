$(document).ready(function() {
  
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

	$(".month").click(function () {
       var $month = $('div.month#'+ $(this).attr('id'));
       var $currentmonth = $month.text();
       console.log($currentmonth);
   var showmonth = $('#showmonth').html($currentmonth);
    });

});