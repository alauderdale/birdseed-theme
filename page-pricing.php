<?php
/*
Template Name: Pricing
 */
?>


<?php get_header(); ?>

<!-- used to style the header when there's no background image on the right -->
<?php get_template_part( 'content', 'header-inject' ); ?>

<div id='main'>
	<section class='home-hero pricing-hero'>
		<div class='container'>
			<div class='row' >
				<div class='col-12 text-center double-margin-bottom'>
					<h1 class='margin-bottom bold-font'>
						<?php the_field('title_text');?>
					</h1>
					<h5 class='body-large'>
						<?php the_field('lead_text');?>
					</h5>
				</div>
			</div>
			<div class="row justify-content-center padding-bottom padding-top">
				<div class='col-12 col-md-10'>
					<img class='margin-auto full-width hero-img' src="<?php the_field('hero_image');?>">
				</div>
			</div>
			<div class='row justify-content-center double-margin-top padding-bottom'>
				<div class='col-lg-4 col-xl-4 col-md-6 col-12'>
					<ul class='list-unstyled pricing-list bordered-list list-lg'>
						<?php if( have_rows('price_points') ): ?>
							<?php 
								while( have_rows('price_points') ): the_row(); 

								// vars
								$text = get_sub_field('text');
							?>
								<li>
									<p class='body-large'>
										<i class='material-icons primary-text-color'>
											check_circle
										</i>
										<?php echo $text; ?>
									</p>
								</li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
				<div class='col-lg-4 col-xl-4 col-md-6 col-12'>
					<ul class='list-unstyled pricing-list bordered-list list-lg'>
						<?php if( have_rows('price_points_2') ): ?>
							<?php 
								while( have_rows('price_points_2') ): the_row(); 

								// vars
								$text = get_sub_field('text');
							?>
								<li>
									<p class='body-large'>
										<i class='material-icons primary-text-color'>
											check_circle
										</i>
										<?php echo $text; ?>
									</p>
								</li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class='row justify-content-center double-margin-top text-center'>
				<div class="col">
					<a href="<?php the_field('create_account_link', 'option'); ?>" class="btn btn-primary btn-lg">
						Get started - 14 days totally free
					</a>
					<p class="half-margin-top no-margin-bottom">(No credit card required)</p>
				</div>
			</div>
			<div class='row justify-content-center double-margin-top text-center'>
				<div class="col-md-8">
					<div class="margin-bottom">
						<button class='btn btn-lg btn-light' data-src='<?php the_field('video_url');?>' data-target='#priceVideoModal' data-toggle='modal' type='button'>
						<img class="max-width" width="248px" src="<?php the_field('price_explain_img');?>"/>
						</button>
					</div>
					<div class="double-margin-top">
						<p class="body-small text-center regular-font-name">
							<span class="extra-bold-font">
								<?php the_field('how_is_it_free_title');?>
							</span>
							<?php the_field('how_is_it_free_text');?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class='off-white-bg-color'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<h2 class='text-center margin-bottom bold-font'>
						<?php the_field('panels_title');?>
					</h2>
					<h4 class='text-center body-large'>		
						<?php the_field('panels_lead');?>
					</h4>
				</div>
			</div>
			<div class="row justify-content-center margin-top">
				<div class="col-md-9 col-lg-6">
					<div class='card-deck pricing-card-deck'>
						<div class='card elevation-1'>
							<div class='card-body' style='border-color:<?php the_field('pro_color');?>'>
								<div class='account-options'>
									<div class='margin-bottom'>
										<?php if( have_rows('pro_points') ): ?>
											<ul class='list-unstyled pricing-list'>
												<?php 

												while( have_rows('pro_points') ): the_row(); 

									// vars
												$text = get_sub_field('point');
												$subtext = get_sub_field('subtext');
												$tooltip = get_sub_field('tooltip');
												$bold_class = get_sub_field('bold_class');
												$image = get_sub_field('image');

												?>
													<li>
														<div class="media">
															<img class="half-margin-right" src="<?php echo $image; ?>" width="92px">
															<div class="media-body">
																<p class="title">
																	<?php echo $text; ?>
																</p>
																<p class="subtext">
																	<?php echo $subtext; ?>
																</p>
															</div>
														</div>
													</li>
												<?php endwhile; ?>
											</ul>
										<?php endif; ?>
									</div>
								</div>
							</div>
							<div class='text-center card-footer no-styling'>
								<a class='btn btn-primary btn-block' href='<?php the_field('create_account_link', 'option'); ?>'>
									Get started free
								</a>
							</div>
						</div><!-- end card -->
					</div>
				</div>
			</div>

		</div>
	</section>
	<section class=''>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<h2 class='text-center margin-bottom bold-font'>
						<?php the_field('compare_title');?>
					</h2>
				</div>
				<div class='col-md-12'>
					<div class='text-center'>
						<img class='double-margin-top full-width' src="<?php the_field('compare_image');?>">
					</div>
				</div>
			</div>

		</div>
	</section>
</div>



<div aria-hidden='true' aria-labelledby='exampleModalLabel' class='modal fade video-modal' id='priceVideoModal' role='dialog' tabindex='-1'>
	<div class='modal-dialog' role='document'>
		<div class='modal-content'>
			<div class='modal-body'>
				<button aria-label='Close' class='close' data-dismiss='modal' type='button'>
					<span aria-hidden='true'>×</span>
				</button>
				<div class='embed-responsive embed-responsive-16by9'>
					<iframe allowscriptaccess='always' class='embed-responsive-item' id='video' src='<?php the_field('video_url');?>'></iframe>
				</div>
			</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>