<?php
/**
 * Template Tags
 *
 * This file contains several template functions which are used to print out specific HTML markup
 * in the theme. You can override these template functions within your child theme.
 *
 * @package Gridbox
 */

if ( ! function_exists( 'gridbox_site_logo' ) ) :
/**
 * Displays the site logo in the header area
 */
function gridbox_site_logo() {

	if ( function_exists( 'the_custom_logo' ) ) {

		the_custom_logo();

	}

}
endif;


if ( ! function_exists( 'gridbox_site_title' ) ) :
/**
 * Displays the site title in the header area
 */
function gridbox_site_title() {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	// Return early if site title is deactivated.
	if ( false == $theme_options['site_title'] ) {
		return;
	}

	if ( is_home() or is_page_template( 'template-magazine.php' )  ) : ?>

		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

	<?php else : ?>

		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

	<?php endif;

}
endif;


if ( ! function_exists( 'gridbox_header_image' ) ) :
/**
 * Displays the custom header image below the navigation menu
 */
function gridbox_header_image() {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	// Display default header image set on Appearance > Header.
	if ( get_header_image() ) :

		// Hide header image on front page.
		if ( true === $theme_options['custom_header_hide'] and is_front_page() ) {
			return;
		}
		?>

		<div id="headimg" class="header-image">

		<?php // Check if custom header image is linked.
		if ( '' !== $theme_options['custom_header_link'] ) : ?>

			<a href="<?php echo esc_url( $theme_options['custom_header_link'] ); ?>">
				<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id, 'full' ) ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>

		<?php else : ?>

			<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id, 'full' ) ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">

		<?php endif; ?>

		</div>

	<?php
	endif;
}
endif;


if ( ! function_exists( 'gridbox_post_image' ) ) :
/**
 * Displays the featured image on archive posts.
 *
 * @param string $size Post thumbnail size.
 * @param array  $attr Post thumbnail attributes.
 */
function gridbox_post_image( $size = 'post-thumbnail', $attr = array() ) {

	// Display Post Thumbnail.
	if ( has_post_thumbnail() ) : ?>

		<a href="<?php the_permalink(); ?>" rel="bookmark">
			<?php the_post_thumbnail( $size, $attr ); ?>
		</a>

	<?php endif;

} // gridbox_post_image()
endif;


if ( ! function_exists( 'gridbox_post_image_single' ) ) :
/**
 * Displays the featured image on single posts
 */
function gridbox_post_image_single() {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	// Display Post Thumbnail if activated.
	if ( true === $theme_options['featured_image'] ) {

		the_post_thumbnail();

	}

} // gridbox_post_image_single()
endif;


if ( ! function_exists( 'gridbox_entry_meta' ) ) :
/**
 * Displays the date, author and categories of a post
 */
function gridbox_entry_meta() {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	$postmeta = '';

	// Display date unless user has deactivated it via settings.
	if ( true === $theme_options['meta_date'] ) {

		$postmeta .= gridbox_meta_date();

	}

	// Display author unless user has deactivated it via settings.
	if ( true === $theme_options['meta_author'] ) {

		$postmeta .= gridbox_meta_author();

	}

	// Display categories unless user has deactivated it via settings.
	if ( true === $theme_options['meta_category'] ) {

		$postmeta .= gridbox_meta_category();

	}

	if ( $postmeta ) {

		echo '<div class="entry-meta">' . $postmeta . '</div>';

	}

} // gridbox_entry_meta()
endif;


if ( ! function_exists( 'gridbox_meta_date' ) ) :
/**
 * Displays the post date
 */
function gridbox_meta_date() {

	$time_string = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date published updated" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	return '<span class="meta-date">' . $time_string . '</span>';

}  // gridbox_meta_date()
endif;


if ( ! function_exists( 'gridbox_meta_author' ) ) :
/**
 * Displays the post author
 */
function gridbox_meta_author() {

	$author_string = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( esc_html__( 'View all posts by %s', 'gridbox' ), get_the_author() ) ),
		esc_html( get_the_author() )
	);

	return '<span class="meta-author"> ' . $author_string . '</span>';

}  // gridbox_meta_author()
endif;


if ( ! function_exists( 'gridbox_meta_category' ) ) :
/**
 * Displays the category of posts
 */
function gridbox_meta_category() {

	return '<span class="meta-category"> ' . get_the_category_list( ', ' ) . '</span>';

} // gridbox_meta_category()
endif;


