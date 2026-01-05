/**
 * AIWU Theme Toggle
 *
 * Handles dark/light theme switching with localStorage persistence
 *
 * @package AIWU
 * @since 1.0.0
 */

(function() {
    'use strict';

    const STORAGE_KEY = 'aiwu-theme';
    const DARK_THEME = 'dark';
    const LIGHT_THEME = 'light';

    /**
     * Get saved theme from localStorage or default to dark
     * @returns {string} Theme name ('dark' or 'light')
     */
    function getSavedTheme() {
        return localStorage.getItem(STORAGE_KEY) || DARK_THEME;
    }

    /**
     * Save theme to localStorage
     * @param {string} theme Theme name
     */
    function saveTheme(theme) {
        localStorage.setItem(STORAGE_KEY, theme);
    }

    /**
     * Apply theme to document
     * @param {string} theme Theme name
     */
    function applyTheme(theme) {
        document.documentElement.setAttribute('data-theme', theme);
    }

    /**
     * Toggle between dark and light themes
     * @returns {string} New theme name
     */
    function toggleTheme() {
        const currentTheme = document.documentElement.getAttribute('data-theme') || DARK_THEME;
        const newTheme = currentTheme === DARK_THEME ? LIGHT_THEME : DARK_THEME;

        applyTheme(newTheme);
        saveTheme(newTheme);

        return newTheme;
    }

    /**
     * Initialize theme toggle buttons
     */
    function initThemeToggle() {
        const toggleButtons = document.querySelectorAll('[data-theme-toggle]');

        toggleButtons.forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const newTheme = toggleTheme();

                // Update aria-label for accessibility
                const label = newTheme === DARK_THEME
                    ? 'Switch to light theme'
                    : 'Switch to dark theme';
                button.setAttribute('aria-label', label);
            });
        });
    }

    /**
     * Initialize on DOM ready
     */
    function init() {
        // Theme is already applied via inline script in head
        // Just initialize the toggle buttons
        initThemeToggle();
    }

    // Run on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Expose toggle function globally if needed
    window.aiwuTheme = {
        toggle: toggleTheme,
        get: getSavedTheme,
        set: function(theme) {
            applyTheme(theme);
            saveTheme(theme);
        }
    };
})();
