import './bootstrap';
import GLightbox from 'glightbox';
import AOS from 'aos';

AOS.init({
    duration: 800,
    easing: 'slide',
    once: true
});

const lightbox = GLightbox({
    selector: '.glightbox' 
});

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
