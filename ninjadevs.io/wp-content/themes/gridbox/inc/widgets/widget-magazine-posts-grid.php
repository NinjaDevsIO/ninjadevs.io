<?php
/**
 * Magazine Posts Grid Widget
 *
 * Display the latest posts from a selected category in a grid layout.
 * Intented to be used in the Magazine Homepage widget area to built a magazine layouted page.
 *
 * @package Gridbox
 */

/**
 * Magazine Widget Class
 */
class Gridbox_Magazine_Posts_Grid_Widget extends WP_Widget {

	/**
	 * Widget Constructor
	 */
	function __construct() {

		// Setup Widget.
		parent::__construct(
			'gridbox-magazine-posts-grid', // ID.
			sprintf( esc_html__( 'Magazine Posts: Grid (%s)', 'gridbox' ), wp_get_theme()->Name ), // Name.
			array(
				'classname' => 'gridbox_magazine_posts_grid',
				'description' => esc_html__( 'Displays your posts from a selected category in a grid layout. Please use this widget ONLY in the Magazine Homepage widget area.', 'gridbox' ),
				'customize_selective_refresh' => true,
			) // Args.
		);

		// Delete Widget Cache on certain actions.
		add_action( 'save_post', array( $this, 'delete_widget_cache' ) );
		add_action( 'deleted_post', array( $this, 'delete_widget_cache' ) );
		add_action( 'switch_theme', array( $this, 'delete_widget_cache' ) );

	}


	/**
	 * Set default settings of the widget
	 */
	private function default_settings() {

		$defaults = array(
			'title'				=> '',
			'category'			=> 0,
			'layout'			=> 'three-columns-grid',
			'number'			=> 3,
			'excerpt_length'	=> 0,
			'meta_date'			=> true,
			'meta_author'		=> true,
			'meta_category'		=> true,
		);

		return $defaults;

	}


	/**
	 * Main Function to display the widget
	 *
	 * @uses this->render()
	 *
	 * @param array $args / Parameters from widget area created with register_sidebar().
	 * @param array $instance / Settings for this widget instance.
	 */
	function widget( $args, $instance ) {

		$cache = array();

		// Get Widget Object Cache.
		if ( ! $this->is_preview() ) {
			$cache = wp_cache_get( 'widget_gridbox_magazine_posts_grid', 'widget' );
		}
		if ( ! is_array( $cache ) ) {
			$cache = array();
		}

		// Display Widget from Cache if exists.
		if ( isset( $cache[ $this->id ] ) ) {
			echo $cache[ $this->id ];
			return;
		}

		// Start Output Buffering.
		ob_start();

		// Get Widget Settings.
		$settings = wp_parse_args( $instance, $this->default_settings() );

		// Set Excerpt Length.
		$this->excerpt_length = (int) $settings['excerpt_length'];

		// Output.
		echo $args['before_widget'];
		?>

		<div class="widget-magazine-posts-grid widget-magazine-posts clearfix">

			<?php // Display Title.
			$this->widget_title( $args, $settings ); ?>

			<div class="widget-magazine-posts-content">

				<?php $this->render( $settings ); ?>

			</div>

		</div>

		<?php
		echo $args['after_widget'];

		// Set Cache.
		if ( ! $this->is_preview() ) {
			$cache[ $this->id ] = ob_get_flush();
			wp_cache_set( 'widget_gridbox_magazine_posts_grid', $cache, 'widget' );
		} else {
			ob_end_flush();
		}

	} // widget()


