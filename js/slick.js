$(document).on('ready', function() {
	$(".regular").slick({
		dots: true,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 10000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: $(".prev"),
		nextArrow: $(".next")
	});
});
