<?php
/*
Template Name: Videos
 */
?>

<?php get_header(); ?>

<!-- used to style the header when there's no background image on the right -->
<?php get_template_part( 'content', 'header-inject' ); ?>


		<div id='main'>
			<section id='blog-index'>
				<div class='container'>
					<div class='row'>
						<div class='col-md'>
							<div class=' text-center'>
								<h1 class='double-margin-bottom bold-font'>
									<?php the_title();?>
								</h1>
							</div>
						</div>
					</div>
					<div class='row justify-content-center'>
						<div class='col-md-12'>
							<div class='card-columns'>
								<?php $videoLoop = new WP_Query( array('post_type' => 'videos') ); ?>
								<?php while ( $videoLoop->have_posts() ) : $videoLoop->the_post(); ?>
										<a class="video-thumb-container" href="<?php the_permalink();?>">
											<div class='video card elevation-2'>
												<?php if (has_post_thumbnail( $post->ID ) ): ?>
													<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
												<?php endif; ?>
												<div class='card-body'>
													<p class='text-color bold-font body-large'>
														<?php the_title();?>
													</p>
													<div class='text-left'>
														<button class='btn btn-link no-padding-left text-left' type='button' onclick'window.location.href="<?php the_permalink();?>">
															Watch now
														</button>
													</div>
												</div>
											</div>
										</a>
									<?php endwhile; // end of the loop. ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php get_template_part( 'content', 'promo' ); ?>
		</div>







<?php get_footer(); ?>