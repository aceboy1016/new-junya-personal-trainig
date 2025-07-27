<?php get_header(); ?>

<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center pt-24 overflow-hidden" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)), radial-gradient(ellipse at center, rgba(245, 158, 11, 0.1) 0%, transparent 70%), url('<?php echo esc_url(get_theme_mod('hero_background_image', 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80')); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-gold-gradient rounded-full filter blur-3xl animate-pulse"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-gold-gradient rounded-full filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
    </div>
    
    <div class="container mx-auto px-6 text-center relative z-10">
        <div class="max-w-7xl mx-auto">
            <!-- Enhanced subtitle -->
            <div class="mb-8">
                <p class="text-gold-400 text-xl tracking-widest uppercase font-bold mb-2 animate-fade-in-up">
                    <?php echo esc_html(get_theme_mod('hero_subtitle', 'Premium Personal Training')); ?>
                </p>
                <div class="w-20 h-1 bg-gold-gradient mx-auto"></div>
            </div>
            
            <!-- Enhanced main title -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl xl:text-9xl font-black text-white leading-tight mb-12 animate-fade-in-up" style="animation-delay: 0.3s;">
                <?php echo wp_kses_post(get_theme_mod('hero_title', '『しなきゃ』を<br><span class="text-gradient bg-gradient-to-r from-yellow-400 via-gold-500 to-amber-600 bg-clip-text text-transparent">『したい！』</span><br>に変える')); ?>
            </h1>
            
            <!-- Enhanced description -->
            <p class="text-xl md:text-2xl text-gray-200 max-w-4xl mx-auto mb-16 leading-relaxed font-light animate-fade-in-up" style="animation-delay: 0.6s;">
                <?php echo esc_html(get_theme_mod('hero_description', 'お客様一人ひとりの身体と目標に合わせた『ちょうどいい』トレーニングで、健康で充実した毎日をサポートします')); ?>
            </p>
            
            <!-- Enhanced CTA buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-20 animate-fade-in-up" style="animation-delay: 0.9s;">
                <a href="#contact" class="bg-gold-gradient text-white px-12 py-5 font-black tracking-wide hover:shadow-2xl hover:scale-105 transition-all duration-300 uppercase text-lg border-2 border-transparent hover:border-white/20 relative group">
                    <i class="ri-calendar-line mr-3"></i>体験トレーニング予約
                    <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </a>
                <a href="#service-flow" class="border-2 border-white text-white px-12 py-5 font-bold tracking-wide hover:bg-white hover:text-black transition-all duration-300 uppercase text-lg backdrop-blur-sm">
                    <i class="ri-play-circle-line mr-3"></i>詳しく見る
                </a>
            </div>

            <!-- Enhanced Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto animate-fade-in-up" style="animation-delay: 1.2s;">
                <div class="bg-white/10 glass-effect border border-white/30 p-8 backdrop-blur-lg hover:bg-white/20 transition-all duration-300 group">
                    <div class="text-4xl font-black text-gold-400 mb-3 group-hover:scale-110 transition-transform duration-300">3000+</div>
                    <div class="text-white font-bold tracking-wide uppercase">指導実績</div>
                    <div class="text-gray-300 text-sm mt-1">Proven Track Record</div>
                </div>
                <div class="bg-white/10 glass-effect border border-white/30 p-8 backdrop-blur-lg hover:bg-white/20 transition-all duration-300 group">
                    <div class="text-4xl font-black text-gold-400 mb-3 group-hover:scale-110 transition-transform duration-300">10+</div>
                    <div class="text-white font-bold tracking-wide uppercase">年の経験</div>
                    <div class="text-gray-300 text-sm mt-1">Years of Excellence</div>
                </div>
                <div class="bg-white/10 glass-effect border border-white/30 p-8 backdrop-blur-lg hover:bg-white/20 transition-all duration-300 group">
                    <div class="text-4xl font-black text-gold-400 mb-3 group-hover:scale-110 transition-transform duration-300">100%</div>
                    <div class="text-white font-bold tracking-wide uppercase">満足度</div>
                    <div class="text-gray-300 text-sm mt-1">Customer Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#service-flow" class="text-white/70 hover:text-white transition-colors duration-300">
            <i class="ri-arrow-down-line text-2xl"></i>
        </a>
    </div>
