<?php
/**
 * Template part for displaying posts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title animated slideInLeft painting-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif; 
		?>

	</header><!-- .entry-header -->
	
	<div class="painting-details animated fadeInDown">
		<p><span class="glyphicon glyphicon-fullscreen"></span><?php the_field('dimensions'); ?></p>
		<p><span class="glyphicon glyphicon-info-sign"></span><?php the_field('materials'); ?></p>
		<p><span class="glyphicon glyphicon-tag"></span><?php the_field('sale_status'); ?></p>
	</div>
	<div class="painting-container">
	    <img class="full-size-painting img-responsive animated fadeInUp" src="<?php the_field('full_size_painting'); ?>" />
	</div>

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'william-long-art' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'william-long-art' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
