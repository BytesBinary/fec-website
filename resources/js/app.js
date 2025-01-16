import './bootstrap';
import Alpine from 'alpinejs';

document.addEventListener("livewire:navigated", function() {
    window.Alpine = Alpine;
    Alpine.start();

    // navigation menu
    navBarSticky();
});

document.addEventListener('DOMContentLoaded', () => {
    navBarSticky();
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
