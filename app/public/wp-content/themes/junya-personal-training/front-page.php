<?php get_header(); ?>

<!-- ヒーローセクション -->
<section id="home" class="hero" <?php 
$hero_bg_id = get_post_meta(get_the_ID(), '_hero_background_image', true);
$hero_bg_custom = get_post_meta(get_the_ID(), '_junya_hero_image', true);

if ($hero_bg_custom) {
    echo 'style="background-image: linear-gradient(135deg, rgba(116, 185, 255, 0.8) 0%, rgba(9, 132, 227, 0.8) 50%, rgba(0, 184, 148, 0.8) 100%), url(' . esc_url($hero_bg_custom) . ');"';
} elseif ($hero_bg_id) {
    $hero_bg_url = wp_get_attachment_image_url($hero_bg_id, 'full');
    echo 'style="background-image: linear-gradient(135deg, rgba(116, 185, 255, 0.8) 0%, rgba(9, 132, 227, 0.8) 50%, rgba(0, 184, 148, 0.8) 100%), url(' . esc_url($hero_bg_url) . ');"';
}
?>>
    <div class="hero-content">
        <p class="hero-subtitle">
            <?php echo esc_html(get_post_meta(get_the_ID(), '_hero_subtitle', true) ?: 'Personal Training'); ?>
        </p>
        <h1>
            <?php 
            $hero_title = get_post_meta(get_the_ID(), '_hero_title', true);
            echo $hero_title ? esc_html($hero_title) : '『しなきゃ』を『したい！』に変える<br>パーソナルトレーニング';
            ?>
        </h1>
        <p class="hero-description">
            <?php 
            $hero_description = get_post_meta(get_the_ID(), '_hero_description', true);
            echo $hero_description ? esc_html($hero_description) : 'お客様一人ひとりの身体と目標に合わせた『ちょうどいい』トレーニングで、健康で充実した毎日をサポートします';
            ?>
        </p>
        <div class="cta-buttons">
            <a href="#contact" class="cta-primary">体験トレーニング予約</a>
            <a href="#service-flow" class="cta-secondary">詳しく見る</a>
        </div>
    </div>
</section>

<!-- Why Me Section (図解・グラフ付き) -->
<section id="why-me" class="why-me-section">
    <h2 class="section-title">選ばれる理由</h2>
    <p class="section-subtitle">科学的根拠と経験に基づいた、あなただけのオーダーメイドプログラム</p>

    <div class="why-me-grid">
        <!-- 理由1: トータルサポート（レーダーチャート風） -->
        <div class="why-card">
            <div class="card-header">
                <span class="card-number">01</span>
                <h3>多角的なアプローチ</h3>
            </div>
            <p class="card-desc">単なる筋トレだけではありません。身体の機能を高めるための要素をバランスよく組み合わせます。</p>
            
            <div class="chart-container">
                <!-- CSSで描画するレーダーチャート風デザイン -->
                <div class="radar-chart-visual">
                    <div class="radar-axis axis-1"></div>
                    <div class="radar-axis axis-2"></div>
                    <div class="radar-axis axis-3"></div>
                    <div class="radar-shape"></div>
                    <div class="radar-label label-top">筋力</div>
                    <div class="radar-label label-right-top">柔軟性</div>
                    <div class="radar-label label-right-bottom">姿勢</div>
                    <div class="radar-label label-bottom">持久力</div>
                    <div class="radar-label label-left-bottom">栄養</div>
                    <div class="radar-label label-left-top">休養</div>
                </div>
            </div>
        </div>

        <!-- 理由2: 成長プロセス（ステップアップ図） -->
        <div class="why-card">
            <div class="card-header">
                <span class="card-number">02</span>
                <h3>確実なステップアップ</h3>
            </div>
            <p class="card-desc">いきなりハードな運動は行いません。身体の状態に合わせて段階的に負荷を上げていきます。</p>
            
            <div class="step-chart-visual">
                <div class="step-item step-1">
                    <span class="step-label">評価</span>
                    <div class="step-bar"></div>
                </div>
                <div class="step-item step-2">
                    <span class="step-label">改善</span>
                    <div class="step-bar"></div>
                </div>
                <div class="step-item step-3">
                    <span class="step-label">強化</span>
                    <div class="step-bar"></div>
                </div>
                <div class="step-item step-4">
                    <span class="step-label">定着</span>
                    <div class="step-bar"></div>
                </div>
                <div class="growth-arrow"></div>
            </div>
        </div>

        <!-- 理由3: コンディショニング（比較図） -->
        <div class="why-card">
            <div class="card-header">
                <span class="card-number">03</span>
                <h3>コンディショニング重視</h3>
            </div>
            <p class="card-desc">「鍛える」前に「整える」。マイナスをゼロにし、そこからプラスを作るアプローチです。</p>
            
            <div class="comparison-visual">
                <div class="comp-item bad">
                    <div class="comp-icon"><i class="ri-close-circle-line"></i></div>
                    <h4>一般的なジム</h4>
                    <p>痛みや歪みがあるまま<br>高負荷トレーニング</p>
                </div>
                <div class="comp-arrow"><i class="ri-arrow-right-line"></i></div>
                <div class="comp-item good">
                    <div class="comp-icon"><i class="ri-checkbox-circle-line"></i></div>
                    <h4>当ジム</h4>
                    <p>まず不調を取り除き<br>機能的な身体へ</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- サービス流れ -->
