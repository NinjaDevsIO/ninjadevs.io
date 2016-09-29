<!-- Dashboard Settings panel content --->
<script>
function Acl_show_Image() {
	var img_src= document.getElementById("top_image").value;
	jQuery("#top_img_prev").attr('src',img_src);
}
function Acl_top_img_clear() {
	document.getElementById("top_image").value ="";
}

//Set Value of Drop Down
jQuery(document).ready(function(){
	//Top Background Select
	 jQuery("#select-background").val('<?php if($top_bg_type != ""){echo $top_bg_type;}else {echo "";}?>');
	 getComboid();
	 
	//Top Background strech
	<?php if( $top_cover == "yes"){?>
		jQuery("#div-on-strech").hide();
	<?php } else {?>
		jQuery("#div-on-strech").show();
	<?php }?>	
	
	//Top Background Repeat 
	 jQuery("#top_bg_repeat").val('<?php if($top_repeat != ""){echo $top_repeat;}else {echo "";}?>');

	//Top Background Position 
	 jQuery("#top_bg_position").val('<?php if($top_position != ""){echo $top_position;}else {echo "";}?>'); 

	//Top Background Attachment 
	 jQuery("#top_bg_attachment").val('<?php if($top_attachment != ""){echo $top_attachment;}else {echo "";}?>');

	//Top SlideShow No 
	 jQuery("#top_slideshow_no").val('<?php if($top_slideshow_no != ""){echo $top_slideshow_no;}else {echo "";}?>');

	//Top Slide Animation 
	 jQuery("#top_bg_slider_animation").val('<?php if($top_bg_slider_animation != ""){echo $top_bg_slider_animation;}else {echo "";}?>');
});

function OnChangeCheckbox (checkbox) {
    if (checkbox.checked) {		
        jQuery("#div-on-strech").hide();
    }
    else {        
		 jQuery("#div-on-strech").show();
    }
}

function getComboid() {
	var optionvalue = jQuery( "#select-background option:selected" ).val();
	jQuery(".no-background").hide();
	
	if(optionvalue== "static-background-color")
	{
		jQuery( "#div-bakground-color" ).show();
	}
	if(optionvalue== "static-background-image")
	{
		jQuery( "#div-bakground-image" ).show();
	}
	if(optionvalue== "slider-background")
	{
		jQuery( "#div-bakground-Slideshow" ).show();
	}
}

