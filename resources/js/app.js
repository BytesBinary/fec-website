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
    navBarSticky();
}

document.addEventListener("DOMContentLoaded", () => {
    initialize();
});

document.addEventListener("livewire:navigated", () => {
    initialize();
});

function navBarSticky() {
    const navBar = document.getElementById('navBar');
    const topClasses = ['top-28', 'top-24', 'top-20', 'top-16', 'top-12', 'top-8', 'top-4', 'top-2'];
    const threshold = 150;

    const updateNavBar = (scrollY) => {
        topClasses.forEach(cls => navBar.classList.remove(cls));

        if (scrollY === 0) {
            navBar.classList.add('top-28', 'translate-y-8');
        } else {
            const progress = Math.min(scrollY / threshold, 1);
            const newIndex = Math.round(progress * (topClasses.length - 1));

            navBar.classList.add(topClasses[newIndex]);

            navBar.classList.remove('translate-y-8');
        }
    };

    updateNavBar(window.scrollY);

    window.addEventListener('scroll', () => {
        updateNavBar(window.scrollY);
    });
}


