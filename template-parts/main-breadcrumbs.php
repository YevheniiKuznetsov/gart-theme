<div class="breadcrumbs-container">
  <div class="container">
    <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
  </div>
</div>

<script>
  const direcoryUri = '<?php echo get_template_directory_uri() ?>';
  const breadcrumbsLinks = document.querySelectorAll(".breadcrumbs__link");
  var img = document.createElement('img');
  img.src = `${direcoryUri}/assets/img/home-icon.svg`;
  img.alt = "icon";

  breadcrumbsLinks.forEach((item)=>{
    if (item.textContent === "Home") {
       item.innerHTML = ""
       item.appendChild(img)
    }
  })
</script>