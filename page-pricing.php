<?php
/*
Template Name: Pricing
 */
?>


<?php get_header(); ?>

<div id='main'>
	<section class='main-hero' id='pricing-hero'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-6 col-md-5'>
					<div class='account-options'>
						<h2 class='margin-bottom'>
							<?php the_field('title_text');?>
						</h2>
						<p class='body-font-name light-text-color'>
							<?php the_field('lead_text');?>
						</p>
						<div class='margin-top'>
							<?php if( have_rows('price_points') ): ?>
								<ul class='list-unstyled pricing-list'>
									<?php 

									while( have_rows('price_points') ): the_row(); 

						// vars
									$text = get_sub_field('text');

									?>
										<li>
											<p class='body-large'>
												<i class='material-icons primary-text-color'>
													check
												</i>
												<?php echo $text; ?>
											</p>
										</li>
									<?php endwhile; ?>
								</ul>
							<?php endif; ?>
						</div>
						<div class='card off-white-bg-color elevation-0'>
							<div class='card-body'>
								<p class='body-large regular-font-name bold-font'>
									<?php the_field('how_is_it_free_title');?>
								</p>
								<p class='body-small light-text-color no-margin-bottom'>
									<?php the_field('how_is_it_free_text');?>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class='col-md-1 col-lg-1'></div>
				<div class='col-lg-5 col-md-6'>
					<div class='create-account-promo'>
						<div class='card elevation-2'>
							<div class='card-body'>
								<h4 class='margin-bottom bold-font'>
									<?php the_field('create_account_title');?>
								</h4>
								<?php the_field('create_account_subtext');?>
								<?php the_field('create_account_form');?>
<!-- 								<form>
									<div class='form-group'>
										<label>
											Full name
										</label>
										<input class='form-control form-control-lg' placeholder='John Doe'>
									</div>
									<div class='form-group'>
										<label>
											Email
										</label>
										<input class='form-control form-control-lg' placeholder='john@doe.com'>
									</div>
									<div class='form-group'>
										<label>
											Password
										</label>
										<input class='form-control form-control-lg' placeholder='5+ characters'>
									</div>
									<div class='form-group double-margin-top'>
										<button class='btn btn-lg btn-primary btn-block' type='submit'>
											Create account
										</button>
									</div>
								</form> -->
								<?php the_field('create_account_terms_text');?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id='price-panel'>
		<div class='container'>
			<div class='row justify-content-center text-center'>
				<div class='col-lg-12'>
					<h2 class='text-center bold-font margin-bottom'>
						<?php the_field('plus_title');?>
					</h2>
					<div class='price-indicator'>
						<h1>
							<span class='dollar-symbol'>
								$
							</span>
							<?php the_field('plus_price');?>
							<span class='per'>
								/<?php the_field('plus_time_unit');?>
							</span>
						</h1>
					</div>
					<p class='text-center body-large light-text-color'>
						<?php the_field('plus_subtext');?>
					</p>
				</div>
			</div>
			<?php if( have_rows('plus_points') ): ?>
				<div class='row double-margin-top'>
					<?php 
						while( have_rows('plus_points') ): the_row(); 
						// vars
						$icon = get_sub_field('icon');
						$title = get_sub_field('title');
						$text = get_sub_field('text');

					?>
						<div class='col-lg'>
							<div class='card elevation-2 margin-bottom pricing-feature'>
								<div class='card-body'>
									<div class='row'>
										<div class='col-lg-3'>
											<img class='margin-bottom max-width' src='<?php echo $icon; ?>' width='38px'>
										</div>
										<div class='col-lg-9'>
											<p class='body-large bold-font no-margin-bottom'>
												<?php echo $title; ?>
											</p>
											<p class='light-text-color'>
												<?php echo $text; ?>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<div class='row text-center double-margin-top'>
				<div class='col-lg-12'>
					<?php the_field('get_premium_button');?>
				</div>
			</div>
		</div>
	</section>

</div>
<?php get_footer(); ?>