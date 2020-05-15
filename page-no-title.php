<?php
/*
Template Name: No title
 */
?>
<?php get_header(); ?>
<!-- used to style the header when there's no background image on the right -->
<?php get_template_part( 'content', 'header-inject' ); ?>


    <div id='main'>
      <section>
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
