document.addEventListener('DOMContentLoaded', () => {

    const header = document.querySelector('.header');
    const navToggle = document.querySelector('.header__nav-toggle');
    const mainNav = document.querySelector('.header__nav');

    // --- Sticky Header Shadow on Scroll ---
    const handleScroll = () => {
        if (window.scrollY > 20) {
            header.classList.add('header--scrolled');
        } else {
            header.classList.remove('header--scrolled');
        }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });

    // --- Mobile Navigation Toggle ---
    if (navToggle) {
        const allFocusableElements = mainNav.querySelectorAll('a[href], button');
        const firstFocusableElement = allFocusableElements[0];
        const lastFocusableElement = allFocusableElements[allFocusableElements.length - 1];

        const openMenu = () => {
            document.body.classList.add('nav-open');
            navToggle.setAttribute('aria-expanded', 'true');
            mainNav.setAttribute('aria-hidden', 'false');
            firstFocusableElement.focus();
        };

        const closeMenu = () => {
            document.body.classList.remove('nav-open');
            navToggle.setAttribute('aria-expanded', 'false');
            mainNav.setAttribute('aria-hidden', 'true');
        };

        navToggle.addEventListener('click', () => {
            const isNavOpen = document.body.classList.contains('nav-open');
            if (isNavOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Focus trap for accessibility
        mainNav.addEventListener('keydown', (e) => {
            if (e.key !== 'Tab') return;

            if (e.shiftKey) { // Shift + Tab
                if (document.activeElement === firstFocusableElement) {
                    lastFocusableElement.focus();
                    e.preventDefault();
                }
            } else { // Tab
                if (document.activeElement === lastFocusableElement) {
                    firstFocusableElement.focus();
                    e.preventDefault();
                }
            }
        });

        // Close menu with Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && document.body.classList.contains('nav-open')) {
                closeMenu();
            }
        });
    }

    // --- Smooth Scrolling for Anchor Links ---
    const handleSmoothScroll = (e) => {
        const targetLink = e.target.closest('a[href^="#"]');
        if (!targetLink) return;

        const hash = targetLink.getAttribute('href');
        if (hash === '#') return;

        const targetElement = document.querySelector(hash);
        if (targetElement) {
            e.preventDefault();

            // Close mobile nav if open
            if (document.body.classList.contains('nav-open')) {
                document.body.classList.remove('nav-open');
                navToggle.setAttribute('aria-expanded', 'false');
                mainNav.setAttribute('aria-hidden', 'true');
            }

            const headerOffset = document.querySelector('.header').offsetHeight;
            const elementPosition = targetElement.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });

            // Set focus to the target section for accessibility
            setTimeout(() => {
                targetElement.setAttribute('tabindex', '-1');
                targetElement.focus();
            }, 500); // Adjust timeout as needed for scroll duration
        }
    };

    document.addEventListener('click', handleSmoothScroll);

});