</section>

<!-- Methodology Section -->
<section id="methodology" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-20">
            <p class="text-gold-500 font-bold tracking-widest uppercase mb-2">OUR METHOD</p>
            <h2 class="text-5xl font-black text-black mb-4 tracking-wide">
                ELITE <span class="text-gradient">METHODOLOGY</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto tracking-wide">
                科学的根拠と豊富な経験に基づいた独自のメソッドで、確実な結果と最高級の体験をお約束いたします
            </p>
        </div>

        <!-- Methodology Steps -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-12 relative max-w-7xl mx-auto">
            
            <!-- Step 1: Assessment -->
            <div class="relative p-8 bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 border-t-4 border-gold-500">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-gold-gradient text-white flex-shrink-0 flex items-center justify-center text-2xl font-bold mr-4">01</div>
                    <div>
                        <h3 class="text-xl font-bold text-black">ASSESSMENT</h3>
                        <p class="text-gold-500 font-semibold">詳細分析</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">お客様の体組成、姿勢、動作パターン、ライフスタイルを徹底的に分析。最新の測定機器を使用した科学的アプローチで現状を正確に把握します。</p>
            </div>

            <!-- Step 2: Design -->
            <div class="relative p-8 bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 border-t-4 border-gold-500">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-gold-gradient text-white flex-shrink-0 flex items-center justify-center text-2xl font-bold mr-4">02</div>
                    <div>
                        <h3 class="text-xl font-bold text-black">DESIGN</h3>
                        <p class="text-gold-500 font-semibold">完全オーダーメイド</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">分析結果をもとに、お客様だけの専用プログラムを設計。目標達成への最短ルートを科学的根拠に基づいて構築いたします。</p>
            </div>

            <!-- Step 3: Execution -->
            <div class="relative p-8 bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 border-t-4 border-gold-500">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-gold-gradient text-white flex-shrink-0 flex items-center justify-center text-2xl font-bold mr-4">03</div>
                    <div>
                        <h3 class="text-xl font-bold text-black">EXECUTION</h3>
                        <p class="text-gold-500 font-semibold">精密実行</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">洗練されたテクニックと最新理論を駆使したトレーニング指導。一つ一つの動作を丁寧に指導し、効果を最大化します。</p>
            </div>

            <!-- Step 4: Evolution -->
            <div class="relative p-8 bg-white shadow-lg hover:shadow-xl transition-shadow duration-300 border-t-4 border-gold-500">
                <div class="flex items-center mb-4">
                    <div class="w-16 h-16 rounded-full bg-gold-gradient text-white flex-shrink-0 flex items-center justify-center text-2xl font-bold mr-4">04</div>
                    <div>
                        <h3 class="text-xl font-bold text-black">EVOLUTION</h3>
                        <p class="text-gold-500 font-semibold">継続進化</p>
                    </div>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">定期的な評価と調整により、常にプログラムを最適化。お客様の進歩に合わせて継続的にアップデートし続けます。</p>
            </div>
        </div>
    </div>
</section>

