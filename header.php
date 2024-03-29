<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>






  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <title><?php wp_title(); ?></title>
  <meta name="description" content="<?php the_field('meta_description', 'option'); ?>">


  <link id="favicon" rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/png" sizes="16x16 32x32 48x48">

  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/bower_components/node_modules/bootstrap/dist/js/bootstrap.min.js">
  </script>

  <meta property="og:title" content="<?php wp_title( '|', true, 'right' ); ?>">
  <meta property="og:description" content="<?php the_field('meta_description', 'option'); ?>">
  <meta property="og:image" content="<?php the_field('preview_image', 'option'); ?>">
  <meta name="twitter:image" content="<?php the_field('preview_image', 'option'); ?>">
  <?php wp_head(); ?>

</head>

<body class='styles styles_index'>
  <style>
    <?php the_field('custom_css', 'option'); ?>
  </style>
    <div class="birdseed-button-container">
      <div class="birdseed-button">
        <img src="<?php bloginfo('template_url'); ?>/images/birdseed-button.svg" width="62px">
      </div>
<!--       <div class="try-it-out d-none d-lg-inline"></div> -->
    </div>  
    <div class='mobile-menu d-lg-none'>
      <div class='navbar-nav mx-auto'>
        <?php    
          $defaults = array(
          'theme_location' => 'menu-mobile',
          'container'       => false,  
          'echo'            => false,
          'fallback_cb'     => false,
          'before'       => '<div class="nav-item">',
          'after'        => '</div>',
          'items_wrap'      => '%3$s',
          'depth'           => 0
          );
          echo strip_tags(wp_nav_menu( $defaults ), '<div><div><a>');
        ?>
        <a class='btn btn-outline-light btn-lg  double-margin-top' href='<?php the_field('header_primary_button_page_link', 'option'); ?>''>
          <?php the_field('header_primary_button_text', 'option'); ?>
        </a>
        <div class='nav-item margin-top'>
          <a class='nav-link' href='<?php the_field('header_sign_in_button_url', 'option'); ?>'>
            <small>
                <small>
                  Sign in
                </small>
            </small>
          </a>
        </div>
      </div>
    </div>
    <nav class='navbar d-block fixed-top navbar-expand-sm navbar-page-top promo-alert-active' id='primary-nav'>
