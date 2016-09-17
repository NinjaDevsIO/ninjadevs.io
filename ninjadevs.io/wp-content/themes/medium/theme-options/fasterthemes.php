<?php

function medium_options_init() {
  register_setting('medium_options', 'medium_theme_options', 'medium_options_validate');
}

add_action('admin_init', 'medium_options_init');

function medium_options_validate($input) {
  $input['logo'] = medium_image_validation(esc_url_raw($input['logo']));

  $input['favicon'] = medium_image_validation(esc_url_raw($input['favicon']));
  $input['footertext'] = sanitize_text_field($input['footertext']);
  $input['scmessage'] = sanitize_text_field($input['scmessage']);

  $input['fburl'] = esc_url_raw($input['fburl']);
  $input['twitter'] = esc_url_raw($input['twitter']);
  $input['googleplus'] = esc_url_raw($input['googleplus']);
  $input['linkedin'] = esc_url_raw($input['linkedin']);

  $input['search-text'] = sanitize_text_field($input['search-text']);
  $input['blog-title'] = sanitize_text_field($input['blog-title']);

  return $input;
}

function medium_image_validation($medium_imge_url) {
  $medium_filetype = wp_check_filetype($medium_imge_url);

  $medium_supported_image = array('gif', 'jpg', 'jpeg', 'png', 'ico');

  if (in_array($medium_filetype['ext'], $medium_supported_image)) {
    return $medium_imge_url;
  } else {
    return '';
  }
}

function medium_framework_load_scripts() {
  wp_enqueue_media();
  wp_enqueue_style('medium_framework', get_template_directory_uri() . '/theme-options/css/fasterthemes_framework.css', false, '1.0.0');

  // Enqueue custom option panel JS
  wp_enqueue_script('options-custom', get_template_directory_uri() . '/theme-options/js/fasterthemes-custom.js', array('jquery'));
  wp_enqueue_script('media-uploader', get_template_directory_uri() . '/theme-options/js/media-uploader.js', array('jquery'));
  wp_enqueue_script('media-uploader');
}

add_action('admin_enqueue_scripts', 'medium_framework_load_scripts');

function medium_framework_menu_settings() {
  $medium_menu = array(
      'page_title' => __('medium Options', 'medium_framework'),
      'menu_title' => __('Theme Options', 'medium_framework'),
      'capability' => 'edit_theme_options',
      'menu_slug' => 'medium_framework',
      'callback' => 'medium_framework_page'
  );
  return apply_filters('medium_framework_menu', $medium_menu);
}

add_action('admin_menu', 'medium_theme_options_add_page');

function medium_theme_options_add_page() {
  $medium_menu = medium_framework_menu_settings();
  add_theme_page($medium_menu['page_title'], $medium_menu['menu_title'], $medium_menu['capability'], $medium_menu['menu_slug'], $medium_menu['callback']);
}

