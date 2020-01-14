<?php get_header(); ?>
<div class="hdr-btm-bq">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hdr-breadcrumbs">
          <ul>           
            <li><a href="#">Home</a></li>
          </ul>
        </div>     
      </div>
    </div>
  </div>
</div>


<section class="pro-grd-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="pro-grd-sec-innr">
          <ul class="clearfix ulc">
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/pro-grd-img-001.png" alt="">
                </div>                
                <div class="pro-grd-des text-white">
                  <h2>Montageliften</h2>
                  <span>Til tot maar liefst 180kg.</span>                  
                </div> 
                <a href="#" class="overlay-link"> </a> 
              </div>
            </li>
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/pro-grd-img-002.png" alt="">
                </div>                
                <div class="pro-grd-des text-white">
                  <h2>KANAALLIFTEN</h2>
                  <span>Til tot maar liefst 500kg.</span>                  
                </div> 
                <a href="#" class="overlay-link"> </a> 
              </div>
            </li>
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/pro-grd-img-003.png" alt="">
                </div>                
                <div class="pro-grd-des text-white">
                  <h2>GLASLIFTEN</h2>
                  <span>Glas verplaatsen tot 400kg.</span>                  
                </div> 
                <a href="#" class="overlay-link"> </a> 
              </div>
            </li>
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/pro-grd-img-004.png" alt="">
                </div>                
                <div class="pro-grd-des text-white">
                  <h2>GLASROBOTS</h2>
                  <span>Veel soorten en prijsklasses.</span>                  
                </div> 
                <a href="#" class="overlay-link"> </a> 
              </div>
            </li>
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/pro-grd-img-005.png" alt="">
                </div>                
                <div class="pro-grd-des text-white">
                  <h2>GLASZUIGERS</h2>
                  <span>Hanteerd glas tot 1000kg.</span>                  
                </div> 
                <a href="#" class="overlay-link"> </a> 
              </div>
            </li>
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/pro-grd-img-006.png" alt="">
                </div>                
                <div class="pro-grd-des text-white">
                  <h2>GLASTRASNPORTERS</h2>
                  <span>Handig en degelijk.</span>                  
                </div> 
                <a href="#" class="overlay-link"> </a> 
              </div>
            </li>
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/pro-grd-img-007.png" alt="">
                </div>
                <div class="pro-grd-des text-white">
                  <h2>PLATENLIFTEN</h2>
                  <span>Hijs platen tot 5,1m hoogte.</span>                  
                </div> 
                <a href="#" class="overlay-link"> </a> 
              </div>
            </li>
            <li>
              <div class="pro-grd-main mHc">
                <div class="pro-grd-img">
                  <img src="<?php echo THEME_URI; ?>/assets/images/pro-grd-img-008.png" alt="">
                </div>                
                <div class="pro-grd-des text-white">
                  <h2>POWERTOOLS</h2>
                  <span>Ontdek de innovatieve powertools.</span>                  
                </div> 
                <a href="#" class="overlay-link"> </a> 
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>    
</section>

<?php 

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