import './bootstrap';
import GLightbox from "glightbox";

let lightbox;

function initLightbox() {
    if (lightbox) {
        lightbox.destroy(); // Destroy previous instances if they exist
    }
    lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: false,
        autoplayVideos: false,
    });
}

document.addEventListener("DOMContentLoaded", () => {
    initLightbox();
});

document.addEventListener("livewire:navigated", () => {
    navBarSticky();
    initLightbox();
});

function navBarSticky(){
    const navBar = document.getElementById('navBar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 15) {
            navBar.classList.remove('top-28','translate-y-8');
            navBar.classList.add('top-3');
        } else {
            navBar.classList.remove('top-3');
            navBar.classList.add('top-28','translate-y-8');
        }
    });
}
