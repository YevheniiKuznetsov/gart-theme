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

  $args_army = array(
    'cat' => 3,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $quantity_posts,
  );

  $wp_query_army = new WP_Query($args_army);

  $args_health = array(
    'cat' => 4,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $quantity_posts,
  );

  $wp_query_health = new WP_Query($args_health);

  $args_social = array(
    'cat' => 6,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => $quantity_posts,
  );

  $wp_query_social = new WP_Query($args_social);

  $args_project = array(
    // 'cat' => 6,
    'post_type' => 'news-project',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3,
  );

  $wp_query_project = new WP_Query($args_project);

  $args_top_news = array(
    // 'cat' => 6,
    'post_type' => 'top-news',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
  );

  $wp_query_top_news = new WP_Query($args_top_news);
  ?>

  <script>
    const postParams = {}
    postParams.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    postParams.true_posts_all = '<?php echo serialize($wp_query->query_vars); ?>';
    postParams.true_posts_army = '<?php echo serialize($wp_query_army->query_vars); ?>';
    postParams.true_posts_health = '<?php echo serialize($wp_query_health->query_vars); ?>';
    postParams.true_posts_social = '<?php echo serialize($wp_query_social->query_vars); ?>';
    postParams.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    postParams.max_pages = '<?php echo $wp_query->max_num_pages; ?>';
    postParams.max_posts = [];
    postParams.max_posts.push('<?php echo $wp_query->found_posts; ?>');
    postParams.max_posts.push('<?php echo $wp_query_army->found_posts; ?>');
    postParams.max_posts.push('<?php echo $wp_query_health->found_posts; ?>');
    postParams.max_posts.push('<?php echo $wp_query_social->found_posts; ?>');

    const projectParams = {}
    projectParams.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    projectParams.true_posts_all = '<?php echo serialize($wp_query_project->query_vars); ?>';
    projectParams.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    projectParams.action = "project"

    const topNewsParams = {}
    topNewsParams.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    topNewsParams.true_posts_all = '<?php echo serialize($wp_query_top_news->query_vars); ?>';
    topNewsParams.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    topNewsParams.action = "topnews"
  </script>

	
  <div class="container navigation-tab-container">
    <div class="navigation-tab">
      <div class="navigation-tab__inner">
        <div class="navigation-tab__item navigation-tab__item--active" id="all_projects">
          <?php echo get_field('_all_projects_button', 'options'); ?> <span class="posts-number"></span>
        </div>
        <div class="navigation-tab__item" id="army_cat"><?php echo get_field('_army_filtr_buttn', 'options'); ?> <span class="posts-number"></span></div>
        <div class="navigation-tab__item" id="health_cat"><?php echo get_field('_health_care_button', 'options'); ?> <span class="posts-number"></span></div>
        <div class="navigation-tab__item" id="social_cat"><?php echo get_field('_social_filtr_button', 'options'); ?> <span class="posts-number"></span></div>
      </div>
    </div>
  </div>
  <div class="container">
    
    <div class="contents">
      <div class="contents__inner" id="postsMedia">
        
      </div>
    </div>

    
    <div class="btn btn-more" id="add_media"
      ><span class="drop"><?php echo get_field('_more_posts', 'options'); ?></span>
    </div>
  </div>
</div>