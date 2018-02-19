<?php get_header(); ?>

<div id="visual-wrap" class="rellax" data-rellax-speed="-7"><a id="main-visual" href="###"><img src="<?php echo get_template_directory_uri(); ?>/img/mainVisual2.png"></a></div>

<script>
  var rellax = new Rellax('.rellax');

</script>

<div id="arrow"><a href="#contents"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png"></a></div>
<div id="contents-wrap">
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
