<?php get_header(); ?>

<div id="visual-wrap" class="rellax" data-rellax-speed="-7">
  <img src="<?php echo get_template_directory_uri(); ?>/img/mainVisualLogo.png">
</div>

<script>
  var rellax = new Rellax('.rellax');

</script>

<div id="arrow"><a href="#contents-wrap"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></a></div>
<div id="contents-wrap">
  <div id="svg_wrap">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1500 100" preserveAspectRatio="none" id="svg-bg1">
      <path d="M0,100 v-85 q50,15 100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 v85 Z" fill="#191919"></path>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1500 100" preserveAspectRatio="none" id="svg-bg2">
      <path d="M0,100 v-81 q50,15 100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 t100,0 v81 Z" fill="#e5e5e5"></path>
    </svg>
  </div>
  <div id="contents">
    <div id="posts">


      <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>


        <?php get_template_part('postloop'); ?>


        <?php
        endwhile;
        else:
      ?>

          <p>記事はありません</p>

          <?php endif; ?>
    </div>
    <!-- end posts -->
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
  </div>
</div>
<?php get_footer(); ?>
