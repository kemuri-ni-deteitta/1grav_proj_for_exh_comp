/**
 * Oxygen-style Navigation Initialization
 * Includes Dropotron dropdown functionality and Skel.js mobile navigation
 */

(function($) {
    'use strict';

    // Configuration
    var config = {
        // Dropotron settings
        dropotron: {
            selector: '[data-dropotron]',
            mode: 'fade',
            speed: 350,
            easing: 'easeOut',
            alignment: 'left',
            offset: [0, 0],
            noOpenerFade: true,
            hoverDelay: 0,
            hideDelay: 0
        },
        
        // Mobile navigation settings
        mobile: {
            selector: '[data-layer="mobileNav"]',
            toggleSelector: '[data-action="toggleMobileNav"]',
            closeSelector: '[data-action="closeMobileNav"]',
            breakpoint: 980
        },
        
        // Responsive breakpoints
        breakpoints: {
            xlarge: '(max-width: 1680px)',
            large: '(max-width: 1280px)',
            medium: '(max-width: 980px)',
            small: '(max-width: 736px)',
            xsmall: '(max-width: 480px)'
        }
    };

    // Main initialization function
    function init() {
        
        // Initialize Skel.js for responsive behavior
        if (typeof skel !== 'undefined') {
            skel.breakpoints({
                xlarge: config.breakpoints.xlarge,
                large: config.breakpoints.large,
                medium: config.breakpoints.medium,
                small: config.breakpoints.small,
                xsmall: config.breakpoints.xsmall
            });
            
            // Initialize Skel layers
            skel.on('+medium', function() {
                // Mobile mode
                initMobileNav();
            });
            
            skel.on('-medium', function() {
                // Desktop mode
                initDesktopNav();
            });
        } else {
            // Fallback if Skel.js is not available
            initResponsiveNav();
        }
        
        // Initialize dropdowns if enabled
        if ($('#main-nav').data('dropdowns') !== 'false') {
            initDropotron();
        }
        
        // Initialize mobile navigation if enabled
        if ($('#main-nav').data('mobile') !== 'false') {
            initMobileNav();
        }
        
        // Initialize desktop navigation
        initDesktopNav();
    }

    // Initialize Dropotron dropdowns
    function initDropotron() {
        if (typeof $.fn.dropotron === 'undefined') {
            console.warn('Dropotron not loaded, falling back to CSS dropdowns');
            return;
        }
        
        $(config.dropotron.selector).dropotron({
            mode: config.dropotron.mode,
            speed: config.dropotron.speed,
            easing: config.dropotron.easing,
            alignment: config.dropotron.alignment,
            offset: config.dropotron.offset,
            noOpenerFade: config.dropotron.noOpenerFade,
            hoverDelay: config.dropotron.hoverDelay,
            hideDelay: config.dropotron.hideDelay,
            onOpen: function() {
                // Add active class to parent
                $(this).addClass('active');
            },
            onClose: function() {
                // Remove active class from parent
                $(this).removeClass('active');
            }
        });
    }

    // Initialize mobile navigation
    function initMobileNav() {
        var $nav = $('#main-nav');
        var $mobilePanel = $(config.mobile.selector);
        var $toggle = $(config.mobile.toggleSelector);
        var $close = $(config.mobile.closeSelector);
        
        // Toggle mobile navigation
        $toggle.on('click', function(e) {
            e.preventDefault();
            toggleMobileNav();
        });
        
        // Close mobile navigation
        $close.on('click', function(e) {
            e.preventDefault();
            closeMobileNav();
        });
        
        // Close on escape key
        $(document).on('keydown', function(e) {
            if (e.keyCode === 27) { // Escape key
                closeMobileNav();
            }
        });
        
        // Close on click outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('#main-nav').length && $mobilePanel.hasClass('active')) {
                closeMobileNav();
            }
        });
        
        // Mobile dropdown toggles
        $mobilePanel.on('click', '.has-dropdown > .nav-link', function(e) {
            e.preventDefault();
            var $item = $(this).parent();
            var $dropdown = $item.find('> .dropdown-menu');
            
            $item.toggleClass('expanded');
            $dropdown.slideToggle(300);
        });
        
        function toggleMobileNav() {
            $mobilePanel.toggleClass('active');
            $('body').toggleClass('mobile-nav-open');
            
            if ($mobilePanel.hasClass('active')) {
                $mobilePanel.fadeIn(300);
            } else {
                $mobilePanel.fadeOut(300);
            }
        }
        
        function closeMobileNav() {
            $mobilePanel.removeClass('active');
            $('body').removeClass('mobile-nav-open');
            $mobilePanel.fadeOut(300);
        }
    }

    // Initialize desktop navigation
    function initDesktopNav() {
        var $nav = $('#main-nav');
        var $desktop = $nav.find('.nav-desktop');
        
        // Show desktop navigation
        $desktop.show();
        
        // Hover effects for dropdowns (fallback if Dropotron is disabled)
        if ($('#main-nav').data('dropdowns') === 'false') {
            $desktop.find('.has-dropdown').hover(
                function() {
                    $(this).addClass('hover');
                    $(this).find('> .dropdown-menu').stop().fadeIn(200);
                },
                function() {
                    $(this).removeClass('hover');
                    $(this).find('> .dropdown-menu').stop().fadeOut(200);
                }
            );
        }
        
        // Active page highlighting
        $desktop.find('.nav-link.active').parent().addClass('current');
    }

    // Fallback responsive navigation (without Skel.js)
    function initResponsiveNav() {
        var $nav = $('#main-nav');
        var $mobilePanel = $(config.mobile.selector);
        
        // Check if we're in mobile mode
        function checkMobile() {
            if (window.innerWidth <= 980) {
                $nav.addClass('mobile-mode');
                $mobilePanel.hide();
            } else {
                $nav.removeClass('mobile-mode');
                $mobilePanel.show();
            }
        }
        
        // Check on load and resize
        checkMobile();
        $(window).on('resize', checkMobile);
    }

    // Utility functions
    function debounce(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }

    // Initialize when DOM is ready
    $(document).ready(function() {
        init();
    });

    // Re-initialize on window resize (debounced)
    $(window).on('resize', debounce(function() {
        // Re-initialize dropdowns if needed
        if ($('#main-nav').data('dropdowns') !== 'false' && typeof $.fn.dropotron !== 'undefined') {
            $(config.dropotron.selector).dropotron('destroy');
            initDropotron();
        }
    }, 250));

})(jQuery); 