<!-- Image Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto bg-white shadow-2xl p-4 border-t-8 border-gold-500">
            <div class="relative group overflow-hidden">
                <img src="<?php echo esc_url(get_theme_mod('methodology_diagram_image', 'https://i.imgur.com/9g2D5A1.png')); ?>" 
                     alt="Methodology Diagram" 
                     class="w-full h-auto">
                <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                     <div class="text-center text-white p-8">
                        <h3 class="text-3xl font-black mb-4">科学的メソッド × 最高級サービス</h3>
                        <p class="text-lg">最新のスポーツ科学とプレミアムな体験を融合</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
            <!-- Feature 1: Science-Based -->
            <div class="text-center p-8 bg-white shadow-lg border border-gray-200 hover:shadow-2xl hover:border-gold-500 transition-all duration-300 group">
                <div class="mb-6">
                    <i class="ri-flask-line text-5xl text-gold-500 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 tracking-wide">SCIENCE-BASED</h3>
                <p class="text-gray-500 font-medium mb-4">科学的根拠</p>
                <p class="text-gray-600 text-sm leading-relaxed">最新のスポーツ科学と栄養学に基づいた効果実証済みのメソッド</p>
            </div>

            <!-- Feature 2: Personalized -->
            <div class="text-center p-8 bg-white shadow-lg border border-gray-200 hover:shadow-2xl hover:border-gold-500 transition-all duration-300 group">
                <div class="mb-6">
                    <i class="ri-user-settings-line text-5xl text-gold-500 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 tracking-wide">PERSONALIZED</h3>
                <p class="text-gray-500 font-medium mb-4">完全個別対応</p>
                <p class="text-gray-600 text-sm leading-relaxed">一人ひとりの体質・目標・ライフスタイルに完全カスタマイズ</p>
            </div>

            <!-- Feature 3: Holistic -->
            <div class="text-center p-8 bg-white shadow-lg border border-gray-200 hover:shadow-2xl hover:border-gold-500 transition-all duration-300 group">
                <div class="mb-6">
                    <i class="ri-focus-3-line text-5xl text-gold-500 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 tracking-wide">HOLISTIC</h3>
                <p class="text-gray-500 font-medium mb-4">統合的アプローチ</p>
                <p class="text-gray-600 text-sm leading-relaxed">運動・栄養・回復・メンタルケアを統合した全体的なサポート</p>
            </div>

            <!-- Feature 4: Luxury -->
            <div class="text-center p-8 bg-white shadow-lg border border-gray-200 hover:shadow-2xl hover:border-gold-500 transition-all duration-300 group">
                <div class="mb-6">
                    <i class="ri-vip-crown-line text-5xl text-gold-500 group-hover:scale-110 transition-transform duration-300"></i>
                </div>
                <h3 class="text-xl font-bold text-black mb-3 tracking-wide">LUXURY</h3>
                <p class="text-gray-500 font-medium mb-4">最高級体験</p>
                <p class="text-gray-600 text-sm leading-relaxed">上質な環境とプレミアムサービスで最高のフィットネス体験を提供</p>
            </div>
        </div>
    </div>
</section>

