<?php
/**
 * Featured Content Template
 *
 * Queries posts by selected featured posts category and displays featured content area
 *
 * @package Gridbox
 */

// Get Theme Options from Database.
$theme_options = gridbox_theme_options();

// Get latest posts from database.
$query_arguments = array(
	'posts_per_page' => 5,
	'ignore_sticky_posts' => true,
	'cat' => absint( $theme_options['featured_category'] ),
);
$featured_query = new WP_Query( $query_arguments );

// Check if there are posts.
if ( $featured_query->have_posts() ) : ?>

	<div id="featured-posts-wrap" class="featured-posts-wrap">

		<div id="featured-posts" class="featured-posts clearfix">

			<?php while ( $featured_query->have_posts() ) : $featured_query->the_post();

				get_template_part( 'template-parts/content', 'featured' );

			endwhile; ?>

		</div>

	</div>

<?php
endif;

// Reset Postdata.
wp_reset_postdata();
