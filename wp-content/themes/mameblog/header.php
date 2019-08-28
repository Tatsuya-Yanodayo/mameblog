<!DOCTYPE html>
<html lang="ja">

<head>

  <?php get_template_part('analytics'); ?>
  
  <meta charset="utf-8">

  <meta name="keywords" content="">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="Mami Matsumoto">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


  <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!--google adsens-->

  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2795765966699483",
    enable_page_level_ads: true
  });
</script>



  <?php wp_head(); ?>



</head>

<body>
  <header>
    <div id="nav-wrap">
      <div id="hmenu-nav">
        <?php wp_nav_menu( array('menu' => 'mamenu', 'container' => '', 'menu_id' => 'hmenu-cat-list', 'menu_class' => '')); ?>
        <?php wp_nav_menu( array('menu' => 'hmenu', 'container' => '', 'menu_id' => 'hmenu-list', 'menu_class' => '')); ?>
        <div class="nav-box hmenu_sns clearfix">
          <div class="sns_button twitter">
            <a href="https://twitter.com/art_rootbox" target="_blank" title="Tweet"><i class="fa fa-twitter"></i></a>
          </div>
          <div class="sns_button facebook">
            <a href="https://www.facebook.com/mamimatsumoto4630" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
          </div>
          <div class="sns_button instagram">
            <a href="https://www.instagram.com/mami_matsumoto_ph/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div id="fixed-nav">
        <div id="left-wrap">
          <div id="site-title">
            <div id="title">
              <a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/title.svg"></a>
            </div>
          </div>
          <div id="tools-wrap" class="clearfix">
            <?php wp_nav_menu( array('menu' => 'mamenu', 'container' => '', 'menu_id' => 'category-list', 'menu_class' => 'clearfix')); ?>
            <div id="search-box"><i class="fa fa-search"></i><input type="text" placeholder="search..."></div>
            <div class="sns_box nav-box clearfix" id="head_sns">
              <div class="sns_button twitter">
                <a href="https://twitter.com/art_rootbox" title="Tweet"><i class="fa fa-twitter"></i></a>
              </div>
              <div class="sns_button facebook">
                <a href="https://www.facebook.com/mamimatsumoto4630" title="Facebook"><i class="fa fa-facebook"></i></a>
              </div>
              <div class="sns_button instagram">
                <a href="https://www.instagram.com/mami_matsumoto_ph/" title="Instagram"><i class="fa fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div id="h-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>
