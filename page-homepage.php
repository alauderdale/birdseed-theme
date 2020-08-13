<?php
/*
Template Name: Home
 */
?>

<?php get_header(); ?>


<script>
$(document).ready(function(){
  $(".tools-slider .carousel-item:nth-child(1)").addClass("active");
  $(".tools-slider .carousel-indicators .tool-section:nth-child(1)").addClass("active");
});
</script>

<script>
$(document).ready(function(){
  $("#howSlider .carousel-inner .carousel-item:first").addClass("active");
  $("#howSlider .carousel-indicators .how-indicator:first").addClass("active");
});
</script>



<!-- used to style the header when there's no background image on the right -->
<?php get_template_part( 'content', 'header-inject' ); ?>

<div id='main'>
	<section class='home-hero ' id='intro'>
		<div class='container-fluid'>
			<div class='row' >
				<div class='col-12 text-center margin-bottom'>
					<h1 class='margin-bottom bold-font'>
						<?php the_field('title_text');?>
					</h1>
					<h5 class='body-large'>
						<?php the_field('lead_text');?>
					</h5>
				</div>
			</div>
		</div>
		<div class='container'>
			<div class='row' >
					<div class='col-12 text-center'>
						<div class='double-margin-top home-hero-buttons'>
							<a class='btn btn-lg btn-primary margin-right' href='<?php the_field('primary_button_link');?>'>
								<?php the_field('primary_button_text');?>
							</a>
							<button class='btn btn-lg btn-light' data-src='<?php the_field('video_url');?>' data-target='#homeVideoModal' data-toggle='modal' type='button'>
								<i class='material-icons' style='font-size: 30px; top:9px; margin-top: -14px;'>
									play_circle_outline
								</i>
								<?php the_field('video_button_text');?>
							</button>
						</div>
					</div>
				</div>
				<div class='col-12'>
					<img class='margin-auto full-width hero-img' src='<?php the_field('hero_image');?>' >
				</div>
			</div>
		</div>
	</section>

	<section id='why' class='anchor off-white-bg-color'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<h2 class='text-center margin-bottom bold-font'>
						<?php the_field('why_title');?> 
					</h2>
					<div class='row justify-content-center'>
						<div class='col-lg-12'>
							<p class='text-center body-large'>
								<?php the_field('why_subtext');?>
							</p>
						</div>
					</div>
				</div>
				<div class='col-md-12'>
					<div class='text-center'>
						<img class='double-margin-top full-width' src='<?php the_field('overview_image');?>'>
					</div>
				</div>
			</div>

		</div>
	</section>


	<section class="anchor" id='tools'>
		<div class='container'>
			<div class='row justify-content-center'>
				<div class='col-lg-7'>
					<h2 class='text-center bold-font double-margin-bottom'>
						<?php the_field('tools_title');?>
					</h2>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col text-center d-none d-lg-block">
					<img class=" margin-auto max-width" src="<?php bloginfo('template_url'); ?>/images/connector-home.svg" style="margin-bottom:-60px;">
				</div>
			</div>
			
		</div>

<!-- start section -->

		<?php 
			if( have_rows('early_stage_buyers_section') ): 
			$i = -1
		?>
			<?php 
				while( have_rows('early_stage_buyers_section') ): the_row(); 
				// vars
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				$text = get_sub_field('text');
			?>
				<div class="tools-slider-wrapper">
					<div class='container'>
						<div class='row justify-content-between tools-slider carousel'  data-interval='60000' data-ride='carousel' id='earlyStageBuyersSlider'  >

								<div class='col-lg-5'>
									<img class="margin-bottom" src="<?php echo $icon; ?>">
									<h3 class="bold-font margin-bottom">
										<?php echo $title; ?>
									</h3>
									<p class="body-large">
										<?php echo $text; ?>
									</p>

									<div class="tool-controls double-margin-top carousel-indicators">
										<?php 

											while( have_rows('tools') ): the_row(); 

											// vars
											$icon = get_sub_field('icon');
											$title = get_sub_field('title');
											$text = get_sub_field('text');
											$color_hex = get_sub_field('color_hex');
											$i++;
										?>
											<div class="tool-section" data-slide-to='<?php echo $i ?>' data-target='#earlyStageBuyersSlider'>
												<div class="media">
													<img class="margin-right" src="<?php echo $icon; ?>">
													<div class="media-body">
														<p class="regular-font-name body-large bold-font tool-title" style="border-color:<?php echo $color_hex; ?>;">
															<?php echo $title; ?>
														</p>
														<p class="no-margin-bottom tool-description">
															<?php echo $text; ?>
														</p>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
								<div class='col-lg-6'>
									<div class="slides">
										<?php 
											while( have_rows('tools') ): the_row(); 
											// vars
											$image = get_sub_field('image');
										?>
											<div class="carousel-item">
												<div class='img-container'>
													<img class="full-width" src="<?php echo $image; ?>">
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>

						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

