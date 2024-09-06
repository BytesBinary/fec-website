import './bootstrap';

import $ from 'jquery';
window.$ = $;
window.jQuery = $;
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import 'datatables.net';
import 'datatables.net-bs5/js/dataTables.bootstrap5.min.js';
import AOS from 'aos';
import GLightbox from 'glightbox';
import Swiper from 'swiper/bundle';
import Swal from 'sweetalert2'

$(document).ready(function() {
    // Short details counter
    const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;

            const $el = $(entry.target);
            const countTo = +$el.data('count');
            const duration = 2000;
            const startTime = performance.now();

            const updateCount = (currentTime) => {
                const progress = Math.min((currentTime - startTime) / duration, 1);
                $el.text(Math.floor(progress * countTo));
                if (progress < 1) requestAnimationFrame(updateCount);
            };

            requestAnimationFrame(updateCount);
            obs.unobserve(entry.target);
        });
    }, { threshold: 0.1 });
    $('.count-up').each(function() {
        observer.observe(this);
    });

    // Fixed navbar on scroll
    const $header = $('#header');
    const checkScroll = () => {
        $header.toggleClass('scrolled', $(window).scrollTop() > 50);
    };
    $(window).on('scroll', checkScroll);
    checkScroll(); // Initial check

    // Show password when click in the eye icon
    $(document).ready(function() {
        $('#togglePassword').on('click', function() {
            const type = $('#password').attr('type') === 'password' ? 'text' : 'password';
            $('#password').attr('type', type);
            $('#eyeIcon').toggleClass('bi-eye bi-eye-slash');
        });
    });
});




/*--------------------------------------------------*/
/*-----------------------------------------------
    #   Initialize Swiper with custom pagination
    #   Do not write code the below section. Write your code in the above function
    #   Please avoid to write code in this section
--------------------------------------------------*/
/*--------------------------------------------------*/
(function () {
    "use strict";

    // Toggle scrolled class on body
    function toggleScrolled() {
        const $body = $("body");
        const $header = $("#header");

        if ($header.hasClass("scroll-up-sticky") || $header.hasClass("sticky-top") || $header.hasClass("fixed-top")) {
            $(window).scrollTop() > 100
                ? $body.addClass("scrolled")
                : $body.removeClass("scrolled");
        }
    }

    // Toggle mobile nav
    function toggleMobileNav() {
        $("body").toggleClass("mobile-nav-active");
        $(".mobile-nav-toggle").toggleClass("bi-list bi-x");
    }

    // Initialize functions on load
    function onLoadInit() {
        // Toggle scroll top button visibility
        function toggleScrollTop() {
            const $scrollTop = $(".scroll-top");
            if ($scrollTop.length) {
                $(window).scrollTop() > 100
                    ? $scrollTop.addClass("active")
                    : $scrollTop.removeClass("active");
            }
        }

        // Initialize AOS
        AOS.init({
            duration: 700,
            easing: "ease-in-out",
            once: true,
        });

        // Initialize GLightbox
        GLightbox({ selector: ".glightbox" });

        // Initialize Swiper sliders
        $(".init-swiper").each(function () {
            let config = JSON.parse($(this).find(".swiper-config").text().trim());
            $(this).hasClass("swiper-tab")
                ? initSwiperWithCustomPagination(this, config)
                : new Swiper(this, config);
        });

        // Correct scrolling position for hash links
        if (window.location.hash) {
            const $section = $(window.location.hash);
            if ($section.length) {
                setTimeout(() => {
                    $("html, body").animate({
                        scrollTop: $section.offset().top - parseInt($section.css("scrollMarginTop")),
                    }, "smooth");
                }, 100);
            }
        }

        // Navmenu scrollspy
        function navmenuScrollspy() {
            $(".navmenu a").each(function () {
                if (!this.hash) return;
                const $section = $(this.hash);
                if ($section.length) {
                    const position = $(window).scrollTop() + 200;
                    $(this).toggleClass("active", position >= $section.offset().top && position <= $section.offset().top + $section.outerHeight());
                    $(".navmenu a.active").not(this).removeClass("active");
                }
            });
        }

        $(window).on("load", navmenuScrollspy);
        $(document).on("scroll", navmenuScrollspy);

        // Remove preloader
        $("#preloader").remove();
    }

    // Event handlers
    $(document).on("scroll", function () {
        toggleScrolled();
        toggleScrollTop();
    });

    $(window).on("load", onLoadInit);

    $(".mobile-nav-toggle").on("click", toggleMobileNav);
    $("#navmenu a").on("click", function () {
        if ($("body").hasClass("mobile-nav-active")) {
            toggleMobileNav();
        }
    });

    $(".navmenu .toggle-dropdown").on("click", function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("active").next().toggleClass("dropdown-active");
        e.stopImmediatePropagation();
    });

    $(".faq-item h3, .faq-item .faq-toggle").on("click", function () {
        $(this).parent().toggleClass("faq-active");
    });

    $(".scroll-top").on("click", function (e) {
        e.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "smooth");
    });
})();

// DataTables
$(document).ready(function() {
     $('#use-datatable').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "lengthMenu": [10, 25, 50, 75, 100, 500, 1000, 10000], // Entry select
        "pagingType": "full_numbers", // Enables First, Previous, Next, Last buttons
        "columnDefs": [{
            "targets": 0,
            "orderable": false
        }]
    });
});

