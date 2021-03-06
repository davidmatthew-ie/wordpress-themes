<?php
/**
 * The template for displaying pages
 * @package Inner_Chapter
 */

get_header(); ?>

		<div id="primary" class="container content-area">
			<main id="main" class="site-main row">
				<div class="col-sm-12">
					<?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'page' );
						endwhile; 
					?>
				</div>
			</main><!-- #main -->
		</div><!-- #primary -->
<?php get_footer(); ?>
