

<?php get_header(); ?>

<!--タグ一覧のHTML取得 php -->
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    $cat_tag_list .= get_the_tag_list('delimiter','delimiter',''); 

    endwhile;

    else:

    endif;

    $tags = explode("delimiter", $cat_tag_list);
    $unique_tags = array_unique($tags);
    array_splice($unique_tags, 0, 1);
    $cat_tag_list_html = '<ul class="tag-list-c">';
    foreach($unique_tags as $tag) {
        $cat_tag_list_html .= "<li>" . $tag . "</li>";
    }
    $cat_tag_list_html .= "</ul>";

?><!--//タグ一覧のHTML取得 php -->



<div id="cat_info_wrap">
  <h2 id="cat_name">
    <?php single_cat_title(); ?>
  </h2>
  <span id="line"></span>

  <div class="tag-list-wrap-c">
    <?php echo $cat_tag_list_html ?>
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
