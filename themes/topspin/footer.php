  <?php 
  $spacialArry = array(".", "/", "+", "-", " ", ")", "(");$replaceArray = '';
  $addres = get_field('address', 'options');
  $ftaddress = $addres['addressft'];
  $gmapsurl = $addres['google_maps'];
  $email = get_field('email_address', 'options');
  $conttitle = get_field('conttitle', 'options');
  $telefoon = get_field('telephone', 'options');
  $ftphone = $telefoon['telephone_footer'];
  $trimphone = trim(str_replace($spacialArry, $replaceArray, $ftphone));
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
?>
<footer class="footer-wrp">
  <div class="ftr-main-wrp">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-col-wrp clearfix text-white">
            <div class="ftr-col ftr-col-1">
              <?php 
               _e('<h4>ASSORTIMENT</h4> ', THEME_NAME);
                $catmenuOptions = array( 
                    'theme_location' => 'cbv_cat_menu', 
                    'menu_class' => 'ulc',
                    'container' => 'catmnav',
                    'container_class' => 'catmainnav'
                  );
                wp_nav_menu( $catmenuOptions ); 
              ?>  
            </div>
            <div class="ftr-col ftr-col-2"> 
              <?php 
               _e('<h4>OVER</h4> ', THEME_NAME);
                $ftmenuOptions1 = array( 
                    'theme_location' => 'cbv_ft_menu1', 
                    'menu_class' => 'ulc',
                    'container' => 'ftmnav1',
                    'container_class' => 'ftmainnav1'
                  );
                wp_nav_menu( $ftmenuOptions1 ); 
              ?> 
            </div>
            <div class="ftr-col ftr-col-3">
              <?php 
               _e('<h4>CARRIERE</h4> ', THEME_NAME);
                $ftmenuOptions2 = array( 
                    'theme_location' => 'cbv_ft_menu2', 
                    'menu_class' => 'ulc',
                    'container' => 'ftmnav2',
                    'container_class' => 'ftmainnav2'
                  );
                wp_nav_menu( $ftmenuOptions2 ); 
              ?> 
            </div>
            <div class="ftr-col ftr-col-4">
              <?php 
                _e('<h4>PRAKTISCH</h4> ', THEME_NAME);
                $ftmenuOptions3 = array( 
                    'theme_location' => 'cbv_ft_menu3', 
                    'menu_class' => 'ulc',
                    'container' => 'ftmnav3',
                    'container_class' => 'ftmainnav3'
                  );
                wp_nav_menu( $ftmenuOptions3 ); 
              ?> 
            </div>
            <div class="ftr-col ftr-col-5">
              <?php if(!empty($conttitle)) printf('<h4>%s</h4> ', $conttitle); ?>
              <ul class="ulc clearfix">
                <?php if( !empty( $ftphone ) ): ?>
                <li>
                  <span><img src="<?php echo THEME_URI; ?>/assets/images/ftr-phn-icon.png" alt="">telefoon algemeen</span>
                  <a href="tel:<?php echo $trimphone; ?>"><?php echo $ftphone; ?></a>
                </li>
              <?php endif; if( !empty( $ftaddress ) ):?>
                <li>
                  <span><img src="<?php echo THEME_URI; ?>/assets/images/ftr-locat-icon.png" alt="">LOCATIE</span>
                  <a href="<?php echo $gmaplink; ?>"><?php echo $ftaddress; ?></a>
                </li>
                <?php endif; if( !empty( $email ) ):?>
                <li>
                  <span><img src="<?php echo THEME_URI; ?>/assets/images/ftr-mail-icon.png" alt="">e-mail</span>
                  <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                </li> 
                <?php endif; ?>           
              </ul>              
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>
  <div class="ftr-btm-wrp hide-xs">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-btm-innr clearfix">
            <div class="ftr-btm-lft">
              <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
            </div>
            <div class="ftr-btm-rgt">
              <?php 
                $copymenuOptions = array( 
                    'theme_location' => 'cbv_copyright_menu', 
                    'menu_class' => 'ulc clearfix text-right',
                    'container' => 'copymnav',
                    'container_class' => 'copymainnav'
                  );
                wp_nav_menu( $copymenuOptions ); 
              ?> 
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div> 
  <div class="ftr-btm-wrp-xs show-xs">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="ftr-btm-innr-xs clearfix">
            <div class="ftr-btm-lft-xs">
              <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
            </div>
            <div class="ftr-btm-rgt-xs">
              <a href="#">
                <img src="<?php echo THEME_URI; ?>/assets/images/ftr-logo.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>   
  </div>    
</footer>
<?php wp_footer(); ?>
</body>
</html>