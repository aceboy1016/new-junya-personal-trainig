<?php get_header(); ?>

<section class="py-20 bg-gray-50 min-h-screen">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            
            <?php if (have_posts()) : ?>
                <div class="text-center mb-16">
                    <?php if (is_home() && !is_front_page()) : ?>
                        <h1 class="text-5xl font-black text-black mb-4 tracking-wide">
                            <span class="text-gradient">ブログ</span>
                        </h1>
                    <?php elseif (is_archive()) : ?>
                        <h1 class="text-5xl font-black text-black mb-4 tracking-wide">
                            <?php echo get_the_archive_title(); ?>
                        </h1>
                    <?php elseif (is_search()) : ?>
                        <h1 class="text-5xl font-black text-black mb-4 tracking-wide">
                            検索結果: <span class="text-gradient"><?php echo get_search_query(); ?></span>
                        </h1>
                    <?php else : ?>
                        <h1 class="text-5xl font-black text-black mb-4 tracking-wide">
                            <span class="text-gradient">記事一覧</span>
                        </h1>
                    <?php endif; ?>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="bg-white shadow-xl hover:shadow-2xl transition-all duration-300 overflow-hidden hover:scale-105 border-t-4 border-gold-500">
                            
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="relative overflow-hidden">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-48 object-cover hover:scale-110 transition-transform duration-300')); ?>
                                    </a>
                                    <div class="absolute top-4 left-4 bg-gold-gradient text-white px-3 py-1 text-sm font-bold uppercase tracking-wide">
                                        <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            
                            <div class="p-6">
                                <div class="mb-4">
                                    <div class="flex items-center text-sm text-gray-500 mb-2">
                                        <i class="ri-calendar-line mr-2"></i>
                                        <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
                                        
                                        <?php if (get_post_type() === 'testimonials') : 
                                            $rating = get_post_meta(get_the_ID(), '_rating', true) ?: 5;
                                        ?>
                                            <div class="flex text-gold-500 ml-4">
                                                <?php for ($i = 0; $i < $rating; $i++) : ?>
                                                    <i class="ri-star-fill text-xs"></i>
                                                <?php endfor; ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    
                                    <h2 class="text-xl font-bold text-black mb-3 tracking-wide hover:text-gold-500 transition-colors">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    
                                    <div class="text-gray-600 leading-relaxed">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                
                                <div class="flex justify-between items-center">
                                    <a href="<?php the_permalink(); ?>" class="text-gold-500 font-medium hover:text-gold-600 transition-colors uppercase text-sm tracking-wide">
                                        続きを読む <i class="ri-arrow-right-line ml-1"></i>
                                    </a>
                                    
                                    <?php if (get_post_type() === 'testimonials') : 
                                        $customer_age = get_post_meta(get_the_ID(), '_customer_age', true);
                                        $customer_gender = get_post_meta(get_the_ID(), '_customer_gender', true);
                                        $customer_occupation = get_post_meta(get_the_ID(), '_customer_occupation', true);
                                    ?>
                                        <span class="text-xs text-gray-500">
                                            <?php echo esc_html($customer_age . $customer_gender . '・' . $customer_occupation); ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- Pagination -->
                <div class="mt-16 text-center">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '<i class="ri-arrow-left-line mr-2"></i>' . __('前へ', 'junya-luxury'),
                        'next_text' => __('次へ', 'junya-luxury') . '<i class="ri-arrow-right-line ml-2"></i>',
                        'class' => 'inline-flex items-center space-x-4',
                    ));
                    ?>
                </div>

            <?php else : ?>
                
                <div class="text-center py-20">
                    <div class="max-w-2xl mx-auto">
                        <i class="ri-search-line text-6xl text-gray-400 mb-6"></i>
                        <h1 class="text-3xl font-bold text-black mb-4">記事が見つかりません</h1>
                        
                        <?php if (is_search()) : ?>
                            <p class="text-gray-600 mb-8">
                                「<?php echo get_search_query(); ?>」に関する記事は見つかりませんでした。<br>
                                別のキーワードで検索してみてください。
                            </p>
                        <?php else : ?>
                            <p class="text-gray-600 mb-8">
                                申し訳ございませんが、お探しの記事は見つかりませんでした。<br>
                                ホームページに戻って他のコンテンツをご覧ください。
                            </p>
                        <?php endif; ?>
                        
                        <!-- Search Form -->
                        <div class="mb-8">
                            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="max-w-md mx-auto">
                                <div class="flex">
                                    <input type="search" 
                                           name="s" 
                                           value="<?php echo get_search_query(); ?>" 
                                           placeholder="キーワードを入力..."
                                           class="flex-1 px-4 py-3 border border-gray-300 focus:border-gold-500 focus:ring-2 focus:ring-gold-500/20 outline-none transition-all duration-300">
                                    <button type="submit" 
                                            class="bg-gold-gradient text-white px-6 py-3 font-bold hover:shadow-xl transition-all duration-300">
                                        <i class="ri-search-line"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <a href="<?php echo esc_url(home_url('/')); ?>" 
                           class="bg-gold-gradient text-white px-8 py-4 font-bold tracking-wide hover:shadow-2xl hover:scale-105 transition-all duration-300 uppercase inline-block">
                            ホームに戻る
                        </a>
                    </div>
                </div>
                
            <?php endif; ?>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>