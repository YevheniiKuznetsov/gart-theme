<?php
/* Template Name: PageNewsProjects*/

get_header(); ?>

<?php get_template_part('template-parts/sections/promo'); ?>

<?php get_template_part('template-parts/main-breadcrumbs'); ?>

<?php 
  $args_project_page_post = array(
    'post_type' => 'news-project',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 3,
  );

  $wp_query_project_page = new WP_Query($args_project_page_post);
?>

<script>
  const projectParamsPage = {}
  projectParamsPage.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  projectParamsPage.true_posts_all = '<?php echo serialize($wp_query_project_page->query_vars); ?>';
  projectParamsPage.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
  projectParamsPage.max_pages = '<?php echo $wp_query->max_num_pages; ?>';
  projectParamsPage.action = "postnewspage"
</script>

<section class="content news-project-page">
  <div class="container">
    <div class="main-content">
      <h3 class="news-project__content-title"><?php echo get_field('_n_news_title'); ?></h3>

      <div class="news-project__content" id="all_news">

        
      </div>

      <div class="btn btn-more" id="add_more_news_project"
        ><span class="drop"><?php echo get_field('_n_news_title'); ?></span>
      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/sections/logo-presses'); ?>

<?php
get_footer();
?>