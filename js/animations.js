/**
 * Techno Mission International School, Bhagalpur (TMISB)
 * Professional Animation & Micro-Interactions System
 * 
 * Features:
 * - Scroll-driven reveal animations (Intersection Observer)
 * - Automatic cascading / staggered delays for card grids
 * - Reading scroll progress bar
 * - Floating smooth back-to-top button
 * - Button hover sheen & card elevation micro-interactions
 * - Smooth header scroll state
 * - Numerical stat counters
 * - Full accessibility compliance (prefers-reduced-motion)
 */

(function () {
    'use strict';

    // Check if user prefers reduced motion
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function initAnimations() {
        initBackToTopButton();
        initHeaderScrollWatcher();
        initButtonShine();
        initScrollReveals();
        initCounters();
    }

    /* ----------------------------------------------------
       2. Floating Back to Top Button
       ---------------------------------------------------- */
    function initBackToTopButton() {
        let btn = document.getElementById('back-to-top');
        if (!btn) {
            btn = document.createElement('button');
            btn.id = 'back-to-top';
            btn.setAttribute('aria-label', 'Scroll back to top');
            btn.setAttribute('title', 'Scroll to top');
            btn.innerHTML = '<i class="fas fa-arrow-up"></i>';
            document.body.appendChild(btn);
        }

        let scrollTicking = false;
        window.addEventListener('scroll', function () {
            if (!scrollTicking) {
                window.requestAnimationFrame(function () {
                    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
                    if (scrollY > 380) {
                        btn.classList.add('is-visible');
                    } else {
                        btn.classList.remove('is-visible');
                    }
                    scrollTicking = false;
                });
                scrollTicking = true;
            }
        }, { passive: true });

        btn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: prefersReducedMotion ? 'auto' : 'smooth'
            });
        });
    }

    /* ----------------------------------------------------
       3. Header Scrolled State Watcher
       ---------------------------------------------------- */
    function initHeaderScrollWatcher() {
        const headerWrapper = document.querySelector('.sticky.top-0');
        if (!headerWrapper) return;

        window.addEventListener('scroll', function () {
            const scrollY = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollY > 40) {
                headerWrapper.classList.add('header-scrolled');
            } else {
                headerWrapper.classList.remove('header-scrolled');
            }
        }, { passive: true });
    }

    /* ----------------------------------------------------
       4. Button Shimmer / Sheen Effect
       ---------------------------------------------------- */
    function initButtonShine() {
        const buttons = document.querySelectorAll(
            'a.bg-secondary, a.bg-primary, button.bg-secondary, button.bg-primary, .admission-glow'
        );
        buttons.forEach(btn => {
            if (!btn.classList.contains('btn-shine') && !btn.classList.contains('no-shine')) {
                btn.classList.add('btn-shine');
            }
        });
    }

    /* ----------------------------------------------------
       5. Scroll-Driven Reveal Animations (IntersectionObserver)
       ---------------------------------------------------- */
    function initScrollReveals() {
        if (prefersReducedMotion || !('IntersectionObserver' in window)) {
            document.querySelectorAll('.reveal, .reveal-up, .reveal-left, .reveal-right, .reveal-scale, .reveal-fade')
                .forEach(el => el.classList.add('is-revealed'));
            return;
        }

        // Auto-tag sections and card grids across all pages
        autoTagRevealElements();

        const revealElements = document.querySelectorAll(
            '.reveal, .reveal-up, .reveal-left, .reveal-right, .reveal-scale, .reveal-fade'
        );

        const observerOptions = {
            root: null,
            rootMargin: '0px 0px -40px 0px',
            threshold: 0.12
        };

        const revealObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-revealed');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        revealElements.forEach(el => {
            revealObserver.observe(el);
        });
    }

    /* Auto-assign reveal classes and stagger delays to page elements */
    function autoTagRevealElements() {
        // Section titles & subtitles
        document.querySelectorAll('.section-title, .section-title-left').forEach(title => {
            if (!title.classList.contains('reveal-up') && !title.classList.contains('is-revealed')) {
                title.classList.add('reveal-up');
            }
        });

        // Common content card grids
        const gridContainers = document.querySelectorAll(
            '.grid-cols-1, .grid-cols-2, .grid-cols-3, .grid-cols-4, [class*="grid-cols-"]'
        );

        gridContainers.forEach(grid => {
            // Avoid navbar dropdowns or tickers
            if (grid.closest('nav') || grid.closest('header') || grid.closest('.news-ticker-container')) return;

            const children = Array.from(grid.children);
            if (children.length >= 2 && children.length <= 16) {
                children.forEach((child, index) => {
                    if (!child.classList.contains('reveal-up') && !child.classList.contains('is-revealed')) {
                        child.classList.add('reveal-up');
                        const delay = Math.min((index % 4) * 90, 360);
                        if (delay > 0) {
                            child.style.transitionDelay = delay + 'ms';
                        }
                    }
                });
            }
        });

        // Hover cards & interactive cards
        document.querySelectorAll('.card-hover, .hover-lift').forEach(card => {
            if (!card.classList.contains('reveal-up') && !card.classList.contains('is-revealed')) {
                card.classList.add('reveal-up');
            }
        });

        // Page Header titles and badges
        document.querySelectorAll('.page-header h1, section.bg-primaryDark h1, .page-header p').forEach(heading => {
            if (!heading.classList.contains('reveal-up') && !heading.classList.contains('is-revealed')) {
                heading.classList.add('reveal-up');
            }
        });
    }

    /* ----------------------------------------------------
       6. Numerical Stat Counters
       ---------------------------------------------------- */
    function initCounters() {
        if (!('IntersectionObserver' in window)) return;

        const counterElements = document.querySelectorAll('[data-counter]');
        if (counterElements.length === 0) return;

        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.3 });

        counterElements.forEach(el => counterObserver.observe(el));
    }

    function animateCounter(el) {
        const target = parseFloat(el.getAttribute('data-counter')) || 0;
        const prefix = el.getAttribute('data-prefix') || '';
        const suffix = el.getAttribute('data-suffix') || '';
        const duration = prefersReducedMotion ? 0 : 1800;

        if (duration === 0) {
            el.textContent = prefix + target.toLocaleString() + suffix;
            return;
        }

        let startTimestamp = null;
        function step(timestamp) {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const easeProgress = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(easeProgress * target);

            el.textContent = prefix + current.toLocaleString() + suffix;

            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                el.textContent = prefix + target.toLocaleString() + suffix;
            }
        }
        window.requestAnimationFrame(step);
    }

    // Run initialization
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAnimations);
    } else {
        initAnimations();
    }

})();
