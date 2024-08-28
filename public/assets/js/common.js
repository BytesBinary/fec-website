document.addEventListener("DOMContentLoaded", function() {
    var header = document.getElementById("header");

    window.addEventListener("scroll", function() {
        if (window.scrollY > 50) { // Adjust this value to define when to trigger the change
            header.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
        }
    });
});
