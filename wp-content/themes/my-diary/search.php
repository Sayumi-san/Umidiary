<?php get_header(); ?>
<main class="search-result">
    <div class="title box">
        <h2>「<?php the_search_query(); ?>」の検索結果</h2>
    </div>
    <div class="latest-articles">
        <?php if (have_posts() && get_search_query()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="latest-post-item box">
                    <div class="box-inside-box">
                        <?php get_template_part('template-parts/post/content', 'excerpt'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>検索キーワードに該当する記事がありませんでした。</p>
        <?php endif; ?>
    </div>
</main>