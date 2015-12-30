jQuery(document).ready(function ($) {
    // Carousel
    $("#owl-demo").owlCarousel({

        /*autoPlay: 3000, //Set AutoPlay to 3 seconds

        pagination: true,
        paginationNumbers: false,

        items: 0,
        itemsDesktop: [1199, 0],
        itemsDesktopSmall: [979, 0],
        itemsTablet: [768, 3],
        itemsMobile: [479, 3]*/
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        items:3,
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        pagination: true,
        paginationSpeed : 400,
        singleItem:true
    });

    $("#howworks").owlCarousel({

        /*autoPlay: 3000, //Set AutoPlay to 3 seconds

        pagination: true,
        paginationNumbers: false,

        items: 0,
        itemsDesktop: [1199, 0],
        itemsDesktopSmall: [979, 0],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1]*/
        loop:true,
        /*autoplay:true,*/
        /*autoplayTimeout:5000,
        autoplayHoverPause:true,*/
        navigation : true,
        animateOut: 'fadeOutDown',
        animateIn: 'fadeInDown',
        items:1,
        margin:30,
        stagePadding:30,
        smartSpeed:450
    });
});