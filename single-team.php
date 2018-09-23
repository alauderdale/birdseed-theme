<?php
/**
 * The Template for displaying all single posts.
 *
 * @package boiler
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div id='main'>
	<section class='blog-styles no-padding-top padding-bottom'>
		<div class='container'>
			<div class='row justify-content-lg-center'>
				<div class='col-lg-12'>
					<div class='row'>
						<div class='col-lg-12'>
							<nav aria-label='breadcrumb'>
								<ol class='breadcrumb'>
									<li class='breadcrumb-item'>
										<a href='<?php bloginfo('url')?>'>
											Home
										</a>
									</li>
									<li class='breadcrumb-item'>
										<a href='<?php the_field('team_page_link', 'option'); ?>'>
											Attourneys
										</a>
									</li>
									<li aria-current='page' class='breadcrumb-item active'>
										<?php the_title();?>
									</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class='row'>
						<div class='col-lg-8 col-md-12 order-md-1'>
							<h1 class='bold-font'>
								 <?php the_title();?>
							</h1>
							<h3 class='margin-bottom no-margin-top'>
								<?php the_field('title');?>
							</h3>
						</div>
					</div>
					<div class='row'>
						<div class='col-lg-3 col-md-4 order-md-3'>
							<img class='max-width margin-bottom' src='<?php the_field('avatar_large');?>' width='257px'>
							<a class='btn btn-block btn-lg btn-dark margin-bottom' href='mailto:<?php the_field('email');?>'>
								<i class='material-icons'>
									email
								</i>
								Contact 
								<?php 
							      $text=get_the_title(); 
							      $text=explode(' ',$text); 
							      echo $text[0]; 
							    ?>
							</a>
							<p class='no-margin-bottom'>
								<span class='bold-font'>
									E
								</span>
								<?php the_field('email');?>
							</p>
							<p>
								<span class='bold-font'>
									P
								</span>
								<?php the_field('phone');?>
							</p>
						</div>
						<div class='col-lg-1 col-md-1 order-md-2'></div>
						<div class='col-lg-8 order-md-1 col-md-7'>
							 <?php the_content();?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php if( have_rows('expertise') ): ?>
		<section class='no-padding-top padding-bottom'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-12'>
						<h2>
							Areas of expertise
						</h2>
					</div>
				</div>
			</div>
		</section>
		<section class='padding-top off-white-bg-color'>
			<div class='container'>
				<div class='row'>
					<div class='col-lg-6'>

						<div class='row'>
							<?php 
								while( have_rows('expertise') ): the_row(); 

					// vars
								$practice_area_link = get_sub_field('practice_area', false, false);


								?>
								<div class='col-md-6'>
									<div class='sublink-nav'>
										<?php if( $practice_area_link ): ?>
											<a class='nav-item' href='<?php echo get_the_permalink($practice_area_link); ?>'>
												<?php echo get_the_title($practice_area_link); ?>
											</a>
										<?php endif; ?>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
					<div class='col-lg-6'></div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php get_template_part( 'content', 'promo' ); ?>


</div>

<?php endwhile; // end of the loop. ?>
<!-- end main content -->






<?php get_footer(); ?>