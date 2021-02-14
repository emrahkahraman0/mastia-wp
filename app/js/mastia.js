//JS

//Lazy-Load
var lazyLoadInstance = new LazyLoad({
    elements_selector: ".lazyload"
});

//Menu
$(function () {
    $('.hamburger').on('click', function () {
        $('.toggle').toggleClass('open');
        $('.menu').toggleClass('open');
    });
});

//Home-Slider-Owl
$('.home-slider-owl').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:false,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

//Home-Projects-Owl
$('.home_projects_owl').owlCarousel({
    loop:true,
    margin:25,
    nav:true,
    dots:false,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:3
        },
        1400:{
            items:3
        },
        1600:{
            items:3
        },
    }
});

//Home-Blog-Owl
$('.home_blog_owl').owlCarousel({
    loop:true,
    margin:25,
    nav:true,
    dots:false,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        700:{
            items:1
        },
        1000:{
            items:1
        },
        1200:{
            items:2
        },
        1400:{
            items:2
        },
        1600:{
            items:2
        },
    }
});

//About_Accordion
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

//Home_Clients_Owl
$('.about_clients_owl').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

//Projects_Tab
$(".projects_tab").pTab({
    pTab: '.tab-list',
    pTabElem: 'li',
    pContent: '.tab-content',
    pClass : 'aktif',
    pDuration : 500,
	pEffect : 'show',
});

//Services-Bottom-Owl
$('.services_bottom_owl').owlCarousel({
    loop:true,
    margin:25,
    nav:false,
    dots:true,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
        0:{
            items:1
        },
        400:{
            items:1
        },
        700:{
            items:2
        },
        1000:{
            items:3
        },
        1200:{
            items:3
        },
        1400:{
            items:3
        },
        1600:{
            items:3
        },
    }
});