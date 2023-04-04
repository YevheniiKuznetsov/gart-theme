<div class="section-posts">
  <?php
  $quantity_posts = 8;

  $args = array(
    'cat' => 5,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $quantity_posts,
  );

  $wp_query = new WP_Query($args);

 ?>
<script>
  const allDonatPosts = {}
  allDonatPosts.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  allDonatPosts.true_posts_all = '<?php echo serialize($wp_query->query_vars); ?>';
  allDonatPosts.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
  allDonatPosts.action = "loadmore"
</script>

  <div class="container">
    <div class="contents">
      <div class="contents__inner" id="postsMedia">
        <?php
          if ($wp_query->have_posts()) {
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
              <?php get_template_part('/templates-part/news-posts'); ?>
            <?php endwhile;
          } 
          wp_reset_postdata();
        ?>
      </div>
    </div>

    <div class="btn btn-more" id="add_media"
      ><span class="drop"><?php echo get_field('_more_posts', 'options'); ?></span>
    </div>
  </div>
</div>
