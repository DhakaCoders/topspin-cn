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

<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="header-top clearfix">
          <div class="header-left">
            <div class="header-logo">
              <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/logo.jpg"></a>
            </div>
          </div>
          <div class="header-right clearfix">
            <div class="hide-md">
              <div class="hdr-rgt-addr text-right">
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-mail-icon.jpg" alt="">info@topspininternational.nl</a>
                <a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-cell-icon.jpg" alt="">0599 648 999</a>
              </div>
              <div class="hdr-main-menu-controlar clearfix">         
                <nav class="main-nav text-right">
                  <ul class="clearfix ulc">   
                    <li><a href="#">home</a></li>
                    <li class="menu-item-has-children">
                      <a href="#">producten</a>
                      <ul class="sub-menu ulc">
                        <li><a href="#">Sub menu item</a></li>
                        <li><a href="#">Sub menu item</a></li>
                        <li><a href="#">Sub menu item</a></li>
                        <li><a href="#">Sub menu item</a></li>
                        <li><a href="#">Sub menu item</a></li>
                      </ul>
                    </li>
                    <li><a href="#">service & parts</a></li>
                    <li><a href="#">over ons</a></li>
                    <li><a href="#">levering</a></li>
                    <li><a href="#">uw offerte <span class="notification-cls">2</span></a></li>
                    <li><a href="#">contact</a></li>
                  </ul>
                </nav>                  
              </div>              
            </div>
            <div class="hdr-rgt-md-addr show-md">
              <ul class="ulc clearfix">
                <li><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-md-home-icon.png" alt=""></a></li>
                <li><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-md-mail-icon.png" alt=""></a></li>
                <li><a href="#"><img src="<?php echo THEME_URI; ?>/assets/images/hdr-md-phn-icon.png" alt=""></a></li>
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
                <ul class="clearfix">
                  <li><a href="#">home</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Producten</a>
                    <ul class="sub-menu ulc">
                      <li><a href="#">kanaalliften</a></li>
                      <li><a href="#">glasliften</a></li>
                      <li><a href="#">glasrobots</a></li>
                      <li><a href="#">glaszuigers</a></li>
                      <li><a href="#">glasliften</a></li>
                      <li><a href="#">glastransporters</a></li>
                    </ul>
                  </li>
                  <li><a href="#">SERVICE & PARTS</a></li>
                  <li><a href="#">Over ons</a></li>
                  <li><a href="#">lEVERING</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Offerte lijst <span class="notification-cls">2</span></a></li>
                </ul>
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
          <ul class="clearfix ulc">   
            <li><a href="#">Montageliften</a></li>
            <li><a href="#">Kanaalliften </a></li>
            <li><a href="#">Glasliften</a></li>
            <li><a href="#">Glasrobots</a></li>
            <li><a href="#">Glaszuigers</a></li>
            <li><a href="#">Glastransporters</a></li>
          </ul>                    
        </div>
      </div>
    </div>
  </div>
</header>