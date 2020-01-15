<?php get_header(); 
$terms = get_terms( 'product_cat', 'orderby=count&hide_empty=0' );
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){ ?>
<section class="pro-grd-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="pro-grd-sec-innr">
          <ul class="clearfix ulc">
            <?php  
              foreach ( $terms as $term ) { 
              if ( isset($term->slug) && ($term->slug != 'uncategorized') ){ 
                $thumbnail_id = get_term_meta( $term->term_id, 'thumbnail_id', true ); 
                $cat_image = wp_get_attachment_image_src( $thumbnail_id, 'hcatgrid');
                $term_link = get_term_link( $term );
            ?>
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo $cat_image[0]; ?>" alt="<?php echo $term->name; ?>">
                </div>                
                <div class="pro-grd-des text-white">
                  <h2><?php echo $term->name; ?></h2>
                  <span><?php echo $term->description; ?></span>                  
                </div> 
                <a href="<?php echo esc_url( $term_link ); ?>" class="overlay-link"> </a> 
              </div>
            </li>
            <?php } } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php 
}
$hbgsection = get_field('hbgsection', HOMEID);
if($hbgsection):
  $fimgsrc = '';
    if(!empty($hbgsection['image'])) $fimgsrc = cbv_get_image_tag($hbgsection['image']);
?>
<section class="glassworker-sec-wrp">
  <div class="glassworker-sec-main">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="glassworker-sec-innr">
            <div class="glassworker-img">
              <?php echo $fimgsrc; ?>
            </div>
            <div class="glassworker-des text-white">
            <?php if( !empty( $hbgsection['content'] ) ) echo wpautop($hbgsection['content']); ?>      
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>      
</section>
<?php endif; ?>

<section class="frontpage pagebuilder">
  <?php 
    while(have_posts()): the_post();
    echo do_shortcode( get_the_content());
    endwhile;
  ?>  
</section>

<!-- gap -->
<div style="height: 55px"></div>
<?php get_footer(); ?>