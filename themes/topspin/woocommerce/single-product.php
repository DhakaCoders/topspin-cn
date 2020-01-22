<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); 
while ( have_posts() ) : the_post();
global $product;

$product_thumb = '';
$thumb_id = get_post_thumbnail_id($product->get_id());
if(!empty($thumb_id)){
    $product_thumb = cbv_get_image_tag($thumb_id, 'prodgrid');
}
do_action( 'woocommerce_before_single_product' );
?>
<section class="product-des-sec">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="product-des-controller">
          <div class="pro-des-head-blc clearfix">
            <div class="des-head-blc-lft">
              <i>
                <?php echo $product_thumb; ?>
              </i>                
              <h2><?php echo get_the_title(); ?></h2>
            </div>
            <div class="des-head-blc-mid">
              <span>Bruto prijs:</span>
              <strong><?php echo $product->get_price_html(); ?>,-</strong>
            </div>
            <div class="des-head-blc-rgt">
            	<?php wc_get_template_part( 'single-product/add-to-cart/simple'); ?>
            </div>
          </div>
          <div class="product-single-des psingle-pagebuilder">
            <?php the_content(); ?>
          </div>
        </div>                          
      </div>
    </div>
  </div>
</section>
<?php do_action( 'woocommerce_after_single_product' ); ?>
<?php endwhile; ?>
<!-- gap -->
<div style="height: 55px"></div>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