<!-- Service Flow Section -->
<section id="service-flow" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black text-black mb-4 tracking-wide">
                初回サービスの<span class="text-gradient">流れ</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto tracking-wide">
                パーソナルトレーニングの4つのステップ
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
            <div class="group">
                <div class="bg-white shadow-xl hover:shadow-2xl transition-all duration-300 p-8 text-center hover:scale-105 border-t-4 border-gold-500">
                    <div class="w-16 h-16 bg-gold-gradient rounded-full flex items-center justify-center text-white font-black text-2xl mx-auto mb-6">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4 tracking-wide">お申し込み</h3>
                    <p class="text-gray-600 leading-relaxed">
                        トレーニング目標の調整を行います
                    </p>
                </div>
            </div>
            
            <div class="group">
                <div class="bg-white shadow-xl hover:shadow-2xl transition-all duration-300 p-8 text-center hover:scale-105 border-t-4 border-gold-500">
                    <div class="w-16 h-16 bg-gold-gradient rounded-full flex items-center justify-center text-white font-black text-2xl mx-auto mb-6">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4 tracking-wide">ご来店</h3>
                    <p class="text-gray-600 leading-relaxed">
                        ご案内した施設にお越しください
                    </p>
                </div>
            </div>
            
            <div class="group">
                <div class="bg-white shadow-xl hover:shadow-2xl transition-all duration-300 p-8 text-center hover:scale-105 border-t-4 border-gold-500">
                    <div class="w-16 h-16 bg-gold-gradient rounded-full flex items-center justify-center text-white font-black text-2xl mx-auto mb-6">
                        03
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4 tracking-wide">カウンセリング</h3>
                    <p class="text-gray-600 leading-relaxed text-sm">
                        入念なカウンセリング・世界基準のフィジカルテストを行い、お客様のお悩みやカラダの現状を把握、見つかった問題を解決するための方法などをお伝えします
                    </p>
                </div>
            </div>
            
            <div class="group">
                <div class="bg-white shadow-xl hover:shadow-2xl transition-all duration-300 p-8 text-center hover:scale-105 border-t-4 border-gold-500">
                    <div class="w-16 h-16 bg-gold-gradient rounded-full flex items-center justify-center text-white font-black text-2xl mx-auto mb-6">
                        04
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4 tracking-wide">コンディショニング</h3>
                    <p class="text-gray-600 leading-relaxed">
                        お客様のお悩みやカラダの問題を解決するため、コンディショニングトレーニングを行います
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Locations Section -->
<section id="locations" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black text-black mb-4 tracking-wide">
                活動場所・<span class="text-gradient">アクセス</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto tracking-wide">
                2つの便利な立地でトレーニング可能
            </p>
        </div>
        
        <!-- HALLEL半蔵門店 -->
        <?php
            $hanzomon_title = get_theme_mod('hanzomon_location_title', 'HALLEL半蔵門店');
            $hanzomon_address = get_theme_mod('hanzomon_location_address', '〒102-0082 東京都千代田区一番町10-8 一番町ウエストビルB1<br>東京メトロ半蔵門線「半蔵門駅」4番出口から徒歩2分');
            $hanzomon_map = get_theme_mod('hanzomon_map_embed_code');
            $hanzomon_image = get_theme_mod('hallel_hanzoomon_image', 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
        ?>
        <div class="mb-16 max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- 詳細 -->
                <div>
                    <div class="bg-white shadow-xl p-8 border-t-8 border-gold-500 h-full flex flex-col">
                        <div class="relative overflow-hidden mb-6">
                            <img src="<?php echo esc_url($hanzomon_image); ?>" alt="<?php echo esc_attr($hanzomon_title); ?>" class="w-full h-48 object-cover">
                            <div class="absolute top-4 left-4 bg-gold-gradient text-white px-3 py-1 text-sm font-bold uppercase tracking-wide">
                                Premium Location
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-black mb-4 tracking-wide"><?php echo esc_html($hanzomon_title); ?></h3>
                        <div class="space-y-3 text-gray-600 flex-grow">
                            <div class="flex items-start">
                                <i class="ri-map-pin-line text-gold-500 mr-3 mt-1"></i>
                                <div>
                                    <p class="font-medium"><?php echo nl2br(wp_kses_post($hanzomon_address)); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- マップ -->
                <div>
                    <div class="bg-white shadow-xl p-4 border-t-8 border-gold-500 h-full">
                        <?php if ($hanzomon_map) : ?>
                            <?php echo $hanzomon_map; // Raw Iframe ?>
                        <?php else: ?>
                            <div class="w-full h-full min-h-80 bg-gray-200 flex items-center justify-center"><p class="text-gray-500">地図情報を設定してください</p></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- HALLEL恵比寿店 -->
        <?php
            $ebisu_title = get_theme_mod('ebisu_location_title', 'HALLEL恵比寿店');
            $ebisu_address = get_theme_mod('ebisu_location_address', '〒150-0022 東京都渋谷区恵比寿南2-3-11 グレース青山2F<br>JR・東京メトロ日比谷線「恵比寿駅」西口から徒歩3分');
            $ebisu_map = get_theme_mod('ebisu_map_embed_code');
            $ebisu_image = get_theme_mod('hallel_ebisu_image', 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');
        ?>
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- 詳細 -->
                <div>
                    <div class="bg-white shadow-xl p-8 border-t-8 border-gold-500 h-full flex flex-col">
                        <div class="relative overflow-hidden mb-6">
                            <img src="<?php echo esc_url($ebisu_image); ?>" alt="<?php echo esc_attr($ebisu_title); ?>" class="w-full h-48 object-cover">
                            <div class="absolute top-4 left-4 bg-gold-gradient text-white px-3 py-1 text-sm font-bold uppercase tracking-wide">
                                Premium Location
                            </div>
                        </div>
                        <h3 class="text-2xl font-bold text-black mb-4 tracking-wide"><?php echo esc_html($ebisu_title); ?></h3>
                        <div class="space-y-3 text-gray-600 flex-grow">
                            <div class="flex items-start">
                                <i class="ri-map-pin-line text-gold-500 mr-3 mt-1"></i>
                                <div>
                                    <p class="font-medium"><?php echo nl2br(wp_kses_post($ebisu_address)); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- マップ -->
                <div>
                    <div class="bg-white shadow-xl p-4 border-t-8 border-gold-500 h-full">
                         <?php if ($ebisu_map) : ?>
                            <?php echo $ebisu_map; // Raw Iframe ?>
                        <?php else: ?>
                            <div class="w-full h-full min-h-80 bg-gray-200 flex items-center justify-center"><p class="text-gray-500">地図情報を設定してください</p></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-gold-500 font-bold tracking-widest uppercase mb-2">PREMIUM PROGRAMS</p>
            <h2 class="text-6xl font-black text-black mb-4 tracking-wide">
                CHOOSE YOUR <span class="text-gradient">LUXURY</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto tracking-wide">
                あなたのライフスタイルに合わせた最高級のプログラム
            </p>
        </div>

        <!-- 通常セッション -->
        <div class="mb-20">
            <h3 class="text-4xl font-bold text-center text-black mb-12 tracking-wide">通常セッション</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <!-- 60分コース -->
                <div class="bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 flex flex-col border-t-4 border-gold-400">
                    <div class="p-8 text-center flex-grow">
                        <div class="mb-6"><i class="ri-time-line text-5xl text-gold-400"></i></div>
                        <h4 class="text-2xl font-black tracking-wide">60分コース</h4>
                        <div class="text-5xl font-black text-black my-6">¥13,200<span class="text-xl font-bold">/回</span></div>
                        <p class="text-gray-600 leading-relaxed mb-8 min-h-[70px]">基本的なトレーニングを集中して行いたい方向け。</p>
                    </div>
                    <div class="p-8 pt-0"><a href="#contact" class="bg-gold-gradient text-white px-12 py-4 font-bold tracking-wide hover:shadow-2xl transition-all duration-300 uppercase text-lg w-full block text-center">このプランを選ぶ</a></div>
                </div>
                <!-- 90分コース -->
                <div class="bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 flex flex-col border-t-4 border-gold-500">
                    <div class="p-8 text-center flex-grow">
                        <div class="mb-6"><i class="ri-time-line text-5xl text-gold-500"></i></div>
                        <h4 class="text-2xl font-black tracking-wide">90分コース</h4>
                        <div class="text-5xl font-black text-black my-6">¥19,050<span class="text-xl font-bold">/回</span></div>
                        <p class="text-gray-600 leading-relaxed mb-8 min-h-[70px]">トレーニングとコンディショニングを組み合わせた総合ケア。</p>
                    </div>
                    <div class="p-8 pt-0"><a href="#contact" class="bg-gold-gradient text-white px-12 py-4 font-bold tracking-wide hover:shadow-2xl transition-all duration-300 uppercase text-lg w-full block text-center">このプランを選ぶ</a></div>
                </div>
                <!-- 120分コース -->
                <div class="bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 flex flex-col border-t-4 border-gold-600">
                    <div class="p-8 text-center flex-grow">
                        <div class="mb-6"><i class="ri-time-line text-5xl text-gold-600"></i></div>
                        <h4 class="text-2xl font-black tracking-wide">120分コース</h4>
                        <div class="text-5xl font-black text-black my-6">¥24,400<span class="text-xl font-bold">/回</span></div>
                        <p class="text-gray-600 leading-relaxed mb-8 min-h-[70px]">より深く、時間をかけて身体と向き合いたい方に最適。</p>
                    </div>
                    <div class="p-8 pt-0"><a href="#contact" class="bg-gold-gradient text-white px-12 py-4 font-bold tracking-wide hover:shadow-2xl transition-all duration-300 uppercase text-lg w-full block text-center">このプランを選ぶ</a></div>
                </div>
            </div>
        </div>

        <!-- 出張セッション -->
        <div>
            <h3 class="text-4xl font-bold text-center text-black mb-12 tracking-wide">出張セッション</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <!-- 60分コース -->
                <div class="bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 flex flex-col border-t-4 border-gold-500">
                    <div class="p-8 text-center flex-grow">
                        <div class="mb-6"><i class="ri-roadster-line text-5xl text-gold-500"></i></div>
                        <h4 class="text-2xl font-black tracking-wide">60分コース</h4>
                        <div class="text-5xl font-black text-black my-6">¥18,000<span class="text-xl font-bold">/回</span></div>
                        <p class="text-gray-600 leading-relaxed mb-8 min-h-[70px]">ご指定の場所で質の高いトレーニングを手軽に。</p>
                    </div>
                    <div class="p-8 pt-0"><a href="#contact" class="bg-gold-gradient text-white px-12 py-4 font-bold tracking-wide hover:shadow-2xl transition-all duration-300 uppercase text-lg w-full block text-center">このプランを選ぶ</a></div>
                </div>
                <!-- 90分コース -->
                <div class="bg-white shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105 flex flex-col border-t-4 border-gold-600">
                    <div class="p-8 text-center flex-grow">
                        <div class="mb-6"><i class="ri-roadster-line text-5xl text-gold-600"></i></div>
                        <h4 class="text-2xl font-black tracking-wide">90分コース</h4>
                        <div class="text-5xl font-black text-black my-6">¥26,250<span class="text-xl font-bold">/回</span></div>
                        <p class="text-gray-600 leading-relaxed mb-8 min-h-[70px]">店舗と変わらないプレミアムなトレーニングをご自宅で。</p>
                    </div>
                    <div class="p-8 pt-0"><a href="#contact" class="bg-gold-gradient text-white px-12 py-4 font-bold tracking-wide hover:shadow-2xl transition-all duration-300 uppercase text-lg w-full block text-center">このプランを選ぶ</a></div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black text-black mb-4 tracking-wide">
                お客様の<span class="text-gradient">声</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto tracking-wide">
                実際にトレーニングを受けられたお客様からの声をご紹介します
            </p>
        </div>
        
        <!-- Testimonials Shortcode -->
        <?php echo do_shortcode('[testimonials posts_per_page="3"]'); ?>
    </div>
</section>

<!-- Profile Section -->
<section id="profile" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black text-black mb-4 tracking-wide">
                トレーナー<span class="text-gradient">プロフィール</span>
            </h2>
        </div>

        <!-- Main Profile (2カラム) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-start max-w-6xl mx-auto mb-20">
            <!-- 左: プロフィール写真 -->
            <div class="space-y-8 mx-auto lg:mx-0">
                <div class="relative w-full max-w-[400px]">
                    <img src="<?php echo esc_url(get_theme_mod('profile_image', 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80')); ?>" 
                         alt="石原淳哉" 
                         class="w-full h-[500px] object-cover border-4 border-gold-500">
                    <div class="absolute bottom-4 right-4 bg-gold-gradient w-28 h-28 rounded-full flex flex-col items-center justify-center text-center shadow-lg border-4 border-white/50">
                        <div class="text-3xl font-black text-white leading-none">NASM</div>
                        <div class="text-xs text-white uppercase tracking-widest mt-1">Certified</div>
                    </div>
                </div>
                <div class="relative w-full max-w-[400px]">
                     <img src="<?php echo esc_url(get_theme_mod('experience_image', 'https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?auto=format&fit=crop&w=600&q=80')); ?>" 
                         alt="職歴・経験 イメージ" 
                         class="w-full h-[500px] object-cover border-4 border-gold-500">
                </div>
            </div>

            <!-- 右: 詳細情報 -->
            <div class="space-y-12">
                <!-- 自己紹介文 -->
                <div>
                    <h3 class="text-4xl font-black text-black">石原 淳哉</h3>
                    <p class="text-lg font-bold text-gold-500 mb-4">パーソナルトレーナー</p>
                </div>

                <!-- 専門分野・強み -->
                <div>
                    <h4 class="text-2xl font-bold text-black mb-6 border-l-4 border-gold-500 pl-4">専門分野・強み</h4>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="bg-white p-4 text-center shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                            <i class="ri-line-chart-line text-4xl text-gold-500 mb-2"></i>
                            <p class="font-semibold text-black">ボディメイク・パフォーマンス向上</p>
                        </div>
                        <div class="bg-white p-4 text-center shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                            <i class="ri-body-scan-line text-4xl text-gold-500 mb-2"></i>
                            <p class="font-semibold text-black">疼痛・姿勢改善</p>
                        </div>
                        <div class="bg-white p-4 text-center shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                            <i class="ri-shield-check-line text-4xl text-gold-500 mb-2"></i>
                            <p class="font-semibold text-black">世界基準のフィジカルテスト</p>
                        </div>
                    </div>
                </div>

                <!-- 学歴・資格 -->
                <div>
                    <h4 class="text-2xl font-bold text-black mb-6 border-l-4 border-gold-500 pl-4">学歴・資格</h4>
                    <div class="bg-white p-6 shadow-lg border border-gray-100">
                        <ul class="list-disc list-inside space-y-3 text-gray-700">
                            <li>日本大学文理学部体育学科卒業</li>
                            <li>全米スポーツ医学協会認定パフォーマンス向上専門資格（NASM-PES）</li>
                        </ul>
                    </div>
                </div>

                <!-- 職歴・経験 -->
                <div>
                    <h4 class="text-2xl font-bold text-black mb-6 border-l-4 border-gold-500 pl-4">職歴・経験</h4>
                    <div class="relative border-l-2 border-gold-300 pl-8 space-y-8 h-full">
                        <div class="relative">
                            <div class="absolute -left-10 h-full flex items-center"><div class="h-4 w-4 bg-gold-500 rounded-full border-2 border-white shadow-md"></div></div>
                            <p class="font-bold text-black">2014-2017年</p>
                            <p class="text-gray-600">都内フィットネスクラブ在籍</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-10 h-full flex items-center"><div class="h-4 w-4 bg-gold-500 rounded-full border-2 border-white shadow-md"></div></div>
                            <p class="font-bold text-black">2017-2019年</p>
                            <p class="text-gray-600">都内パーソナルトレーニングジム在籍・パーソナルトレーニング/測定機器の営業経験（スポルテック2018出展）</p>
                        </div>
                         <div class="relative">
                            <div class="absolute -left-10 h-full flex items-center"><div class="h-4 w-4 bg-gold-500 rounded-full border-2 border-white shadow-md"></div></div>
                            <p class="font-bold text-black">2019年〜</p>
                            <p class="text-gray-600">パーソナルトレーニングジム「ダ・ヴィンチ」（TOPFORMの前身）勤務</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-10 h-full flex items-center"><div class="h-4 w-4 bg-gold-500 rounded-full border-2 border-white shadow-md"></div></div>
                            <p class="font-bold text-black">2023年〜</p>
                            <p class="text-gray-600">株式会社HALLEL 運営に携わる</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-10 h-full flex items-center"><div class="h-4 w-4 bg-gold-500 rounded-full border-2 border-white shadow-md"></div></div>
                            <p class="font-bold text-black">2025年1月〜</p>
                            <p class="text-gray-600">湘南学院高等学校男子バレーボール部 ストレングストレーナー</p>
                        </div>
                        <div class="relative">
                            <div class="absolute -left-10 h-full flex items-center"><div class="h-4 w-4 bg-gold-500 rounded-full border-2 border-white shadow-md"></div></div>
                            <p class="font-bold text-black">現在</p>
                            <p class="text-gray-600">TOPFORM恵比寿店・半蔵門店で勤務</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ギャラリー -->
        <div class="max-w-6xl mx-auto">
            <h4 class="text-3xl font-black text-center text-black mb-12 tracking-wide">
                <span class="text-gradient">ギャラリー</span>
            </h4>
            <!-- 6枚の画像グリッド -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                <?php for ($i = 1; $i <= 6; $i++) : ?>
                <img src="<?php echo esc_url(get_theme_mod("gallery_image_{$i}", 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80')); ?>" 
                     alt="トレーニング風景<?php echo $i; ?>" 
                     class="w-full h-32 object-cover hover:scale-110 transition-transform duration-300 border border-gold-500 cursor-pointer"
                     onclick="openImageModal(this.src)">
                <?php endfor; ?>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-black text-black tracking-wider">CONTACT</h2>
            <p class="text-gold-500 font-semibold">お問い合わせ</p>
        </div>

        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Google Form Card -->
            <div class="bg-white p-8 text-center rounded-lg shadow-xl hover:shadow-2xl border-t-4 border-gold-500 transform hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <i class="ri-file-list-3-line text-5xl text-gold-500 mb-4 inline-block"></i>
                    <h3 class="text-2xl font-bold text-black mb-2">Googleフォーム</h3>
                    <p class="text-gray-600 mb-6">体験のご予約やご質問など、お気軽にお問い合わせください。</p>
                </div>
                <a href="<?php echo esc_url(get_theme_mod('google_form_url', '#')); ?>" target="_blank" 
                   class="mt-auto inline-block bg-gold-gradient text-white font-bold py-3 px-8 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                    フォームを開く
                </a>
            </div>

            <!-- LINE Card -->
            <div class="bg-white p-8 text-center rounded-lg shadow-xl hover:shadow-2xl border-t-4 border-gold-500 transform hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <i class="ri-line-chart-line text-5xl text-gold-500 mb-4 inline-block"></i>
                    <h3 class="text-2xl font-bold text-black mb-2">LINE公式</h3>
                    <p class="text-gray-600 mb-6">チャットで迅速に対応します。まずはお友だち追加から。</p>
                </div>
                <a href="<?php echo esc_url(get_theme_mod('line_url', '#')); ?>" target="_blank" 
                   class="mt-auto inline-block bg-gold-gradient text-white font-bold py-3 px-8 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                    友だち追加
                </a>
            </div>

            <!-- Email Card -->
            <div class="bg-white p-8 text-center rounded-lg shadow-xl hover:shadow-2xl border-t-4 border-gold-500 transform hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <i class="ri-mail-send-line text-5xl text-gold-500 mb-4 inline-block"></i>
                    <h3 class="text-2xl font-bold text-black mb-2">メール</h3>
                    <p class="text-gray-600 mb-6">直接のメールでのご連絡はこちらのボタンからどうぞ。</p>
                </div>
                <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'junya1995@gmail.com')); ?>" 
                   class="mt-auto inline-block bg-gold-gradient text-white font-bold py-3 px-8 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                    メールを送信
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Image Modal -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-90 z-50 hidden flex items-center justify-center p-4" onclick="closeImageModal()">
    <div class="relative max-w-4xl max-h-full">
        <img id="modalImage" src="" alt="" class="w-full h-auto max-h-screen object-contain">
        <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white text-2xl hover:text-gold-400 transition-colors">
            <i class="ri-close-line"></i>
        </button>
    </div>
</div>

<script>
function openImageModal(src) {
    document.getElementById('modalImage').src = src;
    document.getElementById('imageModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeImageModal() {
    document.getElementById('imageModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// ESCキーでモーダルを閉じる
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});
</script>

<?php get_footer(); ?>