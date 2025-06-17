<?php
function my_theme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');
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