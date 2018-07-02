<?php
/**
 * Template Name: Slim Page
 * @package Inner_Chapter
 */

get_header(); ?>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main row">
			<div class="col-sm-12 col-md-offset-3 col-md-6">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
			
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>