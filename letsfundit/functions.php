<?php
/**
 * Let's Fund it theme functions and definitions.
 *
 */

/**
 * Override the custom logo via the customizer.
 */
add_filter( 'generate_logo', function( $logo ) {
	$logo = get_stylesheet_directory_uri() . '/img/logo.svg';
	return $logo;
} );

/**
 * Construct the logo with the responsive picture element.
 */
add_filter( 'generate_logo_output', function ( $output ) {
  printf(
		'<div class="site-logo">
			<a href="%1$s" title="%2$s" rel="home">
        <picture>
					<source media="(min-width: 992px)" srcset="%4$s">
  				<img src="%3$s" alt="logo">
				</picture>
			</a>
		</div>',
		esc_url( apply_filters( 'generate_logo_href' , home_url( '/' ) ) ),
		esc_attr( apply_filters( 'generate_logo_title', get_bloginfo( 'name', 'display' ) ) ),
		esc_url( get_stylesheet_directory_uri() . '/img/logo.svg' ),
		esc_url( get_stylesheet_directory_uri() . '/img/logo-full.svg' )
	);
}, 10, 2 );

/**
 * Override the footer message.
 */
add_filter( 'generate_copyright', function() {
	echo '2024 Let\'s Fund It CHY Number: 22818, Registered Charity Number (RCN): 20206172';
} );

/**
 * Enqueue fontawesome.
 */
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/c72bb1a50b.js' );
} );

/**
 * Add typed.js script to homepage only.
 */
add_action( 'wp_footer', function() {
	if ( is_front_page() ) {
		?>
		<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
		<script>
			if (document.getElementById('typed')) {
				let typed = new Typed('#typed', {
					strings: ['Goods', 'Supplies', 'Equipment', 'Services'],
					typeSpeed: 60,
					backSpeed: 40,
					backDelay: 2500,
					smartBackSpace: false,
					loop: true
				});
			}
		</script>
		<?php
	}
} );

/**
 * Change add to cart text on single product page.
 */
add_filter( 'woocommerce_product_single_add_to_cart_text', function() {
  return __( 'Donate', 'woocommerce' ); 
} );

/**
 * Change add to cart text on any product listing/archives pages.
 */
add_filter( 'woocommerce_product_add_to_cart_text', function() {
  return __( 'Donate', 'woocommerce' );
} );
