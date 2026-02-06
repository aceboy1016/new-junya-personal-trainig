<?php
/**
 * Junya Luxury Training Theme Functions
 */

// Theme setup
function junya_luxury_setup() {
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add theme support for custom logo
    add_theme_support('custom-logo');
    
    // Add theme support for HTML5 markup
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'junya-luxury'),
        'footer' => __('Footer Menu', 'junya-luxury'),
    ));
}
add_action('after_setup_theme', 'junya_luxury_setup');

// Enqueue scripts and styles
function junya_luxury_scripts() {
    // Enqueue Tailwind CSS from CDN first
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0');
    
    // Enqueue Remixicon
    wp_enqueue_style('remixicon', 'https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css', array(), '3.5.0');
    
    // Enqueue main stylesheet last so it can override Tailwind
    wp_enqueue_style('junya-luxury-style', get_stylesheet_uri(), array('tailwind-css', 'remixicon'), '1.0.1');
    
    // Enqueue custom JavaScript
    wp_enqueue_script('junya-luxury-js', get_template_directory_uri() . '/assets/main.js', array(), '1.0.0', true);
    
    // Localize script for AJAX (if needed)
    wp_localize_script('junya-luxury-js', 'junya_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('junya_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'junya_luxury_scripts');

// Force theme activation and clear cache
function junya_luxury_force_activation() {
    // Clear any object cache
    if (function_exists('wp_cache_flush')) {
        wp_cache_flush();
    }
    
    // Clear rewrite rules
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'junya_luxury_force_activation');

// Debug function to verify theme is active
function junya_luxury_debug_info() {
    if (current_user_can('administrator') && isset($_GET['debug_theme'])) {
        echo '<div style="background: #f0f0f0; padding: 20px; margin: 20px; border: 2px solid #333;">';
        echo '<h3>Theme Debug Info:</h3>';
        echo '<p><strong>Active Theme:</strong> ' . get_template() . '</p>';
        echo '<p><strong>Theme Directory:</strong> ' . get_template_directory() . '</p>';
        echo '<p><strong>Stylesheet:</strong> ' . get_stylesheet() . '</p>';
        echo '</div>';
    }
}
add_action('wp_footer', 'junya_luxury_debug_info');

// Customizer settings for images and content
function junya_luxury_customize_register($wp_customize) {
    // Hero section
    $wp_customize->add_section('hero_section', array(
        'title' => __('ヒーローセクション', 'junya-luxury'),
        'priority' => 25,
    ));
    
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => 'Premium Personal Training',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('サブタイトル', 'junya-luxury'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('hero_title', array(
        'default' => '<span class="text-gradient">変化</span>を実感するから<br><span class="text-gradient">自然</span>と続けたくなる',
        'sanitize_callback' => 'wp_kses_post',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('メインタイトル', 'junya-luxury'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    $wp_customize->add_setting('hero_description', array(
        'default' => '根本から改善するアプローチで、見た目も体調も確実に変化を実感',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_description', array(
        'label' => __('説明文', 'junya-luxury'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));

    // Contact info
    $wp_customize->add_section('contact_info', array(
        'title' => __('連絡先情報', 'junya-luxury'),
        'priority' => 35,
    ));
    
    $wp_customize->add_setting('contact_phone', array(
        'default' => '080-0000-0000',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label' => __('電話番号', 'junya-luxury'),
        'section' => 'contact_info',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('contact_email', array(
        'default' => 'junya1995@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label' => __('メールアドレス', 'junya-luxury'),
        'section' => 'contact_info',
        'type' => 'email',
    ));
    
    $wp_customize->add_setting('google_form_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('google_form_url', array(
        'label' => __('GoogleフォームURL', 'junya-luxury'),
        'section' => 'contact_info',
        'type' => 'url',
    ));
    
    $wp_customize->add_setting('line_url', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control('line_url', array(
        'label' => __('LINE公式アカウントURL', 'junya-luxury'),
        'section' => 'contact_info',
        'type' => 'url',
    ));

    // Testimonials Section
    $wp_customize->add_section('testimonials_section', array(
        'title' => __('お客様の声', 'junya-luxury'),
        'priority' => 36,
    ));
    
    // Testimonial 1
    $wp_customize->add_setting('testimonial_1_name', array(
        'default' => 'A.K様',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('testimonial_1_name', array(
        'label' => __('お客様の声1 - お名前', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_1_info', array(
        'default' => '20代女性・会社員',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('testimonial_1_info', array(
        'label' => __('お客様の声1 - 詳細情報', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_1_text', array(
        'default' => 'トレーニング初心者の私でも、石原さんの丁寧で分かりやすい指導のおかげで、3ヶ月で理想の体型に近づくことができました。科学的なアプローチで効率的に結果が出て驚いています。',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('testimonial_1_text', array(
        'label' => __('お客様の声1 - テキスト', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'textarea',
    ));
    
    // Testimonial 2
    $wp_customize->add_setting('testimonial_2_name', array(
        'default' => 'M.T様',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('testimonial_2_name', array(
        'label' => __('お客様の声2 - お名前', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_2_info', array(
        'default' => '40代男性・経営者',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('testimonial_2_info', array(
        'label' => __('お客様の声2 - 詳細情報', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_2_text', array(
        'default' => '長年の腰痛に悩んでいましたが、石原さんのコンディショニング指導により大幅に改善されました。プロフェッショナルな知識と技術、そして親身なサポートに本当に感謝しています。',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('testimonial_2_text', array(
        'label' => __('お客様の声2 - テキスト', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'textarea',
    ));
    
    // Testimonial 3
    $wp_customize->add_setting('testimonial_3_name', array(
        'default' => 'R.S様',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('testimonial_3_name', array(
        'label' => __('お客様の声3 - お名前', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_3_info', array(
        'default' => '30代男性・アスリート',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('testimonial_3_info', array(
        'label' => __('お客様の声3 - 詳細情報', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'text',
    ));
    
    $wp_customize->add_setting('testimonial_3_text', array(
        'default' => '競技パフォーマンス向上のためのトレーニングを依頼しました。最新の科学的知識に基づいた指導で、明確な改善が実感できています。プロとしての経験と知識の深さが違います。',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('testimonial_3_text', array(
        'label' => __('お客様の声3 - テキスト', 'junya-luxury'),
        'section' => 'testimonials_section',
        'type' => 'textarea',
    ));

    // Access & Map Section
    $wp_customize->add_section('access_map_section', array(
        'title' => __('アクセス・地図設定', 'junya-luxury-training'),
        'priority' => 140,
    ));

    // -- Hanzomon Location --
    // Hanzomon Title
    $wp_customize->add_setting('hanzomon_location_title', array(
        'default' => 'HALLEL半蔵門店',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('hanzomon_location_title_control', array(
        'label' => __('半蔵門店 店舗名', 'junya-luxury-training'),
        'section' => 'access_map_section',
        'settings' => 'hanzomon_location_title',
        'type' => 'text',
    ));

    // Hanzomon Address
    $wp_customize->add_setting('hanzomon_location_address', array(
        'default' => '〒102-0082 東京都千代田区一番町10-8 一番町ウエストビルB1<br>東京メトロ半蔵門線<span class="text-gold-500 font-semibold">「半蔵門駅」</span>4番出口から<span class="text-gold-500 font-semibold">徒歩2分</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('hanzomon_location_address_control', array(
        'label' => __('半蔵門店 住所', 'junya-luxury-training'),
        'section' => 'access_map_section',
        'settings' => 'hanzomon_location_address',
        'type' => 'textarea',
    ));

    // Hanzomon Map Embed Code
    $wp_customize->add_setting('hanzomon_map_embed_code', array(
        'default' => '',
    ));
    $wp_customize->add_control('hanzomon_map_embed_code_control', array(
        'label' => __('半蔵門店 Googleマップ埋め込みコード', 'junya-luxury-training'),
        'section' => 'access_map_section',
        'settings' => 'hanzomon_map_embed_code',
        'type' => 'textarea',
        'description' => 'Googleマップで「地図を埋め込む」からiframeコードをコピーして貼り付けてください。',
    ));

    // -- Ebisu Location --
    // Ebisu Title
    $wp_customize->add_setting('ebisu_location_title', array(
        'default' => 'HALLEL恵比寿店',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('ebisu_location_title_control', array(
        'label' => __('恵比寿店 店舗名', 'junya-luxury-training'),
        'section' => 'access_map_section',
        'settings' => 'ebisu_location_title',
        'type' => 'text',
    ));

    // Ebisu Address
    $wp_customize->add_setting('ebisu_location_address', array(
        'default' => '〒150-0022 東京都渋谷区恵比寿南2-3-11 グレース青山2F<br>JR・東京メトロ日比谷線<span class="text-gold-500 font-semibold">「恵比寿駅」</span>西口から<span class="text-gold-500 font-semibold">徒歩3分</span>',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('ebisu_location_address_control', array(
        'label' => __('恵比寿店 住所', 'junya-luxury-training'),
        'section' => 'access_map_section',
        'settings' => 'ebisu_location_address',
        'type' => 'textarea',
    ));

    // Ebisu Map Embed Code
    $wp_customize->add_setting('ebisu_map_embed_code', array(
        'default' => '',
    ));
    $wp_customize->add_control('ebisu_map_embed_code_control', array(
        'label' => __('恵比寿店 Googleマップ埋め込みコード', 'junya-luxury-training'),
        'section' => 'access_map_section',
        'settings' => 'ebisu_map_embed_code',
        'type' => 'textarea',
        'description' => 'Googleマップで「地図を埋め込む」からiframeコードをコピーして貼り付けてください。',
    ));

    // Add Images Section
    $wp_customize->add_section('junya_images', array(
        'title' => __('画像設定', 'junya-luxury'),
        'description' => __('サイトの各セクションの画像を設定できます', 'junya-luxury'),
        'priority' => 30,
    ));

    // Hero Background Image
    $wp_customize->add_setting('hero_background_image', array(
        'default' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image', array(
        'label' => __('ヒーロー背景画像', 'junya-luxury'),
        'description' => __('トップページのメイン背景画像', 'junya-luxury'),
        'section' => 'junya_images',
        'settings' => 'hero_background_image',
    )));

    // Profile Image
    $wp_customize->add_setting('profile_image', array(
        'default' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'profile_image', array(
        'label' => __('プロフィール画像', 'junya-luxury'),
        'description' => __('トレーナーのプロフィール画像', 'junya-luxury'),
        'section' => 'junya_images',
        'settings' => 'profile_image',
    )));

    // HALLEL半蔵門店 Image
    $wp_customize->add_setting('hallel_hanzoomon_image', array(
        'default' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hallel_hanzoomon_image', array(
        'label' => __('HALLEL半蔵門店 画像', 'junya-luxury'),
        'description' => __('HALLEL半蔵門店の画像', 'junya-luxury'),
        'section' => 'junya_images',
        'settings' => 'hallel_hanzoomon_image',
    )));

    // HALLEL恵比寿店 Image
    $wp_customize->add_setting('hallel_ebisu_image', array(
        'default' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hallel_ebisu_image', array(
        'label' => __('HALLEL恵比寿店 画像', 'junya-luxury'),
        'description' => __('HALLEL恵比寿店の画像', 'junya-luxury'),
        'section' => 'junya_images',
        'settings' => 'hallel_ebisu_image',
    )));

    // Experience Image
    $wp_customize->add_setting('experience_image', array(
        'default' => 'https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?auto=format&fit=crop&w=600&q=80',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'experience_image', array(
        'label' => __('職歴・経験の画像', 'junya-luxury'),
        'description' => __('職歴・経験セクションの画像', 'junya-luxury'),
        'section' => 'junya_images',
        'settings' => 'experience_image',
    )));

    // Gallery Images (6 images)
    for ($i = 1; $i <= 6; $i++) {
        $default_images = array(
            1 => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
            2 => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
            3 => 'https://images.unsplash.com/photo-1544717297-fa95b6ee9643?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
            4 => 'https://images.unsplash.com/photo-1549060279-7c8a3999166f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
            5 => 'https://images.unsplash.com/photo-1540497077202-7c8a3999166f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80',
            6 => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80'
        );

        $wp_customize->add_setting("gallery_image_{$i}", array(
            'default' => $default_images[$i],
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "gallery_image_{$i}", array(
            'label' => sprintf(__('ギャラリー画像 %d', 'junya-luxury'), $i),
            'description' => sprintf(__('プロフィールセクションのギャラリー画像 %d', 'junya-luxury'), $i),
            'section' => 'junya_images',
            'settings' => "gallery_image_{$i}",
        )));
    }
}
add_action('customize_register', 'junya_luxury_customize_register');

// Add Tailwind configuration script
function junya_luxury_tailwind_config() {
    ?>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        gold: {
                            400: '#FBBF24',
                            500: '#F59E0B',
                            600: '#D97706',
                        },
                        amber: {
                            400: '#FCD34D',
                            500: '#F59E0B',
                            600: '#D97706',
                        }
                    },
                    fontFamily: {
                        'luxury': ['Georgia', 'serif'],
                    },
                    backgroundImage: {
                        'gold-gradient': 'linear-gradient(135deg, #F59E0B 0%, #D97706 100%)',
                        'hero-gradient': 'linear-gradient(135deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.6) 100%)',
                    }
                }
            }
        }
    </script>
    <style>
        .glass-effect {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .text-gradient {
            background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-bg {
            background-image: linear-gradient(135deg, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.6) 100%), url('<?php echo get_template_directory_uri(); ?>/assets/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        @media (max-width: 768px) {
            .hero-bg {
                background-attachment: scroll;
            }
            .text-8xl, .text-9xl {
                font-size: 3rem;
                line-height: 1.1;
            }
            .text-6xl {
                font-size: 2.5rem;
            }
            .text-5xl {
                font-size: 2rem;
            }
            .pt-20 {
                padding-top: 5rem;
            }
        }
    </style>
    <?php
}
add_action('wp_head', 'junya_luxury_tailwind_config');

// Custom post types
function junya_luxury_post_types() {
    // Testimonials post type
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => 'お客様の声',
            'singular_name' => 'お客様の声',
            'add_new' => '新規追加',
            'add_new_item' => '新しいお客様の声を追加',
            'edit_item' => 'お客様の声を編集',
            'view_item' => 'お客様の声を表示',
            'all_items' => 'すべてのお客様の声',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-testimonial',
        'show_in_rest' => true,
    ));
    
    // Gallery post type
    register_post_type('gallery', array(
        'labels' => array(
            'name' => 'ギャラリー',
            'singular_name' => 'ギャラリー',
            'add_new' => '新規追加',
            'add_new_item' => '新しいギャラリーを追加',
            'edit_item' => 'ギャラリーを編集',
            'view_item' => 'ギャラリーを表示',
            'all_items' => 'すべてのギャラリー',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-gallery',
        'show_in_rest' => true,
    ));
}
add_action('init', 'junya_luxury_post_types');

// Add custom fields for testimonials
function junya_luxury_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_details',
        'お客様詳細',
        'junya_luxury_testimonial_callback',
        'testimonials',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'junya_luxury_testimonial_meta_boxes');

function junya_luxury_testimonial_callback($post) {
    wp_nonce_field('junya_luxury_testimonial_nonce', 'junya_luxury_testimonial_nonce');
    
    $customer_age = get_post_meta($post->ID, '_customer_age', true);
    $customer_gender = get_post_meta($post->ID, '_customer_gender', true);
    $customer_occupation = get_post_meta($post->ID, '_customer_occupation', true);
    $rating = get_post_meta($post->ID, '_rating', true);
    
    echo '<table class="form-table">';
    echo '<tr><th><label for="customer_age">年代</label></th>';
    echo '<td><input type="text" id="customer_age" name="customer_age" value="' . esc_attr($customer_age) . '" placeholder="例: 30代" /></td></tr>';
    echo '<tr><th><label for="customer_gender">性別</label></th>';
    echo '<td><select id="customer_gender" name="customer_gender">';
    echo '<option value="男性"' . selected($customer_gender, '男性', false) . '>男性</option>';
    echo '<option value="女性"' . selected($customer_gender, '女性', false) . '>女性</option>';
    echo '</select></td></tr>';
    echo '<tr><th><label for="customer_occupation">職業</label></th>';
    echo '<td><input type="text" id="customer_occupation" name="customer_occupation" value="' . esc_attr($customer_occupation) . '" placeholder="例: 会社員" /></td></tr>';
    echo '<tr><th><label for="rating">評価</label></th>';
    echo '<td><select id="rating" name="rating">';
    for ($i = 1; $i <= 5; $i++) {
        echo '<option value="' . $i . '"' . selected($rating, $i, false) . '>' . $i . '☆</option>';
    }
    echo '</select></td></tr>';
    echo '</table>';
}

function junya_luxury_save_testimonial_meta($post_id) {
    if (!isset($_POST['junya_luxury_testimonial_nonce']) || !wp_verify_nonce($_POST['junya_luxury_testimonial_nonce'], 'junya_luxury_testimonial_nonce')) {
        return;
    }
    
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    $fields = array('customer_age', 'customer_gender', 'customer_occupation', 'rating');
    foreach ($fields as $field) {
        if (isset($_POST[$field])) {
            update_post_meta($post_id, '_' . $field, sanitize_text_field($_POST[$field]));
        }
    }
}
add_action('save_post', 'junya_luxury_save_testimonial_meta');

// Testimonials shortcode
function junya_luxury_testimonials_shortcode($atts) {
    $atts = shortcode_atts(array(
        'posts_per_page' => 3,
    ), $atts);
    
    $testimonials = new WP_Query(array(
        'post_type' => 'testimonials',
        'posts_per_page' => intval($atts['posts_per_page']),
        'post_status' => 'publish',
    ));
    
    if (!$testimonials->have_posts()) {
        return '';
    }
    
    ob_start();
    ?>
    <div class="grid grid-cols-1 md:grid-cols-<?php echo min(3, intval($atts['posts_per_page'])); ?> gap-8 max-w-6xl mx-auto">
        <?php while ($testimonials->have_posts()) : $testimonials->the_post(); 
            $customer_age = get_post_meta(get_the_ID(), '_customer_age', true);
            $customer_gender = get_post_meta(get_the_ID(), '_customer_gender', true);
            $customer_occupation = get_post_meta(get_the_ID(), '_customer_occupation', true);
            $rating = get_post_meta(get_the_ID(), '_rating', true) ?: 5;
        ?>
        <div class="bg-gray-50 p-8 border-l-4 border-gold-500 hover:shadow-xl transition-all duration-300">
            <div class="mb-6">
                <div class="flex text-gold-500 mb-4">
                    <?php for ($i = 0; $i < $rating; $i++) : ?>
                        <i class="ri-star-fill"></i>
                    <?php endfor; ?>
                </div>
                <div class="text-gray-700 leading-relaxed italic">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="border-t border-gray-200 pt-4">
                <p class="font-bold text-black tracking-wide"><?php the_title(); ?></p>
                <p class="text-sm text-gray-600">
                    <?php echo esc_html($customer_age . $customer_gender . '・' . $customer_occupation); ?>
                </p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
    <?php
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('testimonials', 'junya_luxury_testimonials_shortcode');

// Widget areas
function junya_luxury_widgets_init() {
    register_sidebar(array(
        'name' => 'フッターウィジェット',
        'id' => 'footer-widget',
        'description' => 'フッター用のウィジェットエリア',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'junya_luxury_widgets_init');

// Add custom rewrite rules for Sanity blog posts
function junya_luxury_rewrite_rules() {
    add_rewrite_rule(
        '^blog/([^/]+)/?$',
        'index.php?pagename=blog&sanity_slug=$matches[1]',
        'top'
    );
}
add_action('init', 'junya_luxury_rewrite_rules');

// Add custom query vars
function junya_luxury_query_vars($vars) {
    $vars[] = 'sanity_slug';
    return $vars;
}
add_filter('query_vars', 'junya_luxury_query_vars');

// Handle template redirect for individual blog posts
function junya_luxury_template_redirect() {
    $sanity_slug = get_query_var('sanity_slug');
    
    if ($sanity_slug && is_page('blog')) {
        // Load the individual blog post template
        $template = locate_template('page-blog-post.php');
        if ($template) {
            include($template);
            exit;
        }
    }
}
add_action('template_redirect', 'junya_luxury_template_redirect');

// Flush rewrite rules on theme activation
function junya_luxury_flush_rewrites() {
    junya_luxury_rewrite_rules();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'junya_luxury_flush_rewrites');