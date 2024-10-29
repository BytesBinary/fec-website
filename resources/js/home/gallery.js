import GLightbox from 'glightbox';
import Swiper from "swiper/bundle";
import {EffectCoverflow} from "swiper/modules";
document.addEventListener("livewire:navigated", function() {
    GLightbox({
        selector: '.glightbox',
        touchNavigation: true, // Add touch navigation for mobile support
        loop: true,            // Enable looping through images
        zoomable: true,        // Allow zooming on images
        autoplayVideos: true   // In case you have videos in the future
    });

    new Swiper('.swiper-container-gallery', {
        loop: true,                    // Enable continuous loop mode
        spaceBetween : 0,
        autoplay: {
            delay: 3000,               // Set autoplay delay (3 seconds)
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
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
    });
});
