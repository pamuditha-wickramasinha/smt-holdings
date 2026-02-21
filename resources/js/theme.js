/**
 * Theme JavaScript - Main Theme Functionality
 * Professional Construction Website Theme
 * 
 * Features:
 * - Smooth scrolling and navigation
 * - Form validation and submission
 * - Interactive animations
 * - Mobile menu handling
 * - Counter animations
 * - Carousel/Slider functionality
 * - Lazy loading for images
 */

// ==========================================================================
// 1. SELF-EXECUTING FUNCTION WRAPPER
// ==========================================================================

(function () {
    'use strict';

    // ==========================================================================
    // 2. CONFIGURATION
    // ==========================================================================

    const config = {
        animationDuration: 300,
        scrollDuration: 1000,
        counterDuration: 2000,
        debounceDelay: 250
    };

    // ==========================================================================
    // 3. UTILITY FUNCTIONS
    // ==========================================================================

    /**
     * Debounce function for performance optimization
     * @param {Function} func - Function to debounce
     * @param {Number} wait - Wait time in milliseconds
     * @returns {Function}
     */
    const debounce = (func, wait = config.debounceDelay) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    };

    /**
     * Throttle function for performance optimization
     * @param {Function} func - Function to throttle
     * @param {Number} limit - Limit time in milliseconds
     * @returns {Function}
     */
    const throttle = (func, limit = config.debounceDelay) => {
        let inThrottle;
        return function (...args) {
            if (!inThrottle) {
                func.apply(this, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    };

    /**
     * Smooth scroll to element
     * @param {Element} element - Target element
     * @param {Number} duration - Animation duration
     */
    const smoothScroll = (element, duration = config.scrollDuration) => {
        if (!element) return;

        const target = element.getAttribute('href');
        if (target.startsWith('#')) {
            const targetElement = document.querySelector(target);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        }
    };

    /**
     * Check if element is in viewport
     * @param {Element} element - Element to check
     * @returns {Boolean}
     */
    const isInViewport = (element) => {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    };

    // ==========================================================================
    // 4. SMOOTH SCROLLING
    // ==========================================================================

    const initSmoothScrolling = () => {
        const links = document.querySelectorAll('a[href^="#"]');
        links.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                smoothScroll(link);
            });
        });
    };

    // ==========================================================================
    // 5. MOBILE MENU HANDLING
    // ==========================================================================

    const initMobileMenu = () => {
        const toggleButton = document.getElementById('mobile-side-drawer');
        const headerNav = document.querySelector('.header-nav');

        if (toggleButton && headerNav) {
            toggleButton.addEventListener('click', function () {
                this.classList.toggle('collapsed');
                headerNav.classList.toggle('collapse');
            });

            // Close menu when link is clicked
            const navLinks = headerNav.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    toggleButton.classList.add('collapsed');
                    headerNav.classList.add('collapse');
                });
            });
        }
    };

    // ==========================================================================
    // 6. COUNTER ANIMATION
    // ==========================================================================

    const initCounters = () => {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            const target = parseInt(counter.textContent);
            const increment = target / (config.counterDuration / 10);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    counter.textContent = Math.floor(current);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.textContent = target;
                }
            };

            // Start counter when element comes into view
            if (isInViewport(counter)) {
                updateCounter();
            } else {
                window.addEventListener('scroll', throttle(() => {
                    if (isInViewport(counter) && counter.textContent !== target.toString()) {
                        updateCounter();
                    }
                }));
            }
        });
    };

    // ==========================================================================
    // 7. FORM HANDLING
    // ==========================================================================

    const initForms = () => {
        const forms = document.querySelectorAll('form');

        forms.forEach(form => {
            form.addEventListener('submit', function (e) {
                // Add basic validation
                const inputs = this.querySelectorAll('input[required], textarea[required]');
                let isValid = true;

                inputs.forEach(input => {
                    if (!input.value.trim()) {
                        isValid = false;
                        input.classList.add('error');
                    } else {
                        input.classList.remove('error');
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                }
            });
        });
    };

    // ==========================================================================
    // 8. CONTACT SIDEBAR TOGGLE
    // ==========================================================================

    const initContactSidebar = () => {
        const contactToggle = document.querySelector('.contact-slide-show');
        const contactSidebar = document.querySelector('.contact-slide-hide');
        const contactClose = document.querySelector('.contact_close');

        if (contactToggle && contactSidebar) {
            contactToggle.addEventListener('click', (e) => {
                e.preventDefault();
                contactSidebar.classList.toggle('active');
            });
        }

        if (contactClose && contactSidebar) {
            contactClose.addEventListener('click', (e) => {
                e.preventDefault();
                contactSidebar.classList.remove('active');
            });
        }

        // Close sidebar when clicking outside
        document.addEventListener('click', (e) => {
            if (contactSidebar &&
                !contactSidebar.contains(e.target) &&
                !contactToggle?.contains(e.target)) {
                contactSidebar.classList.remove('active');
            }
        });
    };

    // ==========================================================================
    // 9. SCROLL TO TOP BUTTON
    // ==========================================================================

    const initScrollTopButton = () => {
        const scrollTopButton = document.querySelector('.scroltop');

        if (!scrollTopButton) return;

        window.addEventListener('scroll', throttle(() => {
            if (window.scrollY > 300) {
                scrollTopButton.classList.add('show');
            } else {
                scrollTopButton.classList.remove('show');
            }
        }));

        scrollTopButton.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    };

    // ==========================================================================
    // 10. LAZY LOADING IMAGES
    // ==========================================================================

    const initLazyLoadingImages = () => {
        const images = document.querySelectorAll('img[data-src]');

        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.add('loaded');
                        imageObserver.unobserve(img);
                    }
                });
            });

            images.forEach(img => imageObserver.observe(img));
        }
    };

    // ==========================================================================
    // 11. STICKY HEADER
    // ==========================================================================

    const initStickyHeader = () => {
        const header = document.querySelector('.sticky-header');

        if (!header) return;

        window.addEventListener('scroll', throttle(() => {
            if (window.scrollY > 100) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        }));
    };

    // ==========================================================================
    // 12. ACTIVE LINK HIGHLIGHTING
    // ==========================================================================

    const initActiveLinkHighlight = () => {
        const navLinks = document.querySelectorAll('.header-nav a');
        const currentPath = window.location.pathname;

        navLinks.forEach(link => {
            if (link.href.includes(currentPath)) {
                link.parentElement.classList.add('active');
            }
        });
    };

    // ==========================================================================
    // 13. SEARCH FORM HANDLING
    // ==========================================================================

    const initSearchForm = () => {
        const searchForm = document.getElementById('searchform');
        const searchClose = document.querySelector('#search .close');

        if (searchClose) {
            searchClose.addEventListener('click', (e) => {
                e.preventDefault();
                document.getElementById('search')?.style.display = 'none';
            });
        }

        if (searchForm) {
            const searchInput = searchForm.querySelector('input[type="search"]');
            if (searchInput) {
                searchInput.addEventListener('keyup', debounce(() => {
                    // Can add autocomplete or suggestions here
                }));
            }
        }
    };

    // ==========================================================================
    // 14. MASONRY FILTER (If using Isotope library)
    // ==========================================================================

    const initMasonryFilter = () => {
        // Check if Isotope is available
        if (typeof Isotope === 'undefined') return;

        const filterButtons = document.querySelectorAll('.masonry-filter a');
        const portfolioContainer = document.querySelector('.portfolio-wrap');

        if (!portfolioContainer) return;

        const iso = new Isotope(portfolioContainer, {
            itemSelector: '.masonry-item',
            layoutMode: 'masonry'
        });

        filterButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                filterButtons.forEach(btn => btn.parentElement.classList.remove('active'));
                button.parentElement.classList.add('active');

                const filterValue = button.getAttribute('data-filter');
                iso.arrange({ filter: filterValue });
            });
        });
    };

    // ==========================================================================
    // 15. TOOLTIP INITIALIZATION
    // ==========================================================================

    const initTooltips = () => {
        const tooltips = document.querySelectorAll('[data-tooltip]');

        tooltips.forEach(element => {
            element.addEventListener('mouseenter', function () {
                const tooltipText = this.getAttribute('data-tooltip');
                const tooltip = document.createElement('div');
                tooltip.className = 'tooltip';
                tooltip.textContent = tooltipText;
                document.body.appendChild(tooltip);

                const rect = this.getBoundingClientRect();
                tooltip.style.top = (rect.top - tooltip.offsetHeight - 10) + 'px';
                tooltip.style.left = (rect.left + rect.width / 2 - tooltip.offsetWidth / 2) + 'px';
            });

            element.addEventListener('mouseleave', () => {
                document.querySelectorAll('.tooltip').forEach(t => t.remove());
            });
        });
    };

    // ==========================================================================
    // 16. INITIALIZE ALL
    // ==========================================================================

    const initAll = () => {
        console.log('Initializing Theme...');
        initSmoothScrolling();
        initMobileMenu();
        initCounters();
        initForms();
        initContactSidebar();
        initScrollTopButton();
        initLazyLoadingImages();
        initStickyHeader();
        initActiveLinkHighlight();
        initSearchForm();
        initMasonryFilter();
        initTooltips();
        console.log('Theme Initialized Successfully!');
    };

    // ==========================================================================
    // 17. DOM READY & LOAD EVENTS
    // ==========================================================================

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAll);
    } else {
        initAll();
    }

    // Initialize on page load (for cached scripts)
    window.addEventListener('load', () => {
        console.log('Page fully loaded');
        // Re-initialize counters and animations on load
        initCounters();
    });

})();
