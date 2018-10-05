<section class='inverse-section primary-promo'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 text-center'>
				<h2 class='bold-font double-margin-bottom'>
					<?php the_field('promo_title', 'option'); ?>
				</h2>
				<a class='btn btn-lg btn-light margin-top' href='<?php the_field('get_started_page', 'option'); ?>'>
					<?php the_field('get_started_text', 'option'); ?>
				</a>
			</div>
		</div>
	</div>
</section>