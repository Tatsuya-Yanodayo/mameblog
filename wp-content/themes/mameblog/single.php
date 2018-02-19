<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>

<div id="post_info_wrap">
  <div id="post_info_padding_wrap">
    <h2 id="post_title">
      <?php the_title(); ?>
    </h2>
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
  <span id="entry_line"></span>
  <div id="time_wrap"><time datetime="<?php the_time('Y-m-d'); ?>">Post on <?php the_time('Y.m.d'); ?></time></div>

  <?php endwhile; endif; ?>

  <div id="post_nav" class="clearfix">
    <div id="next_post">
      <?php next_post_link('%link','← Back<br><span>%title</span>'); ?></div>
    <div id="prev_post">
      <?php previous_post_link('%link','Next →<br><span>%title</span>'); ?></div>
  </div>

</div>

<?php get_footer(); ?>