<section id="service-flow" class="service-flow">
    <h2 class="section-title">初回サービスの流れ</h2>
    <p class="section-subtitle">パーソナルトレーニングの4つのステップ</p>
    <div class="flow-grid">
        <div class="flow-step">
            <div class="step-number">01</div>
            <div class="step-image">
                <?php 
                $step1_id = get_post_meta(get_the_ID(), '_step1_image', true);
                if ($step1_id) {
                    echo wp_get_attachment_image($step1_id, 'medium', false, array('alt' => 'トレーニング目標設定の様子'));
                } else {
                    echo '<div class="placeholder">トレーニング目標設定の様子</div>';
                }
                ?>
            </div>
            <h3>お申し込み</h3>
            <p>トレーニング目標の調整を行います</p>
        </div>
        <div class="flow-step">
            <div class="step-number">02</div>
            <div class="step-image">
                <?php 
                $step2_id = get_post_meta(get_the_ID(), '_step2_image', true);
                if ($step2_id) {
                    echo wp_get_attachment_image($step2_id, 'medium', false, array('alt' => '施設外観写真'));
                } else {
                    echo '<div class="placeholder">施設外観写真</div>';
                }
                ?>
            </div>
            <h3>ご来店</h3>
            <p>ご案内した施設にお越しください</p>
        </div>
        <div class="flow-step">
            <div class="step-number">03</div>
            <div class="step-image">
                <?php 
                $step3_id = get_post_meta(get_the_ID(), '_step3_image', true);
                if ($step3_id) {
                    echo wp_get_attachment_image($step3_id, 'medium', false, array('alt' => 'カウンセリング風景'));
                } else {
                    echo '<div class="placeholder">カウンセリング風景</div>';
                }
                ?>
            </div>
            <h3>カウンセリング</h3>
            <p>入念なカウンセリング・世界基準のフィジカルテストを行い、お客様のお悩みやカラダの現状を把握、見つかった問題を解決するための方法などをお伝えします</p>
        </div>
        <div class="flow-step">
            <div class="step-number">04</div>
            <div class="step-image">
                <?php 
                $step4_id = get_post_meta(get_the_ID(), '_step4_image', true);
                if ($step4_id) {
                    echo wp_get_attachment_image($step4_id, 'medium', false, array('alt' => 'コンディショニング風景'));
                } else {
                    echo '<div class="placeholder">コンディショニング風景</div>';
                }
                ?>
            </div>
            <h3>コンディショニング</h3>
            <p>お客様のお悩みやカラダの問題を解決するため、コンディショニングトレーニングを行います</p>
        </div>
    </div>
</section>

