import Swiper from "swiper/bundle";
document.addEventListener("livewire:navigated", function() {
    new Swiper('.clubs-page-swiper', {
        loop: true,
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        fadeEffect: true,
        spaceBetween: 40,
        autoplay: {
            delay: 3000,
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
