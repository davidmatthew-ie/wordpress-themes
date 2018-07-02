<?php
/**
 * The template for displaying all single posts
 * @package Inner_Chapter
 */

get_header(); ?>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main row">
			<div class="col-sm-12 col-lg-8">
				<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', get_post_format() );
					endwhile; 
				?>
				</div>
			<?php get_sidebar(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>