

<?php get_header(); ?>


<?php
  $cat_tag_list_html = '<ul class="tag-list">';

        if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>


        <?php $cat_tag_list_html += get_the_tag_list('<li>','</li><li>','</li>'); ?>
        <?php error_log(get_the_tag_list('<li>','</li><li>','</li>'),3,"./test.log"); ?>

        <?php
        endwhile;
        else:
      ?>

          <?php endif; ?>

      <?php $cat_tag_list_html += "</ul>" ?>




<div id="cat_info_wrap">
  <h2 id="cat_name">
    <?php single_cat_title(); ?>
  </h2>
  <span id="line"></span>

  <div class="tag-list-wrap">
    <?php echo $cat_tag_list_html ?>
      <?php the_tags('<ul class="tag-list"><li>','</li><li>','</li></ul>'); ?>
    </div> 

 
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
