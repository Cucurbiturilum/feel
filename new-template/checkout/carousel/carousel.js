$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        items: 1,
        nav: true,
        dots:false,
        responsive: {
            0: {
                stagePadding: 70,
            },
            768:{
                stagePadding: 100,
            },
            1024:{
                stagePadding: 250,
            }
        }
    });
});