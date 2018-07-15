<?php
/**
 * Template Name: Releases Page
 * @package Inner_Chapter
 */

$GLOBALS['cat_name'] = 'releases';

get_header(); ?>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main">
			<div class="col-sm-12">
  			<?php 
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'page' );
					endwhile;
					get_template_part( 'template-parts/content', 'blog' ); 
				?>
			</div>
      <?php
				get_template_part( 'template-parts/content', 'older' );
			?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>