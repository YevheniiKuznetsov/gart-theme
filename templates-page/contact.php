<?php
/* Template Name: Contact*/

get_header(); ?>

<?php get_template_part('template-parts/main-breadcrumbs'); ?>

<!-- <?php
  while ( have_posts() ) :
    the_post();
?>
<main class="main-content">
  <?php
    the_content()
  ?>
</main>
<?php
  endwhile; // End of the loop.
?> -->

<section class="contacts">
  <div class="container">
    <div class="contacts__inner">
      <div class="box-feedback">
        <div class="box-feedback__wrapper">
          <div class="box-feedback__social">
            <div class="box-feedback__social-title"><?php echo get_field('_feedback_main_title', 'options'); ?></div> 

            <div class="fund-box">
              <div class="fund-box__item">
                <div class="fund-box__item">
                  <img
                    class="fund-box__item-icon"
                    src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-ph.png' ?>"
                    alt="box__item"
                  />
                  <a class="fund-box__item-link" href="tel:+380936242512"
                    >+38 093 624 25 12
                  </a
                  >
                </div>
              </div>

              <div class="fund-box__item">
                <div class="fund-box__item">
                  <img
                    class="fund-box__item-icon"
                    src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-ml.png' ?>"
                    alt="box__item"
                  />
                  <a
                    class="fund-box__item-link"
                    href="mail:gart.fond@gmail.com"
                    >gart.fond@gmail.com</a
                  >
                </div>
              </div>

              <!-- <div class="fund-box__item">
                <div class="fund-box__item">
                  <img
                    class="fund-box__item-icon"
                    src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-fb.png' ?>"
                    alt="box__item"
                  />
                  <a class="fund-box__item-link" href="#"
                    >People’s Project</a
                  >
                </div>
              </div> -->
            </div>

            <div class="social">
              <div class="social__title"><?php echo get_field('_feedback_soc_links_', 'options'); ?></div>

              <div class="social__wrapper">
                <a class="social__item" rel="nofollow" href="https://instagram.com/gart_fond"
                  ><img
                    src="<?= get_template_directory_uri() . '/assets/img/header/instagram.svg' ?>"
                    alt="icon-social"
                    class="social__item-img"
                /></a>
                <a class="social__item" rel="nofollow" href="https://www.facebook.com/profile.php?id=100086626232765"
                  ><img
                    src="<?= get_template_directory_uri() . '/assets/img/header/facebook.svg' ?>"
                    alt="icon-social"
                    class="social__item-img"
                /></a>
                
                <a class="social__item" rel="nofollow" href="https://www.youtube.com/c/%D0%A1%D0%B5%D1%80%D0%B3%D1%96%D0%B9%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%BE%D0%B2"
                  ><img
                    src="<?= get_template_directory_uri() . '/assets/img/header/twitter.svg' ?>"
                    alt="icon-social"
                    class="social__item-img"
                /></a>
              </div>
            </div>
          </div>
          <div class="box-feedback__form">
            <div class="box-feedback__form-title">
              <?php echo get_field('_feedback_form_title', 'options'); ?>
            </div>
            <!-- <form action="#" class="form">
              <div class="form__wrapper">
                <div class="form__item">
                  <label class="form__label" for="name">Ваше ім`я </label>
                  <input
                    class="form__input"
                    id="name"
                    name="name"
                    type="text"
                  />
                </div>
                <div class="form__item">
                  <label class="form__label" for="email">Ваш Email</label>
                  <input
                    class="form__input"
                    id="email"
                    name="email"
                    type="email"
                  />
                </div>
              </div>

              <label class="form__label" for="textarea"
                >Ваше повідомлення
              </label>
              <textarea
                class="form__input form__textarea"
                id="textarea"
                name="textarea"
                type="text"
              >
              </textarea>

              <button class="btn form__btn" type="submit">
                Підписатися
              </button>
            </form> -->
            <?php echo do_shortcode( '[contact-form-7 id="206" title="Зворотній звязок"]' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>
