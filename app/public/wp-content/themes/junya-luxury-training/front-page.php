<?php get_header(); ?>

<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center pt-24 overflow-hidden" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)), radial-gradient(ellipse at center, rgba(245, 158, 11, 0.1) 0%, transparent 70%), url('<?php echo esc_url(get_theme_mod('hero_background_image', get_template_directory_uri() . '/assets/images/hero-bg.png')); ?>'); background-size: cover; background-position: center; background-attachment: fixed;">
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
            <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black text-white leading-tight mb-8 animate-fade-in-up" style="animation-delay: 0.3s; line-height: 1.1;">
                <?php echo wp_kses_post(get_theme_mod('hero_title', '<span class="text-gradient bg-gradient-to-r from-yellow-400 via-gold-500 to-amber-600 bg-clip-text text-transparent">変化</span>を実感するから<br><span class="text-gradient bg-gradient-to-r from-yellow-400 via-gold-500 to-amber-600 bg-clip-text text-transparent">自然</span>と続けたくなる')); ?>
            </h1>
            
            <!-- Enhanced description -->
            <p class="text-lg md:text-xl lg:text-2xl text-gray-200 max-w-4xl mx-auto mb-16 leading-relaxed font-light animate-fade-in-up" style="animation-delay: 0.6s;">
                <?php echo esc_html(get_theme_mod('hero_description', '根本から改善するアプローチで、見た目も体調も確実に変化を実感')); ?>
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
                <span class="text-gold-500 font-semibold">科学的根拠</span>と豊富な経験に基づいた独自のメソッドで、<span class="text-gold-500 font-semibold">確実な結果</span>と最高級の体験をお約束いたします
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
                <p class="text-gray-600 text-sm leading-relaxed">お客様の体組成、姿勢、動作パターン、ライフスタイルを<span class="text-gold-500 font-medium">徹底的に分析</span>。<span class="text-gold-500 font-medium">最新の測定機器</span>を使用した科学的アプローチで現状を正確に把握します。</p>
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
                <p class="text-gray-600 text-sm leading-relaxed">分析結果をもとに、お客様だけの<span class="text-gold-500 font-medium">専用プログラム</span>を設計。<span class="text-gold-500 font-medium">目標達成への最短ルート</span>を科学的根拠に基づいて構築いたします。</p>
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
                <p class="text-gray-600 text-sm leading-relaxed">洗練されたテクニックと<span class="text-gold-500 font-medium">最新理論</span>を駆使したトレーニング指導。一つ一つの動作を丁寧に指導し、<span class="text-gold-500 font-medium">効果を最大化</span>します。</p>
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
                <p class="text-gray-600 text-sm leading-relaxed"><span class="text-gold-500 font-medium">定期的な評価と調整</span>により、常にプログラムを最適化。お客様の進歩に合わせて<span class="text-gold-500 font-medium">継続的にアップデート</span>し続けます。</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Me Section (Luxury Design) -->
