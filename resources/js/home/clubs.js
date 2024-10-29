import Swiper from "swiper/bundle";
import {EffectCoverflow} from "swiper/modules";
document.addEventListener("livewire:navigated", function() {
    new Swiper('.clubs-page-swiper', {
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        fadeEffect: true,
        spaceBetween: 25,
        autoplay: {
            delay: 2000,               // Set autoplay delay (3 seconds)
            disableOnInteraction: false
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });
});
