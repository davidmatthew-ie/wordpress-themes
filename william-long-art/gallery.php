<?php
/**
 * Template Name: Gallery
 *
 */
?>

	<?php get_header(); ?>

	<body <?php body_class(); ?>>
		<nav class="navbar navbar-default navbar-fixed-top animated fadeInDown .delay-900ms" style="background-color: rgba(0, 0, 0, 0.7)">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand nav-link">HOME</a></li>
				</div>
				<div id="topnav" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right nav-link">
						<?php
							wp_nav_menu(array(
									'theme_location' => 'primary',
									'menu_class' => 'primary-menu',
									'container' => false,
									'items_wrap' => '%3$s'
							))
						?>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container" style="margin-top: 80px;">
			<div class="row">
				<?php echo do_shortcode(get_theme_mod('foogallery_shortcode')); ?>
			</div>
			<div class="row">
				<div class="col-xs-12 text-center" style="margin: 70px 0;">
					<?php get_template_part('template-parts/copyright-privacy'); ?>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>