//SLIDER
$(window).load(function(){

	$('.flexslider').flexslider();

});

// $(function(){

// 	console.log("it works!");

// });

// $(document).ready(function(){

// 	$("p").click(function(){

// 		alert("its works!");
// 	});

// });

// SCROLL TO TOP

$(function(){

	$(window).scroll(function(){

		
		if($(window).scrollTop() > 100){

			$("#top").fadeIn();

		}else{

			$("#top").fadeOut();
		}
	})

});