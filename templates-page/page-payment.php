<?php
/* Template Name: PagePayment*/

get_header(); ?>

<?php get_template_part('template-parts/sections/promo'); ?>

<?php get_template_part('template-parts/main-breadcrumbs'); ?>


<?php
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
      $url = "https://";   
  else  
      $url = "http://";   
  // Append the host(domain name, ip) to the URL.   
  $url.= $_SERVER['HTTP_HOST'];   
  
  // Append the requested resource location to the URL   
  $url.= $_SERVER['REQUEST_URI'];    
    
  function getUrlQuery($url, $key = null)
  {
    $parts = parse_url($url); 
    if (!empty($parts['query'])) {
      parse_str($parts['query'], $query); 
      if (is_null($key)) {
        return $query;
      } elseif (isset($query[$key])) {
        return $query[$key];
      }        
    }
  
    return false;
  };
  
  $postId = getUrlQuery($url, 'id');

  $post_id = get_field('post_before_recording');
  $args = array(
    'p'         => $postId,
    'post_type' => 'any'
  );
  $my_post = new WP_Query($args);
?> 

<script>
  const postId = '<?php echo $postId; ?>';
  const paymentParams = {}
  paymentParams.ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
  paymentParams.true_posts_all = '<?php echo serialize($my_post->query_vars); ?>';
  paymentParams.current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
</script>

<section class="payment" id="page_payment">
  
  <?php
    if (!$postId) {
      get_template_part('template-parts/payment-fragment');
    }
  ?>

</section>



<?php
get_footer();
?>