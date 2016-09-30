<?php
/**
 * Template Name: Featured Content
 *
 * Description: A custom page template which displays the featured content area and page content
 *
 * @package Gridbox
 */

get_header();

get_template_part( 'template-parts/featured-content' );
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				comments_template();

			endwhile; ?>
		
		</main><!-- #main -->
	</section><!-- #primary -->
	
	<?php get_sidebar(); ?>

<?php get_footer(); ?>
