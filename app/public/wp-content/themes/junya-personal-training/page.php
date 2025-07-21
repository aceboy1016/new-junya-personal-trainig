<?php get_header(); ?>

<main class="main-content" style="padding-top: 120px;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">
        
        <?php while (have_posts()) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="text-align: center; margin-bottom: 3rem;">
                <h1 class="entry-title section-title"><?php the_title(); ?></h1>
                
                <?php if (has_post_thumbnail()) : ?>
                <div class="featured-image" style="margin: 2rem 0;">
                    <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; border-radius: 10px;')); ?>
                </div>
                <?php endif; ?>
            </header>

            <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                <?php 
                the_content(); 
                
                wp_link_pages(array(
                    'before' => '<div class="page-links">ページ: ',
                    'after'  => '</div>',
                ));
                ?>
            </div>

            <footer class="entry-footer" style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid #eee;">
                <?php
                edit_post_link(
                    '編集',
                    '<span class="edit-link" style="background: #3498db; color: white; padding: 0.5rem 1rem; border-radius: 5px; text-decoration: none; font-size: 0.9rem;">',
                    '</span>'
                );
                ?>
            </footer>
            
        </article>

        <?php
        // コメントが有効な場合
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>