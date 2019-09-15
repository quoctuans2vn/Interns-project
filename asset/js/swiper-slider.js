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
//Similar products slider
var similarSlider = new Swiper('.similar-slider', {
    slidesPerView: 6,
    spaceBetween: 15,
    loop: true,
    loopedSlides: 50,
    roundLengths: true,
    slidesPerGroup: 2,
    breakpoints: {
        1200: {
            slidesPerView: 4
        },
        991: {
            slidesPerView: 3
        },
        768: {
            slidesPerView: 2
        }
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
    },

    // Navigation arrows
    navigation: {
        nextEl: '#similarNext',
        prevEl: '#similarPrev',
    },
});
$("#quickView").on('shown.bs.modal', function (e){
    var quickViewSlider = new Swiper('#quickViewSlider',{
        loop: true,
        on: {
            slideChangeTransitionStart: highlightThumb
        }
    });
});
$("#quickView").on('hidden.bs.modal', function (e){
    quickViewSlider.destroy();
});
function highlightThumb(){
    var sliderId = this.$el.attr('id');
    var thumbs = $('.swiper-thumbs[data-swiper="#' + sliderId + '"]');
    if (thumbs.length > 0) {
        thumbs.find(".swiper-thumb-item.active").removeClass('active');
        thumbs.find(".swiper-thumb-item").eq(this.realIndex).addClass('active');
    }
}
$('.swiper-thumb-item').on('click', function (e) {
    e.preventDefault();
    var swiperId = $(this).parents('.swiper-thumbs').data('swiper');
    $(swiperId)[0].swiper.slideToLoop($(this).index())
});
$(document).ready(function(){
});