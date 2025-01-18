import './bootstrap';
import GLightbox from "glightbox";
import Alpine from 'alpinejs';

let lightbox;
function initLightbox() {
    if (lightbox) {
        lightbox.destroy();
    }
    lightbox = GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: false,
        autoplayVideos: false,
    });
}

function initialize() {
    initLightbox();
}

document.addEventListener("DOMContentLoaded", () => {
    initialize();
});

document.addEventListener("livewire:navigated", () => {
    navBarSticky();
    initialize();
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
