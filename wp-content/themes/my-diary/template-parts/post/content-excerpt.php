<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail()): ?>
        <div class="post-thumbnail">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium'); ?>
            </a>
        </div>
    <?php endif; ?>

    <a href="<?php the_permalink(); ?>">
        <div class="article-title-container">
            <p><?php the_title(); ?></p>
        </div>
    </a>
</article>