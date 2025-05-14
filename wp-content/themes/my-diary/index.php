<?php get_header(); ?>
<main>
  <div class="hero">
    <img class="elk" src="<?php echo get_theme_file_uri('images/Elk.png'); ?>" alt="Elk">
    <img class="beaver" src="<?php echo get_theme_file_uri('images/Beaver.png'); ?>" alt="Beaver">
    <img class="heropicture" src="<?php echo get_theme_file_uri('images/Herosection.png'); ?>" alt="Herosection">
  </div>
  <section class="profile">
    <div class="box profile-container">
      <h1>My profile</h1>
      <div class="portrait-and-explanation">
        <img src="<?php echo get_theme_file_uri('images/Portraitandpictures.png'); ?>" alt="portrait" class="item">
        <div class="introduction item">
          <p>　大学卒業後、公務員として働きながらも
            長年の夢だった海外生活を実現するため、
            バンクーバーに引っ越してきました。</p>
          <p>　現在はUI/UXデザインを学んでおり、
            co-opプログラムに参加中です。</p>
          <p>　このブログでは、バンクーバーでの
            日常や新しい挑戦、学びの過程を率直に
            綴っていきます。
          </p>
        </div>
      </div>
    </div>
    <div class="picture-container">
      <img src="<?php echo get_theme_file_uri('images/Picturesbesidesportrait.png'); ?>" alt="pictures">
    </div>
  </section>
  <section class="article">
    <div class="box">
      <h1>The latest articles</h1>
      <div class="latest-articles">
        <?php
        $args = array(
          'post_type' => 'post',
          // 投稿タイプの指定。ここでは通常のブログ投稿（post）
          'posts_per_page' => 4,
          'post_status' => 'publish',
          // 公開されている投稿のみ（publish）を対象。
        );
        $latest_posts = new WP_Query($args);
        // 　この条件で記事を探してきてとお願いできる人(WP_Query)を作ってargs(条件)を渡している
        
        if ($latest_posts->have_posts()): ?>
          <!-- WP_Queryオブジェクトの中のhave_posts()（投稿まだある？)を実行する -->
          <?php while ($latest_posts->have_posts()):
            $latest_posts->the_post(); ?>
            <!-- 投稿がある限り、繰り返す準備をして	次の投稿をセットする（表示できるようにする） -->
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
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
</div>
<?php get_footer(); ?>