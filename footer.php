<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gard
 */

?>

	
<footer class="footer">
    <div class="container">

        <div class="footer__inner">
            <div class="footer__locations">
                <p class="footer__locations-text">
                    <?php echo get_field('_footer_locations_text', 'options'); ?>
                </p>
                <p class="footer__locations-text">
                    <?php echo get_field('_footer_locations_text2', 'options'); ?>
                </p>
            </div>

            <nav class="footer__nav">
                <div class="footer__nav-title"><?php echo get_field('_footer_nav_title', 'options'); ?></div>
                <?php wp_nav_menu(array( 'theme_location' => 'footer', 'menu_class' => 'footer-menu' )); ?>
                
            </nav>

            <div class="footer__contacts">
                <div class="footer__contacts-title"><?php echo get_field('_footer_contacts_title_contact', 'options'); ?></div>
                <a class="footer__contacts-text" href="tel:+380936242512">+38 093 624 25 12
                </a>
                <a class="footer__contacts-text" href="mail:gart.fond@gmail.com">Email: gart.fond@gmail.com</a>
            </div>

            <div class="footer__social">
                <div class="footer__social-title">
                    <?php echo get_field('_footer_social_title_news', 'options'); ?>
                </div>
                <div class="social">
                    <a class="social__item" rel="nofollow" href="https://instagram.com/gart_fond"><img src="<?= get_template_directory_uri() . '/assets/img/header/instagram.svg' ?>" alt="icon-social"
                            class="social__item-img"></a>
                    <a class="social__item" rel="nofollow" href="https://www.facebook.com/profile.php?id=100086626232765"><img src="<?= get_template_directory_uri() . '/assets/img/header/facebook.svg' ?>" alt="icon-social"
                            class="social__item-img"></a>
                    <a class="social__item" rel="nofollow" href="https://www.youtube.com/c/%D0%A1%D0%B5%D1%80%D0%B3%D1%96%D0%B9%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%BE%D0%B2"><img src="<?= get_template_directory_uri() . '/assets/img/header/youtube.svg' ?>" alt="icon-social"
                            class="social__item-img"></a>
                    <a class="social__item" rel="nofollow" href="https://www.tiktok.com/@gart.fond">
                      <img src="<?= get_template_directory_uri() . '/assets/img/header/tictok.svg' ?>" alt="icon-social" class="social__item-img">
                    </a>
                    <a class="social__item" rel="nofollow" href="https://t.me/gart_fond">
                      <img src="<?= get_template_directory_uri() . '/assets/img/header/telegram.svg' ?>" alt="icon-social" class="social__item-img">
                    </a>
                </div>
            </div>
        </div>


        <div class="footer-copy">© <?php echo get_field('_footer_copy', 'options'); ?></div>
    </div>
</footer>

<div class="popub popub-question" data-ttl="1" id="form">
  <div class="popub__inner">
    <div class="question-box">
      <img class="question-box__logo" src="<?= get_template_directory_uri() . '/assets/img/logo.svg' ?>" alt="logo" />
      <div class="question-box__line"></div>
      <?php echo get_field('_modal_text', 'options'); ?>

      <div class="question-box__wrapper">
        <div class="question-box__btn btn">
          <span class="helper"><?php echo get_field('_modal_donat_button', 'options'); ?></span>
        </div>
        <a class="question-box__btn btn popub-btn-form"
          ><span class="folder"><?php echo get_field('_collection_create_button', 'options'); ?></span></a
        >
      </div>
    </div>
  </div>
</div>


<?php get_template_part('template-parts/popup-form'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
