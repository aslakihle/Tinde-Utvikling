$(document).on('ready', function() {
	$(".regular").slick({
		dots: true,
		infinite: true,
		autoplay: true,
		arrows: true,
		appendDots: $(".navDots"),
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: $(".prev"),
		nextArrow: $(".next")
	});

	/*
	$(".center").slick({
		dots: true,
		infinite: true,
		centerMode: true,
		slidesToShow: 3,
		slidesToScroll: 3
	});
	$(".variable").slick({
		dots: true,
		infinite: true,
		variableWidth: true
	});
	$(".lazy").slick({
		lazyLoad: 'ondemand', // ondemand progressive anticipated
		infinite: true
	});
	*/
});
