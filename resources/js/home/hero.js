import Swiper from "swiper/bundle";

document.addEventListener("livewire:navigated", function() {
    new Swiper(".swiper-container-hero-section", {
        loop: true,
        centeredSlides: true,
        grabCursor: false,
        autoplay: {
            delay: 2000,               // Set autoplay delay (3 seconds)
            disableOnInteraction: false
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
