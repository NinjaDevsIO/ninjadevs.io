<?php

add_action( 'admin_init', 'mcecode_options_init' );
add_action( 'admin_menu', 'mcecode_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function mcecode_options_init(){
  register_setting('mcecode_options_group', 'mcecode_options', 'mcecode_options_validate');
}

/**
 * Load up the menu page
 */
function mcecode_options_add_page() {
  add_options_page( 'TinyMCE Code Formatting', 'TinyMCE Code Formatting', 'manage_options', 'mce-code-formatting', 'mcecode_options_do_page' );
}

/**
 * Create the options page and process requests
 */
function mcecode_options_do_page() {
  ?>
  
  <div class="wrap">
    <h2><?php echo __( 'TinyMCE Code Formatting: Plugin Options', 'mcecode' )?></h2>

    <form method="post" action="options.php">
      <?php settings_fields('mcecode_options_group') ?>

      <p class="mcecode-option">
        <label for="mcecode_options[pre_shortcut]"><?php _e('Pre Button Shortcut','mcecode') ?></label>&nbsp;
        <input type="text" id="mcecode_options[pre_shortcut]" name="mcecode_options[pre_shortcut]" value="<?php mcecode_text_opt('pre_shortcut') ?>" autofocus />
      </p>
      
      <p class="mcecode-option">
        <label for="mcecode_options[code_shortcut]"><?php _e('Code Button Shortcut','mcecode') ?></label>&nbsp;
        <input type="text" id="mcecode_options[code_shortcut]" name="mcecode_options[code_shortcut]" value="<?php mcecode_text_opt('code_shortcut') ?>" />
      </p>
      
      <p class="description">Press a key combination or type it manually</p>
      
      <p> <?php submit_button(); ?> </p>
    </form>
  </div>
  
  <?php
}

/**
 * Validation function for checkboxes and textarea
 */
function mcecode_options_validate($input) {
  $input['pre_shortcut'] = sanitize_text_field( $input['pre_shortcut'] );
  $input['code_shortcut'] = sanitize_text_field( $input['code_shortcut'] );
  
  return $input;
}

/*
 * Sanitizes text options from the database
 */
function mcecode_text_opt($name){
  echo sanitize_text_field(mcecode_opt($name));
}

/*
 * Gets option value from the database by its name
 */
function mcecode_opt($name){
  $options = get_option( 'mcecode_options' );
  if($options && isset($options[$name]))
    return $options[$name];
  return false;
}
