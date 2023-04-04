<?php
/* Template Name: Запропонувати проект test*/

get_header(); ?>

<?php get_template_part('template-parts/sections/promo'); ?>

<?php get_template_part('template-parts/main-breadcrumbs'); ?>


<section class="contacts page-form">
  <div class="container">
    <div class="contacts__inner">
      <div class="request-help">
        <div class="request-help__inner">
          <h2 class="request-help__title">Запит на отримання допомоги</h2>
          <?php echo do_shortcode( '[contact-form-7 id="579" title=":enPage form:"]' ); ?>
        </div>
      </div>
    </div>
	<div class="form-question">
      <div class="form-question__wrapper">
        <div class="form-question__item">
          <div class="form-question__head">
            <div class="form-question__head-title">З ким ми працюємо</div>
          </div>

          <div class="form-question__body">
            <ul class="form-question__list">
              <li>
                Ми співпрацюємо із командуванням підрозділів і надаємо допомогу
                тільки в співпраці із командирами військових частин та
                формувань.
              </li>
              <li>
                Від ЗСУ, НГУ, ДПСУ, ТрО (окрім Києва) та добровольчих формувань
                просимо формувати ваші запити на рівні ваших командирів (роти,
                батальйону, бригади).
              </li>
              <li>
                Для підрозділів ТрО Києва: штаб 112 бригади ТрО визначив для
                комунікації із волонтерськими організаціями відповідальних осіб
                у кожному районі. Просимо самостійно дізнаватися про них у
                командування і передавати їм перелік своїх потреб. Вони подадуть
                запит до нас.
              </li>
            </ul>
          </div>
        </div>

        <div class="form-question__item active">
          <div class="form-question__head">
            <div class="form-question__head-title">
              З якими типами запитів ми НЕ працюємо
            </div>
          </div>

          <div class="form-question__body active">
            <ul class="form-question__body-list">
              <li>
                Не працюємо із індивідуальними запитами від одного бійця або від
                родичів/друзів/знайомих.
              </li>
              <li>
                Не опрацьовуємо запити про допомогу від цивільних або військових
                в коментарях месенджерів і соцмереж.
              </li>
              <li>
                Не доставляємо посилки з адресними вантажами (ви купили щось для
                конкретної особи або підрозділу і хочете передати через фонд).
              </li>
            </ul>
            <p class="form-question__body-text">
              Просимо поставитися до ситуації з розумінням.
            </p>
          </div>
        </div>

        <div class="form-question__item">
          <div class="form-question__head">
            <div class="form-question__head-title">
              Як правильно оформити запит
            </div>
          </div>

          <div class="form-question__body">
            <p class="form-question__body-text">
              Зразок документу на запит
              <a href="https://gart.com.ua/wp-content/themes/gard/assets/img/document/zrazok.docx"> Скачати </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?>