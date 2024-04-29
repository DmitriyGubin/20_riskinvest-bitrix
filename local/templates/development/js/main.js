$('.news_slider').slick({
	dots: false,
	infinite: true,
	slidesToScroll: 1,
	variableWidth: true,
	responsive: [
		{
			breakpoint: 750,
			settings: {
				variableWidth: false,
				slidesToShow: 1
			}
		}
		],
	prevArrow: '<div class="prev-photo"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 6.5H1.5M1.5 6.5L7 12M1.5 6.5L7 1" stroke="white" stroke-width="2"/></svg></div>',
	nextArrow: '<div class="next-photo"><svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 6.5H16.5M16.5 6.5L11 12M16.5 6.5L11 1" stroke="white" stroke-width="2"/></svg></div>'
});
