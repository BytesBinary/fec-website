import Swiper from "swiper/bundle";
import {EffectCoverflow} from "swiper/modules";
document.addEventListener("livewire:navigated", function() {
    new Swiper('.swiper-container-department-page', {
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
            clickable: true,
            dynamicBullets: true,
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
});
