<?php 
/**
 * The 404 template file
**/
get_header(); 
?>
   <!--section start-->
   <section class="home-section page-section">
   	<div class="container blog-container">	
        <div class="blog-post">
            <div class="jumbotron">
				<h1><?php _e('Epic 404 - Article Not Found','medium');?></h1>
				<p><?php _e("This is embarassing. We can't find what you were looking for.",'medium');?></p>
                <section class="post_content">
                    <p><?php _e('Whatever you were looking for was not found, but maybe try looking again or search using the form below.','medium');?></p>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php get_search_form(); ?>									
                        </div>
                	</div>
				</section>
			</div>
            
        </div>    
    </div>   
   </section>
   <!--secton end-->
<?php get_footer(); ?>