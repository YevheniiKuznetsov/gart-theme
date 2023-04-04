
<a href="<?= the_permalink(); ?>" class="news-project__link">
  <div class="box">
    <div class="box__picture">        
      <?php the_post_thumbnail('', array('class' => 'box__picture-img', "alt" => "post image")); ?>
    </div>

    <div class="box__content">
      <div class="box__content-info">
        <div class="box__info-target">
          <img src="<?= get_template_directory_uri() . '/assets/img/icons/news-icon-1.svg' ?>" alt="icon" />
          <span><?= get_field('post_description'); ?></span>
        </div>
        <div class="box__info-date">
          <img src="<?= get_template_directory_uri() . '/assets/img/icons/news-i-time-1.svg' ?>" alt="icon" />
          <span><?= get_the_date(); ?> <?= the_time(); ?></span>
        </div>
      </div>
      <div class="box__content-text">
        <!-- <?php the_title( "<h5 class='box__text-title'>", '</h5>' ); ?> -->
        <h5 class="box__text-title">
          <?php
            $maxchar_title = 150;
            $text_title = strip_tags( get_the_title() );
            echo mb_substr( $text_title, 0, $maxchar_title );
          ?>
        </h5>
        <div class="box__text-desc">
          <?php
            $maxchar = 100;
            $text = strip_tags( get_the_content() );
            echo mb_substr( $text, 0, $maxchar );
          ?>...
        </div>
      </div>
      <?php 
        if (get_field('all_amount') && get_field('get_amount')) :
      ?>
      <div class="box__content-objective">
        <div class="box__objective-end">
          <span><?=  get_field('all_amount'); ?> <?php echo get_field('currency_uah', 'options'); ?></span>
          <?php echo get_field('_amount_required', 'options'); ?>
        </div>

        <div class="box__objective-now">
          <span class="get_amount_post"></span>
          <?php echo get_field('_chosen', 'options'); ?>
        </div>
      </div>

      <?php endif; ?>
    </div>
  </div>
  <script>
    {
      let allAmount = '<?=  get_field('all_amount'); ?>';
      let fundraisingAmount = '<?=  get_field('get_amount'); ?>';
      

      if (allAmount && fundraisingAmount) {

        const elements = document.querySelectorAll(".get_amount_post");
      
        elements.forEach((element)=> {
          if (!element.innerText) {
            let percentAmount = `${Math.floor(toNumberAmount(fundraisingAmount) * 100 / toNumberAmount(allAmount))}%`;
            element.innerHTML = percentAmount;
          }
          
          function toNumberAmount(num) {
            let thisNumber = Number(num.split(" ").join(""))
            return thisNumber
          }
        })
      }
    }
  </script>
</a>