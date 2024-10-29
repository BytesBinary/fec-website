import './bootstrap';
import Alpine from 'alpinejs';

document.addEventListener("livewire:navigated", function() {
    window.Alpine = Alpine;
    Alpine.start();
});


