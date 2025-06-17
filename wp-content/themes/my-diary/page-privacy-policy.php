<?php get_header(); ?>

<main id="main-content" class="privacy-policy">
    <div class="container">
        <h2 class="title box"><?php the_title(); ?></h2>
        <div class="policy-content">
            <?php
            while (have_posts()):
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>