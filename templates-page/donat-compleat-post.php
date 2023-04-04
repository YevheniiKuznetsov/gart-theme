<!-- <a class="news-global__box" href="<?= the_permalink(); ?>">
  <?php the_post_thumbnail('', array( "loading" => "lazy", 'class' => 'news-global__box-img', "alt" => "post image")); ?>
  <h3 class="news-global__box-title" >
  <?php
    $maxchar = 60;
    $text = strip_tags( get_the_title() );
    echo mb_substr( $text, 0, $maxchar );
  ?>...
  </h3>
</a> -->
<a class="last-gathering__box" href="<?= the_permalink(); ?>">
  <div class="last-gathering__picture">
    <?php the_post_thumbnail('', array( "loading" => "lazy", 'class' => 'last-gathering__picture-img', "alt" => "promo-last-gethering")); ?>
    
    <div class="last-gathering__picture-status"><?php echo get_field('_p_collected', 'options'); ?></div>
  </div>
  <div class="last-gathering__content">
   <div class='last-gathering__content-title'>
    <?php
        $maxchar = 60;
        $text = strip_tags( get_the_title() );
        echo mb_substr( $text, 0, $maxchar );
      ?>
   </div>
    
    <p class="last-gathering__content-desc">
      <?php
        $maxchar = 50;
        $text = strip_tags( get_the_content() );
        echo mb_substr( $text, 0, $maxchar );
      ?>...
    </p>
    <div class="last-gathering__content-btn">
      <span><?php echo get_field('_p_more_button', 'options'); ?></span>
    </div>
  </div>
</a>