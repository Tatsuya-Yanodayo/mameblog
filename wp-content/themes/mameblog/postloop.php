<div class="post art">
  <div class="post_eff"></div>
  <a href="<?php the_permalink(); ?>" class="tag-icon"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></a>
  <div class="post-image">
    <div class="img-wrap">
      <?php if (has_post_thumbnail()) : ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'medium' ); ?>
      </a>
      <?php else: ?>
      <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/nothumbnail.png"></a>
      <?php endif; ?>
    </div>
  </div>
  <div class="post-info">
    <h3 class="post-title">
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a>
    </h3>
    <span class="post-bar"></span>
    <div class="tag-list-wrap">
      <?php the_tags('<ul class="tag-list"><li>','</li><li>','</li></ul>'); ?>
    </div>
    <div class="update">
      <?php echo get_the_date(); ?>
    </div>
  </div>
</div>
