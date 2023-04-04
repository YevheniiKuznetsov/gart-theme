<aside class="aside-content">
  <?php 
    $args_sidebar_top_news = array(
      // 'cat' => 6,
      'post_type' => 'top-news',
      'orderby' => 'date',
      'order' => 'DESC',
      'posts_per_page' => 3,
    );

    $wp_query_sidebar_top_news = new WP_Query($args_sidebar_top_news);
  ?>
  <script>
    const sidebarNewsParams = {}
    sidebarNewsParams.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
    sidebarNewsParams.true_posts_all = '<?php echo serialize($wp_query_sidebar_top_news->query_vars); ?>';
    sidebarNewsParams.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
    sidebarNewsParams.action = "sidebar"
  </script>
  <div class="last-news">
    <h3 class="last-news__title"><?php echo get_field('_top_news_title', 'options'); ?></h3>

    <div id="main_sidebar_posts" class="last-news__wrapper">
      
    </div>
  </div>

  <div class="information-fund">
    <h3 class="information-fund__title"><?php echo get_field('_sidebar_gard_title', 'options'); ?></h3>

    <?php echo get_field('_sidebar_gard_block_text', 'options'); ?>
    

    <div class="contacts-fund">
      <h3 class="contacts-fund__title"><?php echo get_field('_contacts_sidebar_title', 'options'); ?></h3>
      <div class="fund-box">
        <div class="fund-box__item">
          <div class="fund-box__item">
            <img
              class="fund-box__item-icon"
              src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-ph-w.png' ?>"
              alt="box__item"
            />
            <a class="fund-box__item-link" href="tel:+380936242512"
              >+38 093 624 25 12</a
            >
          </div>
        </div>

        <div class="fund-box__item">
          <div class="fund-box__item">
            <img
              class="fund-box__item-icon"
              src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-ml-w.png' ?>"
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
              src="<?= get_template_directory_uri() . '/assets/img/icons/social/i-fb-w.png' ?>"
              alt="box__item"
            />
            <a class="fund-box__item-link" href="#"
              >People’s Project</a
            >
          </div>
        </div> -->
      </div>
    </div>

    <div class="document-box">
      <div class="document-box__wrapper">
        <img
          src="<?= get_template_directory_uri() . '/assets/img/document/img-1.jpg' ?>"
          alt="document"
          class="document-box__img"
        />
        <img
          src="<?= get_template_directory_uri() . '/assets/img/document/img-2.jpg' ?>"
          alt="document"
          class="document-box__img"
        />
        <img
          src="<?= get_template_directory_uri() . '/assets/img/document/img-3.jpg' ?>"
          alt="document"
          class="document-box__img"
        />
      </div>

      <!-- <a href="http://localhost/test-site/wp-content/themes/gard/assets/img/document.zip" class="btn" download> -->
      <a href="<?php echo get_template_directory_uri() . '/assets/img/document.zip' ?>" class="btn" rel="nofollow" download>
        <span class="download"><?php echo get_field('_download_files_button', 'options'); ?></span>
      </a>
    </div>

    <div class="partners-box">
      <div class="partners-box__title"><?php echo get_field('_partners_sidebar_item', 'options'); ?></div>

      <div class="partners-box__wrapper">
        <div class="partners-box__item">
          <img
            class="partners-box__item-logo"
            src="<?= get_template_directory_uri() . '/assets/img/partners/partners-logo-1.png' ?>"
            alt="terra"
          />
          <div class="partners-box__item-subtitle">
            Terra Incognita
          </div>
          <div class="partners-box__item-desc">
            <?php echo get_field('_travel_item_text', 'options'); ?>
          </div>
          <a
            class="partners-box__item-link"
            href="http://terraincognita.ua"
            rel="nofollow"
            >http://terraincognita.ua</a
          >
        </div>

        <div class="partners-box__item">
          <img
            class="partners-box__item-logo"
            src="<?= get_template_directory_uri() . '/assets/img/partners/partners-logo-2.png' ?>"
            alt="tasci"
          />
          <div class="partners-box__item-subtitle">Tactica</div>
          <div class="partners-box__item-desc">
            <?php echo get_field('_gun_sidebar_ietm', 'options'); ?>
          </div>
          <a
            class="partners-box__item-link"
            href="http://tactica.kiev.ua/"
            rel="nofollow"
            >http://tactica.kiev.ua</a
          >
        </div>

        <div class="partners-box__item">
          <img
            class="partners-box__item-logo"
            src="<?= get_template_directory_uri() . '/assets/img/partners/partners-logo-3.png' ?>"
            alt="tereo"
          />
          <div class="partners-box__item-subtitle">СТОПТЕРРОР</div>
          <div class="partners-box__item-desc">
            <?php echo get_field('_stop_terror_sidebar', 'options'); ?>
          </div>
          <a
            class="partners-box__item-link"
            href="http://stopterror.in.ua/"
            rel="nofollow"
            >http://stopterror.in.ua</a
          >
        </div>

        <div class="partners-box__item">
          <img
            class="partners-box__item-logo"
            src="<?= get_template_directory_uri() . '/assets/img/partners/partners-logo-4.png' ?>"
            alt="pro"
          />
          <div class="partners-box__item-subtitle">Prof 1 Group</div>
          <div class="partners-box__item-desc">
            <?php echo get_field('_guns_shop_text', 'options'); ?>
          </div>
          <a
            class="partners-box__item-link"
            href="http://prof1group.ua"
            rel="nofollow"
            >http://prof1group.ua</a
          >
        </div>

        <div class="partners-box__item">
          <img
            class="partners-box__item-logo"
            src="<?= get_template_directory_uri() . '/assets/img/partners/logoolympcompany.webp' ?>"
            alt="pro"
          />
          <div class="partners-box__item-subtitle">Olymp company</div>
          <div class="partners-box__item-desc">
            <?php echo get_field('_olymp_company_text', 'options'); ?>
          </div>
          <a
            class="partners-box__item-link"
            href="https://olymp-clothes.com"
            rel="nofollow"
            >https://olymp-clothes.com</a
          >
        </div>

        <div class="partners-box__item">
          <img
            class="partners-box__item-logo"
            src="<?= get_template_directory_uri() . '/assets/img/partners/custom-w.webp' ?>"
            alt="pro"
          />
          <div class="partners-box__item-subtitle">Custom wear</div>
          <div class="partners-box__item-desc">
            <?php echo get_field('_custom_wear_description', 'options'); ?>
          </div>
          <a
            class="partners-box__item-link"
            href="https://custom-wear.ua"
            rel="nofollow"
            >https://custom-wear.ua</a
          >
        </div>

        <div class="partners-box__item">
          <img
            class="partners-box__item-logo"
            src="<?= get_template_directory_uri() . '/assets/img/partners/vp.svg' ?>"
            alt="pro"
          />
          <div class="partners-box__item-subtitle">VENSTOP</div>
          <div class="partners-box__item-desc">
            <?php echo get_field('_venstop_description', 'options'); ?>
          </div>
          <a
            class="partners-box__item-link"
            href="https://venstop.pro/uk/web-design"
            rel="nofollow"
            >https://venstop.pro</a
          >
        </div>

        <div class="partners-box__item">
          <img
            class="partners-box__item-logo"
            src="<?= get_template_directory_uri() . '/assets/img/partners/chrva.png' ?>"
            alt="pro"
          />
          <div class="partners-box__item-subtitle">Черкаська районна військова адміністрація</div>
          <div class="partners-box__item-desc">
            <?php echo get_field('_crva_description', 'options'); ?>
          </div>
          <a
            class="partners-box__item-link"
            href="https://cherkassyrda.gov.ua"
            rel="nofollow"
            >https://cherkassyrda.gov.ua</a
          >
        </div>
      </div>
    </div>
  </div>
</aside>