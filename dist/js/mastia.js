var lazyLoadInstance=new LazyLoad({elements_selector:".lazyload"});$((function(){$(".hamburger").on("click",(function(){$(".toggle").toggleClass("open"),$(".menu").toggleClass("open")}))})),$(".home-slider-owl").owlCarousel({loop:!0,margin:0,nav:!0,dots:!1,autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}}),$(".home_projects_owl").owlCarousel({loop:!0,margin:25,nav:!0,dots:!1,autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,responsive:{0:{items:1},400:{items:1},700:{items:2},1e3:{items:3},1200:{items:3},1400:{items:3},1600:{items:3}}}),$(".home_blog_owl").owlCarousel({loop:!0,margin:25,nav:!0,dots:!1,autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,responsive:{0:{items:1},400:{items:1},700:{items:1},1e3:{items:1},1200:{items:2},1400:{items:2},1600:{items:2}}});var i,acc=document.getElementsByClassName("accordion");for(i=0;i<acc.length;i++)acc[i].addEventListener("click",(function(){this.classList.toggle("active");var e=this.nextElementSibling;e.style.maxHeight?e.style.maxHeight=null:e.style.maxHeight=e.scrollHeight+"px"}));$(".about_clients_owl").owlCarousel({loop:!0,margin:10,nav:!1,dots:!0,autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,responsive:{0:{items:1},600:{items:1},1e3:{items:1}}}),$(".projects_tab").pTab({pTab:".tab-list",pTabElem:"li",pContent:".tab-content",pClass:"aktif",pDuration:500,pEffect:"show"}),$(".services_bottom_owl").owlCarousel({loop:!0,margin:25,nav:!1,dots:!0,autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,responsive:{0:{items:1},400:{items:1},700:{items:2},1e3:{items:3},1200:{items:3},1400:{items:3},1600:{items:3}}}),$(".projects_bottom_owl").owlCarousel({loop:!0,margin:25,nav:!1,dots:!0,autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,responsive:{0:{items:1},400:{items:1},700:{items:2},1e3:{items:3},1200:{items:3},1400:{items:3},1600:{items:3}}});