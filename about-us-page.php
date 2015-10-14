<?php
    /*
        Template Name: About Us Page
    */
    
    get_header(); 
    custom_breadcrumbs(); ?> 
        <div id="about-me" class="about-me">
         	<?php
		 		$args = array(
		 			'post_type' => 'about-us'	
            );
            $query = new WP_Query( $args );
                while( $query->have_posts() ) :
                    $query->the_post();
                    if ($query->current_post % 2 == 0):
            ?>
            
			<div class="about-container">
                <section class="about-section odd" >
					<article class="about-article right">	                       
                        <h2><?php the_title(); ?></h2>
                        <?php the_field('summary'); ?>	                     
                    </article>	
					<aside id="about-content" class="about-content left"> 
						<p class="about-read-more left">read more</p>
	                    <figure class="about-figure img-left">		
	                        <?php  the_post_thumbnail('large'); ?>		
	                    </figure>
						<?php the_content(); ?>
					</aside>
                </section>
        	</div>
        	
            <?php else: ?>
            
            <div class="about-container">
                <section class="about-section even">
                
                	<article class="about-article left">	                      
                        <h2><?php the_title(); ?></h2>
                        <?php the_field('summary');?>	                       
                    </article>

					<div id="about-content" class="about-content right"> 
						<p class="about-read-more right">read more</p>
	                    <figure class="about-figure img-right">			
	                        <?php the_post_thumbnail('large'); ?>
						</figure>
						<?php the_content(); ?>
					</div>
                </section>
            </div>     
 
            <?php endif; ?>
            <?php endwhile; ?>
           
        </div> <!-- .about-me-->

<?php get_footer(); ?>

