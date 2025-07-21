<?php get_header(); ?>

<main class="main-content" style="padding-top: 120px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">

        <?php if (have_posts()) : ?>

            <header class="page-header" style="text-align: center; margin-bottom: 3rem;">
                <?php if (is_home() && !is_front_page()) : ?>
                    <h1 class="page-title section-title"><?php single_post_title(); ?></h1>
                <?php elseif (is_archive()) : ?>
                    <h1 class="page-title section-title"><?php the_archive_title(); ?></h1>
                    <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                <?php elseif (is_search()) : ?>
                    <h1 class="page-title section-title">
                        <?php printf('検索結果: %s', '<span>' . get_search_query() . '</span>'); ?>
                    </h1>
                <?php else : ?>
                    <h1 class="page-title section-title">ブログ</h1>
                <?php endif; ?>
            </header>

            <div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; margin-bottom: 4rem;">
                
                <?php while (have_posts()) : the_post(); ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?> style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                    
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail" style="overflow: hidden;">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium_large', array(
                                'style' => 'width: 100%; height: 200px; object-fit: cover; transition: transform 0.3s ease;'
                            )); ?>
                        </a>
                    </div>
                    <?php endif; ?>

                    <div class="post-content" style="padding: 1.5rem;">
                        <header class="entry-header">
                            <h2 class="entry-title" style="font-size: 1.3rem; font-weight: 600; margin-bottom: 0.5rem;">
                                <a href="<?php the_permalink(); ?>" style="color: #333; text-decoration: none; transition: color 0.3s ease;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="entry-meta" style="font-size: 0.9rem; color: #666; margin-bottom: 1rem;">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                                
                                <?php if (get_the_category()) : ?>
                                <span class="categories" style="margin-left: 1rem;">
                                    <?php the_category(', '); ?>
                                </span>
                                <?php endif; ?>
                            </div>
                        </header>

                        <div class="entry-summary" style="color: #555; line-height: 1.6; margin-bottom: 1rem;">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="entry-footer">
                            <a href="<?php the_permalink(); ?>" class="read-more" style="color: #3498db; text-decoration: none; font-weight: 600; transition: color 0.3s ease;">
                                続きを読む →
                            </a>
                        </footer>
                    </div>
                </article>

                <?php endwhile; ?>

            </div>

            <?php
            // ページネーション
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '← 前のページ',
                'next_text' => '次のページ →',
                'before_page_number' => '<span class="meta-nav screen-reader-text">ページ </span>',
            ));
            ?>

        <?php else : ?>

            <section class="no-results" style="text-align: center; padding: 4rem 2rem;">
                <header class="page-header">
                    <h1 class="page-title section-title">記事が見つかりませんでした</h1>
                </header>

                <div class="page-content" style="margin-top: 2rem;">
                    <?php if (is_home() && current_user_can('publish_posts')) : ?>
                        <p>まだ投稿がありません。<a href="<?php echo esc_url(admin_url('post-new.php')); ?>">最初の投稿を作成</a>してみませんか？</p>
                    <?php elseif (is_search()) : ?>
                        <p>検索キーワードに一致する記事が見つかりませんでした。別のキーワードで検索してみてください。</p>
                        <?php get_search_form(); ?>
                    <?php else : ?>
                        <p>お探しのページは見つかりませんでした。<a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a>に戻って他のコンテンツをご覧ください。</p>
                    <?php endif; ?>
                </div>
            </section>

        <?php endif; ?>

    </div>
</main>

<style>
/* ポストカードのホバー効果 */
.post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
}

.post-card:hover .post-thumbnail img {
    transform: scale(1.05);
}

.post-card:hover .entry-title a {
    color: #3498db;
}

.post-card:hover .read-more {
    color: #2ecc71;
}

/* ページネーション */
.page-numbers {
    display: inline-block;
    padding: 0.5rem 1rem;
    margin: 0 0.25rem;
    background: white;
    border: 1px solid #ddd;
    border-radius: 5px;
    color: #333;
    text-decoration: none;
    transition: all 0.3s ease;
}

.page-numbers:hover,
.page-numbers.current {
    background: #3498db;
    color: white;
    border-color: #3498db;
}

.page-numbers.dots {
    background: none;
    border: none;
    cursor: default;
}

.nav-links {
    text-align: center;
    margin: 3rem 0;
}

/* カテゴリリンク */
.categories a {
    color: #3498db;
    text-decoration: none;
    transition: color 0.3s ease;
}

.categories a:hover {
    color: #2ecc71;
}

/* レスポンシブ対応 */
@media (max-width: 768px) {
    .posts-grid {
        grid-template-columns: 1fr;
    }
    
    .post-content {
        padding: 1rem !important;
    }
    
    .entry-title {
        font-size: 1.1rem !important;
    }
}
</style>

<?php get_footer(); ?>