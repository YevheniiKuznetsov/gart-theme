<?php get_template_part('template-parts/sections/promo'); ?>

<?php get_template_part('template-parts/main-breadcrumbs'); ?>

<section class="post-card">
  <div class="container">
    <div class="post-card__inner">
      <div class="card">
        <div class="card__wrapper">
          <!--  fundraising-end - клас для закінчиння сбору -->
          <div class="card__picture">
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="post image" class="card__picture-img" />
          </div>
          <div class="card__content">
            <?php 
              if (is_singular()) :
                the_title('<h2 class="card__content-title">', '</h2>');
              endif;
            ?>
           
            <div class="card__counts">
              <div class="card__counts-peoples">
                <span><?= get_field('quantity_donations_person'); ?></span><?php echo get_field('_people_have_already_contributed', 'options'); ?>
              </div>
              <div class="card__counts-peoples">
                <span id="counts_peoples_percent"></span><?php echo get_field('_chosen', 'options'); ?>
              </div>
            </div>

            <div class="objective">
              <div class="objective__now-point">
                <span><?= get_field('collected_funds'); ?> <?php echo get_field('currency_uah', 'options'); ?></span>
              </div>
              <div class="objective__end-point">
                / <span><?= get_field('fundraising_amount'); ?> <?php echo get_field('currency_uah', 'options'); ?></span>
              </div>
            </div>

            <div class="card__content-data">
              <?php echo get_field('_updated_date', 'options'); ?> <?php the_modified_date(); ?> <?php the_modified_date('G:i'); ?>
            </div>

            <div class="progress-bar">
              <div id="progress_bar" class="progress-bar__active" style="width: 24%"></div>
            </div>
            <a id="payment_button" class="btn" href="<?php echo get_page_link( 164 ) . '?id=' . get_the_ID() ?>"
              ><span class="plus"><?php echo get_field('_button_make_contribution', 'options'); ?></span></a
            >
            <a id="allprojects_link" class="btn" href="<?php echo get_page_link( 23 ) ?>"><span class="plus"><?php echo get_field('_link_to_all_projects', 'options'); ?></span></a>

            <div class="payments">
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/payments/visa.svg' ?>"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/payments/mastercard.svg' ?>"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/payments/liqpay.svg' ?>"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/payments/swift.svg' ?>"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/payments/paypal.svg' ?>"
                  alt="visa"
                />
              </div>
              <div class="payments__item">
                <img
                  class="payments__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/payments/icon-gplay.svg' ?>"
                  alt="visa"
                />
              </div>
            </div>

            
            <div class="share-box">
              <div class="share-box__title"><?php echo get_field('_to_share', 'options'); ?></div>

              <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
            </div>

            <div class="contacts-box">
              <div class="contacts-box__item">
                <img
                  class="contacts-box__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-ph.png' ?>"
                  alt="box__item"
                />
                <a class="contacts-box__item-link" href="tel:+380936242512"
                  >+38 093 624 25 12</a
                >
              </div>
              <div class="contacts-box__item">
                <img
                  class="contacts-box__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-ml.png' ?>"
                  alt="box__item"
                />
                <a
                  class="contacts-box__item-link"
                  href="mail:gart.fond@gmail.com"
                  >gart.fond@gmail.com</a
                >
              </div>
              <!-- <div class="contacts-box__item">
                <img
                  class="contacts-box__item-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-fb.png' ?>"
                  alt="box__item"
                />
                <a class="contacts-box__item-link" href="#"
                  >People’s Project</a
                >
              </div> -->
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
              <?php echo get_field('__description_tab_title', 'options'); ?>
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
              <?php echo get_field('_report_tab_title', 'options'); ?>
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
              the_content()
            ?>
            
          </div>
          <div class="content-tabs__report">
            <h3 class="content-tabs__report-title">
              <?php echo get_field('_reporting_tab', 'options'); ?>
              <div class="popub-btn popub-btn-info content-tabs__report-title_button">
                <img
                  class="content-tabs__report-icon"
                  src="<?= get_template_directory_uri() . '/assets/img/icons/i-question.svg' ?>"
                  alt="question"
                />
                <?php echo get_field('_answers_to_questions', 'options'); ?>
              </div>
            </h3>

            <div class="box-report">
              <div class="box-report__item">
                <div class="box-report__item-icon">
                  <img
                    class="box-report__item-img"
                    src="<?= get_template_directory_uri() . '/assets/img/icons/i-gIft.svg' ?>"
                    alt="gIft"
                  />
                </div>
                <div class="box-report__item-subtitle"><?= get_field('quantity_donations_person'); ?></div>
                <div class="box-report__item-text"><?= get_field('_charitable_contributions_title', 'options'); ?></div>
              </div>
              <div class="box-report__item">
                <div class="box-report__item-icon">
                  <img
                    class="box-report__item-img"
                    src="<?= get_template_directory_uri() . '/assets/img/icons/objective-end-icon.svg' ?>"
                    alt="gIft"
                  />
                </div>
                <div class="box-report__item-subtitle"><?= get_field('fundraising_amount'); ?> ₴</div>
                <div class="box-report__item-text"><?= get_field('_necessary_collect_signature', 'options'); ?></div>
              </div>
              <div class="box-report__item">
                <!-- <div class="box-report__item-icon">
                                <img class="box-report__item-img" src="img/icons/i-gIft.svg" alt="gIft">
                            </div> -->
                <div class="box-report__item-svg">
                  <svg
                    viewBox="0 0 64 64"
                    class="progress-bar"
                    preserveAspectRatio="none"
                  >
                    <circle
                      class="progress-bar__defolt"
                      r="25%"
                      cx="50%"
                      cy="50%"
                    ></circle>
                    <circle
                      class="progress-bar__active"
                      id="schedule_collected"
                      r="25%"
                      cx="50%"
                      cy="50%"
                      stroke-dasharray="85 100"
                    ></circle>
                  </svg>
                  <div class="box">
                    <div class="box-goal__count" id="schedule_collected_value">25%</div>
                    <div class="box-goal__text"><?php echo get_field('_chosen', 'options'); ?></div>
                  </div>
                </div>
                <div class="box-report__item-goal">
                  <span><?= get_field('collected_funds'); ?> <?php echo get_field('currency_uah', 'options'); ?></span> <?php echo get_field('_chosen', 'options'); ?>
                </div>
                <div class="box-report__item-goal">
                  <span id="need_to_collect">1 344 044 </span> <?php echo get_field('_remains_to_collect', 'options'); ?>
                </div>
              </div>
              <div class="box-report__item">
                <div class="box-report__item-svg">
                  <svg
                    viewBox="0 0 64 64"
                    class="progress-bar"
                    preserveAspectRatio="none"
                  >
                    <circle
                      class="progress-bar__defolt"
                      r="25%"
                      cx="50%"
                      cy="50%"
                    ></circle>
                    <circle
                      class="progress-bar__active"
                      id="spending_schedule"
                      r="25%"
                      cx="50%"
                      cy="50%"
                      stroke-dasharray="5 100"
                    ></circle>
                  </svg>
                  <div class="box">
                    <div id="schedule_is_spent_percent" class="box-goal__count">0%</div>
                    <div class="box-goal__text"><?php echo get_field('_schedule_is_spent', 'options'); ?></div>
                  </div>
                </div>
                <div class="box-report__item-goal">
                  <span class="_schedule_is_spent">0 грн</span> <?php echo get_field('_schedule_is_spent', 'options'); ?>
                </div>
                <div class="box-report__item-goal">
                  <span id="balance_gr">0 грн </span> <?php echo get_field('_balance_gr', 'options'); ?>
                </div>
              </div>
            </div>

            <div class="table-report">
              <div class="table-report__inner">
                <div class="table-report__head">
                  <div class="table-report__head-title">
                    <?php echo get_field('_table_title_spand', 'options'); ?>
                  </div>
                  <div class="table-report__head-summ _schedule_is_spent">0.00 грн</div>
                </div>
                <div class="table-report__body">
                  <div class="table-report__header">
                    <div class="table-report__item"><?php echo get_field('_data_table_line', 'options'); ?></div>
                    <div class="table-report__item"><?php echo get_field('_name_table_line', 'options'); ?></div>
                    <div class="table-report__item"><?php echo get_field('_quantity_table_line', 'options'); ?></div>
                    <div class="table-report__item"><?php echo get_field('_cost_table_line', 'options'); ?></div>
                    <div class="table-report__item"><?php echo get_field('_status_table_line', 'options'); ?></div>
                  </div>
                  <!-- Колонка під шаблон -->
                  <?php
                    // проверяем есть ли данные в гибком содержании
                    if( have_rows('table_vitrate_one') ):
                      // перебираем данные
                      while ( have_rows('table_vitrate_one') ) : the_row();
                        if( get_row_layout() == 'table_text' ):
                  ?>
                    <div class="table-report__line">
                      <div class="table-report__item table-report__item-date"><?php echo the_sub_field('date_table_value'); ?></div>
                      <div class="table-report__item table-report__item-name"><?php echo the_sub_field('table_name_value'); ?></div>
                      <div class="table-report__item table-report__item-count">
                        <span class="table-count"><?php echo the_sub_field('cost_table_quantity_value'); ?></span>
                      </div>
                      <div class="table-report__item table-report__item-price">
                        <span><?php echo the_sub_field('cost_table_value'); ?></span>&nbsp;<?php echo get_field('currency_uah', 'options'); ?>
                      </div>
                      <div class="table-report__item table-report__item-status">
                        <span class="<?php echo the_sub_field('status_tabe_value') . " " .  "status__not-done" ?>">––</span>
                      </div>
                    </div>

                      <?php
                        endif;
                      endwhile;
                    endif;
                  ?>
                  
                </div>
                <div class="table-report__footer">
                  <div class="table-report__footer-title">
                    <?php echo get_field('_table_footer_text', 'options'); ?>
                  </div>
                  <div class="table-report__footer-summ _schedule_is_spent">0.00 грн</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      
    </div>
  </div>
