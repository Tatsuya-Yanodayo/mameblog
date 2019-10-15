

<?php get_header(); ?>


<?php


function get_relation_taxonomy( $term_id = FALSE ) {
 
    // 配列の初期値
    $term_ids = array(
        'term_id'  => array(),
        'taxonomy' => FALSE
    );
 
    if ( $term_id === FALSE ) { return $term_ids; }
 
    // 指定した term_id からタクソノミー名を特定
    $taxonomy = get_terms(
        array(
            'category',
            'post_tag'
        ),
        array(
            'hide_empty' => TRUE,
            'include'    => $term_id
        )
    );
 
    $taxonomy = $taxonomy[0]->taxonomy;
 
    // term_id が存在し、投稿数が 1 以上の場合
    if ( ! is_null( $taxonomy ) ) {
 
        // 該当する投稿情報を全て取得
        $args = array(
            'nopaging'            => 1,
            'ignore_sticky_posts' => 1,
            'order'               => ASC,
            'tax_query'           => array( 
                array(
                    'taxonomy' => $taxonomy,
                    'terms'    => $term_id,
                    'field'    => 'id',
                    'operator' => 'AND'
                )
            )
        );
 
        $my_query = new WP_Query( $args );
 
        if( $my_query->have_posts() ) {
 
            // タクソノミー名を変換処理 (カテゴリ <=> タグ どちらかに入れ替え)
            if ( $taxonomy === 'category' ) {
                $taxonomy = 'post_tag';
            } else {
                $taxonomy = 'category';
            }
 
            while ( $my_query->have_posts() ) : $my_query->the_post();
 
                // 投稿ページより指定したタクソノミー情報を取得
                $term = get_the_terms( get_the_ID(), $taxonomy );
 
                // タクソノミーがある場合
                if ( $term ) {
 
                    // 全ての配列から term_id を取得してプッシュ
                    foreach ( $term as $value ) {
                        array_push( $term_ids['term_id'], $value->term_id );
                    }
 
            }
 
            endwhile;
 
            wp_reset_query();
 
        }
 
        // term_id がある場合はユニークを抽出して、タクソノミー名を付与
        if ( $term_ids['term_id'] ) {
            $term_ids['term_id']  = array_unique( $term_ids['term_id'], SORT_NUMERIC );
            $term_ids['taxonomy'] = $taxonomy;
        }
 
    }
 
    return $term_ids;
 
}



  $cat_tag_list_html = '<ul class="tag-list">';

        if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>


        <?php $cat_tag_list_html .= get_the_tag_list('<li>','</li><li>','</li>'); ?>

        <?php
        endwhile;
        else:
      ?>

          <?php endif; ?>

      <?php $cat_tag_list_html .= "</ul>" ?>






<div id="cat_info_wrap">
  <h2 id="cat_name">
    <?php single_cat_title(); ?>
  </h2>
  <span id="line"></span>

  <div class="tag-list-wrap">
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
