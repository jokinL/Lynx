//  MOBILE MENU

// CALL FUNTIONS
$(window).resize(headerHeight);

headerHeight();

// GET HEADER HEIGHT
function headerHeight(){
	var headerHeight = $(".header").css("height", window.innerHeight+"px");
}

// DISPLAY OR HIDDEN MOBILE MENU
$(".header__navbutton__checkbox").on("click", viewMobilmenu);
function viewMobilmenu(){
	$('.header__mob .menu-menu-container').slideToggle();
}


// SLOGAN POSITION WHEN MOBIL MENU IS HIDDEN
// Altura header
var headerHeight = $(".header").height();
// Altura slogan
var headerSlogan = $(".header__slogan").height();
$(".header__slogan").css("margin-top",
	function(){
		var marginTop = (headerHeight/2)-(headerSlogan/2);
		return marginTop;
	}
);


/*
// SLOGAN POSITION WHEN MOBIL MENU IS VISIBLE
$(".header__navbutton__checkbox").on("click",sloganPosition);
// This function get mobile menu heigt, divided /2 and put this margin-top to slogan
function sloganPosition(){
	alert("holaaa");
	var mobMenuHeight = $(".header__mob").height();
	$(".header__slogan").css("margin-top",
		function(){
			var mobMenuHeight = (mobMenuHeight/2);
			return mobMenuHeight;
		}
	);
}
*/

//  ADD NEW CLASS TO FORMS INPUTS WHITE COL-SM-6-WRAP CLASS
$('.col-sm-6-wrap').addClass('col-sm-6');