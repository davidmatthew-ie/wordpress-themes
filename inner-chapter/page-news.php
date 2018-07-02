<?php
/**
 * Template Name: News Page
 * @package Inner_Chapter
 */

get_header(); ?>

	<div id="primary" class="container content-area">
		<main id="main" class="site-main">
			<div class="col-sm-12">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; 
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'category_name'=>'News', 'posts_per_page'=>-1)); 
 
			if ( $wpb_all_query->have_posts() ) : 
				while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
					<div class="col-xs-12 col-sm-6 col-md-4 animated fadeInUp">
						<a class="item-link" href="<?php the_permalink(); ?>">
							<div class="item-container">
								<div class="item-img-container">
									<?php if ( has_post_thumbnail() ) { ?>
									<img class="item-img img-responsive" src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>"/>
									<?php } ?>
									<div class="img-overlay"></div>    	                    
								</div>
								<div>
									<h4 class="item-heading" ><?php the_title(); ?></h4>
									<p class="item-date"><?php the_date(); ?></p>
								</div>
							</div>
						</a>
					</div>
				<?php 
				endwhile; 
				wp_reset_postdata();
 
			else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php 
			endif; ?>
			
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>