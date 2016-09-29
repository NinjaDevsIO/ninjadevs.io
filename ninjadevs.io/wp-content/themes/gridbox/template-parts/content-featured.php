<?php
/**
 * The template for displaying articles in the featured content area
 *
 * @package Gridbox
 */

?>

<div class="grid-post clearfix">

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<a href="<?php the_permalink(); ?>" class="featured-image-link">

			<?php // Display Post Thumbnail or default thumbnail.
			if ( has_post_thumbnail() ) :

				the_post_thumbnail( 'post-thumbnail', array( 'class' => 'featured-image' ) );

			else : ?>

				<img src="<?php echo get_template_directory_uri(); ?>/images/default-featured-image.png" class="featured-image default-featured-image wp-post-image" />

			<?php endif;?>

			<div class="image-overlay"></div>

		</a>

		<div class="post-content clearfix">

			<header class="entry-header">

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

			</header><!-- .entry-header -->

		</div>

	</article>

</div>
