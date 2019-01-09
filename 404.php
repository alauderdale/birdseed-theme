<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package boiler
 */

get_header(); ?>



<section>

  <div class='container double-margin-top'>
    <div class='row'>
      <div class='col-md-12 text-center'>
        <h1 class="bold-font">
        	Uh-oh!
        </h1>
        <p class="light-text-color text-center double-margin-bottom">
        	Somehting went wrong.
    	</p>
    	<a href="<?php bloginfo('url')?>" class="btn btn-primary btn-primary">
		    Take me home
		</a>
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>