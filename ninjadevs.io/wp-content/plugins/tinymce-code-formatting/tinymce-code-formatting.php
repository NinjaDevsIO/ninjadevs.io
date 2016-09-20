<?php
/**
 * @package TinyMCE Code Formatting
 * @version 1.0.0
 */
/*
Plugin Name: TinyMCE Code Formatting
Description: Adds the Pre and Code buttons to the TinyMCE toolbar with customizable shortcuts
Author: mortalis
Version: 1.0.0
Released under the GPL version 2.0, http://www.gnu.org/licenses/gpl-2.0.html
*/


/*
 * Gets shortcut options from the database and puts them to the variables in the inline script
 * for the 'plugin.js' script
 * Then adds the plugin with buttons to the TinyMCE plugins set
 */
function mcecode_add_buttons($plugin_array) {
  $pre_shortcut="Ctrl+Q";
  $code_shortcut="Ctrl+D";
  
  $shortcuts=get_option('mcecode_options');
  if($shortcuts){
    $pre=$shortcuts['pre_shortcut'];
    $code=$shortcuts['code_shortcut'];
    
    if($pre) $pre_shortcut=$shortcuts['pre_shortcut'];
    if($code) $code_shortcut=$shortcuts['code_shortcut'];
  }
  
  ?>
    <script>
      var pre_shortcut='<?php echo $pre_shortcut; ?>';
      var code_shortcut='<?php echo $code_shortcut; ?>';
    </script>
  <?php
  
  $plugin_array['codeFormatting'] = plugins_url('mce-pre', __FILE__) . '/plugin.js';
  return $plugin_array;
}

/*
 * Adds plugin buttons to the TinyMCE toolbar output
 */
function mcecode_register_buttons($buttons) {
  array_push( $buttons, 'preButton','codeButton');
  return $buttons;
}

/*
 * Adds filters for TinyMCE plugin loading and adding buttons to the toolbar
 * Adds plugin options page to the Settings submenu
 */
function mcecode_buttons() {
  add_filter('mce_external_plugins', 'mcecode_add_buttons');
  add_filter('mce_buttons', 'mcecode_register_buttons');
  include_once(plugin_dir_path( __FILE__).'lib/options.php');
}
add_action( 'init', 'mcecode_buttons' );

/*
 * Adds styles and scripts for options page and edit post page separately
 */
function mcecode_options_script( $hook ) {
  $hooks=array(
    'post-new.php',
    'post.php',
    'settings_page_mce-code-formatting',
  );
  
  if ( in_array($hook, $hooks)) {
    wp_enqueue_script( 'mcecode-functions', plugins_url('lib/functions.js', __FILE__), '', '1.0.0');
  }
  
  if ( 'settings_page_mce-code-formatting' == $hook ) {
    wp_enqueue_style( 'mcecode-options' , plugins_url('lib/options.css', __FILE__) );
    wp_enqueue_script( 'mcecode-options', plugins_url('lib/options.js', __FILE__), array('jquery'), '1.0.0', true );
  }
}
add_action( 'admin_enqueue_scripts', 'mcecode_options_script' );
