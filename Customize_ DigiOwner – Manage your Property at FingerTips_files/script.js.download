jQuery(window).on('load', function() {

    /**
    * Check if slick is initialized or not
    */

    if( !jQuery().slick ) {
        return;
    }

    jQuery('.eye_catching_blog_slider').slick({
        centerMode     : true,
        centerPadding  : '0px',
        infinite       : true,
        slidesToShow   : 3,
        autoplaySpeed  : bizberg_object.autoplaySpeed * 1000,
        slidesToScroll : 1,
        arrows         : true,
        dots           : false,
        autoplay       : true,
        speed          : bizberg_object.speed,
        loop           : true,
        draggable      : bizberg_object.draggable == 1 ? true : false,
        responsive: [{
            breakpoint: 1025,
            settings: {
                slidesToShow  : 2,
                arrows        : true,
                centerPadding : '0px',
                dots          : false
            }
        }, {
            breakpoint: 500,
            settings: {
                slidesToShow  : 1,
                centerPadding : '0px',
                arrows        : false,
                dots          : false
            }
        }]
    });

});