if ( ! function_exists( 'gridbox_entry_tags' ) ) :
/**
 * Displays the post tags on single post view
 */
function gridbox_entry_tags() {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	// Get tags.
	$tag_list = get_the_tag_list( '', '' );

	// Display tags.
	if ( $tag_list && $theme_options['meta_tags'] ) : ?>

		<div class="entry-tags clearfix">
			<span class="meta-tags">
				<?php echo $tag_list; ?>
			</span>
		</div><!-- .entry-tags -->

	<?php
	endif;

} // gridbox_entry_tags()
endif;


if ( ! function_exists( 'gridbox_more_link' ) ) :
/**
 * Displays the more link on posts
 */
function gridbox_more_link() {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	// Display read more button if there is excerpt.
	if ( $theme_options['excerpt_length'] > 0 ) : ?>

		<a href="<?php echo esc_url( get_permalink() ) ?>" class="more-link"><?php esc_html_e( 'Read more', 'gridbox' ); ?></a>

	<?php
	endif;

}
endif;


if ( ! function_exists( 'gridbox_post_navigation' ) ) :
/**
 * Displays Single Post Navigation
 */
function gridbox_post_navigation() {

	// Get theme options from database.
	$theme_options = gridbox_theme_options();

	if ( true === $theme_options['post_navigation'] ) {

		the_post_navigation( array(
			'prev_text' => '<span class="screen-reader-text">' . esc_html_x( 'Previous Post:', 'post navigation', 'gridbox' ) . '</span>%title',
			'next_text' => '<span class="screen-reader-text">' . esc_html_x( 'Next Post:', 'post navigation', 'gridbox' ) . '</span>%title',
		) );

	}

}
endif;


if ( ! function_exists( 'gridbox_breadcrumbs' ) ) :
/**
 * Displays ThemeZee Breadcrumbs plugin
 */
function gridbox_breadcrumbs() {

	if ( function_exists( 'themezee_breadcrumbs' ) ) {

		themezee_breadcrumbs( array(
			'before' => '<div class="breadcrumbs-container container clearfix">',
			'after' => '</div>',
		) );

	}
}
endif;


if ( ! function_exists( 'gridbox_related_posts' ) ) :
/**
 * Displays ThemeZee Related Posts plugin
 */
function gridbox_related_posts() {

	if ( function_exists( 'themezee_related_posts' ) ) {

		themezee_related_posts( array(
			'class' => 'related-posts clearfix',
			'before_title' => '<header class="related-posts-header"><h2 class="related-posts-title">',
			'after_title' => '</h2></header>',
		) );

	}
}
endif;


if ( ! function_exists( 'gridbox_pagination' ) ) :
/**
 * Displays pagination on archive pages
 */
function gridbox_pagination() {

	global $wp_query;

	$big = 999999999; // Need an unlikely integer.

	$paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var( 'paged' ) ),
		'total' => $wp_query->max_num_pages,
		'next_text' => '<span class="screen-reader-text">' . esc_html_x( 'Next Posts', 'pagination', 'gridbox' ) . '</span>&raquo;',
		'prev_text' => '&laquo<span class="screen-reader-text">' . esc_html_x( 'Previous Posts', 'pagination', 'gridbox' ) . '</span>',
		'add_args' => false,
	) );

	// Display the pagination if more than one page is found.
	if ( $paginate_links ) : ?>

		<div class="post-pagination clearfix">
			<?php echo $paginate_links; ?>
		</div>

	<?php
	endif;

} // gridbox_pagination()
endif;


/**
 * Displays credit link on footer line
 */
function gridbox_footer_text() {
	?>

	<span class="credit-link">
		<?php printf( esc_html__( '%1$s &copy; 2016 - %2$s - %3$s - %4$s - %5$s - %6$s', 'gridbox' ),
			'<a href="http://www.ninjadevs.io" title="WordPress">ninjadevs.io</a>',
			'<a href="https://www.facebook.com/ninjadevsio" title="Facebook Page">facebook</a>',
			'<a href="https://www.facebook.com/groups/ninjadevsio" title="Facebook Group">group</a>',
			'<a href="https://twitter.com/ninjadevsio" title="Twitter">twitter</a>',
			'<a href="https://www.instagram.com/ninjadevs.io" title="Instagram">instagram</a>',
			'<a href="https://github.com/NinjaDevsIO" title="Github">github</a>'
		); ?>
	</span>

	<?php
}
add_action( 'gridbox_footer_text', 'gridbox_footer_text' );
