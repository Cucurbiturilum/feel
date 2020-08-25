$(document).ready(function(){
    $('.stream-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass: true,
        nav: true,
        responsive:{
            0:{
                items:1,
            },
            520:{
                items:2,
            },
            768:{
                items:3,
            }
        }
    })
    $('.blog-articles').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass: true,
        nav: true,
        navContainer: '.blog-articles-navigation',
        responsive:{
            0:{
                items:1,
            },
            520:{
                items:2,
            },
            768:{
                items:3,
            }
        }
    })
});