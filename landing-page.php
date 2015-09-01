

<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Landing Page Template
 *
Template Name:  Landing Page (no menu)
 *
 * @file           landing-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/landing-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>
<div id="content-full" class="grid col-940">
	<header class="landing-page">
		<h1 class="landing-page-header">Welcome to R.Deco Jewelry</h1>
		<p class="landing-page-intro">Classic Adornments</p>
	</header>
	<section id="dg-container" class="dg-container">
		<div class="dg-wrapper">
			<a id="img1" href="#">
				<div>Title</div>
			</a>				
			<a id="img2" href="#">
				<div>Title</div>
			</a>			
			<a id="img3"href="#">
				<div>Title</div>
			</a>
		</div>
		<nav>	
			<span class="dg-prev"><</span>
			<span class="dg-next">></span>
		</nav>
	</section>	
	<div class="landing-page-btn-wrapper">
		<!--<a href="#" class="landing-page-btn">Enter Site</a> -->		
		<button class="button button--shikoba"><i class="button__icon icon icon-next fa fa-diamond"></i><span>Enter Site</span>
		</button>
	</div>
</div><!-- end of #content-full -->

<?php get_footer(); ?>

