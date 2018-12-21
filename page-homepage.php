<?php
/*
Template Name: Home
 */
?>

<?php get_header(); ?>

<script>
$(document).ready(function(){
  $("#ToolsSLider .carousel-inner .carousel-item:first").addClass("active");
  $("#ToolsSLider .carousel-indicators .tool-icon:first").addClass("active");
});
</script>

<script>
$(document).ready(function(){
  $("#howSlider .carousel-inner .carousel-item:first").addClass("active");
  $("#howSlider .carousel-indicators .how-indicator:first").addClass("active");
});
</script>





<div id='main'>
	<section class='main-hero' id='intro'>
		<div class='container'>
			<div class='row'>
				<div class='col-xl-6 col-lg-7 col-md-6'>
					<h1 class='double-margin-bottom bold-font'>
						<?php the_field('title_text');?>
					</h1>
					<p class='body-large light-text-color'>
						<?php the_field('lead_text');?>
					</p>
					<div class='double-margin-top'>
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
				<div class='col-xl-6 col-lg-5 col-md-6'>
					<img class='padded no-padding-top hero-img' src='<?php the_field('hero_image');?>' width='545px'>
				</div>
			</div>
		</div>
	</section>
	<section class='anchor' id='why'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<h2 class='text-center margin-bottom bold-text'>
						<?php the_field('overview_title');?>
					</h2>
					<div class='row justify-content-center'>
						<div class='col-lg-8'>
							<p class='text-center body-large light-text-color'>
								<?php the_field('overview_subtext');?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class='col-md-12'>
				<div class='text-center'>
					<img class='double-margin-top full-width' src='<?php the_field('overview_image');?>'>
				</div>
			</div>
		</div>
	</section>
	<section class='anchor'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-12'>
				<h2 class='text-center margin-bottom bold-text'>
					<?php the_field('why_title');?>
				</h2>
				<div class='row justify-content-center'>
					<div class='col-lg-6'>
						<p class='text-center body-large light-text-color'>
							<?php the_field('why_subtext');?>
						</p>
					</div>
				</div>
			</div>
		</div>
					<?php if( have_rows('why_points') ): ?>
						<div class='row double-margin-top why-cards'>
							<?php 

							while( have_rows('why_points') ): the_row(); 

				// vars
							$icon = get_sub_field('icon');

							$title = get_sub_field('title');

							$text = get_sub_field('text');

							?>
								<div class='col-md-4'>
									<div class='card elevation-2'>
										<div class='card-body text-center'>
											<img class='margin-bottom' src='<?php echo $icon; ?>' width='100px'>
											<p class='body-large bold-font regular-font-name'>
												<?php echo $title; ?>
											</p>
											<p class='light-text-color'>
												<?php echo $text; ?>
											</p>
										</div>
									</div>
								</div>

							<?php endwhile; ?>
						</div>
					<?php endif; ?>

		</div>
	</section>
	<section id='tools'>
		<div class='d-none d-lg-inline d-md-inline'>
			<div class='carousel slide carousel-fade tools-slider hover-slider' data-interval='6000' data-ride='carousel' id='ToolsSLider'>
				<div class='text-center tools-text'>
					<h2 class='text-center margin-bottom bold-font'>
						<?php the_field('tools_title');?>
					</h2>

				</div>
				<?php if( have_rows('tools') ): ?>
					<div class='carousel-inner'>
						<?php 
							while( have_rows('tools') ): the_row(); 
							// vars
							$background = get_sub_field('background');

							$image = get_sub_field('image');

							$description = get_sub_field('description');

							$color_hex = get_sub_field('color_hex');

						?>
							<div class='carousel-item' style='background-image:url(<?php echo $background; ?>);'>
								<div class='img-container'>
									<img class='d-block w-100' src='<?php echo $image; ?>'>
								</div>
								<div class='carousel-caption'>
									<p class="bold-font" style='background-color:<?php echo $color_hex; ?>;'>
										<?php echo $description; ?>
									</p>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<div class='container'>
					<div class='row justify-content-center'>
						<div class='col-xl-12'>
							<?php if( have_rows('tools') ): 

							$i = -1

							?>

								<div class='carousel-indicators tool-slider-indicators row'>
									<?php 
										while( have_rows('tools') ): the_row(); 
										// vars
										$title = get_sub_field('title');

										$icon = get_sub_field('icon');

										$i++;
									?>
										<div class='tool-icon'  data-slide-to='<?php echo $i ?>' data-target='#ToolsSLider'>
											<img src='<?php echo $icon; ?>' width='73px'>
											<p class='body-small'>
												<?php echo $title; ?>
											</p>
										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class='d-md-none'>
			<div class='container'>
				<div class='row'>
					<div class='col-sm'>
						<div class='text-center double-margin-bottom'>
							<h2 class='text-center margin-bottom bold-font'>
								<?php the_field('tools_title');?>
							</h2>
							<p class='light-text-color body-large'>
								<?php the_field('tools_subtext');?>
							</p>
						</div>
						<?php if( have_rows('tools') ): ?>
							<?php 
								while( have_rows('tools') ): the_row(); 
								// vars
								$title = get_sub_field('title');

								$description = get_sub_field('description');

								$image = get_sub_field('image');

								$icon = get_sub_field('icon');
							?>
								<div class='tool-thumbnail text-center double-margin-bottom'>
									<img class='margin-bottom' src='<?php echo $icon; ?>' width='73px'>
									<p class='regular-font-name no-margin-bottom bold-font'>
										<?php echo $title; ?>
									</p>
									<p class='light-text-color'>
										<?php echo $description; ?>
									</p>
									<img class='d-block max-width margin-auto' src='<?php echo $image; ?>' width='300px'>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='text-center double-margin-top'>
						<a class='btn btn-lg btn-primary' href='<?php the_field('get_started_page', 'option'); ?>'>
							<?php the_field('get_started_text', 'option'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class='off-white-bg-color' id='how-it-works'>
		<div class='container'>
			<div class='row justify-content-center'>
				<div class='col-lg-6'>
					<h2 class='text-center bold-font'>
						<?php the_field('how_it_works_title');?>
					</h2>
					<p class='text-center body-large light-text-color'>
						<?php the_field('how_it_works_text');?>
					</p>
				</div>
			</div>
		</div>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<div class='carousel slide carousel-fade how-slider' data-interval='6000' data-ride='carousel' id='howSlider'>
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
	<?php get_template_part( 'content', 'promo' ); ?>


</div>




<?php get_footer(); ?>