function set_slideshow(){
	number = jQuery("#top_slideshow_no").val();	
	for(i=1;i<=6;i++){
		if(i<=number){
			jQuery("#slideshow_settings_"+i).show(500);
		}
		else{
			jQuery("#slideshow_settings_"+i).hide(500);
		}
	}
}
</script>
<div class="row">
	<div class="post-social-wrapper clearfix">
		<div class="col-md-12 post-social-item">
			<div class="panel panel-default">
				<div class="panel-heading padding-none">
					<div class="post-social post-social-xs" id="post-social-5">
						<div class="text-center padding-all text-center">
							<div class="textbox text-white   margin-bottom settings-title">
								<?php _e('Background Settings','WEBLIZAR_ACL')?> 
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
					<th scope="row" ><?php _e('Select Background','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<select id="select-background" class="standard-dropdown" name="select-background" onchange='getComboid()'>
							<option value="no-background" ><?php _e('No background Selected','WEBLIZAR_ACL')?></option>
							<optgroup label="<?php _e('Select background','WEBLIZAR_ACL')?>">
							<option value="static-background-color" ><?php _e('Static Background Color','WEBLIZAR_ACL')?></option>
							<option value="static-background-image" ><?php _e('Static Background Image','WEBLIZAR_ACL')?></option>
							<option value="slider-background"><?php _e('Background SlideShow','WEBLIZAR_ACL')?></option>								
							</optgroup>
						</select>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="div-bakground-color" class="no-background">
		<div style="margin-bottom: 10px;">
			<img src="<?php echo WEBLIZAR_NALF_PLUGIN_URL.'/images/background-color1.png'; ?>" class="img-responsive" style="margin-right: auto;" alt="" >
		</div>

		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Background Color','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr  style="border-bottom:none;">
						<td id="td-top-background-color">
							<input id="top-background-color" name="top-background-color" type="text" value="<?php echo $top_color; ?>" class="my-color-field" data-default-color="#000000" />
						</td>
					</tr>
				</table>
			</div>
		</div>						
	</div>

	<div id="div-bakground-image" class="no-background">
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
							<input type="text" class="pro_text" id="top_image" placeholder="<?php _e('No media selected!','WEBLIZAR_ACL')?>" name="upload_image" disabled="disabled"  value="<?php echo $top_image; ?>"/>

							<input type="button" value="<?php _e('Upload','WEBLIZAR_ACL')?>" id="upload-logo" class="button-primary rcsp_media_upload" />

							<input type="button"  value="<?php _e('Preview','WEBLIZAR_ACL')?>" data-toggle="modal" data-target="#top_about_us_image_builder" id="top-image-previewer" title="Font Awesome Icons"  class="button  " onclick="Acl_show_Image()" />

							<input type="button" id="display-logo" value="<?php _e('Remove','WEBLIZAR_ACL')?>" class="button" onclick="Acl_top_img_clear();" />

							<!-- Modal -->
							<div class="modal " id="top_about_us_image_builder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel"><?php _e('Background Image','WEBLIZAR_ACL')?></h4>
										</div>

										<div class="modal-body">
											<img class="show_prev_img" src="" style="width:100%; height:50%" id="top_img_prev"/>
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
						<th scope="row" ><?php _e('Cover or Strech','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<input type="checkbox" value="yes" id="bg-strech" name="strech-bg"  onclick="OnChangeCheckbox(this)" style="visibility: visible;" <?php if($top_cover=="yes"){echo "checked";}?>/>&nbsp;<?php _e('Yes','WEBLIZAR_ACL')?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		
		<div id="div-on-strech">
			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Background Repeat','WEBLIZAR_ACL')?></th>
							<td></td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<select id="top_bg_repeat" class="standard-dropdown" name="top_bg_repeat"  >

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
								<select id="top_bg_position" class="standard-dropdown" name="top_bg_position"  >
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

			<div class="panel panel-primary panel-default content-panel">
				<div class="panel-body">
					<table class="form-table">
						<tr>
							<th scope="row" ><?php _e('Background Attachment','WEBLIZAR_ACL')?></th>
							<td></td>
						</tr>
						<tr class="radio-span" style="border-bottom:none;">
							<td>
								<select id="top_bg_attachment" class="standard-dropdown" name="top_bg_attachment">
										<option value="fixed" ><?php _e('Fixed','WEBLIZAR_ACL')?> </option>
										<option value="scroll" ><?php _e('Scroll','WEBLIZAR_ACL')?> </option>
										<option value="inherit" ><?php _e('Inherit','WEBLIZAR_ACL')?> </option>
								</select>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div><!-- End of div-on-strech -->
	</div><!-- End of div-bakground-image -->

	<div id="div-bakground-Slideshow" class="no-background">
		<div style="margin-bottom: 10px;">
			<img src="<?php echo WEBLIZAR_NALF_PLUGIN_URL.'/images/background-slideshow.png'; ?>" class="img-responsive"  style="margin-right: auto;" >
		</div>

		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('No. Of Background Slideshow','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr  style="border-bottom:none;">
						<td>
							<select id="top_slideshow_no" class="standard-dropdown" name="top_slideshow_no" onchange="set_slideshow()">
									<option value="0" ><?php _e('Select Number of Slide Show','WEBLIZAR_ACL')?> </option>
									<option value="2" ><?php _e('2','WEBLIZAR_ACL')?> </option>
									<option value="3" ><?php _e('3','WEBLIZAR_ACL')?> </option>
									<option value="4" ><?php _e('4','WEBLIZAR_ACL')?> </option>
									<option value="5" ><?php _e('5','WEBLIZAR_ACL')?> </option>
									<option value="6" ><?php _e('6','WEBLIZAR_ACL')?> </option>
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
						<th scope="row" ><?php _e('No. Of Background Slideshow','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>

					<tr  style="border-bottom:none;">
						<td style="width:100% !important" id="tdslider">
						<?php
						$Slidshow_image = unserialize(get_option('Admin_custome_login_Slidshow'));
								for($i = 1; $i <= 6; $i++) {
								?>
								<div class="col-md-4 slideshow_settings" id="slideshow_settings_<?php echo $i;?>" style="<?php if($i<=$top_slideshow_no) { echo " "; } else{ ?> display:none <?php } ?>" >
								<div class="rpg-image-entry" id="rpg_img">
										<img src="<?php if($Slidshow_image['Slidshow_image_'.$i] != "") {echo $Slidshow_image['Slidshow_image_'.$i];} else {echo  WEBLIZAR_NALF_PLUGIN_URL.'images/rpg-default.jpg';} ?>"  class="rpg-meta-image" alt=""  style="" id="simages-<?php echo $i;?>">
										<input type="button" id="upload-background-<?php echo $i;?>" name="upload-background" value="Upload Image" class="button-primary" onClick="weblizar_image('<?php echo $i;?>')" />
										<input type="text" id="rpg_img_url-<?php echo $i;?>" name="rpg_img_url-<?php echo $i;?>" class="rpg_label_text-<?php echo $i;?>"  value=""  readonly="readonly" style="display:none;" />
								</div>
								</div>
								<?php
								}// end of foreach
							?>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="panel panel-primary panel-default content-panel">
			<div class="panel-body">
				<table class="form-table">
					<tr>
						<th scope="row" ><?php _e('Slider Animation','WEBLIZAR_ACL')?></th>
						<td></td>
					</tr>
					<tr class="radio-span" style="border-bottom:none;">
						<td>
							<select id="top_bg_slider_animation" class="standard-dropdown" name="top_bg_slider_animation"  >

									<option value="slider-style1" ><?php _e('Slider Animation 1','WEBLIZAR_ACL')?> </option>
									<option value="slider-style2" ><?php _e('Slider Animation 2','WEBLIZAR_ACL')?> </option>
									<option value="slider-style3" ><?php _e('Slider Animation 3','WEBLIZAR_ACL')?> </option>
									<option value="slider-style4" ><?php _e('Slider Animation 4','WEBLIZAR_ACL')?> </option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</div>	

	<button data-dialog1="somedialog1" class="dialog-button1" style="display:none">Open Dialog</button>
	<div id="somedialog1" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content" >
			<div class="morph-shape" id="morph-shape1" data-morph-open1="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close1="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php _e('Top Background ','WEBLIZAR_ACL')?></strong><?php _e('Setting Save Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" id="dialog-close-button1" data-dialog-close ><?php _e('Close','WEBLIZAR_ACL')?></button></div>
			</div>
		</div>
	</div>

	<button data-dialog11="somedialog11" class="dialog-button11" style="display:none">Open Dialog</button>
	<div id="somedialog11" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" id="morph-shape1" data-morph-open1="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close1="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php _e('Top Background ','WEBLIZAR_ACL')?></strong><?php _e('Setting Reset Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button11"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
			</div>
		</div>
	</div>
	
	<div class="panel panel-primary save-button-block">
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" onclick="return Custom_login_top('topbgSave', '');" class="btn btn-info btn-lg"><?php _e('Save Changes','WEBLIZAR_ACL')?></button>
			</div>
			<div class="pull-right">
				<button type="button" onclick="return Custom_login_top('topbgReset', '');" class="btn btn-primary btn-lg"><?php _e('Reset Default','WEBLIZAR_ACL')?></button>
			</div>
		</div>
	</div>

</div>
<!-- /row -->
<script>
function Custom_login_top(Action, id){		
	if(Action == "topbgSave") {
		(function() {
			var dlgtrigger1 = document.querySelector( '[data-dialog1]' ),

				somedialog1 = document.getElementById( dlgtrigger1.getAttribute( 'data-dialog1' ) ),
				// svg..
				morphEl1 = somedialog1.querySelector( '#morph-shape1' ),
				s1 = Snap( morphEl1.querySelector( 'svg' ) ),
				path = s1.select( 'path' ),
				steps = { 
					open : morphEl1.getAttribute( 'data-morph-open1' ),
					close : morphEl1.getAttribute( 'data-morph-close1' )
				},
				dlg = new DialogFx( somedialog1, {
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
			dlgtrigger1.addEventListener( 'click', dlg.toggle.bind(dlg) );
		})();
		// Top Background Type Option
		var select_bg_value = jQuery( "#select-background option:selected" ).val();
		
		//Top Background Color
		var top_background_color = jQuery("#top-background-color").val();
		
		//Top background Image URL
		var top_bg_image = jQuery("#top_image").val();
		
		//Top background Strech
		if (jQuery('#bg-strech').is(":checked"))
		{
		  var top_cover = "yes";
		}
		else{
			var top_cover = "no";
		}

		var top_bg_repeat = jQuery( "#top_bg_repeat option:selected" ).val();
		var top_bg_position = jQuery( "#top_bg_position option:selected" ).val();
		var top_bg_attachment = jQuery( "#top_bg_attachment option:selected" ).val();
		var top_slideshow_no = jQuery( "#top_slideshow_no option:selected" ).val();
		var top_bg_slider_animation = jQuery( "#top_bg_slider_animation option:selected" ).val();		
		
		// Slider image URL and Label Save
		number = jQuery("#top_slideshow_no").val();
		var a =[];
		var b =[];
		for(i=1;i<=6;i++){
			if(i<=number){
				
			  a[i] =document.getElementById("simages-"+i).src;
			  b[i] =jQuery("#image_label-"+i).val();				  
			}
			else{
				a[i]= '';
				b[i] = "";
			}
		}

		var PostData = "Action=" + Action + "&select_bg_value=" + select_bg_value + "&top_background_color=" + top_background_color + "&top_bg_image=" + top_bg_image  + "&top_cover=" + top_cover + "&top_bg_repeat=" + top_bg_repeat + "&top_bg_position=" + top_bg_position + "&top_bg_attachment=" + top_bg_attachment + "&top_slideshow_no=" + top_slideshow_no + "&top_bg_slider_animation=" + top_bg_slider_animation + "&Slidshow_image_1=" + a[1] + "&Slidshow_image_2=" + a[2] + "&Slidshow_image_3=" + a[3] + "&Slidshow_image_4=" + a[4] + "&Slidshow_image_5=" + a[5] + "&Slidshow_image_6=" + a[6] + "&image_label_1=" + b[1] + "&image_label_2=" + b[2] + "&image_label_3=" + b[3] + "&image_label_4=" + b[4] + "&image_label_5=" + b[5] + "&image_label_6=" + b[6];
		jQuery.ajax({
			dataType : 'html',
			type: 'POST',
			url : location.href,
			cache: false,
			data : PostData,
			complete : function() {  },
			success: function(data) {	
				// message box open
				jQuery(".dialog-button1").click();	
				// Function to close message box
				setTimeout(function(){
					jQuery("#dialog-close-button1").click();
				}, 1000);					
			}
		});
	}
	
	// Save Message box Close On Mouse Hover
	document.getElementById('dialog-close-button1').disabled = false;
	 jQuery('#dialog-close-button1').hover(function () {
		   jQuery("#dialog-close-button1").click();
		   document.getElementById('dialog-close-button1').disabled = true; 
		 }
	 );
	 
	// Reset Message box Close On Mouse Hover
	document.getElementById('dialog-close-button11').disabled = false;
	 jQuery('#dialog-close-button11').hover(function () {
		   jQuery("#dialog-close-button11").click();
		   document.getElementById('dialog-close-button11').disabled = true; 
		 }
	 );
	 
	if(Action == "topbgReset") {
		(function() {
			var dlgtrigger1 = document.querySelector( '[data-dialog11]' ),
				somedialog1 = document.getElementById( dlgtrigger1.getAttribute( 'data-dialog11' ) ),
				// svg..
				morphEl1 = somedialog1.querySelector( '#morph-shape1' ),
				s1 = Snap( morphEl1.querySelector( 'svg' ) ),
				path = s1.select( 'path' ),
				steps = { 
					open : morphEl1.getAttribute( 'data-morph-open1' ),
					close : morphEl1.getAttribute( 'data-morph-close1' )
				},
				dlg = new DialogFx( somedialog1, {
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
			dlgtrigger1.addEventListener( 'click', dlg.toggle.bind(dlg) );
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
				jQuery(".no-background").hide();
				jQuery( "#div-bakground-image" ).show();

				//Top Background Select
				 jQuery("#select-background").val('static-background-image');

				//Top Background Repeat 
				 jQuery("#top_bg_repeat").val('repeat');

				//Top Background Position 
				 jQuery("#top_bg_position").val('left top');

				//Top Background Attachment 
				 jQuery("#top_bg_attachment").val('fixed');

				//Top SlideShow No 
				 jQuery("#top_slideshow_no").val('6');

				//Top Slider Animation 
				 jQuery("#top_bg_slider_animation").val('slider-style1');

				// Top Background Image
				document.getElementById("top_image").value = "<?php echo WEBLIZAR_NALF_PLUGIN_URL?>/images/3d-background.jpg";

				// Top Background Color
				jQuery("#td-top-background-color a.wp-color-result").closest("a").css({"background-color": "#f9fad2"});

				//hide Image slider
				number = jQuery("#top_slideshow_no").val();

				for(i=1;i<=6;i++){
					if(i<=number){
						jQuery("#slideshow_settings_"+i).show();
					}
					else{
						jQuery("#slideshow_settings_"+i).hide();
					}

				//set default value to 	Image slider
				}
				for(i=1;i<=6;i++){
					jQuery("#simages-"+i).attr('src','<?php echo WEBLIZAR_NALF_PLUGIN_URL?>/images/rpg-default.jpg' );
				}
				jQuery(".dialog-button11").click();
				// Function to close message box
				setTimeout(function(){
					jQuery("#dialog-close-button11").click();
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
	if($Action == "topbgSave") {
		$select_bg_value = $_POST['select_bg_value'];
		$top_background_color = $_POST['top_background_color'];
		$top_bg_image = $_POST['top_bg_image'];
		$top_cover = $_POST['top_cover'];
		$top_bg_repeat = $_POST['top_bg_repeat'];
		$top_bg_position = $_POST['top_bg_position'];
		$top_bg_attachment = $_POST['top_bg_attachment'];
		$top_slideshow_no = $_POST['top_slideshow_no'];
		$top_bg_slider_animation = $_POST['top_bg_slider_animation'];
		
		$Slidshow_image_1 = $_POST['Slidshow_image_1'];
		$Slidshow_image_2 = $_POST['Slidshow_image_2'];
		$Slidshow_image_3 = $_POST['Slidshow_image_3'];
		$Slidshow_image_4 = $_POST['Slidshow_image_4'];
		$Slidshow_image_5 = $_POST['Slidshow_image_5'];
		$Slidshow_image_6 = $_POST['Slidshow_image_6'];
		
		$image_label_1 = $_POST['image_label_1'];
		$image_label_2 = $_POST['image_label_2'];
		$image_label_3 = $_POST['image_label_3'];
		$image_label_4 = $_POST['image_label_4'];
		$image_label_5 = $_POST['image_label_5'];
		$image_label_6 = $_POST['image_label_6'];

		// Save Values in Option Table
		$top_page= serialize(array(
			'top_bg_type'=> $select_bg_value,
			'top_color' => $top_background_color,
			'top_image' => $top_bg_image,
			'top_cover' => $top_cover,
			'top_repeat' => $top_bg_repeat,
			'top_position' => $top_bg_position,
			'top_attachment' => $top_bg_attachment,
			'top_slideshow_no' => $top_slideshow_no,
			'top_bg_slider_animation' => $top_bg_slider_animation
		));
		update_option('Admin_custome_login_top', $top_page);

		$Slidshow_image= serialize(array(
			'Slidshow_image_1'=> $Slidshow_image_1 ,
			'Slidshow_image_2'=> $Slidshow_image_2 ,
			'Slidshow_image_3'=> $Slidshow_image_3 ,
			'Slidshow_image_4'=> $Slidshow_image_4 ,
			'Slidshow_image_5'=> $Slidshow_image_5 ,
			'Slidshow_image_6'=> $Slidshow_image_6 ,
			'Slidshow_image_label_1'=> $image_label_1 ,
			'Slidshow_image_label_2'=> $image_label_2 ,
			'Slidshow_image_label_3'=> $image_label_3 ,
			'Slidshow_image_label_4'=> $image_label_4 ,
			'Slidshow_image_label_5'=> $image_label_5 ,
			'Slidshow_image_label_6'=> $image_label_6 
		));
		update_option('Admin_custome_login_Slidshow', $Slidshow_image);
	}

	if($Action == "topbgReset") {
		$top_page= serialize(array(
			'top_bg_type'=>'static-background-image',
			'top_color' => '#f9fad2',
			'top_image' =>   WEBLIZAR_NALF_PLUGIN_URL.'/images/3d-background.jpg',
			'top_cover' => 'yes',
			'top_repeat' => 'repeat',
			'top_position' => 'left top',
			'top_attachment' => 'fixed',
			'top_slideshow_no' => '6',
			'top_bg_slider_animation' => 'slider-style1'
		));
		update_option('Admin_custome_login_top', $top_page);
		$Slidshow_image= serialize(array(
		'Slidshow_image_1'=> WEBLIZAR_NALF_PLUGIN_URL.'/images/rpg-default.jpg',
		'Slidshow_image_2'=> WEBLIZAR_NALF_PLUGIN_URL.'/images/rpg-default.jpg',
		'Slidshow_image_3'=> WEBLIZAR_NALF_PLUGIN_URL.'/images/rpg-default.jpg',
		'Slidshow_image_4'=> WEBLIZAR_NALF_PLUGIN_URL.'/images/rpg-default.jpg',
		'Slidshow_image_5'=> WEBLIZAR_NALF_PLUGIN_URL.'/images/rpg-default.jpg',
		'Slidshow_image_6'=> WEBLIZAR_NALF_PLUGIN_URL.'/images/rpg-default.jpg',
		'Slidshow_image_label_1'=> '' ,
		'Slidshow_image_label_2'=> '' ,
		'Slidshow_image_label_3'=> '' ,
		'Slidshow_image_label_4'=> '' ,
		'Slidshow_image_label_5'=> '' ,
		'Slidshow_image_label_6'=> '' 
		));
		update_option('Admin_custome_login_Slidshow', $Slidshow_image);
	}
}
?>