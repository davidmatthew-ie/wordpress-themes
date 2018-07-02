<?php
/**
 * The sidebar containing the main widget area
 * @package Inner_Chapter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-lg-4 animated fadeInRight">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->