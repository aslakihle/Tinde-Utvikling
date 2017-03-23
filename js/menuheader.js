// get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var bannerstart = $('.header').offset().top + 45;

// on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    stop = Math.round($(window).scrollTop());
    if (stop > bannerstart) {
        $('.menu').addClass('menuShadow');
    } else {
        $('.menu').removeClass('menuShadow');
   }

});