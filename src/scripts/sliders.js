import Swiper, { Navigation, Scrollbar } from 'swiper';
import 'swiper/css';
import 'swiper/css/scrollbar';
var $ = require("jquery");
$(function () {
    function convertRemToPixels(rem) {
        return (rem * parseFloat(getComputedStyle(document.documentElement).fontSize)) * 2;
    }


    // Other services carousel
    const otherServices = new Swiper('.other-services-listings', {
        modules: [Scrollbar, Navigation],
        slidesPerView: 1.1,
        spaceBetween: convertRemToPixels(20),
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
            prevEl: '.services-carousel-prev',
            nextEl: '.services-carousel-next',
        },
        scrollbar: {
            el: '.services-scrollbar',
            draggable: true,
        },
    });

    const aboutGallerySlider = new Swiper('#gallery', {
        modules: [Scrollbar, Navigation],
        slidesPerView: 1.1,
        spaceBetween: convertRemToPixels(20),

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
            prevEl: '.gallery-carousel-prev',
            nextEl: '.gallery-carousel-next',
        },
        scrollbar: {
            el: '.gallery-scrollbar',
            draggable: true,
        },
    });
})