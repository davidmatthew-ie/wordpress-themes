    <?php get_header(); ?>
        
    <div id="banner" class="primary-bg">
      <div class="overlay">
        <h1 style="display: none">Herons Wood Medical Centre</h1>
          <a href="#about">
            <img id="heronswood-logo" src="/wp-content/themes/heronswood/img/full-logo-white-path-opt.svg" alt="Herons Wood Logo" />
          </a>
      </div>
    </div>

    <div id="about" class="beige-box content-padding">
      <div class="brown-border-box">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="heading text-center">ABOUT US</h2>
            </div>
            <div class="col-sm-4 col-sm-push-8 icon-wrapper">
              <img class="icon" src="/wp-content/themes/heronswood/img/heronswood-about-icon-opt.svg" alt="About Herons Wood Medical Centre">
            </div>
            <div class="col-sm-8 col-sm-pull-4 text-padding">
              <?php echo get_theme_mod('about_us_text'); ?>
            </div>
          </div><!--/ row-->
        </div><!--/ container-->
      </div><!--/ brown-border-box-->
    </div><!--/ about-->

    <div id="contact" class="primary-bg">
      <div class="overlay content-padding">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="heading text-center text-white">CONTACT US</h2>
            </div>
            <div class="col-sm-4 icon-wrapper">
              <a href="tel:00353214374694">
                <img class="icon" src="/wp-content/themes/heronswood/img/heronswood-contact-icon-opt.svg" alt="Contact Herons Wood Medical Centre">
              </a>
            </div>
            <div class="col-sm-8 text-padding text-white">
              <?php echo get_theme_mod('contact_us_text'); ?>
            </div>
          </div><!--/ row-->
        </div><!--/ container-->
      </div><!--/ overlay-->
    </div><!--/ appointment-->

    <div id="find-us" class="beige-box content-padding">
      <div class="brown-border-box">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <h2 class="heading text-center">FIND US</h2>
            </div>
            <div class="col-sm-4 col-sm-push-8 icon-wrapper">
              <a href="<?php echo get_theme_mod('google_maps_link'); ?>" data-lity>
                <img class="icon" src="/wp-content/themes/heronswood/img/heronswood-location-icon-opt.svg" alt="Find Herons Wood Medical Centre">
              </a>
            </div>
            <div class="col-sm-8 col-sm-pull-4 text-padding">
              <?php echo get_theme_mod('find_us_text'); ?>
            </div>
          </div><!--/ row-->
        </div><!--/ container-->
      </div><!--/ brown-border-box-->
    </div><!--/ find us-->
        
    <?php get_footer(); ?>