function medium_framework_page() {
  global $select_options;
  if (!isset($_REQUEST['settings-updated']))
    $_REQUEST['settings-updated'] = false;

  $medium_image = get_template_directory_uri() . '/theme-options/images/logo.png';
  ?>

  <div class="fasterthemes-themes">
    <form method="post" action="options.php" id="form-option" class="theme_option_ft">
      <div class="fasterthemes-header">
        <div class="logo">
          <?php
          $medium_image = get_template_directory_uri() . '/theme-options/images/logo.png';
          echo "<a href='http://fasterthemes.com' target='_blank'><img src='" . $medium_image . "' alt='FasterThemes' /></a>";
          ?>
        </div>
        <div class="header-right">
  <?php
  echo "<h1>" . __('Theme Options', 'medium') . "</h1>";
  ?>
          <div class='btn-save'>
            <input type='submit' class='button-primary' value='<?php _e('Save Options', 'medium') ?>' />
          </div>

        </div>
      </div>
      <div class="fasterthemes-details">
        <div class="fasterthemes-options">
          <div class="right-box">
            <div class="nav-tab-wrapper">
              <ul>
                <li><a id="options-group-2-tab" class="nav-tab basicsettings-tab" title="Header Settings" href="#options-group-2"><?php _e('Header Settings', 'medium') ?></a></li>
                <li><a id="options-group-3-tab" class="nav-tab socialsettings-tab" title="Footer Settings" href="#options-group-3"><?php _e('Footer Settings', 'medium') ?></a></li>            
              </ul>
            </div>
          </div>
          <div class="right-box-bg"></div>
          <div class="postbox left-box"> 
            <!--======================== F I N A L - - T H E M E - - O P T I O N ===================-->

  <?php settings_fields('medium_options');
  $medium_options = get_option('medium_theme_options');
  ?>


            <!-------------- Header group ----------------->
            <div id="options-group-2" class="group faster-inner-tabs">   
              <div class="section theme-tabs theme-logo">
                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Site Logo', 'medium') ?></a>
                <div class="faster-inner-tab-group active">
                  <div class="explain"><?php _e('Size of logo should be exactly 260x75px for best results.', 'medium') ?></div>
                  <div class="ft-control">
                    <input id="favicon-img" class="upload" type="text" name="medium_theme_options[logo]" 
                           value="<?php if (!empty($medium_options['logo'])) {
    echo esc_url($medium_options['logo']);
  } ?>" placeholder="<?php _e('No file chosen', 'medium') ?>" />
                    <input id="upload_image_button1" class="upload-button button" type="button" value="Upload" />
                    <div class="screenshot" id="favicon-image">
  <?php if (!empty($medium_options['logo'])) {
    echo "<img src='" . esc_url($medium_options['logo']) . "' /><a class='remove-image'>" . __('Remove', 'medium') . "</a>";
  } ?>
                    </div>
                  </div>

                </div>
              </div>


              <div class="section theme-tabs theme-favicon">
                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Favicon', 'medium') ?></a>
                <div class="faster-inner-tab-group">
                  <div class="explain"><?php _e('Size of favicon should be exactly 32x32px for best results.', 'medium') ?></div>
                  <div class="ft-control">
                    <input id="favicon-img" class="upload" type="text" name="medium_theme_options[favicon]" 
                           value="<?php if (!empty($medium_options['favicon'])) {
    echo esc_url($medium_options['favicon']);
  } ?>" placeholder="<?php _e('No file chosen', 'medium') ?>" />
                    <input id="upload_image_button1" class="upload-button button" type="button" value="Upload" />
                    <div class="screenshot" id="favicon-image">
  <?php if (!empty($medium_options['favicon'])) {
    echo "<img src='" . esc_url($medium_options['favicon']) . "' /><a class='remove-image'>" . __('Remove', 'medium') . "</a>";
  } ?>
                    </div>
                  </div>

                </div>
              </div>

              <div class="section theme-tabs theme-search-text">
                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Search Text', 'medium') ?></a>
                <div class="faster-inner-tab-group">              	
                  <div class="ft-control">
                    <div class="explain"><?php _e('Search text display in the search popup.', 'medium') ?></div>
                    <input id="scmessage" name="medium_theme_options[search-text]" type="text" value="<?php if (!empty($medium_options['search-text'])) {
    echo wp_filter_nohtml_kses($medium_options['search-text']);
  } ?>" placeholder="<?php _e('i.e. Find Portfolio,Blog and contact', 'medium') ?>" size="32" />
                  </div>

                </div>
              </div>

              <div class="section theme-tabs theme-blog-title">
                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Blog Title', 'medium') ?></a>
                <div class="faster-inner-tab-group">              	
                  <div class="ft-control">
                    <div class="explain"><?php _e('Blog title display in the blog page.', 'medium') ?></div>
                    <input id="scmessage" name="medium_theme_options[blog-title]" type="text" value="<?php if (!empty($medium_options['blog-title'])) {
    echo wp_filter_nohtml_kses($medium_options['blog-title']);
  } ?>" placeholder="<?php _e('i.e. Blog', 'medium') ?>" size="32" />
                  </div>

                </div>
              </div>
            </div>

            <!-------------- Third group ----------------->
            <div id="options-group-3" class="group faster-inner-tabs">            
              <div id="section-footertext2" class="section theme-tabs">
                <a class="heading faster-inner-tab active" href="javascript:void(0)"><?php _e('Copyright Text', 'medium') ?></a>
                <div class="faster-inner-tab-group active">
                  <div class="ft-control">
                    <div class="explain"><?php _e('Some text regarding copyright of your site, you would like to display in the footer.', 'medium') ?></div>                
                    <input type="text" id="footertext2" class="of-input" name="medium_theme_options[footertext]" size="32"  value="<?php if (!empty($medium_options['footertext'])) {
    echo esc_attr($medium_options['footertext']);
  } ?>">
                  </div>                
                </div>
              </div>

              <div id="section-social" class="section theme-tabs">
                <a class="heading faster-inner-tab" href="javascript:void(0)"><?php _e('Social Media', 'medium') ?></a>
                <div class="faster-inner-tab-group">
                  <div class="ft-control">
                    <div class="explain"><?php _e('Social Media Message', 'medium') ?></div>
                    <input id="scmessage" name="medium_theme_options[scmessage]" type="text" value="<?php if (!empty($medium_options['scmessage'])) {
    echo wp_filter_nohtml_kses($medium_options['scmessage']);
  } ?>" placeholder="<?php _e('i.e. Connect With Me', 'medium') ?>" size="32" />
                  </div>
                  <div class="ft-control">
                    <div class="explain"><?php _e('Facebook profile', 'medium') ?></div>                
                    <input id="facebook" name="medium_theme_options[fburl]" type="text" value="<?php if (!empty($medium_options['fburl'])) {
    echo esc_url($medium_options['fburl']);
  } ?>" placeholder="http://facebook.com/username/" size="32" />
                  </div>
                  <div class="ft-control">
                    <div class="explain"><?php _e('Twitter profile', 'medium') ?></div>                
                    <input id="twitter" name="medium_theme_options[twitter]" type="text" value="<?php if (!empty($medium_options['twitter'])) {
    echo esc_url($medium_options['twitter']);
  } ?>" placeholder="http://www.twitter.com/username/" size="32" />
                  </div>
                  <div class="ft-control">
                    <div class="explain"><?php _e('Google Plus profile', 'medium') ?></div>                
                    <input id="googleplus" name="medium_theme_options[googleplus]" type="text" value="<?php if (!empty($medium_options['googleplus'])) {
    echo esc_url($medium_options['googleplus']);
  } ?>" placeholder="https://plus.google.com/username/" size="32" />
                  </div>
                  <div class="ft-control">
                    <div class="explain"><?php _e('Linkedin profile', 'medium') ?></div>                
                    <input id="linkedin" name="medium_theme_options[linkedin]" type="text" value="<?php if (!empty($medium_options['linkedin'])) {
    echo esc_url($medium_options['linkedin']);
  } ?>" placeholder="http://www.linkedin.com/company/username/" size="32" />
                  </div>                
                </div>
              </div>
            </div>


            <!-------------- End group ----------------->         


            <!--======================== F I N A L - - T H E M E - - O P T I O N S ===================--> 
          </div>
        </div>
      </div>
      <div class="fasterthemes-footer">
        <ul>
          <li class="btn-save"><input type="submit" class="button-primary" value="<?php _e('Save options', 'medium') ?>" /></li>
        </ul>
      </div>
    </form>    
  </div>
  <div class="save-options"><h2><?php _e('Options saved successfully.', 'medium'); ?></h2></div>
<?php }
?>
