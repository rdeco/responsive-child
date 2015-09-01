<?php
	
/*---------------------------------------------------*
 * Enqueue stylesheets for css *
 *---------------------------------------------------*/
	 
function rdeco_jewelry_styles() {	
	wp_enqueue_style ('googlefonts-css', 'http://fonts.googleapis.com/css?family=Adamina|Lato' );
	wp_enqueue_style ('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
		
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



?>
