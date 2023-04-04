<?php
/* Template Name: Home*/

get_header(); ?>

<?php get_template_part('template-parts/sections/promo'); ?>

<?php
  $args_project = array(
    // 'cat' => 6,
    'post_type' => 'news-project',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
  );

  $query = new WP_Query($args_project);
 ?>
<!-- <script>
  const projectParams = {}
  projectParams.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  projectParams.true_posts_all = '<?php echo serialize($wp_query_project->query_vars); ?>';
  projectParams.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
  projectParams.action = "project"
</script> -->

<?php get_template_part('template-parts/sections/donat-posts'); ?>

<div>
  <?php get_template_part('template-parts/sections/connection'); ?>
</div>




<section class="news">
  <div class="container">
    <div class="news__inner">
      <div class="news-project">
        <a href="<?= get_site_url() . get_field('news_project_button_href', 'options'); ?>" class="news-project__nav">
          <div
            class="btn news-project__nav-btn news-project__nav-btn--active"
          >
            <span class="icon-list"><?= get_field('news_project_button', 'options'); ?></span>
          </div>
        </a>
        <div class="news-project__content" id="project_posts">
          <?php
              if ($query->have_posts()) {
                while ( $query->have_posts() ) : $query->the_post(); ?>
                  <?php get_template_part('/templates-part/project-news-posts'); ?>
                <?php endwhile;
              } // завершение проверки, содержатся ли записи по запросу     
              // используем сброс данных записи, чтобы восстановить оригинальный запрос
              wp_reset_postdata();
          ?>
        </div>
      </div>
      
    </div>
  </div>
</section>

<?php get_template_part('template-parts/sections/logo-presses'); ?>

<?php
get_footer();
?>