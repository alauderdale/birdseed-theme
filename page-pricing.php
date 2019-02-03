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
						<div class='col-lg-12'>
							<div class='card-deck pricing-card-deck'>
								<div class='card elevation-2'>
									<div class='card-header text-center primary-header inverse-header'>
										<h3 class='margin-top'>
											<?php the_field('free_card_header_title');?>
										</h3>
										<hr class='margin-top margin-bottom' style='width:70%; margin:0 auto;'>
										<p class='body-large bold-font'>
											<?php the_field('free_card_header_text');?>
										</p>
									</div>
									<div class='card-body'>
										<div class='account-options'>
											<div class='text-center'>
												<h3 class='no-margin-bottom bold-font'>
													<?php the_field('free_card_body_title');?>
												</h3>
												<p class='body-font-name light-text-color'>
													<?php the_field('free_card_body_text');?>
												</p>
											</div>
											<div class='margin-top double-margin-bottom'>
												<?php if( have_rows('price_points') ): ?>
													<ul class='list-unstyled pricing-list'>
														<?php 

														while( have_rows('price_points') ): the_row(); 

											// vars
														$text = get_sub_field('text');

														?>
															<li>
																<p>
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
										</div>
									</div>
									<div class='text-center card-footer no-styling'>
										<a class="btn btn-link" href="#free-how">
											How is it free?
										</a>	
										<a class='btn btn-lg btn-primary btn-block' href='<?php the_field('create_account_link', 'option'); ?>'>
											Create account
										</a>
									</div>
								</div>
								<div class='card elevation-2'>
									<div class='card-header text-center secondary-header inverse-header'>
										<h3 class='margin-top bold-font'>
											<?php the_field('plus_card_header_title');?>
										</h3>
										<hr class='margin-top margin-bottom' style='width:70%; margin:0 auto;'>
										<p class='body-large bold-font'>
											<?php the_field('plus_card_header_text');?>
										</p>
									</div>
									<div class='card-body padding-top'>
										<div class="row">
											<div class='col text-center margin-bottom'>
												<div class="btn-group btn-group-toggle" data-toggle="buttons">
													<label class="btn btn-secondary monthly-toggle active">
														<input type="radio" name="options" id="option2" autocomplete="off"> Monthly
													</label>
													<label class="btn btn-secondary annual-toggle">
														<input type="radio" name="options" id="option1" autocomplete="off" checked>	Yearly <span class="save">(Save 25%)</span>
													</label>
												</div>
											</div>
										</div>
										<div class='account-options'>
											<div class='pricing-feature padded'>
												<div class="row">
													<div class='col text-center'>
														<h5 class="no-margin-bottom"><?php the_field('plus_title');?></h5>
														<div class="upgrade-price monthly shown">
															<p class="quarter-margin-bottom">
																<span class="price"><?php the_field('plus_price_monthly');?></span>/mo
															</p>
														</div>
														<div class="upgrade-price annually">
															<p class="quarter-margin-bottom">
																<span class="price"><?php the_field('plus_price_annual');?></span>/mo
															</p>
														</div>
													</div>
												</div>
												<div class='row align-items-center'>
													<div class='col-7'>
														<?php if( have_rows('plus_points') ): ?>
															<ul class='list-unstyled pricing-list'>
																<?php 

																while( have_rows('plus_points') ): the_row(); 

													// vars
																$text = get_sub_field('point');

																?>
																	<li>
																		<p>
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
													<div class="col-5">
														<img class='img-fluid ' src='<?php the_field('plus_image');?>' > 
													</div>
												</div>
											</div><!-- end pricing feature -->
											<div class='pricing-feature padded'>
												<div class="row">
													<div class='col text-center'>
														<h5 class="no-margin-bottom"><?php the_field('pro_title');?></h5>
														<div class="upgrade-price monthly shown">
															<p class="quarter-margin-bottom">
																<span class="price"><?php the_field('pro_price_monthly');?></span>/mo
															</p>
														</div>
														<div class="upgrade-price annually">
															<p class="quarter-margin-bottom">
																<span class="price"><?php the_field('pro_price_annual');?></span>/mo
															</p>
														</div>
													</div>
												</div>
												<div class='row align-items-center'>
													<div class='col-7'>
														<?php if( have_rows('pro_points') ): ?>
															<ul class='list-unstyled pricing-list'>
																<?php 

																while( have_rows('pro_points') ): the_row(); 

													// vars
																$text = get_sub_field('point');

																?>
																	<li>
																		<p>
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
													<div class="col-5">
														<img class='img-fluid ' src='<?php the_field('pro_image');?>' > 
													</div>
												</div>
											</div><!-- end pricing feature -->

										</div>
									</div>
<!-- 									<div class='card-footer no-styling'>
										<div class="engagement-component media padded bordered">
											<img class="engagement-button margin-right" src="<?php the_field('engagement_component_image', 'option'); ?>" width="40px">
											<div class="media-body">
												<p class="primary-text-color no-margin-bottom bold-font body-small">
													<?php the_field('engagement_component_title', 'option'); ?>
												</p>
												<p class="no-margin-bottom body-small">
													<?php the_field('engagement_component_text_pricing');?>
												</p>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id='free-how'>
				<div class='container'>
					<div class='row justify-content-center text-center'>
						<div class='col-lg-8'>
							<h2 class='text-center bold-font margin-bottom'>
								<?php the_field('how_is_it_free_title');?>
							</h2>
							<p class='body-large text-center'>
								<?php the_field('how_is_it_free_text');?>
							</p>
							<a class='btn btn-lg btn-primary double-margin-top' href='<?php the_field('create_account_link', 'option'); ?>'>
								Create account
							</a>
						</div>
					</div>
				</div>
			</section>

		</div>
<?php get_footer(); ?>