<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?> 
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->  
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
  $logoObj = get_field('logo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $spacialArry = array(".", "/", "+", "-", " ", ")", "(");$replaceArray = '';
  $email = get_field('email_address', 'options');
  $telefoon = get_field('telephone', 'options');
  $hdphone = $telefoon['telephone_header'];
  $trimphone = trim(str_replace($spacialArry, $replaceArray, $hdphone));

  $cart_item_count = WC()->cart->get_cart_contents_count();
  $cart_count_span = '';
  if ( $cart_item_count ) {
    echo '<span id="cart-count" data-count="'.$cart_item_count.'"></span>';
  }
?>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="header-top clearfix">
          <div class="header-left">
            <div class="header-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
              </a>
            </div>
          </div>
          <div class="header-right clearfix">
            <div class="hide-md">
              <div class="hdr-rgt-addr text-right">
                <?php if(!empty($email)): ?>
                <a href="mailto:<?php echo $email; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-mail-icon.jpg" alt=""><?php echo $email; ?></a>
                <?php endif; if(!empty($hdphone)): ?>
                <a href="tel:<?php echo $trimphone; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-cell-icon.jpg" alt=""><?php echo $hdphone; ?></a>
                <?php endif; ?>
              </div>
              <div class="hdr-main-menu-controlar clearfix">         
                <nav class="main-nav text-right">
                  <?php 
                    $cmenuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix ulc',
                        'container' => 'cmnav',
                        'container_class' => 'cmainnav'
                      );
                    wp_nav_menu( $cmenuOptions ); 
                  ?>
                </nav>                  
              </div>              
            </div>
            <div class="hdr-rgt-md-addr show-md">
              <ul class="ulc clearfix">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-md-home-icon.png" alt=""></a></li>
                <?php if(!empty($email)): ?>
                <li><a href="mailto:<?php echo $email; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-md-mail-icon.png" alt=""></a></li>
                <?php endif; if(!empty($hdphone)): ?>
                <li><a href="tel:<?php echo $trimphone; ?>"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-md-phn-icon.png" alt=""></a></li>
                <?php endif; ?>
              </ul>
            </div>
            <div class="home-bnr-md-nav-bar-controller show-md">
              <div class="md-menu-btn-bar clearfix">
                <div class="md-menu-humberger-btn">
                  <span><img src="<?php echo THEME_URI; ?>/assets/images/humberger-icon.png" alt=""></span>
                  <strong>Menu</strong>
                </div>
              </div>
            </div>
            <div class="md-popup-main-menu-wrap ">
              <nav class="md-popup-main-nav clearfix">
                <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix',
                        'container' => 'mmnav',
                        'container_class' => 'mmainnav'
                      );
                    wp_nav_menu( $mmenuOptions ); 
                ?>
              </nav>
              <div class="md-menu-popup-close-btn">
                <span>X</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hdr-btm-links hide-md">
    <div class="container">
      <div class="row">
        <div class="col-12"> 
          <?php 
            $catmenuOptions = array( 
                'theme_location' => 'cbv_cat_menu', 
                'menu_class' => 'clearfix ulc',
                'container' => 'catmnav',
                'container_class' => 'catmainnav'
              );
            wp_nav_menu( $catmenuOptions ); 
          ?>                  
        </div>
      </div>
    </div>
  </div>
</header>
<div class="hdr-btm-bq">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="hdr-breadcrumbs">
          <?php cbv_custom_both_breadcrump(); ?>
        </div>     
      </div>
    </div>
  </div>
</div>