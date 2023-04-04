<?php
/* Template Name: AboutUs*/

get_header(); ?>

<?php get_template_part('template-parts/sections/promo'); ?>

<?php get_template_part('template-parts/main-breadcrumbs'); ?>



<?php 
if (get_user_locale() == "en_US") {
  get_template_part('template-parts/about/about-en');
} else {
  get_template_part('template-parts/about/about-ua');
}

?>

<?php get_template_part('template-parts/sections/logo-presses'); ?>

<?php
get_footer();
?>