import './bootstrap';
import GLightbox from "glightbox";
import Alpine from 'alpinejs';

let lightbox;

// Function to initialize GLightbox
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

// Function to initialize Alpine.js
function initAlpine() {
    if (!window.Alpine || !Alpine.initialized) {
        // Check if Alpine is not initialized and then initialize it
        window.Alpine = Alpine;
        Alpine.start();
        console.log("Alpine.js has been initialized.");
    } else {
        console.log("Alpine.js is already initialized.");
    }
}

// Initialize both Alpine.js and GLightbox
function initialize() {
    initAlpine(); // Ensure Alpine.js is initialized
    initLightbox(); // Initialize GLightbox
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
