<!-- Dashboard Settings panel content --->
<Script>
//logo Image preview
function Acl_show_Image_3() {
	var img_src= document.getElementById("logo-image").value;
	jQuery("#logo_img_prev").attr('src',img_src);   
}
//button Button-font-size slider
jQuery(function() {
	jQuery( "#logo-width-slider" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 500,
		min:0,
		slide: function( event, ui ) {
			jQuery( "#logo-width-text-box" ).val( ui.value );
		}
	});	
	jQuery( "#logo-width-slider" ).slider("value",<?php if($logo_width != ""){echo $logo_width;}else{echo "200";}?>);
	jQuery( "#logo-width-text-box" ).val( jQuery( "#logo-width-slider" ).slider( "value") );
});

//button Button-font-size slider
jQuery(function() {
	jQuery( "#logo-height-slider" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 500,
		min:0,
		slide: function(event,ui){
			jQuery( "#logo-height-text-box" ).val( ui.value );
		}
	});
	jQuery( "#logo-height-slider" ).slider("value",<?php if($logo_height != ""){echo $logo_height;}else{echo "60";}?> );
	jQuery( "#logo-height-text-box" ).val( jQuery( "#logo-height-slider" ).slider( "value") );
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
								<?php _e('Logo Settings','WEBLIZAR_ACL')?>
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
					<th scope="row" ><?php _e('Logo','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<input type="text" class="pro_text" id="logo-image" placeholder="<?php _e('No media selected!','WEBLIZAR_ACL')?>" name="upload_image" disabled="disabled"  value="<?php echo $logo_image; ?>"/>
						<input type="button" value="<?php _e('Upload','WEBLIZAR_ACL')?>" id="upload-logo" class="button-primary rcsp_media_upload"/>
						
						<input type="button" id="display-logo" value="<?php _e('preview','WEBLIZAR_ACL')?>" data-toggle="modal" data-target="#logo_about_us_image_builder" class="button " onclick="Acl_show_Image_3()"/>
						
						<!-- Modal -->
						<div class="modal " id="logo_about_us_image_builder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel"><?php _e('Login Background Image','WEBLIZAR_ACL')?></h4>
									</div>
									<div class="modal-body">
										<img class="show_prev_img" src="" style="width:100%; height:50%" id="logo_img_prev"/>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','WEBLIZAR_ACL')?></button>
									</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Logo Width','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<div id="logo-width-slider" class="size-slider" style="width: 25%;display:inline-block"></div>
						<input type="text" class="slider-text" id="logo-width-text-box" name="headline-size-text-box"  readonly="readonly">
						<span class="slider-text-span">Px</span>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Logo Height','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<div id="logo-height-slider" class="size-slider" style="width: 25%;display:inline-block"></div>
						<input type="text" class="slider-text" id="logo-height-text-box" name="input-size-text-box"  readonly="readonly">
						<span class="slider-text-span">Px</span>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Logo URL','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<input type="text" class="pro_text" id="log-url" name="log-url" placeholder="<?php _e('Logo URL','WEBLIZAR_ACL')?>" size="56" value="<?php echo $logo_url; ?>"/>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Logo URL Title','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<input type="text" class="pro_text" id="log-url-title" name="log-url-title" placeholder="<?php _e('Logo URL Title','WEBLIZAR_ACL')?>" size="56" value="<?php echo $logo_url_title; ?>"/>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<button data-dialog4="somedialog4" class="dialog-button4" style="display:none">Open Dialog</button>
	<div id="somedialog4" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php _e('Logo ','WEBLIZAR_ACL')?></strong><?php _e('Setting Save Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button4"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
			</div>
		</div>
	</div>
	<button data-dialog10="somedialog10" class="dialog-button10" style="display:none">Open Dialog</button>
	<div id="somedialog10" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php _e('Logo ','WEBLIZAR_ACL')?></strong><?php _e('Setting Reset Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button10"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
			</div>
		</div>
	</div>
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" onclick="return Custom_login_logo('logoSave', '');" class="btn btn-info btn-lg"><?php _e('Save Changes','WEBLIZAR_ACL')?></button>
			</div>
			<div class="pull-right">
				<button type="button" onclick="return Custom_login_logo('logoReset', '');" class="btn btn-primary btn-lg"><?php _e('Reset Default','WEBLIZAR_ACL')?></button>
			</div>
		</div>
	</div>
</div>
<!-- /row -->
<script>
function Custom_login_logo(Action, id){
	if(Action == "logoSave") {
		(function(){
			var dlgtrigger = document.querySelector( '[data-dialog4]' ),
				somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog4' ) ),
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

		var logo_image = jQuery("#logo-image").val();
		var logo_width = jQuery("#logo-width-text-box").val();
		var logo_height = jQuery("#logo-height-text-box").val();
		var logo_url = jQuery("#log-url").val();
		var logo_url_title = jQuery("#log-url-title").val();
		var PostData = "Action=" + Action + "&logo_image=" + logo_image + "&logo_width=" + logo_width + "&logo_height=" + logo_height + "&logo_url=" + logo_url + "&logo_url_title=" + logo_url_title;
		jQuery.ajax({
			dataType : 'html',
			type: 'POST',
			url : location.href,
			cache: false,
			data : PostData,
			complete : function() {  },
			success: function(data) {
				// Save message box open
				jQuery(".dialog-button4").click();
				// Function to close message box
				setTimeout(function(){
					jQuery("#dialog-close-button4").click();
				}, 1000);
			}
		});
	}
	// Save Message box Close On Mouse Hover
	document.getElementById('dialog-close-button4').disabled = false;
	 jQuery('#dialog-close-button4').hover(function () {
		   jQuery("#dialog-close-button4").click();
		   document.getElementById('dialog-close-button4').disabled = true; 
		 }
	 );
	 
	// Reset Message box Close On Mouse Hover
	document.getElementById('dialog-close-button10').disabled = false;
	 jQuery('#dialog-close-button10').hover(function () {
		   jQuery("#dialog-close-button10").click();
		   document.getElementById('dialog-close-button10').disabled = true; 
		 }
	 );
	if(Action == "logoReset") {
		
		(function(){
			var dlgtrigger = document.querySelector( '[data-dialog10]' ),
				somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog10' ) ),
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
				document.getElementById("logo-image").value ="<?php echo WEBLIZAR_NALF_PLUGIN_URL?>/images/default-logo.jpg";

				jQuery( "#logo-width-slider" ).slider("value",274 );
				jQuery( "#logo-width-text-box" ).val( jQuery( "#logo-width-slider" ).slider( "value") );

				jQuery( "#logo-height-slider" ).slider("value",63);
				jQuery( "#logo-height-text-box" ).val( jQuery( "#logo-height-slider" ).slider( "value") );

				document.getElementById("log-url").value ="<?php echo home_url(); ?>";
				document.getElementById("log-url-title").value ="Your Site Name and Info";

				// Reset message box open
				jQuery(".dialog-button10").click();
				// Function to close message box
				setTimeout(function(){
					jQuery("#dialog-close-button10").click();
				}, 1000);
			}
		});
	}
}
</script>
<?php
if(isset($_POST['Action'])) {
	$Action = $_POST['Action'];	
	//Save Page Values
	if($Action == "logoSave") {
		$logo_image = $_POST['logo_image'];
		$logo_width = $_POST['logo_width'];
		$logo_height = $_POST['logo_height'];
		$logo_url = $_POST['logo_url'];
		$logo_url_title = $_POST['logo_url_title'];

		// save values in option table
		$logo_page= serialize(array(
			'logo_image' => $logo_image,
			'logo_width'=> $logo_width,
			'logo_height'=> $logo_height,
			'logo_url'=> $logo_url,
			'logo_url_title'=> $logo_url_title
		));
		update_option('Admin_custome_login_logo', $logo_page);
	}

	//Reset Page Settings
	if($Action == "logoReset") {
		$logo_page= serialize(array(
			'logo_image'=> WEBLIZAR_NALF_PLUGIN_URL.'/images/default-logo.png',
			'logo_width'=>'274',
			'logo_height'=>'63',
			'logo_url'=>home_url(),
			'logo_url_title'=>'Your Site Name and Info'
		));
		update_option('Admin_custome_login_logo', $logo_page);
	}
}
?>