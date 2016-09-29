<?php

//ADD XFBML
add_filter('language_attributes', 'fbcomments_schema');
function fbcomments_schema($attr) {
	$options = get_option('fbcomments');
if (!isset($options['fbns'])) {$options['fbns'] = "";}
if (!isset($options['opengraph'])) {$options['opengraph'] = "";}
	if ($options['opengraph'] == 'on') {$attr .= "\n xmlns:og=\"http://ogp.me/ns#\"";}
	if ($options['fbns'] == 'on') {$attr .= "\n xmlns:fb=\"http://ogp.me/ns/fb#\"";}
	return $attr;
}

//ADD OPEN GRAPH META
function fbgraphinfo() {
	$options = get_option('fbcomments');
	if (!empty($options['appID'])) {
		echo '<meta property="fb:app_id" content="'.$options['appID'].'"/>';
	}
	if (!empty($options['mods'])) {
		echo '<meta property="fb:admins" content="'.$options['mods'].'"/>';
	}
}
add_action('wp_head', 'fbgraphinfo');


function fbmlsetup() {
$options = get_option('fbcomments');
if (!isset($options['fbml'])) {$options['fbml'] = "";}
if ($options['fbml'] == 'on') {
?>
<!-- Facebook Comments Plugin for WordPress: http://peadig.com/wordpress-plugins/facebook-comments/ -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $options['language']; ?>/sdk.js#xfbml=1&appId=<?php echo $options['appID']; ?>&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php }}
add_action('wp_footer', 'fbmlsetup', 100);



//COMMENT BOX
function fbcommentbox($content) {
	$options = get_option('fbcomments');
	if (!isset($options['html5'])) {$options['html5'] = "off";}
	if (!isset($options['linklove'])) {$options['linklove'] = "off";}
	if (!isset($options['posts'])) {$options['posts'] = "off";}
	if (!isset($options['pages'])) {$options['pages'] = "off";}
	if (!isset($options['homepage'])) {$options['homepage'] = "off";}
	if (!isset($options['count'])) {$options['count'] = "off";}
	if (!isset($options['commentcount'])) {$options['commentcount'] = "";}
	if (
	   (is_single() && $options['posts'] == 'on') ||
       (is_page() && $options['pages'] == 'on') ||
       ((is_home() || is_front_page()) && $options['homepage'] == 'on')) {

	$custom_fields = get_post_custom();
    if (!empty($custom_fields)) {
        foreach ($custom_fields as $field_key => $field_values) {
            foreach ($field_values as $key => $value)
                $post_meta[$field_key] = $value; // builds array
        }
    }
    if (!isset($post_meta['_disable_fbc'])) {$post_meta['_disable_fbc'] = "off";}

	if ($post_meta['_disable_fbc'] !='on') {
		if ($options['count'] == 'on') {
			if ($options['countstyle'] == '') {
				$commentcount = "<p>";
			} else {
				$commentcount = "<p class=\"".$options['countstyle']."\">";
			}
			$commentcount .= "<fb:comments-count href=".get_permalink()."></fb:comments-count> ".$options['countmsg']."</p>";
		}
        $commenttitle = '';
		if ($options['title'] != '') {
			if ($options['titleclass'] == '') {
				$commenttitle = "<h3>";
			} else {
				$commenttitle = "<h3 class=\"".$options['titleclass']."\">";
			}
			$commenttitle .= $options['title']."</h3>";
		}
		if (!isset($commentcount)) {$commentcount = "";}
		$content .= "<!-- Facebook Comments Plugin for WordPress: http://peadig.com/wordpress-plugins/facebook-comments/ -->".$commenttitle.$commentcount;

      	if ($options['html5'] == 'on') {
			$content .=	"<div class=\"fb-comments\" data-href=\"".get_permalink()."\" data-numposts=\"".$options['num']."\" data-width=\"".$options['width']."\" data-colorscheme=\"".$options['scheme']."\"></div>";

    	} else {
   			$content .= "<fb:comments href=\"".get_permalink()."\" num_posts=\"".$options['num']."\" width=\"".$options['width']."\" colorscheme=\"".$options['scheme']."\"></fb:comments>";
     	}
	    if ($options['linklove'] != 'no') {
	        if ($options['linklove'] != 'off') {
	            if (empty($fbcomments[linklove])) {
	      			$content .= '<p>Powered by <a href="http://peadig.com/wordpress-plugins/facebook-comments/">Facebook Comments</a></p>';
    			}
    		}
    	}
  	}
  	}
	return $content;
}
add_filter ('the_content', 'fbcommentbox', 100);


function fbcommentshortcode($fbatts) {
    extract(shortcode_atts(array(
		"fbcomments" => get_option('fbcomments'),
		"url" => get_permalink(),
    ), $fbatts));
    if (!empty($fbatts)) {
        foreach ($fbatts as $key => $option)
            $fbcomments[$key] = $option;
	}
	if (!isset($fbcomments['count'])) {$fbcomments['count'] = "";}
		if ($fbcomments['count'] == 'on') {
			if ($fbcomments['countstyle'] == '') {
				$commentcount = "<p>";
			} else {
				$commentcount = "<p class=\"".$fbcomments['countstyle']."\">";
			}
			$commentcount .= "<fb:comments-count href=".$url."></fb:comments-count> ".$fbcomments['countmsg']."</p>";
		}
		if ($fbcomments['title'] != '') {
			if ($fbcomments['titleclass'] == '') {
				$commenttitle = "<h3>";
			} else {
				$commenttitle = "<h3 class=\"".$fbcomments['titleclass']."\">";
			}
			$commenttitle .= $fbcomments['title']."</h3>";
		}
		if (!isset($commentcount)) {$commentcount = "";}
		$fbcommentbox = "<!-- Facebook Comments Plugin for WordPress: http://peadig.com/wordpress-plugins/facebook-comments/ -->".$commenttitle.$commentcount;

      	if ($fbcomments['html5'] == 'on') {
			$fbcommentbox .=	"<div class=\"fb-comments\" data-href=\"".$url."\" data-numposts=\"".$fbcomments['num']."\" data-width=\"".$fbcomments['width']."\" data-colorscheme=\"".$fbcomments['scheme']."\"></div>";

    } else {
    $fbcommentbox .= "<fb:comments href=\"".$url."\" num_posts=\"".$fbcomments['num']."\" width=\"".$fbcomments['width']."\" colorscheme=\"".$fbcomments['scheme']."\"></fb:comments>";
     }

	if (!empty($fbcomments['linklove'])) {
      $fbcommentbox .= '<p>Powered by <a href="http://peadig.com/wordpress-plugins/facebook-comments/">Facebook Comments</a></p>';
	}
  return $fbcommentbox;
}
add_filter('widget_text', 'do_shortcode');
add_shortcode('fbcomments', 'fbcommentshortcode');


?>
