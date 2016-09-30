<?php
/**
 * Theme Info
 *
 * Adds a simple Theme Info page to the Appearance section of the WordPress Dashboard.
 *
 * @package Gridbox
 */

/**
 * Add Theme Info page to admin menu
 */
function gridbox_theme_info_menu_link() {

	// Get theme details.
	$theme = wp_get_theme();

	add_theme_page(
		sprintf( esc_html__( 'Welcome to %1$s %2$s', 'gridbox' ), $theme->get( 'Name' ), $theme->get( 'Version' ) ),
		esc_html__( 'Theme Info', 'gridbox' ),
		'edit_theme_options',
		'gridbox',
		'gridbox_theme_info_page'
	);

}
add_action( 'admin_menu', 'gridbox_theme_info_menu_link' );

/**
 * Display Theme Info page
 */
function gridbox_theme_info_page() {

	// Get theme details.
	$theme = wp_get_theme();
	?>

	<div class="wrap theme-info-wrap">

		<h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'gridbox' ), $theme->get( 'Name' ), $theme->get( 'Version' ) ); ?></h1>

		<div class="theme-description"><?php echo $theme->get( 'Description' ); ?></div>

		<hr>
		<div class="important-links clearfix">
			<p><strong><?php esc_html_e( 'Theme Links', 'gridbox' ); ?>:</strong>
				<a href="<?php echo esc_url( __( 'https://themezee.com/themes/gridbox/', 'gridbox' ) . '?utm_source=theme-info&utm_medium=textlink&utm_campaign=gridbox&utm_content=theme-page' ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'gridbox' ); ?></a>
				<a href="http://preview.themezee.com/gridbox/?utm_source=theme-info&utm_medium=textlink&utm_campaign=gridbox&utm_content=demo" target="_blank"><?php esc_html_e( 'Theme Demo', 'gridbox' ); ?></a>
				<a href="<?php echo esc_url( __( 'https://themezee.com/docs/gridbox-documentation/', 'gridbox' ) . '?utm_source=theme-info&utm_medium=textlink&utm_campaign=gridbox&utm_content=documentation' ); ?>" target="_blank"><?php esc_html_e( 'Theme Documentation', 'gridbox' ); ?></a>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/gridbox/reviews/?filter=5', 'gridbox' ) ); ?>" target="_blank"><?php esc_html_e( 'Rate this theme', 'gridbox' ); ?></a>
			</p>
		</div>
		<hr>

		<div id="getting-started">

			<h3><?php printf( esc_html__( 'Getting Started with %s', 'gridbox' ), $theme->get( 'Name' ) ); ?></h3>

			<div class="columns-wrapper clearfix">

				<div class="column column-half clearfix">

					<div class="section">
						<h4><?php esc_html_e( 'Theme Documentation', 'gridbox' ); ?></h4>

						<p class="about">
							<?php esc_html_e( 'You need help to setup and configure this theme? We got you covered with an extensive theme documentation on our website.', 'gridbox' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( __( 'https://themezee.com/docs/gridbox-documentation/', 'gridbox' ) . '?utm_source=theme-info&utm_medium=button&utm_campaign=gridbox&utm_content=documentation' ); ?>" target="_blank" class="button button-secondary">
								<?php printf( esc_html__( 'View %s Documentation', 'gridbox' ), 'Gridbox' ); ?>
							</a>
						</p>
					</div>

					<div class="section">
						<h4><?php esc_html_e( 'Theme Options', 'gridbox' ); ?></h4>

						<p class="about">
							<?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'gridbox' ), $theme->get( 'Name' ) ); ?>
						</p>
						<p>
							<a href="<?php echo admin_url( 'customize.php' ); ?>" class="button button-primary"><?php esc_html_e( 'Customize Theme', 'gridbox' ); ?></a>
						</p>
					</div>

				</div>

				<div class="column column-half clearfix">

					<img src="<?php echo get_template_directory_uri(); ?>/screenshot.jpg" />

				</div>

			</div>

		</div>

		<hr>

		<div id="more-features">

			<h3><?php esc_html_e( 'Get more features', 'gridbox' ); ?></h3>

			<div class="columns-wrapper clearfix">

				<div class="column column-half clearfix">

					<div class="section">
						<h4><?php esc_html_e( 'Pro Version Add-on', 'gridbox' ); ?></h4>

						<p class="about">
							<?php printf( esc_html__( 'Purchase the %s Pro Add-on and get additional features and advanced customization options.', 'gridbox' ), 'Gridbox' ); ?>
						</p>
						<p>
							<a href="<?php echo esc_url( __( 'https://themezee.com/addons/gridbox-pro/', 'gridbox' ) . '?utm_source=theme-info&utm_medium=button&utm_campaign=gridbox&utm_content=pro-version' ); ?>" target="_blank" class="button button-secondary">
								<?php printf( esc_html__( 'Learn more about %s Pro', 'gridbox' ), 'Gridbox' ); ?>
							</a>
						</p>
					</div>

				</div>

				<div class="column column-half clearfix">

					<div class="section">
						<h4><?php esc_html_e( 'Recommended Plugins', 'gridbox' ); ?></h4>

						<p class="about">
							<?php esc_html_e( 'Extend the functionality of your WordPress website with our free and easy to use plugins.', 'gridbox' ); ?>
						</p>
						<p>
							<a href="<?php echo admin_url( 'plugin-install.php?tab=search&type=author&s=themezee' ); ?>" class="button button-secondary">
								<?php esc_html_e( 'Install Plugins', 'gridbox' ); ?>
							</a>
						</p>
					</div>

				</div>

			</div>

		</div>

		<hr>

		<div id="theme-author">

			<p><?php printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'gridbox' ),
				$theme->get( 'Name' ),
				'<a target="_blank" href="' . __( 'https://themezee.com/', 'gridbox' ) . '?utm_source=theme-info&utm_medium=footer&utm_campaign=gridbox" title="ThemeZee">ThemeZee</a>',
				'<a target="_blank" href="' . __( 'https://wordpress.org/support/theme/gridbox/reviews/?filter=5', 'gridbox' ) . '" title="' . esc_attr__( 'Review Gridbox', 'gridbox' ) . '">' . esc_html__( 'rate it', 'gridbox' ) . '</a>'); ?>
			</p>

		</div>

	</div>

	<?php
}

/**
 * Enqueues CSS for Theme Info page
 *
 * @param int $hook Hook suffix for the current admin page.
 */
function gridbox_theme_info_page_css( $hook ) {

	// Load styles and scripts only on theme info page.
	if ( 'appearance_page_gridbox' != $hook ) {
		return;
	}

	// Embed theme info css style.
	wp_enqueue_style( 'gridbox-theme-info-css', get_template_directory_uri() .'/css/theme-info.css' );

}
add_action( 'admin_enqueue_scripts', 'gridbox_theme_info_page_css' );
