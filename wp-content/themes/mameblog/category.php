<?php get_header(); ?>

<div id="cat_info_wrap">
  <h2 id="cat_name">
    <?php single_cat_title(); ?>
  </h2>
  <span id="line"></span>
 
</div>
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