<!-- 活動場所 -->
<section id="locations" class="locations">
    <h2 class="section-title">活動場所・アクセス</h2>
    <p class="section-subtitle">2つの便利な立地でトレーニング可能</p>

    <style>
        #locations {
            background-color: #f8f9fa; /* セクション全体の背景色を薄いグレーに */
            padding-top: 4rem;
            padding-bottom: 4rem;
        }
        .location-grid {
            display: flex;
            flex-direction: column;
            gap: 4rem; /* 各店舗間のスペース */
            margin-top: 3rem;
        }
        .location-item {
            display: grid;
            grid-template-columns: 1fr 1fr; /* 左右対称の2カラムレイアウト */
            gap: 2.5rem;
            align-items: center;
            background-color: #ffffff; /* カードは白背景 */
            padding: 2.5rem;
            border-radius: 1.5em;
            box-shadow: 0 12px 40px rgba(0,0,0,0.08); /* 洗練された影 */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .location-item:hover {
            transform: translateY(-5px); /* ホバー時に少し浮き上がる */
            box-shadow: 0 18px 50px rgba(0,0,0,0.12);
        }
        .location-details h3 {
            font-size: 2.2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #2c3e50; /* 落ち着いた色合いのテキスト */
        }
        .location-image img {
            width: 100%;
            height: auto;
            border-radius: 1em;
            margin-bottom: 1.5rem;
        }
        .location-details p {
            font-size: 1rem;
            line-height: 1.8;
            margin-bottom: 0.75rem;
            color: #34495e;
        }
        .location-details p strong {
            color: #2c3e50;
        }
        .location-map-container {
            width: 100%;
            height: 100%;
            min-height: 450px;
            border-radius: 1em;
            overflow: hidden;
        }
        .location-map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        /* スマホ・タブレット表示 */
        @media (max-width: 992px) {
            .location-item {
                grid-template-columns: 1fr; /* 1カラムに */
                padding: 2rem;
            }
        }
    </style>

    <div class="location-grid">
        <!-- HALLEL半蔵門店 -->
        <div class="location-item">
            <div class="location-details">
                <h3>HALLEL半蔵門店</h3>
                <div class="location-image">
                    <?php 
                    $hanzo_id = get_post_meta(get_the_ID(), '_hallel_hanzo_image', true);
                    if ($hanzo_id) {
                        echo wp_get_attachment_image($hanzo_id, 'large', false, array('alt' => 'HALLEL半蔵門店'));
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/no-image.png" alt="HALLEL半蔵門店">';
                    }
                    ?>
                </div>
                <p><strong>住所:</strong> 〒102-0082 東京都千代田区一番町10-8 一番町ウエストビルB1</p>
                <p><strong>アクセス:</strong> 東京メトロ半蔵門線「半蔵門駅」4番出口から徒歩2分</p>
            </div>
            <div class="location-map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.575919595287!2d139.7454663762499!3d35.68742892974959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c6902583e23%3A0x438c6a43809278b8!2zSEFMTEVMIOW5tOimqumjn-W6lw!5e0!3m2!1sen!2sjp!4v1720604275134!5m2!1sen!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- HALLEL恵比寿店 -->
        <div class="location-item">
            <div class="location-details">
                <h3>HALLEL恵比寿店</h3>
                <div class="location-image">
                     <?php 
                    $ebisu_id = get_post_meta(get_the_ID(), '_hallel_ebisu_image', true);
                    if ($ebisu_id) {
                        echo wp_get_attachment_image($ebisu_id, 'large', false, array('alt' => 'HALLEL恵比寿店'));
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/no-image.png" alt="HALLEL恵比寿店">';
                    }
                    ?>
                </div>
                <p><strong>住所:</strong> 〒150-0022 東京都渋谷区恵比寿南2-3-11 グレース青山2F</p>
                <p><strong>アクセス:</strong> JR・東京メトロ日比谷線「恵比寿駅」西口から徒歩3分</p>
            </div>
            <div class="location-map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.972958462057!2d139.7103567762484!3d35.65297183061788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b403e05f639%3A0x95e9261c192c6866!2zSEFMTEVMIOeUu-ebiuW6lw!5e0!3m2!1sen!2sjp!4v1720604325757!5m2!1sen!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- 料金表 -->
<section id="pricing" class="pricing">
    <h2 class="section-title">料金表</h2>
    <div class="pricing-grid">
        <div class="pricing-card">
            <h3>通常セッション</h3>
            <div class="price-item">
                <span>60分コース</span>
                <span class="price">¥13,200</span>
            </div>
            <div class="price-item">
                <span>90分コース</span>
                <span class="price">¥19,050</span>
            </div>
            <div class="price-item">
                <span>120分コース</span>
                <span class="price">¥24,400</span>
            </div>
        </div>
        <div class="pricing-card">
            <h3>出張セッション</h3>
            <div class="price-item">
                <span>60分コース</span>
                <span class="price">¥18,000</span>
            </div>
            <div class="price-item">
                <span>90分コース</span>
                <span class="price">¥26,250</span>
            </div>
            <div class="price-item">
                <span>120分コース</span>
                <span class="price">¥34,000</span>
            </div>
        </div>
    </div>
</section>

<!-- お客様の声（ショートコード使用） -->
<?php 
$testimonials = get_posts(array('post_type' => 'testimonial', 'posts_per_page' => 3));
if ($testimonials) : 
?>
<section id="testimonials" class="testimonials">
    <h2 class="section-title">お客様の声</h2>
    <p class="section-subtitle">実際にトレーニングを受けられたお客様からの声をご紹介します</p>
    <?php echo do_shortcode('[testimonials posts_per_page="3"]'); ?>
</section>
<?php endif; ?>

<!-- リッチプロフィール -->
<section id="profile" class="profile-rich">
    <h2 class="section-title">トレーナープロフィール</h2>
    
    <div class="profile-container">
        <!-- プロフィールヘッダー（画像 + 紹介文） -->
        <div class="profile-header-section">
            <div class="profile-image-wrapper">
                <div class="profile-image-inner">
                    <?php 
                    $profile_main_image = get_post_meta(get_the_ID(), '_junya_profile_main_image', true);
                    $profile_id = get_post_meta(get_the_ID(), '_profile_image', true);
                    if ($profile_main_image) {
                        echo '<img src="' . esc_url($profile_main_image) . '" alt="石原淳哉プロフィール写真">';
                    } elseif ($profile_id) {
                        echo wp_get_attachment_image($profile_id, 'large', false, array('alt' => '石原淳哉プロフィール写真'));
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/assets/images/default-profile.png' . '" alt="石原淳哉プロフィール写真">';
                    }
                    ?>
                </div>
                <div class="profile-badge">
                    <span class="badge-text">NASM-PES</span>
                    <span class="badge-sub">Certified</span>
                </div>
            </div>
            
            <div class="profile-intro-content">
                <div class="name-group">
                    <h3 class="trainer-name-jp">石原 淳哉</h3>
                    <span class="trainer-name-en">JUNYA ISHIHARA</span>
                </div>
                <p class="trainer-job-title">パーソナルトレーナー / コンディショニングスペシャリスト</p>
                
                <div class="trainer-message">
                    <p>「痩せたい」「痛みをとりたい」「もっと動けるようになりたい」<br>
                    お客様のそんな想いに、科学的根拠と情熱を持ってお応えします。</p>
                    <p>かつて「ホネカワスネオ」と呼ばれた自身の経験から、身体が変わる喜びと、その難しさを誰よりも理解しています。だからこそ、一人ひとりに寄り添った『ちょうどいい』トレーニングを提案できるのです。</p>
                </div>
            </div>
        </div>
        
        <!-- ビジュアルコンテンツグリッド -->
        <div class="profile-visual-grid">
            
            <!-- 左カラム：経歴（タイムライン） -->
            <div class="profile-column history-column">
                <h4 class="column-title"><i class="ri-history-line"></i> 経歴・実績</h4>
                <div class="timeline-container">
                    <div class="timeline-item">
                        <div class="timeline-year">2014-2017</div>
                        <div class="timeline-content">
                            <h5>都内フィットネスクラブ</h5>
                            <p>トレーナーとしての基礎を築く</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2017-2019</div>
                        <div class="timeline-content">
                            <h5>パーソナルトレーナー独立</h5>
                            <p>都内ジムでの指導・測定機器営業<br>スポルテック2018出展経験</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2019〜</div>
                        <div class="timeline-content">
                            <h5>TOPFORM（旧ダ・ヴィンチ）</h5>
                            <p>パーソナルトレーナーとして勤務開始</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year">2023〜</div>
                        <div class="timeline-content">
                            <h5>株式会社HALLEL</h5>
                            <p>運営参画・マネジメント業務</p>
                        </div>
                    </div>
                    <div class="timeline-item highlight">
                        <div class="timeline-year">2025.01〜</div>
                        <div class="timeline-content">
                            <h5>湘南学院高等学校 男子バレーボール部</h5>
                            <p>ストレングストレーナー就任</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 右カラム：スキル＆資格（図解風） -->
            <div class="profile-column skills-column">
                
                <!-- 専門分野（スキルバー） -->
                <div class="skills-section">
                    <h4 class="column-title"><i class="ri-focus-3-line"></i> 専門分野</h4>
                    <div class="skill-bars">
                        <div class="skill-bar-item">
                            <div class="skill-info">
                                <span>姿勢改善・機能改善</span>
                                <span class="skill-percent">100%</span>
                            </div>
                            <div class="skill-progress"><div class="skill-fill" style="width: 100%"></div></div>
                        </div>
                        <div class="skill-bar-item">
                            <div class="skill-info">
                                <span>疼痛改善（腰痛・肩こり等）</span>
                                <span class="skill-percent">95%</span>
                            </div>
                            <div class="skill-progress"><div class="skill-fill" style="width: 95%"></div></div>
                        </div>
                        <div class="skill-bar-item">
                            <div class="skill-info">
                                <span>ボディメイク</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-progress"><div class="skill-fill" style="width: 90%"></div></div>
                        </div>
                        <div class="skill-bar-item">
                            <div class="skill-info">
                                <span>パフォーマンス向上</span>
                                <span class="skill-percent">90%</span>
                            </div>
                            <div class="skill-progress"><div class="skill-fill" style="width: 90%"></div></div>
                        </div>
                    </div>
                </div>

                <!-- 資格（バッジスタイル） -->
                <div class="qualifications-section">
                    <h4 class="column-title"><i class="ri-award-line"></i> 保有資格</h4>
                    <div class="badges-grid">
                        <div class="badge-item">
                            <span class="badge-icon">🎓</span>
                            <div class="badge-details">
                                <span class="badge-label">日本大学文理学部</span>
                                <span class="badge-name">体育学科 卒業</span>
                            </div>
                        </div>
                        <div class="badge-item gold">
                            <span class="badge-icon">🏆</span>
                            <div class="badge-details">
                                <span class="badge-label">全米スポーツ医学協会</span>
                                <span class="badge-name">NASM-PES</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- プロフィールギャラリー -->
        <?php 
        $gallery_images = array();
        for ($i = 1; $i <= 6; $i++) {
            $gallery_image = get_post_meta(get_the_ID(), '_junya_gallery_image_' . $i, true);
            if ($gallery_image) {
                $gallery_images[] = $gallery_image;
            }
        }
        
        if (!empty($gallery_images)):
        ?>
        <div class="profile-gallery">
            <h4 class="gallery-title">GALLERY</h4>
            <div class="gallery-grid">
                <?php foreach ($gallery_images as $index => $image_url): ?>
                <div class="gallery-item">
                    <img src="<?php echo esc_url($image_url); ?>" alt="プロフィールギャラリー画像 <?php echo $index + 1; ?>" loading="lazy">
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- ミッション -->
<section id="mission" class="mission">
    <h2 class="section-title">トレーナーとして目指したいこと</h2>
    <div class="mission-content">
        <p><strong>「自分に関わる人たちすべてが、毎朝を笑顔で過ごし、人生を心から楽しめる健康な状態になってほしい」</strong></p>
        
        <p>毎朝、目覚めが良く、家族との時間を楽しめ、仕事でも活き活きと過ごせる。そんな「当たり前の幸せ」を支えられることが、トレーナーとしての使命だと考えています。</p>
        
        <p>多くの方が思い浮かべるパーソナルトレーナーの姿は、「重いウエイトを持ってスクワット」かもしれません。もちろん、それも効果的な方法の一つです。しかし私は、そこにコンディショニングという視点を組み合わせることで、お客様により良いサービスを提供できると考えています。</p>
        
        <p>私は一人一人の「できない」を「できた！」に変える喜びを共有しながら、皆様の人生に寄り添えるトレーナーでありたいと思っています。そして、多くの方に「石原さんに会えてよかった」と心から感じていただけるよう、これからも謙虚に、そして真摯に学びを重ねていきます。</p>
    </div>
</section>

<!-- FAQ -->
<section id="faq" class="faq">
    <h2 class="section-title">よくあるご質問</h2>
    <p class="section-subtitle">お客様からよくいただくご質問にお答えします</p>
    
    <?php
    // FAQ投稿があるかチェック
    $faq_posts = get_posts(array('post_type' => 'faq', 'posts_per_page' => 1));
    if ($faq_posts) {
        echo do_shortcode('[faq_list]');
    } else {
        // FAQがない場合はデフォルトのFAQを表示
        ?>
        <div class="faq-list">
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Q. コンディショニングとは何ですか？
                </div>
                <div class="faq-answer">
                    A. コンディショニングとは、身体の動きを改善し、機能的な状態に整えることです。単なる筋力アップではなく、関節の可動域向上、動作効率の改善、痛みの軽減など、身体全体のバランスを整えることで、日常生活の質を向上させます。私の得意分野でもあり、多くのお客様に効果を実感していただいています。
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Q. 初回に何を持参すればよいですか？
                </div>
                <div class="faq-answer">
                    A. 動きやすい服装（Tシャツ、ハーフパンツなど）、室内用運動靴、タオル、水分補給用のドリンクをお持ちください。シャワー設備もございますので、着替えもご用意いただけます。
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Q. 運動初心者でも大丈夫ですか？
                </div>
                <div class="faq-answer">
                    A. もちろんです！私自身、高校時代は「ホネカワスネオ」と呼ばれるほど痩せ型で運動に苦労した経験があります。お客様の体力レベルや身体の状態に合わせて、無理のないプログラムを組みますので、初心者の方でも安心してご参加いただけます。
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Q. どのような悩みに対応できますか？
                </div>
                <div class="faq-answer">
                    A. 「痩せたい」「体力をつけたい」「腰痛をなくしたい」「筋肉を大きくしたい」「身体の使い方が上手くなりたい」など、幅広いお悩みに対応します。ボディメイク、パフォーマンス向上、疼痛改善、怪我予防、姿勢改善など、お客様一人ひとりの目標に合わせたアプローチを行います。
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Q. 予約は必要ですか？
                </div>
                <div class="faq-answer">
                    A. はい、完全予約制となっております。お電話またはお問い合わせフォームから事前にご予約をお取りください。当日のご予約も可能ですが、空きがない場合もございますので、事前のご予約をお勧めします。
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question" onclick="toggleFaq(this)">
                    Q. キャンセルはいつまで可能ですか？
                </div>
                <div class="faq-answer">
                    A. ご予約日の前日20時までにご連絡いただければ、キャンセル料は発生しません。当日キャンセルの場合は、料金の50％をキャンセル料として頂戴いたします。無断キャンセルの場合は全額となりますのでご注意ください。
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</section>

<!-- Contact -->
<section id="contact">
    <h2 class="section-title">お申し込み・お問い合わせ</h2>
    <p class="section-subtitle">まずは体験トレーニングでお気軽にお試しください</p>
    
    <div style="max-width: 600px; margin: 3rem auto 0; text-align: center;">
        <div style="background: white; padding: 3rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); margin-bottom: 2rem;">
            <h3 style="color: #333; margin-bottom: 2rem; font-size: 1.5rem; font-weight: 600;">お問い合わせ方法</h3>
            
            <div style="margin-bottom: 2.5rem; text-align: left; padding-left: 1rem; border-left: 4px solid #3498db;">
                <h4 style="color: #333; margin-bottom: 0.5rem; font-size: 1.2rem;">Googleフォーム</h4>
                <p style="color: #666; margin-bottom: 1rem; font-size: 0.95rem;">新しいタブでフォームが開きます</p>
                <div style="text-align: center;">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSeBS4d_e6gGIBJAJljrpFUtODK1WIYXYMqzOk7QcgQw45GYFg/viewform" target="_blank" 
                       style="display: inline-block; background: linear-gradient(45deg, #3498db, #2ecc71); color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 25px; font-weight: 600;">
                        お問い合わせフォームを開く
                    </a>
                </div>
            </div>

            <div style="margin-bottom: 2.5rem; text-align: left; padding-left: 1rem; border-left: 4px solid #e74c3c;">
                <h4 style="color: #333; margin-bottom: 0.5rem; font-size: 1.2rem;">メール直接連絡</h4>
                <p style="color: #666; margin-bottom: 1rem; font-size: 0.95rem;">お急ぎの場合は直接メールでご連絡ください</p>
                <div style="text-align: center;">
                    <a href="mailto:junnya1995@gmail.com?subject=パーソナルトレーニングについて&body=お名前：%0A%0Aメールアドレス：%0A%0Aお問い合わせ内容：%0A%0A" 
                       style="display: inline-block; background: linear-gradient(45deg, #e74c3c, #f39c12); color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 25px; font-weight: 600; margin-bottom: 0.5rem;">
                        メールを送る
                    </a>
                    <p style="color: #666; font-size: 0.9rem; margin: 0;">junnya1995@gmail.com</p>
                </div>
            </div>

            <div style="text-align: left; padding-left: 1rem; border-left: 4px solid #00c300;">
                <h4 style="color: #333; margin-bottom: 0.5rem; font-size: 1.2rem;">LINE公式アカウント</h4>
                <p style="color: #666; margin-bottom: 1rem; font-size: 0.95rem;">LINEでのお問い合わせも可能です</p>
                <div style="text-align: center;">
                    <a href="https://lin.ee/4srdPSa" target="_blank"
                       style="display: inline-block; background: #00c300; color: white; padding: 1rem 2rem; text-decoration: none; border-radius: 25px; font-weight: 600; margin-bottom: 0.5rem;">
                        LINE友だち追加
                    </a>
                    <p style="color: #666; font-size: 0.9rem; margin: 0;">気軽にメッセージをお送りください</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>