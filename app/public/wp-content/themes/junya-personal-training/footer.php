<footer>
    <div class="footer-content">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container'      => false,
            'menu_class'     => 'footer-links',
            'fallback_cb'    => 'junya_footer_fallback_menu',
        ));
        ?>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<script>
// スムーススクロール
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ヘッダーのスクロール効果
window.addEventListener('scroll', () => {
    const header = document.querySelector('header');
    if (window.scrollY > 100) {
        header.style.background = 'rgba(255, 255, 255, 0.98)';
        header.style.boxShadow = '0 2px 20px rgba(52, 152, 219, 0.1)';
    } else {
        header.style.background = 'rgba(255, 255, 255, 0.95)';
        header.style.boxShadow = 'none';
    }
});

// FAQ機能
function toggleFaq(element) {
    const answer = element.nextElementSibling;
    const allAnswers = document.querySelectorAll('.faq-answer');
    
    // 他のFAQを閉じる
    allAnswers.forEach(ans => {
        if (ans !== answer) {
            ans.classList.remove('active');
        }
    });
    
    // クリックされたFAQを開閉
    answer.classList.toggle('active');
}

// 要素の表示アニメーション
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.opacity = '1';
            entry.target.style.transform = 'translateY(0)';
        }
    });
}, observerOptions);

// アニメーション対象の要素を設定
document.addEventListener('DOMContentLoaded', () => {
    const animateElements = document.querySelectorAll('.flow-step, .pricing-card, .faq-item, .testimonial-card');
    animateElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});
</script>

</body>
</html>

<?php
// フッターフォールバックメニュー
function junya_footer_fallback_menu() {
    echo '<div class="footer-links">';
    echo '<a href="#profile">プロフィール</a>';
    echo '<a href="#service-flow">ご利用までの流れ</a>';
    echo '<a href="#pricing">料金</a>';
    echo '<a href="#faq">よくあるご質問</a>';
    echo '<a href="#access">アクセス</a>';
    echo '<a href="#contact">お申し込み</a>';
    echo '</div>';
}
?>