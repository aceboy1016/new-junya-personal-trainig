/**
 * Junya Luxury Training Theme JavaScript
 */

(function() {
    'use strict';
    
    // DOM ready function
    function ready(fn) {
        if (document.readyState !== 'loading') {
            fn();
        } else {
            document.addEventListener('DOMContentLoaded', fn);
        }
    }
    
    // Smooth scrolling for anchor links
    function initSmoothScrolling() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href === '#') return;
                
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const headerHeight = document.querySelector('header')?.offsetHeight || 0;
                    const adminBarHeight = document.querySelector('#wpadminbar')?.offsetHeight || 0;
                    const targetPosition = target.offsetTop - headerHeight - adminBarHeight;
                    
                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });
    }
    
    // Header scroll effect
    function initHeaderScrollEffect() {
        const header = document.querySelector('header');
        if (!header) return;
        
        let ticking = false;
        
        function updateHeader() {
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = 'none';
            }
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateHeader);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick);
    }
    
    // Mobile menu toggle
    function initMobileMenu() {
        const mobileMenuButton = document.querySelector('.mobile-menu-toggle');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        if (!mobileMenuButton || !mobileMenu) return;
        
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            const icon = mobileMenuButton.querySelector('i');
            
            if (mobileMenu.classList.contains('hidden')) {
                icon.className = 'ri-menu-line text-2xl';
                mobileMenuButton.setAttribute('aria-label', 'メニューを開く');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
            } else {
                icon.className = 'ri-close-line text-2xl';
                mobileMenuButton.setAttribute('aria-label', 'メニューを閉じる');
                mobileMenuButton.setAttribute('aria-expanded', 'true');
            }
        });
        
        // Close mobile menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                if (!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    const icon = mobileMenuButton.querySelector('i');
                    icon.className = 'ri-menu-line text-2xl';
                    mobileMenuButton.setAttribute('aria-label', 'メニューを開く');
                    mobileMenuButton.setAttribute('aria-expanded', 'false');
                }
            }
        });
        
        // Close mobile menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                const icon = mobileMenuButton.querySelector('i');
                icon.className = 'ri-menu-line text-2xl';
                mobileMenuButton.setAttribute('aria-label', 'メニューを開く');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.focus();
            }
        });
    }
    
    // Intersection Observer for animations
    function initScrollAnimations() {
        if (!window.IntersectionObserver) return;
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Apply animation to sections and cards
        const animatedElements = document.querySelectorAll('section, .bg-white, .shadow-xl');
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(el);
        });
    }
    
    // Form validation and handling
    function initFormHandling() {
        const forms = document.querySelectorAll('form');
        
        forms.forEach(form => {
            // Skip Contact Form 7 forms (they handle their own validation)
            if (form.classList.contains('wpcf7-form')) return;
            
            form.addEventListener('submit', function(e) {
                const requiredFields = form.querySelectorAll('[required]');
                let isValid = true;
                let firstInvalidField = null;
                
                requiredFields.forEach(field => {
                    const value = field.value.trim();
                    
                    // Basic validation
                    if (!value) {
                        isValid = false;
                        field.classList.add('border-red-500', 'border-2');
                        if (!firstInvalidField) {
                            firstInvalidField = field;
                        }
                    } else {
                        field.classList.remove('border-red-500', 'border-2');
                        
                        // Email validation
                        if (field.type === 'email') {
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            if (!emailRegex.test(value)) {
                                isValid = false;
                                field.classList.add('border-red-500', 'border-2');
                                if (!firstInvalidField) {
                                    firstInvalidField = field;
                                }
                            }
                        }
                    }
                });
                
                if (!isValid) {
                    e.preventDefault();
                    alert('入力内容に不備があります。赤枠の項目をご確認ください。');
                    if (firstInvalidField) {
                        firstInvalidField.focus();
                    }
                    return false;
                }
                
                // Show loading state
                const submitButton = form.querySelector('button[type="submit"], input[type="submit"]');
                if (submitButton) {
                    const originalText = submitButton.textContent;
                    submitButton.textContent = '送信中...';
                    submitButton.disabled = true;
                    
                    // Reset button state after 5 seconds (fallback)
                    setTimeout(() => {
                        submitButton.textContent = originalText;
                        submitButton.disabled = false;
                    }, 5000);
                }
            });
            
            // Real-time validation feedback
            const requiredFields = form.querySelectorAll('[required]');
            requiredFields.forEach(field => {
                field.addEventListener('blur', function() {
                    const value = this.value.trim();
                    
                    if (!value) {
                        this.classList.add('border-red-500');
                    } else {
                        this.classList.remove('border-red-500');
                        
                        if (this.type === 'email') {
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            if (!emailRegex.test(value)) {
                                this.classList.add('border-red-500');
                            } else {
                                this.classList.remove('border-red-500');
                            }
                        }
                    }
                });
                
                field.addEventListener('input', function() {
                    if (this.classList.contains('border-red-500') && this.value.trim()) {
                        this.classList.remove('border-red-500');
                    }
                });
            });
        });
    }
    
    // Lazy loading for images
    function initLazyLoading() {
        if (!window.IntersectionObserver) return;
        
        const images = document.querySelectorAll('img[data-src]');
        
        const imageObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        images.forEach(img => imageObserver.observe(img));
    }
    
    // Accessibility improvements
    function initAccessibility() {
        // Skip link functionality
        const skipLink = document.querySelector('.skip-link');
        if (skipLink) {
            skipLink.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.tabIndex = -1;
                    target.focus();
                    target.addEventListener('blur', function() {
                        this.removeAttribute('tabindex');
                    }, { once: true });
                }
            });
        }
        
        // Keyboard navigation for custom elements
        document.addEventListener('keydown', function(e) {
            // Enter key on buttons
            if (e.key === 'Enter' && e.target.classList.contains('button-like')) {
                e.target.click();
            }
        });
    }
    
    // Performance optimization: Debounce function
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
    
    // Initialize all functionality when DOM is ready
    ready(function() {
        initSmoothScrolling();
        initHeaderScrollEffect();
        initMobileMenu();
        initScrollAnimations();
        initFormHandling();
        initLazyLoading();
        initAccessibility();
        
        // Performance improvements
        const debouncedResize = debounce(() => {
            // Handle resize events if needed
            window.dispatchEvent(new Event('resize-end'));
        }, 250);
        
        window.addEventListener('resize', debouncedResize);
        
        // Trigger custom event when theme is fully loaded
        window.dispatchEvent(new CustomEvent('junya-luxury-loaded'));
    });
    
    // Public API for external scripts
    window.JunyaLuxury = {
        version: '1.0.0',
        debounce: debounce
    };
    
})();