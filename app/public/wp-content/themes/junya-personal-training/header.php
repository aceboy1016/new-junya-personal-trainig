<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
    <nav>
        <div class="logo-container">
            <?php 
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<a href="' . esc_url(home_url('/')) . '" class="logo">JUNYA ISHIHARA</a>';
            }
            ?>
        </div>
        
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'nav-links',
            'fallback_cb'    => 'junya_fallback_menu',
        ));
        ?>
    </nav>
</header>

<?php
// フォールバックメニュー（メニューが設定されていない場合）
function junya_fallback_menu() {
    echo '<ul class="nav-links">';
    echo '<li><a href="#profile">プロフィール</a></li>';
    echo '<li><a href="#service-flow">ご利用までの流れ</a></li>';
    echo '<li><a href="#pricing">料金</a></li>';
    echo '<li><a href="#faq">よくあるご質問</a></li>';
    echo '<li><a href="#access">アクセス</a></li>';
    echo '<li><a href="#contact" class="cta-nav">お申し込み</a></li>';
    echo '</ul>';
}
?>