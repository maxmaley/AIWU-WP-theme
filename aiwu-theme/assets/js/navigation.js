/**
 * AIWU Navigation
 *
 * Handles mobile menu toggle and navigation functionality
 *
 * @package AIWU
 * @since 1.0.0
 */

(function() {
    'use strict';

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const toggle = document.querySelector('[data-mobile-toggle]');
        const nav = document.querySelector('.aiwu-nav');

        if (!toggle || !nav) {
            return;
        }

        toggle.addEventListener('click', function() {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

            toggle.setAttribute('aria-expanded', !isExpanded);
            nav.classList.toggle('is-open');

            // Update icon
            const icon = toggle.querySelector('svg');
            if (icon) {
                if (isExpanded) {
                    icon.innerHTML = '<line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/>';
                } else {
                    icon.innerHTML = '<path d="M18 6 6 18"/><path d="m6 6 12 12"/>';
                }
            }
        });

        // Close menu on escape
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && nav.classList.contains('is-open')) {
                toggle.setAttribute('aria-expanded', 'false');
                nav.classList.remove('is-open');
                toggle.focus();
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (nav.classList.contains('is-open') &&
                !e.target.closest('.aiwu-nav') &&
                !e.target.closest('[data-mobile-toggle]')) {
                toggle.setAttribute('aria-expanded', 'false');
                nav.classList.remove('is-open');
            }
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');

                // Skip if it's just "#" or empty
                if (targetId === '#' || targetId.length <= 1) {
                    return;
                }

                const target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();

                    // Close mobile menu if open
                    const nav = document.querySelector('.aiwu-nav');
                    const toggle = document.querySelector('[data-mobile-toggle]');
                    if (nav && nav.classList.contains('is-open')) {
                        nav.classList.remove('is-open');
                        if (toggle) {
                            toggle.setAttribute('aria-expanded', 'false');
                        }
                    }

                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });

                    // Update URL without scrolling
                    history.pushState(null, null, targetId);
                }
            });
        });
    }

    /**
     * Header scroll behavior
     * Adds class when page is scrolled
     */
    function initHeaderScroll() {
        const header = document.querySelector('.aiwu-header');
        if (!header) {
            return;
        }

        const scrollThreshold = 100;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > scrollThreshold) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
        }, { passive: true });
    }

    /**
     * Initialize all navigation functionality
     */
    function init() {
        initMobileMenu();
        initSmoothScroll();
        initHeaderScroll();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
