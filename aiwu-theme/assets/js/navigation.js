/**
 * AIWU Navigation
 *
 * Handles mobile menu toggle and dropdown accessibility
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
    }

    /**
     * Dropdown Accessibility
     * Adds keyboard navigation for dropdown menus
     */
    function initDropdownAccessibility() {
        const navItems = document.querySelectorAll('.aiwu-nav__item');

        navItems.forEach(function(item) {
            const link = item.querySelector('.aiwu-nav__link');
            const dropdown = item.querySelector('.aiwu-dropdown');

            if (!link || !dropdown) {
                return;
            }

            // Show dropdown on focus
            link.addEventListener('focus', function() {
                closeAllDropdowns();
                item.classList.add('is-focused');
            });

            // Handle keyboard navigation
            link.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    const isOpen = item.classList.contains('is-focused');
                    closeAllDropdowns();

                    if (!isOpen) {
                        item.classList.add('is-focused');
                        const firstLink = dropdown.querySelector('a');
                        if (firstLink) {
                            firstLink.focus();
                        }
                    }
                }

                if (e.key === 'Escape') {
                    item.classList.remove('is-focused');
                    link.focus();
                }
            });

            // Handle dropdown link keyboard navigation
            const dropdownLinks = dropdown.querySelectorAll('a');
            dropdownLinks.forEach(function(dropdownLink, index) {
                dropdownLink.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape') {
                        item.classList.remove('is-focused');
                        link.focus();
                    }

                    if (e.key === 'Tab' && !e.shiftKey && index === dropdownLinks.length - 1) {
                        item.classList.remove('is-focused');
                    }

                    if (e.key === 'Tab' && e.shiftKey && index === 0) {
                        item.classList.remove('is-focused');
                    }
                });
            });
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', function(e) {
            if (!e.target.closest('.aiwu-nav__item')) {
                closeAllDropdowns();
            }
        });
    }

    /**
     * Close all dropdowns
     */
    function closeAllDropdowns() {
        document.querySelectorAll('.aiwu-nav__item.is-focused').forEach(function(item) {
            item.classList.remove('is-focused');
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

        let lastScroll = 0;
        const scrollThreshold = 100;

        window.addEventListener('scroll', function() {
            const currentScroll = window.pageYOffset;

            if (currentScroll > scrollThreshold) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }

            lastScroll = currentScroll;
        }, { passive: true });
    }

    /**
     * Initialize all navigation functionality
     */
    function init() {
        initMobileMenu();
        initDropdownAccessibility();
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
