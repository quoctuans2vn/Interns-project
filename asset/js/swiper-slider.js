//Swiper object
var swiper = new Swiper('.swiper-container.main-swiper-container', {
    speed: 2000,
    parallax: true,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 5000,
    },
});
// Logo swiper
var logoswiper = new Swiper('.swiper-container.logos-swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    loop: true,
    roundLengths: true,   
    // Default slide
    slidesPerView: 6,
    spaceBetween: 15,
    // Responsive slide
    breakpoints: {
        // when window width is <= 768px
        768: {
            slidesPerView: 2,
        },
        // when window width is <= 992px
        992: {
            slidesPerView: 3,
        },
        // when window width is <= 1200px
        1200: {
            slidesPerView: 4,
        },
    },
});
$(document).ready(function () {

});