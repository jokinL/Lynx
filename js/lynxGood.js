//  MOBILE MENU
	
// Get mobil menu and onclick call viewMenu function
$('.header__navmob__checkbox').on('click',viewMenu);
// This function close and open the mobile menu content div with a jquery animation
function viewMenu(){
	// Get mobile menu content div
	$(".header__navmob .menu-menu-container").slideToggle();
}


// GET HEADER HEIGHT
function headerHeight(){
	var headerHeight = $(".header").css("height", window.innerHeight+"px");
}



// Get click on label and call newHeaderHeight
$('.header__navmob__checkbox').on("click", newHeaderHeight);
// Get mobile menu height
var menuHeight = $('.header__navmob .menu-menu-container').height();
// add heights
function newHeaderHeight(){
	// Nueva altura, altura normal del header+altura del menú mobil oculto
	var newHeaderHeight = $('.header').height()+menuHeight;
	// Metenemos a la altura originaria la nueva calculada
	var headerHeight = $(".header").css("height", newHeaderHeight+"px");
}


// GET SLOGAN HEIGHT
function sloganHeight(){
	// Get Slogan height
	var sloganHeight = $(".header__slogan").height();
	var sloganHeight50 = sloganHeight/2;
	$(".header__slogan").css("margin-bottom", sloganHeight50+44);
}



// CALL FUNTIONS
window.onresize = headerHeight;
headerHeight();
sloganHeight();