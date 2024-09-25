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
window.Alpine = Alpine;
Alpine.start();

// Swiper Initialization
const swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,  // Keep the center slide visible
    slidesPerView: 3,      // Show three slides (left, center, right)
    spaceBetween: 30,      // Space between slides
    loop: true,            // Enable looping for continuous sliding
    coverflowEffect: {
        rotate: -30,        // Rotate the slides slightly for the 3D effect
        stretch: 0,        // No stretching
        depth: 200,        // Set depth to make the effect more prominent
        modifier: 1,       // Control the intensity of the effect
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,    // Allow pagination to be clickable
    },
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    slideToClickedSlide: true,          // Click slide to make it active
});




