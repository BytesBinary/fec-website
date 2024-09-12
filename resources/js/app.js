import './bootstrap';
import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.min.css';

const lightbox = GLightbox({
    selector: '.glightbox' 
});

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
