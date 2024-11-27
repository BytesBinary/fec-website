import Swiper from "swiper/bundle";

// Initialize Swiper after Livewire navigates
document.addEventListener("livewire:navigated", function() {
    new Swiper(".swiper-container-residence", {
        loop: true,
        centeredSlides: true,
        grabCursor: true,
        autoplay: {
            delay: 2000, // Autoplay delay (2 seconds)
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
