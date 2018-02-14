<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>

<div id="post_info_wrap">
  <h2 id="post_title">
    <?php the_title(); ?>
  </h2>
  <span id="line"></span>
</div>

<div id="entry_wrap">

  <div class="entry">
    <?php the_content(); ?>
  </div>
  <span id="entry_line"></span>
  <div id="time_wrap"><time datetime="<?php the_time('Y-m-d'); ?>">Post on <?php the_time('Y.m.d'); ?></time></div>

  <?php endwhile; endif; ?>

  <div id="post_nav" class="clearfix">
    <div id="next_post"><?php next_post_link('%link','<i class="fa fa-angle-left"></i> Newer<br><span>%title</span>'); ?></div>
    <div id="prev_post"><?php previous_post_link('%link','Older <i class="fa fa-angle-right"></i><br><span>%title</span>'); ?></div>
  </div>
  
</div>

<?php get_footer(); ?>
