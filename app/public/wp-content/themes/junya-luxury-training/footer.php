</main>

<!-- Footer -->
<footer class="bg-black text-white py-12">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto">
            <!-- Main Footer Content -->
            <div class="text-center mb-8">
                <h3 class="text-3xl font-black tracking-wider mb-2">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        JUNYA <span class="text-gradient">ISHIHARA</span>
                    <?php endif; ?>
                </h3>
                <p class="text-gray-400 tracking-widest uppercase text-sm">Personal Training</p>
            </div>

            <!-- Footer Navigation -->
            <div class="flex flex-wrap justify-center gap-8 mb-8">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'flex flex-wrap justify-center gap-8',
                    'container' => false,
                    'fallback_cb' => 'junya_luxury_fallback_footer_menu',
                    'walker' => new Junya_Luxury_Footer_Nav_Walker(),
                ));
                ?>
            </div>

            <!-- Contact Info -->
            <div class="text-center mb-8">
                <div class="flex justify-center items-center gap-8 text-sm text-gray-400 flex-wrap">
                    <div class="flex items-center">
                        <i class="ri-phone-line mr-2"></i>
                        <span><?php echo esc_html(get_theme_mod('contact_phone', '080-0000-0000')); ?></span>
                    </div>
                    <div class="flex items-center">
                        <i class="ri-mail-line mr-2"></i>
                        <span><?php echo esc_html(get_theme_mod('contact_email', 'info@junya-training.com')); ?></span>
                    </div>
                </div>
            </div>

            <?php if (is_active_sidebar('footer-widget')) : ?>
            <div class="text-center mb-8">
                <?php dynamic_sidebar('footer-widget'); ?>
            </div>
            <?php endif; ?>

            <!-- Copyright -->
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-500 text-sm">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
// Smooth scrolling for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const headerHeight = document.querySelector('header').offsetHeight;
            const targetPosition = target.offsetTop - headerHeight;
            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
});

// Header background change on scroll
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 100) {
        header.style.background = 'rgba(255, 255, 255, 0.98)';
        header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
    } else {
        header.style.background = 'rgba(255, 255, 255, 0.95)';
        header.style.boxShadow = 'none';
    }
});

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
            const icon = mobileMenuButton.querySelector('i');
            if (mobileMenu.classList.contains('hidden')) {
                icon.className = 'ri-menu-line text-2xl';
                mobileMenuButton.setAttribute('aria-label', 'メニューを開く');
            } else {
                icon.className = 'ri-close-line text-2xl';
                mobileMenuButton.setAttribute('aria-label', 'メニューを閉じる');
            }
        });
    }
});

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// Apply animation to sections and cards
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('section, .bg-white, .shadow-xl');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        observer.observe(el);
    });
});

// Form handling
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const requiredFields = form.querySelectorAll('[required]');
            let isValid = true;
            
            requiredFields.forEach(field => {
                if (!field.value.trim()) {
                    isValid = false;
                    field.classList.add('border-red-500');
                } else {
                    field.classList.remove('border-red-500');
                }
            });
            
            if (!isValid) {
                e.preventDefault();
                alert('必須項目をすべて入力してください。');
            }
        });
    });
});
</script>

</body>
</html>

<?php
// Custom footer navigation walker
class Junya_Luxury_Footer_Nav_Walker extends Walker_Nav_Menu {
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $attributes = ! empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        $output .= '<a' . $attributes . ' class="text-gray-400 hover:text-gold-400 transition-colors duration-300 font-medium tracking-wide uppercase text-sm">';
        $output .= apply_filters('the_title', $item->title, $item->ID);
        $output .= '</a>';
    }
    
    function end_el(&$output, $item, $depth = 0, $args = null) {
        // Footer walker doesn't need li tags
    }
}

// Fallback footer menu
function junya_luxury_fallback_footer_menu() {
    echo '<a href="#profile" class="text-gray-400 hover:text-gold-400 transition-colors duration-300 font-medium tracking-wide uppercase text-sm">プロフィール</a>';
    echo '<a href="#service-flow" class="text-gray-400 hover:text-gold-400 transition-colors duration-300 font-medium tracking-wide uppercase text-sm">ご利用までの流れ</a>';
    echo '<a href="#pricing" class="text-gray-400 hover:text-gold-400 transition-colors duration-300 font-medium tracking-wide uppercase text-sm">料金</a>';
    echo '<a href="#testimonials" class="text-gray-400 hover:text-gold-400 transition-colors duration-300 font-medium tracking-wide uppercase text-sm">よくあるご質問</a>';
    echo '<a href="#locations" class="text-gray-400 hover:text-gold-400 transition-colors duration-300 font-medium tracking-wide uppercase text-sm">アクセス</a>';
}
?>