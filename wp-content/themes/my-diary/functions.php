<?php
function my_theme_setup()
{
  // 初期設定の関数定義
  add_theme_support('post-thumbnails');
  // アイキャッチ機能を有効化
}
add_action('after_setup_theme', 'my_theme_setup');
//   テーマのセットアップ時に関数を実行
?>

<?php
function mytheme_enqueue_scripts()
{
  wp_enqueue_script(
    'my-custom-script',
    get_template_directory_uri() . '/js/main.js',
    array(),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');
?>