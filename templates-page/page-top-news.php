<?php
/* Template Name: PageTopNews*/

get_header(); ?>

  <?php 
    $args_top_news_page = array(
    // 'cat' => 6,
    'post_type' => 'top-news',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
    );

    $wp_query_top_news_page = new WP_Query($args_top_news_page);
  if (true) : ?>

  <script>
    const topNewsPageParams = {}
    topNewsPageParams.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    topNewsPageParams.true_posts_all = '<?php echo serialize($wp_query_top_news_page->query_vars); ?>';
    topNewsPageParams.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    topNewsPageParams.max_pages = '<?php echo $wp_query->max_num_pages; ?>';
    topNewsPageParams.action = "topnews"
  </script>

  <?php endif; ?>
  
  <?php get_template_part('template-parts/main-breadcrumbs'); ?>

  <section class="content news-page card-news">
    <div class="container">
      <div class="content__inner">
        <main class="main-content">
          <div class="box">
            <div class="box-news">
              <div class="box-news__title"><?php echo get_field('__title_news', 'options'); ?></div>

              <div id="top_news_page_container" class="box-news__inner">
                
              </div>
              <div id="show_more_posts" class="btn"
                ><span class="drop"><?php echo get_field('__show_more_button', 'options'); ?></span></
              >
            </div>
          </div>
        </main>
        <?php get_template_part('template-parts/sections/main-sidebar'); ?>
      </div>
    </div>
  </section>

<?php
get_footer();
?>