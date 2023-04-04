<section class="news-blog__promo">
    <div class="container">
        <div class="news-blog__promo__header">
            <?php
            get_the_category();
            $dateItem = strtotime(get_the_date("d.m.Y"));
            $day = date("d", $dateItem);
            $mouse = date("m", $dateItem);
            $year = date("Y", $dateItem);
            if (is_singular()) :
                the_title('<h1 class="news-blog__promo__header__title">', '</h1>');
            endif;

            if ('post' === get_post_type()) :
                ?>
                <time class="news-blog__promo__header__date">
                    <p class="date"><?= $day; ?>.<span class="stroke"><?= $mouse; ?></span></p>
                    <p class="news-blog__promo__header__date__year"><?= $year; ?></p>
                </time>
            <?php endif; ?>
        </div>
        <?php if(has_excerpt()):?>
        <p class="news-blog__promo__discription"><?= get_the_excerpt(); ?></p>
        <?php endif;?>
    </div>
</section>
<?php if (has_post_thumbnail()): ?>
<section class="news-blog__img">
    <div class="container">
        <div class="news-blog__promo__img">
            <?php the_post_thumbnail('full',array('class'=>'news-blog__promo__img-img')); ?>
        </div>
    </div>
</section>
<?php endif;?>
<section class="news-blog__info">
  <p>custom text: <?= get_field('add_text'); ?></p>
    <div class="container news-blog__info-container">
        <div class="news-blog__info__text">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'amircapital'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );
            $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'amircapital' ) );
            ?>
        </div>
        <!-- <div class="news-blog__info__sidebar">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) : ?>
            <?php endif; ?>
        </div> -->
    </div>
</section>

<?php get_template_part('template-parts/main-breadcrumbs'); ?>

