import Swiper from 'swiper';
import 'swiper/css';
var $ = require("jquery");
$(function () {

    // Other services carousel
    const otherServices = new Swiper('.other-services-listings', {
        slidesPerView: 1.1,
        spaceBetween: 20,
        breakpoints: {
            576: {
                slidesPerView: 1.25,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2.5,
            },
            1200: {
                slidesPerView: 3,
            },
        },
        navigation: {
            prevEl: '.other-services-prev',
            nextEl: '.other-services-next',
        },
        scrollbar: {
            el: '.other-services-scrollbar',
            draggable: true,
        },
    });
})