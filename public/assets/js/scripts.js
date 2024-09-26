
// Drop Menu Accordion
$(function () {
let acc = document.querySelectorAll(".accordion");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    let panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

});
// Drop Menu Accordion


$(function () {

    "use strict";


    var testim = new Swiper(".testimonials-ds .testim-swiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1500,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

});


$(function () {
    var width = $(window).width();
    if (width > 991) {

        "use strict";

        $(function () {
            let cards = gsap.utils.toArray(".cards .card-item");
    
            let stickDistance = 0;
    
            let firstCardST = ScrollTrigger.create({
                trigger: cards[0],
                start: "center center"
            });
    
            let lastCardST = ScrollTrigger.create({
                trigger: cards[cards.length - 1],
                start: "bottom bottom"
            });
    
            cards.forEach((card, index) => {
                // var scale = 1 - (cards.length - index) * 0.055;
                var scale = 1 - (cards.length - index) * 0.025;
                let scaleDown = gsap.to(card, { scale: scale, 'transform-origin': '"50% ' + (lastCardST.start + stickDistance) + '"' });
    
                ScrollTrigger.create({
                    trigger: card,
                    start: "center center",
                    end: () => lastCardST.start + stickDistance,
                    pin: true,
                    pinSpacing: false,
                    ease: "none",
                    animation: scaleDown,
                    toggleActions: "restart none none reverse"
                });
            });
        });

    }
});


// Brand Logos
      $(document).ready(function() {
            $("#brandslider").owlCarousel({
                items: 8,
                autoplay: false,
                margin: 100,
                autoplayTimeout: 3000,
                smartSpeed: 3000,
                // center: true,
                loop: true,
                nav: false,
                slideTransition: 'linear',
                autoplay: true,
                navText: [" < i class = 'fas fa-long-arrow-alt-left' > < /i>"," < i class = 'fas fa-long-arrow-alt-right' > < /i>" ]
                });
            });


// Brand Logos


// Our Team
      $(document).ready(function() {
            $("#ourteam").owlCarousel({
                items:1,
                margin: 50,
                autoplayHoverPause:true,
                autoplayTimeout: 9000,
                smartSpeed: 3000,
                center: true,
                loop: true,
                nav: false,
                // slideTransition: 'linear',
                autoplay: true,
                navText: [" < i class = 'fas fa-long-arrow-alt-left' > < /i>"," < i class = 'fas fa-long-arrow-alt-right' > < /i>" ]
                });
            });

// Our Team
