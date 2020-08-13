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
				<div class='col-lg-4 col-xl-4 col-md-6 col-6'>
					<ul class='list-unstyled pricing-list list-lg'>
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
				<div class='col-lg-4 col-xl-4 col-md-6 col-6'>
					<ul class='list-unstyled pricing-list list-lg'>
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
						Get started — Free forever
					</a>
				</div>
			</div>
			<div class='row justify-content-center double-margin-top text-center'>
				<div class="col-md-8">
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
					<p class='text-center body-large'>		
						<?php the_field('panels_lead');?>
					</p>
				</div>
			</div>
			<div class="row justify-content-center margin-top">
				<div class="col-md-12 col-xl-9 col-lg-10">
					<div class='card-deck pricing-card-deck'>
						<div class='card elevation-1'>
							<div class='card-body' style='border-color:<?php the_field('plus_color');?>'>
								<div class="plan-img">
									<img width="127px" src="<?php the_field('plus_image');?>"/>
								</div>
								<div class='account-options'>
									<h3 class=' bold-font'>
										<?php the_field('plus_title');?>
									</h3>
									<h4>
										<span class='bold-font'>
											<?php the_field('plus_price_monthly');?>
										</span>
										<span style="font-size:.7em">
											/mo
										</span>
									</h4>
									<div class='margin-top double-margin-bottom'>
										<?php if( have_rows('plus_points') ): ?>
											<ul class='list-unstyled pricing-list'>
												<?php 

												while( have_rows('plus_points') ): the_row(); 

									// vars
												$text = get_sub_field('point');
												$tooltip = get_sub_field('tooltip');
												$bold_class = get_sub_field('bold_class');

												?>
													<li>
														<p>
															<i class='material-icons' style='color:<?php the_field('plus_color');?>'>
																check
															</i>
															<span class="<?php echo $bold_class; ?>">
																<?php echo $text; ?>
															</span >
															<?php if( $tooltip ): ?>
																<span class="tooltip-container" data-toggle="tooltip" title="<?php echo $tooltip; ?>" data-placement="right">
																	<i class='material-icons placeholder-text-color tooltip-icon'>
																		info
																	</i>
																</span>
															<?php endif; ?>
														</p>
													</li>
												<?php endwhile; ?>
												<li>
													<p>
														<i class='material-icons extra-light-text-color'>
															clear
														</i>
														<span class="extra-light-text-color">
															Instant Video Chat Responses
														</span>
													</p>
												</li>
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
						<div class='card elevation-1'>
							<div class='card-body' style='border-color:<?php the_field('pro_color');?>'>
								<div class="plan-img">
									<img width="127px" src="<?php the_field('pro_image');?>"/>
								</div>
								<div class='account-options'>
									<h3 class=' bold-font'>
										<?php the_field('pro_title');?>
									</h3>
									<h4>
										<span class='bold-font'>
											<?php the_field('pro_price_monthly');?>
										</span>
										<span style="font-size:.7em">
											/mo
										</span>
									</h4>
									<div class='margin-top double-margin-bottom'>
										<?php if( have_rows('pro_points') ): ?>
											<ul class='list-unstyled pricing-list'>
												<?php 

												while( have_rows('pro_points') ): the_row(); 

									// vars
												$text = get_sub_field('point');
												$tooltip = get_sub_field('tooltip');
												$bold_class = get_sub_field('bold_class');

												?>
													<li>
														<p>
															<i class='material-icons' style='color:<?php the_field('pro_color');?>;'>
																check
															</i>
															<span class="<?php echo $bold_class; ?>">
																<?php echo $text; ?>
															</span >
															<?php if( $tooltip ): ?>
																<span class="tooltip-container" data-toggle="tooltip" title="<?php echo $tooltip; ?>" data-placement="right">
																	<i class='material-icons placeholder-text-color tooltip-icon'>
																		info
																	</i>
																</span>
															<?php endif; ?>
														</p>
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


<?php get_footer(); ?>