<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Full Content Template
 *
Template Name:  Full Width Page (no sidebar)
 *
 * @file           full-width-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/full-width-page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

get_header(); ?>

<div id="content-full" class="grid col-940">

	<?php 
		if ( have_posts() ) :  while( have_posts() ) : the_post(); 
		get_template_part( 'loop-header', get_post_type() ); 
		responsive_entry_before(); 
	?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php responsive_entry_top(); ?>

		<header class="landing-page">
			<h1 class="landing-page-header"><?php bloginfo('name'); ?></h1>
			<p class="landing-page-intro"><?php bloginfo('description'); ?></p>
			<p class="landing-page-second-intro">restored  <i class="fa fa-circle front-page"></i> repurposed  <i class="fa fa-circle front-page"></i> reinvented</p>
		</header>
		<section id="dg-container" class="dg-container">
			<div class="dg-wrapper">
				<a id="img1" href="#">
					<div>Blue Angel</div>
				</a>				
				<a id="img2" href="#">
					<div>On the Town</div>
				</a>			
				<a id="img3"href="#">
					<div>Midnight Rendevous</div>
				</a>
			</div>
			<nav>	
				<span class="dg-prev"><</span>
				<span class="dg-next">></span>
			</nav>
		</section>	
		<div class="landing-page-btn-wrapper">	
			<a href="<?php bloginfo('url'); ?>/shop"><button class="button button--shikoba"><i class="button__icon icon icon-next fa fa-diamond"></i><span>Enter Site</span></button>
			</a>
		</div>
	<?php responsive_entry_bottom(); ?>
	</div><!-- end of #post-<?php the_ID(); ?> -->
	<?php responsive_entry_after(); ?>
	<?php
		endwhile;
		
		get_template_part( 'loop-nav', get_post_type() );
		
		else :
		
		get_template_part( 'loop-no-posts', get_post_type() );
		
		endif;
	?>
</div><!-- end of #content-full -->
<?php get_footer(); ?>