</section>
<div class="popub popub-info" id="how-payl">
  <div class="popub__inner">
    <div class="popub__content">
      <button class="popub__close"></button>

      <div class="content-questio">
        <h3 class="content-questio__title">
          <?php echo get_field('_modal_title', 'options'); ?>
        </h3>

        <?php echo get_field('_donat_modal_text', 'options'); ?>

      </div>
    </div>
  </div>
</div>

<script>
  {
    const paymentButton = document.querySelector("#payment_button");
    const allprojectsLink = document.querySelector("#allprojects_link");
    const tableContent = `<?php echo get_field('table_vitrate'); ?>`;
    const curencyUha = '<?php echo get_field('currency_uah', 'options'); ?>';
    let fundraisingAmount = '<?=  get_field('fundraising_amount'); ?>'; // Потрібно
    let collectedAmount = '<?= get_field('collected_funds'); ?>'; // Зібрано
    let leftToCollect = toNumberAmount(fundraisingAmount) - toNumberAmount(collectedAmount);
    const need_to_collect = document.querySelector("#need_to_collect");
    const schedule_collected_value = document.querySelector("#schedule_collected_value");
    const _schedule_is_spent = document.querySelectorAll("._schedule_is_spent");

    const schedule_collected = document.querySelector("#schedule_collected");
    const balance_gr = document.querySelector("#balance_gr");
    const schedule_is_spent_percent = document.querySelector("#schedule_is_spent_percent");

    const table_report__item_price = document.querySelectorAll(".table-report__item-price span")




    const element = document.querySelector("#counts_peoples_percent");
    const progresBar = document.querySelector("#progress_bar");

    if (toNumberAmount(collectedAmount) >= toNumberAmount(fundraisingAmount)) {
      document.querySelector(".card__picture").classList.add("fundraising-end");
    }
    
    let percentAmount = toNumberAmount(collectedAmount) >= toNumberAmount(fundraisingAmount) ? "100" : `${Math.floor(toNumberAmount(collectedAmount) * 100 / toNumberAmount(fundraisingAmount))}`;
    element.innerHTML = innerValue(percentAmount) + "%";
    progresBar.style.width = percentAmount + "%";
    if (percentAmount === "100") {
      progresBar.style.background = "#20C997"
      paymentButton.style.display = "none"
      allprojectsLink.style.display = "block"
    } else {
      paymentButton.style.display = "block"
      allprojectsLink.style.display = "none"
    }

    need_to_collect.innerHTML = `${innerValue(leftToCollect)} ${curencyUha}`

    schedule_collected.setAttribute("stroke-dasharray", `${percentAmount} 100`);
    schedule_collected_value.innerHTML = percentAmount + "%";

    //витрачено
    let amountMoneySpent = 0

    table_report__item_price.forEach((item)=>{
      amountMoneySpent += toNumberAmount(item.innerText)
    })

    _schedule_is_spent.forEach((item)=>{
      item.innerHTML = `${innerValue(amountMoneySpent)} ${curencyUha}`
    })
    
    let balanceNumber = toNumberAmount(collectedAmount) - amountMoneySpent;

    balance_gr.innerHTML = `${innerValue(balanceNumber)} ${curencyUha}`

    let spending_schedule_percent = Math.floor(amountMoneySpent * 100 / toNumberAmount(collectedAmount));
    
    schedule_is_spent_percent.innerHTML = `${spending_schedule_percent ? spending_schedule_percent : 0}%`
    spending_schedule.setAttribute("stroke-dasharray", `${spending_schedule_percent} 100`);

    function toNumberAmount(num) {
      let thisNumber = Number(num.split(" ").join(""))
      return thisNumber
    }

    function innerValue(number) {
      let innerValueArr = String(number).split("").reverse();

      for (let i = 0; i < innerValueArr.length - 1; i++) {
        if ((i + 1) % 3 === 0) {
          innerValueArr[i] = " " + innerValueArr[i];
        }
      }

      return innerValueArr.reverse().join("");
    }
  }
</script>