	/**
	 * Renders the Widget Content
	 *
	 * Switches between two or three column layout style based on widget settings
	 *
	 * @uses this->magazine_posts_two_column_grid() or this->magazine_posts_three_column_grid()
	 * @used-by this->widget()
	 *
	 * @param array $settings / Settings for this widget instance.
	 */
	function render( $settings ) {

		// Get latest posts from database.
		$query_arguments = array(
			'posts_per_page' => (int) $settings['number'],
			'ignore_sticky_posts' => true,
			'cat' => (int) $settings['category'],
		);
		$posts_query = new WP_Query( $query_arguments );
		$i = 0;

		// Check if there are posts.
		if ( $posts_query->have_posts() ) :

			// Limit the number of words for the excerpt.
			add_filter( 'excerpt_length', array( $this, 'excerpt_length' ) ); ?>

			<div class="magazine-grid magazine-<?php echo esc_attr( $settings['layout'] ); ?>">

				<?php
				// Display Posts.
				while ( $posts_query->have_posts() ) : $posts_query->the_post(); ?>

					<div class="magazine-grid-post clearfix">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

							<?php gridbox_post_image(); ?>

							<header class="entry-header">

								<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

								<?php $this->entry_meta( $settings ); ?>

							</header><!-- .entry-header -->

							<?php if ( $settings['excerpt_length'] > 0 ) : ?>

								<div class="entry-content entry-excerpt clearfix">

									<?php the_excerpt(); ?>

									<a href="<?php echo esc_url( get_permalink() ) ?>" class="more-link"><?php esc_html_e( 'Read more', 'gridbox' ); ?></a>

								</div><!-- .entry-content -->

							<?php endif; ?>

						</article>

					</div>

				<?php endwhile; ?>

			</div>

			<?php
			// Remove excerpt filter.
			remove_filter( 'excerpt_length', array( $this, 'excerpt_length' ) );

		endif;

		// Reset Postdata.
		wp_reset_postdata();

	} // render()


	/**
	 * Displays Entry Meta of Posts
	 *
	 * @param array $settings / Settings for this widget instance.
	 */
	function entry_meta( $settings ) {

		$postmeta = '';

		if ( true === $settings['meta_date'] ) {

			$postmeta .= gridbox_meta_date();

		}

		if ( true === $settings['meta_author'] ) {

			$postmeta .= gridbox_meta_author();

		}

		if ( true === $settings['meta_category'] ) {

			$postmeta .= gridbox_meta_category();

		}

		if ( $postmeta ) {

			echo '<div class="entry-meta">' . $postmeta . '</div>';

		}

	} // entry_meta()


	/**
	 * Returns the excerpt length in number of words
	 *
	 * @param int $length Length of excerpt in number of words.
	 * @return integer $this->excerpt_length Number of Words
	 */
	function excerpt_length( $length ) {
		return $this->excerpt_length;
	}


	/**
	 * Displays Widget Title
	 *
	 * @param array $args / Parameters from widget area created with register_sidebar().
	 * @param array $settings / Settings for this widget instance.
	 */
	function widget_title( $args, $settings ) {

		// Add Widget Title Filter.
		$widget_title = apply_filters( 'widget_title', $settings['title'], $settings, $this->id_base );

		if ( ! empty( $widget_title ) ) :

			// Link Category Title.
			if ( $settings['category'] > 0 ) :

				// Set Link URL and Title for Category.
				$link_title = sprintf( esc_html__( 'View all posts from category %s', 'gridbox' ), get_cat_name( $settings['category'] ) );
				$link_url = esc_url( get_category_link( $settings['category'] ) );

				// Display Widget Title with link to category archive.
				echo '<div class="widget-header">';
				echo '<h3 class="widget-title"><a class="category-archive-link" href="'. $link_url .'" title="'. $link_title . '">'. $widget_title . '</a></h3>';
				echo '<div class="category-description">' . category_description( $settings['category'] ) . '</div>';
				echo '</div>';

			else :

				// Display default Widget Title without link.
				echo $args['before_title'] . $widget_title . $args['after_title'];

			endif;

		endif;

	} // widget_title()


	/**
	 * Update Widget Settings
	 *
	 * @param array $new_instance / New Settings for this widget instance.
	 * @param array $old_instance / Old Settings for this widget instance.
	 * @return array $instance
	 */
	function update( $new_instance, $old_instance ) {

		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['category'] = (int) $new_instance['category'];
		$instance['layout'] = esc_attr( $new_instance['layout'] );
		$instance['number'] = (int) $new_instance['number'];
		$instance['excerpt_length'] = (int) $new_instance['excerpt_length'];
		$instance['meta_date'] = ! empty( $new_instance['meta_date'] );
		$instance['meta_author'] = ! empty( $new_instance['meta_author'] );
		$instance['meta_category'] = ! empty( $new_instance['meta_category'] );

		$this->delete_widget_cache();

		return $instance;
	}


