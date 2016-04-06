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

//DRAWER


var openNav = function(){


		document.getElementById("drawer").style.width = "250px";
}

var closeNav = function(){

	document.getElementById("drawer").style.width = "0";
}