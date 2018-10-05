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
						<?php the_post_thumbnail('full', array('class' => 'max-width')); ?>
<!-- 						Commenting out title because currently most posts have it already -->
<!-- 						<h2 class='double-margin-bottom bold-font'>
							<?php the_title();?>
						</h2> -->
						<p class='margin-bottom double-margin-top'>
							Posted on
							<span class="bold-font">
								<?php the_time('F j, Y') ?>
							</span>
							in
							<span class="bold-font">
								<?php
									$category = get_the_category(); 
									echo $category[0]->cat_name;
								?>
							</span>
							
						</p>
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