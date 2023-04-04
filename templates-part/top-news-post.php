<a class="news-global__box" href="<?= the_permalink(); ?>">
  <?php the_post_thumbnail('', array( "loading" => "lazy", 'class' => 'news-global__box-img', "alt" => "post image")); ?>
  <h3 class="news-global__box-title" >
  <?php
    $maxchar = 60;
    $text = strip_tags( get_the_title() );
    echo mb_substr( $text, 0, $maxchar );
  ?>...
  </h3>
</a>
