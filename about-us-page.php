<?php
    /*
        Template Name: About Page
    */
    
    get_header(); ?>
    <?php custom_breadcrumbs(); ?> 

	            <div id="cbp-so-scroller" class="cbp-so-scroller">
	             	<?php
				 		$args = array(
				 			'post_type' => 'about-us',
				 			'posts_per_page' => 6,	
	                );
	                $portfolio = new WP_Query( $args );
	                    while( $portfolio->have_posts() ) :
	                        $portfolio->the_post();
	                        if ($portfolio->current_post % 2 == 0):
	                ?>
	
	                <section class="cbp-so-section">
	                    <article class="cbp-so-side cbp-so-side-left">
	                        <div class="title"><?php the_field('title'); ?></div>
	                        <div class="headline"><?php the_field('headline'); ?></div>
	                        <div class="paragraph"><?php the_field('paragraph'); ?></div>	
	                        <a href="<?php bloginfo('url'); ?>/contact">
								<button class="button about button--shikoba">
									<i class="button__icon icon icon-next fa fa-pencil"></i><span>Contact Me</span>
								</button>
							</a>  
	                        <a href="<?php bloginfo('url'); ?>/blog">
								<button class="button about button--shikoba">
									<i class="button__icon icon icon-next fa fa-newspaper-o"></i><span>Blog</span>
								</button>
							</a>							                      
	                    </article>
	                    <aside>
	
	                    </aside>
	                    <figure class="cbp-so-side cbp-so-side-right">
	
	                        <?php
	                            if ( has_post_thumbnail() ) {
	                                echo the_post_thumbnail('portfolio-thumb');
	                        ?>
	                        <?php }
	                        else {  ?>
	                            <img src="<?php print IMAGES; ?>/alt-img_500x400.jpg" alt="img02">
	                        <?php } ?>
	
	                    </figure>
	                </section>
	
	                <?php else: ?>
	
	                <section class="cbp-so-section">
	                    <figure class="cbp-so-side cbp-so-side-left">
	
	                        <?php
	                            if ( has_post_thumbnail() ) {
	                                echo the_post_thumbnail('portfolio-thumb');
	                        ?>
	                        <?php }
	                        else {  ?>
	                            <img src="<?php print IMAGES; ?>/alt-img_500x350.jpg" alt="img02">
	                        <?php } ?>
	                        
	                    </figure>
	                    <article class="cbp-so-side cbp-so-side-right">
	                        <div class="title"><?php the_field('title'); ?></div>
	                        <div class="headline"><?php the_field('headline'); ?></div>
	                        <div class="paragraph"><?php the_field('paragraph'); ?></div>
	                        	                        
	                        <a href="<?php bloginfo('url'); ?>/contact">
								<button class="button about button--shikoba">
									<i class="button__icon icon icon-next fa fa-pencil"></i><span>Contact Me</span>
								</button>
							</a>  
	                        <a href="<?php bloginfo('url'); ?>/blog">
								<button class="button about button--shikoba">
									<i class="button__icon icon icon-next fa fa-newspaper-o"></i><span>Blog</span>
								</button>
							</a>	                        
	                    </article>
	                </section>
	
	                   <?php endif; ?>
	                <?php endwhile; ?>
	            </div> <!-- .cbp-so-scroller -->

				</section>
				


<?php get_footer(); ?>