<!-- end section -->
		<div class="container">
			<div class="row">
				<div class="col text-center d-none d-lg-block">
					<img class=" margin-auto max-width" src="<?php bloginfo('template_url'); ?>/images/guide-1.svg">
				</div>
			</div>
			
		</div>

<!-- start section -->

		<?php 
			if( have_rows('establish_credibility_section') ): 
			$i = -1
		?>
			<?php 
				while( have_rows('establish_credibility_section') ): the_row(); 
				// vars
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				$text = get_sub_field('text');
			?>
				<div class="tools-slider-wrapper">
					<div class='container'>
						<div class='row justify-content-between tools-slider carousel'  data-interval='60000' data-ride='carousel' id='establishCredibilitySlider'  >

								<div class='col-lg-5 order-lg-2'>
									<img class="margin-bottom" src="<?php echo $icon; ?>">
									<h3 class="bold-font margin-bottom">
										<?php echo $title; ?>
									</h3>
									<p class="body-large">
										<?php echo $text; ?>
									</p>

									<div class="tool-controls double-margin-top carousel-indicators">
										<?php 

											while( have_rows('tools') ): the_row(); 

											// vars
											$icon = get_sub_field('icon');
											$title = get_sub_field('title');
											$text = get_sub_field('text');
											$color_hex = get_sub_field('color_hex');
											$i++;
										?>
											<div class="tool-section" data-slide-to='<?php echo $i ?>' data-target='#establishCredibilitySlider'>
												<div class="media">
													<img class="margin-right" src="<?php echo $icon; ?>">
													<div class="media-body">
														<p class="regular-font-name body-large bold-font tool-title" style="border-color:<?php echo $color_hex; ?>;">
															<?php echo $title; ?>
														</p>
														<p class="no-margin-bottom tool-description">
															<?php echo $text; ?>
														</p>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
								<div class='col-lg-6 order-lg-1'>
									<div class="slides">
										<?php 
											while( have_rows('tools') ): the_row(); 
											// vars
											$image = get_sub_field('image');
										?>
											<div class="carousel-item">
												<div class='img-container'>
													<img class="full-width" src="<?php echo $image; ?>">
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>

						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

<!-- end section -->

		<div class="container">
			<div class="row">
				<div class="col text-center d-none d-lg-block">
					<img class=" margin-auto max-width" src="<?php bloginfo('template_url'); ?>/images/guide-2.svg">
				</div>
			</div>
			
		</div>

<!-- start section -->

		<?php 
			if( have_rows('personal_preference_section') ): 
			$i = -1
		?>
			<?php 
				while( have_rows('personal_preference_section') ): the_row(); 
				// vars
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				$text = get_sub_field('text');
			?>
				<div class="tools-slider-wrapper">
					<div class='container'>
						<div class='row justify-content-between tools-slider carousel'  data-interval='60000' data-ride='carousel' id='personalPreferenceSlider'  >

								<div class='col-lg-5'>
									<img class="margin-bottom" src="<?php echo $icon; ?>">
									<h3 class="bold-font margin-bottom">
										<?php echo $title; ?>
									</h3>
									<p class="body-large">
										<?php echo $text; ?>
									</p>

									<div class="tool-controls double-margin-top carousel-indicators">
										<?php 

											while( have_rows('tools') ): the_row(); 

											// vars
											$icon = get_sub_field('icon');
											$title = get_sub_field('title');
											$text = get_sub_field('text');
											$color_hex = get_sub_field('color_hex');
											$i++;
										?>
											<div class="tool-section" data-slide-to='<?php echo $i ?>' data-target='#personalPreferenceSlider'>
												<div class="media">
													<img class="margin-right" src="<?php echo $icon; ?>">
													<div class="media-body">
														<p class="regular-font-name body-large bold-font tool-title" style="border-color:<?php echo $color_hex; ?>;">
															<?php echo $title; ?>
														</p>
														<p class="no-margin-bottom tool-description">
															<?php echo $text; ?>
														</p>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
								<div class='col-lg-6'>
									<div class="slides">
										<?php 
											while( have_rows('tools') ): the_row(); 
											// vars
											$image = get_sub_field('image');
										?>
											<div class="carousel-item">
												<div class='img-container'>
													<img class="full-width" src="<?php echo $image; ?>">
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>

						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

<!-- end section -->

		<div class="container">
			<div class="row">
				<div class="col text-center d-none d-lg-block">
					<img class=" margin-auto max-width" src="<?php bloginfo('template_url'); ?>/images/guide-1.svg">
				</div>
			</div>
			
		</div>