<!--       <div class='alert alert-promo alert-dismissible fade show' role='alert'>
        <div class='text-center'>
          <div class='align-middle'>
            <div class='inline align-middle'>
              <strong>
                Black Friday Sale
              </strong>
              Get BirdSeed PRO for
              <strong>
                $99/year
              </strong>
              for life
            </div>
            <div class='inline align-middle'>
              <a class='btn-primary btn' href='https://birdseed.io/pricing/#pricing-section' style='min-width:auto;'>
                Learn more
              </a>
            </div>
          </div>
          <button aria-label='Close' class='close' data-dismiss='alert' type='button'>
            <span aria-hidden='true'>
              ×
            </span>
          </button>
        </div>
      </div> -->

      <div class='container'>
        <a class='navbar-brand' href='<?php bloginfo('url')?>'>
          <img src='<?php the_field('logo', 'option'); ?>' width='190px'>
        </a>
        <div class='d-none d-lg-inline mr-auto'>
          <div class='navbar-nav'>
            <div class='nav-item dropdown nav-item-primary'>
              <a class='nav-link' data-toggle='dropdown' href='#' role='button'>
                Tour
                <i class='material-icons'>
                  keyboard_arrow_down
                </i>
              </a>
              <div class='dropdown-menu'>
                <?php    
                  $primaryMenuDefaults = array(
                  'theme_location' => 'menu-tour',
                  'container'       => false, 
                  'container_class' => 'dropdown-item', 
                  'echo'            => false,
                  'fallback_cb'     => false,
                  'before'       => '',
                  'after'        => '',
                  'items_wrap'      => '%3$s',
                  'depth'           => 0
                  );
                  echo strip_tags(wp_nav_menu( $primaryMenuDefaults ), '<div><div><a>');
                ?>
              </div>
            </div>
            <div class='nav-item dropdown nav-item-primary'>
              <a class='nav-link' data-toggle='dropdown' href='#' role='button'>
                About
                <i class='material-icons'>
                  keyboard_arrow_down
                </i>
              </a>
              <div class='dropdown-menu'>
                <?php    
                  $primaryMenuDefaults = array(
                  'theme_location' => 'menu-about',
                  'container'       => false, 
                  'container_class' => 'dropdown-item', 
                  'echo'            => false,
                  'fallback_cb'     => false,
                  'before'       => '',
                  'after'        => '',
                  'items_wrap'      => '%3$s',
                  'depth'           => 0
                  );
                  echo strip_tags(wp_nav_menu( $primaryMenuDefaults ), '<div><div><a>');
                ?>
              </div>
            </div>
            <div class='nav-item dropdown nav-item-primary'>
              <a class='nav-link' data-toggle='dropdown' href='#' role='button'>
                Resources
                <i class='material-icons'>
                  keyboard_arrow_down
                </i>
              </a>
              <div class='dropdown-menu'>
                <?php    
                  $primaryMenuDefaults = array(
                  'theme_location' => 'menu-resources',
                  'container'       => false, 
                  'container_class' => 'dropdown-item', 
                  'echo'            => false,
                  'fallback_cb'     => false,
                  'before'       => '',
                  'after'        => '',
                  'items_wrap'      => '%3$s',
                  'depth'           => 0
                  );
                  echo strip_tags(wp_nav_menu( $primaryMenuDefaults ), '<div><div><a>');
                ?>
              </div>
            </div>
            <div class='nav-item dropdown nav-item-primary'>
              <a class='nav-link' data-toggle='dropdown' href='#' role='button'>
                Industries
                <i class='material-icons'>
                  keyboard_arrow_down
                </i>
              </a>
              <div class='dropdown-menu two-col-dropdown'>
                <?php    
                  $primaryMenuDefaults = array(
                  'theme_location' => 'menu-industries',
                  'container'       => false, 
                  'container_class' => 'dropdown-item', 
                  'echo'            => false,
                  'fallback_cb'     => false,
                  'before'       => '',
                  'after'        => '',
                  'items_wrap'      => '%3$s',
                  'depth'           => 0
                  );
                  echo strip_tags(wp_nav_menu( $primaryMenuDefaults ), '<div><div><a>');
                ?>
                  <div class="row">
                    <div class="col-6">
                      <a class="dropdown-item" href="https://birdseed.io/industries/real-estate/">
                        <img src="https://birdseed.io/wp-content/uploads/2021/07/Real-estate.svg" width="40px">
                        Real estate
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/e-commerce/">
                        <img src="https://birdseed.io/wp-content/uploads/2021/07/E-commerece.svg" width="40px">
                        E-commerece
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/law-firm/">
                        <img src="https://birdseed.io/wp-content/uploads/2021/07/Law-firms.svg" width="40px">
                        Law firms
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/church/">
                        <img src="https://birdseed.io/wp-content/uploads/2021/07/Churches.svg" width="40px">
                        Churches
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/home-services/">
                        <img src="https://birdseed.io/wp-content/uploads/2021/07/Home-services.svg" width="40px">
                        Home services
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/automotive/">
                        <img src="https://birdseed.io/wp-content/uploads/2021/07/Car-dealerships.svg" width="40px">
                        Car dealerships
                      </a>
                    </div>
                    <div class="col-6">
                      <a class="dropdown-item" href="https://birdseed.io/industries/digital-services/">
                        <img src="https://birdseed.io/wp-content/uploads/2021/09/Digital-services-img.svg" width="40px">
                        Digital services
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/restaurants">
                        <img src="https://birdseed.io/wp-content/uploads/2021/09/Restaurants-img.svg" width="40px">
                        Restaurants
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/education">
                        <img src="https://birdseed.io/wp-content/uploads/2021/09/Education-img.svg" width="40px">
                        Education
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/home-construction">
                        <img src="https://birdseed.io/wp-content/uploads/2021/09/Home-construction-img.svg" width="40px">
                        Home construction
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/travel-agents">
                        <img src="https://birdseed.io/wp-content/uploads/2021/09/Travel-agents-img.svg" width="40px">
                        Travel agents
                      </a>
                      <a class="dropdown-item" href="https://birdseed.io/industries/self-storage">
                        <img src="https://birdseed.io/wp-content/uploads/2021/09/Self-storage-img.svg" width="40px">
                        Self storage
                      </a>
                    </div>
                  </div>
                
              </div>
            </div>

            <?php    
              $defaults = array(
              'theme_location' => 'menu-header',
              'container'       => false,  
              'echo'            => false,
              'fallback_cb'     => false,
              'before'       => '<div class="nav-item nav-item-primary">',
              'after'        => '</div>',
              'items_wrap'      => '%3$s',
              'depth'           => 0
              );
              echo strip_tags(wp_nav_menu( $defaults ), '<div><div><a>');
            ?>
          </div>
        </div>
        <button class='tcon tcon-menu--xcross menu-button d-lg-none toggle-menu-button' type='button'>
          <span aria-hidden='true' class='tcon-menu__lines'></span>
          <span class='tcon-visuallyhidden'>
            toggle menu
          </span>
        </button>
        <div class='d-none d-lg-inline ml-auto'>
          <div class='navbar-nav'>
            <div class='nav-item'>
              <a class='nav-link sign-in' href='<?php the_field('header_sign_in_button_url', 'option'); ?>'>
                <?php the_field('header_sign_in_button_text', 'option'); ?>
              </a>
            </div>
          </div>
        </div>
        <div class='navbar-nav d-none d-lg-inline position-relative'>
          <div class='form-inline'>
            <a class='btn btn-primary btn-lg nav-link create-account-button' href='<?php the_field('header_primary_button_page_link', 'option'); ?>'>
              <?php the_field('header_primary_button_text', 'option'); ?>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <img class='hidden' src='<?php the_field('preview_image', 'option'); ?>' style='display:none;'>



