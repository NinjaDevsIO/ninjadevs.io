<?php 
/*
 * Page Template File.
 */
get_header(); 
?>
   <!--section start-->
   <section class="home-section page-section">   	
   	<div class="container blog-container">	
        <div class="blog-post">
            <div class="row blog-row">
            <div class="col-md-12 single-post">
             <?php
			 if( have_posts() ) : while (have_posts()) : the_post(); 
			 $medium_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium-blog-big');
			 ?>	 
                <div  id="post-<?php the_ID(); ?>" <?php post_class('col-md-12'); ?>>
                    <div class="blog-left">
                    	<?php
							if(!empty($medium_featured_image[0])) {
								echo '<img src="'. esc_url($medium_featured_image[0]).'" class="img-responsive" alt="'.esc_attr(get_the_title()).'" />';
								}
						?>
                        <div class="block-content">
                            <h2 class="block-title"><?php echo get_the_title(); ?></h2>
                            <div class="block-details"> 
                                <ul>
                                    <?php medium_entry_meta();?> 
                                </ul>
                             </div>
                             <div class="col-md-12 no-padding-lr block-text">
                             	<?php
								the_content();
								?>
                             </div>
                             <?php
							 wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'medium' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
			?>
							 
                            
                        </div>    
                    </div>
                </div>
             <?php
				endwhile; endif;
		 	?>
      
      		<?php comments_template(); ?>
            </div>            
            </div>
            
        </div>    
    </div>   
   </section>
   <!--secton end-->
<?php get_footer(); ?>