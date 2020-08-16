<?php
/*
Template Name: Resources
 */
?>

<?php get_header(); ?>





<!-- used to style the header when there's no background image on the right -->
<?php get_template_part( 'content', 'header-inject' ); ?>

<div id='main'>
	<section>
		<div class='container'>
			<div class='row justify-content-center double-padding-top' >
				<div class='col-8 text-center margin-bottom'>
					<h2 class='margin-bottom bold-font'>
						Resources
					</h2>
					<h5 class='body-large'>
						Check out our videos, in-depth Help articles and webinars or nay other lead text you’d like to put here!
					</h5>
				</div>
			</div>
		</div>
		<div class='container'>
			<div class='row' >
				<div class='col-12'>
							<!-- begin menu -->
							<ul class="nav justify-content-center double-padding-bottom category-nav">
							<li class="current-cat">
								<a href="<?php echo site_url('/resources'); ?>">
									All
								</a>
							</li>
					        <?php wp_nav_menu( array( 
							'theme_location' => 'menu-resource-cats',  
							'menu_class' => '',
							'container' => false,
							'items_wrap'  => '%3$s' 
							)); ?>
						    <?php wp_reset_postdata(); ?>
							</ul>
							<!-- end menu -->
				</div>
			</div>


					<div class='row justify-content-center'>
						<div class='col-md-12'>
							<div class='card-columns'>
								<?php if (have_posts()) : ?>
									<?php while (have_posts()) : the_post(); ?>
										<a class="blog-thumb-container" href="<?php the_permalink();?>">
											<div class='blog-thumb card elevation-2'>
												<?php if (has_post_thumbnail( $post->ID ) ): ?>
													<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
												<?php endif; ?>
												<div class='card-body'>
													<h5 class='text-color'>
														<?php the_title();?>
													</h5>
													<p class="body-small half-margin-bottom">
														
														 <?php the_date();?>
														
														|
														
															<?php
																$category = get_the_category(); 
																echo $category[0]->cat_name;
															?>
														
													</p>
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
	</div>
</section>


<?php get_template_part( 'content', 'promo' ); ?>


</div>




<?php get_footer(); ?>