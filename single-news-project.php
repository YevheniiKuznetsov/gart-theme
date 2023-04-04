<?php
/*
Template Name: Мой шаблон страницы
Template Post Type: news-project
*/


get_header();
?>

<main id="primary" class="site-main">

  <?php
  while ( have_posts() ) :
    the_post();

    ?>

    <?php get_template_part('template-parts/sections/promo'); ?>
    <?php get_template_part('template-parts/post-breadcrumbs'); ?>

    <script>
      let tableData = [];
    </script>

    <?php 
      $Post = get_field('post_before_recording');
      // var_dump($Post);
    ?>

    <?php
      $args_project = array(
        // 'cat' => 6,
        'post_type' => 'news-project',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 8,
      );

      $query = new WP_Query($args_project);
    ?>

		<section class="news-card">
      <div class="container">
        <div class="content">
          <div class="box-content">
            <div class="box-content__picture">
              <div class="box-content__picture-date"><?= get_field('post_description'); ?></div>
              <?php the_post_thumbnail('',array('class'=>'box-content__picture-img')); ?>
            </div>

            <?php if (get_field('show_post')) { ?>
            <a class="gathering-status status-not-done" href="<?= the_permalink($Post); ?>"> 
              <div class="gathering-status__wrapper"> 
                <div class="gathering-status__box"> 
                  <img class="gathering-status__box-picture" src="<?= get_the_post_thumbnail_url($Post) ?>" alt="post-img"> 
                  <div class="gathering-status__box-desc"> 
                    <?= get_the_title($Post) ?> 
                  </div> 
                </div> 
                <div class="gathering-status__readiness"> 
                  <div class="gathering-status__readiness-icon"></div> 
                  <div class="gathering-status__readiness-text"> 
                    <span class="done"><?php echo get_field('__raising_complete', 'options'); ?></span> 
                    <span class="not-done"><?php echo get_field('__collection_continues', 'options'); ?></span> 
                  </div> 
                </div> 
              </div> 
            </a>
            <?php }; ?>

            <div class="box-content__description">
              <?php
                the_content();
              ?>
            </div>
          </div>
          <div class="table-sound">
            <div class="table-sound__wrapper">
              <div class="table-sound__headers">
                <div class="table-sound__headers-item"><?php echo get_field('_data_table_line', 'options'); ?></div>
                <div class="table-sound__headers-item"><?php echo get_field('_name_table_line', 'options'); ?></div>
                <div class="table-sound__headers-item"><?php echo get_field('_quantity_table_line', 'options'); ?></div>
                <div class="table-sound__headers-item"><?php echo get_field('_cost_table_line', 'options'); ?></div>
                <div class="table-sound__headers-item"><?php echo get_field('_appointment_table_title', 'options'); ?></div>
              </div>

              <div id="table_sound_body" class="table-sound__body">
                
              </div>
            </div>
          </div>
          <div class="box-share">
            <div class="share-box">
              <div class="share-box__title"><?php echo get_field('_to_share', 'options'); ?></div>

              <?php echo do_shortcode('[DISPLAY_ULTIMATE_SOCIAL_ICONS]'); ?>
            </div>
            <img class="box-share__logo" src="<?= get_template_directory_uri() . '/assets/img/logo.svg' ?>" alt="logo" />
          </div>
          <hr />
          <div class="box-last">
            <div class="box-last__wrapper">
              <?php
              if ($query->have_posts()) {
                while ( $query->have_posts() ) : $query->the_post(); ?>
                  <a class="box-last__item" href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('', array( "loading" => "lazy", 'class' => 'box-last__picture', "alt" => "last__picture")); ?>  
                    
                    <div class="box-last__content">
                      <div class="box-last__content-date"><?= get_the_date(); ?> <?= the_time(); ?></div>
                      <h4 class="box-last__content-title">
                        <?php
                          $maxchar = 20;
                          $text = strip_tags( get_the_title() );
                          echo mb_substr( $text, 0, $maxchar );
                        ?>...
                      </h4>
                      <div class="box-last__content-link">Переглянути</div>
                    </div>
                  </a>
                <?php endwhile;
              } // завершение проверки, содержатся ли записи по запросу     
              // используем сброс данных записи, чтобы восстановить оригинальный запрос
              wp_reset_postdata();

              ?>
              
            </div>
          </div>
        </div>
      </div>
      <div class="sound-modal-container"></div>
    </section>

    <?php
      // проверяем есть ли данные в гибком содержании
      if( have_rows('table_vitrate_one', $Post->ID) ):
          // перебираем данные
          while ( have_rows('table_vitrate_one', $Post->ID) ) : the_row();
              if( get_row_layout() == 'table_text' ):
                ?>

                <script>
                  try {
                    tableData.push({
                      date: `<?php echo the_sub_field('date_table_value', $Post->ID); ?>`,
                      name: `<?php echo the_sub_field('table_name_value', $Post->ID); ?>`,
                      cost: `<?php echo the_sub_field('cost_table_value', $Post->ID); ?>`,
                      quantity: `<?php echo the_sub_field('cost_table_quantity_value', $Post->ID); ?>`,
                      image: `<?php echo the_sub_field('table_image', $Post->ID); ?>`,
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
        let tableContainer = document.querySelector("#table_sound_body");
        let table = document.querySelector(".table-sound");
        let reportTranslate = "<?= get_field('_report_button_translate', 'options'); ?>";
        let reportingTableRow = "<?= get_field('reporting_table_row'); ?>";

        if (reportingTableRow) {
          if (reportingTableRow !== "all") {
            let iterationNumber = reportingTableRow.split(",");

            for (let index = 0; index < iterationNumber.length; index++) {
              let num = Number(iterationNumber[index]);

              tableSoundTemplate({
                date: tableData[num - 1].date,
                name: tableData[num - 1].name,
                quantity: tableData[num - 1].quantity,
                cost: tableData[num - 1].cost,
                iterator: num - 1
              })
            }
          } else {
            tableData.forEach((tableObject, tableIterationIndex) => {

              tableSoundTemplate({
                date: tableObject.date,
                name: tableObject.name,
                quantity: tableObject.quantity,
                cost: tableObject.cost,
                iterator: tableIterationIndex
              })
            });
          }
        } else {
          table.style.display = "none";
        }
        
        
        function tableSoundTemplate(templateData) {

          tableContainer.innerHTML += `
            <div class="table-sound__line">
              <div class="table-sound__item table-report__item table-report__item-date">
                <span class="table-sound__item-date">
                  ${templateData.date}
                </span>
              </div>
              <div class="table-sound__item">
                <span class="table-sound__item-name"> ${templateData.name} </span>
              </div>
              <div class="table-sound__item">
                <span class="table-sound__item-counts"> ${templateData.quantity} </span>
              </div>
              <div class="table-sound__item">
                <span class="table-sound__item-price">
                  ${templateData.cost} UAH
                </span>
              </div>
              <div class="table-sound__item">
                <button class="btn open-sound-modal" iterator="${templateData.iterator}">
                  <span class="download">${reportTranslate}</span>
                </button>
              </div>
            </div>
          `;
        }

        const buttonOpenModal = document.querySelectorAll(".open-sound-modal");

        buttonOpenModal.forEach((button, index) => {
          button.addEventListener("click", ()=> {
            let iteerator = Number(button.getAttribute("iterator"))
            const soundModalContainer = document.querySelector(".sound-modal-container");

            soundModalContainer.innerHTML = `
              <div class="sound-modal">
                <div id="sound_modal_close" class="popub__close"></div>
                <img src="${tableData[iteerator].image}" alt="report" />
              </div>
            `;

            const soundModalClose = document.querySelector("#sound_modal_close");
            soundModalClose.addEventListener("click", ()=> {
              soundModalContainer.innerHTML = "";
            })
          })
        })
        
        

        const quantityPosts = 8; //!!!!!!
        let fundraisingAmount = '<?=  get_field('fundraising_amount', $Post->ID); ?>';
        let collectedFunds = '<?= get_field('collected_funds', $Post->ID); ?>';

        

        



        const gatheringStatus = document.querySelector(".gathering-status");

        if (toNumberAmount(collectedFunds) >= toNumberAmount(fundraisingAmount)) {
          gatheringStatus.classList.add("status-done")
          gatheringStatus.classList.remove("status-not-done")
        }
        
        function toNumberAmount(num) {
          let thisNumber = Number(num.split(" ").join(""))
          return thisNumber
        }
      }

    </script>

    <?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
<?php
get_footer();
