<?php get_header(); ?>
<main>
    <?php
    if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <h1 class="post"><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        <?php endwhile;
    endif;
    ?>
</main>
<?php get_footer(); ?>