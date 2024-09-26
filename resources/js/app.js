import './bootstrap';
import GLightbox from 'glightbox';
import AOS from 'aos';
import Swiper from 'swiper/bundle';  // Import Swiper.js

AOS.init({
    duration: 800,
    easing: 'slide',
    once: true
});

const lightbox = GLightbox({
    selector: '.glightbox'
});

import Alpine from 'alpinejs';
import {EffectCoverflow} from "swiper/modules";
window.Alpine = Alpine;
Alpine.start();

// Swiper Initialization
const swiper = new Swiper('.swiper-container-department-page', {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 3,
        slideShadows: true
    },
    keyboard: {
        enabled: true
    },
    loop: true,
    autoplay: {
        delay: 2000, // Set the delay time between slides (in ms)
        disableOnInteraction: false // Keep autoplay running even after user interaction
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    breakpoints: {
        640: {
            slidesPerView: 2
        },
        768: {
            slidesPerView: 2
        },
        1024: {
            slidesPerView: 2
        },
        1560: {
            slidesPerView: 3
        }
    }
});

