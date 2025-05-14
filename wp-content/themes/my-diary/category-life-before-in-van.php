<?php get_header(); ?>

<main class="category-life-before-in-van-page">
    <div class="title box">
        <h2><?php single_cat_title(); ?></h2>
    </div>
    <div class="latest-articles">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="latest-post-item box">
                    <div class="box-inside-box">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                                // 投稿にサムネイル画像が設定されているか
                                the_post_thumbnail('medium'); // サイズは適宜変更可能
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/images/no-image.jpg" alt="No image">';
                            }
                            ?>
                            <p><?php the_title(); ?></p>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>このカテゴリーには投稿がまだありません。</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>