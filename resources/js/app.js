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
        if (window.scrollY > 250) {
            navBar.classList.remove('absolute', 'left-1/2', 'transform', '-translate-x-1/2', '-translate-y-1/2');
            navBar.classList.add('sticky', 'top-0', 'left-0', 'transform-none');
        } else {
            navBar.classList.add('absolute', 'left-1/2', 'transform', '-translate-x-1/2', '-translate-y-1/2');
            navBar.classList.remove('sticky', 'top-0', 'left-0', 'transform-none');
        }
    });
}
