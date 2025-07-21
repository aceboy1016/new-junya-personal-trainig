<?php
// テーマサポートの追加
function junya_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'junya_theme_support');

// スタイルとスクリプトの読み込み
function junya_enqueue_scripts() {
    wp_enqueue_style('junya-style', get_stylesheet_uri());
    wp_enqueue_script('junya-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'junya_enqueue_scripts');

// ブロックエディタの無効化
function junya_disable_gutenberg() {
    // 投稿タイプでブロックエディタを無効化
    add_filter('use_block_editor_for_post_type', '__return_false');
    
    // ブロックエディタのスタイルを削除
    remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');
    remove_action('wp_enqueue_scripts', 'wp_enqueue_block_assets');
    remove_action('wp_enqueue_scripts', 'gutenberg_register_scripts_and_styles');
    remove_action('admin_enqueue_scripts', 'gutenberg_editor_scripts_and_styles');
}
add_action('init', 'junya_disable_gutenberg');

// 管理画面にクラシックエディタのスタイルを強制適用
function junya_force_classic_editor() {
    if (is_admin()) {
        wp_enqueue_script('editor');
        wp_enqueue_script('quicktags');
        wp_enqueue_style('editor-buttons');
    }
}
add_action('admin_enqueue_scripts', 'junya_force_classic_editor');

// メタボックスの追加
function junya_add_meta_boxes() {
    // 投稿と固定ページ両方に追加
    add_meta_box(
        'junya_profile_details',
        'プロフィール詳細設定',
        'junya_profile_details_meta_box_callback',
        array('post', 'page'),
        'normal',
        'high'
    );
    
    add_meta_box(
        'junya_profile_gallery',
        'プロフィールギャラリー（最大6枚）',
        'junya_profile_gallery_meta_box_callback',
        array('post', 'page'),
        'normal',
        'high'
    );
    
    add_meta_box(
        'junya_theme_images',
        'その他画像設定',
        'junya_theme_images_meta_box_callback',
        array('post', 'page'),
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'junya_add_meta_boxes');

// プロフィール詳細設定のメタボックス
function junya_profile_details_meta_box_callback($post) {
    wp_nonce_field('junya_profile_details_meta_nonce', 'junya_profile_details_meta_nonce');
    
    $hobby = get_post_meta($post->ID, '_junya_profile_hobby', true);
    $career = get_post_meta($post->ID, '_junya_profile_career', true);
    $qualification = get_post_meta($post->ID, '_junya_profile_qualification', true);
    $personality = get_post_meta($post->ID, '_junya_profile_personality', true);
    $favorite = get_post_meta($post->ID, '_junya_profile_favorite', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="junya_profile_hobby">趣味</label></th>
            <td>
                <textarea id="junya_profile_hobby" name="junya_profile_hobby" rows="3" cols="50" style="width: 100%;"><?php echo esc_textarea($hobby); ?></textarea>
                <p class="description">趣味について入力してください</p>
            </td>
        </tr>
        <tr>
            <th><label for="junya_profile_career">経歴</label></th>
            <td>
                <textarea id="junya_profile_career" name="junya_profile_career" rows="5" cols="50" style="width: 100%;"><?php echo esc_textarea($career); ?></textarea>
                <p class="description">経歴について入力してください</p>
            </td>
        </tr>
        <tr>
            <th><label for="junya_profile_qualification">資格</label></th>
            <td>
                <textarea id="junya_profile_qualification" name="junya_profile_qualification" rows="3" cols="50" style="width: 100%;"><?php echo esc_textarea($qualification); ?></textarea>
                <p class="description">保有資格について入力してください</p>
            </td>
        </tr>
        <tr>
            <th><label for="junya_profile_personality">性格</label></th>
            <td>
                <textarea id="junya_profile_personality" name="junya_profile_personality" rows="3" cols="50" style="width: 100%;"><?php echo esc_textarea($personality); ?></textarea>
                <p class="description">性格について入力してください</p>
            </td>
        </tr>
        <tr>
            <th><label for="junya_profile_favorite">お気に入り</label></th>
            <td>
                <textarea id="junya_profile_favorite" name="junya_profile_favorite" rows="3" cols="50" style="width: 100%;"><?php echo esc_textarea($favorite); ?></textarea>
                <p class="description">お気に入りについて入力してください</p>
            </td>
        </tr>
    </table>
    <?php
}

// プロフィールギャラリーのメタボックス
function junya_profile_gallery_meta_box_callback($post) {
    wp_nonce_field('junya_profile_gallery_meta_nonce', 'junya_profile_gallery_meta_nonce');
    
    ?>
    <div id="junya_profile_gallery_container">
        <p><strong>プロフィールギャラリー（最大6枚の画像をアップロードできます）</strong></p>
        <div id="junya_gallery_items">
            <?php
            for ($i = 1; $i <= 6; $i++) {
                $gallery_image = get_post_meta($post->ID, '_junya_gallery_image_' . $i, true);
                ?>
                <div class="gallery-item" style="margin-bottom: 20px; padding: 15px; border: 1px solid #ddd; border-radius: 5px; background: #f9f9f9;">
                    <h4>ギャラリー画像 <?php echo $i; ?></h4>
                    <input type="text" id="junya_gallery_image_<?php echo $i; ?>" name="junya_gallery_image_<?php echo $i; ?>" value="<?php echo esc_attr($gallery_image); ?>" style="width: 70%;" />
                    <input type="button" id="junya_gallery_image_<?php echo $i; ?>_button" class="button gallery-upload-button" value="画像を選択" data-target="<?php echo $i; ?>" />
                    <?php if ($gallery_image): ?>
                        <div style="margin-top: 10px;">
                            <img src="<?php echo esc_url($gallery_image); ?>" style="max-width: 150px; height: auto; border-radius: 5px;" />
                        </div>
                    <?php endif; ?>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <?php
}

// その他画像設定のメタボックス
function junya_theme_images_meta_box_callback($post) {
    wp_nonce_field('junya_theme_images_meta_nonce', 'junya_theme_images_meta_nonce');
    
    $hero_image = get_post_meta($post->ID, '_junya_hero_image', true);
    $profile_main_image = get_post_meta($post->ID, '_junya_profile_main_image', true);
    
    ?>
    <table class="form-table">
        <tr>
            <th><label for="junya_hero_image">ヒーロー背景画像</label></th>
            <td>
                <input type="text" id="junya_hero_image" name="junya_hero_image" value="<?php echo esc_attr($hero_image); ?>" style="width: 70%;" />
                <input type="button" id="junya_hero_image_button" class="button" value="画像を選択" />
                <p class="description">ヒーローセクションの背景画像を選択してください</p>
                <?php if ($hero_image): ?>
                    <div style="margin-top: 10px;">
                        <img src="<?php echo esc_url($hero_image); ?>" style="max-width: 200px; height: auto;" />
                    </div>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <th><label for="junya_profile_main_image">プロフィールメイン画像</label></th>
            <td>
                <input type="text" id="junya_profile_main_image" name="junya_profile_main_image" value="<?php echo esc_attr($profile_main_image); ?>" style="width: 70%;" />
                <input type="button" id="junya_profile_main_image_button" class="button" value="画像を選択" />
                <p class="description">プロフィールセクションのメイン画像を選択してください</p>
                <?php if ($profile_main_image): ?>
                    <div style="margin-top: 10px;">
                        <img src="<?php echo esc_url($profile_main_image); ?>" style="max-width: 200px; height: auto;" />
                    </div>
                <?php endif; ?>
            </td>
        </tr>
    </table>
    <?php
}

// メタボックスの保存処理
function junya_save_meta_boxes($post_id) {
    // 自動保存時は処理しない
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    
    // 権限チェック
    if (isset($_POST['post_type']) && $_POST['post_type'] === 'page') {
        if (!current_user_can('edit_page', $post_id)) return;
    } else {
        if (!current_user_can('edit_post', $post_id)) return;
    }
    
    // プロフィール詳細設定の保存
    if (isset($_POST['junya_profile_details_meta_nonce']) && wp_verify_nonce($_POST['junya_profile_details_meta_nonce'], 'junya_profile_details_meta_nonce')) {
        if (isset($_POST['junya_profile_hobby'])) {
            update_post_meta($post_id, '_junya_profile_hobby', sanitize_textarea_field($_POST['junya_profile_hobby']));
        }
        if (isset($_POST['junya_profile_career'])) {
            update_post_meta($post_id, '_junya_profile_career', sanitize_textarea_field($_POST['junya_profile_career']));
        }
        if (isset($_POST['junya_profile_qualification'])) {
            update_post_meta($post_id, '_junya_profile_qualification', sanitize_textarea_field($_POST['junya_profile_qualification']));
        }
        if (isset($_POST['junya_profile_personality'])) {
            update_post_meta($post_id, '_junya_profile_personality', sanitize_textarea_field($_POST['junya_profile_personality']));
        }
        if (isset($_POST['junya_profile_favorite'])) {
            update_post_meta($post_id, '_junya_profile_favorite', sanitize_textarea_field($_POST['junya_profile_favorite']));
        }
    }
    
    // プロフィールギャラリーの保存
    if (isset($_POST['junya_profile_gallery_meta_nonce']) && wp_verify_nonce($_POST['junya_profile_gallery_meta_nonce'], 'junya_profile_gallery_meta_nonce')) {
        for ($i = 1; $i <= 6; $i++) {
            if (isset($_POST['junya_gallery_image_' . $i])) {
                update_post_meta($post_id, '_junya_gallery_image_' . $i, esc_url_raw($_POST['junya_gallery_image_' . $i]));
            }
        }
    }
    
    // その他画像設定の保存
    if (isset($_POST['junya_theme_images_meta_nonce']) && wp_verify_nonce($_POST['junya_theme_images_meta_nonce'], 'junya_theme_images_meta_nonce')) {
        if (isset($_POST['junya_hero_image'])) {
            update_post_meta($post_id, '_junya_hero_image', esc_url_raw($_POST['junya_hero_image']));
        }
        if (isset($_POST['junya_profile_main_image'])) {
            update_post_meta($post_id, '_junya_profile_main_image', esc_url_raw($_POST['junya_profile_main_image']));
        }
    }
}
add_action('save_post', 'junya_save_meta_boxes');

// 管理画面でのメディアアップローダー用スクリプト
function junya_admin_scripts($hook) {
    if ($hook == 'post.php' || $hook == 'post-new.php') {
        wp_enqueue_media();
        wp_enqueue_script('junya-admin-js', get_template_directory_uri() . '/js/admin.js', array('jquery'), '1.0.0', true);
    }
}
add_action('admin_enqueue_scripts', 'junya_admin_scripts');

// カスタム投稿タイプ「お客様の声」を追加
function create_testimonial_post_type() {
    register_post_type('testimonial',
        array(
            'labels' => array(
                'name' => __('お客様の声'),
                'singular_name' => __('お客様の声')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-testimonial',
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
        )
    );
}
add_action('init', 'create_testimonial_post_type');

// 星評価のメタボックスを追加
function add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_rating',
        '星評価',
        'testimonial_rating_meta_box_html',
        'testimonial',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_testimonial_meta_boxes');

// メタボックスのHTML
function testimonial_rating_meta_box_html($post) {
    $rating = get_post_meta($post->ID, '_testimonial_rating', true);
    ?>
    <label for="testimonial_rating_field">評価:</label>
    <select name="testimonial_rating_field" id="testimonial_rating_field" class="postbox">
        <option value="">未選択</option>
        <option value="5" <?php selected($rating, '5'); ?>>★★★★★ (5)</option>
        <option value="4" <?php selected($rating, '4'); ?>>★★★★☆ (4)</option>
        <option value="3" <?php selected($rating, '3'); ?>>★★★☆☆ (3)</option>
        <option value="2" <?php selected($rating, '2'); ?>>★★☆☆☆ (2)</option>
        <option value="1" <?php selected($rating, '1'); ?>>★☆☆☆☆ (1)</option>
    </select>
    <?php
}

// メタボックスのデータを保存
function save_testimonial_meta_box_data($post_id) {
    if (array_key_exists('testimonial_rating_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_testimonial_rating',
            $_POST['testimonial_rating_field']
        );
    }
}
add_action('save_post', 'save_testimonial_meta_box_data');

// お客様の声を表示するショートコード [testimonials]
function testimonials_shortcode($atts) {
    $atts = shortcode_atts(array(
        'posts_per_page' => 3,
    ), $atts, 'testimonials');

    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => intval($atts['posts_per_page']),
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        $output = '<div class="testimonials-container">';
        while ($query->have_posts()) {
            $query->the_post();
            $rating = get_post_meta(get_the_ID(), '_testimonial_rating', true);

            $output .= '<div class="testimonial-item">';
            $output .= '<div class="testimonial-header">';
            
            if (has_post_thumbnail()) {
                $output .= get_the_post_thumbnail(get_the_ID(), 'thumbnail');
            }

            $output .= '<div class="reviewer-info">';
            $output .= '<h4>' . get_the_title() . '</h4>';
            $output .= '<div class="review-meta">';
            if ($rating) {
                $output .= '<div class="star-rating">';
                for ($i = 0; $i < 5; $i++) {
                    $output .= ($i < $rating) ? '★' : '☆';
                }
                $output .= '</div>';
            }
            $output .= '<span class="review-date">' . get_the_date() . '</span>';
            $output .= '</div>'; // .review-meta
            $output .= '</div>'; // .reviewer-info
            $output .= '</div>'; // .testimonial-header
            
            $output .= '<div class="testimonial-body">';
            $output .= get_the_content(); // 全文表示に変更
            $output .= '</div>';

            $output .= '</div>'; // .testimonial-item
        }
        $output .= '</div>';
        wp_reset_postdata();
        return $output;
    } else {
        return '<p>お客様の声はまだありません。</p>';
    }
}
add_shortcode('testimonials', 'testimonials_shortcode');

?>