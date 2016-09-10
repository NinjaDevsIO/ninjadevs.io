<?php
require get_template_directory() . '/functions/class-tgm-plugin-activation.php';

add_action( 'medium_register', 'medium_theme_register_plugins' );
/* Register the required plugins for this theme. */
function medium_theme_register_plugins() {
 /*Array of plugin arrays. Required keys are name and slug. */
    $medium_plugins = array(
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
         array(
            'name'      => __('Faster Pagination','medium'),
            'slug'      => 'faster-pagination',
            'required'  => false,
        ),
    );

    /*  Array of configuration settings. Amend each line as needed. */
    $medium_config = array(
        'id'           => 'medium',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'medium-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'medium' ),
            'menu_title'                      => __( 'Install Plugins', 'medium' ),
            'installing'                      => __( 'Installing Plugin: %s', 'medium' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'medium' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'medium' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'medium' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'medium' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'medium' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'medium' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'medium' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'medium' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'medium' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'medium' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'medium' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'medium' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'medium' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'medium' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
    medium( $medium_plugins, $medium_config );
}
