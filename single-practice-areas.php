<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div id='main'>
	<div class='container'>
		<div class='row'>
			<div class='col-lg-3'>
				<section class='double-padding-top d-none d-lg-inline ml-auto'>
					<div class='row'>
						<div class='col-lg-12'>
							<?php wp_nav_menu( array( 
            'theme_location' => 'menu-sidebar-practices',  
            'menu_class' => 'section-nav list-unstyled side-nav-primary double-margin-top',
            'items_wrap'  => '<ul id="%1$s" class="%2$s ">  %3$s</ul>' 
            )); ?>
						</div>
					</div>
				</section>
			</div>
			<div class='col-lg-9'>
				<?php if ( get_field( 'hero_image' ) ): ?>
			    	<section class='page-hero page-hero-offset-sm double-padding-top double-padding-bottom' style='background-image:url(<?php the_field('hero_image');?>);'>
			    <?php else: // field_name returned false ?>
			    	<section class='page-hero page-hero-offset-sm double-padding-top double-padding-bottom' style='background-image:url(<?php bloginfo('template_url'); ?>/images/practice-show-hero-bg.png);'>
			    <?php endif; // end of if field_name logic ?>
					<div class='container'>
						<div class='row'>
							<div class='col-lg-10'>
								<div class='hero-text-container no-padding-left'>
									<h1 class='margin-bottom bold-font'>
										<?php the_title();?>
									</h1>
									<p>
										<?php the_field('lead_copy');?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class='blog-styles double-padding-top double-padding-bottom'>
					<div class='container'>
						<div class='row'>
							<div class='col-lg-10'>
								<?php the_content();?>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<?php get_template_part( 'content', 'promo' ); ?>
</div>
<!-- end main content -->
<?php endwhile; // end of the loop. ?>
<!-- end main content -->






<?php get_footer(); ?>