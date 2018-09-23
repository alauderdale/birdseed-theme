<?php
/*
Template Name: About
 */
?>


<?php get_header(); ?>


<div id='main'>
	<section class='main-hero' id='story'>
		<div class='container'>
			<div class='row'>
				<div class='col-xl-7 col-lg-6 col-md-6 order-md-2'>
					<img class='no-padding-top' src='<?php the_field('story_image');?>' width='776px'>
				</div>
				<div class='col-xl-5 col-lg-6 col-md-6 order-md-1'>
					<h1 class='double-margin-bottom bold-font'>
						<?php the_field('title_text');?>
					</h1>
					<h5 class='body-large body-font-name'>
						<?php the_field('lead_text');?>
					</h5>
					<p class='body-large'>
						<?php the_field('story_text');?>
					</p>
					<div class='double-margin-top'>
						<a class='btn btn-lg btn-primary' href='<?php the_field('get_started_page', 'option'); ?>'>
							<?php the_field('get_started_text', 'option'); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id='name'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-6 col-md-6'>
					<img class='double-margin-bottom max-width padded' src='<?php the_field('name_image');?>' width='410px'>
				</div>
				<div class='col-lg-6 col-md-6'>
					<h2 class='bold-font margin-bottom'>
						<?php the_field('name_title');?>
					</h2>
					<p class='body-large'>
						<?php the_field('name_text');?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class='primary-light-bg-color' id='contact'>
		<div class='container'>
			<div class='row'>
				<div class='col-lg-12'>
					<h1 class='bold-font text-center'>
						<?php the_field('get_in_touch_title');?>
					</h1>
					<div class='card elevation-2'>
						<div class='card-body'>
							<div class='padded no-padding-top no-padding-bottom'>
								<div class='row'>
									<div class='col-md-5'>
										<p class='body-large bold-font no-margin-bottom location-title regular-font-name'>
											BirdSeed office
										</p>
										<p class='body-large'>
											<?php the_field('address', 'option'); ?>
										</p>
										<a class='btn btn-lg btn-primary margin-top' href='<?php the_field('contact_button_url');?>'>
											<?php the_field('contact_button_title');?>
										</a>
									</div>
									<div class='col-md-7'>
										<img class='max-width' src='<?php the_field('map_image');?>'>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id='partner'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 order-md-3'>
					<div class='embed-responsive embed-responsive-16by9 video-thumbnail margin-top'>
						<iframe class='embed-responsive-item' src='<?php the_field('partner_video_url');?>'></iframe>
					</div>
				</div>
				<div class='col-md-1 order-md-2'></div>
				<div class='col-md-5 order-md-1'>
					<h2 class='bold-font margin-bottom'>
						<?php the_field('partner_title');?>
					</h2>
					<p class='body-large'>
						<?php the_field('partner_text');?>
					</p>
					<a class='btn btn-lg btn-light margin-top' href='/pricing'>
						Let's partner
					</a>
				</div>
			</div>
		</div>
	</section>
	<section id='blog-featured'>
		<div class='container'>
			<div class='row text-center justify-content-center'>
				<div class='col-lg-8'>
					<h2 class='bold-font margin-bottom'>
						<?php the_field('birdspeek_title');?>
					</h2>
					<p class='body-large light-text-color'>
						<?php the_field('birdspeek_text');?>
					</p>
				</div>
			</div>
			<div class='row double-margin-top'>

						<?php $blogLoop = new WP_Query( array('post_type' => 'post', "posts_per_page" => 3) ); ?>

						<?php while ( $blogLoop->have_posts() ) : $blogLoop->the_post(); ?>
							<div class='col-md-4'>
								<div class='blog-thumb'>
									<a href='<?php the_permalink();?>'>
										<?php the_post_thumbnail('medium', array('class' => 'max-width double-margin-bottom')); ?>
									</a>
									<a href='<?php the_permalink();?>'>
										<p class='body-large bold-font half-margin-bottom regular-font-name'>
											<?php the_title();?>
										</p>
									</a>
									<a class='btn btn-link no-padding-left text-left' href='<?php the_permalink();?>'>
										Read the article
										<i class='material-icons'>
											arrow_right_alt
										</i>
									</a>
								</div>
								<?php wp_reset_postdata(); ?>
							</div>
						<?php endwhile; // end of the loop. ?>
			</div>
			<div class='row margin-top'>
				<div class='col-lg-12'>
					<div class='text-center'>
						<a class='btn btn-lg btn-primary' href='<?php the_field('blog_link');?>'>
							Visit the blog
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php get_template_part( 'content', 'promo' ); ?>


</div>




<?php get_footer(); ?>