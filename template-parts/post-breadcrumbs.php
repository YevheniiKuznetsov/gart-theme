<div class="breadcrumbs-container">
  <div class="container">
    <div
      class="breadcrumbs"
      itemscope=""
      itemtype="http://schema.org/BreadcrumbList"
    >
      <span
        itemprop="itemListElement"
        itemscope=""
        itemtype="http://schema.org/ListItem"
        ><a
          class="breadcrumbs__link"
          href="<?php echo get_home_url(); ?>"
          itemprop="item"
          ><img
            src="<?= get_template_directory_uri() . '/assets/img/home-icon.svg' ?>"
            alt="icon" /></a
        ><meta itemprop="position" content="1" /></span
      ><span class="breadcrumbs__separator"> / </span
      >
      <span class='breadcrumbs__current'>
        <?php
          $maxchar_breadcrumbs = 20;
          $text_breadcrumbs = strip_tags( get_the_title() );
          echo mb_substr( $text_breadcrumbs, 0, $maxchar_breadcrumbs );
        ?>...
      </span>
      
    </div>
  </div>
</div>