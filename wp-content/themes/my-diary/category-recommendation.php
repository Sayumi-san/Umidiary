<?php get_header(); ?>

<main class="category-recommendation-page">
    <div class="title box">
        <h2><?php single_cat_title(); ?></h2>
    </div>
    <div class="latest-articles-category">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="latest-post-item box">
                    <div class="box-inside-box">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium');
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/images/no-image.jpg" alt="No image">';
                            }
                            ?>
                            <div class="article-title-container">
                                <p><?php the_title(); ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="no-post">このカテゴリーには投稿がまだありません。</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>