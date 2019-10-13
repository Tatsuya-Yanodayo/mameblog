<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>

<div id="post_info_wrap">
  <div id="post_info_padding_wrap">
    <h1 id="post_title">
      <?php the_title(); ?>
    </h1>
    <span id="line"></span>
    <div id="post_info_flex">
      <div id="post_category">
        <i id="post_category_icon" class="fa fa-folder"></i>
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
      </div>
      <?php the_tags('<ul id="post_tag_list"><li>','</li><li>','</li></ul>'); ?>
    </div>
  </div>
</div>

<div id="entry_wrap">

  <div class="entry">
    <?php the_content(); ?>
  </div>
 
  <div id="time_wrap"><time datetime="<?php the_time('Y-m-d'); ?>">Post on <?php the_time('Y.m.d'); ?></time></div>

  <?php endwhile; endif; ?>

  <div id="post_nav" class="clearfix">
    <div id="next_post">
      <?php next_post_link('%link','← Back<br><span>%title</span>'); ?></div>
    <div id="prev_post">
      <?php previous_post_link('%link','Next →<br><span>%title</span>'); ?></div>
  </div>

   <span id="entry_line"></span>

    <?php echo do_shortcode('[addtoany]'); ?>


<aside class="relatedkiji">
  <div class="recomend-wrap">
  <h2 class="recomend">おすすめ記事</h2>
</div>
     <div id="posts">
  <?php if(has_category() ) {
    $cats =get_the_category();
    $catkwds = array();
    foreach($cats as $cat){
         $catkwds[] = $cat->term_id;
    }
  } ?>
  <?php $args = array(
      'post_type' => 'post',
      'posts_per_page' => '4',
      'post__not_in' =>array( $post->ID ),
      'category__in' => $catkwds,
      'orderby' => 'rand'
    );
  $my_query = new WP_Query( $args );?>
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>

    <!--  記事一個分 -->
   
    <?php get_template_part('postloop'); ?>
  
    <!--  記事一個分終わり -->

    <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>
</div>
</aside>



</div>



<?php get_footer(); ?>
