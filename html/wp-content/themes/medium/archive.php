<?php 
/*
 * Archive Template File.
 */
get_header(); 
?>
   <!--section start-->
   <section class="home-section page-section">
   	<div class="col-md-12 page-title">
    	<h2>
        <?php
        if ( is_day() ) :
            _e('Daily Archives','medium'); echo ": ". get_the_date();
        elseif ( is_month() ) :
            _e('Monthly Archives','medium'); echo ": ". get_the_date('F-Y');
        elseif ( is_year() ) :
            _e('Monthly Archives','medium'); echo ": ". get_the_date('Y');
        else :
            _e( 'Archives', 'medium' );
        endif;
        ?></h2>
    </div>
   	<div class="container blog-container">	
        <div class="blog-post" id="content">
            <div class="row blog-row">
             <?php
			 $medium_i = 1;
		if( have_posts() ) : while (have_posts()) : the_post(); 
			if($medium_i == 1 || $medium_i == 4){
				$medium_class = 'col-md-7 col-sm-7 post-box';
				$medium_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium-blog-big');
			}
			else{
				$medium_class = 'col-md-5 col-sm-5 post-box';
				$medium_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'medium-blog-small',0 );				
			}
				?>	 
                <div  id="post-<?php the_ID(); ?>" <?php post_class($medium_class); ?>>
                    <div class="blog-left">
                    	<?php
							if(!empty($medium_featured_image[0])) {
								echo '<a href="'. esc_url(get_permalink()).'"><img src="'. esc_url($medium_featured_image[0]).'" class="img-responsive" alt="'.esc_attr(get_the_title()).'" /></a>';
								}
						?>
                        <div class="block-content">
                            <a href="<?php echo  esc_url(get_permalink());?>" class="block-title"><?php echo get_the_title(); ?></a>
                            <div class="block-details"> 
                                <ul>
                                    <?php medium_entry_meta();?> 
                                </ul>
                             </div>
                            <a href="<?php echo  esc_url(get_permalink());?>" class="read-more"><?php _e('Read More...','medium'); ?></a>
                        </div>    
                    </div>
                </div>
             <?php
			 	$medium_i++;
				if($medium_i == 5){
					$medium_i=1;			
				}
				endwhile; endif;
				if (function_exists('faster_pagination')) {
    				faster_pagination();
				}
				else{?>
					<div class="col-md-12 medium-pagination-single">
                        <span class="medium-previous-link"><?php previous_posts_link('&laquo; '.__('Previous','medium')); ?></span>
                        <span class="medium-next-link"><?php next_posts_link(__('Next','medium').' &raquo;'); ?></span>
      				</div><?php
				}
		 	?>
            </div>
        </div>    
    </div>   
   </section>
   <!--secton end-->
<?php get_footer(); ?>