<section id="why-me" class="py-24 bg-white relative overflow-hidden">
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <p class="text-gold-400 font-bold tracking-widest uppercase mb-4">WHY CHOOSE ME</p>
            <h2 class="text-5xl md:text-6xl font-black text-black mb-8 tracking-wide">
                選ばれる<span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-600">理由</span>
            </h2>
            <div class="w-24 h-1 bg-gold-gradient mx-auto mb-8"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                科学的根拠と経験に基づいた、あなただけのオーダーメイドプログラム
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Reason 1: Total Support (Radar Chart Style) -->
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-full bg-gold-gradient text-white flex items-center justify-center text-xl font-bold shadow-lg">01</div>
                    <h3 class="text-2xl font-bold text-gray-900">多角的なアプローチ</h3>
                </div>
                <p class="text-gray-600 mb-8 min-h-[3rem]">単なる筋トレだけではありません。身体の機能を高めるための要素をバランスよく組み合わせます。</p>
                
                <!-- CSS Radar Chart Visual -->
                <div class="relative h-64 bg-white rounded-2xl border border-gray-100 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center opacity-10">
                        <div class="w-48 h-48 border border-gray-300 rounded-full"></div>
                        <div class="w-32 h-32 border border-gray-300 rounded-full absolute"></div>
                        <div class="w-16 h-16 border border-gray-300 rounded-full absolute"></div>
                    </div>
                    <!-- Hexagon Shape -->
                    <div class="relative w-40 h-40 bg-gold-500/10 border-2 border-gold-500 transform rotate-12" style="clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);"></div>
                    
                    <!-- Labels -->
                    <div class="absolute top-4 font-bold text-xs text-gray-500">筋力</div>
                    <div class="absolute bottom-4 font-bold text-xs text-gray-500">持久力</div>
                    <div class="absolute right-4 font-bold text-xs text-gray-500">柔軟性</div>
                    <div class="absolute left-4 font-bold text-xs text-gray-500">栄養</div>
                </div>
            </div>

            <!-- Reason 2: Growth Process (Step Up Style) -->
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-full bg-gold-gradient text-white flex items-center justify-center text-xl font-bold shadow-lg">02</div>
                    <h3 class="text-2xl font-bold text-gray-900">確実なステップアップ</h3>
                </div>
                <p class="text-gray-600 mb-8 min-h-[3rem]">いきなりハードな運動は行いません。身体の状態に合わせて段階的に負荷を上げていきます。</p>
                
                <!-- CSS Step Chart Visual -->
                <div class="relative h-64 bg-white rounded-2xl border border-gray-100 p-6 flex items-end justify-between gap-2">
                    <div class="w-full bg-gold-200 rounded-t-lg relative group-hover:bg-gold-300 transition-colors" style="height: 25%">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 text-xs font-bold text-gray-500">評価</div>
                    </div>
                    <div class="w-full bg-gold-300 rounded-t-lg relative group-hover:bg-gold-400 transition-colors" style="height: 50%">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 text-xs font-bold text-gray-500">改善</div>
                    </div>
                    <div class="w-full bg-gold-400 rounded-t-lg relative group-hover:bg-gold-500 transition-colors" style="height: 75%">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 text-xs font-bold text-gray-500">強化</div>
                    </div>
                    <div class="w-full bg-gold-500 rounded-t-lg relative group-hover:bg-gold-600 transition-colors" style="height: 100%">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 text-xs font-bold text-gray-500">定着</div>
                    </div>
                    
                    <!-- Arrow -->
                    <div class="absolute top-4 right-4 text-gold-500 text-2xl animate-bounce">
                        <i class="ri-arrow-right-up-line"></i>
                    </div>
                </div>
            </div>

            <!-- Reason 3: Conditioning (Comparison Style) -->
            <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100 hover:shadow-2xl transition-all duration-300 group">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 rounded-full bg-gold-gradient text-white flex items-center justify-center text-xl font-bold shadow-lg">03</div>
                    <h3 class="text-2xl font-bold text-gray-900">コンディショニング重視</h3>
                </div>
                <p class="text-gray-600 mb-8 min-h-[3rem]">「鍛える」前に「整える」。マイナスをゼロにし、そこからプラスを作るアプローチです。</p>
                
                <!-- CSS Comparison Visual -->
                <div class="relative h-64 bg-white rounded-2xl border border-gray-100 p-6 flex items-center justify-between">
                    <div class="text-center flex-1 opacity-50 grayscale group-hover:grayscale-0 transition-all duration-500">
                        <div class="text-4xl text-red-400 mb-2"><i class="ri-close-circle-line"></i></div>
                        <div class="font-bold text-gray-400 text-sm mb-1">一般的なジム</div>
                        <div class="text-xs text-gray-400">痛み・歪み<br>そのまま</div>
                    </div>
                    
                    <div class="text-gold-300 text-2xl"><i class="ri-arrow-right-line"></i></div>
                    
                    <div class="text-center flex-1 transform scale-110">
                        <div class="text-5xl text-green-500 mb-2"><i class="ri-checkbox-circle-line"></i></div>
                        <div class="font-bold text-gray-800 text-sm mb-1">当ジム</div>
                        <div class="text-xs text-gray-600 font-medium">不調改善<br>↓<br>機能向上</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Session Flow Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-black text-black mb-4 tracking-wide">
                セッションの<span class="text-gradient">流れ</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto tracking-wide">
                あなたの理想を実現するための3つのステップ
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Step 1 -->
            <div class="group">
                <div class="bg-white shadow-xl hover:shadow-2xl transition-all duration-300 p-8 text-center hover:scale-105 border-t-4 border-gold-500">
                    <div class="w-16 h-16 bg-gold-gradient rounded-full flex items-center justify-center text-white font-black text-2xl mx-auto mb-6">
                        01
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4 tracking-wide">初回：目標設定と現状把握</h3>
                    <p class="text-gray-600 leading-relaxed">
                        あなたの理想とする身体、現在の悩み、これまでの経験を詳しくお聞きし、明確なゴールを設定します。
                    </p>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="group">
                <div class="bg-white shadow-xl hover:shadow-2xl transition-all duration-300 p-8 text-center hover:scale-105 border-t-4 border-gold-500">
                    <div class="w-16 h-16 bg-gold-gradient rounded-full flex items-center justify-center text-white font-black text-2xl mx-auto mb-6">
                        02
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4 tracking-wide">2回目：機能評価と根本課題の特定</h3>
                    <p class="text-gray-600 leading-relaxed">
                        科学的な身体評価を行い、目標達成を妨げている根本原因を特定。あなた専用のプログラムを設計します。
                    </p>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="group">
                <div class="bg-white shadow-xl hover:shadow-2xl transition-all duration-300 p-8 text-center hover:scale-105 border-t-4 border-gold-500">
                    <div class="w-16 h-16 bg-gold-gradient rounded-full flex items-center justify-center text-white font-black text-2xl mx-auto mb-6">
                        03+
                    </div>
                    <h3 class="text-xl font-bold text-black mb-4 tracking-wide">3回目以降：実践とアップデート</h3>
                    <p class="text-gray-600 leading-relaxed">
                        機能改善とボディメイクを同時進行で実践。定期的に評価を行い、プログラムを最適化していきます。
                    </p>
                </div>
            </div>
        </div>

        <!-- Final Promise -->
        <div class="mt-20 text-center">
            <div class="bg-gradient-to-r from-gold-500 to-amber-600 p-12 rounded-2xl max-w-4xl mx-auto text-white">
                <h3 class="text-3xl font-black mb-4">私の約束</h3>
                <p class="text-xl leading-relaxed">
                    理想の身体を手に入れながら、根本的な健康も同時に実現する。
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Concept Diagram Section -->
<section class="py-24 bg-gray-900 relative overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/methodology-diagram.png'); ?>" 
             alt="Methodology Background" 
             class="w-full h-full object-cover opacity-20">
        <div class="absolute inset-0 bg-gradient-to-b from-gray-900 via-gray-900/90 to-gray-900"></div>
        <!-- Animated Particles/Glow -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gold-500/10 rounded-full blur-3xl animate-pulse"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-24">
            <h2 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-wide">
                科学的メソッド <span class="text-gold-500 mx-2">×</span> 最高級サービス
            </h2>
            <p class="text-xl text-gray-300 font-light tracking-widest">
                最新のスポーツ科学とプレミアムな体験を<span class="text-gold-400 font-bold">融合</span>
            </p>
            <div class="w-24 h-1 bg-gold-gradient mx-auto mt-8"></div>
        </div>

        <!-- Diagram Container -->
        <div class="relative max-w-6xl mx-auto">
            <!-- Center Core (Desktop Only) -->
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-20 hidden lg:block">
                <div class="w-40 h-40 rounded-full bg-gold-gradient p-1 shadow-[0_0_60px_rgba(245,158,11,0.4)] animate-pulse">
                    <div class="w-full h-full bg-gray-900 rounded-full flex flex-col items-center justify-center border border-gold-500/50 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gold-500/10"></div>
                        <span class="text-4xl mb-1">💎</span>
                        <span class="text-gold-100 text-xs font-bold tracking-widest">SYNERGY</span>
                    </div>
                </div>
            </div>

            <!-- Grid Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-32">
                <!-- Top Left: SCIENCE -->
                <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-gold-500/50 transition-all duration-500 group text-right lg:pr-16 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-2 h-full bg-gold-500/0 group-hover:bg-gold-500/100 transition-all duration-500"></div>
                    
                    <!-- Connecting Line (Desktop) -->
                    <div class="hidden lg:block absolute bottom-0 right-0 w-16 h-px bg-gradient-to-l from-gold-500/50 to-transparent transform translate-x-full -translate-y-1/2"></div>
                    <div class="hidden lg:block absolute bottom-0 right-0 w-px h-16 bg-gradient-to-t from-gold-500/50 to-transparent transform translate-x-1/2 translate-y-full"></div>
                    
                    <div class="text-gold-500 text-5xl mb-6 flex justify-end transform group-hover:scale-110 transition-transform duration-500"><i class="ri-flask-line"></i></div>
                    <h3 class="text-2xl font-black text-white mb-2 tracking-wider">SCIENCE-BASED</h3>
                    <p class="text-gold-400 text-sm font-bold mb-4 tracking-widest uppercase">科学的根拠</p>
                    <p class="text-gray-400 text-sm leading-relaxed font-medium">最新のスポーツ科学と栄養学に基づいた<br>効果実証済みのメソッド</p>
                </div>

                <!-- Top Right: PERSONALIZED -->
                <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-gold-500/50 transition-all duration-500 group text-left lg:pl-16 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-2 h-full bg-gold-500/0 group-hover:bg-gold-500/100 transition-all duration-500"></div>

                     <!-- Connecting Line (Desktop) -->
                     <div class="hidden lg:block absolute bottom-0 left-0 w-16 h-px bg-gradient-to-r from-gold-500/50 to-transparent transform -translate-x-full -translate-y-1/2"></div>
                     <div class="hidden lg:block absolute bottom-0 left-0 w-px h-16 bg-gradient-to-t from-gold-500/50 to-transparent transform -translate-x-1/2 translate-y-full"></div>

                    <div class="text-gold-500 text-5xl mb-6 transform group-hover:scale-110 transition-transform duration-500"><i class="ri-user-settings-line"></i></div>
                    <h3 class="text-2xl font-black text-white mb-2 tracking-wider">PERSONALIZED</h3>
                    <p class="text-gold-400 text-sm font-bold mb-4 tracking-widest uppercase">完全個別対応</p>
                    <p class="text-gray-400 text-sm leading-relaxed font-medium">一人ひとりの体質・目標・ライフスタイルに<br>完全カスタマイズ</p>
                </div>

                <!-- Bottom Left: HOLISTIC -->
                <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-gold-500/50 transition-all duration-500 group text-right lg:pr-16 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-2 h-full bg-gold-500/0 group-hover:bg-gold-500/100 transition-all duration-500"></div>

                    <!-- Connecting Line (Desktop) -->
                    <div class="hidden lg:block absolute top-0 right-0 w-16 h-px bg-gradient-to-l from-gold-500/50 to-transparent transform translate-x-full translate-y-1/2"></div>
                    <div class="hidden lg:block absolute top-0 right-0 w-px h-16 bg-gradient-to-b from-gold-500/50 to-transparent transform translate-x-1/2 -translate-y-full"></div>

                    <div class="text-gold-500 text-5xl mb-6 flex justify-end transform group-hover:scale-110 transition-transform duration-500"><i class="ri-focus-3-line"></i></div>
                    <h3 class="text-2xl font-black text-white mb-2 tracking-wider">HOLISTIC</h3>
                    <p class="text-gold-400 text-sm font-bold mb-4 tracking-widest uppercase">統合的アプローチ</p>
                    <p class="text-gray-400 text-sm leading-relaxed font-medium">運動・栄養・回復・メンタルケアを統合した<br>全体的なサポート</p>
                </div>

                <!-- Bottom Right: LUXURY -->
                <div class="bg-white/5 backdrop-blur-md border border-white/10 p-8 rounded-2xl hover:bg-white/10 hover:border-gold-500/50 transition-all duration-500 group text-left lg:pl-16 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-2 h-full bg-gold-500/0 group-hover:bg-gold-500/100 transition-all duration-500"></div>

                    <!-- Connecting Line (Desktop) -->
                    <div class="hidden lg:block absolute top-0 left-0 w-16 h-px bg-gradient-to-r from-gold-500/50 to-transparent transform -translate-x-full translate-y-1/2"></div>
                    <div class="hidden lg:block absolute top-0 left-0 w-px h-16 bg-gradient-to-b from-gold-500/50 to-transparent transform -translate-x-1/2 -translate-y-full"></div>

                    <div class="text-gold-500 text-5xl mb-6 transform group-hover:scale-110 transition-transform duration-500"><i class="ri-vip-crown-line"></i></div>
                    <h3 class="text-2xl font-black text-white mb-2 tracking-wider">LUXURY</h3>
                    <p class="text-gold-400 text-sm font-bold mb-4 tracking-widest uppercase">最高級体験</p>
                    <p class="text-gray-400 text-sm leading-relaxed font-medium">上質な環境とプレミアムサービスで<br>最高のフィットネス体験を提供</p>
                </div>
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
            $hanzomon_address = get_theme_mod('hanzomon_location_address', '〒102-0082 東京都千代田区一番町10-8 一番町ウエストビルB1<br>東京メトロ半蔵門線<span class="text-gold-500 font-semibold">「半蔵門駅」</span>4番出口から<span class="text-gold-500 font-semibold">徒歩2分</span>');
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
            $ebisu_address = get_theme_mod('ebisu_location_address', '〒150-0022 東京都渋谷区恵比寿南2-3-11 グレース青山2F<br>JR・東京メトロ日比谷線<span class="text-gold-500 font-semibold">「恵比寿駅」</span>西口から<span class="text-gold-500 font-semibold">徒歩3分</span>');
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
<section id="testimonials" class="py-20 bg-gray-900 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-10 left-10 w-32 h-32 bg-gold-gradient rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-24 h-24 bg-gold-gradient rounded-full"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-gold-gradient rounded-full"></div>
    </div>
    
    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center mb-20">
            <p class="text-gold-400 font-bold tracking-widest uppercase mb-4 text-sm">CLIENT TESTIMONIALS</p>
            <h2 class="text-5xl md:text-6xl font-black text-white mb-6 tracking-wide">
                お客様の<span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-400 to-amber-600">声</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto leading-relaxed">
                実際にトレーニングを受けられたお客様からの声をご紹介します
            </p>
            <div class="w-24 h-1 bg-gold-gradient mx-auto mt-6"></div>
        </div>
        
        <!-- Enhanced Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
            
            <?php
            // Get testimonial data from customizer
            $testimonials = array(
                array(
                    'name' => get_theme_mod('testimonial_1_name', 'A.K様'),
                    'info' => get_theme_mod('testimonial_1_info', '20代女性・会社員'),
                    'text' => get_theme_mod('testimonial_1_text', 'トレーニング初心者の私でも、石原さんの丁寧で分かりやすい指導のおかげで、3ヶ月で理想の体型に近づくことができました。科学的なアプローチで効率的に結果が出て驚いています。'),
                ),
                array(
                    'name' => get_theme_mod('testimonial_2_name', 'M.T様'),
                    'info' => get_theme_mod('testimonial_2_info', '40代男性・経営者'),
                    'text' => get_theme_mod('testimonial_2_text', '長年の腰痛に悩んでいましたが、石原さんのコンディショニング指導により大幅に改善されました。プロフェッショナルな知識と技術、そして親身なサポートに本当に感謝しています。'),
                ),
                array(
                    'name' => get_theme_mod('testimonial_3_name', 'R.S様'),
                    'info' => get_theme_mod('testimonial_3_info', '30代男性・アスリート'),
                    'text' => get_theme_mod('testimonial_3_text', '競技パフォーマンス向上のためのトレーニングを依頼しました。最新の科学的知識に基づいた指導で、明確な改善が実感できています。プロとしての経験と知識の深さが違います。'),
                ),
            );
            
            foreach ($testimonials as $testimonial) :
                $initial = substr($testimonial['name'], 0, 1);
            ?>
            <!-- Testimonial -->
            <div class="group relative">
                <div class="bg-white/5 backdrop-blur-lg border border-white/10 p-8 h-full hover:bg-white/10 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                    <!-- Quote Icon -->
                    <div class="text-gold-400 mb-6">
                        <i class="ri-double-quotes-l text-4xl opacity-30"></i>
                    </div>
                    
                    <!-- Testimonial Text -->
                    <p class="text-gray-200 text-lg leading-relaxed mb-8 italic">
                        「<?php echo esc_html($testimonial['text']); ?>」
                    </p>
                    
                    <!-- Client Info -->
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gold-gradient rounded-full flex items-center justify-center text-white font-bold text-lg mr-4">
                            <?php echo esc_html($initial); ?>
                        </div>
                        <div>
                            <div class="text-white font-bold"><?php echo esc_html($testimonial['name']); ?></div>
                            <div class="text-gold-400 text-sm"><?php echo esc_html($testimonial['info']); ?></div>
                        </div>
                    </div>
                    
                    <!-- Accent Line -->
                    <div class="absolute bottom-0 left-8 right-8 h-1 bg-gold-gradient opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
        
        <!-- Stats Bar -->
        <div class="mt-16 bg-white/5 backdrop-blur-lg border border-white/10 p-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center max-w-4xl mx-auto">
                <div>
                    <div class="text-4xl font-black text-gold-400 mb-2">98%</div>
                    <div class="text-white text-sm tracking-wide">満足度</div>
                </div>
                <div>
                    <div class="text-4xl font-black text-gold-400 mb-2">3000+</div>
                    <div class="text-white text-sm tracking-wide">指導実績</div>
                </div>
                <div>
                    <div class="text-4xl font-black text-gold-400 mb-2">95%</div>
                    <div class="text-white text-sm tracking-wide">継続率</div>
                </div>
                <div>
                    <div class="text-4xl font-black text-gold-400 mb-2">10+</div>
                    <div class="text-white text-sm tracking-wide">年の経験</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Profile Section (Rich Design) -->
