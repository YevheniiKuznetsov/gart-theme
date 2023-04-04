<?php
/*
Template Name: Всі Топ новини
Template Post Type: top-news
*/


get_header();
?>

	<main id="primary" class="site-main ттт">

		<?php
		while ( have_posts() ) :
			the_post();

      ?>
      <?php get_template_part('template-parts/post-breadcrumbs'); ?>

			<section class="content page-needy card-news">
      <div class="container">
        <div class="content__inner">
          <main class="main-content">
            <div class="box">
              <div class="box__desc">
                <div class="content-needy">
                  <?php the_title( "<h2 class='content-needy__title'>", '</h2>' ); ?>
                  
                  <h3 class="content-needy__subtitle"><?= get_field('post_description'); ?></h3>
                  <div class="content-needy__date"><?= get_the_date(); ?> <?= the_time(); ?></div>

                  <div class="share-box">
                    <div class="share-box__title"><?php echo get_field('_to_share', 'options'); ?>:</div>
                    <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>

                    <!-- <div class="share-box__wrapper">
                      <a class="share-box__item" href="#">
                        <img
                          src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-share-1.png' ?>"
                          alt="box__item"
                          class="share-box__item-icon"
                        />
                      </a>
                      <a class="share-box__item" href="#">
                        <img
                          src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-share-2.png' ?>"
                          alt="box__item"
                          class="share-box__item-icon"
                        />
                      </a>
                      <a class="share-box__item" href="#">
                        <img
                          src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-share-3.png' ?>"
                          alt="box__item"
                          class="share-box__item-icon"
                        />
                      </a>
                      <a class="share-box__item" href="#">
                        <img
                          src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-share-4.png' ?>"
                          alt="box__item"
                          class="share-box__item-icon"
                        />
                      </a>
                    </div> -->
                  </div>

                  <?php the_post_thumbnail('',array('class'=>'content-needy__img')); ?>
                  <?php
                  
                  the_content()
                  ?>
                </div>
              </div>
            </div>
          </main>
          <?php get_template_part('template-parts/sections/main-sidebar'); ?>
        </div>
      </div>
    </section>

    <?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
<!-- <?php get_template_part('template-parts/sections/logo-presses'); ?> -->
<?php
// get_sidebar();
get_footer();
