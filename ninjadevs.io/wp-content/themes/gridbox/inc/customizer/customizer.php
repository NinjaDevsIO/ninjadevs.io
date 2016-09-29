<?php
/**
 * Implement theme options in the Customizer
 *
 * @package Gridbox
 */

// Load Customizer Helper Functions.
require( get_template_directory() . '/inc/customizer/functions/custom-controls.php' );
require( get_template_directory() . '/inc/customizer/functions/sanitize-functions.php' );

// Load Customizer Section Files.
require( get_template_directory() . '/inc/customizer/sections/customizer-general.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-post.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-featured.php' );
require( get_template_directory() . '/inc/customizer/sections/customizer-upgrade.php' );

/**
 * Registers Theme Options panel and sets up some WordPress core settings
 *
 * @param object $wp_customize / Customizer Object.
 */
function gridbox_customize_register_options( $wp_customize ) {

	// Add Theme Options Panel.
	$wp_customize->add_panel( 'gridbox_options_panel', array(
		'priority'       => 180,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => esc_html__( 'Theme Options', 'gridbox' ),
		'description'    => gridbox_customize_theme_links(),
	) );

	// Add postMessage support for site title and description.
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	// Change default background section.
	$wp_customize->get_control( 'background_color' )->section   = 'background_image';
	$wp_customize->get_section( 'background_image' )->title     = esc_html__( 'Background', 'gridbox' );

	// Add Display Site Title Setting.
	$wp_customize->add_setting( 'gridbox_theme_options[site_title]', array(
		'default'           => true,
		'type'           	=> 'option',
		'transport'         => 'refresh',
		'sanitize_callback' => 'gridbox_sanitize_checkbox',
		)
	);
	$wp_customize->add_control( 'gridbox_theme_options[site_title]', array(
		'label'    => esc_html__( 'Display Site Title', 'gridbox' ),
		'section'  => 'title_tagline',
		'settings' => 'gridbox_theme_options[site_title]',
		'type'     => 'checkbox',
		'priority' => 10,
		)
	);

	// Add Header Image Link.
	$wp_customize->add_setting( 'gridbox_theme_options[custom_header_link]', array(
		'default'           => '',
		'type'           	=> 'option',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_url',
		)
	);
	$wp_customize->add_control( 'gridbox_control_custom_header_link', array(
		'label'    => esc_html__( 'Header Image Link', 'gridbox' ),
		'section'  => 'header_image',
		'settings' => 'gridbox_theme_options[custom_header_link]',
		'type'     => 'url',
		'priority' => 10,
		)
	);

	// Add Custom Header Hide Checkbox.
	$wp_customize->add_setting( 'gridbox_theme_options[custom_header_hide]', array(
		'default'           => false,
		'type'           	=> 'option',
		'transport'         => 'refresh',
		'sanitize_callback' => 'gridbox_sanitize_checkbox',
		)
	);
	$wp_customize->add_control( 'gridbox_control_custom_header_hide', array(
		'label'    => esc_html__( 'Hide header image on front page', 'gridbox' ),
		'section'  => 'header_image',
		'settings' => 'gridbox_theme_options[custom_header_hide]',
		'type'     => 'checkbox',
		'priority' => 15,
		)
	);

} // gridbox_customize_register_options()
add_action( 'customize_register', 'gridbox_customize_register_options' );


/**
 * Embed JS file to make Theme Customizer preview reload changes asynchronously.
 */
function gridbox_customize_preview_js() {
	wp_enqueue_script( 'gridbox-customizer-preview', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151202', true );
}
add_action( 'customize_preview_init', 'gridbox_customize_preview_js' );


/**
 * Embed CSS styles for the theme options in the Customizer
 */
function gridbox_customize_preview_css() {
	wp_enqueue_style( 'gridbox-customizer-css', get_template_directory_uri() . '/css/customizer.css', array(), '20160915' );
}
add_action( 'customize_controls_print_styles', 'gridbox_customize_preview_css' );

/**
 * Returns Theme Links
 */
function gridbox_customize_theme_links() {

	ob_start();
	?>

		<div class="theme-links">

			<span class="customize-control-title"><?php esc_html_e( 'Theme Links', 'gridbox' ); ?></span>

			<p>
				<a href="<?php echo esc_url( __( 'https://themezee.com/themes/gridbox/', 'gridbox' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=gridbox&utm_content=theme-page" target="_blank">
					<?php esc_html_e( 'Theme Page', 'gridbox' ); ?>
				</a>
			</p>

			<p>
				<a href="http://preview.themezee.com/gridbox/?utm_source=theme-info&utm_medium=textlink&utm_campaign=gridbox&utm_content=demo" target="_blank">
					<?php esc_html_e( 'Theme Demo', 'gridbox' ); ?>
				</a>
			</p>

			<p>
				<a href="<?php echo esc_url( __( 'https://themezee.com/docs/gridbox-documentation/', 'gridbox' ) ); ?>?utm_source=customizer&utm_medium=textlink&utm_campaign=gridbox&utm_content=documentation" target="_blank">
					<?php esc_html_e( 'Theme Documentation', 'gridbox' ); ?>
				</a>
			</p>

			<p>
				<a href="<?php echo esc_url( __( 'https://wordpress.org/support/theme/gridbox/reviews/?filter=5', 'gridbox' ) ); ?>" target="_blank">
					<?php esc_html_e( 'Rate this theme', 'gridbox' ); ?>
				</a>
			</p>

		</div>

	<?php
	$theme_links = ob_get_contents();
	ob_end_clean();

	return $theme_links;
}
