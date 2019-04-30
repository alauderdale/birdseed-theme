<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>
<!-- used to style the header when there's no background image on the right -->
<?php get_template_part( 'content', 'header-inject' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
	<div id='main'>
		<section>
			<div class='container'>
				<div class='row'>
					<div class='col-md-2'></div>
					<div class='col-md-8 blog-styles'>
						<div class="embed-responsive embed-responsive-16by9">
					
						<?php the_field('embed_code');?>
						</div>
						<h2 class='double-margin-bottom bold-font'>
							<?php the_title();?>
						</h2>
						<?php the_content();?>
					</div>
					<div class='col-md-2'></div>
				</div>
			</div>
		</section>
		<?php get_template_part( 'content', 'promo' ); ?>
	</div>
<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>