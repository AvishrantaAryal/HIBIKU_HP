$(document).ready(function() {

    $("#owl-home-universities").owlCarousel({

        items : 4,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,2],
        itemsTablet : [899,1],
        itemsMobile : [599,1],
        stopOnHover: true,
        pagination: true,
        autoPlay: 3000

    });

    $("#owl-home-course").owlCarousel({

        items : 4,
        itemsDesktop : [1199,4],
        itemsDesktopSmall : [979,2],
        itemsTablet : [899,1],
        itemsMobile : [599,1],
        stopOnHover: true,
        pagination: true,
        autoPlay: 3000

    });

    $("#owl-home-testimonial").owlCarousel({

        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [979,1],
        itemsTablet : [899,1],
        itemsMobile : [599,1],
        stopOnHover: true,
        pagination: true,
        autoPlay: 3000

    });



});