<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
<section class="post-card">
  <div class="container">
    <div class="post-card__inner">
      <div class="card">
        <div class="card__wrapper">
          <!--  fundraising-end - клас для закінчиння сбору -->
          <div class="card__picture">
            <?php the_post_thumbnail('full', array('class' => 'card__picture-img', "alt" => "post image")); ?>
          </div>
          <div class="card__content">
            <?php 
              if (is_singular()) :
                the_title('<h2 class="card__content-title">', '</h2>');
              endif;
            ?>
           
            <div class="card__counts">
              <div class="card__counts-peoples">
                <span>747</span>осіб вже зробили внесок
              </div>
              <div class="card__counts-peoples">
                <span>25%</span>зібрано
              </div>
            </div>

            <div class="objective">
              <div class="objective__now-point">
                <span>455 956 грн</span>
              </div>
              <div class="objective__end-point">
                / <span>1 800 000 грн</span>
              </div>
            </div>

            <div class="card__content-data">
              оновлено 30.08.2022 о 10:51
            </div>

            <div class="progress-bar">
              <div class="progress-bar__active" style="width: 24%"></div>
            </div>

            <a class="btn" href="#"
              ><span class="plus">Зробити внесок</span></a
            >

            <div class="payments">
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="img/icons/payments/visa.svg"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="img/icons/payments/mastercard.svg"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="img/icons/payments/liqpay.svg"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="img/icons/payments/swift.svg"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="img/icons/payments/paypal.svg"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="img/icons/payments/icon-gplay.svg"
                  alt="visa"
                />
              </div>
            </div>

            <div class="share-box">
              <div class="share-box__title">Поділитись:</div>

              <div class="share-box__wrapper">
                <a class="share-box__item" href="#">
                  <img
                    src="img/icons/social/i-share-1.png"
                    alt="box__item"
                    class="share-box__item-icon"
                  />
                </a>
                <a class="share-box__item" href="#">
                  <img
                    src="img/icons/social/i-share-2.png"
                    alt="box__item"
                    class="share-box__item-icon"
                  />
                </a>
                <a class="share-box__item" href="#">
                  <img
                    src="img/icons/social/i-share-3.png"
                    alt="box__item"
                    class="share-box__item-icon"
                  />
                </a>
                <a class="share-box__item" href="#">
                  <img
                    src="img/icons/social/i-share-4.png"
                    alt="box__item"
                    class="share-box__item-icon"
                  />
                </a>
              </div>
            </div>

            <div class="contacts-box">
              <div class="contacts-box__item">
                <img
                  class="contacts-box__item-icon"
                  src="img/icons/social/i-ph.png"
                  alt="box__item"
                />
                <a class="contacts-box__item-link" href="tel:+380634029093"
                  >+38 063 402 90 93</a
                >
              </div>
              <div class="contacts-box__item">
                <img
                  class="contacts-box__item-icon"
                  src="img/icons/social/i-ml.png"
                  alt="box__item"
                />
                <a
                  class="contacts-box__item-link"
                  href="mail:info@peoplesproject.com"
                  >info@peoplesproject.com</a
                >
              </div>
              <div class="contacts-box__item">
                <img
                  class="contacts-box__item-icon"
                  src="img/icons/social/i-fb.png"
                  alt="box__item"
                />
                <a class="contacts-box__item-link" href="#"
                  >People’s Project</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="container">
    <div class="content__inner">
      <main class="main-content">
        <div class="tabs">
          <div class="tabs__item tabs__item--active" data-text>
            <span>
              Опис
              <svg
                class="tabs__item-icon"
                width="28"
                height="29"
                viewBox="0 0 28 29"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  class="tabs__item-ico--fill"
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M14.167 2.83337V9.00004L14.167 9.05445C14.1669 9.47852 14.1668 9.89065 14.2125 10.2306C14.264 10.6138 14.3896 11.051 14.7528 11.4143C15.116 11.7775 15.5533 11.903 15.9365 11.9545C16.2764 12.0002 16.6885 12.0001 17.1125 12H17.1126H17.1126H17.1126L17.167 12H23.3337V19.1667C23.3337 22.4665 23.3337 24.1165 22.3085 25.1416C21.2834 26.1667 19.6335 26.1667 16.3337 26.1667H11.667C8.36716 26.1667 6.71724 26.1667 5.69212 25.1416C4.66699 24.1165 4.66699 22.4665 4.66699 19.1667V9.83337C4.66699 6.53354 4.66699 4.88363 5.69212 3.8585C6.71724 2.83337 8.36716 2.83337 11.667 2.83337H14.167ZM16.167 2.83569V9.00004C16.167 9.49972 16.1691 9.77387 16.1947 9.96406L16.1957 9.97135L16.203 9.97235C16.3932 9.99792 16.6673 10 17.167 10H23.3313C23.3238 9.42418 23.2919 9.06817 23.156 8.74028C22.9784 8.31148 22.6412 7.97428 21.9668 7.29987L18.8672 4.20021C18.1928 3.5258 17.8556 3.1886 17.4268 3.01099C17.0989 2.87517 16.7429 2.84321 16.167 2.83569ZM9.50033 15.6667C9.50033 15.1144 9.94804 14.6667 10.5003 14.6667L17.5003 14.6667C18.0526 14.6667 18.5003 15.1144 18.5003 15.6667C18.5003 16.219 18.0526 16.6667 17.5003 16.6667L10.5003 16.6667C9.94804 16.6667 9.50033 16.219 9.50033 15.6667ZM10.5003 19.3334C9.94804 19.3334 9.50033 19.7811 9.50033 20.3334C9.50033 20.8857 9.94804 21.3334 10.5003 21.3334H15.167C15.7193 21.3334 16.167 20.8857 16.167 20.3334C16.167 19.7811 15.7193 19.3334 15.167 19.3334H10.5003Z"
                  fill="#ADB5BD"
                />
              </svg>
            </span>
          </div>
          <div class="tabs__item" data-report>
            <span>
              Звіт
              <svg
                class="tabs__item-icon"
                width="26"
                height="27"
                viewBox="0 0 26 27"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  class="tabs__item-ico--fill"
                  d="M22.75 3.75V2.25H24.25V3.75H22.75ZM12.9773 15.644C12.3915 16.2298 11.4418 16.2298 10.856 15.644C10.2702 15.0582 10.2702 14.1085 10.856 13.5227L12.9773 15.644ZM21.25 12.4167V3.75H24.25V12.4167H21.25ZM22.75 5.25H14.0833V2.25H22.75V5.25ZM23.8107 4.81066L12.9773 15.644L10.856 13.5227L21.6893 2.68934L23.8107 4.81066Z"
                  fill="#ADB5BD"
                />
                <path
                  class="tabs__item-ico--stroke"
                  d="M21.667 16.75V16.75C21.667 19.0158 21.667 20.1487 21.0863 20.9406C20.9054 21.1874 20.6877 21.4051 20.4409 21.586C19.649 22.1667 18.5161 22.1667 16.2503 22.1667H10.3337C7.50523 22.1667 6.09102 22.1667 5.21234 21.288C4.33366 20.4093 4.33366 18.9951 4.33366 16.1667V10.25C4.33366 7.98426 4.33366 6.85137 4.91433 6.05944C5.09528 5.81265 5.31294 5.595 5.55973 5.41404C6.35166 4.83337 7.48455 4.83337 9.75033 4.83337V4.83337"
                  stroke="#ADB5BD"
                  stroke-width="3"
                  stroke-linecap="round"
                />
              </svg>
            </span>
          </div>
        </div>

        <div class="content-tabs">
          <div class="content-tabs__text">
            <?php
            the_content(
                sprintf(
                    wp_kses(
                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'amircapital'),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post(get_the_title())
                )
            );
            $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'amircapital' ) );
            ?>
            <!-- <p>
              Війна на півдні України ще далека до завершення, але зараз
              наші бійці проводять підготовку до рішучих дій на Херсонському
              напрямку. Ми маємо можливість наблизити довгоочікуваний момент
              звільнення Херсона від окупантів та звільнити мешканців міста.
            </p>
            <p>
              Вже кілька місяців літаки ворога не наважуються залітати на
              територію України, воліючи підло запускати ракети з території
              своєї терористичної країни. Настав час взяти ініціативу до
              своїх рук і створити армію дронів, безпілотників та
              квадрокоптерів, що вселятеме жах в очі окупантів, які не
              встигли втекти з нашої землі. Для наших воїнів така армія
              дасть змогу бачити, визначати та обрушувати вогневу міць
              артилерії точно на голови загарбників.
            </p>
            <h3>Для чого збираємо</h3>
            <p>
              Війна на півдні України ще далека до завершення, але зараз
              наші бійці проводять підготовку до рішучих дій на Херсонському
              напрямку. Ми маємо можливість наблизити довгоочікуваний момент
              звільнення Херсона від окупантів та звільнити мешканців міста.
            </p>
            <p>
              Вже кілька місяців літаки ворога не наважуються залітати на
              територію України, воліючи підло запускати ракети з території
              своєї терористичної країни. Настав час взяти ініціативу до
              своїх рук і створити армію дронів, безпілотників та
              квадрокоптерів, що вселятеме жах в очі окупантів, які не
              встигли втекти з нашої землі. Для наших воїнів така армія
              дасть змогу бачити, визначати та обрушувати вогневу міць
              артилерії точно на голови загарбників.
            </p> -->
          </div>
          <div class="content-tabs__report">
            <h3 class="content-tabs__report-title">
              Звітність
              <a class="popub-btn" href="#">
                <img
                  class="content-tabs__report-icon"
                  src="img/icons/i-question.svg"
                  alt="question"
                />
                Відповіді на запитання
              </a>
            </h3>

            <div class="box-report">
              <div class="box-report__item">
                <div class="box-report__item-icon">
                  <img
                    class="box-report__item-img"
                    src="img/icons/i-gIft.svg"
                    alt="gIft"
                  />
                </div>
                <div class="box-report__item-subtitle">747</div>
                <div class="box-report__item-text">Благодійних внесків</div>
              </div>
              <div class="box-report__item">
                <div class="box-report__item-icon">
                  <img
                    class="box-report__item-img"
                    src="img/icons/objective-end-icon.svg"
                    alt="gIft"
                  />
                </div>
                <div class="box-report__item-subtitle">1 800 000 ₴</div>
                <div class="box-report__item-text">Потрібно зібрати</div>
              </div>
              <div class="box-report__item">
                <div class="box-report__item-icon">
                  <img
                    class="box-report__item-img"
                    src="img/icons/i-gIft.svg"
                    alt="gIft"
                  />
                </div>
                <div class="box-report__item-subtitle">1 800 000 ₴</div>
                <div class="box-report__item-text">Потрібно зібрати</div>
              </div>
              <div class="box-report__item">
                <div class="box-report__item-icon">
                  <img
                    class="box-report__item-img"
                    src="img/icons/i-gIft.svg"
                    alt="gIft"
                  />
                </div>
                <div class="box-report__item-subtitle">747</div>
                <div class="box-report__item-text">Благодійних внесків</div>
              </div>
            </div>

            <div class="box-table">
              <div class="box-table__wrapper">
                <div class="box-table__cell div1">123</div>
                <div class="box-table__cell div2">124</div>
                <div class="box-table__cell div3">214</div>
                <div class="box-table__cell div4">214</div>
                <div class="box-table__cell div5">124</div>
                <div class="box-table__cell div6">124</div>
                <div class="box-table__cell div7">124</div>
                <div class="box-table__cell div8">124</div>
                <div class="box-table__cell div9">214</div>
                <div class="box-table__cell div10">124</div>
                <div class="box-table__head">
                  <div class="box-table__head-title">
                    Поточні витрати по проекту
                  </div>
                  <div class="box-table__head-summ">0.00 грн</div>
                </div>
                <div class="box-table__footer">
                  <div class="box-table__footer-title">
                    <span>Разом </span>(з урахуванням сплати комісії*):
                  </div>

                  <div class="box-table__footer-summ">0.00 грн</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <aside class="aside-content">
        <div class="last-news">
          <h3 class="last-news__title">Останні новини</h3>

          <div class="last-news__wrapper">
            <a class="news-box" href="#">
              <img
                class="news-box__img"
                src="img/new-img/news-g-img-1.jpg"
                alt="Війна за Україну: чим може допомогти кожен із нас"
              />
              <div class="news-box__content">
                <div class="news-box__content-desc">
                  Війна за Україну: чим може допомогти кожен із нас
                </div>
                <div class="news-box__content-date">02.03.22 15:02</div>
              </div>
            </a>
            <a class="news-box" href="#">
              <img
                class="news-box__img"
                src="img/new-img/news-g-img-2.jpg"
                alt="Війна за Україну: чим може допомогти кожен із нас"
              />
              <div class="news-box__content">
                <div class="news-box__content-desc">
                  Para bellum: чи чекати великої війни восени?
                </div>
                <div class="news-box__content-date">02.03.22 15:02</div>
              </div>
            </a>
            <a class="news-box" href="#">
              <img
                class="news-box__img"
                src="img/new-img/news-g-img-2.jpg"
                alt="Війна за Україну: чим може допомогти кожен із нас"
              />
              <div class="news-box__content">
                <div class="news-box__content-desc">
                  Para bellum: чи чекати великої війни восени?
                </div>
                <div class="news-box__content-date">02.03.22 15:02</div>
              </div>
            </a>
          </div>
        </div>

        <div class="information-fund">
          <h3 class="information-fund__title">Благодійний фонд “Ґарт”</h3>

          <div class="information-fund__desc">
            Миколаївський обласний благодійний фонд “РЕГІОНАЛЬНИЙ ФОНД
            БЛАГОЧЕСТЯ”
          </div>

          <div class="information-fund__desc">
            Свідоцтво про державну реєстрацію благодійної організації Серія
            АВ №736456 від 26.09.08
          </div>

          <div class="contacts-fund">
            <h3 class="contacts-fund__title">КОНТАКТИ:</h3>
            <div class="fund-box">
              <div class="fund-box__item">
                <div class="fund-box__item">
                  <img
                    class="fund-box__item-icon"
                    src="img/icons/social/i-ph-w.png"
                    alt="box__item"
                  />
                  <a class="fund-box__item-link" href="tel:+380634029093"
                    >+38 063 402 90 93</a
                  >
                </div>
              </div>

              <div class="fund-box__item">
                <div class="fund-box__item">
                  <img
                    class="fund-box__item-icon"
                    src="img/icons/social/i-ml-w.png"
                    alt="box__item"
                  />
                  <a
                    class="fund-box__item-link"
                    href="mail:info@peoplesproject.com"
                    >info@peoplesproject.com</a
                  >
                </div>
              </div>

              <div class="fund-box__item">
                <div class="fund-box__item">
                  <img
                    class="fund-box__item-icon"
                    src="img/icons/social/i-fb-w.png"
                    alt="box__item"
                  />
                  <a class="fund-box__item-link" href="#"
                    >People’s Project</a
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="document-box">
            <div class="document-box__wrapper">
              <img
                src="img/document/img-1.jpg"
                alt="document"
                class="document-box__img"
              />
              <img
                src="img/document/img-2.jpg"
                alt="document"
                class="document-box__img"
              />
              <img
                src="img/document/img-3.jpg"
                alt="document"
                class="document-box__img"
              />
            </div>

            <a href="#" class="btn" download="#">
              <span class="download">Завантажити</span>
            </a>
          </div>

          <div class="partners-box">
            <div class="partners-box__title">Партнери</div>

            <div class="partners-box__wrapper">
              <div class="partners-box__item">
                <img
                  class="partners-box__item-logo"
                  src="img/partners/partners-logo-1.png"
                  alt="terra"
                />
                <div class="partners-box__item-subtitle">
                  Terra Incognita
                </div>
                <div class="partners-box__item-desc">
                  Туристичне спорядження
                </div>
                <a
                  class="partners-box__item-link"
                  href="http://terraincognita.ua"
                  >http://terraincognita.ua</a
                >
              </div>

              <div class="partners-box__item">
                <img
                  class="partners-box__item-logo"
                  src="img/partners/partners-logo-2.png"
                  alt="tasci"
                />
                <div class="partners-box__item-subtitle">Tactica</div>
                <div class="partners-box__item-desc">
                  Сучасний тир та зброярня
                </div>
                <a
                  class="partners-box__item-link"
                  href="http://tactica.kiev.ua/"
                  >http://tactica.kiev.ua/</a
                >
              </div>

              <div class="partners-box__item">
                <img
                  class="partners-box__item-logo"
                  src="img/partners/partners-logo-3.png"
                  alt="tereo"
                />
                <div class="partners-box__item-subtitle">СТОПТЕРРОР</div>
                <div class="partners-box__item-desc">
                  Координація бойових підрозділів з населенням
                </div>
                <a
                  class="partners-box__item-link"
                  href="http://stopterror.in.ua/"
                  >http://stopterror.in.ua/</a
                >
              </div>

              <div class="partners-box__item">
                <img
                  class="partners-box__item-logo"
                  src="img/partners/partners-logo-4.png"
                  alt="pro"
                />
                <div class="partners-box__item-subtitle">Prof 1 Group</div>
                <div class="partners-box__item-desc">
                  Мережа військових магазинів
                </div>
                <a
                  class="partners-box__item-link"
                  href="http://prof1group.ua"
                  >http://prof1group.ua</a
                >
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>