<!-- start section -->

		<?php 
			if( have_rows('real_time_availability_section') ): 
			$i = -1
		?>
			<?php 
				while( have_rows('real_time_availability_section') ): the_row(); 
				// vars
				$icon = get_sub_field('icon');
				$title = get_sub_field('title');
				$text = get_sub_field('text');
			?>
				<div class="tools-slider-wrapper">
					<div class='container'>
						<div class='row justify-content-between tools-slider carousel'  data-interval='60000' data-ride='carousel' id='realTimeAvailabilitySlider'  >

								<div class='col-lg-5 order-lg-2'>
									<img class="margin-bottom" src="<?php echo $icon; ?>">
									<h3 class="bold-font margin-bottom">
										<?php echo $title; ?>
									</h3>
									<p class="body-large">
										<?php echo $text; ?>
									</p>

									<div class="tool-controls double-margin-top carousel-indicators">
										<?php 

											while( have_rows('tools') ): the_row(); 

											// vars
											$icon = get_sub_field('icon');
											$title = get_sub_field('title');
											$text = get_sub_field('text');
											$color_hex = get_sub_field('color_hex');
											$i++;
										?>
											<div class="tool-section" data-slide-to='<?php echo $i ?>' data-target='#realTimeAvailabilitySlider'>
												<div class="media">
													<img class="margin-right" src="<?php echo $icon; ?>">
													<div class="media-body">
														<p class="regular-font-name body-large bold-font tool-title" style="border-color:<?php echo $color_hex; ?>;">
															<?php echo $title; ?>
														</p>
														<p class="no-margin-bottom tool-description">
															<?php echo $text; ?>
														</p>
													</div>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
								<div class='col-lg-6 order-lg-1'>
									<div class="slides">
										<?php 
											while( have_rows('tools') ): the_row(); 
											// vars
											$image = get_sub_field('image');
										?>
											<div class="carousel-item">
												<div class='img-container'>
													<img class="full-width" src="<?php echo $image; ?>">
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>

						</div>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

<!-- end section -->

	</section>



	<section id='features' class='anchor off-white-bg-color'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<h2 class='text-center margin-bottom bold-font'>
						<?php the_field('features_title');?>
					</h2>
					<div class='row justify-content-center'>
						<div class='col-lg-12'>
							<p class='text-center body-large'>
								<?php the_field('features_subtext');?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php if( have_rows('features') ): ?>
				<div class="row double-margin-top">
					<?php 
						while( have_rows('features') ): the_row(); 
						// vars
						$title = get_sub_field('title');
						$text = get_sub_field('text');
						$class = get_sub_field('class');
					?>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="card feature-card <?php echo $class; ?>">
								<img class="featured-card-check" src="<?php bloginfo('template_url'); ?>/images/check.svg">
								<p class="body-large bold-font regular-font-name quarter-margin-bottom">
									<?php echo $title; ?>
								</p>
								<p class="no-margin-bottom">
									<?php echo $text; ?>
								</p>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

		</div>
	</section>




	<section id='how-it-works' class="anchor">
		<div class='container'>
			<div class='row justify-content-center'>
				<div class='col-lg-9'>
					<h2 class='text-center bold-font'>
						<?php the_field('how_it_works_title');?>
					</h2>
					<p class='text-center body-large'>
						<?php the_field('how_it_works_text');?>
					</p>
				</div>
			</div>
		</div>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='carousel slide carousel-fade how-slider' data-interval='6000' data-ride='carousel' id='howSlider' >
						<div class='carousel-inner'>
							<div class='row'>
								<div class='col-md-7'>
									<?php if( have_rows('how_it_works_steps') ): ?>
										<?php 
											while( have_rows('how_it_works_steps') ): the_row(); 
											// vars
											$image = get_sub_field('image');

										?>
												<div class='carousel-item'>
													<div class='img-container'>
														<img alt='First slide' src='<?php echo $image; ?>'>
													</div>
												</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
								<div class='col-md-5'>
									<div class='carousel-indicators how-slider-indicators'>
										<?php 
											if( have_rows('how_it_works_steps') ): 
											$i = -1
										?>
											<?php 
												while( have_rows('how_it_works_steps') ): the_row(); 
												// vars
												$title = get_sub_field('title');
												$i++;
											?>
												<div class='elevation-2 card how-indicator' data-slide-to='<?php echo $i; ?>' data-target='#howSlider'>
													<p class='body-large bold-font'>
														<?php echo $title; ?>
													</p>
												</div>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<div aria-hidden='true' aria-labelledby='exampleModalLabel' class='modal fade video-modal' id='homeVideoModal' role='dialog' tabindex='-1'>
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
	<div aria-hidden='true' aria-labelledby='exampleModalLabel' class='modal fade video-modal' id='toolsVideoModal' role='dialog' tabindex='-1'>
		<div class='modal-dialog' role='document'>
			<div class='modal-content'>
				<div class='modal-body'>
					<button aria-label='Close' class='close' data-dismiss='modal' type='button'>
						<span aria-hidden='true'>×</span>
					</button>
					<div class='embed-responsive embed-responsive-16by9'>
						<iframe allowscriptaccess='always' class='embed-responsive-item' id='video' src='<?php the_field('tools_video_url');?>'></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part( 'content', 'promo' ); ?>


</div>




<?php get_footer(); ?>