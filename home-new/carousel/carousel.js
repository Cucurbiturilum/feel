$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                nav:false,
                dots: true
            },
            768:{
                items:3,
                nav:true,
                dots: false
            }
        }
    });
});