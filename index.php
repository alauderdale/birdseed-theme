<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package boiler
 */

get_header(); ?>
<!-- used to style the header when there's no background image on the right -->
<?php get_template_part( 'content', 'header-inject' ); ?>


		<div id='main'>
			<section id='blog-index'>
				<div class='container'>
					<div class='row'>
						<div class='col-md'>
							<div class='double-padding-bottom text-center'>
								<h1 class='double-margin-bottom bold-font'>
									BirdSpeak
								</h1>
								<p class='body-large light-text-color'>
									Collection of articles, videos, and resources made by BirdSeed.
								</p>
							</div>
						</div>
					</div>
					<div class='row justify-content-center'>
						<div class='col-md-12'>
							<div class='card-columns'>
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<a class="blog-thumb-container" href="<?php the_permalink();?>">
											<div class='blog-thumb card elevation-2'>
												<?php if( get_field('banner_image') ): ?>
													<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
												<?php endif; ?>
												<div class='card-body'>
													<h5 class='text-color'>
														<?php the_title();?>
													</h5>
													<?php the_excerpt();?>
													<div class='text-left'>
														<button class='btn btn-link no-padding-left text-left' type='button' onclick'window.location.href="<?php the_permalink();?>">
															Read more
														</button>
													</div>
												</div>
											</div>
										</a>
									<?php endwhile; // end of the loop. ?>
							</div>
								<div class="navigation default-pagination margin-top">
									<?php
										global $wp_query;

										$big = 999999999; // need an unlikely integer

										echo paginate_links( array(
											'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
											'format' => '?paged=%#%',
											'prev_text'          => __('«'),
											'next_text'          => __('»'),
											'current' => max( 1, get_query_var('paged') ),
											'total' => $wp_query->max_num_pages
										) );
									?>
	 							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</section>
		<?php get_template_part( 'content', 'promo' ); ?>
		</div>







<?php get_footer(); ?>