<section id="profile" class="py-24 bg-gray-50 relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
        <div class="absolute top-10 right-10 w-64 h-64 bg-gold-500 opacity-5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-96 h-96 bg-blue-500 opacity-5 rounded-full blur-3xl"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <!-- Profile Header -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center mb-24">
            <!-- Image Column -->
            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                    <img src="<?php echo esc_url(get_theme_mod('profile_image', 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')); ?>" 
                         alt="石原淳哉" 
                         class="w-full h-[500px] object-cover">
                    
                    <!-- Floating Badge -->
                    <div class="absolute bottom-6 right-6 bg-white/95 backdrop-blur-md p-4 rounded-xl shadow-lg border-l-4 border-gold-500 max-w-[200px]">
                        <div class="text-gold-600 font-black text-lg leading-tight mb-1">NASM-PES</div>
                        <div class="text-gray-600 text-xs font-medium">Certified Personal Trainer</div>
                    </div>
                </div>
                <!-- Decorative Frame -->
                <div class="absolute -top-4 -left-4 w-full h-full border-2 border-gold-500/30 rounded-2xl -z-10"></div>
            </div>

            <!-- Content Column -->
            <div class="lg:col-span-7">
                <div class="mb-8">
                    <span class="inline-block py-1 px-3 rounded-full bg-gold-100 text-gold-700 text-sm font-bold tracking-wider mb-4">PROFILE</span>
                    <h2 class="text-4xl lg:text-5xl font-black text-gray-900 mb-2">石原 淳哉</h2>
                    <p class="text-xl text-gold-600 font-medium tracking-widest">JUNYA ISHIHARA</p>
                </div>

                <div class="prose prose-lg text-gray-600 mb-10">
                    <p class="leading-relaxed">
                        「ホネカワスネオ」と呼ばれた過去から、トレーニングを通じて人生を変えた経験を持つパーソナルトレーナー。
                        単なるボディメイクにとどまらず、機能解剖学に基づいた「動ける身体づくり」と「痛みのない生活」を提供することを信条としています。
                    </p>
                    <p class="leading-relaxed mt-4">
                        大手フィットネスクラブでの指導経験、スポーツ現場での帯同経験を経て、現在は「HALLEL」にて、一般の方からアスリートまで幅広いクライアントの目標達成をサポートしています。
                    </p>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                        <div class="text-gold-500 text-2xl mb-1"><i class="ri-user-star-line"></i></div>
                        <div class="font-bold text-gray-800">指名No.1</div>
                        <div class="text-xs text-gray-500">エリア実績</div>
                    </div>
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                        <div class="text-gold-500 text-2xl mb-1"><i class="ri-medal-line"></i></div>
                        <div class="font-bold text-gray-800">10年+</div>
                        <div class="text-xs text-gray-500">指導歴</div>
                    </div>
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                        <div class="text-gold-500 text-2xl mb-1"><i class="ri-group-line"></i></div>
                        <div class="font-bold text-gray-800">3000+</div>
                        <div class="text-xs text-gray-500">セッション数</div>
                    </div>
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm border border-gray-100">
                        <div class="text-gold-500 text-2xl mb-1"><i class="ri-book-open-line"></i></div>
                        <div class="font-bold text-gray-800">NASM</div>
                        <div class="text-xs text-gray-500">国際資格</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Visual Grid (Timeline & Skills) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Timeline Column -->
            <div>
                <h3 class="text-2xl font-bold text-gray-900 mb-8 flex items-center">
                    <span class="w-8 h-8 bg-gold-500 rounded-lg flex items-center justify-center text-white mr-3"><i class="ri-history-line"></i></span>
                    経歴・実績
                </h3>
                
                <div class="relative border-l-2 border-gray-200 ml-4 space-y-10 pb-4">
                    <!-- Timeline Item 1 -->
                    <div class="relative pl-8">
                        <div class="absolute -left-[9px] top-1 w-5 h-5 rounded-full border-4 border-white bg-gold-500 shadow-sm"></div>
                        <div class="text-sm text-gold-600 font-bold mb-1">2014 - 2018</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">都内フィットネスクラブ勤務</h4>
                        <p class="text-gray-600 text-sm">月間150本以上のセッションを担当し、エリア指名数No.1を獲得。幅広い層への指導経験を積む。</p>
                    </div>
                    
                    <!-- Timeline Item 2 -->
                    <div class="relative pl-8">
                        <div class="absolute -left-[9px] top-1 w-5 h-5 rounded-full border-4 border-white bg-gold-500 shadow-sm"></div>
                        <div class="text-sm text-gold-600 font-bold mb-1">2018</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">フリーランスとして独立</h4>
                        <p class="text-gray-600 text-sm">パーソナルトレーナーとして独立。より一人ひとりに寄り添った指導を開始。</p>
                    </div>

                    <!-- Timeline Item 3 -->
                    <div class="relative pl-8">
                        <div class="absolute -left-[9px] top-1 w-5 h-5 rounded-full border-4 border-white bg-gold-500 shadow-sm"></div>
                        <div class="text-sm text-gold-600 font-bold mb-1">2019 - Present</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">TOPFORM / HALLEL 参画</h4>
                        <p class="text-gray-600 text-sm">コンディショニングジム「HALLEL」の立ち上げに参画。トレーナー育成やプログラム開発にも携わる。</p>
                    </div>

                    <!-- Timeline Item 4 -->
                    <div class="relative pl-8">
                        <div class="absolute -left-[9px] top-1 w-5 h-5 rounded-full border-4 border-white bg-gold-500 shadow-sm"></div>
                        <div class="text-sm text-gold-600 font-bold mb-1">Current</div>
                        <h4 class="text-lg font-bold text-gray-900 mb-2">湘南学院高等学校 男子バレーボール部</h4>
                        <p class="text-gray-600 text-sm">ストレングストレーナーとしてチームに帯同。パフォーマンス向上と傷害予防をサポート。</p>
                    </div>
                </div>
            </div>

            <!-- Skills & Qualifications Column -->
            <div>
                <!-- Skills -->
                <div class="mb-12">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8 flex items-center">
                        <span class="w-8 h-8 bg-gold-500 rounded-lg flex items-center justify-center text-white mr-3"><i class="ri-bar-chart-box-line"></i></span>
                        専門分野
                    </h3>
                    
                    <div class="space-y-6">
                        <!-- Skill 1 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-bold text-gray-700">姿勢改善・機能改善</span>
                                <span class="text-gold-600 font-bold">100%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-gradient-to-r from-gold-400 to-gold-600 h-2.5 rounded-full" style="width: 100%"></div>
                            </div>
                        </div>
                        
                        <!-- Skill 2 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-bold text-gray-700">疼痛改善（腰痛・肩こり等）</span>
                                <span class="text-gold-600 font-bold">95%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-gradient-to-r from-gold-400 to-gold-600 h-2.5 rounded-full" style="width: 95%"></div>
                            </div>
                        </div>

                        <!-- Skill 3 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-bold text-gray-700">ボディメイク</span>
                                <span class="text-gold-600 font-bold">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-gradient-to-r from-gold-400 to-gold-600 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>

                        <!-- Skill 4 -->
                        <div>
                            <div class="flex justify-between mb-2">
                                <span class="font-bold text-gray-700">スポーツパフォーマンス向上</span>
                                <span class="text-gold-600 font-bold">90%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-gradient-to-r from-gold-400 to-gold-600 h-2.5 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Qualifications -->
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <span class="w-8 h-8 bg-gold-500 rounded-lg flex items-center justify-center text-white mr-3"><i class="ri-award-line"></i></span>
                        保有資格
                    </h3>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-xl border border-gold-200 shadow-sm flex items-center hover:shadow-md transition-shadow">
                            <div class="text-3xl text-gold-500 mr-3"><i class="ri-graduation-cap-line"></i></div>
                            <div>
                                <div class="text-xs text-gray-500 uppercase tracking-wider">Education</div>
                                <div class="font-bold text-gray-800 text-sm">日本大学文理学部 体育学科 卒業</div>
                            </div>
                        </div>
                        
                        <div class="bg-white p-4 rounded-xl border border-gold-200 shadow-sm flex items-center hover:shadow-md transition-shadow">
                            <div class="text-3xl text-gold-500 mr-3"><i class="ri-global-line"></i></div>
                            <div>
                                <div class="text-xs text-gray-500 uppercase tracking-wider">Certification</div>
                                <div class="font-bold text-gray-800 text-sm">全米スポーツ医学協会 NASM-PES</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery Grid -->
        <div class="mt-24">
            <h3 class="text-center text-2xl font-bold text-gray-900 mb-12 tracking-widest uppercase">
                <span class="border-b-2 border-gold-500 pb-2">Gallery</span>
            </h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square rounded-xl overflow-hidden shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Training Scene" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Gym Facility" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Counseling" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-xl overflow-hidden shadow-lg group">
                    <img src="https://images.unsplash.com/photo-1599058945522-28d584b6f0ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Conditioning" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
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