	/**
	 * Displays Widget Settings Form in the Backend
	 *
	 * @param array $instance / Settings for this widget instance.
	 */
	function form( $instance ) {

		// Get Widget Settings.
		$settings = wp_parse_args( $instance, $this->default_settings() );
		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:', 'gridbox' ); ?>
				<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $settings['title']; ?>" />
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'category' ); ?>"><?php esc_html_e( 'Category:', 'gridbox' ); ?></label><br/>
			<?php // Display Category Select.
				$args = array(
					'show_option_all'    => esc_html__( 'All Categories', 'gridbox' ),
					'show_count' 		 => true,
					'hide_empty'		 => false,
					'selected'           => $settings['category'],
					'name'               => $this->get_field_name( 'category' ),
					'id'                 => $this->get_field_id( 'category' ),
				);
				wp_dropdown_categories( $args );
			?>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'layout' ); ?>"><?php esc_html_e( 'Grid Layout:', 'gridbox' ); ?></label><br/>
			<select id="<?php echo $this->get_field_id( 'layout' ); ?>" name="<?php echo $this->get_field_name( 'layout' ); ?>">
				<option <?php selected( $settings['layout'], 'two-columns-grid' ); ?> value="two-columns-grid" ><?php esc_html_e( 'Two Columns', 'gridbox' ); ?></option>
				<option <?php selected( $settings['layout'], 'three-columns-grid' ); ?> value="three-columns-grid" ><?php esc_html_e( 'Three Columns', 'gridbox' ); ?></option>
				<option <?php selected( $settings['layout'], 'four-columns-grid' ); ?> value="four-columns-grid" ><?php esc_html_e( 'Four Columns', 'gridbox' ); ?></option>
			</select>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php esc_html_e( 'Number of posts:', 'gridbox' ); ?>
				<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $settings['number']; ?>" size="3" />
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'excerpt_length' ); ?>"><?php esc_html_e( 'Excerpt Length:', 'gridbox' ); ?>
				<input id="<?php echo $this->get_field_id( 'excerpt_length' ); ?>" name="<?php echo $this->get_field_name( 'excerpt_length' ); ?>" type="text" value="<?php echo $settings['excerpt_length']; ?>" size="6" />
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'meta_date' ); ?>">
				<input class="checkbox" type="checkbox" <?php checked( $settings['meta_date'] ); ?> id="<?php echo $this->get_field_id( 'meta_date' ); ?>" name="<?php echo $this->get_field_name( 'meta_date' ); ?>" />
				<?php esc_html_e( 'Display post date', 'gridbox' ); ?>
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'meta_author' ); ?>">
				<input class="checkbox" type="checkbox" <?php checked( $settings['meta_author'] ); ?> id="<?php echo $this->get_field_id( 'meta_author' ); ?>" name="<?php echo $this->get_field_name( 'meta_author' ); ?>" />
				<?php esc_html_e( 'Display post author', 'gridbox' ); ?>
			</label>
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'meta_category' ); ?>">
				<input class="checkbox" type="checkbox" <?php checked( $settings['meta_category'] ); ?> id="<?php echo $this->get_field_id( 'meta_category' ); ?>" name="<?php echo $this->get_field_name( 'meta_category' ); ?>" />
				<?php esc_html_e( 'Display post categories', 'gridbox' ); ?>
			</label>
		</p>

		<?php

	} // form()


	/**
	 * Delete Widget Cache
	 */
	public function delete_widget_cache() {

		wp_cache_delete( 'widget_gridbox_magazine_posts_grid', 'widget' );

	}
}

/**
 * Register Widget
 */
function gridbox_register_magazine_posts_grid_widget() {

	register_widget( 'Gridbox_Magazine_Posts_Grid_Widget' );

}
add_action( 'widgets_init', 'gridbox_register_magazine_posts_grid_widget' );
