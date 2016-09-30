<!-- Dashboard Settings panel content --->
<script>
//on load form floating
var floatingform = '<?php echo $login_form_position; ?>';
if(floatingform == "default") {
	jQuery( "#div-login-float" ).hide();
	jQuery( "#div-login-custom" ).hide();
}	
if(floatingform == "lf_float_style") {
	jQuery( "#div-login-float" ).show();
	jQuery( "#div-login-custom" ).hide();
}
if(floatingform == "lf_customize_style") {
	jQuery( "#div-login-float" ).hide();
	jQuery( "#div-login-custom" ).show();	
}

function form_position_change() {
	var floatingformchange = jQuery( "#login_form_position option:selected" ).val();
	
	if(floatingformchange== "default") {
		jQuery( "#div-login-float" ).hide();
		jQuery( "#div-login-custom" ).hide();
	}	
	if(floatingformchange== "lf_float_style") {
		jQuery( "#div-login-float" ).show();
		jQuery( "#div-login-custom" ).hide();
	}
	if(floatingformchange== "lf_customize_style") {
		jQuery( "#div-login-float" ).hide();
		jQuery( "#div-login-custom" ).show();		
	}
}

function Acl_show_Image_2() {
	var img_src= document.getElementById("login_bg_image").value;
	jQuery("#img").attr('src',img_src);   
}
function Acl_login_img_clear() {
	document.getElementById("login_bg_image").value ="";
}

//button Login Form Width slider
jQuery(function() {
	jQuery( "#login-opacity-slider" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 10,
		min: 0,
		slide: function( event, ui ) {
			jQuery( "#login-opacity-text-box" ).val( ui.value );
		}
	});
	jQuery( "#login-opacity-slider" ).slider("value",<?php if($login_form_opacity != ""){echo $login_form_opacity;}else{echo "10";}?>);
	jQuery( "#login-opacity-text-box" ).val( jQuery( "#login-opacity-slider" ).slider( "value") );
});

//button Login Form Width slider
jQuery(function() {
	jQuery( "#button-size-slider4" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 600,
		min:200,
		slide: function( event, ui ) {
		jQuery( "#login-width-text-box" ).val( ui.value );
		}
	});		
	jQuery( "#button-size-slider4" ).slider("value",<?php if($login_form_width != ""){echo $login_form_width;}else{echo "300";}?>);
	jQuery( "#login-width-text-box" ).val( jQuery( "#button-size-slider4" ).slider( "value") );  
});

		
//button Login Form Align Left
jQuery(function() {
	jQuery( "#button_left" ).slider({
		orientation: "horizontal",
		range: "min",
		max:1300,
		min:0,
		slide: function( event, ui ) {
		jQuery( "#login_form_left" ).val( ui.value );
		}
	});		
	jQuery( "#button_left" ).slider("value",<?php if($login_form_left != ""){echo $login_form_left;}else{echo "700";}?>);
	jQuery( "#login_form_left" ).val( jQuery( "#button_left" ).slider( "value") );  
});
//button Login Form Align Top
jQuery(function() {
	jQuery( "#button_top" ).slider({
		orientation: "horizontal",
		range: "min",
		max:600,
		min:0,
		slide: function( event, ui ) {
			jQuery( "#login_form_top" ).val( ui.value );
		}
	});		
	jQuery( "#button_top" ).slider("value",<?php if($login_form_top != ""){echo $login_form_top;}else{echo "300";}?>);
	jQuery( "#login_form_top" ).val( jQuery( "#button_top" ).slider( "value") );  
});

//button Border Radius slider
jQuery(function() {
	jQuery( "#button-size-slider5" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 15,
		min:0,
		slide: function( event, ui ) {
		jQuery( "#login-Radius-text-box" ).val( ui.value );
		}
	});
	jQuery( "#button-size-slider5" ).slider("value",<?php if($login_form_radius != ""){echo $login_form_radius;}else{echo "3";}?> );
	jQuery( "#login-Radius-text-box" ).val( jQuery( "#button-size-slider5" ).slider( "value") );
});

//button Border Thickness slider
jQuery(function() {
	jQuery( "#button-size-slider6" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 20,
		min:0,
		slide: function( event, ui ) {
			jQuery( "#login-thickness-text-box" ).val( ui.value );
		}
	});
	jQuery( "#button-size-slider6" ).slider("value",<?php if($login_border_thikness != ""){echo $login_border_thikness;}else{echo "3";}?> );
	jQuery( "#login-thickness-text-box" ).val( jQuery( "#button-size-slider6" ).slider( "value") );
});

