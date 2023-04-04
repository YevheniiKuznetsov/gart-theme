<a class="news-box" href="<?= the_permalink(); ?>">
  <?php the_post_thumbnail('', array('class' => 'news-box__img', "alt" => "post image")); ?>
  <div class="news-box__content">
    <?php the_title( "<div class='news-box__content-desc'>", '</div>' ); ?>
    <div class="news-box__content-date"><?= get_the_date(); ?> <?= the_time(); ?></div>
  </div>
</a>