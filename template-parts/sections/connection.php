<section class="connection">
  <div class="container">
    <div class="connection__inner">
      <div class="connection-box">
        <div class="connection-box__item">
          <div class="connection-box__item-wrapper">
            <h2 class="connection-box__item-title">
              <?php echo get_field('_connection_inner_left_text', 'options'); ?>
            </h2>
			<a class="btn connection-box__item-btn" href="<?php echo get_page_link( 522 ); ?>">
              <span class="plus"><?php echo get_field('_home_button_propose_project', 'options'); ?></span>
            </a>
          </div>
        </div>
        <div class="connection-box__item">
          <div class="connection-box__item-wrapper">
            <h2 class="connection-box__item-title">
              <?php echo get_field('_connection_inner_right_text', 'options'); ?>
            </h2>
            <?php echo do_shortcode('[contact-form-7 id="316" title="Слідкувати за новинами"]'); ?>
            <!-- <?php echo do_shortcode('[contact-form-7 id="316" title="Підписка"]'); ?> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>