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

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/bower_components/node_modules/bootstrap/dist/js/bootstrap.min.js">
  </script>

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
      <div class="try-it-out d-none d-lg-inline"></div>
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
        <a class='btn btn-outline-light btn-lg  double-margin-top' href='<?php // the_field('get_started_page', 'option'); ?>''>
          Get started
        </a>
        <div class='nav-item margin-top'>
          <a class='nav-link' href='<?php // the_field('sign_in_url', 'option'); ?>'>
            <small>
                <small>
                  Sign in
                </small>
            </small>
          </a>
        </div>
      </div>
    </div>
    <nav class='navbar fixed-top navbar-expand-sm navbar-page-top' id='primary-nav'>
      <div class='container-fluid'>
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



