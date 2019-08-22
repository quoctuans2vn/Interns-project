//Swiper object
var swiper = new Swiper('.swiper-container.main-swiper-container',{
    speed: 2000,
    parallax: true,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
    navigation:{
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 5000,
    },
});
var logoswiper = new Swiper('.swiper-container.logos-swiper-container',{
    speed: 500,
    slidesPerView: 6,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true,
    },
});
$(document).ready(function(){

});
