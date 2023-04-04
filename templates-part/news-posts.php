<div class="contents__post">
  <div class="contents__post-top">
    
    <a href="<?= the_permalink(); ?>"
      ><?php the_post_thumbnail('full', array('class' => 'contents__post-img', "alt" => "post image")); ?></a
    >
    <!-- <?php the_post_thumbnail('full', array('class' => 'contents__post-img', "alt" => "post image")); ?> -->
    <div class="contents__post-line"></div>

    <?php the_title( "<h5 class='contents__post-title'>", '</h5>' ); ?>
    
    <div class="contents__post-desc">
      <?php the_excerpt(); ?>
    </div>
  </div>
  <div class="contents__post-footer">
    <div class="box">
      <div class="box__top">
        <div class="objective-end">
          <div class="objective-end__img">
            <img
              class="objective-end__img-icon"
              src="<?= get_template_directory_uri() . '/assets/img/icons/objective-end-icon.svg' ?>"
              alt="objective-end-icon"
            />
          </div>

          <div class="objective-end__content">
            <div class="objective-end__content-count">
              <span><?= get_field('fundraising_amount'); ?></span> <span><?php echo get_field('currency_uah', 'options'); ?></span>
            </div>
            <div class="objective-end__content-text"><?php echo get_field('_amount_required', 'options'); ?></div>
          </div>
        </div>
        <div class="objective-now">
          <div class="objective-now__img">
            <svg
              class="objective-end__img-icon objective-end-progres-icon"
              width="28"
              height="28"
              viewBox="0 0 28 28"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M14 24.5C19.799 24.5 24.5 19.799 24.5 14C24.5 11.7995 23.8231 9.75702 22.6661 8.06957L14.1884 17.4893C13.4957 18.2589 12.3301 18.3726 11.5018 17.7513L7.56667 14.8C7.12484 14.4686 7.0353 13.8418 7.36667 13.4C7.69804 12.9582 8.32484 12.8686 8.76667 13.2L12.7018 16.1513L21.3694 6.5206C19.4738 4.65269 16.8715 3.5 14 3.5C8.20101 3.5 3.5 8.20101 3.5 14C3.5 19.799 8.20101 24.5 14 24.5Z"
                fill="#FFD700"
              />
            </svg>
          </div>

          
          <div class="objective-now__content">
            <div class="objective-now__content-count" fundraising-amount="<?=  get_field('fundraising_amount'); ?>" collected-funds="<?=  get_field('collected_funds'); ?>">24%</div>
            <div class="objective-now__content-text"><?php echo get_field('_chosen', 'options'); ?></div>
          </div>
        </div>
      </div>
      <div class="box__footer">
        <div class="progress-bar">
          <div
            class="progress-bar__active"
            style="width: 24%"
          ></div>
        </div>
      </div>
    </div>

    <a class="btn contents__post-btn" href="<?= the_permalink(); ?>"
      ><span class="plus"><?php echo get_field('_support_button', 'options'); ?></span></a
    >
  </div>

  <!-- <script>
    let tableData = [];
  </script> -->

  <?php

    // проверяем есть ли данные в гибком содержании
    if( have_rows('table_vitrate_one') ):
        // перебираем данные
        while ( have_rows('table_vitrate_one') ) : the_row();
            if( get_row_layout() == 'table_text' ):
              ?>

              <script>
                try {
                  tableData.push({
                    date: `<?php echo the_sub_field('date_table_value'); ?>`,
                    name: `<?php echo the_sub_field('table_name_value'); ?>`,
                    cost: `<?php echo the_sub_field('cost_table_value'); ?>`,
                    quantity: `<?php echo the_sub_field('cost_table_quantity_value'); ?>`,
                    image: `<?php echo the_sub_field('table_image'); ?>`,
                  });
                } catch (data) {
                }
                
              </script>
              
              <?php

            endif;
        endwhile;
    endif;
  ?>

  <script>
    {
      try {
        let tableContainer = document.querySelector("#table_sound_body");
        let reportTranslate = "<?= get_field('_report_button_translate', 'options'); ?>";

        tableData.forEach((tableObject) => {

        tableContainer.innerHTML += `
            <div class="table-sound__line">
              <div class="table-sound__item table-report__item table-report__item-date">
                <span class="table-sound__item-date">
                  ${tableObject.date}
                </span>
              </div>
              <div class="table-sound__item">
                <span class="table-sound__item-name"> ${tableObject.name} </span>
              </div>
              <div class="table-sound__item">
                <span class="table-sound__item-counts"> ${tableObject.quantity} </span>
              </div>
              <div class="table-sound__item">
                <span class="table-sound__item-price">
                  ${tableObject.cost} UAH
                </span>
              </div>
              <div class="table-sound__item">
                <button class="btn open-sound-modal">
                  <span class="download">${reportTranslate}</span>
                </button>
              </div>
            </div>
          `;
        });

        const buttonOpenModal = document.querySelectorAll(".open-sound-modal");
        const soundModalContainer = document.querySelector(".sound-modal-container");

        buttonOpenModal.forEach((button, index) => {
          button.addEventListener("click", ()=> {
            soundModalContainer.innerHTML = `
              <div class="sound-modal">
                <div id="sound_modal_close" class="popub__close"></div>
                <img src="${tableData[index].image}" alt="report" />
              </div>
            `;

            const soundModalClose = document.querySelector("#sound_modal_close");
            soundModalClose.addEventListener("click", ()=> {
              soundModalContainer.innerHTML = "";
            })
          })
        })
      } catch (data) {
      }
      

      const quantityPosts = 8; //!!!!!!
      let fundraisingAmount = '<?=  get_field('fundraising_amount'); ?>';

      const elements = document.querySelectorAll(".objective-now__content-count");
      const progresBar = document.querySelectorAll(".progress-bar__active");
      const progresIcon = document.querySelectorAll(".objective-end-progres-icon");

      elements.forEach((element, index)=> {
        const fundraisingAmount = toNumberAmount(element.getAttribute("fundraising-amount"));
        const collectedAmount = toNumberAmount(element.getAttribute("collected-funds"));

        let percentAmount = collectedAmount >= fundraisingAmount ? "100%" : `${Math.floor(collectedAmount * 100 / fundraisingAmount)}%`;
        element.innerHTML = percentAmount;
        progresBar[index].style.width = percentAmount;
        if (percentAmount === "100%") {
          progresBar[index].style.background = "#20C997"
          progresIcon[index].classList.add("objective-end__img-icon--full")
        }

        function toNumberAmount(num) {
          let thisNumber = Number(num.split(" ").join(""))
          return thisNumber
        }
      })
    }

  </script>
</div>