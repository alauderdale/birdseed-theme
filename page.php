<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package boiler
 */

get_header(); ?>

<!-- used to style the header when there's no background image on the right -->
<?php get_template_part( 'content', 'header-inject' ); ?>


    <div id='main'>
      <section>
        <div class='container'>
          <div class='row text-center'>
            <div class='col-lg-12'>
              <h2 class='bold-font double-margin-bottom'>
                <?php the_title();?>
              </h2>
            </div>
          </div>
          <div class='row justify-content-center'>
            <div class='col-md-8'>
              <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content();?>
              <?php endwhile; // end of the loop. ?>
            </div>
          </div>
        </div>
      </section>
      <?php get_template_part( 'content', 'promo' ); ?>
    </div>
<?php get_footer(); ?>
