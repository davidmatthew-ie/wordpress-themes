	<?php get_header(); ?>

	<body <?php body_class(); ?>>
		<nav class="navbar navbar-default navbar-fixed-top animated fadeInDown .delay-900ms">
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

		<div class="primary-bg" style="background-image: url('<?php echo get_theme_mod('bg_img_url'); ?>');">
			<div class="overlay"></div>
			<div class="container" id="heading-container">
				<h1 class="animated fadeInDown delay-1200ms">William Long</h1>
				<span id="h1-underline" class="animated fadeInLeft delay-1200ms"></span>
				<p class="animated fadeInUp delay-2200ms"><?php echo get_theme_mod('subheader_text'); ?></p>
			</div><!--/ container -->
		</div>
			
		<a id="arrow-container" class="animated fadeInDown delay-2200ms" href="#about" >
			<img id="painted-arrow"  alt="arrow" src="/wp-content/themes/william-long-art/img/painted-arrow.svg">
		</a>
		
		<div id="about" class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>ABOUT ME</h2>
				</div>
				<div class="col-sm-8">
					<p><?php echo get_theme_mod('about_text'); ?></p>
				</div>
				<div class="col-sm-4">
					<div id="gallery-btn-container">
						<a href="/gallery">
							<img id="gallery-btn" alt="gallery button" src="/wp-content/themes/william-long-art/img/gallery-button.svg" />
						</a>
					</div>
				</div>
			</div><!--/ row-->
		</div><!--/ container -->
		
		<div id="contact" class="contact-bg" style="background-image: url('/wp-content/themes/william-long-art/img/bg-img-palette-1920x1280.jpeg');">
			<div class="overlay"></div>
			<div class="container">
				<div class="row" >
					<div class="col-xs-12">
						<h2 id="contact-heading">CONTACT ME</h2>
					</div>
					<div class="col-xs-12 col-md-6">
						<?php echo do_shortcode(get_theme_mod('wpforms_shortcode')); ?>
					</div>
					<div class="col-xs-12 col-md-6">
						<iframe id="map" src="<?php echo get_theme_mod('google_maps_src'); ?>" allowfullscreen></iframe>
					</div>
					<div id="main-footer" class="col-xs-12 text-center">
						<?php get_template_part('template-parts/copyright-privacy'); ?>
					</div>
					
				</div>
			</div>
		</div>
			
		<?php get_footer(); ?>