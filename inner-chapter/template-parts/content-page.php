<?php
/**
 * Template part for displaying page content in page.php
 * @package Inner_Chapter
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title animated fadeInLeft">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content animated fadeInUp">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'inner_chapter' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
