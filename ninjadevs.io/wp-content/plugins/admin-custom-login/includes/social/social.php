<!-- Dashboard Settings panel content --->
<script>
//Set Value of Drop Down
jQuery(document).ready(function(){
	//Enable Social Icon
	 jQuery("#enable_social_icon").val('<?php if($enable_social_icon != ""){echo $enable_social_icon;}else {echo "";}?>');
});
</script>	 
<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item">
			<div class="panel panel-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								<?php _e('Social Settings','WEBLIZAR_ACL')?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Enable Social Icons','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<select id="enable_social_icon" class="standard-dropdown" name="enable_social_icon">
							<option value="no-icon" ><?php _e('No Icon','WEBLIZAR_ACL')?></option>
							<option value="inner" ><?php _e('Inner','WEBLIZAR_ACL')?></option>
							<option value="outer" ><?php _e('Outer','WEBLIZAR_ACL')?></option>
							<option value="both" ><?php _e('Both','WEBLIZAR_ACL')?></option>
						</select>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Social Media Icon Size','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<span>
							<input type="radio" name="social_size" value="small" id="social_size1" <?php if($social_icon_size=="small")echo "checked"; ?> />&nbsp;<?php _e('Small','WEBLIZAR_ACL')?><br>
						</span>
						<span>
							<input type="radio" name="social_size" value="mediam" id="social_size2" <?php if($social_icon_size=="mediam")echo "checked"; ?> />&nbsp;<?php _e('Medium','WEBLIZAR_ACL')?><br>
						</span>
						<span>
							<input type="radio" name="social_size" value="large" id="social_size3"  <?php if($social_icon_size=="large")echo "checked"; ?> />&nbsp;<?php _e('Large','WEBLIZAR_ACL')?><br>
						</span>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Social Media Icon Layout','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<span>
							<input type="radio" name="social_layout" value="rectangle" id="social_layout1" <?php if($social_icon_layout=="rectangle")echo "checked"; ?>  />&nbsp;<?php _e('Rectangle','WEBLIZAR_ACL')?><br>
						</span>
						<span>
							<input type="radio" name="social_layout" value="circle" id="social_layout2" <?php if($social_icon_layout=="circle")echo "checked"; ?>  />&nbsp;<?php _e('Circle','WEBLIZAR_ACL')?><br>
						</span>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Social Media Icon Color','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<input id="social-icon-color" name="background-color" type="text" value="<?php echo $social_icon_color; ?>" class="my-color-field" data-default-color="#ffffff"/>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Social Media Icon Color On Hover','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<input id="social-icon-color-onhover" name="background-color" type="text" value="<?php echo $social_icon_color_onhover; ?>" class="my-color-field" data-default-color="#ffffff"/>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Social Media Icon Background Color','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<input id="social-bg-color" name="background-color" type="text" value="<?php echo $social_icon_bg; ?>" class="my-color-field" data-default-color="#ffffff" />
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Social Media Background Color On Hover','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<input id="social-bg-color-onhover" name="background-color" type="text" value="<?php echo $social_icon_bg_onhover; ?>" class="my-color-field" data-default-color="#ffffff"/>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Social Profiles','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<p class="rcsp_p_admin"><?php _e('Enter your social profiles complete url here','WEBLIZAR_ACL')?></p>
						<ul class="rcp_social_profile_admin">
							<li><i class="fa fa-facebook"></i><input type="text" class="pro_text" id="facebook-link" name="facebook-link" placeholder="<?php _e('Facebook','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_facebook_link; ?>" /></li>
							<li><i class="fa fa-twitter"></i><input type="text" class="pro_text" id="twitter-link" name="twitter-link" placeholder="<?php _e('Twitter','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_twitter_link; ?>" /></li>
							<li><i class="fa fa-linkedin"></i><input type="text" class="pro_text" id="linkedin-link" name="linkedin-link" placeholder="<?php _e('Linkedin','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_linkedin_link; ?>" /></li>
							<li><i class="fa fa-google-plus"></i><input type="text" class="pro_text" id="google-plus-link" name="google-plus-link" placeholder="<?php _e('google plus','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_google_plus_link; ?>" /></li>
							<li><i class="fa fa-pinterest-p"></i><input type="text" class="pro_text" id="pinterest-link" name="pinterest-link" placeholder="<?php _e('Pinterest','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_pinterest_link; ?>" /></li>
							<li><i class="fa fa-digg"></i><input type="text" class="pro_text" id="digg-link" name="digg-link" placeholder="<?php _e('Digg','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_digg_link; ?>" /></li>
							<li><i class="fa fa-youtube"></i><input type="text" class="pro_text" id="youtube-link" name="youtube-link" placeholder="<?php _e('Youtube','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_youtube_link; ?>" /></li>
							<li><i class="fa fa-flickr"></i><input type="text" class="pro_text" id="flickr-link" name="flickr-link" placeholder="<?php _e('Flickr','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_flickr_link; ?>" /></li>
							<li><i class="fa fa-tumblr"></i><input type="text" class="pro_text" id="tumblr-link" name="tumblr-link" placeholder="<?php _e('Tumblr','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_tumblr_link; ?>" /></li>
							<li><i class="fa fa-vk"></i><input type="text" class="pro_text" id="vkontakte-link" name="vkontakte-link" placeholder="<?php _e('VKontakte','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_vkontakte_link; ?>" /></li>
							<li><i class="fa fa-skype"></i><input type="text" class="pro_text" id="skype-link" name="skype-link" placeholder="<?php _e('Skype','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_skype_link; ?>" /></li> 
							<li><i class="fa fa-instagram"></i><input type="text" class="pro_text" id="instagram-link" name="instagram-link" placeholder="<?php _e('Instagram','WEBLIZAR_ACL')?>" size="56" value="<?php echo $social_instagram_link; ?>" /></li>
						<ul>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<button data-dialog5="somedialog5" class="dialog-button5" style="display:none">Open Dialog</button>
	<div id="somedialog5" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php _e('Social ','WEBLIZAR_ACL')?></strong><?php _e('Setting Save Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button5"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
			</div>
		</div>
	</div>
	<button data-dialog6="somedialog6" class="dialog-button6" style="display:none">Open Dialog</button>
	<div id="somedialog6" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php _e('Social ','WEBLIZAR_ACL')?></strong><?php _e('Setting Reset Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button6"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
			</div>
		</div>
	</div>
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" onclick="return Custom_login_social('socialSave', '');" class="btn btn-info btn-lg"><?php _e('Save Changes','WEBLIZAR_ACL')?></button>
			</div>
			<div class="pull-right">
				<button type="button" onclick="return Custom_login_social('socialReset', '');" class="btn btn-primary btn-lg"><?php _e('Reset Default','WEBLIZAR_ACL')?></button>
			</div>
		</div>
	</div>
</div>
<!-- /row -->
<script>
function Custom_login_social(Action, id){
	if(Action == "socialSave") {
		(function() {
			var dlgtrigger = document.querySelector( '[data-dialog5]' ),

				somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog5' ) ),
				// svg..
				morphEl = somedialog.querySelector( '.morph-shape' ),
				s = Snap( morphEl.querySelector( 'svg' ) ),
				path = s.select( 'path' ),
				steps = { 
					open : morphEl.getAttribute( 'data-morph-open' ),
					close : morphEl.getAttribute( 'data-morph-close' )
				},
				dlg = new DialogFx( somedialog, {
					onOpenDialog : function( instance ) {
						// animate path
						setTimeout(function() {
							path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
						}, 250 );
					},
					onCloseDialog : function( instance ) {
						// animate path
						path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
					}
				} );
			dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
		})();
		//enable disable
		var enable_social_icon = jQuery( "#enable_social_icon option:selected" ).val();

		if (document.getElementById('social_size1').checked) {
			var social_icon_size = document.getElementById('social_size1').value;
		}
		else if (document.getElementById('social_size2').checked) {
			var social_icon_size = document.getElementById('social_size2').value;
		}
		else{
			var social_icon_size = document.getElementById('social_size3').value;
		}
		if (document.getElementById('social_layout1').checked) {
			var social_icon_layout = document.getElementById('social_layout1').value;
		}
		else{
			var social_icon_layout = document.getElementById('social_layout2').value;
		}
		var social_icon_color = jQuery("#social-icon-color").val();
		var social_icon_color_onhover = jQuery("#social-icon-color-onhover").val();
		var social_icon_bg = jQuery("#social-bg-color").val();
		var social_icon_bg_onhover = jQuery("#social-bg-color-onhover").val();
		
		// Social Links
		var social_facebook_link = encodeURIComponent(jQuery("#facebook-link").val());
		var social_twitter_link = encodeURIComponent(jQuery("#twitter-link").val());
		var social_linkedin_link = encodeURIComponent(jQuery("#linkedin-link").val());
		var social_google_plus_link = encodeURIComponent(jQuery("#google-plus-link").val());
		var social_pinterest_link = encodeURIComponent(jQuery("#pinterest-link").val());
		var social_digg_link = encodeURIComponent(jQuery("#digg-link").val());
		var social_youtube_link = encodeURIComponent(jQuery("#youtube-link").val());
		var social_flickr_link = encodeURIComponent(jQuery("#flickr-link").val());
		var social_tumblr_link = encodeURIComponent(jQuery("#tumblr-link").val());
		var social_vkontakte_link = encodeURIComponent(jQuery("#vkontakte-link").val());
		var social_skype_link = encodeURIComponent(jQuery("#skype-link").val());
		var social_instagram_link = encodeURIComponent(jQuery("#instagram-link").val());

		var PostData = "Action=" + Action + "&enable_social_icon=" + enable_social_icon + "&social_icon_size=" + social_icon_size + "&social_icon_layout=" + social_icon_layout + "&social_icon_color=" + social_icon_color + "&social_icon_color_onhover=" + social_icon_color_onhover + "&social_icon_bg=" + social_icon_bg  + "&social_icon_bg_onhover=" + social_icon_bg_onhover + "&social_facebook_link=" + social_facebook_link + "&social_twitter_link=" + social_twitter_link + "&social_linkedin_link=" + social_linkedin_link + "&social_google_plus_link=" + social_google_plus_link + "&social_pinterest_link=" + social_pinterest_link + "&social_digg_link=" + social_digg_link + "&social_youtube_link=" + social_youtube_link + "&social_flickr_link=" + social_flickr_link + "&social_tumblr_link=" + social_tumblr_link + "&social_vkontakte_link=" + social_vkontakte_link + "&social_skype_link=" + social_skype_link + "&social_instagram_link=" + social_instagram_link;
		jQuery.ajax({
			dataType : 'html',
			type: 'POST',
			url : location.href,
			cache: false,
			data : PostData,
			complete : function() {  },
			success: function(data) {
				// Save message box open
				jQuery(".dialog-button5").click();
				// Function to close message box
				setTimeout(function(){
					jQuery("#dialog-close-button5").click();
				}, 1000);
			}
		});
	}
	// Save Message box Close On Mouse Hover
	document.getElementById('dialog-close-button5').disabled = false;
	 jQuery('#dialog-close-button5').hover(function () {
		   jQuery("#dialog-close-button5").click();
		   document.getElementById('dialog-close-button5').disabled = true; 
		 }
	 );
	 
	// Reset Message box Close On Mouse Hover
	document.getElementById('dialog-close-button6').disabled = false;
	 jQuery('#dialog-close-button6').hover(function () {
		   jQuery("#dialog-close-button6").click();
		   document.getElementById('dialog-close-button6').disabled = true; 
		 }
	 );
	if(Action == "socialReset") {
		(function() {
			var dlgtrigger = document.querySelector( '[data-dialog6]' ),

				somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog6' ) ),
				// svg..
				morphEl = somedialog.querySelector( '.morph-shape' ),
				s = Snap( morphEl.querySelector( 'svg' ) ),
				path = s.select( 'path' ),
				steps = { 
					open : morphEl.getAttribute( 'data-morph-open' ),
					close : morphEl.getAttribute( 'data-morph-close' )
				},
				dlg = new DialogFx( somedialog, {
					onOpenDialog : function( instance ) {
						// animate path
						setTimeout(function() {
							path.stop().animate( { 'path' : steps.open }, 1500, mina.elastic );
						}, 250 );
					},
					onCloseDialog : function( instance ) {
						// animate path
						path.stop().animate( { 'path' : steps.close }, 250, mina.easeout );
					}
				} );
			dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );
		})();
		
		var PostData = "Action=" + Action ;
		jQuery.ajax({
			dataType : 'html',
			type: 'POST',
			url : location.href,
			cache: false,
			data : PostData,
			complete : function() {  },
			success: function(data) {
				jQuery("#enable_social_icon").val('outer');

				jQuery(document).ready( function() {
					jQuery('input[name=social_size]').val(['mediam']);
				});
				
				jQuery(document).ready( function() {
					jQuery('input[name=social_layout]').val(['rectangle']);
				});
				
				jQuery("#social-icon-color a.wp-color-result").closest("a").css({"background-color": "#ffffff"});
				jQuery("#social-icon-color-onhover a.wp-color-result").closest("a").css({"background-color": "#1e73be"});
				jQuery("#social-bg-color a.wp-color-result").closest("a").css({"background-color": "#1e73be"});
				jQuery("#social-bg-color-onhover a.wp-color-result").closest("a").css({"background-color": "#ffffff"});
				
				document.getElementById("facebook-link").value ="http://facebook.com";
				document.getElementById("twitter-link").value ="https://twitter.com/minimalmonkey";
				document.getElementById("linkedin-link").value ="https://in.linkedin.com/";
				document.getElementById("google-plus-link").value ="http://plus.google.com";
				document.getElementById("pinterest-link").value ="https://in.pinterest.com/";
				document.getElementById("digg-link").value ="https://digg.com/";
				document.getElementById("youtube-link").value ="https://youtube.com/";
				document.getElementById("flickr-link").value ="https://flickr.com/";
				document.getElementById("tumblr-link").value ="https://tumblr.com/";
				document.getElementById("vkontakte-link").value ="https://vkontakte.com/";
				document.getElementById("skype-link").value ="https://skype.com/";
				document.getElementById("instagram-link").value ="https://instagram.com/";
				// Save message box open
				jQuery(".dialog-button6").click();
				// Function to close message box
				setTimeout(function(){
					jQuery("#dialog-close-button6").click();
				}, 1000);
			}
		});
	}
}
</script>
<?php
if(isset($_POST['Action'])) {
	$Action = $_POST['Action'];
	//Save
	if($Action == "socialSave") {
		$enable_social_icon = $_POST['enable_social_icon'];
		$social_icon_size = $_POST['social_icon_size'];
		$social_icon_layout = $_POST['social_icon_layout'];
		$social_icon_color = $_POST['social_icon_color'];
		$social_icon_color_onhover = $_POST['social_icon_color_onhover'];
		$social_icon_bg = $_POST['social_icon_bg'];
		$social_icon_bg_onhover = $_POST['social_icon_bg_onhover'];
		$social_facebook_link = $_POST['social_facebook_link'];
		$social_twitter_link = $_POST['social_twitter_link'];
		$social_linkedin_link = $_POST['social_linkedin_link'];
		$social_google_plus_link = $_POST['social_google_plus_link'];
		$social_pinterest_link = $_POST['social_pinterest_link'];
		$social_digg_link = $_POST['social_digg_link'];
		$social_youtube_link = $_POST['social_youtube_link'];
		$social_flickr_link = $_POST['social_flickr_link'];
		$social_tumblr_link = $_POST['social_tumblr_link'];
		$social_vkontakte_link = $_POST['social_vkontakte_link'];
		$social_skype_link = $_POST['social_skype_link'];
		$social_instagram_link = $_POST['social_instagram_link'];

		$Social_page= serialize(array(
		'enable_social_icon'=> $enable_social_icon ,
		'social_icon_size'=> $social_icon_size ,
		'social_icon_layout'=> $social_icon_layout ,
		'social_icon_color'=> $social_icon_color ,
		'social_icon_color_onhover'=> $social_icon_color_onhover ,
		'social_icon_bg'=> $social_icon_bg,
		'social_icon_bg_onhover'=> $social_icon_bg_onhover ,
		'social_facebook_link'=> $social_facebook_link ,
		'social_twitter_link'=> $social_twitter_link,
		'social_linkedin_link'=> $social_linkedin_link,
		'social_google_plus_link'=> $social_google_plus_link,
		'social_pinterest_link'=> $social_pinterest_link,
		'social_digg_link'=> $social_digg_link,
		'social_youtube_link'=> $social_youtube_link,
		'social_flickr_link'=> $social_flickr_link,
		'social_tumblr_link'=> $social_tumblr_link,
		'social_vkontakte_link'=> $social_vkontakte_link,
		'social_skype_link'=> $social_skype_link,
		'social_instagram_link'=> $social_instagram_link,
	));
	update_option('Admin_custome_login_Social', $Social_page);
	}
	
	if($Action == "socialReset") {
		$Social_page= serialize(array(
			'enable_social_icon'=> 'outer' ,
			'social_icon_size'=> 'mediam' ,
			'social_icon_layout'=> 'rectangle' ,
			'social_icon_color'=> '#ffffff' ,
			'social_icon_color_onhover'=> '#1e73be' ,
			'social_icon_bg'=> '#1e73be',
			'social_icon_bg_onhover'=> '#ffffff' ,
			'social_facebook_link'=> 'http://facebook.com' ,
			'social_twitter_link'=> 'https://twitter.com/minimalmonkey',
			'social_linkedin_link'=> 'https://in.linkedin.com/' ,
			'social_google_plus_link'=> 'http://plus.google.com' ,
			'social_pinterest_link'=> 'https://in.pinterest.com/',
			'social_digg_link'=> 'https://digg.com/',
			'social_youtube_link'=> 'https://youtube.com/',
			'social_flickr_link'=> 'https://flickr.com/',
			'social_tumblr_link'=> 'https://tumblr.com/',
			'social_vkontakte_link'=> 'https://vkontakte.com/',
			'social_skype_link'=> 'https://skype.com/',
			'social_instagram_link'=> 'https://instagram.com/',
		));
		update_option('Admin_custome_login_Social', $Social_page);
	}
}
?>