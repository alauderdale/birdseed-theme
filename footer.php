<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>


    <footer id='primary-footer'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-12'>
            <img class='half-margin-bottom' src='<?php the_field('footer_logo', 'option'); ?>' width='151px'>
            <hr>
          </div>
        </div>
        <div class='row margin-top'>
          <div class='col-md-8'>
            <div class='row'>
              <div class='col-md'>
                <p class='bold-font white-text-color'>
                  Contact us
                </p>
                <ul class='list-unstyled footer-list'>
                  <li>
                    <a href='mailto:<?php the_field('email', 'option'); ?>'>
                      <?php the_field('email', 'option'); ?>
                    </a>
                    <?php the_field('phone_number', 'option'); ?>
                  </li>
                </ul>
              </div>
              <div class='col-md'>
                <p class='bold-font white-text-color'>
                  Tour
                </p>
                <?php wp_nav_menu( array( 
                'theme_location' => 'menu-tour',  
                'menu_class' => 'list-unstyled footer-list',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
                )); ?>
              </div>
              <div class='col-md'>
                <p class='bold-font white-text-color'>
                  About
                </p>
                <?php wp_nav_menu( array( 
                'theme_location' => 'menu-about',  
                'menu_class' => 'list-unstyled footer-list',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
                )); ?>
              </div>
              <div class='col-md'>
                <p class='bold-font white-text-color'>
                  Legal
                </p>
                <?php wp_nav_menu( array( 
                'theme_location' => 'menu-legal',  
                'menu_class' => 'list-unstyled footer-list',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
                )); ?>
              </div>
            </div>
          </div>
          <div class='col-md-4'>
            <div class='row'>
              <div class='col-md'>
                <p class='body-large bold-font white-text-color'>
                  <?php the_field('footer_promo', 'option'); ?>
                </p>
                <ul class='list-inline social-list'>
                  <li class='list-inline-item social-font-name '>
                    <a href='<?php the_field('facebook_link', 'option'); ?>'>
                      f
                    </a>
                  </li>
                  <li class='list-inline-item social-font-name '>
                    <a href='<?php the_field('linkedin_link', 'option'); ?>'>
                      i
                    </a>
                  </li>
                  <li class='list-inline-item social-font-name '>
                    <a href='<?php the_field('twitter_link', 'option'); ?>'>
                      l
                    </a>
                  </li>
                  <li class='list-inline-item social-font-name '>
                    <a href='<?php the_field('youtube_link', 'option'); ?>'>
                      x
                    </a>
                  </li>
                  <li class='list-inline-item social-plus-font-name'>
                    <a href='<?php the_field('instagram_link', 'option'); ?>'>
                      i
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>




    <script src="<?php bloginfo('template_url'); ?>/js/lib/menu_button.js"></script>
    <script>
      transformicons.add('.tcon')
    </script>
    <?php wp_footer(); ?>
  </body>
</head>
</html>