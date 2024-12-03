import './bootstrap';
import Alpine from 'alpinejs';

document.addEventListener("livewire:navigated", function() {
    window.Alpine = Alpine;
    Alpine.start();
});


import './home/clubs';
import './home/departments';
import './home/gallery';
import './home/hero';
import './home/research';
