<?php
/**
 * Pro Version Upgrade Section
 *
 * Registers Upgrade Section for the Pro Version of the theme
 *
 * @package Gridbox
 */

/**
 * Adds pro version description and CTA button
 *
 * @param object $wp_customize / Customizer Object.
 */
function gridbox_customize_register_upgrade_settings( $wp_customize ) {

	// Add Upgrade / More Features Section.
	$wp_customize->add_section( 'gridbox_section_upgrade', array(
		'title'    => esc_html__( 'More Features', 'gridbox' ),
		'priority' => 70,
		'panel' => 'gridbox_options_panel',
		)
	);

	// Add custom Upgrade Content control.
	$wp_customize->add_setting( 'gridbox_theme_options[upgrade]', array(
		'default'           => '',
		'type'           	=> 'option',
		'transport'         => 'refresh',
		'sanitize_callback' => 'esc_attr',
		)
	);
	$wp_customize->add_control( new Gridbox_Customize_Upgrade_Control(
		$wp_customize, 'gridbox_theme_options[upgrade]', array(
		'section' => 'gridbox_section_upgrade',
		'settings' => 'gridbox_theme_options[upgrade]',
		'priority' => 1,
		)
	) );

}
add_action( 'customize_register', 'gridbox_customize_register_upgrade_settings' );
