<?php
	
/*---------------------------------------------------*
 * Enqueue stylesheets for css *
 *---------------------------------------------------*/
	 
function rdeco_jewelry_styles() {	
	wp_enqueue_style ('googlefonts-css', 'http://fonts.googleapis.com/css?family=Adamina|Lato' );
	wp_enqueue_style ('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
	wp_enqueue_style ('add-this', 'https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-508cf07b372297e2' );		
}
add_action('wp_enqueue_scripts', 'rdeco_jewelry_styles');


/*---------------------------------------------------*
 * Enqueue scripts for javascript *
 *---------------------------------------------------*/

function rdeco_jewelry_scripts() {
    wp_enqueue_script('landing-page-js', get_stylesheet_directory_uri().'/js/landing-page.js', array('jquery'), true, true);	
    wp_enqueue_script('modernizr-js', get_stylesheet_directory_uri().'/js/modernizr.js', array(), true, false);	
}
add_action('wp_enqueue_scripts', 'rdeco_jewelry_scripts');



/*---------------------------------------------------*
 * Excerpt character length for blog archive page *
 *---------------------------------------------------*/
 
function custom_excerpt_length( $length ) {
        return 60;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
    
    
/*-----------------------------------------------------------*
 * Renamed product info tab to "reviews" on product page *
 *-----------------------------------------------------------*/
     
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
	function woo_rename_tabs( $tabs ) {

		$tabs['reviews']['title'] = __( 'Comments' );	// Rename the description tab

	return $tabs;
}
    
?>
