<?php
/*
Template Name: Pricing deal 
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
	<div id="pricing-section"></div>
	</section>
	<section class='off-white-bg-color' id="pricing-section">
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<h2 class='text-center margin-bottom bold-font'>
						Grab Our Exclusive Black Friday Deal!
					</h2>
					<p class='text-center body-large'>		
						Instead of our regular $99/per month pricing for BirdSeed Pro, we’re offering a Black Friday deal for a limited time only.
					</p>
<!-- 					<div class="pricing-toggle-container padding-top padding-bottom">
						<div class="pricing-toggle text-center">
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-secondary monthly-toggle">
									<input type="radio" name="options" id="option1" checked> 	
										Bill monthly
								</label>
								<label class="btn btn-secondary active annual-toggle">
									<input type="radio" name="options" id="option3"> 
										Bill yearly
								</label>
							</div>
						</div>
						<div class="text-center">
							<img style="position:relative; left:30px; top:5px;" src="<?php bloginfo('template_url'); ?>/images/save.svg"/>	
						</div>
					</div> -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center padding-bottom">
						<?php echo do_shortcode("[sales_countdown_timer id='salescountdowntimer']"); ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center margin-top">
				<div class="col-md-12 col-xl-10 col-lg-12">
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
									<div class="annually shown">
										<h4>
											<span class='bold-font'>
												<?php the_field('plus_price_annual');?>
											</span>
											<span style="font-size:.7em">
												/ month
											</span>
										</h4>
										<p class="billed-yearly">
											Billed yearly
										</p>
									</div>
									<div class="monthly">
										<h4>
											<span class='bold-font'>
												<?php the_field('plus_price_monthly');?>
											</span>
											<span style="font-size:.7em">
												/ month
											</span>
										</h4>
									</div>
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
									Get started free *
								</a>
							</div>
						</div><!-- end card -->
						<div class='card elevation-1 discounted-card'>
							<div class='card-body'>
								<div class='account-options'>
									<h3 class=' bold-font'>
										<?php the_field('pro_title');?>
									</h3>
									<div class="annually shown">
										<h4 class="strikethrough">
											<span class='bold-font'>
												<?php the_field('pro_price_monthly');?>
											</span>
										</h4>
										<h4 class="inline">
											<span class='bold-font'>
												$8.25
											</span>
											<span style="font-size:.7em">
												/ month
											</span>
										</h4>
										<p class="billed-yearly">
											Billed yearly
										</p>
									</div>
									<div class="monthly">
										<h4>
											<span class='bold-font'>
												<?php the_field('pro_price_monthly');?>
											</span>
											<span style="font-size:.7em">
												/ month
											</span>
										</h4>
									</div>
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
								<h6 class="text-left margin-top">
									<?php the_field('promo_how_to');?>
								</h6>
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