//Set Value of Drop Down
jQuery(document).ready(function() {
	//Login Background Select
	 jQuery("#select-login-bg").val('<?php if($login_bg_type != ""){echo $login_bg_type;}else {echo "";}?>');
	 loginbgchange();
	//login Background Effect
	 jQuery("#login_bg_color_overlay").val('<?php if($login_bg_effect != ""){echo $login_bg_effect;}else {echo "";}?>');
	//login border style 
	 jQuery("#login_border_style").val('<?php if($login_border_style != ""){echo $login_border_style;}else {echo "";}?>');
	//login Background Repeat 
	 jQuery("#login_bg_repeat").val('<?php if($login_bg_repeat != ""){echo $login_bg_repeat;}else {echo "";}?>');
	//login Background Position 
	 jQuery("#login_bg_position").val('<?php if($login_bg_position != ""){echo $login_bg_position;}else {echo "";}?>');
});

function loginbgchange() {
	jQuery(".no-login-bg").hide();

	var Login_optionvalue = jQuery( "#select-login-bg option:selected" ).val();
	if(Login_optionvalue== "static-background-color") {
		jQuery( "#div-login-bg-color" ).show();
	}
	
	if(Login_optionvalue== "static-background-image") {
		jQuery( "#div-login-bg-image" ).show();
	}		
}
</script>
<style>
	.ui-state-default, .ui-widget-content .ui-state-default{
	background-color: #fff;
	border: 0px solid #c5dbec;
	border-radius: 100%;
	cursor: move;
	height: 30px;
	left: 0;
	top: -11px;
	position: absolute;
	width: 30px;
	-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.4);
	}
	.ui-slider-horizontal {
	height: .5em;
	}
	.ui-widget-content {
	 border: 0px solid #a6c9e2; 
	background: #a9acb1;
	color: #222222;
	}
	.ui-widget-header {
	border: 0px solid #4297d7;
	background: #ef4238;
	color: #ffffff;
	font-weight: bold;
	}
	.slider-text{
	background-color: #f7fcff !important;
	border-radius: 5px;
	font-size: 0.9em;
	height: 29px;
	padding-top: 2px;
	text-align: center;
	width: 55px;
	margin-left: 25px;
	border-color: #ffffff !important;
	margin-right: 5px;
	-webkit-box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15);
	box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15) !important;
	}
	.slider-text-span{
	font-size:17px;
	}
