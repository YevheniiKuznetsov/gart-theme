<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gard
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KHVQSNH');</script>
  <!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KHVQSNH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 

<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gard' ); ?></a>

  <?php if (function_exists('wpm_language_switcher')) wpm_language_switcher('select', 'name'); ?>

  <header class="header">
    <div class="container">
        <div class="header__inner">
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <img class="logo__picture" src="<?= get_template_directory_uri() . '/assets/img/logo.svg' ?>" alt="logo" />
            </a>

            <nav class="menu">
              <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                  )
                );
                ?>
            </nav>

            <div class="box">
                <div class="social">
                    <a class="social__item" rel="nofollow" href="https://instagram.com/gart_fond">
                      <img src="<?= get_template_directory_uri() . '/assets/img/header/instagram.svg' ?>" alt="icon-social" class="social__item-img">
                    </a>
                    <a class="social__item" rel="nofollow" href="https://www.facebook.com/profile.php?id=100086626232765">
                      <img src="<?= get_template_directory_uri() . '/assets/img/header/facebook.svg' ?>" alt="icon-social" class="social__item-img">
                    </a>
                    <a class="social__item" rel="nofollow" href="https://www.youtube.com/c/%D0%A1%D0%B5%D1%80%D0%B3%D1%96%D0%B9%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%BE%D0%B2"><img src="<?= get_template_directory_uri() . '/assets/img/header/youtube.svg' ?>" alt="icon-social"
                            class="social__item-img"></a>
                    <a class="social__item" rel="nofollow" href="https://www.tiktok.com/@gart.fond">
                      <img src="<?= get_template_directory_uri() . '/assets/img/header/tictok.svg' ?>" alt="icon-social" class="social__item-img">
                    </a>
                    <a class="social__item" rel="nofollow" href="https://t.me/gart_fond">
                      <img src="<?= get_template_directory_uri() . '/assets/img/header/telegram.svg' ?>" alt="icon-social" class="social__item-img">
                    </a>
                </div>

                <div class="language-switch">
                    <div class="language-switch__item desc-language-switch__item">
                        <img class="language-switch__item-icon" src="<?= get_template_directory_uri() . '/assets/img/header/language-en.svg' ?>" alt="language">
                    </div>

                    <div class="language-switch__item desc-language-switch__item">
                        <img class="language-switch__item-icon" src="<?= get_template_directory_uri() . '/assets/img/header/language-ua.svg' ?>" alt="language">
                    </div>
                </div>
            </div>

            <div class="mobail-menu">
                <div class="bars">
                    <div class="bars__item"></div>
                    <div class="bars__item"></div>
                    <div class="bars__item"></div>
                </div>
            </div>
            <div class="mobail-content">

                <nav class="menu">
                    <?php
                      wp_nav_menu(
                        array(
                          'theme_location' => 'menu-1',
                          'menu_id'        => 'primary-menu',
                          'menu_class'        => 'menu__list',
                        )
                      );
                      ?>
                </nav>

                <div class="box">
                    <div class="social">
                        <a class="social__item" rel="nofollow" href="https://instagram.com/gart_fond">
                          <img src="<?= get_template_directory_uri() . '/assets/img/header/instagram.svg' ?>" alt="icon-social" class="social__item-img">
                        </a>
                        <a class="social__item" rel="nofollow" href="https://www.facebook.com/profile.php?id=100086626232765">
                          <img src="<?= get_template_directory_uri() . '/assets/img/header/facebook.svg' ?>" alt="icon-social" class="social__item-img">
                        </a>
                        <a class="social__item" rel="nofollow" href="https://www.youtube.com/c/%D0%A1%D0%B5%D1%80%D0%B3%D1%96%D0%B9%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%BE%D0%B2"><img src="<?= get_template_directory_uri() . '/assets/img/header/youtube.svg' ?>" alt="icon-social"
                                class="social__item-img"></a>
                        <a class="social__item" rel="nofollow" href="https://www.tiktok.com/@gart.fond">
                          <img src="<?= get_template_directory_uri() . '/assets/img/header/tictok.svg' ?>" alt="icon-social" class="social__item-img">
                        </a>
                        <a class="social__item" rel="nofollow" href="https://t.me/gart_fond">
                          <img src="<?= get_template_directory_uri() . '/assets/img/header/telegram.svg' ?>" alt="icon-social" class="social__item-img">
                        </a>
                    </div>

                    <div class="language-switch">
                        <div class="language-switch__item mob-language-switch__item">
                            <img class="language-switch__item-icon" src="<?= get_template_directory_uri() . '/assets/img/header/language-en.svg' ?>" alt="language">
                        </div>

                        <div class="language-switch__item mob-language-switch__item">
                            <img class="language-switch__item-icon" src="<?= get_template_directory_uri() . '/assets/img/header/language-ua.svg' ?>" alt="language">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