<!-- Cursor Sparkle Effect (PC Only) -->
<style>
@media (min-width: 1024px) {
    .sparkle-cursor {
        position: relative;
        overflow: hidden;
    }
    
    .sparkle {
        position: absolute;
        pointer-events: none;
        width: 4px;
        height: 4px;
        background: linear-gradient(45deg, #F59E0B, #FBBF24, #FDE047);
        border-radius: 50%;
        animation: sparkleAnimation 1.2s ease-out forwards;
        box-shadow: 0 0 6px #F59E0B, 0 0 12px #FBBF24;
    }
    
    .sparkle-large {
        width: 6px;
        height: 6px;
        background: linear-gradient(45deg, #FBBF24, #FDE047, #FEF3C7);
        box-shadow: 0 0 8px #FBBF24, 0 0 16px #F59E0B;
        animation: sparkleLargeAnimation 1.8s ease-out forwards;
    }
    
    @keyframes sparkleAnimation {
        0% {
            opacity: 1;
            transform: translateY(0) scale(0);
        }
        15% {
            transform: translateY(-8px) scale(1);
        }
        85% {
            opacity: 0.8;
            transform: translateY(-35px) scale(0.8);
        }
        100% {
            opacity: 0;
            transform: translateY(-50px) scale(0.2);
        }
    }
    
    @keyframes sparkleLargeAnimation {
        0% {
            opacity: 1;
            transform: translateY(0) translateX(0) scale(0) rotate(0deg);
        }
        25% {
            transform: translateY(-12px) translateX(-8px) scale(1) rotate(120deg);
        }
        75% {
            opacity: 0.6;
            transform: translateY(-45px) translateX(-15px) scale(0.7) rotate(270deg);
        }
        100% {
            opacity: 0;
            transform: translateY(-70px) translateX(-25px) scale(0.1) rotate(360deg);
        }
    }
    
    /* Enhanced Trail effect */
    .cursor-trail {
        position: absolute;
        pointer-events: none;
        width: 12px;
        height: 12px;
        background: radial-gradient(circle, rgba(251, 191, 36, 0.8) 0%, rgba(245, 158, 11, 0.5) 30%, rgba(251, 191, 36, 0.2) 70%, transparent 100%);
        border-radius: 50%;
        animation: trailFade 1.2s ease-out forwards;
    }
    
    .cursor-trail-small {
        width: 6px;
        height: 6px;
        background: radial-gradient(circle, rgba(254, 215, 102, 0.7) 0%, rgba(245, 158, 11, 0.4) 50%, transparent 100%);
        animation: trailFadeSmall 0.8s ease-out forwards;
    }
    
    @keyframes trailFade {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        50% {
            opacity: 0.6;
            transform: scale(0.8);
        }
        100% {
            opacity: 0;
            transform: scale(0.2);
        }
    }
    
    @keyframes trailFadeSmall {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        70% {
            opacity: 0.4;
            transform: scale(0.7);
        }
        100% {
            opacity: 0;
            transform: scale(0.1);
        }
    }
}
</style>

<script>
// Cursor Sparkle Effect - PC Only
document.addEventListener('DOMContentLoaded', function() {
    // Check if device is desktop (1024px and above)
    if (window.innerWidth >= 1024) {
        initCursorSparkles();
    }
    
    // Reinitialize on window resize if crossing the threshold
    window.addEventListener('resize', function() {
        if (window.innerWidth >= 1024 && !document.querySelector('.sparkle-cursor')) {
            initCursorSparkles();
        }
    });
});

function initCursorSparkles() {
    // Target main content area only to avoid scroll conflicts
    const mainContent = document.querySelector('main') || document.body;
    
    // Create a single sparkle container that doesn't interfere with scrolling
    let sparkleContainer = document.createElement('div');
    sparkleContainer.id = 'sparkle-container';
    sparkleContainer.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        pointer-events: none;
        z-index: 9999;
        overflow: hidden;
    `;
    document.body.appendChild(sparkleContainer);
    
    let lastSparkleTime = 0;
    const sparkleDelay = 60;
    
    // Listen to mousemove on document to capture all movement
    document.addEventListener('mousemove', function(e) {
        const currentTime = Date.now();
        
        // Throttle sparkle creation
        if (currentTime - lastSparkleTime < sparkleDelay) {
            createTrail(e, sparkleContainer);
            return;
        }
        
        lastSparkleTime = currentTime;
        
        // Create sparkles
        createSparkle(e, sparkleContainer);
        
        // Increase chance for larger sparkles
        if (Math.random() < 0.4) {
            setTimeout(() => createLargeSparkle(e, sparkleContainer), 30);
        }
        
        // Create trail
        createTrail(e, sparkleContainer);
    });
}

function createSparkle(e, container) {
    const sparkle = document.createElement('div');
    sparkle.classList.add('sparkle');
    
    // Use absolute screen coordinates
    const x = e.clientX;
    const y = e.clientY;
    
    // Add some randomness to position
    const offsetX = (Math.random() - 0.5) * 20;
    const offsetY = (Math.random() - 0.5) * 20;
    
    sparkle.style.left = (x + offsetX) + 'px';
    sparkle.style.top = (y + offsetY) + 'px';
    
    container.appendChild(sparkle);
    
    // Remove sparkle after animation (extended time)
    setTimeout(() => {
        if (sparkle && sparkle.parentNode) {
            sparkle.parentNode.removeChild(sparkle);
        }
    }, 1200);
}

function createLargeSparkle(e, container) {
    const sparkle = document.createElement('div');
    sparkle.classList.add('sparkle', 'sparkle-large');
    
    // Use absolute screen coordinates
    const x = e.clientX;
    const y = e.clientY;
    
    // More randomness for large sparkles
    const offsetX = (Math.random() - 0.5) * 40;
    const offsetY = (Math.random() - 0.5) * 40;
    
    sparkle.style.left = (x + offsetX) + 'px';
    sparkle.style.top = (y + offsetY) + 'px';
    
    container.appendChild(sparkle);
    
    // Remove sparkle after animation (extended time)
    setTimeout(() => {
        if (sparkle && sparkle.parentNode) {
            sparkle.parentNode.removeChild(sparkle);
        }
    }, 1800);
}

function createTrail(e, container) {
    // Create trail more frequently for better effect
    if (Math.random() < 0.3) return;
    
    const trail = document.createElement('div');
    
    // Randomly choose between large and small trails
    if (Math.random() < 0.6) {
        trail.classList.add('cursor-trail');
    } else {
        trail.classList.add('cursor-trail', 'cursor-trail-small');
    }
    
    // Use absolute screen coordinates
    const x = e.clientX - 6; // Center the trail
    const y = e.clientY - 6;
    
    // Add slight randomness to trail position
    const offsetX = (Math.random() - 0.5) * 8;
    const offsetY = (Math.random() - 0.5) * 8;
    
    trail.style.left = (x + offsetX) + 'px';
    trail.style.top = (y + offsetY) + 'px';
    
    container.appendChild(trail);
    
    // Remove trail after animation (extended time)
    const duration = trail.classList.contains('cursor-trail-small') ? 800 : 1200;
    setTimeout(() => {
        if (trail && trail.parentNode) {
            trail.parentNode.removeChild(trail);
        }
    }, duration);
}
</script>

<?php get_footer(); ?>