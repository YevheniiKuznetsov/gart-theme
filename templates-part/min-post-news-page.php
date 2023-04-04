<a class="box" href="<?= the_permalink(); ?>">
  <div class="box__inner">
    <div class="box__picture">
      <?php the_post_thumbnail('', array('class' => 'box__picture-img', "alt" => "post image")); ?>
    </div>
    <div class="box__content">
      <div class="box__content-data"><?= get_field('post_description'); ?></div>
      <?php the_title( "<h3 class='box__content-title'>", '</h3>' ); ?>
      <div class="btn">
        <span class="plus"><?php echo get_field('_n_read_more_button', 'options'); ?></span>
      </div>
    </div>
  </div>
</a>