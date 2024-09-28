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
    selector: '.glightbox',
    touchNavigation: true, // Add touch navigation for mobile support
    loop: true,            // Enable looping through images
    zoomable: true,        // Allow zooming on images
    autoplayVideos: true   // In case you have videos in the future
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

const swipers = new Swiper('.swiper-container-gallery', {
    loop: true,                    // Enable continuous loop mode
    spaceBetween : 0,
    autoplay: {
        delay: 3000,               // Set autoplay delay (3 seconds)
        disableOnInteraction: false
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    breakpoints: {                 // Responsive breakpoints
        640: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
        1024: {
            slidesPerView: 4,
        },
    }
})

