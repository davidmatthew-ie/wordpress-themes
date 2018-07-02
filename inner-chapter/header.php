<?php
/**
 * The header template
 * @package Inner_Chapter
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/images/favicon-32x32.png'?>" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/images/favicon-16x16.png'?>" sizes="16x16" />
		
		<title><?php is_front_page() ? bloginfo('name'): wp_title(''); ?></title>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body class="inset-shadow">

		<nav class="navbar navbar-default navbar-fixed-top animated fadeInDown">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
						<img id="ic-brand-icon" src="<?php echo get_template_directory_uri() . '/images/ic-brand-icon.svg'?>" alt="Inner Chapter">
						<span id="ic-brand-text">Inner Chapter</span>
					</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'primary',
								'menu_class' => 'primary-menu',
								'container' => false,
								'items_wrap' => '%3$s'
							))
						?>
					</ul>
				</div>
			</div>
		</nav>