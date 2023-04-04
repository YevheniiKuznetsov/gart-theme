<?php
  $args_compleat_params = array(
    'cat' => 9,
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 10,
  );

  $wp_query_compleat_params = new WP_Query($args_compleat_params);

 ?>
<!-- <script>
  const donatCompleatParams = {}
  donatCompleatParams.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  donatCompleatParams.true_posts_all = '<?php echo serialize($wp_query_compleat_params->query_vars); ?>';
  donatCompleatParams.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
  donatCompleatParams.action = "compleat"
</script> -->

 


<section class="promo">
  <div class="container">
    <div class="promo__inner">
      <div class="promo__preloader">
        <a href="<?php echo get_home_url(); ?>">
          <img
            class="promo__preloader-picture"
            src="<?= get_template_directory_uri() . '/assets/img/promo-img.jpg' ?>"
            alt="promo"
          />
        </a>
      </div>

      <div class="last-gathering">
        <div class="last-gathering__inner" id="donat_compleat">
          <?php
              if ($wp_query_compleat_params->have_posts()) {
                while ( $wp_query_compleat_params->have_posts() ) : $wp_query_compleat_params->the_post(); ?>
                  <?php get_template_part('/templates-part/donat-compleat-post'); ?>
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