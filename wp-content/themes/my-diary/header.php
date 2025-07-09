<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css'); ?>" />
  <title>Umi's Diary</title>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NTT96294C3"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-NTT96294C3');
  </script>
  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <header>
      <nav class="navbar">
        <div class="container-container">

          <div class="menu-container hoverchange">
            <a href=" <?php echo home_url(); ?> ">
              <div class="indextab">
                <h1>Umi's Diary</h1>
              </div>
            </a>
          </div>
          <ul class="menu">
            <li>
              <div class="menu-container hoverchange">
                <?php
                $category_link = get_category_link(get_category_by_slug('life-before-in-van')->term_id);
                ?>
                <a href="<?php echo esc_url($category_link); ?>">
                  <div class="indextab">
                    <h2>Life before in Van</h2>
                  </div>
                </a>
              </div>
            </li>
            <li class="showdropdownmenu hoverchange">
              <div class="menu-container">
                <div class="indextab">
                  <h2>Life in Van</h2>
                </div>
                <div class="dropdownmenu">
                  <ul>
                    <li><?php
                    $category_link = get_category_link(get_category_by_slug('work')->term_id);
                    ?><a href="<?php echo esc_url($category_link); ?>">Work</a></li>
                    <li><?php
                    $category_link = get_category_link(get_category_by_slug('study')->term_id);
                    ?><a href="<?php echo esc_url($category_link); ?>">Study</a></li>
                    <li><?php
                    $category_link = get_category_link(get_category_by_slug('recommendation')->term_id);
                    ?><a href="<?php echo esc_url($category_link); ?>">Recommendation</a></li>
                    <li> <?php
                    $category_link = get_category_link(get_category_by_slug('diary')->term_id);
                    ?><a href="<?php echo esc_url($category_link); ?>">Diary</a></li>
                  </ul>
                </div>
              </div>
            </li>
            <?php get_search_form(); ?>
          </ul>
          <div class="bookmark-container">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn hamburger-menu">
            </label>
            <div class="overlay" id="overlay">
              <div class="popup-image hidden" id="popupImage">
                <img src="<?php echo get_theme_file_uri('images/Pop-up.png'); ?>" alt="Popupimage">
              </div>
            </div>
            <div id="navigation">
              <ul>
                <li class="top-part-of-bookmark"><img
                    src="<?php echo get_theme_file_uri('images/Top-part-of-bookmark.png'); ?>" alt="Bookmark"></li>
                <li class="top-part"><a href="<?php echo esc_url($category_link); ?>">Life before in Van</a></li>
                <div class="middle-section">
                  <li class="middle-part">Life in Van</li>
                  <li class="middle-min-part"><?php
                  $category_link = get_category_link(get_category_by_slug('work')->term_id);
                  ?><a href="<?php echo esc_url($category_link); ?>"><img
                        src="<?php echo get_theme_file_uri('images/Circle.png'); ?>" alt="Circle">Work</a></li>
                  <li class="middle-min-part"><?php
                  $category_link = get_category_link(get_category_by_slug('study')->term_id);
                  ?><a href="<?php echo esc_url($category_link); ?>"><img
                        src="<?php echo get_theme_file_uri('images/Circle.png'); ?>" alt="Circle">Study</a></li>
                  <li class="middle-min-part"><?php
                  $category_link = get_category_link(get_category_by_slug('recommendation')->term_id);
                  ?><a href="<?php echo esc_url($category_link); ?>"><img
                        src="<?php echo get_theme_file_uri('images/Circle.png'); ?>" alt="Circle">Recommendation</a>
                  </li>
                  <li class="middle-min-part"><?php
                  $category_link = get_category_link(get_category_by_slug('diary')->term_id);
                  ?><a href="<?php echo esc_url($category_link); ?>"><img
                        src="<?php echo get_theme_file_uri('images/Circle.png'); ?>" alt="Circle">Diary</a></li>
                </div>
                <li class="search-form-button">
                  <form action="<?php echo home_url(); ?>" method="get" id="searchFormMobile">
                    <div class="form-container">
                      <input type="search" name="s" placeholder="キーワードを入力" class="search-bar" id="searchInput">
                    </div>
                    <input type="submit" class="title box" value="search">
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <style>
      .indextab {
        background-image: url('<?php echo get_theme_file_uri("images/Nav_tab.png"); ?>');
      }

      .hamburger-menu {
        background-image: url('<?php echo get_theme_file_uri("images/Hamburger-menu.png"); ?>');
      }
    </style>