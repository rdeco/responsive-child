<?php
    /*
        Template Name: Contact Page
    */
    
    get_header(); ?>
    <?php custom_breadcrumbs(); ?> 

	<div id="content" class="<?php echo esc_attr( implode( ' ', responsive_get_content_classes() ) ); ?> contact">


		<h1 class="contact"><?php the_title(); ?></h1>
		<?php if ( have_posts() ) : ?>

			<?php while( have_posts() ) : the_post(); ?>

			<?php responsive_entry_before(); ?>
				<div class="contact-content"><?php the_content(); ?></div>
			
				<?php responsive_entry_bottom(); ?>
		
			<?php responsive_entry_after(); ?>
		<?php
		endwhile;

		get_template_part( 'loop-nav', get_post_type() );

	else :

		get_template_part( 'loop-no-posts', get_post_type() );

	endif;
	?>

</div><!-- end of #content -->

<?php get_footer(); ?>