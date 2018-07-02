<?php
/**
 * The template for displaying the home page
 * @package Inner_Chapter
 */
?>

<?php get_header(); ?>

		<div class="container main-content">

			<div class="row text-center">
				<div class="col-xs-12">
					<img id="ic-logo" src="<?php echo get_template_directory_uri() . '/images/ic-logo.svg'?>" alt="Inner Chapter Logo">
					<div id="main-heading-container">
						<h1 id="main-heading" class="animated zoomIn">Inner Chapter</h1>
					</div>
				</div>
			</div>

			<div class="row text-center animated fadeInUp">
				<div id="main-icons-container" class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8 col-xs-12">
					<div class="col-xs-4 main-icons">
						<a href="https://innerchapter.com/releases/">
							<img id="record-label-icon" src="<?php echo get_template_directory_uri() .'/images/record-label-icon.svg'?>" alt="Record Label">
							<div class="icon-underline"></div>
							<p class="icon-text">record<br>label</p>
						</a>
					</div>
					<div class="col-xs-4 main-icons">
						<a href="https://innerchapter.com/showreel/">
							<img id="music-production-icon" src="<?php echo get_template_directory_uri() . '/images/music-production-icon.svg'?>" alt="Music Production">
							<div class="icon-underline"></div>
							<p class="icon-text">music<br>production</p>
						</a>
					</div>
					<div class="col-xs-4 main-icons">
						<a href="https://innerchapter.com/showreel/">
							<div id="sd-icon-container">
								<img id="sd-dial" src="<?php echo get_template_directory_uri() . '/images/sound-design-icon-dial.svg'?>" alt="Rotary Dial">
								<img id="sd-knob" src="<?php echo get_template_directory_uri() . '/images/sound-design-icon-knob.svg'?>" alt="Rotary Knob">
							</div>
							<div class="icon-underline"></div>
							<p class="icon-text">sound<br>design</p>
						</a>
					</div>
				</div>
			</div>
			
		</div><!-- end .main-content -->

		<?php get_footer(); ?>