import Swiper from "swiper/bundle";

document.addEventListener("livewire:navigated", function() {
    new Swiper(".swiper-container-hero-section", {
        loop: true,
        centeredSlides: true,
        allowTouchMove: false,
        grabCursor: false,
        autoplay: {
            delay: 3000,               // Set autoplay delay (3 seconds)
            disableOnInteraction: false
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});
