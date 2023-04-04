<?php
/* Template Name: FAQ*/

get_header(); ?>

<?php get_template_part('template-parts/sections/promo'); ?>

<?php get_template_part('template-parts/main-breadcrumbs'); ?>

<section class="question">
  <div class="container">
    <div class="question-box">
      <h2 class="question-box__title"><?= get_field('title_faq_section'); ?></h2>

      <div class="question-box__wrapper">

        <?php

          // проверяем есть ли данные в гибком содержании
          if( have_rows('faq_content') ):
              // перебираем данные
              while ( have_rows('faq_content') ) : the_row();
                  if( get_row_layout() == 'faq-item' ):
                    ?>


                    <div class="question-box__item">

                    <?php echo the_sub_field('faq-ansver'); ?>
                      
                    </div>
                    
                    <?php

                  endif;
              endwhile;
          endif;
        ?>

      </div>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/sections/logo-presses'); ?>

<?php
get_footer();
?>