</style>
	<div class="row">
		<div class="post-social-wrapper clearfix">
			<div class="col-md-12 post-social-item">
				<div class="panel panel-default">
					<div class="panel-heading padding-none">
						<div class="post-social post-social-xs" id="post-social-5">
							<div class="text-center padding-all text-center">
								<div class="textbox text-white   margin-bottom settings-title">
									<?php _e('Login Settings','WEBLIZAR_ACL'); ?> 
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
						<th scope="row" ><?php _e('Login Form Position','WEBLIZAR_ACL'); ?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<select id="login_form_position" name="login_form_position" class="standard-dropdown" onchange='form_position_change()'>
								<option value="default" <?php if($login_form_position == "default") echo "selected"; ?>><?php _e('Default','WEBLIZAR_ACL'); ?></option>
								<option value="lf_float_style" <?php if($login_form_position == "lf_float_style") echo "selected"; ?>><?php _e('Floating','WEBLIZAR_ACL'); ?></option>
								<option value="lf_customize_style" <?php if($login_form_position == "lf_customize_style") echo "selected"; ?>><?php _e('Floating With Customization','WEBLIZAR_ACL'); ?></option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div> 
	
		<div id="div-login-float" class="lf_float_style" style="display:none;">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Float Settings','WEBLIZAR_ACL'); ?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<span>
							<input type="radio" name="login_form_float" value="left" id="login_form_float" <?php if($login_form_float=="left")echo "checked"; ?> />&nbsp;<?php _e('Left','WEBLIZAR_ACL')?><br>
						</span>
						<span>
							<input type="radio" name="login_form_float" value="center" id="login_form_float" <?php if($login_form_float=="center")echo "checked"; ?> />&nbsp;<?php _e('Center','WEBLIZAR_ACL')?><br>
						</span>
						<span>	
							<input type="radio" name="login_form_float" value="right" id="login_form_float" <?php if($login_form_float=="right")echo "checked"; ?> />&nbsp;<?php _e('Right','WEBLIZAR_ACL')?><br>
						</span>
					</td>
				</tr>
			</table>
		</div>

		<div id="div-login-custom" class="lf_customize_style" style="display:none;">	
			<table class="form-table">
				<tr>
				<th scope="row" ><?php _e('Floating With Customization Settings','WEBLIZAR_ACL'); ?></th>
				<td></td>
				</tr>
					<tr  style="border-bottom:none;">
						<td>
							<h4>Left Margin</h4>
							<div id="button_left" class="size-slider" style="width: 30%;display:inline-block"></div>
							<input type="text" class="slider-text" id="login_form_left" name="login_form_left"  readonly="readonly">
							<span class="slider-text-span">Px</span>
						</td>
					</tr>
					<tr>
						<td>
							<h4>Top Margin</h4>
							<div id="button_top" class="size-slider" style="width: 30%;display:inline-block"></div>
							<input type="text" class="slider-text" id="login_form_top" name="login_form_top"  readonly="readonly">
							<span class="slider-text-span">Px</span>
						</td>
					</tr>
					<tr>
						<td>
							<p><?php _e('Note: This form position setting will be not responsive.','WEBLIZAR_ACL'); ?></p>						
						</td>
					</tr>
			</table>
		</div>	
		
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Select Background','WEBLIZAR_ACL'); ?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<select id="select-login-bg" class="standard-dropdown" name="select-background" onchange='loginbgchange()'>								
								<optgroup label="<?php _e('Select background','WEBLIZAR_ACL'); ?>">
								<option value="static-background-color" ><?php _e('Static Background Color','WEBLIZAR_ACL'); ?></option>
								<option value="static-background-image" ><?php _e('Static Background Image','WEBLIZAR_ACL'); ?></option>										
								</optgroup>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div id="div-login-bg-color" class="no-login-bg">
			<div style="margin-bottom: 10px;">
				<img src="<?php echo WEBLIZAR_NALF_PLUGIN_URL.'/images/background-color1.png'; ?>" class="img-responsive" style="margin-right: auto;" alt="" >
			</div>
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Background Color','WEBLIZAR_ACL'); ?></th>
							<td></td>
						</tr>
						<tr  style="border-bottom:none;">
							<td id="td-login-background-color">
								<input id="login-background-color" name="login-background-color" type="text" value="<?php echo $login_bg_color; ?>" class="my-color-field" data-default-color="#ffffff" />
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Login Form Opacity','WEBLIZAR_ACL')?></th>
							<td></td>
						</tr>
						<tr  style="border-bottom:none;">
							<td>
								<div id="login-opacity-slider" class="size-slider" style="width: 30%;display:inline-block"></div>
								<input type="text" class="slider-text" id="login-opacity-text-box" name="login-opacity-text-box"  readonly="readonly">
								<span class="slider-text-span">Px</span>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div id="div-login-bg-image" class="no-login-bg">
			<div style="margin-bottom: 10px;">
				<img src="<?php echo WEBLIZAR_NALF_PLUGIN_URL.'/images/background-image.png'; ?>" class="img-responsive"  style="margin-right: auto;" >
			</div>
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Background Image','WEBLIZAR_ACL')?></th>
							<td></td>
						</tr>
						<tr  style="border-bottom:none;">
							<td>
								<input type="text" class="pro_text" id="login_bg_image" placeholder="<?php _e('No media selected!','WEBLIZAR_ACL')?>" name="upload_image" disabled="disabled"  value="<?php echo $login_bg_image; ?>"/>
								<input type="button" value="<?php _e('Upload','WEBLIZAR_ACL')?>" id="upload-logo" class="button-primary rcsp_media_upload"/>
								
								<input type="button"  value="<?php _e('preview','WEBLIZAR_ACL')?>" data-toggle="modal" data-target="#about_us_image_builder" id="login-image-previewer" title="Font Awesome Icons"  class="button  " onclick="Acl_show_Image_2()" />
								
								<input type="button" id="display-logo" value="<?php _e('Remove','WEBLIZAR_ACL')?>" class="button " onclick="Acl_login_img_clear();" />

								<!-- Modal -->
								<div class="modal " id="about_us_image_builder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel"><?php _e('Login Background Image','WEBLIZAR_ACL')?></h4>
											</div>
											<div class="modal-body">
												<img class="show_prev_img" src="" style="width:100%; height:50%" id="img"/>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','WEBLIZAR_ACL')?></button>
											</div>
										</div>
									</div>
								</div>
								<!--End Modal -->
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Background Repeat','WEBLIZAR_ACL')?></th>
							<td></td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<select id="login_bg_repeat" class="standard-dropdown" name="login_bg_repeat">
									<option value="no-repeat" ><?php _e('No Repeat ','WEBLIZAR_ACL')?> </option>
									<option value="repeat" ><?php _e('Repeat','WEBLIZAR_ACL')?> </option>
									<option value="repeat-x" ><?php _e('Repeat Horizontally','WEBLIZAR_ACL')?> </option>
									<option value="repeat-y" ><?php _e('Repeat Vertically','WEBLIZAR_ACL')?> </option>
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
							<th scope="row" ><?php _e('Background Position ','WEBLIZAR_ACL')?></th>
							<td></td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<select id="login_bg_position" class="standard-dropdown" name="login_bg_position">
									<option value="left top" ><?php _e('Left Top','WEBLIZAR_ACL')?> </option>
									<option value="left center" ><?php _e('Left Center','WEBLIZAR_ACL')?> </option>
									<option value="left bottom" ><?php _e('Left Bottom','WEBLIZAR_ACL')?> </option>
									<option value="right top" ><?php _e('Right Top','WEBLIZAR_ACL')?> </option>
									<option value="right center" ><?php _e('Right Center','WEBLIZAR_ACL')?> </option>
									<option value="right bottom" ><?php _e('Right Bottom','WEBLIZAR_ACL')?></option>
									<option value="center top" ><?php _e('Center Top','WEBLIZAR_ACL')?> </option>
									<option value="center" ><?php _e('Center Center','WEBLIZAR_ACL')?> </option>
									<option value="center bottom" ><?php _e('Center Bottom','WEBLIZAR_ACL')?> </option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>	
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Background Effect','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							 <select id="login_bg_color_overlay" class="standard-dropdown" name="login_bg_color_overlay"  >
								<optgroup label="<?php _e('Select overlay effect','WEBLIZAR_ACL')?>">
									<option value="no_effect" ><?php _e('No Overlay Effect','WEBLIZAR_ACL')?></option>
									<option value="pattern-1" ><?php _e('Overlay Effect 1','WEBLIZAR_ACL')?> </option>
									<option value="pattern-2" ><?php _e('Overlay Effect 2','WEBLIZAR_ACL')?> </option>
									<option value="logo" ><?php _e('Overlay Effect 3','WEBLIZAR_ACL')?> </option>
								</optgroup>
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
						<th scope="row" ><?php _e('Login Form Width','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<div id="button-size-slider4" class="size-slider" style="width: 30%;display:inline-block"></div>
							<input type="text" class="slider-text" id="login-width-text-box" name="login-width-text-box"  readonly="readonly">
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
						<th scope="row" ><?php _e('Border Color','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr  style="border-bottom:none;">
						<td id="td-login-Border-color">
							<input id="login-Border-color" name="login-Border-color" type="text" value="<?php echo $login_border_color; ?>" class="my-color-field" data-default-color="#ffffff"/>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Border Radius','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<div id="button-size-slider5" class="size-slider" style="width: 30%;display:inline-block"></div>
							<input type="text" class="slider-text" id="login-Radius-text-box" name="login-Radius-text-box"  readonly="readonly">
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
						<th scope="row" ><?php _e('Border Style','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<select id="login_border_style" class="standard-dropdown" name="login_border_style">
								<option value="none" ><?php _e('None','WEBLIZAR_ACL')?> </option>
								<option value="solid" ><?php _e('Solid','WEBLIZAR_ACL')?> </option>
								<option value="dotted" ><?php _e('Dotted','WEBLIZAR_ACL')?> </option>
								<option value="dashed" ><?php _e('Dashed','WEBLIZAR_ACL')?> </option>
								<option value="double" ><?php _e('Double','WEBLIZAR_ACL')?> </option>
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
						<th scope="row" ><?php _e('Border Thickness','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<div id="button-size-slider6" class="size-slider" style="width: 30%;display:inline-block"></div>
							<input type="text" class="slider-text" id="login-thickness-text-box" name="login-thickness-text-box"  readonly="readonly">
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
						<th scope="row" ><?php _e('Enable form shadow?','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<span>
								<input type="radio" name="enable_form_shadow" value="yes" id="login_enable_shadow1" <?php if($login_enable_shadow=="yes")echo "checked"; ?> />&nbsp;<?php _e('Yes','WEBLIZAR_ACL')?><br>
							</span>
							<span>
								<input type="radio" name="enable_form_shadow" value="no" id="login_enable_shadow2" <?php if($login_enable_shadow=="no")echo "checked"; ?> />&nbsp;<?php _e('No','WEBLIZAR_ACL')?><br>
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
						<th scope="row" ><?php _e('Form Shadow Color','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr  style="border-bottom:none;">
						<td id="td_login_shadow_color">
							<input id="login_shadow_color" name="login_shadow_color" type="text" value="<?php echo $login_shadow_color; ?>" class="my-color-field" data-default-color="#ffffff" />
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Custom CSS','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<textarea id="login_custom_css" name="login_custom_css" placeholder="<?php _e('Custom CSS','WEBLIZAR_ACL')?>" type="text" class="login_custom_css" rows="10" cols="75" style="width:80%"><?php echo $login_custom_css; ?></textarea>
							<p class="description">
								<?php _e('Enter any custom css you want to apply on login panel.', WEBLIZAR_ACL ); ?>.<br>
								<?php _e('Note: Please Do Not Use', WEBLIZAR_ACL ); ?> <b>Style</b> <?php _e('Tag With Custom CSS', WEBLIZAR_ACL ); ?>.
							</p>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<button data-dialog2="somedialog2" class="dialog-button2" style="display:none">Open Dialog</button>
		<div id="somedialog2" class="dialog" style="position: fixed; z-index: 9999;">
			<div class="dialog__overlay"></div>
			<div class="dialog__content">
				<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
					<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
						<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
					</svg>
				</div>
				<div class="dialog-inner">
					<h2><strong><?php _e('Login ','WEBLIZAR_ACL')?></strong><?php _e('Setting Save Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button2"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
				</div>
			</div>
		</div>
		<button data-dialog8="somedialog8" class="dialog-button8" style="display:none">Open Dialog</button>
		<div id="somedialog8" class="dialog" style="position: fixed; z-index: 9999;">
			<div class="dialog__overlay"></div>
			<div class="dialog__content">
				<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
					<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
						<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
					</svg>
				</div>
				<div class="dialog-inner">
					<h2><strong><?php _e('Login ','WEBLIZAR_ACL')?></strong><?php _e('Setting Reset Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button8"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
				</div>
			</div>
		</div>
		<div class="panel panel-primary save-button-block">
			<div class="panel-body">
				<div class="pull-left">
					<button type="button" onclick="return Custom_login_login('loginbgSave', '');" class="btn btn-info btn-lg"><?php _e('Save Changes','WEBLIZAR_ACL')?></button>
				</div>
				<div class="pull-right">
					<button type="button" onclick="return Custom_login_login('loginbgReset', '');" class="btn btn-primary btn-lg"><?php _e('Reset Default','WEBLIZAR_ACL')?></button>
				</div>
			</div>
		</div>
	</div>
<!-- /row -->
<script> 
	function Custom_login_login(Action, id){
		if(Action == "loginbgSave") {
			(function() {
				var dlgtrigger = document.querySelector( '[data-dialog2]' ),
				
					somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog2' ) ),
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
			var login_form_position  = jQuery( "#login_form_position option:selected" ).val();
			var login_form_float = jQuery('input[name=login_form_float]:checked').val();
			if (!login_form_float) {
				login_form_float = 'center';
			}
			var login_form_left = jQuery("#login_form_left").val();
			var login_form_top = jQuery("#login_form_top").val();
			var Login_bg_value = jQuery( "#select-login-bg option:selected" ).val();
			var login_background_color = jQuery("#login-background-color").val();
			var login_bg_color_overlay = jQuery( "#login_bg_color_overlay option:selected" ).val();
			var login_bg_image = jQuery("#login_bg_image").val();
			var login_form_opacity = jQuery("#login-opacity-text-box").val();
			var login_form_width= jQuery("#login-width-text-box").val();
			var login_form_radius= jQuery("#login-Radius-text-box").val();
			var login_border_style = jQuery( "#login_border_style option:selected" ).val();
			var login_border_thikness = jQuery("#login-thickness-text-box").val();
			var login_border_color = jQuery("#login-Border-color").val();
			var login_bg_repeat = jQuery( "#login_bg_repeat option:selected" ).val();
			var login_bg_position = jQuery( "#login_bg_position option:selected" ).val();
			var login_custom_css = jQuery( "#login_custom_css").val();
			if (document.getElementById('login_enable_shadow1').checked) {
				var login_enable_shadow = document.getElementById('login_enable_shadow1').value;
			}
			else{
				var login_enable_shadow = document.getElementById('login_enable_shadow2').value;
			}
			var login_shadow_color = jQuery("#login_shadow_color").val();
			

			var PostData = "Action=" + Action + "&login_form_position=" + login_form_position + "&Login_bg_value=" + Login_bg_value + "&login_background_color=" + login_background_color + "&login_bg_color_overlay=" + login_bg_color_overlay + "&login_bg_image=" + login_bg_image + "&login_form_opacity=" + login_form_opacity  + "&login_form_width=" + login_form_width + "&login_form_radius=" + login_form_radius + "&login_border_style=" + login_border_style + "&login_border_thikness=" + login_border_thikness + "&login_border_color=" + login_border_color + "&login_bg_repeat=" + login_bg_repeat + "&login_bg_position=" + login_bg_position + "&login_enable_shadow=" + login_enable_shadow + "&login_shadow_color=" + login_shadow_color + "&login_custom_css=" + login_custom_css + "&login_form_left=" + login_form_left + "&login_form_top=" + login_form_top + "&login_form_float=" + login_form_float;
			jQuery.ajax({
				dataType : 'html',
				type: 'POST',
				url : location.href,
				cache: false,
				data : PostData,
				complete : function() {  },
				success: function(data) {
					// Save message box open
					jQuery(".dialog-button2").click();
					// Function to close message box
					setTimeout(function(){
						jQuery("#dialog-close-button2").click();
					}, 1000);
				}
			});
		}
		// Save Message box Close On Mouse Hover
		document.getElementById('dialog-close-button2').disabled = false;
		 jQuery('#dialog-close-button2').hover(function () {
			   jQuery("#dialog-close-button2").click();
			   document.getElementById('dialog-close-button2').disabled = true; 
			 }
		 );
		 
		// Reset Message box Close On Mouse Hover
	    document.getElementById('dialog-close-button8').disabled = false;
		 jQuery('#dialog-close-button8').hover(function () {
			   jQuery("#dialog-close-button8").click();
			   document.getElementById('dialog-close-button8').disabled = true; 
			 }
		 );
		 
		//on reset settings
		if(Action == "loginbgReset") {
			(function() {
				var dlgtrigger = document.querySelector( '[data-dialog8]' ),
				
					somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog8' ) ),
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
					// Show Background Image Option
					jQuery(".no-login-bg").hide();
					jQuery( "#div-login-bg-image" ).show();
					
					// Show Login Form Position
					jQuery( "#div-login-float" ).hide();
					jQuery( "#div-login-custom" ).hide();
					jQuery("#login_form_position").val('login_form_float');
					
					//login Background Effect
					 jQuery("#login_bg_color_overlay").val('pattern-1');
					//login border style 
					 jQuery("#login_border_style").val('solid');
					//login Background Repeat 
					 jQuery("#login_bg_repeat").val('repeat');	
					//login Background Position 
					 jQuery("#login_bg_position").val('left top'); 
					 
					//Enable Login From Shadow
					jQuery(document).ready( function() {
					jQuery('input[name=enable_form_shadow]').val(['yes']);
					//login Custom Css 
					
					 jQuery("#login_custom_css").val(''); 
					});
					//Login Image
					document.getElementById("login_bg_image").value ="<?php echo WEBLIZAR_NALF_PLUGIN_URL?>/images/3d-background.jpg";
					// Login From Background Color
					jQuery("#td-login-background-color a.wp-color-result").closest("a").css({"background-color": "#1e73be"});
					// Login From Border Color
					jQuery("#td-login-Border-color a.wp-color-result").closest("a").css({"background-color": "#0069A0"});
					// Login From Shadow Color
					jQuery("#login_shadow_color a.wp-color-result").closest("a").css({"background-color": "#C8C8C8"});	
					
					jQuery( "#login-opacity-slider" ).slider("value",10);
					jQuery( "#login-opacity-text-box" ).val( jQuery( "#login-opacity-slider" ).slider( "value") );
					
					jQuery( "#button-size-slider4" ).slider("value",520);
					jQuery( "#login-width-text-box" ).val( jQuery( "#button-size-slider4" ).slider( "value") );
					
					jQuery( "#button-size-slider5" ).slider("value",10 );
					jQuery( "#login-Radius-text-box" ).val( jQuery( "#button-size-slider5" ).slider( "value") );
					
					jQuery( "#button-size-slider6" ).slider("value",4 );
					jQuery( "#login-thickness-text-box" ).val( jQuery( "#button-size-slider6" ).slider( "value") );
					// Reset message box open
					jQuery(".dialog-button8").click();
					// Function to close message box
					setTimeout(function(){
						jQuery("#dialog-close-button8").click();
					}, 1000);
				}
			});
		}
	}
</script>
<?php
	if(isset($_POST['Action'])){
		$Action = $_POST['Action'];
		//Save
		if($Action == "loginbgSave") {
			$login_form_position 	=$_POST['login_form_position'];
			$login_form_left = $_POST['login_form_left'];
			$login_form_top = $_POST['login_form_top'];
			$login_form_float = $_POST['login_form_float'];
			$Login_bg_value = $_POST['Login_bg_value'];
			$login_background_color = $_POST['login_background_color'];
			$login_bg_color_overlay = $_POST['login_bg_color_overlay'];
			$login_bg_image = $_POST['login_bg_image'];
			$login_form_opacity = $_POST['login_form_opacity'];
			$login_form_width = $_POST['login_form_width'];
			$login_form_radius = $_POST['login_form_radius'];
			$login_border_style = $_POST['login_border_style'];
			$login_border_thikness = $_POST['login_border_thikness'];
			$login_border_color = $_POST['login_border_color'];
			$login_bg_repeat = $_POST['login_bg_repeat'];
			$login_bg_position = $_POST['login_bg_position'];
			$login_enable_shadow = $_POST['login_enable_shadow'];
			$login_shadow_color = $_POST['login_shadow_color'];
			$login_custom_css = $_POST['login_custom_css'];
			
			
			// Save Values in Option Table
			$login_page= serialize(array(
				'login_form_position' => $login_form_position,
				'login_form_left' => $login_form_left,
				'login_form_top' => $login_form_top,
				'login_form_float' => $login_form_float,
				'login_bg_type' => $Login_bg_value,
				'login_bg_color' => $login_background_color,
				'login_bg_effect' => $login_bg_color_overlay,
				'login_bg_image' => $login_bg_image,
				'login_form_opacity' => $login_form_opacity,
				'login_form_width' => $login_form_width,
				'login_form_radius' => $login_form_radius,
				'login_border_style' => $login_border_style,
				'login_border_thikness' => $login_border_thikness,
				'login_border_color' => $login_border_color,
				'login_bg_repeat' => $login_bg_repeat,
				'login_bg_position' => $login_bg_position,
				'login_enable_shadow' => $login_enable_shadow,
				'login_shadow_color' => $login_shadow_color,
				'login_custom_css' => $login_custom_css,
				
			));
			update_option('Admin_custome_login_login', $login_page);
		}

		if($Action == "loginbgReset") {
			$login_page= serialize(array(
				'login_form_position'=>'default',
				'login_form_float' => 'center',
				'login_form_left' => '100',
				'login_form_top' => '100',
				'login_bg_type'=>'static-background-image',
				'login_bg_color' => '#1e73be',
				'login_bg_effect' => 'pattern-1',
				'login_bg_image' => WEBLIZAR_NALF_PLUGIN_URL.'/images/3d-background.jpg',
				'login_form_opacity' => '10',
				'login_form_width' => '520',
				'login_form_radius' => '10',
				'login_border_style' => 'solid',
				'login_border_thikness' => '4',
				'login_border_color' => '#0069A0',
				'login_bg_repeat' => 'repeat',
				'login_bg_position' => 'left top',
				'login_enable_shadow' => 'yes',
				'login_shadow_color' => '#C8C8C8',
				'login_custom_css' => '',
			));
			update_option('Admin_custome_login_login', $login_page);
		}
	}
?>