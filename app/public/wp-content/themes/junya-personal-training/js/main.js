jQuery(document).ready(function($) {
    
    // 画像アップロード機能の共通処理
    function setupImageUpload(buttonId, inputId) {
        $(buttonId).on('click', function(e) {
            e.preventDefault();
            
            // メディアライブラリを開く
            var mediaUploader = wp.media({
                title: '画像を選択',
                button: {
                    text: '画像を選択'
                },
                multiple: false,
                library: {
                    type: 'image'
                }
            });
            
            // 画像が選択されたときの処理
            mediaUploader.on('select', function() {
                var attachment = mediaUploader.state().get('selection').first().toJSON();
                $(inputId).val(attachment.url);
                
                // プレビュー画像を更新
                var previewContainer = $(inputId).parent();
                var existingPreview = previewContainer.find('img');
                
                if (existingPreview.length) {
                    existingPreview.attr('src', attachment.url);
                } else {
                    previewContainer.append('<div style="margin-top: 10px;"><img src="' + attachment.url + '" style="max-width: 200px; height: auto; border-radius: 5px;" /></div>');
                }
            });
            
            // メディアライブラリを開く
            mediaUploader.open();
        });
    }
    
    // 各種画像アップロードボタンの設定
    setupImageUpload('#junya_hero_image_button', '#junya_hero_image');
    setupImageUpload('#junya_profile_main_image_button', '#junya_profile_main_image');
    
    // プロフィールギャラリーの画像アップロード
    for (var i = 1; i <= 6; i++) {
        (function(index) {
            var buttonId = '#junya_gallery_image_' + index + '_button';
            var inputId = '#junya_gallery_image_' + index;
            
            $(buttonId).on('click', function(e) {
                e.preventDefault();
                
                var mediaUploader = wp.media({
                    title: 'ギャラリー画像を選択',
                    button: {
                        text: '画像を選択'
                    },
                    multiple: false,
                    library: {
                        type: 'image'
                    }
                });
                
                mediaUploader.on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    $(inputId).val(attachment.url);
                    
                    // プレビュー画像を更新
                    var previewContainer = $(inputId).closest('.gallery-item');
                    var existingPreview = previewContainer.find('img');
                    
                    if (existingPreview.length) {
                        existingPreview.attr('src', attachment.url);
                    } else {
                        previewContainer.append('<div style="margin-top: 10px;"><img src="' + attachment.url + '" style="max-width: 150px; height: auto; border-radius: 5px;" /></div>');
                    }
                });
                
                mediaUploader.open();
            });
        })(i);
    }
    
    // リアルタイムプレビュー機能
    function setupRealtimePreview(inputId) {
        $(inputId).on('input', function() {
            var imageUrl = $(this).val();
            var previewContainer = $(this).parent();
            
            if (imageUrl && isValidImageUrl(imageUrl)) {
                var existingPreview = previewContainer.find('img');
                if (existingPreview.length) {
                    existingPreview.attr('src', imageUrl);
                } else {
                    previewContainer.append('<div style="margin-top: 10px;"><img src="' + imageUrl + '" style="max-width: 200px; height: auto; border-radius: 5px;" /></div>');
                }
            }
        });
    }
    
    // 画像URL検証関数
    function isValidImageUrl(url) {
        if (!url) return false;
        
        // 基本的なURL形式チェック
        var urlPattern = /^https?:\/\/.+/;
        if (!urlPattern.test(url)) return false;
        
        // 画像拡張子チェック
        var imageExtensions = /\.(jpg|jpeg|png|gif|webp|svg)$/i;
        return imageExtensions.test(url);
    }
    
    // リアルタイムプレビューの設定
    setupRealtimePreview('#junya_hero_image');
    setupRealtimePreview('#junya_profile_main_image');
    
    for (var i = 1; i <= 6; i++) {
        setupRealtimePreview('#junya_gallery_image_' + i);
    }
    
    // フォーム送信時の検証
    $('form#post').on('submit', function(e) {
        var hasErrors = false;
        
        // 画像URLの検証
        var imageInputs = [
            '#junya_hero_image',
            '#junya_profile_main_image'
        ];
        
        imageInputs.forEach(function(inputId) {
            var imageUrl = $(inputId).val();
            if (imageUrl && !isValidImageUrl(imageUrl)) {
                alert('無効な画像URLが入力されています: ' + inputId);
                hasErrors = true;
                return false;
            }
        });
        
        // ギャラリー画像の検証
        for (var i = 1; i <= 6; i++) {
            var galleryImageUrl = $('#junya_gallery_image_' + i).val();
            if (galleryImageUrl && !isValidImageUrl(galleryImageUrl)) {
                alert('無効なギャラリー画像URLが入力されています: ギャラリー画像 ' + i);
                hasErrors = true;
                return false;
            }
        }
        
        if (hasErrors) {
            e.preventDefault();
        }
    });
    
    // 管理画面のスタイル調整
    $('.gallery-item').css({
        'margin-bottom': '20px',
        'padding': '15px',
        'border': '1px solid #ddd',
        'border-radius': '5px',
        'background-color': '#f9f9f9'
    });
    
    // 保存成功時の通知
    if (window.location.search.indexOf('message=1') !== -1) {
        $('<div class="notice notice-success is-dismissible"><p>プロフィール設定が保存されました。</p></div>').insertAfter('.wrap h1');
    }
    
    // デバッグ情報（開発時のみ）
    if (window.location.search.indexOf('debug=1') !== -1) {
        console.log('Junya Admin Script Loaded');
        console.log('Meta boxes found:', $('.postbox').length);
    }
    
    // ギャラリーアイテムのドラッグ&ドロップ並び替え（jQuery UI利用時）
    if (typeof $.fn.sortable !== 'undefined') {
        $('#junya_gallery_items').sortable({
            items: '.gallery-item',
            cursor: 'move',
            opacity: 0.8,
            placeholder: 'ui-state-highlight',
            update: function(event, ui) {
                console.log('ギャラリー項目が並び替えられました');
            }
        });
    }
});