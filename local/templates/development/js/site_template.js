/********меню***************/

$('header .burger').on('click', function() {
	$(this).toggleClass("active");
	$('header .menu_hide').slideToggle(400);
	$('body').toggleClass("overflow");
});

/********меню***************/

/*******скролл**********/
var $w = $(window);
var $header = $('header');
var $header_menu = $('header .head_menu');

window.addEventListener('scroll', function(){
	
	if($w.scrollTop() == 0)
	{
		$header.css('background', 'none');
		$header_menu.removeClass('hide');
	}
	else
	{
		$header.css('background', '#0b0333');
		$header_menu.addClass("hide");
	}
});

/*******скролл**********/

/****подсветка блоков при наведении****/

$('.hover_box').on('mouseover', function() {
	$(this).addClass("active");
});

$('.hover_box').on('mouseout', function() {
	$(this).removeClass("active");
});

/****подсветка блоков при наведении****/