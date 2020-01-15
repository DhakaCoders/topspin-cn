<?php 
get_header(); 
?>

<?php while(have_posts()): the_post(); 
if(is_cart() OR is_checkout() OR is_account_page() OR is_wc_endpoint_url( 'order-pay' ) OR is_wc_endpoint_url( 'order-received' ) OR is_wc_endpoint_url( 'view-order' ) OR is_wc_endpoint_url( 'edit-account' ) OR is_wc_endpoint_url( 'edit-address' ) OR is_wc_endpoint_url( 'lost-password' ) OR is_wc_endpoint_url( 'customer-logout' ) OR is_wc_endpoint_url( 'add-payment-method' )){
?>
<section class="main-content p-t-30">
  <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="main-content-inr">
            <?php 
              the_content();
            ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php }else{ ?>
<section class="frontpage pagebuilder">
  <?php 
    echo do_shortcode( get_the_content());
  ?>  
</section>
<?php } endwhile; get_footer(); ?>