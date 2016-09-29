<!-- Dashboard Settings panel content --- >
<!---------------------------------------->
<Script>
//button Headline-Font-size slider
  jQuery(function() {
    jQuery( "#button-size-slider" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 100,
		min:0,
		slide: function( event, ui ) {
        jQuery( "#headline-size-text-box" ).val( ui.value );
		}
	});
	jQuery( "#button-size-slider" ).slider("value",<?php if($heading_font_size != ""){echo $heading_font_size;}else{echo "30";}?> );
	jQuery( "#headline-size-text-box" ).val( jQuery( "#button-size-slider" ).slider( "value") );
  });

//button Input-Font-size slider
  jQuery(function() {
    jQuery( "#button-size-slider2" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 100,
		min:0,
		slide: function( event, ui ) {
        jQuery( "#input-size-text-box" ).val( ui.value );
		}
	});
	jQuery( "#button-size-slider2" ).slider("value",<?php if($input_font_size != ""){echo $input_font_size;}else{echo "30";}?> );
	jQuery( "#input-size-text-box" ).val( jQuery( "#button-size-slider2" ).slider( "value") );
  });

//button Link-font-size slider
  jQuery(function() {
    jQuery( "#button-size-slider3" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 100,
		min:0,
		slide: function( event, ui ) {
        jQuery( "#link-size-text-box" ).val( ui.value );
		}
	});
	jQuery( "#button-size-slider3" ).slider("value",<?php if($link_size != ""){echo $link_size;}else{echo "30";}?>);
	jQuery( "#link-size-text-box" ).val( jQuery( "#button-size-slider3" ).slider( "value") );

  });

//button Button-font-size slider
  jQuery(function() {
    jQuery( "#button-size-slider7" ).slider({
		orientation: "horizontal",
		range: "min",
		max: 100,
		min:0,
		slide: function( event, ui ){
        jQuery( "#button-size-text-box" ).val( ui.value );
		}
	});
	jQuery( "#button-size-slider7" ).slider("value",<?php if($button_font_size != ""){echo $button_font_size;}else{echo "30";}?> );
	jQuery( "#button-size-text-box" ).val( jQuery("#button-size-slider7").slider("value"));
  });

//Set Value of Drop Down
jQuery(document).ready(function(){
	//Headline Font Style
	 jQuery("#headline_font_style").val('<?php if($heading_font_style != ""){echo $heading_font_style;}else {echo "";}?>');
	//Input Font Style
	 jQuery("#input_font_style").val('<?php if($input_font_style != ""){echo $input_font_style;}else {echo "";}?>');
	//Link Font Style 
	 jQuery("#link_font_style").val('<?php if($link_font_style != ""){echo $link_font_style;}else {echo "";}?>');
	//Button Font Style 
	 jQuery("#button_font_style").val('<?php if($button_font_style != ""){echo $button_font_style;}else {echo "";}?>'); 
});
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
								<?php _e('Text And Color Settings','WEBLIZAR_ACL')?>
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
					<th scope="row" ><?php _e('Headline Font Color','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td id="td-headline-font-color">
						<input id="headline-font-color" name="headline-font-color" type="text" value="<?php echo $heading_font_color; ?>" class="my-color-field" data-default-color="#ffffff" />
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Input Font Color','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td id="td-input-font-color">
						<input id="input-font-color" name="input-font-color" type="text" value="<?php echo $input_font_color; ?>" class="my-color-field" data-default-color="#ffffff"/>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Link Color','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td id="td-link-font-color">
						<input id="link-color" name="link-color" type="text" value="<?php echo $link_color; ?>" class="my-color-field" data-default-color="#ffffff" />
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Button Color','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td id="td-button-font-color">
						<input id="button-color" name="button-color" type="text" value="<?php echo $button_color; ?>" class="my-color-field" data-default-color="#ffffff" />
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Headline Font size','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<div id="button-size-slider" class="size-slider" style="width: 25%;display:inline-block"></div>
						<input type="text" class="slider-text" id="headline-size-text-box" name="headline-size-text-box"  readonly="readonly">
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
					<th scope="row" ><?php _e('Input Font Size','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<div id="button-size-slider2" class="size-slider" style="width: 25%;display:inline-block"></div>
						<input type="text" class="slider-text" id="input-size-text-box" name="input-size-text-box"  readonly="readonly">
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
					<th scope="row" ><?php _e('Link Font Size','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<div id="button-size-slider3" class="size-slider" style="width: 25%;display:inline-block"></div>
						<input type="text" class="slider-text" id="link-size-text-box" name="link-size-text-box"  readonly="readonly">
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
					<th scope="row" ><?php _e('Button Font Size','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<div id="button-size-slider7" class="size-slider" style="width: 25%;display:inline-block"></div>
						<input type="text" class="slider-text" id="button-size-text-box" name="button-size-text-box"  readonly="readonly">
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
					<th scope="row" ><?php _e('Enable Link shadow?','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<span>
							<input type="radio" name="enable_Link_shadow" value="yes" id="enable_Link_shadow1" <?php if($enable_link_shadow=="yes")echo "checked"; ?> />&nbsp;<?php _e('Yes','WEBLIZAR_ACL')?><br>
						</span>
						<span>
							<input type="radio" name="enable_Link_shadow" value="no" id="enable_Link_shadow2" <?php if($enable_link_shadow=="no")echo "checked"; ?> />&nbsp;<?php _e('No','WEBLIZAR_ACL')?><br>
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
					<th scope="row" ><?php _e('Link Shadow Color','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr  style="border-bottom:none;">
					<td>
						<input id="link-shadow-color" name="link-shadow-color" type="text" value="<?php echo $link_shadow_color; ?>" class="my-color-field" data-default-color="#ffffff"/>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="panel panel-primary panel-default content-panel">
		<div class="panel-body">
			<table class="form-table">
				<tr>
					<th scope="row" ><?php _e('Headline Font Style','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<?php $RPP_Font_Style=""; ?>
				<tr class="" style="border-bottom:none;">
					<td>
						<select id="headline_font_style" class="standard-dropdown" name="headline_font_style">
							<optgroup label="Default Fonts">
								<option value="Arial" <?php selected($RPP_Font_Style, 'Arial' ); ?>>Arial</option>
								<option value="Arial Black" <?php selected($RPP_Font_Style, 'Arial Black' ); ?>>Arial Black</option>
								<option value="Courier New" <?php selected($RPP_Font_Style, 'Courier New' ); ?>>Courier New</option>
								<option value="Georgia" <?php selected($RPP_Font_Style, 'Georgia' ); ?>>Georgia</option>
								<option value="Grande" <?php selected($RPP_Font_Style, 'Grande' ); ?>>Grande</option>
								<option value="Helvetica Neue" <?php selected($RPP_Font_Style, 'Helvetica Neue' ); ?>>Helvetica Neue</option>
								<option value="Impact" <?php selected($RPP_Font_Style, 'Impact' ); ?>>Impact</option>
								<option value="Lucida" <?php selected($RPP_Font_Style, 'Lucida' ); ?>>Lucida</option>
								<option value="Lucida Grande" <?php selected($RPP_Font_Style, 'Lucida Grande' ); ?>>Lucida Grande</option>
								<option value="OpenSansBold" <?php selected($RPP_Font_Style, 'OpenSansBold' ); ?>>OpenSansBold</option>
								<option value="Palatino" <?php selected($RPP_Font_Style, 'Palatino' ); ?>>Palatino</option>
								<option value="Sans" <?php selected($RPP_Font_Style, 'Sans' ); ?>>Sans</option>
								<option value="Sans-Serif" <?php selected($RPP_Font_Style, 'Sans-Serif' ); ?>>Sans-Serif</option>
								<option value="Tahoma" <?php selected($RPP_Font_Style, 'Tahoma' ); ?>>Tahoma</option>
								<option value="Times New Roman"<?php selected($RPP_Font_Style, 'Times New Roman' ); ?>>Times New Roman</option>
								<option value="Trebuchet" <?php selected($RPP_Font_Style, 'Trebuchet' ); ?>>Trebuchet</option>
								<option value="Verdana" <?php selected($RPP_Font_Style, 'Verdana' ); ?>>Verdana</option>
							</optgroup>
							<optgroup label="Google Fonts">
								<option value="Abel"<?php selected($RPP_Font_Style, 'Abel' ); ?>>Abel</option>
								<option value="Abril Fatface" <?php selected($RPP_Font_Style, 'Abril Fatface' ); ?>>Abril Fatface</option>
								<option value="Aclonica" <?php selected($RPP_Font_Style, 'Aclonica' ); ?>>Aclonica</option>
								<option value="Acme" <?php selected($RPP_Font_Style, 'Acme' ); ?>>Acme</option>
								<option value="Actor" <?php selected($RPP_Font_Style, 'Actor' ); ?>>Actor</option>
								<option value="Adamina" <?php selected($RPP_Font_Style, 'Adamina' ); ?>>Adamina</option>
								<option value="Advent Pro" <?php selected($RPP_Font_Style, 'Advent Pro' ); ?>>Advent Pro</option>
								<option value="Aguafina Script" <?php selected($RPP_Font_Style, 'Aguafina Script' ); ?>>Aguafina Script</option>
								<option value="Aladin" <?php selected($RPP_Font_Style, 'Aladin' ); ?>>Aladin</option>
								<option value="Aldrich" <?php selected($RPP_Font_Style, 'Aldrich' ); ?>>Aldrich</option>
								<option value="Alegreya" <?php selected($RPP_Font_Style, 'Alegreya' ); ?>>Alegreya</option>
								<option value="Alegreya SC" <?php selected($RPP_Font_Style, 'Alegreya SC' ); ?>>Alegreya SC</option>
								<option value="Alex Brush" <?php selected($RPP_Font_Style, 'Alex Brush' ); ?>>Alex Brush</option>
								<option value="Alfa Slab One" <?php selected($RPP_Font_Style, 'Alfa Slab One' ); ?>>Alfa Slab One</option>
								<option value="Alice" <?php selected($RPP_Font_Style, 'Alice' ); ?>>Alice</option>
								<option value="Alike" <?php selected($RPP_Font_Style, 'Alike' ); ?>>Alike</option>
								<option value="Alike Angular" <?php selected($RPP_Font_Style, 'Alike Angular' ); ?>>Alike Angular</option>
								<option value="Allan" <?php selected($RPP_Font_Style, 'Allan' ); ?>>Allan</option>
								<option value="Allerta" <?php selected($RPP_Font_Style, 'Allerta' ); ?>>Allerta</option>
								<option value="Allerta Stencil"<?php selected($RPP_Font_Style, 'Allerta Stencil' ); ?>>Allerta Stencil</option>
								<option value="Allura" <?php selected($RPP_Font_Style, 'Allura' ); ?>>Allura</option>
								<option value="Almendra" <?php selected($RPP_Font_Style, 'Almendra' ); ?>>Almendra</option>
								<option value="Almendra SC"<?php selected($RPP_Font_Style, 'Almendra SC' ); ?>>Almendra SC</option>
								<option value="Amaranth" <?php selected($RPP_Font_Style, 'Amaranth' ); ?>>Amaranth</option> <option value="Amatic SC"<?php selected($RPP_Font_Style, 'Amatic SC' ); ?>>Amatic SC</option>
								<option value="Amethysta" <?php selected($RPP_Font_Style, 'Amethysta' ); ?>>Amethysta</option><option value="Andada"<?php selected($RPP_Font_Style, 'Andada' ); ?>>Andada</option>
								<option value="Andika" <?php selected($RPP_Font_Style, 'Andika' ); ?>>Andika</option>
								<option value="Angkor" <?php selected($RPP_Font_Style, 'Angkor' ); ?>>Angkor</option>
								<option value="Annie_Use_Your_Telescope" <?php selected($RPP_Font_Style, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option>
								<option value="Anonymous Pro" <?php selected($RPP_Font_Style, 'Anonymous Pro' ); ?>>Anonymous Pro</option>
								<option value="Antic" <?php selected($RPP_Font_Style, 'Antic' ); ?>>Antic</option>
								<option value="Antic Didone" <?php selected($RPP_Font_Style, 'Antic Didone' ); ?>>Antic Didone</option>
								<option value="Antic Slab" <?php selected($RPP_Font_Style, 'Antic Slab' ); ?>>Antic Slab</option>
								<option value="Anton" <?php selected($RPP_Font_Style, 'Anton' ); ?>>Anton</option>
								<option value="Arapey" <?php selected($RPP_Font_Style, 'Arapey' ); ?>>Arapey</option>
								<option value="Arbutus" <?php selected($RPP_Font_Style, 'Arbutus' ); ?>>Arbutus</option>
								<option value="Architects Daughter" <?php selected($RPP_Font_Style, 'Architects Daughter' ); ?>>Architects Daughter</option>
								<option value="Arimo" <?php selected($RPP_Font_Style, 'Arimo' ); ?>>Arimo</option>
								<option value="Arizonia" <?php selected($RPP_Font_Style, 'Arizonia' ); ?>>Arizonia</option>
								<option value="Armata" <?php selected($RPP_Font_Style, 'Armata' ); ?>>Armata</option>
								<option value="Artifika" <?php selected($RPP_Font_Style, 'Artifika' ); ?>>Artifika</option>
								<option value="Arvo" <?php selected($RPP_Font_Style, 'Arvo' ); ?>>Arvo</option>
								<option value="Asap" <?php selected($RPP_Font_Style, 'Asap' ); ?>>Asap</option>
								<option value="Asset" <?php selected($RPP_Font_Style, 'Asset' ); ?>>Asset</option>
								<option value="Astloch" <?php selected($RPP_Font_Style, 'Astloch' ); ?>>Astloch</option>
								<option value="Asul" <?php selected($RPP_Font_Style, 'Asul' ); ?>>Asul</option>
								<option value="Atomic Age" <?php selected($RPP_Font_Style, 'Atomic Age' ); ?>>Atomic Age</option>
								<option value="Aubrey" <?php selected($RPP_Font_Style, 'Aubrey' ); ?>>Aubrey</option>
								<option value="Audiowide" <?php selected($RPP_Font_Style, 'Audiowide' ); ?>>Audiowide</option>
								<option value="Average" <?php selected($RPP_Font_Style, 'Average' ); ?>>Average</option>
								<option value="Averia Gruesa Libre" <?php selected($RPP_Font_Style, 'Averia Gruesa Libre' ); ?>>Averia Gruesa Libre</option>
								<option value="Averia Libre" <?php selected($RPP_Font_Style, 'Averia Libre' ); ?>>Averia Libre</option>
								<option value="Averia Sans Libre" <?php selected($RPP_Font_Style, 'Averia Sans Libre' ); ?>>Averia Sans Libre</option>
								<option value="Averia Serif Libre" <?php selected($RPP_Font_Style, 'Averia Serif Libre' ); ?>>Averia Serif Libre</option>
								<option value="Bad Script" <?php selected($RPP_Font_Style, 'Bad Script' ); ?>>Bad Script</option>
								<option value="Balthazar" <?php selected($RPP_Font_Style, 'Balthazar' ); ?>>Balthazar</option>
								<option value="Bangers" <?php selected($RPP_Font_Style, 'Bangers' ); ?>>Bangers</option>
								<option value="Basic" <?php selected($RPP_Font_Style, 'Basic' ); ?>>Basic</option>
								<option value="Battambang" <?php selected($RPP_Font_Style, 'Battambang' ); ?>>Battambang</option>
								<option value="Baumans" <?php selected($RPP_Font_Style, 'Baumans' ); ?>>Baumans</option>
								<option value="Bayon" <?php selected($RPP_Font_Style, 'Bayon' ); ?>>Bayon</option>
								<option value="Belgrano"<?php selected($RPP_Font_Style, 'Belgrano' ); ?>>Belgrano</option>
								<option value="Belleza" <?php selected($RPP_Font_Style, 'Belleza' ); ?>>Belleza</option>
								<option value="Bentham" <?php selected($RPP_Font_Style, 'Bentham' ); ?>>Bentham</option>
								<option value="Berkshire Swash"<?php selected($RPP_Font_Style, 'Berkshire Swash' ); ?>>Berkshire Swash</option>
								<option value="Bevan"  <?php selected($RPP_Font_Style, 'Bevan' ); ?>>Bevan</option>
								<option value="Bigshot One"<?php selected($RPP_Font_Style, 'Bigshot One' ); ?>>Bigshot One</option>
								<option value="Bilbo" <?php selected($RPP_Font_Style, 'Bilbo' ); ?>>Bilbo</option>
								<option value="Bilbo Swash Caps" <?php selected($RPP_Font_Style, 'Bilbo Swash Caps' ); ?>>Bilbo Swash Caps</option>
								<option value="Bitter" <?php selected($RPP_Font_Style, 'Bitter' ); ?>>Bitter</option>
								<option value="Black Ops One" <?php selected($RPP_Font_Style, 'Black+Ops+One' ); ?>>Black Ops One</option>
								<option value="Bokor" <?php selected($RPP_Font_Style, 'Bokor' ); ?>>Bokor</option>
								<option value="Bonbon" <?php selected($RPP_Font_Style, 'Bonbon' ); ?>>Bonbon</option>
								<option value="Boogaloo" <?php selected($RPP_Font_Style, 'Boogaloo' ); ?>>Boogaloo</option>
								<option value="Bowlby One" <?php selected($RPP_Font_Style, 'Bowlby One' ); ?>>Bowlby One</option>
								<option value="Bowlby One SC" <?php selected($RPP_Font_Style, 'Bowlby One SC' ); ?>>Bowlby One SC</option>
								<option value="Brawler" <?php selected($RPP_Font_Style, 'Brawler' ); ?>>Brawler</option>
								<option value="Bree Serif" <?php selected($RPP_Font_Style, 'Bree+Serif' ); ?>>Bree Serif</option>
								<option value="Bubblegum Sans"  <?php selected($RPP_Font_Style, 'Bubblegum Sans' ); ?>>Bubblegum Sans</option>
								<option value="Buda"  <?php selected($RPP_Font_Style, 'Buda' ); ?>>Buda</option>
								<option value="Buenard"  <?php selected($RPP_Font_Style, 'Buenard' ); ?>>Buenard</option>
								<option value="Butcherman"  <?php selected($RPP_Font_Style, 'Butcherman' ); ?>>Butcherman</option>
								<option value="Butterfly Kids" <?php selected($RPP_Font_Style, 'Butterfly Kids' ); ?>>Butterfly Kids</option>
								<option value="Cabin"  <?php selected($RPP_Font_Style, 'Cabin' ); ?>>Cabin</option>
								<option value="Cabin Condensed"  <?php selected($RPP_Font_Style, 'Cabin Condensed' ); ?>>Cabin Condensed</option>
								<option value="Cabin Sketch"  <?php selected($RPP_Font_Style, 'Cabin Sketch' ); ?>>Cabin Sketch</option>
								<option value="Caesar Dressing"  <?php selected($RPP_Font_Style, 'Caesar Dressing' ); ?>>Caesar Dressing</option>
								<option value="Cagliostro"  <?php selected($RPP_Font_Style, 'Cagliostro' ); ?>>Cagliostro</option>
								<option value="Calligraffitti"  <?php selected($RPP_Font_Style, 'Calligraffitti' ); ?>>Calligraffitti</option>
								<option value="Cambo"  <?php selected($RPP_Font_Style, 'Cambo' ); ?>>Cambo</option>
								<option value="Candal"  <?php selected($RPP_Font_Style, 'Candal' ); ?>>Candal</option>
								<option value="Cantarell"  <?php selected($RPP_Font_Style, 'Cantarell' ); ?>>Cantarell</option>
								<option value="Cantata One"  <?php selected($RPP_Font_Style, 'Cantata One' ); ?>>Cantata One</option>
								<option value="Cardo"  <?php selected($RPP_Font_Style, 'Cardo' ); ?>>Cardo</option>
								<option value="Carme"  <?php selected($RPP_Font_Style, 'Carme' ); ?>>Carme</option>
								<option value="Carter One"  <?php selected($RPP_Font_Style, 'Carter One' ); ?>>Carter One</option>
								<option value="Caudex"  <?php selected($RPP_Font_Style, 'Caudex' ); ?>>Caudex</option>
								<option value="Cedarville Cursive"  <?php selected($RPP_Font_Style, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option>
								<option value="Ceviche One"  <?php selected($RPP_Font_Style, 'Ceviche One' ); ?>>Ceviche One</option>
								<option value="Changa One"  <?php selected($RPP_Font_Style, 'Changa One' ); ?>>Changa One</option>
								<option value="Chango"  <?php selected($RPP_Font_Style, 'Chango' ); ?>>Chango</option>
								<option value="Chau Philomene One"  <?php selected($RPP_Font_Style, 'Chau Philomene One' ); ?>>Chau Philomene One</option>
								<option value="Chelsea Market"  <?php selected($RPP_Font_Style, 'Chelsea Market' ); ?>>Chelsea Market</option>
								<option value="Chenla"  <?php selected($RPP_Font_Style, 'Chenla' ); ?>>Chenla</option>
								<option value="Cherry Cream Soda"  <?php selected($RPP_Font_Style, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option>
								<option value="Chewy"  <?php selected($RPP_Font_Style, 'Chewy' ); ?>>Chewy</option>
								<option value="Chicle"  <?php selected($RPP_Font_Style, 'Chicle' ); ?>>Chicle</option>
								<option value="Chivo"  <?php selected($RPP_Font_Style, 'Chivo' ); ?>>Chivo</option>
								<option value="Coda"  <?php selected($RPP_Font_Style, 'Coda' ); ?>>Coda</option>
								<option value="Coda Caption"  <?php selected($RPP_Font_Style, 'Coda Caption' ); ?>>Coda Caption</option>
								<option value="Codystar"  <?php selected($RPP_Font_Style, 'Codystar' ); ?>>Codystar</option>
								<option value="Comfortaa"  <?php selected($RPP_Font_Style, 'Comfortaa' ); ?>>Comfortaa</option>
								<option value="Coming Soon"  <?php selected($RPP_Font_Style, 'Coming Soon' ); ?>>Coming Soon</option>
								<option value="Concert One"  <?php selected($RPP_Font_Style, 'Concert One' ); ?>>Concert One</option>
								<option value="Condiment"  <?php selected($RPP_Font_Style, 'Condiment' ); ?>>Condiment</option>
								<option value="Content"  <?php selected($RPP_Font_Style, 'Content' ); ?>>Content</option>
								<option value="Contrail One"  <?php selected($RPP_Font_Style, 'Contrail One' ); ?>>Contrail One</option>
								<option value="Convergence"  <?php selected($RPP_Font_Style, 'Convergence' ); ?>>Convergence</option>
								<option value="Cookie"  <?php selected($RPP_Font_Style, 'Cookie' ); ?>>Cookie</option>
								<option value="Copse"  <?php selected($RPP_Font_Style, 'Copse' ); ?>>Copse</option>
								<option value="Corben"  <?php selected($RPP_Font_Style, 'Corben' ); ?>>Corben</option>
								<option value="Courgette"  <?php selected($RPP_Font_Style, 'Courgette' ); ?>>Courgette</option>
								<option value="Cousine"  <?php selected($RPP_Font_Style, 'Cousine' ); ?>>Cousine</option>
								<option value="Coustard"  <?php selected($RPP_Font_Style, 'Coustard' ); ?>>Coustard</option>
								<option value="Covered By Your Grace"  <?php selected($RPP_Font_Style, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option>
								<option value="Crafty Girls"  <?php selected($RPP_Font_Style, 'Crafty Girls' ); ?>>Crafty Girls</option>
								<option value="Creepster"  <?php selected($RPP_Font_Style, 'Creepster' ); ?>>Creepster</option>
								<option value="Crete Round"  <?php selected($RPP_Font_Style, 'Crete Round' ); ?>>Crete Round</option>
								<option value="Crimson Text"  <?php selected($RPP_Font_Style, 'Crimson Text' ); ?>>Crimson Text</option>
								<option value="Crushed"  <?php selected($RPP_Font_Style, 'Crushed' ); ?>>Crushed</option>
								<option value="Cuprum"  <?php selected($RPP_Font_Style, 'Cuprum' ); ?>>Cuprum</option>
								<option value="Cutive"  <?php selected($RPP_Font_Style, 'Cutive' ); ?>>Cutive</option>
								<option value="Damion"  <?php selected($RPP_Font_Style, 'Damion' ); ?>>Damion</option>
								<option value="Dancing Script"  <?php selected($RPP_Font_Style, 'Dancing Script' ); ?>>Dancing Script</option>
								<option value="Dangrek"  <?php selected($RPP_Font_Style, 'Dangrek' ); ?>>Dangrek</option>
								<option value="Dawning of a New Day"  <?php selected($RPP_Font_Style, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option>
								<option value="Days One"  <?php selected($RPP_Font_Style, 'Days One' ); ?>>Days One</option>
								<option value="Delius"  <?php selected($RPP_Font_Style, 'Delius' ); ?>>Delius</option>
								<option value="Delius Swash Caps"  <?php selected($RPP_Font_Style, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option>
								<option value="Delius Unicase"  <?php selected($RPP_Font_Style, 'Delius Unicase' ); ?>>Delius Unicase</option>
								<option value="Della Respira"  <?php selected($RPP_Font_Style, 'Della Respira' ); ?>>Della Respira</option>
								<option value="Devonshire"  <?php selected($RPP_Font_Style, 'Devonshire' ); ?>>Devonshire</option>
								<option value="Didact Gothic"  <?php selected($RPP_Font_Style, 'Didact Gothic' ); ?>>Didact Gothic</option>
								<option value="Diplomata"  <?php selected($RPP_Font_Style, 'Diplomata' ); ?>>Diplomata</option>
								<option value="Diplomata SC"  <?php selected($RPP_Font_Style, 'Diplomata SC' ); ?>>Diplomata SC</option>
								<option value="Doppio One"  <?php selected($RPP_Font_Style, 'Doppio One' ); ?>>Doppio One</option>
								<option value="Dorsa"  <?php selected($RPP_Font_Style, 'Dorsa' ); ?>>Dorsa</option>
								<option value="Dosis"  <?php selected($RPP_Font_Style, 'Dosis' ); ?>>Dosis</option>
								<option value="Dr Sugiyama"  <?php selected($RPP_Font_Style, 'Dr Sugiyama' ); ?>>Dr Sugiyama</option>
								<option value="Droid Sans"  <?php selected($RPP_Font_Style, 'Droid Sans' ); ?>>Droid Sans</option>
								<option value="Droid Sans Mono"  <?php selected($RPP_Font_Style, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option>
								<option value="Droid Serif" <?php selected($RPP_Font_Style, 'Droid Serif' ); ?>>Droid Serif</option>
								<option value="Duru Sans" <?php selected($RPP_Font_Style, 'Duru Sans' ); ?>>Duru Sans</option>
								<option value="Dynalight" <?php selected($RPP_Font_Style, 'Dynalight' ); ?>>Dynalight</option>
								<option value="EB Garamond" <?php selected($RPP_Font_Style, 'EB Garamond' ); ?>>EB Garamond</option>
								<option value="Eater" <?php selected($RPP_Font_Style, 'Eater' ); ?>>Eater</option>
								<option value="Economica" <?php selected($RPP_Font_Style, 'Economica' ); ?>>Economica</option>
								<option value="Electrolize" <?php selected($RPP_Font_Style, 'Electrolize' ); ?>>Electrolize</option>
								<option value="Emblema One" <?php selected($RPP_Font_Style, 'Emblema One' ); ?>>Emblema One</option>
								<option value="Emilys Candy" <?php selected($RPP_Font_Style, 'Emilys Candy' ); ?>>Emilys Candy</option>
								<option value="Engagement" <?php selected($RPP_Font_Style, 'Engagement' ); ?>>Engagement</option>
								<option value="Enriqueta" <?php selected($RPP_Font_Style, 'Enriqueta' ); ?>>Enriqueta</option>
								<option value="Erica One" <?php selected($RPP_Font_Style, 'Erica One' ); ?>>Erica One</option>
								<option value="Esteban" <?php selected($RPP_Font_Style, 'Esteban' ); ?>>Esteban</option>
								<option value="Euphoria Script">Euphoria Script</option>
								<option value="Ewert" <?php selected($RPP_Font_Style, 'Ewert' ); ?>>Ewert</option>
								<option value="Exo" <?php selected($RPP_Font_Style, 'Exo' ); ?>>Exo</option>
								<option value="Expletus Sans" <?php selected($RPP_Font_Style, 'Expletus Sans' ); ?>>Expletus Sans</option>
								<option value="Fanwood Text" <?php selected($RPP_Font_Style, 'Fanwood Text' ); ?>>Fanwood Text</option>
								<option value="Fascinate" <?php selected($RPP_Font_Style, 'Fascinate' ); ?>>Fascinate</option>
								<option value="Fascinate Inline" <?php selected($RPP_Font_Style, 'Fascinate Inline' ); ?>>Fascinate Inline</option>
								<option value="Federant" <?php selected($RPP_Font_Style, 'Federant' ); ?>>Federant</option>
								<option value="Federo" <?php selected($RPP_Font_Style, 'Federo' ); ?>>Federo</option>
								<option value="Felipa" <?php selected($RPP_Font_Style, 'Felipa' ); ?>>Felipa</option>
								<option value="Fjord One" <?php selected($RPP_Font_Style, 'Fjord One' ); ?>>Fjord One</option>
								<option value="Flamenco" <?php selected($RPP_Font_Style, 'Flamenco' ); ?>>Flamenco</option>
								<option value="Flavors" <?php selected($RPP_Font_Style, 'Flavors' ); ?>>Flavors</option>
								<option value="Fondamento" <?php selected($RPP_Font_Style, 'Fondamento' ); ?>>Fondamento</option>
								<option value="Fontdiner Swanky" <?php selected($RPP_Font_Style, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option>
								<option value="Forum" <?php selected($RPP_Font_Style, 'Forum' ); ?>>Forum</option>
								<option value="Francois One" <?php selected($RPP_Font_Style, 'Francois One' ); ?>>Francois One</option>
								<option value="Fredericka the Great" <?php selected($RPP_Font_Style, 'Fredericka the Great' ); ?>>Fredericka the Great</option>
								<option value="Fredoka One" <?php selected($RPP_Font_Style, 'Fredoka One' ); ?>>Fredoka One</option>
								<option value="Freehand" <?php selected($RPP_Font_Style, 'Freehand' ); ?>>Freehand</option>
								<option value="Fresca" <?php selected($RPP_Font_Style, 'Fresca' ); ?>>Fresca</option>
								<option value="Frijole" <?php selected($RPP_Font_Style, 'Frijole' ); ?>>Frijole</option>
								<option value="Fugaz One" <?php selected($RPP_Font_Style, 'Fugaz One' ); ?>>Fugaz One</option>
								<option value="GFS Didot" <?php selected($RPP_Font_Style, 'GFS Didot' ); ?>>GFS Didot</option>
								<option value="GFS Neohellenic" <?php selected($RPP_Font_Style, 'GFS Neohellenic' ); ?>>GFS Neohellenic</option>
								<option value="Galdeano" <?php selected($RPP_Font_Style, 'Galdeano' ); ?>>Galdeano</option>
								<option value="Gentium Basic" <?php selected($RPP_Font_Style, 'Gentium Basic' ); ?>>Gentium Basic</option>
								<option value="Gentium Book Basic" <?php selected($RPP_Font_Style, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option>
								<option value="Geo" <?php selected($RPP_Font_Style, 'Geo' ); ?>>Geo</option>
								<option value="Geostar" <?php selected($RPP_Font_Style, 'Geostar' ); ?>>Geostar</option>
								<option value="Geostar Fill" <?php selected($RPP_Font_Style, 'Geostar Fill' ); ?>>Geostar Fill</option>
								<option value="Germania One" <?php selected($RPP_Font_Style, 'Germania One' ); ?>>Germania One</option>
								<option value="Give You Glory" <?php selected($RPP_Font_Style, 'Give You Glory' ); ?>>Give You Glory</option>
								<option value="Glass Antiqua" <?php selected($RPP_Font_Style, 'Glass Antiqua' ); ?>>Glass Antiqua</option>
								<option value="Glegoo" <?php selected($RPP_Font_Style, 'Glegoo' ); ?>>Glegoo</option>
								<option value="Gloria Hallelujah" <?php selected($RPP_Font_Style, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option>
								<option value="Goblin One" <?php selected($RPP_Font_Style, 'Goblin One' ); ?>>Goblin One</option>
								<option value="Gochi Hand" <?php selected($RPP_Font_Style, 'Gochi Hand' ); ?>>Gochi Hand</option>
								<option value="Gorditas" <?php selected($RPP_Font_Style, 'Gorditas' ); ?>>Gorditas</option>
								<option value="Goudy Bookletter 1911" <?php selected($RPP_Font_Style, 'Goudy Bookletter 191' ); ?>>Goudy Bookletter 1911</option>
								<option value="Graduate" <?php selected($RPP_Font_Style, 'Graduate' ); ?>>Graduate</option>
								<option value="Gravitas One" <?php selected($RPP_Font_Style, 'Gravitas One' ); ?>>Gravitas One</option>
								<option value="Great Vibes" <?php selected($RPP_Font_Style, 'Great Vibes' ); ?>>Great Vibes</option>
								<option value="Gruppo" <?php selected($RPP_Font_Style, 'Gruppo' ); ?>>Gruppo</option>
								<option value="Gudea" <?php selected($RPP_Font_Style, 'Gudea' ); ?>>Gudea</option>
								<option value="Habibi" <?php selected($RPP_Font_Style, 'Habibi' ); ?>>Habibi</option>
								<option value="Hammersmith One" <?php selected($RPP_Font_Style, 'Hammersmith One' ); ?>>Hammersmith One</option>
								<option value="Handlee" <?php selected($RPP_Font_Style, 'Handlee' ); ?>>Handlee</option>
								<option value="Hanuman" <?php selected($RPP_Font_Style, 'Hanuman' ); ?>>Hanuman</option>
								<option value="Happy Monkey" <?php selected($RPP_Font_Style, 'Happy Monkey' ); ?>>Happy Monkey</option>
								<option value="Henny Penny" <?php selected($RPP_Font_Style, 'Henny Penny' ); ?>>Henny Penny</option>
								<option value="Herr Von Muellerhoff" <?php selected($RPP_Font_Style, 'Herr Von Muellerhoff' ); ?>>Herr Von Muellerhoff</option>
								<option value="Holtwood One SC" <?php selected($RPP_Font_Style, 'Holtwood One SC' ); ?>>Holtwood One SC</option>
								<option value="Homemade Apple" <?php selected($RPP_Font_Style, 'Homemade Apple' ); ?>>Homemade Apple</option>
								<option value="Homenaje" <?php selected($RPP_Font_Style, 'Homenaje' ); ?>>Homenaje</option>
								<option value="IM Fell DW Pica" <?php selected($RPP_Font_Style, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option>
								<option value="IM Fell DW Pica SC" <?php selected($RPP_Font_Style, 'IM Fell DW Pica SC' ); ?>>IM Fell DW Pica SC</option>
								<option value="IM Fell Double Pica" <?php selected($RPP_Font_Style, 'IM Fell Double Pica' ); ?>>IM Fell Double Pica</option>
								<option value="IM Fell Double Pica SC" <?php selected($RPP_Font_Style, 'IM Fell Double Pica SC' ); ?>>IM Fell Double Pica SC</option>
								<option value="IM Fell English" <?php selected($RPP_Font_Style, 'IM Fell English' ); ?>>IM Fell English</option>
								<option value="IM Fell English SC" <?php selected($RPP_Font_Style, 'IM Fell English SC' ); ?>>IM Fell English SC</option>
								<option value="IM Fell French Canon" <?php selected($RPP_Font_Style, 'IM Fell French Canon' ); ?>>IM Fell French Canon</option>
								<option value="IM Fell French Canon SC" <?php selected($RPP_Font_Style, 'IM Fell French Canon SC' ); ?>>IM Fell French Canon SC</option>
								<option value="IM Fell Great Primer" <?php selected($RPP_Font_Style, 'IM Fell Great Primer' ); ?>>IM Fell Great Primer</option>
								<option value="IM Fell Great Primer SC" <?php selected($RPP_Font_Style, 'IM Fell Great Primer SC' ); ?>>IM Fell Great Primer SC</option>
								<option value="Iceberg" <?php selected($RPP_Font_Style, 'Iceberg' ); ?>>Iceberg</option>
								<option value="Iceland" <?php selected($RPP_Font_Style, 'Iceland' ); ?>>Iceland</option>
								<option value="Imprima" <?php selected($RPP_Font_Style, 'Imprima' ); ?>>Imprima</option>
								<option value="Inconsolata" <?php selected($RPP_Font_Style, 'Inconsolata' ); ?>>Inconsolata</option>
								<option value="Inder" <?php selected($RPP_Font_Style, 'Inder' ); ?>>Inder</option>
								<option value="Indie Flower" <?php selected($RPP_Font_Style, 'Indie Flower' ); ?>>Indie Flower</option>
								<option value="Inika" <?php selected($RPP_Font_Style, 'Inika' ); ?>>Inika</option>
								<option value="Irish Grover" <?php selected($RPP_Font_Style, 'Irish Grover' ); ?>>Irish Grover</option>
								<option value="Istok Web" <?php selected($RPP_Font_Style, 'Istok Web' ); ?>>Istok Web</option>
								<option value="Italiana" <?php selected($RPP_Font_Style, 'Italiana' ); ?>>Italiana</option>
								<option value="Italianno" <?php selected($RPP_Font_Style, 'Italianno' ); ?>>Italianno</option>
								<option value="Jim Nightshade" <?php selected($RPP_Font_Style, 'Jim Nightshade' ); ?>>Jim Nightshade</option>
								<option value="Jockey One" <?php selected($RPP_Font_Style, 'Jockey One' ); ?>>Jockey One</option>
								<option value="Jolly Lodger" <?php selected($RPP_Font_Style, 'Jolly Lodger' ); ?>>Jolly Lodger</option>
								<option value="Josefin Sans" <?php selected($RPP_Font_Style, 'Josefin Sans' ); ?>>Josefin Sans</option>
								<option value="Josefin Slab" <?php selected($RPP_Font_Style, 'Josefin Slab' ); ?>>Josefin Slab</option>
								<option value="Judson" <?php selected($RPP_Font_Style, 'Judson' ); ?>>Judson</option>
								<option value="Julee" <?php selected($RPP_Font_Style, 'Julee' ); ?>>Julee</option>
								<option value="Junge" <?php selected($RPP_Font_Style, 'Junge' ); ?>>Junge</option>
								<option value="Jura" <?php selected($RPP_Font_Style, 'Jura' ); ?>>Jura</option>
								<option value="Just Another Hand" <?php selected($RPP_Font_Style, 'Just Another Hand' ); ?>>Just Another Hand</option>
								<option value="Just Me Again Down Here" <?php selected($RPP_Font_Style, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option>
								<option value="Kameron" <?php selected($RPP_Font_Style, 'Kameron' ); ?>>Kameron</option>
								<option value="Karla" <?php selected($RPP_Font_Style, 'Karla' ); ?>>Karla</option>
								<option value="Kaushan Script" <?php selected($RPP_Font_Style, 'Kaushan Script' ); ?>>Kaushan Script</option>
								<option value="Kelly Slab" <?php selected($RPP_Font_Style, 'Kelly Slab' ); ?>>Kelly Slab</option>
								<option value="Kenia" <?php selected($RPP_Font_Style, 'Kenia' ); ?>>Kenia</option>
								<option value="Khmer" <?php selected($RPP_Font_Style, 'Khmer' ); ?>>Khmer</option>
								<option value="Knewave" <?php selected($RPP_Font_Style, 'Knewave' ); ?>>Knewave</option>
								<option value="Kotta One" <?php selected($RPP_Font_Style, 'Kotta One' ); ?>>Kotta One</option>
								<option value="Koulen" <?php selected($RPP_Font_Style, 'Koulen' ); ?>>Koulen</option>
								<option value="Kranky" <?php selected($RPP_Font_Style, 'Kranky' ); ?>>Kranky</option>
								<option value="Kreon" <?php selected($RPP_Font_Style, 'Kreon' ); ?>>Kreon</option>
								<option value="Kristi" <?php selected($RPP_Font_Style, 'Kristi' ); ?>>Kristi</option>
								<option value="Krona One" <?php selected($RPP_Font_Style, 'Krona One' ); ?>>Krona One</option>
								<option value="La Belle Aurore" <?php selected($RPP_Font_Style, 'La Belle Aurore' ); ?>>La Belle Aurore</option>
								<option value="Lancelot" <?php selected($RPP_Font_Style, 'Lancelot' ); ?>>Lancelot</option>
								<option value="Lato" <?php selected($RPP_Font_Style, 'Lato' ); ?>>Lato</option>
								<option value="League Script" <?php selected($RPP_Font_Style, 'League Script' ); ?>>League Script</option>
								<option value="Leckerli One" <?php selected($RPP_Font_Style, 'Leckerli One' ); ?>>Leckerli One</option>
								<option value="Ledger" <?php selected($RPP_Font_Style, 'Ledger' ); ?>>Ledger</option>
								<option value="Lekton" <?php selected($RPP_Font_Style, 'Lekton' ); ?>>Lekton</option>
								<option value="Lemon" <?php selected($RPP_Font_Style, 'Lemon' ); ?>>Lemon</option>
								<option value="Lilita One" <?php selected($RPP_Font_Style, 'Lilita One' ); ?>>Lilita One</option>
								<option value="Limelight" <?php selected($RPP_Font_Style, 'Limelight' ); ?>>Limelight</option>
								<option value="Linden Hill" <?php selected($RPP_Font_Style, 'Linden Hill' ); ?>>Linden Hill</option>
								<option value="Lobster" <?php selected($RPP_Font_Style, 'Lobster' ); ?>>Lobster</option>
								<option value="Lobster Two" <?php selected($RPP_Font_Style, 'Lobster Two' ); ?>>Lobster Two</option>
								<option value="Londrina Outline" <?php selected($RPP_Font_Style, 'Londrina Outline' ); ?>>Londrina Outline</option>
								<option value="Londrina Shadow" <?php selected($RPP_Font_Style, 'Londrina Shadow' ); ?>>Londrina Shadow</option>
								<option value="Londrina Sketch" <?php selected($RPP_Font_Style, 'Londrina Sketch' ); ?>>Londrina Sketch</option>
								<option value="Londrina Solid" <?php selected($RPP_Font_Style, 'Londrina Solid' ); ?>>Londrina Solid</option>
								<option value="Lora" <?php selected($RPP_Font_Style, 'Lora' ); ?>>Lora</option>
								<option value="Love Ya Like A Sister" <?php selected($RPP_Font_Style, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option>
								<option value="Loved by the King" <?php selected($RPP_Font_Style, 'Loved by the King' ); ?>>Loved by the King</option>
								<option value="Lovers Quarrel" <?php selected($RPP_Font_Style, 'Lovers Quarrel' ); ?>>Lovers Quarrel</option>
								<option value="Luckiest Guy" <?php selected($RPP_Font_Style, 'Luckiest Guy' ); ?>>Luckiest Guy</option>
								<option value="Lusitana" <?php selected($RPP_Font_Style, 'Lusitana' ); ?>>Lusitana</option>
								<option value="Lustria" <?php selected($RPP_Font_Style, 'Lustria' ); ?>>Lustria</option>
								<option value="Macondo" <?php selected($RPP_Font_Style, 'Macondo' ); ?>>Macondo</option>
								<option value="Macondo Swash Caps" <?php selected($RPP_Font_Style, 'Macondo Swash Caps' ); ?>>Macondo Swash Caps</option>
								<option value="Magra" <?php selected($RPP_Font_Style, 'Magra' ); ?>>Magra</option>
								<option value="Maiden Orange" <?php selected($RPP_Font_Style, 'Maiden Orange' ); ?>>Maiden Orange</option>
								<option value="Mako" <?php selected($RPP_Font_Style, 'Mako' ); ?>>Mako</option>
								<option value="Marck Script" <?php selected($RPP_Font_Style, 'Marck Script' ); ?>>Marck Script</option>
								<option value="Marko One" <?php selected($RPP_Font_Style, 'Marko One' ); ?>>Marko One</option>
								<option value="Marmelad" <?php selected($RPP_Font_Style, 'Marmelad' ); ?>>Marmelad</option>
								<option value="Marvel" <?php selected($RPP_Font_Style, 'Marvel' ); ?>>Marvel</option>
								<option value="Mate" <?php selected($RPP_Font_Style, 'Mate' ); ?>>Mate</option>
								<option value="Mate SC" <?php selected($RPP_Font_Style, 'Mate SC' ); ?>>Mate SC</option>
								<option value="Maven Pro" <?php selected($RPP_Font_Style, 'Maven Pro' ); ?>>Maven Pro</option>
								<option value="Meddon" <?php selected($RPP_Font_Style, 'Meddon' ); ?>>Meddon</option>
								<option value="MedievalSharp" <?php selected($RPP_Font_Style, 'MedievalSharp' ); ?>>MedievalSharp</option>
								<option value="Medula One" <?php selected($RPP_Font_Style, 'Medula One' ); ?>>Medula One</option>
								<option value="Megrim" <?php selected($RPP_Font_Style, 'Megrim' ); ?>>Megrim</option>
								<option value="Merienda One" <?php selected($RPP_Font_Style, 'Merienda One' ); ?>>Merienda One</option>
								<option value="Merriweather" <?php selected($RPP_Font_Style, 'Merriweather' ); ?>>Merriweather</option>
								<option value="Metal" <?php selected($RPP_Font_Style, 'Metal' ); ?>>Metal</option>
								<option value="Metamorphous"<?php selected($RPP_Font_Style, 'Metamorphous' ); ?>>Metamorphous</option>
								<option value="Metrophobic" <?php selected($RPP_Font_Style, 'Metrophobic' ); ?>>Metrophobic</option>
								<option value="Michroma" <?php selected($RPP_Font_Style, 'Michroma' ); ?>>Michroma</option>
								<option value="Miltonian" <?php selected($RPP_Font_Style, 'Miltonian' ); ?>>Miltonian</option>
								<option value="Miltonian Tattoo" <?php selected($RPP_Font_Style, 'Miltonian Tattoo' ); ?>>Miltonian Tattoo</option>
								<option value="Miniver" <?php selected($RPP_Font_Style, 'Miniver' ); ?>>Miniver</option>
								<option value="Miss Fajardose" <?php selected($RPP_Font_Style, 'Miss Fajardose' ); ?>>Miss Fajardose</option>
								<option value="Modern Antiqua" <?php selected($RPP_Font_Style, 'Modern Antiqua' ); ?>>Modern Antiqua</option>
								<option value="Molengo" <?php selected($RPP_Font_Style, 'Molengo' ); ?>>Molengo</option>
								<option value="Monofett" <?php selected($RPP_Font_Style, 'Monofett' ); ?>>Monofett</option>
								<option value="Monoton" <?php selected($RPP_Font_Style, 'Monoton' ); ?>>Monoton</option>
								<option value="Monsieur La Doulaise" <?php selected($RPP_Font_Style, 'Monsieur La Doulaise' ); ?>>Monsieur La Doulaise</option>
								<option value="Montaga" <?php selected($RPP_Font_Style, 'Montaga' ); ?>>Montaga</option>
								<option value="Montez" <?php selected($RPP_Font_Style, 'Montez' ); ?>>Montez</option>
								<option value="Montserrat" <?php selected($RPP_Font_Style, 'Montserrat' ); ?>>Montserrat</option>
								<option value="Moul" <?php selected($RPP_Font_Style, 'Moul' ); ?>>Moul</option>
								<option value="Moulpali" <?php selected($RPP_Font_Style, 'Moulpali' ); ?>>Moulpali</option>
								<option value="Mountains of Christmas" <?php selected($RPP_Font_Style, 'Mountains of Christmas' ); ?>>Mountains of Christmas</option>
								<option value="Mr Bedfort" <?php selected($RPP_Font_Style, 'Mr Bedfort' ); ?>>Mr Bedfort</option>
								<option value="Mr Dafoe" <?php selected($RPP_Font_Style, 'Mr Dafoe' ); ?>>Mr Dafoe</option>
								<option value="Mr De Haviland" <?php selected($RPP_Font_Style, 'Mr De Haviland' ); ?>>Mr De Haviland</option>
								<option value="Mrs Saint Delafield" <?php selected($RPP_Font_Style, 'Mrs Saint Delafield' ); ?>>Mrs Saint Delafield</option>
								<option value="Mrs Sheppards" <?php selected($RPP_Font_Style, 'Mrs Sheppards' ); ?>>Mrs Sheppards</option>
								<option value="Muli" <?php selected($RPP_Font_Style, 'Muli' ); ?>>Muli</option>
								<option value="Mystery Quest" <?php selected($RPP_Font_Style, 'Mystery Quest' ); ?>>Mystery Quest</option>
								<option value="Neucha" <?php selected($RPP_Font_Style, 'Neucha' ); ?>>Neucha</option>
								<option value="Neuton" <?php selected($RPP_Font_Style, 'Neuton' ); ?>>Neuton</option>
								<option value="News Cycle" <?php selected($RPP_Font_Style, 'News Cycle' ); ?>>News Cycle</option>
								<option value="Niconne" <?php selected($RPP_Font_Style, 'Niconne' ); ?>>Niconne</option>
								<option value="Nixie One" <?php selected($RPP_Font_Style, 'Nixie One' ); ?>>Nixie One</option>
								<option value="Nobile" <?php selected($RPP_Font_Style, 'Nobile' ); ?>>Nobile</option>
								<option value="Nokora" <?php selected($RPP_Font_Style, 'Nokora' ); ?>>Nokora</option>
								<option value="Norican" <?php selected($RPP_Font_Style, 'Norican' ); ?>>Norican</option>
								<option value="Nosifer" <?php selected($RPP_Font_Style, 'Nosifer' ); ?>>Nosifer</option>
								<option value="Nothing You Could Do" <?php selected($RPP_Font_Style, 'Nothing You Could Do' ); ?>>Nothing You Could Do</option>
								<option value="Noticia Text" <?php selected($RPP_Font_Style, 'Noticia Text' ); ?>>Noticia Text</option>
								<option value="Nova Cut" <?php selected($RPP_Font_Style, 'Nova Cut' ); ?>>Nova Cut</option>
								<option value="Nova Flat" <?php selected($RPP_Font_Style, 'Nova Flat' ); ?>>Nova Flat</option>
								<option value="Nova Mono" <?php selected($RPP_Font_Style, 'Nova Mono' ); ?>>Nova Mono</option>
								<option value="Nova Oval" <?php selected($RPP_Font_Style, 'Nova Oval' ); ?>>Nova Oval</option>
								<option value="Nova Round" <?php selected($RPP_Font_Style, 'Nova Round' ); ?>>Nova Round</option>
								<option value="Nova Script" <?php selected($RPP_Font_Style, 'Nova Script' ); ?>>Nova Script</option>
								<option value="Nova Slim" <?php selected($RPP_Font_Style, 'Nova Slim' ); ?>>Nova Slim</option>
								<option value="Nova Square" <?php selected($RPP_Font_Style, 'Nova Square' ); ?>>Nova Square</option>
								<option value="Numans" <?php selected($RPP_Font_Style, 'Numans' ); ?>>Numans</option>

								<option value="Nunito" <?php selected($RPP_Font_Style, 'Nunito' ); ?>>Nunito</option>
								<option value="Odor Mean Chey" <?php selected($RPP_Font_Style, 'Odor Mean Chey' ); ?>>Odor Mean Chey</option>
								<option value="Old Standard TT" <?php selected($RPP_Font_Style, 'Old Standard TT' ); ?>>Old Standard TT</option>
								<option value="Oldenburg" <?php selected($RPP_Font_Style, 'Oldenburg' ); ?>>Oldenburg</option>
								<option value="Oleo Script" <?php selected($RPP_Font_Style, 'Oleo Script' ); ?>>Oleo Script</option>
								<option value="Open Sans" <?php selected($RPP_Font_Style, 'Open Sans' ); ?>>Open Sans</option>
								<option value="Open Sans Condensed" <?php selected($RPP_Font_Style, 'Open Sans Condensed' ); ?>>Open Sans Condensed</option>
								<option value="Orbitron" <?php selected($RPP_Font_Style, 'Orbitron' ); ?>>Orbitron</option>
								<option value="Original Surfer" <?php selected($RPP_Font_Style, 'Original Surfer' ); ?>>Original Surfer</option>
								<option value="Oswald" <?php selected($RPP_Font_Style, 'Oswald' ); ?>>Oswald</option>
								<option value="Over the Rainbow" <?php selected($RPP_Font_Style, 'Over the Rainbow' ); ?>>Over the Rainbow</option>
								<option value="Overlock" <?php selected($RPP_Font_Style, 'Overlock' ); ?>>Overlock</option>
								<option value="Overlock SC" <?php selected($RPP_Font_Style, 'Overlock SC' ); ?>>Overlock SC</option>
								<option value="Ovo" <?php selected($RPP_Font_Style, 'Ovo' ); ?>>Ovo</option>
								<option value="Oxygen" <?php selected($RPP_Font_Style, 'Oxygen' ); ?>>Oxygen</option>
								<option value="PT Mono" <?php selected($RPP_Font_Style, 'PT Mono' ); ?>>PT Mono</option>
								<option value="PT Sans" <?php selected($RPP_Font_Style, 'PT Sans' ); ?>>PT Sans</option>
								<option value="PT Sans Caption" <?php selected($RPP_Font_Style, 'PT Sans Caption' ); ?>>PT Sans Caption</option>
								<option value="PT Sans Narrow" <?php selected($RPP_Font_Style, 'PT Sans Narrow' ); ?>>PT Sans Narrow</option>
								<option value="PT Serif" <?php selected($RPP_Font_Style, 'PT Serif' ); ?>>PT Serif</option>
								<option value="PT Serif Caption" <?php selected($RPP_Font_Style, 'PT Serif Caption' ); ?>>PT Serif Caption</option>
								<option value="Pacifico" <?php selected($RPP_Font_Style, 'Pacifico' ); ?>>Pacifico</option>
								<option value="Parisienne" <?php selected($RPP_Font_Style, 'Parisienne' ); ?>>Parisienne</option>
								<option value="Passero One" <?php selected($RPP_Font_Style, 'Passero One' ); ?>>Passero One</option>
								<option value="Passion One" <?php selected($RPP_Font_Style, 'Passion One' ); ?>>Passion One</option>
								<option value="Patrick Hand" <?php selected($RPP_Font_Style, 'Patrick Hand' ); ?>>Patrick Hand</option>
								<option value="Patua One" <?php selected($RPP_Font_Style, 'Patua One' ); ?>>Patua One</option>
								<option value="Paytone One" <?php selected($RPP_Font_Style, 'Paytone One' ); ?>>Paytone One</option>
								<option value="Permanent Marker" <?php selected($RPP_Font_Style, 'Permanent Marker' ); ?>>Permanent Marker</option>
								<option value="Petrona" <?php selected($RPP_Font_Style, 'Petrona' ); ?>>Petrona</option>
								<option value="Philosopher" <?php selected($RPP_Font_Style, 'Philosopher' ); ?>>Philosopher</option>
								<option value="Piedra" <?php selected($RPP_Font_Style, 'Piedra' ); ?>>Piedra</option>
								<option value="Pinyon Script" <?php selected($RPP_Font_Style, 'Pinyon Script' ); ?>>Pinyon Script</option>
								<option value="Plaster" <?php selected($RPP_Font_Style, 'Plaster' ); ?>>Plaster</option>
								<option value="Play" <?php selected($RPP_Font_Style, 'Play' ); ?>>Play</option>
								<option value="Playball" <?php selected($RPP_Font_Style, 'Playball' ); ?>>Playball</option>
								<option value="Playfair Display" <?php selected($RPP_Font_Style, 'Playfair Display' ); ?>>Playfair Display</option>
								<option value="Podkova" <?php selected($RPP_Font_Style, 'Podkova' ); ?>>Podkova</option>
								<option value="Poiret One" <?php selected($RPP_Font_Style, 'Poiret One' ); ?>>Poiret One</option>
								<option value="Poller One" <?php selected($RPP_Font_Style, 'Poller One' ); ?>>Poller One</option>
								<option value="Poly" <?php selected($RPP_Font_Style, 'Poly' ); ?>>Poly</option>
								<option value="Pompiere" <?php selected($RPP_Font_Style, 'Pompiere' ); ?>>Pompiere</option>
								<option value="Pontano Sans" <?php selected($RPP_Font_Style, 'Pontano Sans' ); ?>>Pontano Sans</option>
								<option value="Port Lligat Sans" <?php selected($RPP_Font_Style, 'Port Lligat Sans' ); ?>>Port Lligat Sans</option>
								<option value="Port Lligat Slab" <?php selected($RPP_Font_Style, 'Port Lligat Slab' ); ?>>Port Lligat Slab</option>
								<option value="Prata" <?php selected($RPP_Font_Style, 'Prata' ); ?>>Prata</option>
								<option value="Preahvihear" <?php selected($RPP_Font_Style, 'Preahvihear' ); ?>>Preahvihear</option>
								<option value="Press Start 2P" <?php selected($RPP_Font_Style, 'Press Start 2P' ); ?>>Press Start 2P</option>
								<option value="Princess Sofia" <?php selected($RPP_Font_Style, 'Princess Sofia' ); ?>>Princess Sofia</option>
								<option value="Prociono" <?php selected($RPP_Font_Style, 'Prociono' ); ?>>Prociono</option>
								<option value="Prosto One" <?php selected($RPP_Font_Style, 'Prosto One' ); ?>>Prosto One</option>
								<option value="Puritan" <?php selected($RPP_Font_Style, 'Puritan' ); ?>>Puritan</option>
								<option value="Quantico" <?php selected($RPP_Font_Style, 'Quantico' ); ?>>Quantico</option>
								<option value="Quattrocento" <?php selected($RPP_Font_Style, 'Quattrocento' ); ?>>Quattrocento</option>
								<option value="Quattrocento Sans" <?php selected($RPP_Font_Style, 'Quattrocento Sans' ); ?>>Quattrocento Sans</option>
								<option value="Questrial" <?php selected($RPP_Font_Style, 'Questrial' ); ?>>Questrial</option>
								<option value="Quicksand" <?php selected($RPP_Font_Style, 'Quicksand' ); ?>>Quicksand</option>
								<option value="Qwigley" <?php selected($RPP_Font_Style, 'Qwigley' ); ?>>Qwigley</option>
								<option value="Radley" <?php selected($RPP_Font_Style, 'Radley' ); ?>>Radley</option>
								<option value="Raleway" <?php selected($RPP_Font_Style, 'Raleway' ); ?>>Raleway</option>
								<option value="Rammetto One" <?php selected($RPP_Font_Style, 'Rammetto One' ); ?>>Rammetto One</option>
								<option value="Rancho" <?php selected($RPP_Font_Style, 'Rancho' ); ?>>Rancho</option>
								<option value="Rationale" <?php selected($RPP_Font_Style, 'Rationale' ); ?>>Rationale</option>
								<option value="Redressed" <?php selected($RPP_Font_Style, 'Redressed' ); ?>>Redressed</option>
								<option value="Reenie Beanie" <?php selected($RPP_Font_Style, 'Reenie Beanie' ); ?>>Reenie Beanie</option>
								<option value="Revalia" <?php selected($RPP_Font_Style, 'Revalia' ); ?>>Revalia</option>
								<option value="Ribeye" <?php selected($RPP_Font_Style, 'Ribeye' ); ?>>Ribeye</option>
								<option value="Ribeye Marrow" <?php selected($RPP_Font_Style, 'Ribeye Marrow' ); ?>>Ribeye Marrow</option>
								<option value="Righteous" <?php selected($RPP_Font_Style, 'Righteous' ); ?>>Righteous</option>
								<option value="Rochester" <?php selected($RPP_Font_Style, 'Rochester' ); ?>>Rochester</option>
								<option value="Rock Salt" <?php selected($RPP_Font_Style, 'Rock Salt' ); ?>>Rock Salt</option>
								<option value="Rokkitt" <?php selected($RPP_Font_Style, 'Rokkitt' ); ?>>Rokkitt</option>
								<option value="Ropa Sans" <?php selected($RPP_Font_Style, 'Ropa Sans' ); ?>>Ropa Sans</option>
								<option value="Rosario" <?php selected($RPP_Font_Style, 'Rosario' ); ?>>Rosario</option>
								<option value="Rosarivo" <?php selected($RPP_Font_Style, 'Rosarivo' ); ?>>Rosarivo</option>
								<option value="Rouge Script" <?php selected($RPP_Font_Style, 'Rouge Script' ); ?>>Rouge Script</option>
								<option value="Ruda" <?php selected($RPP_Font_Style, 'Ruda' ); ?>>Ruda</option>
								<option value="Ruge Boogie" <?php selected($RPP_Font_Style, 'Ruge Boogie' ); ?>>Ruge Boogie</option>
								<option value="Ruluko" <?php selected($RPP_Font_Style, 'Ruluko' ); ?>>Ruluko</option>
								<option value="Ruslan Display" <?php selected($RPP_Font_Style, 'Ruslan Display' ); ?>>Ruslan Display</option>
								<option value="Russo One" <?php selected($RPP_Font_Style, 'Russo One' ); ?>>Russo One</option>
								<option value="Ruthie" <?php selected($RPP_Font_Style, 'Ruthie' ); ?>>Ruthie</option>
								<option value="Sail" <?php selected($RPP_Font_Style, 'Sail' ); ?>>Sail</option>
								<option value="Salsa" <?php selected($RPP_Font_Style, 'Salsa' ); ?>>Salsa</option>
								<option value="Sancreek" <?php selected($RPP_Font_Style, 'Sancreek' ); ?>>Sancreek</option>
								<option value="Sansita One" <?php selected($RPP_Font_Style, 'Sansita One' ); ?>>Sansita One</option>
								<option value="Sarina" <?php selected($RPP_Font_Style, 'Sarina' ); ?>>Sarina</option>
								<option value="Satisfy" <?php selected($RPP_Font_Style, 'Satisfy' ); ?>>Satisfy</option>
								<option value="Schoolbell" <?php selected($RPP_Font_Style, 'Schoolbell' ); ?>>Schoolbell</option>
								<option value="Seaweed Script" <?php selected($RPP_Font_Style, 'Seaweed Script' ); ?>>Seaweed Script</option>
								<option value="Sevillana" <?php selected($RPP_Font_Style, 'Sevillana' ); ?>>Sevillana</option>
								<option value="Shadows Into Light" <?php selected($RPP_Font_Style, 'hadows Into Light' ); ?>>Shadows Into Light</option>
								<option value="Shadows Into Light Two" <?php selected($RPP_Font_Style, 'Shadows Into Light Two' ); ?>>Shadows Into Light Two</option>
								<option value="Shanti" <?php selected($RPP_Font_Style, 'Shanti' ); ?>>Shanti</option>
								<option value="Share">Share</option>
								<option value="Shojumaru" <?php selected($RPP_Font_Style, 'Shojumaru' ); ?>>Shojumaru</option>
								<option value="Short Stack" <?php selected($RPP_Font_Style, 'Short Stack' ); ?>>Short Stack</option>
								<option value="Siemreap"<?php selected($RPP_Font_Style, 'Siemreap' ); ?>>Siemreap</option>
								<option value="Sigmar One" <?php selected($RPP_Font_Style, 'Sigmar One' ); ?>>Sigmar One</option>
								<option value="Signika"<?php selected($RPP_Font_Style, 'Signika' ); ?>>Signika</option>
								<option value="Signika Negative" <?php selected($RPP_Font_Style, 'Signika Negative' ); ?>>Signika Negative</option>
								<option value="Simonetta" <?php selected($RPP_Font_Style, 'Simonetta' ); ?>>Simonetta</option>
								<option value="Sirin Stencil" <?php selected($RPP_Font_Style, 'Sirin Stencil' ); ?>>Sirin Stencil</option>
								<option value="Six Caps" <?php selected($RPP_Font_Style, 'Six Caps' ); ?>>Six Caps</option>
								<option value="Slackey" <?php selected($RPP_Font_Style, 'Slackey' ); ?>>Slackey</option>
								<option value="Smokum" <?php selected($RPP_Font_Style, 'Smokum' ); ?>>Smokum</option>
								<option value="Smythe" <?php selected($RPP_Font_Style, 'Smythe' ); ?>>Smythe</option>
								<option value="Sniglet" <?php selected($RPP_Font_Style, 'Sniglet' ); ?>>Sniglet</option>
								<option value="Snippet" <?php selected($RPP_Font_Style, 'Snippet' ); ?>>Snippet</option>
								<option value="Sofia" <?php selected($RPP_Font_Style, 'Sofia' ); ?>>Sofia</option>
								<option value="Sonsie One" <?php selected($RPP_Font_Style, 'Sonsie One' ); ?>>Sonsie One</option>
								<option value="Sorts Mill Goudy" <?php selected($RPP_Font_Style, 'Sorts Mill Goudy' ); ?>>Sorts Mill Goudy</option>
								<option value="Special Elite" <?php selected($RPP_Font_Style, 'Special Elite' ); ?>>Special Elite</option>
								<option value="Spicy Rice" <?php selected($RPP_Font_Style, 'Spicy Rice' ); ?>>Spicy Rice</option>
								<option value="Spinnaker" <?php selected($RPP_Font_Style, 'Spinnaker' ); ?>>Spinnaker</option>
								<option value="Spirax" <?php selected($RPP_Font_Style, 'Spirax' ); ?>>Spirax</option>
								<option value="Squada One" <?php selected($RPP_Font_Style, 'Squada One' ); ?>>Squada One</option>
								<option value="Stardos Stencil" <?php selected($RPP_Font_Style, 'Stardos Stencil' ); ?>>Stardos Stencil</option>
								<option value="Stint Ultra Condensed" <?php selected($RPP_Font_Style, 'Stint Ultra Condensed' ); ?>>Stint Ultra Condensed</option>
								<option value="Stint Ultra Expanded" <?php selected($RPP_Font_Style, 'Stint Ultra Expanded' ); ?>>Stint Ultra Expanded</option>
								<option value="Stoke" <?php selected($RPP_Font_Style, 'Stoke' ); ?>>Stoke</option>
								<option value="Sue Ellen Francisco" <?php selected($RPP_Font_Style, 'Sue Ellen Francisco' ); ?>>Sue Ellen Francisco</option>
								<option value="Sunshiney" <?php selected($RPP_Font_Style, 'Sunshiney' ); ?>>Sunshiney</option>
								<option value="Supermercado One" <?php selected($RPP_Font_Style, 'Supermercado One' ); ?>>Supermercado One</option>
								<option value="Suwannaphum" <?php selected($RPP_Font_Style, 'Suwannaphum' ); ?>>Suwannaphum</option>
								<option value="Swanky and Moo Moo" <?php selected($RPP_Font_Style, 'Swanky and Moo Moo' ); ?>>Swanky and Moo Moo</option>
								<option value="Syncopate" <?php selected($RPP_Font_Style, 'Syncopate' ); ?>>Syncopate</option>
								<option value="Tangerine" <?php selected($RPP_Font_Style, 'Tangerine' ); ?>>Tangerine</option>
								<option value="Taprom" <?php selected($RPP_Font_Style, 'Taprom' ); ?>>Taprom</option>
								<option value="Telex" <?php selected($RPP_Font_Style, 'Telex' ); ?>>Telex</option>
								<option value="Tenor Sans" <?php selected($RPP_Font_Style, 'Tenor Sans' ); ?>>Tenor Sans</option>
								<option value="The Girl Next Door" <?php selected($RPP_Font_Style, 'The Girl Next Door' ); ?>>The Girl Next Door</option>
								<option value="Tienne" <?php selected($RPP_Font_Style, 'Tienne' ); ?>>Tienne</option>
								<option value="Tinos" <?php selected($RPP_Font_Style, 'Tinos' ); ?>>Tinos</option>
								<option value="Titan One" <?php selected($RPP_Font_Style, 'Titan One' ); ?>>Titan One</option>
								<option value="Trade Winds" <?php selected($RPP_Font_Style, 'Trade Winds' ); ?> >Trade Winds</option>
								<option value="Trocchi" <?php selected($RPP_Font_Style, 'Trocchi' ); ?>>Trocchi</option>
								<option value="Trochut" <?php selected($RPP_Font_Style, 'Trochut' ); ?>>Trochut</option>
								<option value="Trykker" <?php selected($RPP_Font_Style, 'Trykker' ); ?>>Trykker</option>
								<option value="Tulpen One" <?php selected($RPP_Font_Style, 'Tulpen One' ); ?>>Tulpen One</option>
								<option value="Ubuntu" <?php selected($RPP_Font_Style, 'Ubuntu' ); ?>>Ubuntu</option>
								<option value="Ubuntu Condensed" <?php selected($RPP_Font_Style, 'Ubuntu Condensed' ); ?>>Ubuntu Condensed</option>
								<option value="Ubuntu Mono" <?php selected($RPP_Font_Style, 'Ubuntu Mono' ); ?>>Ubuntu Mono</option>
								<option value="Ultra" <?php selected($RPP_Font_Style, 'Ultra' ); ?>>Ultra</option>
								<option value="Uncial Antiqua" <?php selected($RPP_Font_Style, 'Uncial Antiqua' ); ?>>Uncial Antiqua</option>
								<option value="UnifrakturCook" <?php selected($RPP_Font_Style, 'UnifrakturCook' ); ?>>UnifrakturCook</option>
								<option value="UnifrakturMaguntia" <?php selected($RPP_Font_Style, 'UnifrakturMaguntia' ); ?>>UnifrakturMaguntia</option>
								<option value="Unkempt" <?php selected($RPP_Font_Style, 'Unkempt' ); ?>>Unkempt</option>
								<option value="Unlock" <?php selected($RPP_Font_Style, 'Unlock' ); ?>>Unlock</option>
								<option value="Unna" <?php selected($RPP_Font_Style, 'Unna' ); ?>>Unna</option>
								<option value="VT323" <?php selected($RPP_Font_Style, 'VT323' ); ?>>VT323</option>
								<option value="Varela" <?php selected($RPP_Font_Style, 'Varela' ); ?>>Varela</option>
								<option value="Varela Round" <?php selected($RPP_Font_Style, 'Varela Round' ); ?>>Varela Round</option>
								<option value="Vast Shadow" <?php selected($RPP_Font_Style, 'Vast Shadow' ); ?>>Vast Shadow</option>
								<option value="Vibur" <?php selected($RPP_Font_Style, 'Vibur' ); ?>>Vibur</option>
								<option value="Vidaloka" <?php selected($RPP_Font_Style, 'Vidaloka' ); ?>>Vidaloka</option>
								<option value="Viga" <?php selected($RPP_Font_Style, 'Viga' ); ?>>Viga</option>
								<option value="Voces" <?php selected($RPP_Font_Style, 'Voces' ); ?>>Voces</option>
								<option value="Volkhov" <?php selected($RPP_Font_Style, 'Volkhov' ); ?>>Volkhov</option>
								<option value="Vollkorn" <?php selected($RPP_Font_Style, 'Vollkorn' ); ?>>Vollkorn</option>
								<option value="Voltaire" <?php selected($RPP_Font_Style, 'Voltaire' ); ?>>Voltaire</option>
								<option value="Waiting for the Sunrise" <?php selected($RPP_Font_Style, 'Waiting for the Sunrise' ); ?>>Waiting for the Sunrise</option>
								<option value="Wallpoet" <?php selected($RPP_Font_Style, 'Wallpoet' ); ?>>Wallpoet</option>
								<option value="Walter Turncoat" <?php selected($RPP_Font_Style, 'Walter Turncoat' ); ?>>Walter Turncoat</option>
								<option value="Wellfleet" <?php selected($RPP_Font_Style, 'Wellfleet' ); ?>>Wellfleet</option>
								<option value="Wire One" <?php selected($RPP_Font_Style, 'Wire One' ); ?>>Wire One</option>
								<option value="Yanone Kaffeesatz" <?php selected($RPP_Font_Style, 'Yanone Kaffeesatz' ); ?>>Yanone Kaffeesatz</option>
								<option value="Yellowtail" <?php selected($RPP_Font_Style, 'Yellowtail' ); ?>>Yellowtail</option>
								<option value="Yeseva One" <?php selected($RPP_Font_Style, 'Yeseva One' ); ?>>Yeseva One</option>
								<option value="Yesteryear" <?php selected($RPP_Font_Style, 'Yesteryear' ); ?>>Yesteryear</option>
								<option value="Zeyada" <?php selected($RPP_Font_Style, 'Zeyada' ); ?>>Zeyada</option>
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
					<th scope="row" ><?php _e('Input Font Style','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<?php $RPP_Font_Style=""; ?>
				<tr class="" style="border-bottom:none;">
					<td>
						<select id="input_font_style" class="standard-dropdown" name="input_font_style"  >
							<optgroup label="Default Fonts">
								<option value="Arial" <?php selected($RPP_Font_Style, 'Arial' ); ?>>Arial</option>
								<option value="Arial Black" <?php selected($RPP_Font_Style, 'Arial Black' ); ?>>Arial Black</option>
								<option value="Courier New" <?php selected($RPP_Font_Style, 'Courier New' ); ?>>Courier New</option>
								<option value="Georgia" <?php selected($RPP_Font_Style, 'Georgia' ); ?>>Georgia</option>
								<option value="Grande" <?php selected($RPP_Font_Style, 'Grande' ); ?>>Grande</option>
								<option value="Helvetica Neue" <?php selected($RPP_Font_Style, 'Helvetica Neue' ); ?>>Helvetica Neue</option>
								<option value="Impact" <?php selected($RPP_Font_Style, 'Impact' ); ?>>Impact</option>
								<option value="Lucida" <?php selected($RPP_Font_Style, 'Lucida' ); ?>>Lucida</option>
								<option value="Lucida Grande" <?php selected($RPP_Font_Style, 'Lucida Grande' ); ?>>Lucida Grande</option>
								<option value="OpenSansBold" <?php selected($RPP_Font_Style, 'OpenSansBold' ); ?>>OpenSansBold</option>
								<option value="Palatino" <?php selected($RPP_Font_Style, 'Palatino' ); ?>>Palatino</option>
								<option value="Sans" <?php selected($RPP_Font_Style, 'Sans' ); ?>>Sans</option>
								<option value="Sans-Serif" <?php selected($RPP_Font_Style, 'Sans-Serif' ); ?>>Sans-Serif</option>
								<option value="Tahoma" <?php selected($RPP_Font_Style, 'Tahoma' ); ?>>Tahoma</option>
								<option value="Times New Roman"<?php selected($RPP_Font_Style, 'Times New Roman' ); ?>>Times New Roman</option>
								<option value="Trebuchet" <?php selected($RPP_Font_Style, 'Trebuchet' ); ?>>Trebuchet</option>
								<option value="Verdana" <?php selected($RPP_Font_Style, 'Verdana' ); ?>>Verdana</option>
							</optgroup>
							<optgroup label="Google Fonts">
								<option value="Abel"<?php selected($RPP_Font_Style, 'Abel' ); ?>>Abel</option>
								<option value="Abril Fatface" <?php selected($RPP_Font_Style, 'Abril Fatface' ); ?>>Abril Fatface</option>
								<option value="Aclonica" <?php selected($RPP_Font_Style, 'Aclonica' ); ?>>Aclonica</option>
								<option value="Acme" <?php selected($RPP_Font_Style, 'Acme' ); ?>>Acme</option>
								<option value="Actor" <?php selected($RPP_Font_Style, 'Actor' ); ?>>Actor</option>
								<option value="Adamina" <?php selected($RPP_Font_Style, 'Adamina' ); ?>>Adamina</option>
								<option value="Advent Pro" <?php selected($RPP_Font_Style, 'Advent Pro' ); ?>>Advent Pro</option>
								<option value="Aguafina Script" <?php selected($RPP_Font_Style, 'Aguafina Script' ); ?>>Aguafina Script</option>
								<option value="Aladin" <?php selected($RPP_Font_Style, 'Aladin' ); ?>>Aladin</option>
								<option value="Aldrich" <?php selected($RPP_Font_Style, 'Aldrich' ); ?>>Aldrich</option>
								<option value="Alegreya" <?php selected($RPP_Font_Style, 'Alegreya' ); ?>>Alegreya</option>
								<option value="Alegreya SC" <?php selected($RPP_Font_Style, 'Alegreya SC' ); ?>>Alegreya SC</option>
								<option value="Alex Brush" <?php selected($RPP_Font_Style, 'Alex Brush' ); ?>>Alex Brush</option>
								<option value="Alfa Slab One" <?php selected($RPP_Font_Style, 'Alfa Slab One' ); ?>>Alfa Slab One</option>
								<option value="Alice" <?php selected($RPP_Font_Style, 'Alice' ); ?>>Alice</option>
								<option value="Alike" <?php selected($RPP_Font_Style, 'Alike' ); ?>>Alike</option>
								<option value="Alike Angular" <?php selected($RPP_Font_Style, 'Alike Angular' ); ?>>Alike Angular</option>
								<option value="Allan" <?php selected($RPP_Font_Style, 'Allan' ); ?>>Allan</option>
								<option value="Allerta" <?php selected($RPP_Font_Style, 'Allerta' ); ?>>Allerta</option>
								<option value="Allerta Stencil"<?php selected($RPP_Font_Style, 'Allerta Stencil' ); ?>>Allerta Stencil</option>
								<option value="Allura" <?php selected($RPP_Font_Style, 'Allura' ); ?>>Allura</option>
								<option value="Almendra" <?php selected($RPP_Font_Style, 'Almendra' ); ?>>Almendra</option>
								<option value="Almendra SC"<?php selected($RPP_Font_Style, 'Almendra SC' ); ?>>Almendra SC</option>
								<option value="Amaranth" <?php selected($RPP_Font_Style, 'Amaranth' ); ?>>Amaranth</option> <option value="Amatic SC"<?php selected($RPP_Font_Style, 'Amatic SC' ); ?>>Amatic SC</option>
								<option value="Amethysta" <?php selected($RPP_Font_Style, 'Amethysta' ); ?>>Amethysta</option><option value="Andada"<?php selected($RPP_Font_Style, 'Andada' ); ?>>Andada</option>
								<option value="Andika" <?php selected($RPP_Font_Style, 'Andika' ); ?>>Andika</option>
								<option value="Angkor" <?php selected($RPP_Font_Style, 'Angkor' ); ?>>Angkor</option>
								<option value="Annie_Use_Your_Telescope" <?php selected($RPP_Font_Style, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option>
								<option value="Anonymous Pro" <?php selected($RPP_Font_Style, 'Anonymous Pro' ); ?>>Anonymous Pro</option>
								<option value="Antic" <?php selected($RPP_Font_Style, 'Antic' ); ?>>Antic</option>
								<option value="Antic Didone" <?php selected($RPP_Font_Style, 'Antic Didone' ); ?>>Antic Didone</option>
								<option value="Antic Slab" <?php selected($RPP_Font_Style, 'Antic Slab' ); ?>>Antic Slab</option>
								<option value="Anton" <?php selected($RPP_Font_Style, 'Anton' ); ?>>Anton</option>
								<option value="Arapey" <?php selected($RPP_Font_Style, 'Arapey' ); ?>>Arapey</option>
								<option value="Arbutus" <?php selected($RPP_Font_Style, 'Arbutus' ); ?>>Arbutus</option>
								<option value="Architects Daughter" <?php selected($RPP_Font_Style, 'Architects Daughter' ); ?>>Architects Daughter</option>
								<option value="Arimo" <?php selected($RPP_Font_Style, 'Arimo' ); ?>>Arimo</option>
								<option value="Arizonia" <?php selected($RPP_Font_Style, 'Arizonia' ); ?>>Arizonia</option>
								<option value="Armata" <?php selected($RPP_Font_Style, 'Armata' ); ?>>Armata</option>
								<option value="Artifika" <?php selected($RPP_Font_Style, 'Artifika' ); ?>>Artifika</option>
								<option value="Arvo" <?php selected($RPP_Font_Style, 'Arvo' ); ?>>Arvo</option>
								<option value="Asap" <?php selected($RPP_Font_Style, 'Asap' ); ?>>Asap</option>
								<option value="Asset" <?php selected($RPP_Font_Style, 'Asset' ); ?>>Asset</option>
								<option value="Astloch" <?php selected($RPP_Font_Style, 'Astloch' ); ?>>Astloch</option>
								<option value="Asul" <?php selected($RPP_Font_Style, 'Asul' ); ?>>Asul</option>
								<option value="Atomic Age" <?php selected($RPP_Font_Style, 'Atomic Age' ); ?>>Atomic Age</option>
								<option value="Aubrey" <?php selected($RPP_Font_Style, 'Aubrey' ); ?>>Aubrey</option>
								<option value="Audiowide" <?php selected($RPP_Font_Style, 'Audiowide' ); ?>>Audiowide</option>
								<option value="Average" <?php selected($RPP_Font_Style, 'Average' ); ?>>Average</option>
								<option value="Averia Gruesa Libre" <?php selected($RPP_Font_Style, 'Averia Gruesa Libre' ); ?>>Averia Gruesa Libre</option>
								<option value="Averia Libre" <?php selected($RPP_Font_Style, 'Averia Libre' ); ?>>Averia Libre</option>
								<option value="Averia Sans Libre" <?php selected($RPP_Font_Style, 'Averia Sans Libre' ); ?>>Averia Sans Libre</option>
								<option value="Averia Serif Libre" <?php selected($RPP_Font_Style, 'Averia Serif Libre' ); ?>>Averia Serif Libre</option>
								<option value="Bad Script" <?php selected($RPP_Font_Style, 'Bad Script' ); ?>>Bad Script</option>
								<option value="Balthazar" <?php selected($RPP_Font_Style, 'Balthazar' ); ?>>Balthazar</option>
								<option value="Bangers" <?php selected($RPP_Font_Style, 'Bangers' ); ?>>Bangers</option>
								<option value="Basic" <?php selected($RPP_Font_Style, 'Basic' ); ?>>Basic</option>
								<option value="Battambang" <?php selected($RPP_Font_Style, 'Battambang' ); ?>>Battambang</option>
								<option value="Baumans" <?php selected($RPP_Font_Style, 'Baumans' ); ?>>Baumans</option>
								<option value="Bayon" <?php selected($RPP_Font_Style, 'Bayon' ); ?>>Bayon</option>
								<option value="Belgrano"<?php selected($RPP_Font_Style, 'Belgrano' ); ?>>Belgrano</option>
								<option value="Belleza" <?php selected($RPP_Font_Style, 'Belleza' ); ?>>Belleza</option>
								<option value="Bentham" <?php selected($RPP_Font_Style, 'Bentham' ); ?>>Bentham</option>
								<option value="Berkshire Swash"<?php selected($RPP_Font_Style, 'Berkshire Swash' ); ?>>Berkshire Swash</option>
								<option value="Bevan"  <?php selected($RPP_Font_Style, 'Bevan' ); ?>>Bevan</option>
								<option value="Bigshot One"<?php selected($RPP_Font_Style, 'Bigshot One' ); ?>>Bigshot One</option>
								<option value="Bilbo" <?php selected($RPP_Font_Style, 'Bilbo' ); ?>>Bilbo</option>
								<option value="Bilbo Swash Caps" <?php selected($RPP_Font_Style, 'Bilbo Swash Caps' ); ?>>Bilbo Swash Caps</option>
								<option value="Bitter" <?php selected($RPP_Font_Style, 'Bitter' ); ?>>Bitter</option>
								<option value="Black Ops One" <?php selected($RPP_Font_Style, 'Black+Ops+One' ); ?>>Black Ops One</option>
								<option value="Bokor" <?php selected($RPP_Font_Style, 'Bokor' ); ?>>Bokor</option>
								<option value="Bonbon" <?php selected($RPP_Font_Style, 'Bonbon' ); ?>>Bonbon</option>
								<option value="Boogaloo" <?php selected($RPP_Font_Style, 'Boogaloo' ); ?>>Boogaloo</option>
								<option value="Bowlby One" <?php selected($RPP_Font_Style, 'Bowlby One' ); ?>>Bowlby One</option>
								<option value="Bowlby One SC" <?php selected($RPP_Font_Style, 'Bowlby One SC' ); ?>>Bowlby One SC</option>
								<option value="Brawler" <?php selected($RPP_Font_Style, 'Brawler' ); ?>>Brawler</option>
								<option value="Bree Serif" <?php selected($RPP_Font_Style, 'Bree+Serif' ); ?>>Bree Serif</option>
								<option value="Bubblegum Sans"  <?php selected($RPP_Font_Style, 'Bubblegum Sans' ); ?>>Bubblegum Sans</option>
								<option value="Buda"  <?php selected($RPP_Font_Style, 'Buda' ); ?>>Buda</option>
								<option value="Buenard"  <?php selected($RPP_Font_Style, 'Buenard' ); ?>>Buenard</option>
								<option value="Butcherman"  <?php selected($RPP_Font_Style, 'Butcherman' ); ?>>Butcherman</option>
								<option value="Butterfly Kids" <?php selected($RPP_Font_Style, 'Butterfly Kids' ); ?>>Butterfly Kids</option>
								<option value="Cabin"  <?php selected($RPP_Font_Style, 'Cabin' ); ?>>Cabin</option>
								<option value="Cabin Condensed"  <?php selected($RPP_Font_Style, 'Cabin Condensed' ); ?>>Cabin Condensed</option>
								<option value="Cabin Sketch"  <?php selected($RPP_Font_Style, 'Cabin Sketch' ); ?>>Cabin Sketch</option>
								<option value="Caesar Dressing"  <?php selected($RPP_Font_Style, 'Caesar Dressing' ); ?>>Caesar Dressing</option>
								<option value="Cagliostro"  <?php selected($RPP_Font_Style, 'Cagliostro' ); ?>>Cagliostro</option>
								<option value="Calligraffitti"  <?php selected($RPP_Font_Style, 'Calligraffitti' ); ?>>Calligraffitti</option>
								<option value="Cambo"  <?php selected($RPP_Font_Style, 'Cambo' ); ?>>Cambo</option>
								<option value="Candal"  <?php selected($RPP_Font_Style, 'Candal' ); ?>>Candal</option>
								<option value="Cantarell"  <?php selected($RPP_Font_Style, 'Cantarell' ); ?>>Cantarell</option>
								<option value="Cantata One"  <?php selected($RPP_Font_Style, 'Cantata One' ); ?>>Cantata One</option>
								<option value="Cardo"  <?php selected($RPP_Font_Style, 'Cardo' ); ?>>Cardo</option>
								<option value="Carme"  <?php selected($RPP_Font_Style, 'Carme' ); ?>>Carme</option>
								<option value="Carter One"  <?php selected($RPP_Font_Style, 'Carter One' ); ?>>Carter One</option>
								<option value="Caudex"  <?php selected($RPP_Font_Style, 'Caudex' ); ?>>Caudex</option>
								<option value="Cedarville Cursive"  <?php selected($RPP_Font_Style, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option>
								<option value="Ceviche One"  <?php selected($RPP_Font_Style, 'Ceviche One' ); ?>>Ceviche One</option>
								<option value="Changa One"  <?php selected($RPP_Font_Style, 'Changa One' ); ?>>Changa One</option>
								<option value="Chango"  <?php selected($RPP_Font_Style, 'Chango' ); ?>>Chango</option>
								<option value="Chau Philomene One"  <?php selected($RPP_Font_Style, 'Chau Philomene One' ); ?>>Chau Philomene One</option>
								<option value="Chelsea Market"  <?php selected($RPP_Font_Style, 'Chelsea Market' ); ?>>Chelsea Market</option>
								<option value="Chenla"  <?php selected($RPP_Font_Style, 'Chenla' ); ?>>Chenla</option>
								<option value="Cherry Cream Soda"  <?php selected($RPP_Font_Style, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option>
								<option value="Chewy"  <?php selected($RPP_Font_Style, 'Chewy' ); ?>>Chewy</option>
								<option value="Chicle"  <?php selected($RPP_Font_Style, 'Chicle' ); ?>>Chicle</option>
								<option value="Chivo"  <?php selected($RPP_Font_Style, 'Chivo' ); ?>>Chivo</option>
								<option value="Coda"  <?php selected($RPP_Font_Style, 'Coda' ); ?>>Coda</option>
								<option value="Coda Caption"  <?php selected($RPP_Font_Style, 'Coda Caption' ); ?>>Coda Caption</option>
								<option value="Codystar"  <?php selected($RPP_Font_Style, 'Codystar' ); ?>>Codystar</option>
								<option value="Comfortaa"  <?php selected($RPP_Font_Style, 'Comfortaa' ); ?>>Comfortaa</option>
								<option value="Coming Soon"  <?php selected($RPP_Font_Style, 'Coming Soon' ); ?>>Coming Soon</option>
								<option value="Concert One"  <?php selected($RPP_Font_Style, 'Concert One' ); ?>>Concert One</option>
								<option value="Condiment"  <?php selected($RPP_Font_Style, 'Condiment' ); ?>>Condiment</option>
								<option value="Content"  <?php selected($RPP_Font_Style, 'Content' ); ?>>Content</option>
								<option value="Contrail One"  <?php selected($RPP_Font_Style, 'Contrail One' ); ?>>Contrail One</option>
								<option value="Convergence"  <?php selected($RPP_Font_Style, 'Convergence' ); ?>>Convergence</option>
								<option value="Cookie"  <?php selected($RPP_Font_Style, 'Cookie' ); ?>>Cookie</option>
								<option value="Copse"  <?php selected($RPP_Font_Style, 'Copse' ); ?>>Copse</option>
								<option value="Corben"  <?php selected($RPP_Font_Style, 'Corben' ); ?>>Corben</option>
								<option value="Courgette"  <?php selected($RPP_Font_Style, 'Courgette' ); ?>>Courgette</option>
								<option value="Cousine"  <?php selected($RPP_Font_Style, 'Cousine' ); ?>>Cousine</option>
								<option value="Coustard"  <?php selected($RPP_Font_Style, 'Coustard' ); ?>>Coustard</option>
								<option value="Covered By Your Grace"  <?php selected($RPP_Font_Style, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option>
								<option value="Crafty Girls"  <?php selected($RPP_Font_Style, 'Crafty Girls' ); ?>>Crafty Girls</option>
								<option value="Creepster"  <?php selected($RPP_Font_Style, 'Creepster' ); ?>>Creepster</option>
								<option value="Crete Round"  <?php selected($RPP_Font_Style, 'Crete Round' ); ?>>Crete Round</option>
								<option value="Crimson Text"  <?php selected($RPP_Font_Style, 'Crimson Text' ); ?>>Crimson Text</option>
								<option value="Crushed"  <?php selected($RPP_Font_Style, 'Crushed' ); ?>>Crushed</option>
								<option value="Cuprum"  <?php selected($RPP_Font_Style, 'Cuprum' ); ?>>Cuprum</option>
								<option value="Cutive"  <?php selected($RPP_Font_Style, 'Cutive' ); ?>>Cutive</option>
								<option value="Damion"  <?php selected($RPP_Font_Style, 'Damion' ); ?>>Damion</option>
								<option value="Dancing Script"  <?php selected($RPP_Font_Style, 'Dancing Script' ); ?>>Dancing Script</option>
								<option value="Dangrek"  <?php selected($RPP_Font_Style, 'Dangrek' ); ?>>Dangrek</option>
								<option value="Dawning of a New Day"  <?php selected($RPP_Font_Style, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option>
								<option value="Days One"  <?php selected($RPP_Font_Style, 'Days One' ); ?>>Days One</option>
								<option value="Delius"  <?php selected($RPP_Font_Style, 'Delius' ); ?>>Delius</option>
								<option value="Delius Swash Caps"  <?php selected($RPP_Font_Style, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option>
								<option value="Delius Unicase"  <?php selected($RPP_Font_Style, 'Delius Unicase' ); ?>>Delius Unicase</option>
								<option value="Della Respira"  <?php selected($RPP_Font_Style, 'Della Respira' ); ?>>Della Respira</option>
								<option value="Devonshire"  <?php selected($RPP_Font_Style, 'Devonshire' ); ?>>Devonshire</option>
								<option value="Didact Gothic"  <?php selected($RPP_Font_Style, 'Didact Gothic' ); ?>>Didact Gothic</option>
								<option value="Diplomata"  <?php selected($RPP_Font_Style, 'Diplomata' ); ?>>Diplomata</option>
								<option value="Diplomata SC"  <?php selected($RPP_Font_Style, 'Diplomata SC' ); ?>>Diplomata SC</option>
								<option value="Doppio One"  <?php selected($RPP_Font_Style, 'Doppio One' ); ?>>Doppio One</option>
								<option value="Dorsa"  <?php selected($RPP_Font_Style, 'Dorsa' ); ?>>Dorsa</option>
								<option value="Dosis"  <?php selected($RPP_Font_Style, 'Dosis' ); ?>>Dosis</option>
								<option value="Dr Sugiyama"  <?php selected($RPP_Font_Style, 'Dr Sugiyama' ); ?>>Dr Sugiyama</option>
								<option value="Droid Sans"  <?php selected($RPP_Font_Style, 'Droid Sans' ); ?>>Droid Sans</option>
								<option value="Droid Sans Mono"  <?php selected($RPP_Font_Style, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option>
								<option value="Droid Serif" <?php selected($RPP_Font_Style, 'Droid Serif' ); ?>>Droid Serif</option>
								<option value="Duru Sans" <?php selected($RPP_Font_Style, 'Duru Sans' ); ?>>Duru Sans</option>
								<option value="Dynalight" <?php selected($RPP_Font_Style, 'Dynalight' ); ?>>Dynalight</option>
								<option value="EB Garamond" <?php selected($RPP_Font_Style, 'EB Garamond' ); ?>>EB Garamond</option>
								<option value="Eater" <?php selected($RPP_Font_Style, 'Eater' ); ?>>Eater</option>
								<option value="Economica" <?php selected($RPP_Font_Style, 'Economica' ); ?>>Economica</option>
								<option value="Electrolize" <?php selected($RPP_Font_Style, 'Electrolize' ); ?>>Electrolize</option>
								<option value="Emblema One" <?php selected($RPP_Font_Style, 'Emblema One' ); ?>>Emblema One</option>
								<option value="Emilys Candy" <?php selected($RPP_Font_Style, 'Emilys Candy' ); ?>>Emilys Candy</option>
								<option value="Engagement" <?php selected($RPP_Font_Style, 'Engagement' ); ?>>Engagement</option>
								<option value="Enriqueta" <?php selected($RPP_Font_Style, 'Enriqueta' ); ?>>Enriqueta</option>
								<option value="Erica One" <?php selected($RPP_Font_Style, 'Erica One' ); ?>>Erica One</option>
								<option value="Esteban" <?php selected($RPP_Font_Style, 'Esteban' ); ?>>Esteban</option>
								<option value="Euphoria Script">Euphoria Script</option>
								<option value="Ewert" <?php selected($RPP_Font_Style, 'Ewert' ); ?>>Ewert</option>
								<option value="Exo" <?php selected($RPP_Font_Style, 'Exo' ); ?>>Exo</option>
								<option value="Expletus Sans" <?php selected($RPP_Font_Style, 'Expletus Sans' ); ?>>Expletus Sans</option>
								<option value="Fanwood Text" <?php selected($RPP_Font_Style, 'Fanwood Text' ); ?>>Fanwood Text</option>
								<option value="Fascinate" <?php selected($RPP_Font_Style, 'Fascinate' ); ?>>Fascinate</option>
								<option value="Fascinate Inline" <?php selected($RPP_Font_Style, 'Fascinate Inline' ); ?>>Fascinate Inline</option>
								<option value="Federant" <?php selected($RPP_Font_Style, 'Federant' ); ?>>Federant</option>
								<option value="Federo" <?php selected($RPP_Font_Style, 'Federo' ); ?>>Federo</option>
								<option value="Felipa" <?php selected($RPP_Font_Style, 'Felipa' ); ?>>Felipa</option>
								<option value="Fjord One" <?php selected($RPP_Font_Style, 'Fjord One' ); ?>>Fjord One</option>
								<option value="Flamenco" <?php selected($RPP_Font_Style, 'Flamenco' ); ?>>Flamenco</option>
								<option value="Flavors" <?php selected($RPP_Font_Style, 'Flavors' ); ?>>Flavors</option>
								<option value="Fondamento" <?php selected($RPP_Font_Style, 'Fondamento' ); ?>>Fondamento</option>
								<option value="Fontdiner Swanky" <?php selected($RPP_Font_Style, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option>
								<option value="Forum" <?php selected($RPP_Font_Style, 'Forum' ); ?>>Forum</option>
								<option value="Francois One" <?php selected($RPP_Font_Style, 'Francois One' ); ?>>Francois One</option>
								<option value="Fredericka the Great" <?php selected($RPP_Font_Style, 'Fredericka the Great' ); ?>>Fredericka the Great</option>
								<option value="Fredoka One" <?php selected($RPP_Font_Style, 'Fredoka One' ); ?>>Fredoka One</option>
								<option value="Freehand" <?php selected($RPP_Font_Style, 'Freehand' ); ?>>Freehand</option>
								<option value="Fresca" <?php selected($RPP_Font_Style, 'Fresca' ); ?>>Fresca</option>
								<option value="Frijole" <?php selected($RPP_Font_Style, 'Frijole' ); ?>>Frijole</option>
								<option value="Fugaz One" <?php selected($RPP_Font_Style, 'Fugaz One' ); ?>>Fugaz One</option>
								<option value="GFS Didot" <?php selected($RPP_Font_Style, 'GFS Didot' ); ?>>GFS Didot</option>
								<option value="GFS Neohellenic" <?php selected($RPP_Font_Style, 'GFS Neohellenic' ); ?>>GFS Neohellenic</option>
								<option value="Galdeano" <?php selected($RPP_Font_Style, 'Galdeano' ); ?>>Galdeano</option>
								<option value="Gentium Basic" <?php selected($RPP_Font_Style, 'Gentium Basic' ); ?>>Gentium Basic</option>
								<option value="Gentium Book Basic" <?php selected($RPP_Font_Style, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option>
								<option value="Geo" <?php selected($RPP_Font_Style, 'Geo' ); ?>>Geo</option>
								<option value="Geostar" <?php selected($RPP_Font_Style, 'Geostar' ); ?>>Geostar</option>
								<option value="Geostar Fill" <?php selected($RPP_Font_Style, 'Geostar Fill' ); ?>>Geostar Fill</option>
								<option value="Germania One" <?php selected($RPP_Font_Style, 'Germania One' ); ?>>Germania One</option>
								<option value="Give You Glory" <?php selected($RPP_Font_Style, 'Give You Glory' ); ?>>Give You Glory</option>
								<option value="Glass Antiqua" <?php selected($RPP_Font_Style, 'Glass Antiqua' ); ?>>Glass Antiqua</option>
								<option value="Glegoo" <?php selected($RPP_Font_Style, 'Glegoo' ); ?>>Glegoo</option>
								<option value="Gloria Hallelujah" <?php selected($RPP_Font_Style, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option>
								<option value="Goblin One" <?php selected($RPP_Font_Style, 'Goblin One' ); ?>>Goblin One</option>
								<option value="Gochi Hand" <?php selected($RPP_Font_Style, 'Gochi Hand' ); ?>>Gochi Hand</option>
								<option value="Gorditas" <?php selected($RPP_Font_Style, 'Gorditas' ); ?>>Gorditas</option>
								<option value="Goudy Bookletter 1911" <?php selected($RPP_Font_Style, 'Goudy Bookletter 191' ); ?>>Goudy Bookletter 1911</option>
								<option value="Graduate" <?php selected($RPP_Font_Style, 'Graduate' ); ?>>Graduate</option>
								<option value="Gravitas One" <?php selected($RPP_Font_Style, 'Gravitas One' ); ?>>Gravitas One</option>
								<option value="Great Vibes" <?php selected($RPP_Font_Style, 'Great Vibes' ); ?>>Great Vibes</option>
								<option value="Gruppo" <?php selected($RPP_Font_Style, 'Gruppo' ); ?>>Gruppo</option>
								<option value="Gudea" <?php selected($RPP_Font_Style, 'Gudea' ); ?>>Gudea</option>
								<option value="Habibi" <?php selected($RPP_Font_Style, 'Habibi' ); ?>>Habibi</option>
								<option value="Hammersmith One" <?php selected($RPP_Font_Style, 'Hammersmith One' ); ?>>Hammersmith One</option>
								<option value="Handlee" <?php selected($RPP_Font_Style, 'Handlee' ); ?>>Handlee</option>
								<option value="Hanuman" <?php selected($RPP_Font_Style, 'Hanuman' ); ?>>Hanuman</option>
								<option value="Happy Monkey" <?php selected($RPP_Font_Style, 'Happy Monkey' ); ?>>Happy Monkey</option>
								<option value="Henny Penny" <?php selected($RPP_Font_Style, 'Henny Penny' ); ?>>Henny Penny</option>
								<option value="Herr Von Muellerhoff" <?php selected($RPP_Font_Style, 'Herr Von Muellerhoff' ); ?>>Herr Von Muellerhoff</option>
								<option value="Holtwood One SC" <?php selected($RPP_Font_Style, 'Holtwood One SC' ); ?>>Holtwood One SC</option>
								<option value="Homemade Apple" <?php selected($RPP_Font_Style, 'Homemade Apple' ); ?>>Homemade Apple</option>
								<option value="Homenaje" <?php selected($RPP_Font_Style, 'Homenaje' ); ?>>Homenaje</option>
								<option value="IM Fell DW Pica" <?php selected($RPP_Font_Style, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option>
								<option value="IM Fell DW Pica SC" <?php selected($RPP_Font_Style, 'IM Fell DW Pica SC' ); ?>>IM Fell DW Pica SC</option>
								<option value="IM Fell Double Pica" <?php selected($RPP_Font_Style, 'IM Fell Double Pica' ); ?>>IM Fell Double Pica</option>
								<option value="IM Fell Double Pica SC" <?php selected($RPP_Font_Style, 'IM Fell Double Pica SC' ); ?>>IM Fell Double Pica SC</option>
								<option value="IM Fell English" <?php selected($RPP_Font_Style, 'IM Fell English' ); ?>>IM Fell English</option>
								<option value="IM Fell English SC" <?php selected($RPP_Font_Style, 'IM Fell English SC' ); ?>>IM Fell English SC</option>
								<option value="IM Fell French Canon" <?php selected($RPP_Font_Style, 'IM Fell French Canon' ); ?>>IM Fell French Canon</option>
								<option value="IM Fell French Canon SC" <?php selected($RPP_Font_Style, 'IM Fell French Canon SC' ); ?>>IM Fell French Canon SC</option>
								<option value="IM Fell Great Primer" <?php selected($RPP_Font_Style, 'IM Fell Great Primer' ); ?>>IM Fell Great Primer</option>
								<option value="IM Fell Great Primer SC" <?php selected($RPP_Font_Style, 'IM Fell Great Primer SC' ); ?>>IM Fell Great Primer SC</option>
								<option value="Iceberg" <?php selected($RPP_Font_Style, 'Iceberg' ); ?>>Iceberg</option>
								<option value="Iceland" <?php selected($RPP_Font_Style, 'Iceland' ); ?>>Iceland</option>
								<option value="Imprima" <?php selected($RPP_Font_Style, 'Imprima' ); ?>>Imprima</option>
								<option value="Inconsolata" <?php selected($RPP_Font_Style, 'Inconsolata' ); ?>>Inconsolata</option>
								<option value="Inder" <?php selected($RPP_Font_Style, 'Inder' ); ?>>Inder</option>
								<option value="Indie Flower" <?php selected($RPP_Font_Style, 'Indie Flower' ); ?>>Indie Flower</option>
								<option value="Inika" <?php selected($RPP_Font_Style, 'Inika' ); ?>>Inika</option>
								<option value="Irish Grover" <?php selected($RPP_Font_Style, 'Irish Grover' ); ?>>Irish Grover</option>
								<option value="Istok Web" <?php selected($RPP_Font_Style, 'Istok Web' ); ?>>Istok Web</option>
								<option value="Italiana" <?php selected($RPP_Font_Style, 'Italiana' ); ?>>Italiana</option>
								<option value="Italianno" <?php selected($RPP_Font_Style, 'Italianno' ); ?>>Italianno</option>
								<option value="Jim Nightshade" <?php selected($RPP_Font_Style, 'Jim Nightshade' ); ?>>Jim Nightshade</option>
								<option value="Jockey One" <?php selected($RPP_Font_Style, 'Jockey One' ); ?>>Jockey One</option>
								<option value="Jolly Lodger" <?php selected($RPP_Font_Style, 'Jolly Lodger' ); ?>>Jolly Lodger</option>
								<option value="Josefin Sans" <?php selected($RPP_Font_Style, 'Josefin Sans' ); ?>>Josefin Sans</option>
								<option value="Josefin Slab" <?php selected($RPP_Font_Style, 'Josefin Slab' ); ?>>Josefin Slab</option>
								<option value="Judson" <?php selected($RPP_Font_Style, 'Judson' ); ?>>Judson</option>
								<option value="Julee" <?php selected($RPP_Font_Style, 'Julee' ); ?>>Julee</option>
								<option value="Junge" <?php selected($RPP_Font_Style, 'Junge' ); ?>>Junge</option>
								<option value="Jura" <?php selected($RPP_Font_Style, 'Jura' ); ?>>Jura</option>
								<option value="Just Another Hand" <?php selected($RPP_Font_Style, 'Just Another Hand' ); ?>>Just Another Hand</option>
								<option value="Just Me Again Down Here" <?php selected($RPP_Font_Style, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option>
								<option value="Kameron" <?php selected($RPP_Font_Style, 'Kameron' ); ?>>Kameron</option>
								<option value="Karla" <?php selected($RPP_Font_Style, 'Karla' ); ?>>Karla</option>
								<option value="Kaushan Script" <?php selected($RPP_Font_Style, 'Kaushan Script' ); ?>>Kaushan Script</option>
								<option value="Kelly Slab" <?php selected($RPP_Font_Style, 'Kelly Slab' ); ?>>Kelly Slab</option>
								<option value="Kenia" <?php selected($RPP_Font_Style, 'Kenia' ); ?>>Kenia</option>
								<option value="Khmer" <?php selected($RPP_Font_Style, 'Khmer' ); ?>>Khmer</option>
								<option value="Knewave" <?php selected($RPP_Font_Style, 'Knewave' ); ?>>Knewave</option>
								<option value="Kotta One" <?php selected($RPP_Font_Style, 'Kotta One' ); ?>>Kotta One</option>
								<option value="Koulen" <?php selected($RPP_Font_Style, 'Koulen' ); ?>>Koulen</option>
								<option value="Kranky" <?php selected($RPP_Font_Style, 'Kranky' ); ?>>Kranky</option>
								<option value="Kreon" <?php selected($RPP_Font_Style, 'Kreon' ); ?>>Kreon</option>
								<option value="Kristi" <?php selected($RPP_Font_Style, 'Kristi' ); ?>>Kristi</option>
								<option value="Krona One" <?php selected($RPP_Font_Style, 'Krona One' ); ?>>Krona One</option>
								<option value="La Belle Aurore" <?php selected($RPP_Font_Style, 'La Belle Aurore' ); ?>>La Belle Aurore</option>
								<option value="Lancelot" <?php selected($RPP_Font_Style, 'Lancelot' ); ?>>Lancelot</option>
								<option value="Lato" <?php selected($RPP_Font_Style, 'Lato' ); ?>>Lato</option>
								<option value="League Script" <?php selected($RPP_Font_Style, 'League Script' ); ?>>League Script</option>
								<option value="Leckerli One" <?php selected($RPP_Font_Style, 'Leckerli One' ); ?>>Leckerli One</option>
								<option value="Ledger" <?php selected($RPP_Font_Style, 'Ledger' ); ?>>Ledger</option>
								<option value="Lekton" <?php selected($RPP_Font_Style, 'Lekton' ); ?>>Lekton</option>
								<option value="Lemon" <?php selected($RPP_Font_Style, 'Lemon' ); ?>>Lemon</option>
								<option value="Lilita One" <?php selected($RPP_Font_Style, 'Lilita One' ); ?>>Lilita One</option>
								<option value="Limelight" <?php selected($RPP_Font_Style, 'Limelight' ); ?>>Limelight</option>
								<option value="Linden Hill" <?php selected($RPP_Font_Style, 'Linden Hill' ); ?>>Linden Hill</option>
								<option value="Lobster" <?php selected($RPP_Font_Style, 'Lobster' ); ?>>Lobster</option>
								<option value="Lobster Two" <?php selected($RPP_Font_Style, 'Lobster Two' ); ?>>Lobster Two</option>
								<option value="Londrina Outline" <?php selected($RPP_Font_Style, 'Londrina Outline' ); ?>>Londrina Outline</option>
								<option value="Londrina Shadow" <?php selected($RPP_Font_Style, 'Londrina Shadow' ); ?>>Londrina Shadow</option>
								<option value="Londrina Sketch" <?php selected($RPP_Font_Style, 'Londrina Sketch' ); ?>>Londrina Sketch</option>
								<option value="Londrina Solid" <?php selected($RPP_Font_Style, 'Londrina Solid' ); ?>>Londrina Solid</option>
								<option value="Lora" <?php selected($RPP_Font_Style, 'Lora' ); ?>>Lora</option>
								<option value="Love Ya Like A Sister" <?php selected($RPP_Font_Style, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option>
								<option value="Loved by the King" <?php selected($RPP_Font_Style, 'Loved by the King' ); ?>>Loved by the King</option>
								<option value="Lovers Quarrel" <?php selected($RPP_Font_Style, 'Lovers Quarrel' ); ?>>Lovers Quarrel</option>
								<option value="Luckiest Guy" <?php selected($RPP_Font_Style, 'Luckiest Guy' ); ?>>Luckiest Guy</option>
								<option value="Lusitana" <?php selected($RPP_Font_Style, 'Lusitana' ); ?>>Lusitana</option>
								<option value="Lustria" <?php selected($RPP_Font_Style, 'Lustria' ); ?>>Lustria</option>
								<option value="Macondo" <?php selected($RPP_Font_Style, 'Macondo' ); ?>>Macondo</option>
								<option value="Macondo Swash Caps" <?php selected($RPP_Font_Style, 'Macondo Swash Caps' ); ?>>Macondo Swash Caps</option>
								<option value="Magra" <?php selected($RPP_Font_Style, 'Magra' ); ?>>Magra</option>
								<option value="Maiden Orange" <?php selected($RPP_Font_Style, 'Maiden Orange' ); ?>>Maiden Orange</option>
								<option value="Mako" <?php selected($RPP_Font_Style, 'Mako' ); ?>>Mako</option>
								<option value="Marck Script" <?php selected($RPP_Font_Style, 'Marck Script' ); ?>>Marck Script</option>
								<option value="Marko One" <?php selected($RPP_Font_Style, 'Marko One' ); ?>>Marko One</option>
								<option value="Marmelad" <?php selected($RPP_Font_Style, 'Marmelad' ); ?>>Marmelad</option>
								<option value="Marvel" <?php selected($RPP_Font_Style, 'Marvel' ); ?>>Marvel</option>
								<option value="Mate" <?php selected($RPP_Font_Style, 'Mate' ); ?>>Mate</option>
								<option value="Mate SC" <?php selected($RPP_Font_Style, 'Mate SC' ); ?>>Mate SC</option>
								<option value="Maven Pro" <?php selected($RPP_Font_Style, 'Maven Pro' ); ?>>Maven Pro</option>
								<option value="Meddon" <?php selected($RPP_Font_Style, 'Meddon' ); ?>>Meddon</option>
								<option value="MedievalSharp" <?php selected($RPP_Font_Style, 'MedievalSharp' ); ?>>MedievalSharp</option>
								<option value="Medula One" <?php selected($RPP_Font_Style, 'Medula One' ); ?>>Medula One</option>
								<option value="Megrim" <?php selected($RPP_Font_Style, 'Megrim' ); ?>>Megrim</option>
								<option value="Merienda One" <?php selected($RPP_Font_Style, 'Merienda One' ); ?>>Merienda One</option>
								<option value="Merriweather" <?php selected($RPP_Font_Style, 'Merriweather' ); ?>>Merriweather</option>
								<option value="Metal" <?php selected($RPP_Font_Style, 'Metal' ); ?>>Metal</option>
								<option value="Metamorphous"<?php selected($RPP_Font_Style, 'Metamorphous' ); ?>>Metamorphous</option>
								<option value="Metrophobic" <?php selected($RPP_Font_Style, 'Metrophobic' ); ?>>Metrophobic</option>
								<option value="Michroma" <?php selected($RPP_Font_Style, 'Michroma' ); ?>>Michroma</option>
								<option value="Miltonian" <?php selected($RPP_Font_Style, 'Miltonian' ); ?>>Miltonian</option>
								<option value="Miltonian Tattoo" <?php selected($RPP_Font_Style, 'Miltonian Tattoo' ); ?>>Miltonian Tattoo</option>
								<option value="Miniver" <?php selected($RPP_Font_Style, 'Miniver' ); ?>>Miniver</option>
								<option value="Miss Fajardose" <?php selected($RPP_Font_Style, 'Miss Fajardose' ); ?>>Miss Fajardose</option>
								<option value="Modern Antiqua" <?php selected($RPP_Font_Style, 'Modern Antiqua' ); ?>>Modern Antiqua</option>
								<option value="Molengo" <?php selected($RPP_Font_Style, 'Molengo' ); ?>>Molengo</option>
								<option value="Monofett" <?php selected($RPP_Font_Style, 'Monofett' ); ?>>Monofett</option>
								<option value="Monoton" <?php selected($RPP_Font_Style, 'Monoton' ); ?>>Monoton</option>
								<option value="Monsieur La Doulaise" <?php selected($RPP_Font_Style, 'Monsieur La Doulaise' ); ?>>Monsieur La Doulaise</option>
								<option value="Montaga" <?php selected($RPP_Font_Style, 'Montaga' ); ?>>Montaga</option>
								<option value="Montez" <?php selected($RPP_Font_Style, 'Montez' ); ?>>Montez</option>
								<option value="Montserrat" <?php selected($RPP_Font_Style, 'Montserrat' ); ?>>Montserrat</option>
								<option value="Moul" <?php selected($RPP_Font_Style, 'Moul' ); ?>>Moul</option>
								<option value="Moulpali" <?php selected($RPP_Font_Style, 'Moulpali' ); ?>>Moulpali</option>
								<option value="Mountains of Christmas" <?php selected($RPP_Font_Style, 'Mountains of Christmas' ); ?>>Mountains of Christmas</option>
								<option value="Mr Bedfort" <?php selected($RPP_Font_Style, 'Mr Bedfort' ); ?>>Mr Bedfort</option>
								<option value="Mr Dafoe" <?php selected($RPP_Font_Style, 'Mr Dafoe' ); ?>>Mr Dafoe</option>
								<option value="Mr De Haviland" <?php selected($RPP_Font_Style, 'Mr De Haviland' ); ?>>Mr De Haviland</option>
								<option value="Mrs Saint Delafield" <?php selected($RPP_Font_Style, 'Mrs Saint Delafield' ); ?>>Mrs Saint Delafield</option>
								<option value="Mrs Sheppards" <?php selected($RPP_Font_Style, 'Mrs Sheppards' ); ?>>Mrs Sheppards</option>
								<option value="Muli" <?php selected($RPP_Font_Style, 'Muli' ); ?>>Muli</option>
								<option value="Mystery Quest" <?php selected($RPP_Font_Style, 'Mystery Quest' ); ?>>Mystery Quest</option>
								<option value="Neucha" <?php selected($RPP_Font_Style, 'Neucha' ); ?>>Neucha</option>
								<option value="Neuton" <?php selected($RPP_Font_Style, 'Neuton' ); ?>>Neuton</option>
								<option value="News Cycle" <?php selected($RPP_Font_Style, 'News Cycle' ); ?>>News Cycle</option>
								<option value="Niconne" <?php selected($RPP_Font_Style, 'Niconne' ); ?>>Niconne</option>
								<option value="Nixie One" <?php selected($RPP_Font_Style, 'Nixie One' ); ?>>Nixie One</option>
								<option value="Nobile" <?php selected($RPP_Font_Style, 'Nobile' ); ?>>Nobile</option>
								<option value="Nokora" <?php selected($RPP_Font_Style, 'Nokora' ); ?>>Nokora</option>
								<option value="Norican" <?php selected($RPP_Font_Style, 'Norican' ); ?>>Norican</option>
								<option value="Nosifer" <?php selected($RPP_Font_Style, 'Nosifer' ); ?>>Nosifer</option>
								<option value="Nothing You Could Do" <?php selected($RPP_Font_Style, 'Nothing You Could Do' ); ?>>Nothing You Could Do</option>
								<option value="Noticia Text" <?php selected($RPP_Font_Style, 'Noticia Text' ); ?>>Noticia Text</option>
								<option value="Nova Cut" <?php selected($RPP_Font_Style, 'Nova Cut' ); ?>>Nova Cut</option>
								<option value="Nova Flat" <?php selected($RPP_Font_Style, 'Nova Flat' ); ?>>Nova Flat</option>
								<option value="Nova Mono" <?php selected($RPP_Font_Style, 'Nova Mono' ); ?>>Nova Mono</option>
								<option value="Nova Oval" <?php selected($RPP_Font_Style, 'Nova Oval' ); ?>>Nova Oval</option>
								<option value="Nova Round" <?php selected($RPP_Font_Style, 'Nova Round' ); ?>>Nova Round</option>
								<option value="Nova Script" <?php selected($RPP_Font_Style, 'Nova Script' ); ?>>Nova Script</option>
								<option value="Nova Slim" <?php selected($RPP_Font_Style, 'Nova Slim' ); ?>>Nova Slim</option>
								<option value="Nova Square" <?php selected($RPP_Font_Style, 'Nova Square' ); ?>>Nova Square</option>
								<option value="Numans" <?php selected($RPP_Font_Style, 'Numans' ); ?>>Numans</option>

								<option value="Nunito" <?php selected($RPP_Font_Style, 'Nunito' ); ?>>Nunito</option>
								<option value="Odor Mean Chey" <?php selected($RPP_Font_Style, 'Odor Mean Chey' ); ?>>Odor Mean Chey</option>
								<option value="Old Standard TT" <?php selected($RPP_Font_Style, 'Old Standard TT' ); ?>>Old Standard TT</option>
								<option value="Oldenburg" <?php selected($RPP_Font_Style, 'Oldenburg' ); ?>>Oldenburg</option>
								<option value="Oleo Script" <?php selected($RPP_Font_Style, 'Oleo Script' ); ?>>Oleo Script</option>
								<option value="Open Sans" <?php selected($RPP_Font_Style, 'Open Sans' ); ?>>Open Sans</option>
								<option value="Open Sans Condensed" <?php selected($RPP_Font_Style, 'Open Sans Condensed' ); ?>>Open Sans Condensed</option>
								<option value="Orbitron" <?php selected($RPP_Font_Style, 'Orbitron' ); ?>>Orbitron</option>
								<option value="Original Surfer" <?php selected($RPP_Font_Style, 'Original Surfer' ); ?>>Original Surfer</option>
								<option value="Oswald" <?php selected($RPP_Font_Style, 'Oswald' ); ?>>Oswald</option>
								<option value="Over the Rainbow" <?php selected($RPP_Font_Style, 'Over the Rainbow' ); ?>>Over the Rainbow</option>
								<option value="Overlock" <?php selected($RPP_Font_Style, 'Overlock' ); ?>>Overlock</option>
								<option value="Overlock SC" <?php selected($RPP_Font_Style, 'Overlock SC' ); ?>>Overlock SC</option>
								<option value="Ovo" <?php selected($RPP_Font_Style, 'Ovo' ); ?>>Ovo</option>
								<option value="Oxygen" <?php selected($RPP_Font_Style, 'Oxygen' ); ?>>Oxygen</option>
								<option value="PT Mono" <?php selected($RPP_Font_Style, 'PT Mono' ); ?>>PT Mono</option>
								<option value="PT Sans" <?php selected($RPP_Font_Style, 'PT Sans' ); ?>>PT Sans</option>
								<option value="PT Sans Caption" <?php selected($RPP_Font_Style, 'PT Sans Caption' ); ?>>PT Sans Caption</option>
								<option value="PT Sans Narrow" <?php selected($RPP_Font_Style, 'PT Sans Narrow' ); ?>>PT Sans Narrow</option>
								<option value="PT Serif" <?php selected($RPP_Font_Style, 'PT Serif' ); ?>>PT Serif</option>
								<option value="PT Serif Caption" <?php selected($RPP_Font_Style, 'PT Serif Caption' ); ?>>PT Serif Caption</option>
								<option value="Pacifico" <?php selected($RPP_Font_Style, 'Pacifico' ); ?>>Pacifico</option>
								<option value="Parisienne" <?php selected($RPP_Font_Style, 'Parisienne' ); ?>>Parisienne</option>
								<option value="Passero One" <?php selected($RPP_Font_Style, 'Passero One' ); ?>>Passero One</option>
								<option value="Passion One" <?php selected($RPP_Font_Style, 'Passion One' ); ?>>Passion One</option>
								<option value="Patrick Hand" <?php selected($RPP_Font_Style, 'Patrick Hand' ); ?>>Patrick Hand</option>
								<option value="Patua One" <?php selected($RPP_Font_Style, 'Patua One' ); ?>>Patua One</option>
								<option value="Paytone One" <?php selected($RPP_Font_Style, 'Paytone One' ); ?>>Paytone One</option>
								<option value="Permanent Marker" <?php selected($RPP_Font_Style, 'Permanent Marker' ); ?>>Permanent Marker</option>
								<option value="Petrona" <?php selected($RPP_Font_Style, 'Petrona' ); ?>>Petrona</option>
								<option value="Philosopher" <?php selected($RPP_Font_Style, 'Philosopher' ); ?>>Philosopher</option>
								<option value="Piedra" <?php selected($RPP_Font_Style, 'Piedra' ); ?>>Piedra</option>
								<option value="Pinyon Script" <?php selected($RPP_Font_Style, 'Pinyon Script' ); ?>>Pinyon Script</option>
								<option value="Plaster" <?php selected($RPP_Font_Style, 'Plaster' ); ?>>Plaster</option>
								<option value="Play" <?php selected($RPP_Font_Style, 'Play' ); ?>>Play</option>
								<option value="Playball" <?php selected($RPP_Font_Style, 'Playball' ); ?>>Playball</option>
								<option value="Playfair Display" <?php selected($RPP_Font_Style, 'Playfair Display' ); ?>>Playfair Display</option>
								<option value="Podkova" <?php selected($RPP_Font_Style, 'Podkova' ); ?>>Podkova</option>
								<option value="Poiret One" <?php selected($RPP_Font_Style, 'Poiret One' ); ?>>Poiret One</option>
								<option value="Poller One" <?php selected($RPP_Font_Style, 'Poller One' ); ?>>Poller One</option>
								<option value="Poly" <?php selected($RPP_Font_Style, 'Poly' ); ?>>Poly</option>
								<option value="Pompiere" <?php selected($RPP_Font_Style, 'Pompiere' ); ?>>Pompiere</option>
								<option value="Pontano Sans" <?php selected($RPP_Font_Style, 'Pontano Sans' ); ?>>Pontano Sans</option>
								<option value="Port Lligat Sans" <?php selected($RPP_Font_Style, 'Port Lligat Sans' ); ?>>Port Lligat Sans</option>
								<option value="Port Lligat Slab" <?php selected($RPP_Font_Style, 'Port Lligat Slab' ); ?>>Port Lligat Slab</option>
								<option value="Prata" <?php selected($RPP_Font_Style, 'Prata' ); ?>>Prata</option>
								<option value="Preahvihear" <?php selected($RPP_Font_Style, 'Preahvihear' ); ?>>Preahvihear</option>
								<option value="Press Start 2P" <?php selected($RPP_Font_Style, 'Press Start 2P' ); ?>>Press Start 2P</option>
								<option value="Princess Sofia" <?php selected($RPP_Font_Style, 'Princess Sofia' ); ?>>Princess Sofia</option>
								<option value="Prociono" <?php selected($RPP_Font_Style, 'Prociono' ); ?>>Prociono</option>
								<option value="Prosto One" <?php selected($RPP_Font_Style, 'Prosto One' ); ?>>Prosto One</option>
								<option value="Puritan" <?php selected($RPP_Font_Style, 'Puritan' ); ?>>Puritan</option>
								<option value="Quantico" <?php selected($RPP_Font_Style, 'Quantico' ); ?>>Quantico</option>
								<option value="Quattrocento" <?php selected($RPP_Font_Style, 'Quattrocento' ); ?>>Quattrocento</option>
								<option value="Quattrocento Sans" <?php selected($RPP_Font_Style, 'Quattrocento Sans' ); ?>>Quattrocento Sans</option>
								<option value="Questrial" <?php selected($RPP_Font_Style, 'Questrial' ); ?>>Questrial</option>
								<option value="Quicksand" <?php selected($RPP_Font_Style, 'Quicksand' ); ?>>Quicksand</option>
								<option value="Qwigley" <?php selected($RPP_Font_Style, 'Qwigley' ); ?>>Qwigley</option>
								<option value="Radley" <?php selected($RPP_Font_Style, 'Radley' ); ?>>Radley</option>
								<option value="Raleway" <?php selected($RPP_Font_Style, 'Raleway' ); ?>>Raleway</option>
								<option value="Rammetto One" <?php selected($RPP_Font_Style, 'Rammetto One' ); ?>>Rammetto One</option>
								<option value="Rancho" <?php selected($RPP_Font_Style, 'Rancho' ); ?>>Rancho</option>
								<option value="Rationale" <?php selected($RPP_Font_Style, 'Rationale' ); ?>>Rationale</option>
								<option value="Redressed" <?php selected($RPP_Font_Style, 'Redressed' ); ?>>Redressed</option>
								<option value="Reenie Beanie" <?php selected($RPP_Font_Style, 'Reenie Beanie' ); ?>>Reenie Beanie</option>
								<option value="Revalia" <?php selected($RPP_Font_Style, 'Revalia' ); ?>>Revalia</option>
								<option value="Ribeye" <?php selected($RPP_Font_Style, 'Ribeye' ); ?>>Ribeye</option>
								<option value="Ribeye Marrow" <?php selected($RPP_Font_Style, 'Ribeye Marrow' ); ?>>Ribeye Marrow</option>
								<option value="Righteous" <?php selected($RPP_Font_Style, 'Righteous' ); ?>>Righteous</option>
								<option value="Rochester" <?php selected($RPP_Font_Style, 'Rochester' ); ?>>Rochester</option>
								<option value="Rock Salt" <?php selected($RPP_Font_Style, 'Rock Salt' ); ?>>Rock Salt</option>
								<option value="Rokkitt" <?php selected($RPP_Font_Style, 'Rokkitt' ); ?>>Rokkitt</option>
								<option value="Ropa Sans" <?php selected($RPP_Font_Style, 'Ropa Sans' ); ?>>Ropa Sans</option>
								<option value="Rosario" <?php selected($RPP_Font_Style, 'Rosario' ); ?>>Rosario</option>
								<option value="Rosarivo" <?php selected($RPP_Font_Style, 'Rosarivo' ); ?>>Rosarivo</option>
								<option value="Rouge Script" <?php selected($RPP_Font_Style, 'Rouge Script' ); ?>>Rouge Script</option>
								<option value="Ruda" <?php selected($RPP_Font_Style, 'Ruda' ); ?>>Ruda</option>
								<option value="Ruge Boogie" <?php selected($RPP_Font_Style, 'Ruge Boogie' ); ?>>Ruge Boogie</option>
								<option value="Ruluko" <?php selected($RPP_Font_Style, 'Ruluko' ); ?>>Ruluko</option>
								<option value="Ruslan Display" <?php selected($RPP_Font_Style, 'Ruslan Display' ); ?>>Ruslan Display</option>
								<option value="Russo One" <?php selected($RPP_Font_Style, 'Russo One' ); ?>>Russo One</option>
								<option value="Ruthie" <?php selected($RPP_Font_Style, 'Ruthie' ); ?>>Ruthie</option>
								<option value="Sail" <?php selected($RPP_Font_Style, 'Sail' ); ?>>Sail</option>
								<option value="Salsa" <?php selected($RPP_Font_Style, 'Salsa' ); ?>>Salsa</option>
								<option value="Sancreek" <?php selected($RPP_Font_Style, 'Sancreek' ); ?>>Sancreek</option>
								<option value="Sansita One" <?php selected($RPP_Font_Style, 'Sansita One' ); ?>>Sansita One</option>
								<option value="Sarina" <?php selected($RPP_Font_Style, 'Sarina' ); ?>>Sarina</option>
								<option value="Satisfy" <?php selected($RPP_Font_Style, 'Satisfy' ); ?>>Satisfy</option>
								<option value="Schoolbell" <?php selected($RPP_Font_Style, 'Schoolbell' ); ?>>Schoolbell</option>
								<option value="Seaweed Script" <?php selected($RPP_Font_Style, 'Seaweed Script' ); ?>>Seaweed Script</option>
								<option value="Sevillana" <?php selected($RPP_Font_Style, 'Sevillana' ); ?>>Sevillana</option>
								<option value="Shadows Into Light" <?php selected($RPP_Font_Style, 'hadows Into Light' ); ?>>Shadows Into Light</option>
								<option value="Shadows Into Light Two" <?php selected($RPP_Font_Style, 'Shadows Into Light Two' ); ?>>Shadows Into Light Two</option>
								<option value="Shanti" <?php selected($RPP_Font_Style, 'Shanti' ); ?>>Shanti</option>
								<option value="Share">Share</option>
								<option value="Shojumaru" <?php selected($RPP_Font_Style, 'Shojumaru' ); ?>>Shojumaru</option>
								<option value="Short Stack" <?php selected($RPP_Font_Style, 'Short Stack' ); ?>>Short Stack</option>
								<option value="Siemreap"<?php selected($RPP_Font_Style, 'Siemreap' ); ?>>Siemreap</option>
								<option value="Sigmar One" <?php selected($RPP_Font_Style, 'Sigmar One' ); ?>>Sigmar One</option>
								<option value="Signika"<?php selected($RPP_Font_Style, 'Signika' ); ?>>Signika</option>
								<option value="Signika Negative" <?php selected($RPP_Font_Style, 'Signika Negative' ); ?>>Signika Negative</option>
								<option value="Simonetta" <?php selected($RPP_Font_Style, 'Simonetta' ); ?>>Simonetta</option>
								<option value="Sirin Stencil" <?php selected($RPP_Font_Style, 'Sirin Stencil' ); ?>>Sirin Stencil</option>
								<option value="Six Caps" <?php selected($RPP_Font_Style, 'Six Caps' ); ?>>Six Caps</option>
								<option value="Slackey" <?php selected($RPP_Font_Style, 'Slackey' ); ?>>Slackey</option>
								<option value="Smokum" <?php selected($RPP_Font_Style, 'Smokum' ); ?>>Smokum</option>
								<option value="Smythe" <?php selected($RPP_Font_Style, 'Smythe' ); ?>>Smythe</option>
								<option value="Sniglet" <?php selected($RPP_Font_Style, 'Sniglet' ); ?>>Sniglet</option>
								<option value="Snippet" <?php selected($RPP_Font_Style, 'Snippet' ); ?>>Snippet</option>
								<option value="Sofia" <?php selected($RPP_Font_Style, 'Sofia' ); ?>>Sofia</option>
								<option value="Sonsie One" <?php selected($RPP_Font_Style, 'Sonsie One' ); ?>>Sonsie One</option>
								<option value="Sorts Mill Goudy" <?php selected($RPP_Font_Style, 'Sorts Mill Goudy' ); ?>>Sorts Mill Goudy</option>
								<option value="Special Elite" <?php selected($RPP_Font_Style, 'Special Elite' ); ?>>Special Elite</option>
								<option value="Spicy Rice" <?php selected($RPP_Font_Style, 'Spicy Rice' ); ?>>Spicy Rice</option>
								<option value="Spinnaker" <?php selected($RPP_Font_Style, 'Spinnaker' ); ?>>Spinnaker</option>
								<option value="Spirax" <?php selected($RPP_Font_Style, 'Spirax' ); ?>>Spirax</option>
								<option value="Squada One" <?php selected($RPP_Font_Style, 'Squada One' ); ?>>Squada One</option>
								<option value="Stardos Stencil" <?php selected($RPP_Font_Style, 'Stardos Stencil' ); ?>>Stardos Stencil</option>
								<option value="Stint Ultra Condensed" <?php selected($RPP_Font_Style, 'Stint Ultra Condensed' ); ?>>Stint Ultra Condensed</option>
								<option value="Stint Ultra Expanded" <?php selected($RPP_Font_Style, 'Stint Ultra Expanded' ); ?>>Stint Ultra Expanded</option>
								<option value="Stoke" <?php selected($RPP_Font_Style, 'Stoke' ); ?>>Stoke</option>
								<option value="Sue Ellen Francisco" <?php selected($RPP_Font_Style, 'Sue Ellen Francisco' ); ?>>Sue Ellen Francisco</option>
								<option value="Sunshiney" <?php selected($RPP_Font_Style, 'Sunshiney' ); ?>>Sunshiney</option>
								<option value="Supermercado One" <?php selected($RPP_Font_Style, 'Supermercado One' ); ?>>Supermercado One</option>
								<option value="Suwannaphum" <?php selected($RPP_Font_Style, 'Suwannaphum' ); ?>>Suwannaphum</option>
								<option value="Swanky and Moo Moo" <?php selected($RPP_Font_Style, 'Swanky and Moo Moo' ); ?>>Swanky and Moo Moo</option>
								<option value="Syncopate" <?php selected($RPP_Font_Style, 'Syncopate' ); ?>>Syncopate</option>
								<option value="Tangerine" <?php selected($RPP_Font_Style, 'Tangerine' ); ?>>Tangerine</option>
								<option value="Taprom" <?php selected($RPP_Font_Style, 'Taprom' ); ?>>Taprom</option>
								<option value="Telex" <?php selected($RPP_Font_Style, 'Telex' ); ?>>Telex</option>
								<option value="Tenor Sans" <?php selected($RPP_Font_Style, 'Tenor Sans' ); ?>>Tenor Sans</option>
								<option value="The Girl Next Door" <?php selected($RPP_Font_Style, 'The Girl Next Door' ); ?>>The Girl Next Door</option>
								<option value="Tienne" <?php selected($RPP_Font_Style, 'Tienne' ); ?>>Tienne</option>
								<option value="Tinos" <?php selected($RPP_Font_Style, 'Tinos' ); ?>>Tinos</option>
								<option value="Titan One" <?php selected($RPP_Font_Style, 'Titan One' ); ?>>Titan One</option>
								<option value="Trade Winds" <?php selected($RPP_Font_Style, 'Trade Winds' ); ?> >Trade Winds</option>
								<option value="Trocchi" <?php selected($RPP_Font_Style, 'Trocchi' ); ?>>Trocchi</option>
								<option value="Trochut" <?php selected($RPP_Font_Style, 'Trochut' ); ?>>Trochut</option>
								<option value="Trykker" <?php selected($RPP_Font_Style, 'Trykker' ); ?>>Trykker</option>
								<option value="Tulpen One" <?php selected($RPP_Font_Style, 'Tulpen One' ); ?>>Tulpen One</option>
								<option value="Ubuntu" <?php selected($RPP_Font_Style, 'Ubuntu' ); ?>>Ubuntu</option>
								<option value="Ubuntu Condensed" <?php selected($RPP_Font_Style, 'Ubuntu Condensed' ); ?>>Ubuntu Condensed</option>
								<option value="Ubuntu Mono" <?php selected($RPP_Font_Style, 'Ubuntu Mono' ); ?>>Ubuntu Mono</option>
								<option value="Ultra" <?php selected($RPP_Font_Style, 'Ultra' ); ?>>Ultra</option>
								<option value="Uncial Antiqua" <?php selected($RPP_Font_Style, 'Uncial Antiqua' ); ?>>Uncial Antiqua</option>
								<option value="UnifrakturCook" <?php selected($RPP_Font_Style, 'UnifrakturCook' ); ?>>UnifrakturCook</option>
								<option value="UnifrakturMaguntia" <?php selected($RPP_Font_Style, 'UnifrakturMaguntia' ); ?>>UnifrakturMaguntia</option>
								<option value="Unkempt" <?php selected($RPP_Font_Style, 'Unkempt' ); ?>>Unkempt</option>
								<option value="Unlock" <?php selected($RPP_Font_Style, 'Unlock' ); ?>>Unlock</option>
								<option value="Unna" <?php selected($RPP_Font_Style, 'Unna' ); ?>>Unna</option>
								<option value="VT323" <?php selected($RPP_Font_Style, 'VT323' ); ?>>VT323</option>
								<option value="Varela" <?php selected($RPP_Font_Style, 'Varela' ); ?>>Varela</option>
								<option value="Varela Round" <?php selected($RPP_Font_Style, 'Varela Round' ); ?>>Varela Round</option>
								<option value="Vast Shadow" <?php selected($RPP_Font_Style, 'Vast Shadow' ); ?>>Vast Shadow</option>
								<option value="Vibur" <?php selected($RPP_Font_Style, 'Vibur' ); ?>>Vibur</option>
								<option value="Vidaloka" <?php selected($RPP_Font_Style, 'Vidaloka' ); ?>>Vidaloka</option>
								<option value="Viga" <?php selected($RPP_Font_Style, 'Viga' ); ?>>Viga</option>
								<option value="Voces" <?php selected($RPP_Font_Style, 'Voces' ); ?>>Voces</option>
								<option value="Volkhov" <?php selected($RPP_Font_Style, 'Volkhov' ); ?>>Volkhov</option>
								<option value="Vollkorn" <?php selected($RPP_Font_Style, 'Vollkorn' ); ?>>Vollkorn</option>
								<option value="Voltaire" <?php selected($RPP_Font_Style, 'Voltaire' ); ?>>Voltaire</option>
								<option value="Waiting for the Sunrise" <?php selected($RPP_Font_Style, 'Waiting for the Sunrise' ); ?>>Waiting for the Sunrise</option>
								<option value="Wallpoet" <?php selected($RPP_Font_Style, 'Wallpoet' ); ?>>Wallpoet</option>
								<option value="Walter Turncoat" <?php selected($RPP_Font_Style, 'Walter Turncoat' ); ?>>Walter Turncoat</option>
								<option value="Wellfleet" <?php selected($RPP_Font_Style, 'Wellfleet' ); ?>>Wellfleet</option>
								<option value="Wire One" <?php selected($RPP_Font_Style, 'Wire One' ); ?>>Wire One</option>
								<option value="Yanone Kaffeesatz" <?php selected($RPP_Font_Style, 'Yanone Kaffeesatz' ); ?>>Yanone Kaffeesatz</option>
								<option value="Yellowtail" <?php selected($RPP_Font_Style, 'Yellowtail' ); ?>>Yellowtail</option>
								<option value="Yeseva One" <?php selected($RPP_Font_Style, 'Yeseva One' ); ?>>Yeseva One</option>
								<option value="Yesteryear" <?php selected($RPP_Font_Style, 'Yesteryear' ); ?>>Yesteryear</option>
								<option value="Zeyada" <?php selected($RPP_Font_Style, 'Zeyada' ); ?>>Zeyada</option>
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
					<th scope="row" ><?php _e('Link Font Style','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<?php $RPP_Font_Style=""; ?>
				<tr class="" style="border-bottom:none;">
					<td>
						<select id="link_font_style" class="standard-dropdown" name="link_font_style">	
							<optgroup label="Default Fonts">
								<option value="Arial" <?php selected($RPP_Font_Style, 'Arial' ); ?>>Arial</option>
								<option value="Arial Black" <?php selected($RPP_Font_Style, 'Arial Black' ); ?>>Arial Black</option>
								<option value="Courier New" <?php selected($RPP_Font_Style, 'Courier New' ); ?>>Courier New</option>
								<option value="Georgia" <?php selected($RPP_Font_Style, 'Georgia' ); ?>>Georgia</option>
								<option value="Grande" <?php selected($RPP_Font_Style, 'Grande' ); ?>>Grande</option>
								<option value="Helvetica Neue" <?php selected($RPP_Font_Style, 'Helvetica Neue' ); ?>>Helvetica Neue</option>
								<option value="Impact" <?php selected($RPP_Font_Style, 'Impact' ); ?>>Impact</option>
								<option value="Lucida" <?php selected($RPP_Font_Style, 'Lucida' ); ?>>Lucida</option>
								<option value="Lucida Grande" <?php selected($RPP_Font_Style, 'Lucida Grande' ); ?>>Lucida Grande</option>
								<option value="OpenSansBold" <?php selected($RPP_Font_Style, 'OpenSansBold' ); ?>>OpenSansBold</option>
								<option value="Palatino" <?php selected($RPP_Font_Style, 'Palatino' ); ?>>Palatino</option>
								<option value="Sans" <?php selected($RPP_Font_Style, 'Sans' ); ?>>Sans</option>
								<option value="Sans-Serif" <?php selected($RPP_Font_Style, 'Sans-Serif' ); ?>>Sans-Serif</option>
								<option value="Tahoma" <?php selected($RPP_Font_Style, 'Tahoma' ); ?>>Tahoma</option>
								<option value="Times New Roman"<?php selected($RPP_Font_Style, 'Times New Roman' ); ?>>Times New Roman</option>
								<option value="Trebuchet" <?php selected($RPP_Font_Style, 'Trebuchet' ); ?>>Trebuchet</option>
								<option value="Verdana" <?php selected($RPP_Font_Style, 'Verdana' ); ?>>Verdana</option>
							</optgroup>
							<optgroup label="Google Fonts">
								<option value="Abel"<?php selected($RPP_Font_Style, 'Abel' ); ?>>Abel</option>
								<option value="Abril Fatface" <?php selected($RPP_Font_Style, 'Abril Fatface' ); ?>>Abril Fatface</option>
								<option value="Aclonica" <?php selected($RPP_Font_Style, 'Aclonica' ); ?>>Aclonica</option>
								<option value="Acme" <?php selected($RPP_Font_Style, 'Acme' ); ?>>Acme</option>
								<option value="Actor" <?php selected($RPP_Font_Style, 'Actor' ); ?>>Actor</option>
								<option value="Adamina" <?php selected($RPP_Font_Style, 'Adamina' ); ?>>Adamina</option>
								<option value="Advent Pro" <?php selected($RPP_Font_Style, 'Advent Pro' ); ?>>Advent Pro</option>
								<option value="Aguafina Script" <?php selected($RPP_Font_Style, 'Aguafina Script' ); ?>>Aguafina Script</option>
								<option value="Aladin" <?php selected($RPP_Font_Style, 'Aladin' ); ?>>Aladin</option>
								<option value="Aldrich" <?php selected($RPP_Font_Style, 'Aldrich' ); ?>>Aldrich</option>
								<option value="Alegreya" <?php selected($RPP_Font_Style, 'Alegreya' ); ?>>Alegreya</option>
								<option value="Alegreya SC" <?php selected($RPP_Font_Style, 'Alegreya SC' ); ?>>Alegreya SC</option>
								<option value="Alex Brush" <?php selected($RPP_Font_Style, 'Alex Brush' ); ?>>Alex Brush</option>
								<option value="Alfa Slab One" <?php selected($RPP_Font_Style, 'Alfa Slab One' ); ?>>Alfa Slab One</option>
								<option value="Alice" <?php selected($RPP_Font_Style, 'Alice' ); ?>>Alice</option>
								<option value="Alike" <?php selected($RPP_Font_Style, 'Alike' ); ?>>Alike</option>
								<option value="Alike Angular" <?php selected($RPP_Font_Style, 'Alike Angular' ); ?>>Alike Angular</option>
								<option value="Allan" <?php selected($RPP_Font_Style, 'Allan' ); ?>>Allan</option>
								<option value="Allerta" <?php selected($RPP_Font_Style, 'Allerta' ); ?>>Allerta</option>
								<option value="Allerta Stencil"<?php selected($RPP_Font_Style, 'Allerta Stencil' ); ?>>Allerta Stencil</option>
								<option value="Allura" <?php selected($RPP_Font_Style, 'Allura' ); ?>>Allura</option>
								<option value="Almendra" <?php selected($RPP_Font_Style, 'Almendra' ); ?>>Almendra</option>
								<option value="Almendra SC"<?php selected($RPP_Font_Style, 'Almendra SC' ); ?>>Almendra SC</option>
								<option value="Amaranth" <?php selected($RPP_Font_Style, 'Amaranth' ); ?>>Amaranth</option> <option value="Amatic SC"<?php selected($RPP_Font_Style, 'Amatic SC' ); ?>>Amatic SC</option>
								<option value="Amethysta" <?php selected($RPP_Font_Style, 'Amethysta' ); ?>>Amethysta</option><option value="Andada"<?php selected($RPP_Font_Style, 'Andada' ); ?>>Andada</option>
								<option value="Andika" <?php selected($RPP_Font_Style, 'Andika' ); ?>>Andika</option>
								<option value="Angkor" <?php selected($RPP_Font_Style, 'Angkor' ); ?>>Angkor</option>
								<option value="Annie_Use_Your_Telescope" <?php selected($RPP_Font_Style, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option>
								<option value="Anonymous Pro" <?php selected($RPP_Font_Style, 'Anonymous Pro' ); ?>>Anonymous Pro</option>
								<option value="Antic" <?php selected($RPP_Font_Style, 'Antic' ); ?>>Antic</option>
								<option value="Antic Didone" <?php selected($RPP_Font_Style, 'Antic Didone' ); ?>>Antic Didone</option>
								<option value="Antic Slab" <?php selected($RPP_Font_Style, 'Antic Slab' ); ?>>Antic Slab</option>
								<option value="Anton" <?php selected($RPP_Font_Style, 'Anton' ); ?>>Anton</option>
								<option value="Arapey" <?php selected($RPP_Font_Style, 'Arapey' ); ?>>Arapey</option>
								<option value="Arbutus" <?php selected($RPP_Font_Style, 'Arbutus' ); ?>>Arbutus</option>
								<option value="Architects Daughter" <?php selected($RPP_Font_Style, 'Architects Daughter' ); ?>>Architects Daughter</option>
								<option value="Arimo" <?php selected($RPP_Font_Style, 'Arimo' ); ?>>Arimo</option>
								<option value="Arizonia" <?php selected($RPP_Font_Style, 'Arizonia' ); ?>>Arizonia</option>
								<option value="Armata" <?php selected($RPP_Font_Style, 'Armata' ); ?>>Armata</option>
								<option value="Artifika" <?php selected($RPP_Font_Style, 'Artifika' ); ?>>Artifika</option>
								<option value="Arvo" <?php selected($RPP_Font_Style, 'Arvo' ); ?>>Arvo</option>
								<option value="Asap" <?php selected($RPP_Font_Style, 'Asap' ); ?>>Asap</option>
								<option value="Asset" <?php selected($RPP_Font_Style, 'Asset' ); ?>>Asset</option>
								<option value="Astloch" <?php selected($RPP_Font_Style, 'Astloch' ); ?>>Astloch</option>
								<option value="Asul" <?php selected($RPP_Font_Style, 'Asul' ); ?>>Asul</option>
								<option value="Atomic Age" <?php selected($RPP_Font_Style, 'Atomic Age' ); ?>>Atomic Age</option>
								<option value="Aubrey" <?php selected($RPP_Font_Style, 'Aubrey' ); ?>>Aubrey</option>
								<option value="Audiowide" <?php selected($RPP_Font_Style, 'Audiowide' ); ?>>Audiowide</option>
								<option value="Average" <?php selected($RPP_Font_Style, 'Average' ); ?>>Average</option>
								<option value="Averia Gruesa Libre" <?php selected($RPP_Font_Style, 'Averia Gruesa Libre' ); ?>>Averia Gruesa Libre</option>
								<option value="Averia Libre" <?php selected($RPP_Font_Style, 'Averia Libre' ); ?>>Averia Libre</option>
								<option value="Averia Sans Libre" <?php selected($RPP_Font_Style, 'Averia Sans Libre' ); ?>>Averia Sans Libre</option>
								<option value="Averia Serif Libre" <?php selected($RPP_Font_Style, 'Averia Serif Libre' ); ?>>Averia Serif Libre</option>
								<option value="Bad Script" <?php selected($RPP_Font_Style, 'Bad Script' ); ?>>Bad Script</option>
								<option value="Balthazar" <?php selected($RPP_Font_Style, 'Balthazar' ); ?>>Balthazar</option>
								<option value="Bangers" <?php selected($RPP_Font_Style, 'Bangers' ); ?>>Bangers</option>
								<option value="Basic" <?php selected($RPP_Font_Style, 'Basic' ); ?>>Basic</option>
								<option value="Battambang" <?php selected($RPP_Font_Style, 'Battambang' ); ?>>Battambang</option>
								<option value="Baumans" <?php selected($RPP_Font_Style, 'Baumans' ); ?>>Baumans</option>
								<option value="Bayon" <?php selected($RPP_Font_Style, 'Bayon' ); ?>>Bayon</option>
								<option value="Belgrano"<?php selected($RPP_Font_Style, 'Belgrano' ); ?>>Belgrano</option>
								<option value="Belleza" <?php selected($RPP_Font_Style, 'Belleza' ); ?>>Belleza</option>
								<option value="Bentham" <?php selected($RPP_Font_Style, 'Bentham' ); ?>>Bentham</option>
								<option value="Berkshire Swash"<?php selected($RPP_Font_Style, 'Berkshire Swash' ); ?>>Berkshire Swash</option>
								<option value="Bevan"  <?php selected($RPP_Font_Style, 'Bevan' ); ?>>Bevan</option>
								<option value="Bigshot One"<?php selected($RPP_Font_Style, 'Bigshot One' ); ?>>Bigshot One</option>
								<option value="Bilbo" <?php selected($RPP_Font_Style, 'Bilbo' ); ?>>Bilbo</option>
								<option value="Bilbo Swash Caps" <?php selected($RPP_Font_Style, 'Bilbo Swash Caps' ); ?>>Bilbo Swash Caps</option>
								<option value="Bitter" <?php selected($RPP_Font_Style, 'Bitter' ); ?>>Bitter</option>
								<option value="Black Ops One" <?php selected($RPP_Font_Style, 'Black+Ops+One' ); ?>>Black Ops One</option>
								<option value="Bokor" <?php selected($RPP_Font_Style, 'Bokor' ); ?>>Bokor</option>
								<option value="Bonbon" <?php selected($RPP_Font_Style, 'Bonbon' ); ?>>Bonbon</option>
								<option value="Boogaloo" <?php selected($RPP_Font_Style, 'Boogaloo' ); ?>>Boogaloo</option>
								<option value="Bowlby One" <?php selected($RPP_Font_Style, 'Bowlby One' ); ?>>Bowlby One</option>
								<option value="Bowlby One SC" <?php selected($RPP_Font_Style, 'Bowlby One SC' ); ?>>Bowlby One SC</option>
								<option value="Brawler" <?php selected($RPP_Font_Style, 'Brawler' ); ?>>Brawler</option>
								<option value="Bree Serif" <?php selected($RPP_Font_Style, 'Bree+Serif' ); ?>>Bree Serif</option>
								<option value="Bubblegum Sans"  <?php selected($RPP_Font_Style, 'Bubblegum Sans' ); ?>>Bubblegum Sans</option>
								<option value="Buda"  <?php selected($RPP_Font_Style, 'Buda' ); ?>>Buda</option>
								<option value="Buenard"  <?php selected($RPP_Font_Style, 'Buenard' ); ?>>Buenard</option>
								<option value="Butcherman"  <?php selected($RPP_Font_Style, 'Butcherman' ); ?>>Butcherman</option>
								<option value="Butterfly Kids" <?php selected($RPP_Font_Style, 'Butterfly Kids' ); ?>>Butterfly Kids</option>
								<option value="Cabin"  <?php selected($RPP_Font_Style, 'Cabin' ); ?>>Cabin</option>
								<option value="Cabin Condensed"  <?php selected($RPP_Font_Style, 'Cabin Condensed' ); ?>>Cabin Condensed</option>
								<option value="Cabin Sketch"  <?php selected($RPP_Font_Style, 'Cabin Sketch' ); ?>>Cabin Sketch</option>
								<option value="Caesar Dressing"  <?php selected($RPP_Font_Style, 'Caesar Dressing' ); ?>>Caesar Dressing</option>
								<option value="Cagliostro"  <?php selected($RPP_Font_Style, 'Cagliostro' ); ?>>Cagliostro</option>
								<option value="Calligraffitti"  <?php selected($RPP_Font_Style, 'Calligraffitti' ); ?>>Calligraffitti</option>
								<option value="Cambo"  <?php selected($RPP_Font_Style, 'Cambo' ); ?>>Cambo</option>
								<option value="Candal"  <?php selected($RPP_Font_Style, 'Candal' ); ?>>Candal</option>
								<option value="Cantarell"  <?php selected($RPP_Font_Style, 'Cantarell' ); ?>>Cantarell</option>
								<option value="Cantata One"  <?php selected($RPP_Font_Style, 'Cantata One' ); ?>>Cantata One</option>
								<option value="Cardo"  <?php selected($RPP_Font_Style, 'Cardo' ); ?>>Cardo</option>
								<option value="Carme"  <?php selected($RPP_Font_Style, 'Carme' ); ?>>Carme</option>
								<option value="Carter One"  <?php selected($RPP_Font_Style, 'Carter One' ); ?>>Carter One</option>
								<option value="Caudex"  <?php selected($RPP_Font_Style, 'Caudex' ); ?>>Caudex</option>
								<option value="Cedarville Cursive"  <?php selected($RPP_Font_Style, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option>
								<option value="Ceviche One"  <?php selected($RPP_Font_Style, 'Ceviche One' ); ?>>Ceviche One</option>
								<option value="Changa One"  <?php selected($RPP_Font_Style, 'Changa One' ); ?>>Changa One</option>
								<option value="Chango"  <?php selected($RPP_Font_Style, 'Chango' ); ?>>Chango</option>
								<option value="Chau Philomene One"  <?php selected($RPP_Font_Style, 'Chau Philomene One' ); ?>>Chau Philomene One</option>
								<option value="Chelsea Market"  <?php selected($RPP_Font_Style, 'Chelsea Market' ); ?>>Chelsea Market</option>
								<option value="Chenla"  <?php selected($RPP_Font_Style, 'Chenla' ); ?>>Chenla</option>
								<option value="Cherry Cream Soda"  <?php selected($RPP_Font_Style, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option>
								<option value="Chewy"  <?php selected($RPP_Font_Style, 'Chewy' ); ?>>Chewy</option>
								<option value="Chicle"  <?php selected($RPP_Font_Style, 'Chicle' ); ?>>Chicle</option>
								<option value="Chivo"  <?php selected($RPP_Font_Style, 'Chivo' ); ?>>Chivo</option>
								<option value="Coda"  <?php selected($RPP_Font_Style, 'Coda' ); ?>>Coda</option>
								<option value="Coda Caption"  <?php selected($RPP_Font_Style, 'Coda Caption' ); ?>>Coda Caption</option>
								<option value="Codystar"  <?php selected($RPP_Font_Style, 'Codystar' ); ?>>Codystar</option>
								<option value="Comfortaa"  <?php selected($RPP_Font_Style, 'Comfortaa' ); ?>>Comfortaa</option>
								<option value="Coming Soon"  <?php selected($RPP_Font_Style, 'Coming Soon' ); ?>>Coming Soon</option>
								<option value="Concert One"  <?php selected($RPP_Font_Style, 'Concert One' ); ?>>Concert One</option>
								<option value="Condiment"  <?php selected($RPP_Font_Style, 'Condiment' ); ?>>Condiment</option>
								<option value="Content"  <?php selected($RPP_Font_Style, 'Content' ); ?>>Content</option>
								<option value="Contrail One"  <?php selected($RPP_Font_Style, 'Contrail One' ); ?>>Contrail One</option>
								<option value="Convergence"  <?php selected($RPP_Font_Style, 'Convergence' ); ?>>Convergence</option>
								<option value="Cookie"  <?php selected($RPP_Font_Style, 'Cookie' ); ?>>Cookie</option>
								<option value="Copse"  <?php selected($RPP_Font_Style, 'Copse' ); ?>>Copse</option>
								<option value="Corben"  <?php selected($RPP_Font_Style, 'Corben' ); ?>>Corben</option>
								<option value="Courgette"  <?php selected($RPP_Font_Style, 'Courgette' ); ?>>Courgette</option>
								<option value="Cousine"  <?php selected($RPP_Font_Style, 'Cousine' ); ?>>Cousine</option>
								<option value="Coustard"  <?php selected($RPP_Font_Style, 'Coustard' ); ?>>Coustard</option>
								<option value="Covered By Your Grace"  <?php selected($RPP_Font_Style, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option>
								<option value="Crafty Girls"  <?php selected($RPP_Font_Style, 'Crafty Girls' ); ?>>Crafty Girls</option>
								<option value="Creepster"  <?php selected($RPP_Font_Style, 'Creepster' ); ?>>Creepster</option>
								<option value="Crete Round"  <?php selected($RPP_Font_Style, 'Crete Round' ); ?>>Crete Round</option>
								<option value="Crimson Text"  <?php selected($RPP_Font_Style, 'Crimson Text' ); ?>>Crimson Text</option>
								<option value="Crushed"  <?php selected($RPP_Font_Style, 'Crushed' ); ?>>Crushed</option>
								<option value="Cuprum"  <?php selected($RPP_Font_Style, 'Cuprum' ); ?>>Cuprum</option>
								<option value="Cutive"  <?php selected($RPP_Font_Style, 'Cutive' ); ?>>Cutive</option>
								<option value="Damion"  <?php selected($RPP_Font_Style, 'Damion' ); ?>>Damion</option>
								<option value="Dancing Script"  <?php selected($RPP_Font_Style, 'Dancing Script' ); ?>>Dancing Script</option>
								<option value="Dangrek"  <?php selected($RPP_Font_Style, 'Dangrek' ); ?>>Dangrek</option>
								<option value="Dawning of a New Day"  <?php selected($RPP_Font_Style, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option>
								<option value="Days One"  <?php selected($RPP_Font_Style, 'Days One' ); ?>>Days One</option>
								<option value="Delius"  <?php selected($RPP_Font_Style, 'Delius' ); ?>>Delius</option>
								<option value="Delius Swash Caps"  <?php selected($RPP_Font_Style, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option>
								<option value="Delius Unicase"  <?php selected($RPP_Font_Style, 'Delius Unicase' ); ?>>Delius Unicase</option>
								<option value="Della Respira"  <?php selected($RPP_Font_Style, 'Della Respira' ); ?>>Della Respira</option>
								<option value="Devonshire"  <?php selected($RPP_Font_Style, 'Devonshire' ); ?>>Devonshire</option>
								<option value="Didact Gothic"  <?php selected($RPP_Font_Style, 'Didact Gothic' ); ?>>Didact Gothic</option>
								<option value="Diplomata"  <?php selected($RPP_Font_Style, 'Diplomata' ); ?>>Diplomata</option>
								<option value="Diplomata SC"  <?php selected($RPP_Font_Style, 'Diplomata SC' ); ?>>Diplomata SC</option>
								<option value="Doppio One"  <?php selected($RPP_Font_Style, 'Doppio One' ); ?>>Doppio One</option>
								<option value="Dorsa"  <?php selected($RPP_Font_Style, 'Dorsa' ); ?>>Dorsa</option>
								<option value="Dosis"  <?php selected($RPP_Font_Style, 'Dosis' ); ?>>Dosis</option>
								<option value="Dr Sugiyama"  <?php selected($RPP_Font_Style, 'Dr Sugiyama' ); ?>>Dr Sugiyama</option>
								<option value="Droid Sans"  <?php selected($RPP_Font_Style, 'Droid Sans' ); ?>>Droid Sans</option>
								<option value="Droid Sans Mono"  <?php selected($RPP_Font_Style, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option>
								<option value="Droid Serif" <?php selected($RPP_Font_Style, 'Droid Serif' ); ?>>Droid Serif</option>
								<option value="Duru Sans" <?php selected($RPP_Font_Style, 'Duru Sans' ); ?>>Duru Sans</option>
								<option value="Dynalight" <?php selected($RPP_Font_Style, 'Dynalight' ); ?>>Dynalight</option>
								<option value="EB Garamond" <?php selected($RPP_Font_Style, 'EB Garamond' ); ?>>EB Garamond</option>
								<option value="Eater" <?php selected($RPP_Font_Style, 'Eater' ); ?>>Eater</option>
								<option value="Economica" <?php selected($RPP_Font_Style, 'Economica' ); ?>>Economica</option>
								<option value="Electrolize" <?php selected($RPP_Font_Style, 'Electrolize' ); ?>>Electrolize</option>
								<option value="Emblema One" <?php selected($RPP_Font_Style, 'Emblema One' ); ?>>Emblema One</option>
								<option value="Emilys Candy" <?php selected($RPP_Font_Style, 'Emilys Candy' ); ?>>Emilys Candy</option>
								<option value="Engagement" <?php selected($RPP_Font_Style, 'Engagement' ); ?>>Engagement</option>
								<option value="Enriqueta" <?php selected($RPP_Font_Style, 'Enriqueta' ); ?>>Enriqueta</option>
								<option value="Erica One" <?php selected($RPP_Font_Style, 'Erica One' ); ?>>Erica One</option>
								<option value="Esteban" <?php selected($RPP_Font_Style, 'Esteban' ); ?>>Esteban</option>
								<option value="Euphoria Script">Euphoria Script</option>
								<option value="Ewert" <?php selected($RPP_Font_Style, 'Ewert' ); ?>>Ewert</option>
								<option value="Exo" <?php selected($RPP_Font_Style, 'Exo' ); ?>>Exo</option>
								<option value="Expletus Sans" <?php selected($RPP_Font_Style, 'Expletus Sans' ); ?>>Expletus Sans</option>
								<option value="Fanwood Text" <?php selected($RPP_Font_Style, 'Fanwood Text' ); ?>>Fanwood Text</option>
								<option value="Fascinate" <?php selected($RPP_Font_Style, 'Fascinate' ); ?>>Fascinate</option>
								<option value="Fascinate Inline" <?php selected($RPP_Font_Style, 'Fascinate Inline' ); ?>>Fascinate Inline</option>
								<option value="Federant" <?php selected($RPP_Font_Style, 'Federant' ); ?>>Federant</option>
								<option value="Federo" <?php selected($RPP_Font_Style, 'Federo' ); ?>>Federo</option>
								<option value="Felipa" <?php selected($RPP_Font_Style, 'Felipa' ); ?>>Felipa</option>
								<option value="Fjord One" <?php selected($RPP_Font_Style, 'Fjord One' ); ?>>Fjord One</option>
								<option value="Flamenco" <?php selected($RPP_Font_Style, 'Flamenco' ); ?>>Flamenco</option>
								<option value="Flavors" <?php selected($RPP_Font_Style, 'Flavors' ); ?>>Flavors</option>
								<option value="Fondamento" <?php selected($RPP_Font_Style, 'Fondamento' ); ?>>Fondamento</option>
								<option value="Fontdiner Swanky" <?php selected($RPP_Font_Style, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option>
								<option value="Forum" <?php selected($RPP_Font_Style, 'Forum' ); ?>>Forum</option>
								<option value="Francois One" <?php selected($RPP_Font_Style, 'Francois One' ); ?>>Francois One</option>
								<option value="Fredericka the Great" <?php selected($RPP_Font_Style, 'Fredericka the Great' ); ?>>Fredericka the Great</option>
								<option value="Fredoka One" <?php selected($RPP_Font_Style, 'Fredoka One' ); ?>>Fredoka One</option>
								<option value="Freehand" <?php selected($RPP_Font_Style, 'Freehand' ); ?>>Freehand</option>
								<option value="Fresca" <?php selected($RPP_Font_Style, 'Fresca' ); ?>>Fresca</option>
								<option value="Frijole" <?php selected($RPP_Font_Style, 'Frijole' ); ?>>Frijole</option>
								<option value="Fugaz One" <?php selected($RPP_Font_Style, 'Fugaz One' ); ?>>Fugaz One</option>
								<option value="GFS Didot" <?php selected($RPP_Font_Style, 'GFS Didot' ); ?>>GFS Didot</option>
								<option value="GFS Neohellenic" <?php selected($RPP_Font_Style, 'GFS Neohellenic' ); ?>>GFS Neohellenic</option>
								<option value="Galdeano" <?php selected($RPP_Font_Style, 'Galdeano' ); ?>>Galdeano</option>
								<option value="Gentium Basic" <?php selected($RPP_Font_Style, 'Gentium Basic' ); ?>>Gentium Basic</option>
								<option value="Gentium Book Basic" <?php selected($RPP_Font_Style, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option>
								<option value="Geo" <?php selected($RPP_Font_Style, 'Geo' ); ?>>Geo</option>
								<option value="Geostar" <?php selected($RPP_Font_Style, 'Geostar' ); ?>>Geostar</option>
								<option value="Geostar Fill" <?php selected($RPP_Font_Style, 'Geostar Fill' ); ?>>Geostar Fill</option>
								<option value="Germania One" <?php selected($RPP_Font_Style, 'Germania One' ); ?>>Germania One</option>
								<option value="Give You Glory" <?php selected($RPP_Font_Style, 'Give You Glory' ); ?>>Give You Glory</option>
								<option value="Glass Antiqua" <?php selected($RPP_Font_Style, 'Glass Antiqua' ); ?>>Glass Antiqua</option>
								<option value="Glegoo" <?php selected($RPP_Font_Style, 'Glegoo' ); ?>>Glegoo</option>
								<option value="Gloria Hallelujah" <?php selected($RPP_Font_Style, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option>
								<option value="Goblin One" <?php selected($RPP_Font_Style, 'Goblin One' ); ?>>Goblin One</option>
								<option value="Gochi Hand" <?php selected($RPP_Font_Style, 'Gochi Hand' ); ?>>Gochi Hand</option>
								<option value="Gorditas" <?php selected($RPP_Font_Style, 'Gorditas' ); ?>>Gorditas</option>
								<option value="Goudy Bookletter 1911" <?php selected($RPP_Font_Style, 'Goudy Bookletter 191' ); ?>>Goudy Bookletter 1911</option>
								<option value="Graduate" <?php selected($RPP_Font_Style, 'Graduate' ); ?>>Graduate</option>
								<option value="Gravitas One" <?php selected($RPP_Font_Style, 'Gravitas One' ); ?>>Gravitas One</option>
								<option value="Great Vibes" <?php selected($RPP_Font_Style, 'Great Vibes' ); ?>>Great Vibes</option>
								<option value="Gruppo" <?php selected($RPP_Font_Style, 'Gruppo' ); ?>>Gruppo</option>
								<option value="Gudea" <?php selected($RPP_Font_Style, 'Gudea' ); ?>>Gudea</option>
								<option value="Habibi" <?php selected($RPP_Font_Style, 'Habibi' ); ?>>Habibi</option>
								<option value="Hammersmith One" <?php selected($RPP_Font_Style, 'Hammersmith One' ); ?>>Hammersmith One</option>
								<option value="Handlee" <?php selected($RPP_Font_Style, 'Handlee' ); ?>>Handlee</option>
								<option value="Hanuman" <?php selected($RPP_Font_Style, 'Hanuman' ); ?>>Hanuman</option>
								<option value="Happy Monkey" <?php selected($RPP_Font_Style, 'Happy Monkey' ); ?>>Happy Monkey</option>
								<option value="Henny Penny" <?php selected($RPP_Font_Style, 'Henny Penny' ); ?>>Henny Penny</option>
								<option value="Herr Von Muellerhoff" <?php selected($RPP_Font_Style, 'Herr Von Muellerhoff' ); ?>>Herr Von Muellerhoff</option>
								<option value="Holtwood One SC" <?php selected($RPP_Font_Style, 'Holtwood One SC' ); ?>>Holtwood One SC</option>
								<option value="Homemade Apple" <?php selected($RPP_Font_Style, 'Homemade Apple' ); ?>>Homemade Apple</option>
								<option value="Homenaje" <?php selected($RPP_Font_Style, 'Homenaje' ); ?>>Homenaje</option>
								<option value="IM Fell DW Pica" <?php selected($RPP_Font_Style, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option>
								<option value="IM Fell DW Pica SC" <?php selected($RPP_Font_Style, 'IM Fell DW Pica SC' ); ?>>IM Fell DW Pica SC</option>
								<option value="IM Fell Double Pica" <?php selected($RPP_Font_Style, 'IM Fell Double Pica' ); ?>>IM Fell Double Pica</option>
								<option value="IM Fell Double Pica SC" <?php selected($RPP_Font_Style, 'IM Fell Double Pica SC' ); ?>>IM Fell Double Pica SC</option>
								<option value="IM Fell English" <?php selected($RPP_Font_Style, 'IM Fell English' ); ?>>IM Fell English</option>
								<option value="IM Fell English SC" <?php selected($RPP_Font_Style, 'IM Fell English SC' ); ?>>IM Fell English SC</option>
								<option value="IM Fell French Canon" <?php selected($RPP_Font_Style, 'IM Fell French Canon' ); ?>>IM Fell French Canon</option>
								<option value="IM Fell French Canon SC" <?php selected($RPP_Font_Style, 'IM Fell French Canon SC' ); ?>>IM Fell French Canon SC</option>
								<option value="IM Fell Great Primer" <?php selected($RPP_Font_Style, 'IM Fell Great Primer' ); ?>>IM Fell Great Primer</option>
								<option value="IM Fell Great Primer SC" <?php selected($RPP_Font_Style, 'IM Fell Great Primer SC' ); ?>>IM Fell Great Primer SC</option>
								<option value="Iceberg" <?php selected($RPP_Font_Style, 'Iceberg' ); ?>>Iceberg</option>
								<option value="Iceland" <?php selected($RPP_Font_Style, 'Iceland' ); ?>>Iceland</option>
								<option value="Imprima" <?php selected($RPP_Font_Style, 'Imprima' ); ?>>Imprima</option>
								<option value="Inconsolata" <?php selected($RPP_Font_Style, 'Inconsolata' ); ?>>Inconsolata</option>
								<option value="Inder" <?php selected($RPP_Font_Style, 'Inder' ); ?>>Inder</option>
								<option value="Indie Flower" <?php selected($RPP_Font_Style, 'Indie Flower' ); ?>>Indie Flower</option>
								<option value="Inika" <?php selected($RPP_Font_Style, 'Inika' ); ?>>Inika</option>
								<option value="Irish Grover" <?php selected($RPP_Font_Style, 'Irish Grover' ); ?>>Irish Grover</option>
								<option value="Istok Web" <?php selected($RPP_Font_Style, 'Istok Web' ); ?>>Istok Web</option>
								<option value="Italiana" <?php selected($RPP_Font_Style, 'Italiana' ); ?>>Italiana</option>
								<option value="Italianno" <?php selected($RPP_Font_Style, 'Italianno' ); ?>>Italianno</option>
								<option value="Jim Nightshade" <?php selected($RPP_Font_Style, 'Jim Nightshade' ); ?>>Jim Nightshade</option>
								<option value="Jockey One" <?php selected($RPP_Font_Style, 'Jockey One' ); ?>>Jockey One</option>
								<option value="Jolly Lodger" <?php selected($RPP_Font_Style, 'Jolly Lodger' ); ?>>Jolly Lodger</option>
								<option value="Josefin Sans" <?php selected($RPP_Font_Style, 'Josefin Sans' ); ?>>Josefin Sans</option>
								<option value="Josefin Slab" <?php selected($RPP_Font_Style, 'Josefin Slab' ); ?>>Josefin Slab</option>
								<option value="Judson" <?php selected($RPP_Font_Style, 'Judson' ); ?>>Judson</option>
								<option value="Julee" <?php selected($RPP_Font_Style, 'Julee' ); ?>>Julee</option>
								<option value="Junge" <?php selected($RPP_Font_Style, 'Junge' ); ?>>Junge</option>
								<option value="Jura" <?php selected($RPP_Font_Style, 'Jura' ); ?>>Jura</option>
								<option value="Just Another Hand" <?php selected($RPP_Font_Style, 'Just Another Hand' ); ?>>Just Another Hand</option>
								<option value="Just Me Again Down Here" <?php selected($RPP_Font_Style, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option>
								<option value="Kameron" <?php selected($RPP_Font_Style, 'Kameron' ); ?>>Kameron</option>
								<option value="Karla" <?php selected($RPP_Font_Style, 'Karla' ); ?>>Karla</option>
								<option value="Kaushan Script" <?php selected($RPP_Font_Style, 'Kaushan Script' ); ?>>Kaushan Script</option>
								<option value="Kelly Slab" <?php selected($RPP_Font_Style, 'Kelly Slab' ); ?>>Kelly Slab</option>
								<option value="Kenia" <?php selected($RPP_Font_Style, 'Kenia' ); ?>>Kenia</option>
								<option value="Khmer" <?php selected($RPP_Font_Style, 'Khmer' ); ?>>Khmer</option>
								<option value="Knewave" <?php selected($RPP_Font_Style, 'Knewave' ); ?>>Knewave</option>
								<option value="Kotta One" <?php selected($RPP_Font_Style, 'Kotta One' ); ?>>Kotta One</option>
								<option value="Koulen" <?php selected($RPP_Font_Style, 'Koulen' ); ?>>Koulen</option>
								<option value="Kranky" <?php selected($RPP_Font_Style, 'Kranky' ); ?>>Kranky</option>
								<option value="Kreon" <?php selected($RPP_Font_Style, 'Kreon' ); ?>>Kreon</option>
								<option value="Kristi" <?php selected($RPP_Font_Style, 'Kristi' ); ?>>Kristi</option>
								<option value="Krona One" <?php selected($RPP_Font_Style, 'Krona One' ); ?>>Krona One</option>
								<option value="La Belle Aurore" <?php selected($RPP_Font_Style, 'La Belle Aurore' ); ?>>La Belle Aurore</option>
								<option value="Lancelot" <?php selected($RPP_Font_Style, 'Lancelot' ); ?>>Lancelot</option>
								<option value="Lato" <?php selected($RPP_Font_Style, 'Lato' ); ?>>Lato</option>
								<option value="League Script" <?php selected($RPP_Font_Style, 'League Script' ); ?>>League Script</option>
								<option value="Leckerli One" <?php selected($RPP_Font_Style, 'Leckerli One' ); ?>>Leckerli One</option>
								<option value="Ledger" <?php selected($RPP_Font_Style, 'Ledger' ); ?>>Ledger</option>
								<option value="Lekton" <?php selected($RPP_Font_Style, 'Lekton' ); ?>>Lekton</option>
								<option value="Lemon" <?php selected($RPP_Font_Style, 'Lemon' ); ?>>Lemon</option>
								<option value="Lilita One" <?php selected($RPP_Font_Style, 'Lilita One' ); ?>>Lilita One</option>
								<option value="Limelight" <?php selected($RPP_Font_Style, 'Limelight' ); ?>>Limelight</option>
								<option value="Linden Hill" <?php selected($RPP_Font_Style, 'Linden Hill' ); ?>>Linden Hill</option>
								<option value="Lobster" <?php selected($RPP_Font_Style, 'Lobster' ); ?>>Lobster</option>
								<option value="Lobster Two" <?php selected($RPP_Font_Style, 'Lobster Two' ); ?>>Lobster Two</option>
								<option value="Londrina Outline" <?php selected($RPP_Font_Style, 'Londrina Outline' ); ?>>Londrina Outline</option>
								<option value="Londrina Shadow" <?php selected($RPP_Font_Style, 'Londrina Shadow' ); ?>>Londrina Shadow</option>
								<option value="Londrina Sketch" <?php selected($RPP_Font_Style, 'Londrina Sketch' ); ?>>Londrina Sketch</option>
								<option value="Londrina Solid" <?php selected($RPP_Font_Style, 'Londrina Solid' ); ?>>Londrina Solid</option>
								<option value="Lora" <?php selected($RPP_Font_Style, 'Lora' ); ?>>Lora</option>
								<option value="Love Ya Like A Sister" <?php selected($RPP_Font_Style, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option>
								<option value="Loved by the King" <?php selected($RPP_Font_Style, 'Loved by the King' ); ?>>Loved by the King</option>
								<option value="Lovers Quarrel" <?php selected($RPP_Font_Style, 'Lovers Quarrel' ); ?>>Lovers Quarrel</option>
								<option value="Luckiest Guy" <?php selected($RPP_Font_Style, 'Luckiest Guy' ); ?>>Luckiest Guy</option>
								<option value="Lusitana" <?php selected($RPP_Font_Style, 'Lusitana' ); ?>>Lusitana</option>
								<option value="Lustria" <?php selected($RPP_Font_Style, 'Lustria' ); ?>>Lustria</option>
								<option value="Macondo" <?php selected($RPP_Font_Style, 'Macondo' ); ?>>Macondo</option>
								<option value="Macondo Swash Caps" <?php selected($RPP_Font_Style, 'Macondo Swash Caps' ); ?>>Macondo Swash Caps</option>
								<option value="Magra" <?php selected($RPP_Font_Style, 'Magra' ); ?>>Magra</option>
								<option value="Maiden Orange" <?php selected($RPP_Font_Style, 'Maiden Orange' ); ?>>Maiden Orange</option>
								<option value="Mako" <?php selected($RPP_Font_Style, 'Mako' ); ?>>Mako</option>
								<option value="Marck Script" <?php selected($RPP_Font_Style, 'Marck Script' ); ?>>Marck Script</option>
								<option value="Marko One" <?php selected($RPP_Font_Style, 'Marko One' ); ?>>Marko One</option>
								<option value="Marmelad" <?php selected($RPP_Font_Style, 'Marmelad' ); ?>>Marmelad</option>
								<option value="Marvel" <?php selected($RPP_Font_Style, 'Marvel' ); ?>>Marvel</option>
								<option value="Mate" <?php selected($RPP_Font_Style, 'Mate' ); ?>>Mate</option>
								<option value="Mate SC" <?php selected($RPP_Font_Style, 'Mate SC' ); ?>>Mate SC</option>
								<option value="Maven Pro" <?php selected($RPP_Font_Style, 'Maven Pro' ); ?>>Maven Pro</option>
								<option value="Meddon" <?php selected($RPP_Font_Style, 'Meddon' ); ?>>Meddon</option>
								<option value="MedievalSharp" <?php selected($RPP_Font_Style, 'MedievalSharp' ); ?>>MedievalSharp</option>
								<option value="Medula One" <?php selected($RPP_Font_Style, 'Medula One' ); ?>>Medula One</option>
								<option value="Megrim" <?php selected($RPP_Font_Style, 'Megrim' ); ?>>Megrim</option>
								<option value="Merienda One" <?php selected($RPP_Font_Style, 'Merienda One' ); ?>>Merienda One</option>
								<option value="Merriweather" <?php selected($RPP_Font_Style, 'Merriweather' ); ?>>Merriweather</option>
								<option value="Metal" <?php selected($RPP_Font_Style, 'Metal' ); ?>>Metal</option>
								<option value="Metamorphous"<?php selected($RPP_Font_Style, 'Metamorphous' ); ?>>Metamorphous</option>
								<option value="Metrophobic" <?php selected($RPP_Font_Style, 'Metrophobic' ); ?>>Metrophobic</option>
								<option value="Michroma" <?php selected($RPP_Font_Style, 'Michroma' ); ?>>Michroma</option>
								<option value="Miltonian" <?php selected($RPP_Font_Style, 'Miltonian' ); ?>>Miltonian</option>
								<option value="Miltonian Tattoo" <?php selected($RPP_Font_Style, 'Miltonian Tattoo' ); ?>>Miltonian Tattoo</option>
								<option value="Miniver" <?php selected($RPP_Font_Style, 'Miniver' ); ?>>Miniver</option>
								<option value="Miss Fajardose" <?php selected($RPP_Font_Style, 'Miss Fajardose' ); ?>>Miss Fajardose</option>
								<option value="Modern Antiqua" <?php selected($RPP_Font_Style, 'Modern Antiqua' ); ?>>Modern Antiqua</option>
								<option value="Molengo" <?php selected($RPP_Font_Style, 'Molengo' ); ?>>Molengo</option>
								<option value="Monofett" <?php selected($RPP_Font_Style, 'Monofett' ); ?>>Monofett</option>
								<option value="Monoton" <?php selected($RPP_Font_Style, 'Monoton' ); ?>>Monoton</option>
								<option value="Monsieur La Doulaise" <?php selected($RPP_Font_Style, 'Monsieur La Doulaise' ); ?>>Monsieur La Doulaise</option>
								<option value="Montaga" <?php selected($RPP_Font_Style, 'Montaga' ); ?>>Montaga</option>
								<option value="Montez" <?php selected($RPP_Font_Style, 'Montez' ); ?>>Montez</option>
								<option value="Montserrat" <?php selected($RPP_Font_Style, 'Montserrat' ); ?>>Montserrat</option>
								<option value="Moul" <?php selected($RPP_Font_Style, 'Moul' ); ?>>Moul</option>
								<option value="Moulpali" <?php selected($RPP_Font_Style, 'Moulpali' ); ?>>Moulpali</option>
								<option value="Mountains of Christmas" <?php selected($RPP_Font_Style, 'Mountains of Christmas' ); ?>>Mountains of Christmas</option>
								<option value="Mr Bedfort" <?php selected($RPP_Font_Style, 'Mr Bedfort' ); ?>>Mr Bedfort</option>
								<option value="Mr Dafoe" <?php selected($RPP_Font_Style, 'Mr Dafoe' ); ?>>Mr Dafoe</option>
								<option value="Mr De Haviland" <?php selected($RPP_Font_Style, 'Mr De Haviland' ); ?>>Mr De Haviland</option>
								<option value="Mrs Saint Delafield" <?php selected($RPP_Font_Style, 'Mrs Saint Delafield' ); ?>>Mrs Saint Delafield</option>
								<option value="Mrs Sheppards" <?php selected($RPP_Font_Style, 'Mrs Sheppards' ); ?>>Mrs Sheppards</option>
								<option value="Muli" <?php selected($RPP_Font_Style, 'Muli' ); ?>>Muli</option>
								<option value="Mystery Quest" <?php selected($RPP_Font_Style, 'Mystery Quest' ); ?>>Mystery Quest</option>
								<option value="Neucha" <?php selected($RPP_Font_Style, 'Neucha' ); ?>>Neucha</option>
								<option value="Neuton" <?php selected($RPP_Font_Style, 'Neuton' ); ?>>Neuton</option>
								<option value="News Cycle" <?php selected($RPP_Font_Style, 'News Cycle' ); ?>>News Cycle</option>
								<option value="Niconne" <?php selected($RPP_Font_Style, 'Niconne' ); ?>>Niconne</option>
								<option value="Nixie One" <?php selected($RPP_Font_Style, 'Nixie One' ); ?>>Nixie One</option>
								<option value="Nobile" <?php selected($RPP_Font_Style, 'Nobile' ); ?>>Nobile</option>
								<option value="Nokora" <?php selected($RPP_Font_Style, 'Nokora' ); ?>>Nokora</option>
								<option value="Norican" <?php selected($RPP_Font_Style, 'Norican' ); ?>>Norican</option>
								<option value="Nosifer" <?php selected($RPP_Font_Style, 'Nosifer' ); ?>>Nosifer</option>
								<option value="Nothing You Could Do" <?php selected($RPP_Font_Style, 'Nothing You Could Do' ); ?>>Nothing You Could Do</option>
								<option value="Noticia Text" <?php selected($RPP_Font_Style, 'Noticia Text' ); ?>>Noticia Text</option>
								<option value="Nova Cut" <?php selected($RPP_Font_Style, 'Nova Cut' ); ?>>Nova Cut</option>
								<option value="Nova Flat" <?php selected($RPP_Font_Style, 'Nova Flat' ); ?>>Nova Flat</option>
								<option value="Nova Mono" <?php selected($RPP_Font_Style, 'Nova Mono' ); ?>>Nova Mono</option>
								<option value="Nova Oval" <?php selected($RPP_Font_Style, 'Nova Oval' ); ?>>Nova Oval</option>
								<option value="Nova Round" <?php selected($RPP_Font_Style, 'Nova Round' ); ?>>Nova Round</option>
								<option value="Nova Script" <?php selected($RPP_Font_Style, 'Nova Script' ); ?>>Nova Script</option>
								<option value="Nova Slim" <?php selected($RPP_Font_Style, 'Nova Slim' ); ?>>Nova Slim</option>
								<option value="Nova Square" <?php selected($RPP_Font_Style, 'Nova Square' ); ?>>Nova Square</option>
								<option value="Numans" <?php selected($RPP_Font_Style, 'Numans' ); ?>>Numans</option>

								<option value="Nunito" <?php selected($RPP_Font_Style, 'Nunito' ); ?>>Nunito</option>
								<option value="Odor Mean Chey" <?php selected($RPP_Font_Style, 'Odor Mean Chey' ); ?>>Odor Mean Chey</option>
								<option value="Old Standard TT" <?php selected($RPP_Font_Style, 'Old Standard TT' ); ?>>Old Standard TT</option>
								<option value="Oldenburg" <?php selected($RPP_Font_Style, 'Oldenburg' ); ?>>Oldenburg</option>
								<option value="Oleo Script" <?php selected($RPP_Font_Style, 'Oleo Script' ); ?>>Oleo Script</option>
								<option value="Open Sans" <?php selected($RPP_Font_Style, 'Open Sans' ); ?>>Open Sans</option>
								<option value="Open Sans Condensed" <?php selected($RPP_Font_Style, 'Open Sans Condensed' ); ?>>Open Sans Condensed</option>
								<option value="Orbitron" <?php selected($RPP_Font_Style, 'Orbitron' ); ?>>Orbitron</option>
								<option value="Original Surfer" <?php selected($RPP_Font_Style, 'Original Surfer' ); ?>>Original Surfer</option>
								<option value="Oswald" <?php selected($RPP_Font_Style, 'Oswald' ); ?>>Oswald</option>
								<option value="Over the Rainbow" <?php selected($RPP_Font_Style, 'Over the Rainbow' ); ?>>Over the Rainbow</option>
								<option value="Overlock" <?php selected($RPP_Font_Style, 'Overlock' ); ?>>Overlock</option>
								<option value="Overlock SC" <?php selected($RPP_Font_Style, 'Overlock SC' ); ?>>Overlock SC</option>
								<option value="Ovo" <?php selected($RPP_Font_Style, 'Ovo' ); ?>>Ovo</option>
								<option value="Oxygen" <?php selected($RPP_Font_Style, 'Oxygen' ); ?>>Oxygen</option>
								<option value="PT Mono" <?php selected($RPP_Font_Style, 'PT Mono' ); ?>>PT Mono</option>
								<option value="PT Sans" <?php selected($RPP_Font_Style, 'PT Sans' ); ?>>PT Sans</option>
								<option value="PT Sans Caption" <?php selected($RPP_Font_Style, 'PT Sans Caption' ); ?>>PT Sans Caption</option>
								<option value="PT Sans Narrow" <?php selected($RPP_Font_Style, 'PT Sans Narrow' ); ?>>PT Sans Narrow</option>
								<option value="PT Serif" <?php selected($RPP_Font_Style, 'PT Serif' ); ?>>PT Serif</option>
								<option value="PT Serif Caption" <?php selected($RPP_Font_Style, 'PT Serif Caption' ); ?>>PT Serif Caption</option>
								<option value="Pacifico" <?php selected($RPP_Font_Style, 'Pacifico' ); ?>>Pacifico</option>
								<option value="Parisienne" <?php selected($RPP_Font_Style, 'Parisienne' ); ?>>Parisienne</option>
								<option value="Passero One" <?php selected($RPP_Font_Style, 'Passero One' ); ?>>Passero One</option>
								<option value="Passion One" <?php selected($RPP_Font_Style, 'Passion One' ); ?>>Passion One</option>
								<option value="Patrick Hand" <?php selected($RPP_Font_Style, 'Patrick Hand' ); ?>>Patrick Hand</option>
								<option value="Patua One" <?php selected($RPP_Font_Style, 'Patua One' ); ?>>Patua One</option>
								<option value="Paytone One" <?php selected($RPP_Font_Style, 'Paytone One' ); ?>>Paytone One</option>
								<option value="Permanent Marker" <?php selected($RPP_Font_Style, 'Permanent Marker' ); ?>>Permanent Marker</option>
								<option value="Petrona" <?php selected($RPP_Font_Style, 'Petrona' ); ?>>Petrona</option>
								<option value="Philosopher" <?php selected($RPP_Font_Style, 'Philosopher' ); ?>>Philosopher</option>
								<option value="Piedra" <?php selected($RPP_Font_Style, 'Piedra' ); ?>>Piedra</option>
								<option value="Pinyon Script" <?php selected($RPP_Font_Style, 'Pinyon Script' ); ?>>Pinyon Script</option>
								<option value="Plaster" <?php selected($RPP_Font_Style, 'Plaster' ); ?>>Plaster</option>
								<option value="Play" <?php selected($RPP_Font_Style, 'Play' ); ?>>Play</option>
								<option value="Playball" <?php selected($RPP_Font_Style, 'Playball' ); ?>>Playball</option>
								<option value="Playfair Display" <?php selected($RPP_Font_Style, 'Playfair Display' ); ?>>Playfair Display</option>
								<option value="Podkova" <?php selected($RPP_Font_Style, 'Podkova' ); ?>>Podkova</option>
								<option value="Poiret One" <?php selected($RPP_Font_Style, 'Poiret One' ); ?>>Poiret One</option>
								<option value="Poller One" <?php selected($RPP_Font_Style, 'Poller One' ); ?>>Poller One</option>
								<option value="Poly" <?php selected($RPP_Font_Style, 'Poly' ); ?>>Poly</option>
								<option value="Pompiere" <?php selected($RPP_Font_Style, 'Pompiere' ); ?>>Pompiere</option>
								<option value="Pontano Sans" <?php selected($RPP_Font_Style, 'Pontano Sans' ); ?>>Pontano Sans</option>
								<option value="Port Lligat Sans" <?php selected($RPP_Font_Style, 'Port Lligat Sans' ); ?>>Port Lligat Sans</option>
								<option value="Port Lligat Slab" <?php selected($RPP_Font_Style, 'Port Lligat Slab' ); ?>>Port Lligat Slab</option>
								<option value="Prata" <?php selected($RPP_Font_Style, 'Prata' ); ?>>Prata</option>
								<option value="Preahvihear" <?php selected($RPP_Font_Style, 'Preahvihear' ); ?>>Preahvihear</option>
								<option value="Press Start 2P" <?php selected($RPP_Font_Style, 'Press Start 2P' ); ?>>Press Start 2P</option>
								<option value="Princess Sofia" <?php selected($RPP_Font_Style, 'Princess Sofia' ); ?>>Princess Sofia</option>
								<option value="Prociono" <?php selected($RPP_Font_Style, 'Prociono' ); ?>>Prociono</option>
								<option value="Prosto One" <?php selected($RPP_Font_Style, 'Prosto One' ); ?>>Prosto One</option>
								<option value="Puritan" <?php selected($RPP_Font_Style, 'Puritan' ); ?>>Puritan</option>
								<option value="Quantico" <?php selected($RPP_Font_Style, 'Quantico' ); ?>>Quantico</option>
								<option value="Quattrocento" <?php selected($RPP_Font_Style, 'Quattrocento' ); ?>>Quattrocento</option>
								<option value="Quattrocento Sans" <?php selected($RPP_Font_Style, 'Quattrocento Sans' ); ?>>Quattrocento Sans</option>
								<option value="Questrial" <?php selected($RPP_Font_Style, 'Questrial' ); ?>>Questrial</option>
								<option value="Quicksand" <?php selected($RPP_Font_Style, 'Quicksand' ); ?>>Quicksand</option>
								<option value="Qwigley" <?php selected($RPP_Font_Style, 'Qwigley' ); ?>>Qwigley</option>
								<option value="Radley" <?php selected($RPP_Font_Style, 'Radley' ); ?>>Radley</option>
								<option value="Raleway" <?php selected($RPP_Font_Style, 'Raleway' ); ?>>Raleway</option>
								<option value="Rammetto One" <?php selected($RPP_Font_Style, 'Rammetto One' ); ?>>Rammetto One</option>
								<option value="Rancho" <?php selected($RPP_Font_Style, 'Rancho' ); ?>>Rancho</option>
								<option value="Rationale" <?php selected($RPP_Font_Style, 'Rationale' ); ?>>Rationale</option>
								<option value="Redressed" <?php selected($RPP_Font_Style, 'Redressed' ); ?>>Redressed</option>
								<option value="Reenie Beanie" <?php selected($RPP_Font_Style, 'Reenie Beanie' ); ?>>Reenie Beanie</option>
								<option value="Revalia" <?php selected($RPP_Font_Style, 'Revalia' ); ?>>Revalia</option>
								<option value="Ribeye" <?php selected($RPP_Font_Style, 'Ribeye' ); ?>>Ribeye</option>
								<option value="Ribeye Marrow" <?php selected($RPP_Font_Style, 'Ribeye Marrow' ); ?>>Ribeye Marrow</option>
								<option value="Righteous" <?php selected($RPP_Font_Style, 'Righteous' ); ?>>Righteous</option>
								<option value="Rochester" <?php selected($RPP_Font_Style, 'Rochester' ); ?>>Rochester</option>
								<option value="Rock Salt" <?php selected($RPP_Font_Style, 'Rock Salt' ); ?>>Rock Salt</option>
								<option value="Rokkitt" <?php selected($RPP_Font_Style, 'Rokkitt' ); ?>>Rokkitt</option>
								<option value="Ropa Sans" <?php selected($RPP_Font_Style, 'Ropa Sans' ); ?>>Ropa Sans</option>
								<option value="Rosario" <?php selected($RPP_Font_Style, 'Rosario' ); ?>>Rosario</option>
								<option value="Rosarivo" <?php selected($RPP_Font_Style, 'Rosarivo' ); ?>>Rosarivo</option>
								<option value="Rouge Script" <?php selected($RPP_Font_Style, 'Rouge Script' ); ?>>Rouge Script</option>
								<option value="Ruda" <?php selected($RPP_Font_Style, 'Ruda' ); ?>>Ruda</option>
								<option value="Ruge Boogie" <?php selected($RPP_Font_Style, 'Ruge Boogie' ); ?>>Ruge Boogie</option>
								<option value="Ruluko" <?php selected($RPP_Font_Style, 'Ruluko' ); ?>>Ruluko</option>
								<option value="Ruslan Display" <?php selected($RPP_Font_Style, 'Ruslan Display' ); ?>>Ruslan Display</option>
								<option value="Russo One" <?php selected($RPP_Font_Style, 'Russo One' ); ?>>Russo One</option>
								<option value="Ruthie" <?php selected($RPP_Font_Style, 'Ruthie' ); ?>>Ruthie</option>
								<option value="Sail" <?php selected($RPP_Font_Style, 'Sail' ); ?>>Sail</option>
								<option value="Salsa" <?php selected($RPP_Font_Style, 'Salsa' ); ?>>Salsa</option>
								<option value="Sancreek" <?php selected($RPP_Font_Style, 'Sancreek' ); ?>>Sancreek</option>
								<option value="Sansita One" <?php selected($RPP_Font_Style, 'Sansita One' ); ?>>Sansita One</option>
								<option value="Sarina" <?php selected($RPP_Font_Style, 'Sarina' ); ?>>Sarina</option>
								<option value="Satisfy" <?php selected($RPP_Font_Style, 'Satisfy' ); ?>>Satisfy</option>
								<option value="Schoolbell" <?php selected($RPP_Font_Style, 'Schoolbell' ); ?>>Schoolbell</option>
								<option value="Seaweed Script" <?php selected($RPP_Font_Style, 'Seaweed Script' ); ?>>Seaweed Script</option>
								<option value="Sevillana" <?php selected($RPP_Font_Style, 'Sevillana' ); ?>>Sevillana</option>
								<option value="Shadows Into Light" <?php selected($RPP_Font_Style, 'hadows Into Light' ); ?>>Shadows Into Light</option>
								<option value="Shadows Into Light Two" <?php selected($RPP_Font_Style, 'Shadows Into Light Two' ); ?>>Shadows Into Light Two</option>
								<option value="Shanti" <?php selected($RPP_Font_Style, 'Shanti' ); ?>>Shanti</option>
								<option value="Share">Share</option>
								<option value="Shojumaru" <?php selected($RPP_Font_Style, 'Shojumaru' ); ?>>Shojumaru</option>
								<option value="Short Stack" <?php selected($RPP_Font_Style, 'Short Stack' ); ?>>Short Stack</option>
								<option value="Siemreap"<?php selected($RPP_Font_Style, 'Siemreap' ); ?>>Siemreap</option>
								<option value="Sigmar One" <?php selected($RPP_Font_Style, 'Sigmar One' ); ?>>Sigmar One</option>
								<option value="Signika"<?php selected($RPP_Font_Style, 'Signika' ); ?>>Signika</option>
								<option value="Signika Negative" <?php selected($RPP_Font_Style, 'Signika Negative' ); ?>>Signika Negative</option>
								<option value="Simonetta" <?php selected($RPP_Font_Style, 'Simonetta' ); ?>>Simonetta</option>
								<option value="Sirin Stencil" <?php selected($RPP_Font_Style, 'Sirin Stencil' ); ?>>Sirin Stencil</option>
								<option value="Six Caps" <?php selected($RPP_Font_Style, 'Six Caps' ); ?>>Six Caps</option>
								<option value="Slackey" <?php selected($RPP_Font_Style, 'Slackey' ); ?>>Slackey</option>
								<option value="Smokum" <?php selected($RPP_Font_Style, 'Smokum' ); ?>>Smokum</option>
								<option value="Smythe" <?php selected($RPP_Font_Style, 'Smythe' ); ?>>Smythe</option>
								<option value="Sniglet" <?php selected($RPP_Font_Style, 'Sniglet' ); ?>>Sniglet</option>
								<option value="Snippet" <?php selected($RPP_Font_Style, 'Snippet' ); ?>>Snippet</option>
								<option value="Sofia" <?php selected($RPP_Font_Style, 'Sofia' ); ?>>Sofia</option>
								<option value="Sonsie One" <?php selected($RPP_Font_Style, 'Sonsie One' ); ?>>Sonsie One</option>
								<option value="Sorts Mill Goudy" <?php selected($RPP_Font_Style, 'Sorts Mill Goudy' ); ?>>Sorts Mill Goudy</option>
								<option value="Special Elite" <?php selected($RPP_Font_Style, 'Special Elite' ); ?>>Special Elite</option>
								<option value="Spicy Rice" <?php selected($RPP_Font_Style, 'Spicy Rice' ); ?>>Spicy Rice</option>
								<option value="Spinnaker" <?php selected($RPP_Font_Style, 'Spinnaker' ); ?>>Spinnaker</option>
								<option value="Spirax" <?php selected($RPP_Font_Style, 'Spirax' ); ?>>Spirax</option>
								<option value="Squada One" <?php selected($RPP_Font_Style, 'Squada One' ); ?>>Squada One</option>
								<option value="Stardos Stencil" <?php selected($RPP_Font_Style, 'Stardos Stencil' ); ?>>Stardos Stencil</option>
								<option value="Stint Ultra Condensed" <?php selected($RPP_Font_Style, 'Stint Ultra Condensed' ); ?>>Stint Ultra Condensed</option>
								<option value="Stint Ultra Expanded" <?php selected($RPP_Font_Style, 'Stint Ultra Expanded' ); ?>>Stint Ultra Expanded</option>
								<option value="Stoke" <?php selected($RPP_Font_Style, 'Stoke' ); ?>>Stoke</option>
								<option value="Sue Ellen Francisco" <?php selected($RPP_Font_Style, 'Sue Ellen Francisco' ); ?>>Sue Ellen Francisco</option>
								<option value="Sunshiney" <?php selected($RPP_Font_Style, 'Sunshiney' ); ?>>Sunshiney</option>
								<option value="Supermercado One" <?php selected($RPP_Font_Style, 'Supermercado One' ); ?>>Supermercado One</option>
								<option value="Suwannaphum" <?php selected($RPP_Font_Style, 'Suwannaphum' ); ?>>Suwannaphum</option>
								<option value="Swanky and Moo Moo" <?php selected($RPP_Font_Style, 'Swanky and Moo Moo' ); ?>>Swanky and Moo Moo</option>
								<option value="Syncopate" <?php selected($RPP_Font_Style, 'Syncopate' ); ?>>Syncopate</option>
								<option value="Tangerine" <?php selected($RPP_Font_Style, 'Tangerine' ); ?>>Tangerine</option>
								<option value="Taprom" <?php selected($RPP_Font_Style, 'Taprom' ); ?>>Taprom</option>
								<option value="Telex" <?php selected($RPP_Font_Style, 'Telex' ); ?>>Telex</option>
								<option value="Tenor Sans" <?php selected($RPP_Font_Style, 'Tenor Sans' ); ?>>Tenor Sans</option>
								<option value="The Girl Next Door" <?php selected($RPP_Font_Style, 'The Girl Next Door' ); ?>>The Girl Next Door</option>
								<option value="Tienne" <?php selected($RPP_Font_Style, 'Tienne' ); ?>>Tienne</option>
								<option value="Tinos" <?php selected($RPP_Font_Style, 'Tinos' ); ?>>Tinos</option>
								<option value="Titan One" <?php selected($RPP_Font_Style, 'Titan One' ); ?>>Titan One</option>
								<option value="Trade Winds" <?php selected($RPP_Font_Style, 'Trade Winds' ); ?> >Trade Winds</option>
								<option value="Trocchi" <?php selected($RPP_Font_Style, 'Trocchi' ); ?>>Trocchi</option>
								<option value="Trochut" <?php selected($RPP_Font_Style, 'Trochut' ); ?>>Trochut</option>
								<option value="Trykker" <?php selected($RPP_Font_Style, 'Trykker' ); ?>>Trykker</option>
								<option value="Tulpen One" <?php selected($RPP_Font_Style, 'Tulpen One' ); ?>>Tulpen One</option>
								<option value="Ubuntu" <?php selected($RPP_Font_Style, 'Ubuntu' ); ?>>Ubuntu</option>
								<option value="Ubuntu Condensed" <?php selected($RPP_Font_Style, 'Ubuntu Condensed' ); ?>>Ubuntu Condensed</option>
								<option value="Ubuntu Mono" <?php selected($RPP_Font_Style, 'Ubuntu Mono' ); ?>>Ubuntu Mono</option>
								<option value="Ultra" <?php selected($RPP_Font_Style, 'Ultra' ); ?>>Ultra</option>
								<option value="Uncial Antiqua" <?php selected($RPP_Font_Style, 'Uncial Antiqua' ); ?>>Uncial Antiqua</option>
								<option value="UnifrakturCook" <?php selected($RPP_Font_Style, 'UnifrakturCook' ); ?>>UnifrakturCook</option>
								<option value="UnifrakturMaguntia" <?php selected($RPP_Font_Style, 'UnifrakturMaguntia' ); ?>>UnifrakturMaguntia</option>
								<option value="Unkempt" <?php selected($RPP_Font_Style, 'Unkempt' ); ?>>Unkempt</option>
								<option value="Unlock" <?php selected($RPP_Font_Style, 'Unlock' ); ?>>Unlock</option>
								<option value="Unna" <?php selected($RPP_Font_Style, 'Unna' ); ?>>Unna</option>
								<option value="VT323" <?php selected($RPP_Font_Style, 'VT323' ); ?>>VT323</option>
								<option value="Varela" <?php selected($RPP_Font_Style, 'Varela' ); ?>>Varela</option>
								<option value="Varela Round" <?php selected($RPP_Font_Style, 'Varela Round' ); ?>>Varela Round</option>
								<option value="Vast Shadow" <?php selected($RPP_Font_Style, 'Vast Shadow' ); ?>>Vast Shadow</option>
								<option value="Vibur" <?php selected($RPP_Font_Style, 'Vibur' ); ?>>Vibur</option>
								<option value="Vidaloka" <?php selected($RPP_Font_Style, 'Vidaloka' ); ?>>Vidaloka</option>
								<option value="Viga" <?php selected($RPP_Font_Style, 'Viga' ); ?>>Viga</option>
								<option value="Voces" <?php selected($RPP_Font_Style, 'Voces' ); ?>>Voces</option>
								<option value="Volkhov" <?php selected($RPP_Font_Style, 'Volkhov' ); ?>>Volkhov</option>
								<option value="Vollkorn" <?php selected($RPP_Font_Style, 'Vollkorn' ); ?>>Vollkorn</option>
								<option value="Voltaire" <?php selected($RPP_Font_Style, 'Voltaire' ); ?>>Voltaire</option>
								<option value="Waiting for the Sunrise" <?php selected($RPP_Font_Style, 'Waiting for the Sunrise' ); ?>>Waiting for the Sunrise</option>
								<option value="Wallpoet" <?php selected($RPP_Font_Style, 'Wallpoet' ); ?>>Wallpoet</option>
								<option value="Walter Turncoat" <?php selected($RPP_Font_Style, 'Walter Turncoat' ); ?>>Walter Turncoat</option>
								<option value="Wellfleet" <?php selected($RPP_Font_Style, 'Wellfleet' ); ?>>Wellfleet</option>
								<option value="Wire One" <?php selected($RPP_Font_Style, 'Wire One' ); ?>>Wire One</option>
								<option value="Yanone Kaffeesatz" <?php selected($RPP_Font_Style, 'Yanone Kaffeesatz' ); ?>>Yanone Kaffeesatz</option>
								<option value="Yellowtail" <?php selected($RPP_Font_Style, 'Yellowtail' ); ?>>Yellowtail</option>
								<option value="Yeseva One" <?php selected($RPP_Font_Style, 'Yeseva One' ); ?>>Yeseva One</option>
								<option value="Yesteryear" <?php selected($RPP_Font_Style, 'Yesteryear' ); ?>>Yesteryear</option>
								<option value="Zeyada" <?php selected($RPP_Font_Style, 'Zeyada' ); ?>>Zeyada</option>
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
					<th scope="row" ><?php _e('Button Font Style','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<?php $RPP_Font_Style=""; ?>
				<tr class="" style="border-bottom:none;">
					<td>
						<select id="button_font_style" class="standard-dropdown" name="button_font_style"  >
							
							<optgroup label="Default Fonts">
								<option value="Arial" <?php selected($RPP_Font_Style, 'Arial' ); ?>>Arial</option>
								<option value="Arial Black" <?php selected($RPP_Font_Style, 'Arial Black' ); ?>>Arial Black</option>
								<option value="Courier New" <?php selected($RPP_Font_Style, 'Courier New' ); ?>>Courier New</option>
								<option value="Georgia" <?php selected($RPP_Font_Style, 'Georgia' ); ?>>Georgia</option>
								<option value="Grande" <?php selected($RPP_Font_Style, 'Grande' ); ?>>Grande</option>
								<option value="Helvetica Neue" <?php selected($RPP_Font_Style, 'Helvetica Neue' ); ?>>Helvetica Neue</option>
								<option value="Impact" <?php selected($RPP_Font_Style, 'Impact' ); ?>>Impact</option>
								<option value="Lucida" <?php selected($RPP_Font_Style, 'Lucida' ); ?>>Lucida</option>
								<option value="Lucida Grande" <?php selected($RPP_Font_Style, 'Lucida Grande' ); ?>>Lucida Grande</option>
								<option value="OpenSansBold" <?php selected($RPP_Font_Style, 'OpenSansBold' ); ?>>OpenSansBold</option>
								<option value="Palatino" <?php selected($RPP_Font_Style, 'Palatino' ); ?>>Palatino</option>
								<option value="Sans" <?php selected($RPP_Font_Style, 'Sans' ); ?>>Sans</option>
								<option value="Sans-Serif" <?php selected($RPP_Font_Style, 'Sans-Serif' ); ?>>Sans-Serif</option>
								<option value="Tahoma" <?php selected($RPP_Font_Style, 'Tahoma' ); ?>>Tahoma</option>
								<option value="Times New Roman"<?php selected($RPP_Font_Style, 'Times New Roman' ); ?>>Times New Roman</option>
								<option value="Trebuchet" <?php selected($RPP_Font_Style, 'Trebuchet' ); ?>>Trebuchet</option>
								<option value="Verdana" <?php selected($RPP_Font_Style, 'Verdana' ); ?>>Verdana</option>
							</optgroup>
							<optgroup label="Google Fonts">
								<option value="Abel"<?php selected($RPP_Font_Style, 'Abel' ); ?>>Abel</option>
								<option value="Abril Fatface" <?php selected($RPP_Font_Style, 'Abril Fatface' ); ?>>Abril Fatface</option>
								<option value="Aclonica" <?php selected($RPP_Font_Style, 'Aclonica' ); ?>>Aclonica</option>
								<option value="Acme" <?php selected($RPP_Font_Style, 'Acme' ); ?>>Acme</option>
								<option value="Actor" <?php selected($RPP_Font_Style, 'Actor' ); ?>>Actor</option>
								<option value="Adamina" <?php selected($RPP_Font_Style, 'Adamina' ); ?>>Adamina</option>
								<option value="Advent Pro" <?php selected($RPP_Font_Style, 'Advent Pro' ); ?>>Advent Pro</option>
								<option value="Aguafina Script" <?php selected($RPP_Font_Style, 'Aguafina Script' ); ?>>Aguafina Script</option>
								<option value="Aladin" <?php selected($RPP_Font_Style, 'Aladin' ); ?>>Aladin</option>
								<option value="Aldrich" <?php selected($RPP_Font_Style, 'Aldrich' ); ?>>Aldrich</option>
								<option value="Alegreya" <?php selected($RPP_Font_Style, 'Alegreya' ); ?>>Alegreya</option>
								<option value="Alegreya SC" <?php selected($RPP_Font_Style, 'Alegreya SC' ); ?>>Alegreya SC</option>
								<option value="Alex Brush" <?php selected($RPP_Font_Style, 'Alex Brush' ); ?>>Alex Brush</option>
								<option value="Alfa Slab One" <?php selected($RPP_Font_Style, 'Alfa Slab One' ); ?>>Alfa Slab One</option>
								<option value="Alice" <?php selected($RPP_Font_Style, 'Alice' ); ?>>Alice</option>
								<option value="Alike" <?php selected($RPP_Font_Style, 'Alike' ); ?>>Alike</option>
								<option value="Alike Angular" <?php selected($RPP_Font_Style, 'Alike Angular' ); ?>>Alike Angular</option>
								<option value="Allan" <?php selected($RPP_Font_Style, 'Allan' ); ?>>Allan</option>
								<option value="Allerta" <?php selected($RPP_Font_Style, 'Allerta' ); ?>>Allerta</option>
								<option value="Allerta Stencil"<?php selected($RPP_Font_Style, 'Allerta Stencil' ); ?>>Allerta Stencil</option>
								<option value="Allura" <?php selected($RPP_Font_Style, 'Allura' ); ?>>Allura</option>
								<option value="Almendra" <?php selected($RPP_Font_Style, 'Almendra' ); ?>>Almendra</option>
								<option value="Almendra SC"<?php selected($RPP_Font_Style, 'Almendra SC' ); ?>>Almendra SC</option>
								<option value="Amaranth" <?php selected($RPP_Font_Style, 'Amaranth' ); ?>>Amaranth</option> <option value="Amatic SC"<?php selected($RPP_Font_Style, 'Amatic SC' ); ?>>Amatic SC</option>
								<option value="Amethysta" <?php selected($RPP_Font_Style, 'Amethysta' ); ?>>Amethysta</option><option value="Andada"<?php selected($RPP_Font_Style, 'Andada' ); ?>>Andada</option>
								<option value="Andika" <?php selected($RPP_Font_Style, 'Andika' ); ?>>Andika</option>
								<option value="Angkor" <?php selected($RPP_Font_Style, 'Angkor' ); ?>>Angkor</option>
								<option value="Annie_Use_Your_Telescope" <?php selected($RPP_Font_Style, 'Annie Use Your Telescope' ); ?>>Annie Use Your Telescope</option>
								<option value="Anonymous Pro" <?php selected($RPP_Font_Style, 'Anonymous Pro' ); ?>>Anonymous Pro</option>
								<option value="Antic" <?php selected($RPP_Font_Style, 'Antic' ); ?>>Antic</option>
								<option value="Antic Didone" <?php selected($RPP_Font_Style, 'Antic Didone' ); ?>>Antic Didone</option>
								<option value="Antic Slab" <?php selected($RPP_Font_Style, 'Antic Slab' ); ?>>Antic Slab</option>
								<option value="Anton" <?php selected($RPP_Font_Style, 'Anton' ); ?>>Anton</option>
								<option value="Arapey" <?php selected($RPP_Font_Style, 'Arapey' ); ?>>Arapey</option>
								<option value="Arbutus" <?php selected($RPP_Font_Style, 'Arbutus' ); ?>>Arbutus</option>
								<option value="Architects Daughter" <?php selected($RPP_Font_Style, 'Architects Daughter' ); ?>>Architects Daughter</option>
								<option value="Arimo" <?php selected($RPP_Font_Style, 'Arimo' ); ?>>Arimo</option>
								<option value="Arizonia" <?php selected($RPP_Font_Style, 'Arizonia' ); ?>>Arizonia</option>
								<option value="Armata" <?php selected($RPP_Font_Style, 'Armata' ); ?>>Armata</option>
								<option value="Artifika" <?php selected($RPP_Font_Style, 'Artifika' ); ?>>Artifika</option>
								<option value="Arvo" <?php selected($RPP_Font_Style, 'Arvo' ); ?>>Arvo</option>
								<option value="Asap" <?php selected($RPP_Font_Style, 'Asap' ); ?>>Asap</option>
								<option value="Asset" <?php selected($RPP_Font_Style, 'Asset' ); ?>>Asset</option>
								<option value="Astloch" <?php selected($RPP_Font_Style, 'Astloch' ); ?>>Astloch</option>
								<option value="Asul" <?php selected($RPP_Font_Style, 'Asul' ); ?>>Asul</option>
								<option value="Atomic Age" <?php selected($RPP_Font_Style, 'Atomic Age' ); ?>>Atomic Age</option>
								<option value="Aubrey" <?php selected($RPP_Font_Style, 'Aubrey' ); ?>>Aubrey</option>
								<option value="Audiowide" <?php selected($RPP_Font_Style, 'Audiowide' ); ?>>Audiowide</option>
								<option value="Average" <?php selected($RPP_Font_Style, 'Average' ); ?>>Average</option>
								<option value="Averia Gruesa Libre" <?php selected($RPP_Font_Style, 'Averia Gruesa Libre' ); ?>>Averia Gruesa Libre</option>
								<option value="Averia Libre" <?php selected($RPP_Font_Style, 'Averia Libre' ); ?>>Averia Libre</option>
								<option value="Averia Sans Libre" <?php selected($RPP_Font_Style, 'Averia Sans Libre' ); ?>>Averia Sans Libre</option>
								<option value="Averia Serif Libre" <?php selected($RPP_Font_Style, 'Averia Serif Libre' ); ?>>Averia Serif Libre</option>
								<option value="Bad Script" <?php selected($RPP_Font_Style, 'Bad Script' ); ?>>Bad Script</option>
								<option value="Balthazar" <?php selected($RPP_Font_Style, 'Balthazar' ); ?>>Balthazar</option>
								<option value="Bangers" <?php selected($RPP_Font_Style, 'Bangers' ); ?>>Bangers</option>
								<option value="Basic" <?php selected($RPP_Font_Style, 'Basic' ); ?>>Basic</option>
								<option value="Battambang" <?php selected($RPP_Font_Style, 'Battambang' ); ?>>Battambang</option>
								<option value="Baumans" <?php selected($RPP_Font_Style, 'Baumans' ); ?>>Baumans</option>
								<option value="Bayon" <?php selected($RPP_Font_Style, 'Bayon' ); ?>>Bayon</option>
								<option value="Belgrano"<?php selected($RPP_Font_Style, 'Belgrano' ); ?>>Belgrano</option>
								<option value="Belleza" <?php selected($RPP_Font_Style, 'Belleza' ); ?>>Belleza</option>
								<option value="Bentham" <?php selected($RPP_Font_Style, 'Bentham' ); ?>>Bentham</option>
								<option value="Berkshire Swash"<?php selected($RPP_Font_Style, 'Berkshire Swash' ); ?>>Berkshire Swash</option>
								<option value="Bevan"  <?php selected($RPP_Font_Style, 'Bevan' ); ?>>Bevan</option>
								<option value="Bigshot One"<?php selected($RPP_Font_Style, 'Bigshot One' ); ?>>Bigshot One</option>
								<option value="Bilbo" <?php selected($RPP_Font_Style, 'Bilbo' ); ?>>Bilbo</option>
								<option value="Bilbo Swash Caps" <?php selected($RPP_Font_Style, 'Bilbo Swash Caps' ); ?>>Bilbo Swash Caps</option>
								<option value="Bitter" <?php selected($RPP_Font_Style, 'Bitter' ); ?>>Bitter</option>
								<option value="Black Ops One" <?php selected($RPP_Font_Style, 'Black+Ops+One' ); ?>>Black Ops One</option>
								<option value="Bokor" <?php selected($RPP_Font_Style, 'Bokor' ); ?>>Bokor</option>
								<option value="Bonbon" <?php selected($RPP_Font_Style, 'Bonbon' ); ?>>Bonbon</option>
								<option value="Boogaloo" <?php selected($RPP_Font_Style, 'Boogaloo' ); ?>>Boogaloo</option>
								<option value="Bowlby One" <?php selected($RPP_Font_Style, 'Bowlby One' ); ?>>Bowlby One</option>
								<option value="Bowlby One SC" <?php selected($RPP_Font_Style, 'Bowlby One SC' ); ?>>Bowlby One SC</option>
								<option value="Brawler" <?php selected($RPP_Font_Style, 'Brawler' ); ?>>Brawler</option>
								<option value="Bree Serif" <?php selected($RPP_Font_Style, 'Bree+Serif' ); ?>>Bree Serif</option>
								<option value="Bubblegum Sans"  <?php selected($RPP_Font_Style, 'Bubblegum Sans' ); ?>>Bubblegum Sans</option>
								<option value="Buda"  <?php selected($RPP_Font_Style, 'Buda' ); ?>>Buda</option>
								<option value="Buenard"  <?php selected($RPP_Font_Style, 'Buenard' ); ?>>Buenard</option>
								<option value="Butcherman"  <?php selected($RPP_Font_Style, 'Butcherman' ); ?>>Butcherman</option>
								<option value="Butterfly Kids" <?php selected($RPP_Font_Style, 'Butterfly Kids' ); ?>>Butterfly Kids</option>
								<option value="Cabin"  <?php selected($RPP_Font_Style, 'Cabin' ); ?>>Cabin</option>
								<option value="Cabin Condensed"  <?php selected($RPP_Font_Style, 'Cabin Condensed' ); ?>>Cabin Condensed</option>
								<option value="Cabin Sketch"  <?php selected($RPP_Font_Style, 'Cabin Sketch' ); ?>>Cabin Sketch</option>
								<option value="Caesar Dressing"  <?php selected($RPP_Font_Style, 'Caesar Dressing' ); ?>>Caesar Dressing</option>
								<option value="Cagliostro"  <?php selected($RPP_Font_Style, 'Cagliostro' ); ?>>Cagliostro</option>
								<option value="Calligraffitti"  <?php selected($RPP_Font_Style, 'Calligraffitti' ); ?>>Calligraffitti</option>
								<option value="Cambo"  <?php selected($RPP_Font_Style, 'Cambo' ); ?>>Cambo</option>
								<option value="Candal"  <?php selected($RPP_Font_Style, 'Candal' ); ?>>Candal</option>
								<option value="Cantarell"  <?php selected($RPP_Font_Style, 'Cantarell' ); ?>>Cantarell</option>
								<option value="Cantata One"  <?php selected($RPP_Font_Style, 'Cantata One' ); ?>>Cantata One</option>
								<option value="Cardo"  <?php selected($RPP_Font_Style, 'Cardo' ); ?>>Cardo</option>
								<option value="Carme"  <?php selected($RPP_Font_Style, 'Carme' ); ?>>Carme</option>
								<option value="Carter One"  <?php selected($RPP_Font_Style, 'Carter One' ); ?>>Carter One</option>
								<option value="Caudex"  <?php selected($RPP_Font_Style, 'Caudex' ); ?>>Caudex</option>
								<option value="Cedarville Cursive"  <?php selected($RPP_Font_Style, 'Cedarville Cursive' ); ?>>Cedarville Cursive</option>
								<option value="Ceviche One"  <?php selected($RPP_Font_Style, 'Ceviche One' ); ?>>Ceviche One</option>
								<option value="Changa One"  <?php selected($RPP_Font_Style, 'Changa One' ); ?>>Changa One</option>
								<option value="Chango"  <?php selected($RPP_Font_Style, 'Chango' ); ?>>Chango</option>
								<option value="Chau Philomene One"  <?php selected($RPP_Font_Style, 'Chau Philomene One' ); ?>>Chau Philomene One</option>
								<option value="Chelsea Market"  <?php selected($RPP_Font_Style, 'Chelsea Market' ); ?>>Chelsea Market</option>
								<option value="Chenla"  <?php selected($RPP_Font_Style, 'Chenla' ); ?>>Chenla</option>
								<option value="Cherry Cream Soda"  <?php selected($RPP_Font_Style, 'Cherry Cream Soda' ); ?>>Cherry Cream Soda</option>
								<option value="Chewy"  <?php selected($RPP_Font_Style, 'Chewy' ); ?>>Chewy</option>
								<option value="Chicle"  <?php selected($RPP_Font_Style, 'Chicle' ); ?>>Chicle</option>
								<option value="Chivo"  <?php selected($RPP_Font_Style, 'Chivo' ); ?>>Chivo</option>
								<option value="Coda"  <?php selected($RPP_Font_Style, 'Coda' ); ?>>Coda</option>
								<option value="Coda Caption"  <?php selected($RPP_Font_Style, 'Coda Caption' ); ?>>Coda Caption</option>
								<option value="Codystar"  <?php selected($RPP_Font_Style, 'Codystar' ); ?>>Codystar</option>
								<option value="Comfortaa"  <?php selected($RPP_Font_Style, 'Comfortaa' ); ?>>Comfortaa</option>
								<option value="Coming Soon"  <?php selected($RPP_Font_Style, 'Coming Soon' ); ?>>Coming Soon</option>
								<option value="Concert One"  <?php selected($RPP_Font_Style, 'Concert One' ); ?>>Concert One</option>
								<option value="Condiment"  <?php selected($RPP_Font_Style, 'Condiment' ); ?>>Condiment</option>
								<option value="Content"  <?php selected($RPP_Font_Style, 'Content' ); ?>>Content</option>
								<option value="Contrail One"  <?php selected($RPP_Font_Style, 'Contrail One' ); ?>>Contrail One</option>
								<option value="Convergence"  <?php selected($RPP_Font_Style, 'Convergence' ); ?>>Convergence</option>
								<option value="Cookie"  <?php selected($RPP_Font_Style, 'Cookie' ); ?>>Cookie</option>
								<option value="Copse"  <?php selected($RPP_Font_Style, 'Copse' ); ?>>Copse</option>
								<option value="Corben"  <?php selected($RPP_Font_Style, 'Corben' ); ?>>Corben</option>
								<option value="Courgette"  <?php selected($RPP_Font_Style, 'Courgette' ); ?>>Courgette</option>
								<option value="Cousine"  <?php selected($RPP_Font_Style, 'Cousine' ); ?>>Cousine</option>
								<option value="Coustard"  <?php selected($RPP_Font_Style, 'Coustard' ); ?>>Coustard</option>
								<option value="Covered By Your Grace"  <?php selected($RPP_Font_Style, 'Covered By Your Grace' ); ?>>Covered By Your Grace</option>
								<option value="Crafty Girls"  <?php selected($RPP_Font_Style, 'Crafty Girls' ); ?>>Crafty Girls</option>
								<option value="Creepster"  <?php selected($RPP_Font_Style, 'Creepster' ); ?>>Creepster</option>
								<option value="Crete Round"  <?php selected($RPP_Font_Style, 'Crete Round' ); ?>>Crete Round</option>
								<option value="Crimson Text"  <?php selected($RPP_Font_Style, 'Crimson Text' ); ?>>Crimson Text</option>
								<option value="Crushed"  <?php selected($RPP_Font_Style, 'Crushed' ); ?>>Crushed</option>
								<option value="Cuprum"  <?php selected($RPP_Font_Style, 'Cuprum' ); ?>>Cuprum</option>
								<option value="Cutive"  <?php selected($RPP_Font_Style, 'Cutive' ); ?>>Cutive</option>
								<option value="Damion"  <?php selected($RPP_Font_Style, 'Damion' ); ?>>Damion</option>
								<option value="Dancing Script"  <?php selected($RPP_Font_Style, 'Dancing Script' ); ?>>Dancing Script</option>
								<option value="Dangrek"  <?php selected($RPP_Font_Style, 'Dangrek' ); ?>>Dangrek</option>
								<option value="Dawning of a New Day"  <?php selected($RPP_Font_Style, 'Dawning of a New Day' ); ?>>Dawning of a New Day</option>
								<option value="Days One"  <?php selected($RPP_Font_Style, 'Days One' ); ?>>Days One</option>
								<option value="Delius"  <?php selected($RPP_Font_Style, 'Delius' ); ?>>Delius</option>
								<option value="Delius Swash Caps"  <?php selected($RPP_Font_Style, 'Delius Swash Caps' ); ?>>Delius Swash Caps</option>
								<option value="Delius Unicase"  <?php selected($RPP_Font_Style, 'Delius Unicase' ); ?>>Delius Unicase</option>
								<option value="Della Respira"  <?php selected($RPP_Font_Style, 'Della Respira' ); ?>>Della Respira</option>
								<option value="Devonshire"  <?php selected($RPP_Font_Style, 'Devonshire' ); ?>>Devonshire</option>
								<option value="Didact Gothic"  <?php selected($RPP_Font_Style, 'Didact Gothic' ); ?>>Didact Gothic</option>
								<option value="Diplomata"  <?php selected($RPP_Font_Style, 'Diplomata' ); ?>>Diplomata</option>
								<option value="Diplomata SC"  <?php selected($RPP_Font_Style, 'Diplomata SC' ); ?>>Diplomata SC</option>
								<option value="Doppio One"  <?php selected($RPP_Font_Style, 'Doppio One' ); ?>>Doppio One</option>
								<option value="Dorsa"  <?php selected($RPP_Font_Style, 'Dorsa' ); ?>>Dorsa</option>
								<option value="Dosis"  <?php selected($RPP_Font_Style, 'Dosis' ); ?>>Dosis</option>
								<option value="Dr Sugiyama"  <?php selected($RPP_Font_Style, 'Dr Sugiyama' ); ?>>Dr Sugiyama</option>
								<option value="Droid Sans"  <?php selected($RPP_Font_Style, 'Droid Sans' ); ?>>Droid Sans</option>
								<option value="Droid Sans Mono"  <?php selected($RPP_Font_Style, 'Droid Sans Mono' ); ?>>Droid Sans Mono</option>
								<option value="Droid Serif" <?php selected($RPP_Font_Style, 'Droid Serif' ); ?>>Droid Serif</option>
								<option value="Duru Sans" <?php selected($RPP_Font_Style, 'Duru Sans' ); ?>>Duru Sans</option>
								<option value="Dynalight" <?php selected($RPP_Font_Style, 'Dynalight' ); ?>>Dynalight</option>
								<option value="EB Garamond" <?php selected($RPP_Font_Style, 'EB Garamond' ); ?>>EB Garamond</option>
								<option value="Eater" <?php selected($RPP_Font_Style, 'Eater' ); ?>>Eater</option>
								<option value="Economica" <?php selected($RPP_Font_Style, 'Economica' ); ?>>Economica</option>
								<option value="Electrolize" <?php selected($RPP_Font_Style, 'Electrolize' ); ?>>Electrolize</option>
								<option value="Emblema One" <?php selected($RPP_Font_Style, 'Emblema One' ); ?>>Emblema One</option>
								<option value="Emilys Candy" <?php selected($RPP_Font_Style, 'Emilys Candy' ); ?>>Emilys Candy</option>
								<option value="Engagement" <?php selected($RPP_Font_Style, 'Engagement' ); ?>>Engagement</option>
								<option value="Enriqueta" <?php selected($RPP_Font_Style, 'Enriqueta' ); ?>>Enriqueta</option>
								<option value="Erica One" <?php selected($RPP_Font_Style, 'Erica One' ); ?>>Erica One</option>
								<option value="Esteban" <?php selected($RPP_Font_Style, 'Esteban' ); ?>>Esteban</option>
								<option value="Euphoria Script">Euphoria Script</option>
								<option value="Ewert" <?php selected($RPP_Font_Style, 'Ewert' ); ?>>Ewert</option>
								<option value="Exo" <?php selected($RPP_Font_Style, 'Exo' ); ?>>Exo</option>
								<option value="Expletus Sans" <?php selected($RPP_Font_Style, 'Expletus Sans' ); ?>>Expletus Sans</option>
								<option value="Fanwood Text" <?php selected($RPP_Font_Style, 'Fanwood Text' ); ?>>Fanwood Text</option>
								<option value="Fascinate" <?php selected($RPP_Font_Style, 'Fascinate' ); ?>>Fascinate</option>
								<option value="Fascinate Inline" <?php selected($RPP_Font_Style, 'Fascinate Inline' ); ?>>Fascinate Inline</option>
								<option value="Federant" <?php selected($RPP_Font_Style, 'Federant' ); ?>>Federant</option>
								<option value="Federo" <?php selected($RPP_Font_Style, 'Federo' ); ?>>Federo</option>
								<option value="Felipa" <?php selected($RPP_Font_Style, 'Felipa' ); ?>>Felipa</option>
								<option value="Fjord One" <?php selected($RPP_Font_Style, 'Fjord One' ); ?>>Fjord One</option>
								<option value="Flamenco" <?php selected($RPP_Font_Style, 'Flamenco' ); ?>>Flamenco</option>
								<option value="Flavors" <?php selected($RPP_Font_Style, 'Flavors' ); ?>>Flavors</option>
								<option value="Fondamento" <?php selected($RPP_Font_Style, 'Fondamento' ); ?>>Fondamento</option>
								<option value="Fontdiner Swanky" <?php selected($RPP_Font_Style, 'Fontdiner Swanky' ); ?>>Fontdiner Swanky</option>
								<option value="Forum" <?php selected($RPP_Font_Style, 'Forum' ); ?>>Forum</option>
								<option value="Francois One" <?php selected($RPP_Font_Style, 'Francois One' ); ?>>Francois One</option>
								<option value="Fredericka the Great" <?php selected($RPP_Font_Style, 'Fredericka the Great' ); ?>>Fredericka the Great</option>
								<option value="Fredoka One" <?php selected($RPP_Font_Style, 'Fredoka One' ); ?>>Fredoka One</option>
								<option value="Freehand" <?php selected($RPP_Font_Style, 'Freehand' ); ?>>Freehand</option>
								<option value="Fresca" <?php selected($RPP_Font_Style, 'Fresca' ); ?>>Fresca</option>
								<option value="Frijole" <?php selected($RPP_Font_Style, 'Frijole' ); ?>>Frijole</option>
								<option value="Fugaz One" <?php selected($RPP_Font_Style, 'Fugaz One' ); ?>>Fugaz One</option>
								<option value="GFS Didot" <?php selected($RPP_Font_Style, 'GFS Didot' ); ?>>GFS Didot</option>
								<option value="GFS Neohellenic" <?php selected($RPP_Font_Style, 'GFS Neohellenic' ); ?>>GFS Neohellenic</option>
								<option value="Galdeano" <?php selected($RPP_Font_Style, 'Galdeano' ); ?>>Galdeano</option>
								<option value="Gentium Basic" <?php selected($RPP_Font_Style, 'Gentium Basic' ); ?>>Gentium Basic</option>
								<option value="Gentium Book Basic" <?php selected($RPP_Font_Style, 'Gentium Book Basic' ); ?>>Gentium Book Basic</option>
								<option value="Geo" <?php selected($RPP_Font_Style, 'Geo' ); ?>>Geo</option>
								<option value="Geostar" <?php selected($RPP_Font_Style, 'Geostar' ); ?>>Geostar</option>
								<option value="Geostar Fill" <?php selected($RPP_Font_Style, 'Geostar Fill' ); ?>>Geostar Fill</option>
								<option value="Germania One" <?php selected($RPP_Font_Style, 'Germania One' ); ?>>Germania One</option>
								<option value="Give You Glory" <?php selected($RPP_Font_Style, 'Give You Glory' ); ?>>Give You Glory</option>
								<option value="Glass Antiqua" <?php selected($RPP_Font_Style, 'Glass Antiqua' ); ?>>Glass Antiqua</option>
								<option value="Glegoo" <?php selected($RPP_Font_Style, 'Glegoo' ); ?>>Glegoo</option>
								<option value="Gloria Hallelujah" <?php selected($RPP_Font_Style, 'Gloria Hallelujah' ); ?>>Gloria Hallelujah</option>
								<option value="Goblin One" <?php selected($RPP_Font_Style, 'Goblin One' ); ?>>Goblin One</option>
								<option value="Gochi Hand" <?php selected($RPP_Font_Style, 'Gochi Hand' ); ?>>Gochi Hand</option>
								<option value="Gorditas" <?php selected($RPP_Font_Style, 'Gorditas' ); ?>>Gorditas</option>
								<option value="Goudy Bookletter 1911" <?php selected($RPP_Font_Style, 'Goudy Bookletter 191' ); ?>>Goudy Bookletter 1911</option>
								<option value="Graduate" <?php selected($RPP_Font_Style, 'Graduate' ); ?>>Graduate</option>
								<option value="Gravitas One" <?php selected($RPP_Font_Style, 'Gravitas One' ); ?>>Gravitas One</option>
								<option value="Great Vibes" <?php selected($RPP_Font_Style, 'Great Vibes' ); ?>>Great Vibes</option>
								<option value="Gruppo" <?php selected($RPP_Font_Style, 'Gruppo' ); ?>>Gruppo</option>
								<option value="Gudea" <?php selected($RPP_Font_Style, 'Gudea' ); ?>>Gudea</option>
								<option value="Habibi" <?php selected($RPP_Font_Style, 'Habibi' ); ?>>Habibi</option>
								<option value="Hammersmith One" <?php selected($RPP_Font_Style, 'Hammersmith One' ); ?>>Hammersmith One</option>
								<option value="Handlee" <?php selected($RPP_Font_Style, 'Handlee' ); ?>>Handlee</option>
								<option value="Hanuman" <?php selected($RPP_Font_Style, 'Hanuman' ); ?>>Hanuman</option>
								<option value="Happy Monkey" <?php selected($RPP_Font_Style, 'Happy Monkey' ); ?>>Happy Monkey</option>
								<option value="Henny Penny" <?php selected($RPP_Font_Style, 'Henny Penny' ); ?>>Henny Penny</option>
								<option value="Herr Von Muellerhoff" <?php selected($RPP_Font_Style, 'Herr Von Muellerhoff' ); ?>>Herr Von Muellerhoff</option>
								<option value="Holtwood One SC" <?php selected($RPP_Font_Style, 'Holtwood One SC' ); ?>>Holtwood One SC</option>
								<option value="Homemade Apple" <?php selected($RPP_Font_Style, 'Homemade Apple' ); ?>>Homemade Apple</option>
								<option value="Homenaje" <?php selected($RPP_Font_Style, 'Homenaje' ); ?>>Homenaje</option>
								<option value="IM Fell DW Pica" <?php selected($RPP_Font_Style, 'IM Fell DW Pica' ); ?>>IM Fell DW Pica</option>
								<option value="IM Fell DW Pica SC" <?php selected($RPP_Font_Style, 'IM Fell DW Pica SC' ); ?>>IM Fell DW Pica SC</option>
								<option value="IM Fell Double Pica" <?php selected($RPP_Font_Style, 'IM Fell Double Pica' ); ?>>IM Fell Double Pica</option>
								<option value="IM Fell Double Pica SC" <?php selected($RPP_Font_Style, 'IM Fell Double Pica SC' ); ?>>IM Fell Double Pica SC</option>
								<option value="IM Fell English" <?php selected($RPP_Font_Style, 'IM Fell English' ); ?>>IM Fell English</option>
								<option value="IM Fell English SC" <?php selected($RPP_Font_Style, 'IM Fell English SC' ); ?>>IM Fell English SC</option>
								<option value="IM Fell French Canon" <?php selected($RPP_Font_Style, 'IM Fell French Canon' ); ?>>IM Fell French Canon</option>
								<option value="IM Fell French Canon SC" <?php selected($RPP_Font_Style, 'IM Fell French Canon SC' ); ?>>IM Fell French Canon SC</option>
								<option value="IM Fell Great Primer" <?php selected($RPP_Font_Style, 'IM Fell Great Primer' ); ?>>IM Fell Great Primer</option>
								<option value="IM Fell Great Primer SC" <?php selected($RPP_Font_Style, 'IM Fell Great Primer SC' ); ?>>IM Fell Great Primer SC</option>
								<option value="Iceberg" <?php selected($RPP_Font_Style, 'Iceberg' ); ?>>Iceberg</option>
								<option value="Iceland" <?php selected($RPP_Font_Style, 'Iceland' ); ?>>Iceland</option>
								<option value="Imprima" <?php selected($RPP_Font_Style, 'Imprima' ); ?>>Imprima</option>
								<option value="Inconsolata" <?php selected($RPP_Font_Style, 'Inconsolata' ); ?>>Inconsolata</option>
								<option value="Inder" <?php selected($RPP_Font_Style, 'Inder' ); ?>>Inder</option>
								<option value="Indie Flower" <?php selected($RPP_Font_Style, 'Indie Flower' ); ?>>Indie Flower</option>
								<option value="Inika" <?php selected($RPP_Font_Style, 'Inika' ); ?>>Inika</option>
								<option value="Irish Grover" <?php selected($RPP_Font_Style, 'Irish Grover' ); ?>>Irish Grover</option>
								<option value="Istok Web" <?php selected($RPP_Font_Style, 'Istok Web' ); ?>>Istok Web</option>
								<option value="Italiana" <?php selected($RPP_Font_Style, 'Italiana' ); ?>>Italiana</option>
								<option value="Italianno" <?php selected($RPP_Font_Style, 'Italianno' ); ?>>Italianno</option>
								<option value="Jim Nightshade" <?php selected($RPP_Font_Style, 'Jim Nightshade' ); ?>>Jim Nightshade</option>
								<option value="Jockey One" <?php selected($RPP_Font_Style, 'Jockey One' ); ?>>Jockey One</option>
								<option value="Jolly Lodger" <?php selected($RPP_Font_Style, 'Jolly Lodger' ); ?>>Jolly Lodger</option>
								<option value="Josefin Sans" <?php selected($RPP_Font_Style, 'Josefin Sans' ); ?>>Josefin Sans</option>
								<option value="Josefin Slab" <?php selected($RPP_Font_Style, 'Josefin Slab' ); ?>>Josefin Slab</option>
								<option value="Judson" <?php selected($RPP_Font_Style, 'Judson' ); ?>>Judson</option>
								<option value="Julee" <?php selected($RPP_Font_Style, 'Julee' ); ?>>Julee</option>
								<option value="Junge" <?php selected($RPP_Font_Style, 'Junge' ); ?>>Junge</option>
								<option value="Jura" <?php selected($RPP_Font_Style, 'Jura' ); ?>>Jura</option>
								<option value="Just Another Hand" <?php selected($RPP_Font_Style, 'Just Another Hand' ); ?>>Just Another Hand</option>
								<option value="Just Me Again Down Here" <?php selected($RPP_Font_Style, 'Just Me Again Down Here' ); ?>>Just Me Again Down Here</option>
								<option value="Kameron" <?php selected($RPP_Font_Style, 'Kameron' ); ?>>Kameron</option>
								<option value="Karla" <?php selected($RPP_Font_Style, 'Karla' ); ?>>Karla</option>
								<option value="Kaushan Script" <?php selected($RPP_Font_Style, 'Kaushan Script' ); ?>>Kaushan Script</option>
								<option value="Kelly Slab" <?php selected($RPP_Font_Style, 'Kelly Slab' ); ?>>Kelly Slab</option>
								<option value="Kenia" <?php selected($RPP_Font_Style, 'Kenia' ); ?>>Kenia</option>
								<option value="Khmer" <?php selected($RPP_Font_Style, 'Khmer' ); ?>>Khmer</option>
								<option value="Knewave" <?php selected($RPP_Font_Style, 'Knewave' ); ?>>Knewave</option>
								<option value="Kotta One" <?php selected($RPP_Font_Style, 'Kotta One' ); ?>>Kotta One</option>
								<option value="Koulen" <?php selected($RPP_Font_Style, 'Koulen' ); ?>>Koulen</option>
								<option value="Kranky" <?php selected($RPP_Font_Style, 'Kranky' ); ?>>Kranky</option>
								<option value="Kreon" <?php selected($RPP_Font_Style, 'Kreon' ); ?>>Kreon</option>
								<option value="Kristi" <?php selected($RPP_Font_Style, 'Kristi' ); ?>>Kristi</option>
								<option value="Krona One" <?php selected($RPP_Font_Style, 'Krona One' ); ?>>Krona One</option>
								<option value="La Belle Aurore" <?php selected($RPP_Font_Style, 'La Belle Aurore' ); ?>>La Belle Aurore</option>
								<option value="Lancelot" <?php selected($RPP_Font_Style, 'Lancelot' ); ?>>Lancelot</option>
								<option value="Lato" <?php selected($RPP_Font_Style, 'Lato' ); ?>>Lato</option>
								<option value="League Script" <?php selected($RPP_Font_Style, 'League Script' ); ?>>League Script</option>
								<option value="Leckerli One" <?php selected($RPP_Font_Style, 'Leckerli One' ); ?>>Leckerli One</option>
								<option value="Ledger" <?php selected($RPP_Font_Style, 'Ledger' ); ?>>Ledger</option>
								<option value="Lekton" <?php selected($RPP_Font_Style, 'Lekton' ); ?>>Lekton</option>
								<option value="Lemon" <?php selected($RPP_Font_Style, 'Lemon' ); ?>>Lemon</option>
								<option value="Lilita One" <?php selected($RPP_Font_Style, 'Lilita One' ); ?>>Lilita One</option>
								<option value="Limelight" <?php selected($RPP_Font_Style, 'Limelight' ); ?>>Limelight</option>
								<option value="Linden Hill" <?php selected($RPP_Font_Style, 'Linden Hill' ); ?>>Linden Hill</option>
								<option value="Lobster" <?php selected($RPP_Font_Style, 'Lobster' ); ?>>Lobster</option>
								<option value="Lobster Two" <?php selected($RPP_Font_Style, 'Lobster Two' ); ?>>Lobster Two</option>
								<option value="Londrina Outline" <?php selected($RPP_Font_Style, 'Londrina Outline' ); ?>>Londrina Outline</option>
								<option value="Londrina Shadow" <?php selected($RPP_Font_Style, 'Londrina Shadow' ); ?>>Londrina Shadow</option>
								<option value="Londrina Sketch" <?php selected($RPP_Font_Style, 'Londrina Sketch' ); ?>>Londrina Sketch</option>
								<option value="Londrina Solid" <?php selected($RPP_Font_Style, 'Londrina Solid' ); ?>>Londrina Solid</option>
								<option value="Lora" <?php selected($RPP_Font_Style, 'Lora' ); ?>>Lora</option>
								<option value="Love Ya Like A Sister" <?php selected($RPP_Font_Style, 'Love Ya Like A Sister' ); ?>>Love Ya Like A Sister</option>
								<option value="Loved by the King" <?php selected($RPP_Font_Style, 'Loved by the King' ); ?>>Loved by the King</option>
								<option value="Lovers Quarrel" <?php selected($RPP_Font_Style, 'Lovers Quarrel' ); ?>>Lovers Quarrel</option>
								<option value="Luckiest Guy" <?php selected($RPP_Font_Style, 'Luckiest Guy' ); ?>>Luckiest Guy</option>
								<option value="Lusitana" <?php selected($RPP_Font_Style, 'Lusitana' ); ?>>Lusitana</option>
								<option value="Lustria" <?php selected($RPP_Font_Style, 'Lustria' ); ?>>Lustria</option>
								<option value="Macondo" <?php selected($RPP_Font_Style, 'Macondo' ); ?>>Macondo</option>
								<option value="Macondo Swash Caps" <?php selected($RPP_Font_Style, 'Macondo Swash Caps' ); ?>>Macondo Swash Caps</option>
								<option value="Magra" <?php selected($RPP_Font_Style, 'Magra' ); ?>>Magra</option>
								<option value="Maiden Orange" <?php selected($RPP_Font_Style, 'Maiden Orange' ); ?>>Maiden Orange</option>
								<option value="Mako" <?php selected($RPP_Font_Style, 'Mako' ); ?>>Mako</option>
								<option value="Marck Script" <?php selected($RPP_Font_Style, 'Marck Script' ); ?>>Marck Script</option>
								<option value="Marko One" <?php selected($RPP_Font_Style, 'Marko One' ); ?>>Marko One</option>
								<option value="Marmelad" <?php selected($RPP_Font_Style, 'Marmelad' ); ?>>Marmelad</option>
								<option value="Marvel" <?php selected($RPP_Font_Style, 'Marvel' ); ?>>Marvel</option>
								<option value="Mate" <?php selected($RPP_Font_Style, 'Mate' ); ?>>Mate</option>
								<option value="Mate SC" <?php selected($RPP_Font_Style, 'Mate SC' ); ?>>Mate SC</option>
								<option value="Maven Pro" <?php selected($RPP_Font_Style, 'Maven Pro' ); ?>>Maven Pro</option>
								<option value="Meddon" <?php selected($RPP_Font_Style, 'Meddon' ); ?>>Meddon</option>
								<option value="MedievalSharp" <?php selected($RPP_Font_Style, 'MedievalSharp' ); ?>>MedievalSharp</option>
								<option value="Medula One" <?php selected($RPP_Font_Style, 'Medula One' ); ?>>Medula One</option>
								<option value="Megrim" <?php selected($RPP_Font_Style, 'Megrim' ); ?>>Megrim</option>
								<option value="Merienda One" <?php selected($RPP_Font_Style, 'Merienda One' ); ?>>Merienda One</option>
								<option value="Merriweather" <?php selected($RPP_Font_Style, 'Merriweather' ); ?>>Merriweather</option>
								<option value="Metal" <?php selected($RPP_Font_Style, 'Metal' ); ?>>Metal</option>
								<option value="Metamorphous"<?php selected($RPP_Font_Style, 'Metamorphous' ); ?>>Metamorphous</option>
								<option value="Metrophobic" <?php selected($RPP_Font_Style, 'Metrophobic' ); ?>>Metrophobic</option>
								<option value="Michroma" <?php selected($RPP_Font_Style, 'Michroma' ); ?>>Michroma</option>
								<option value="Miltonian" <?php selected($RPP_Font_Style, 'Miltonian' ); ?>>Miltonian</option>
								<option value="Miltonian Tattoo" <?php selected($RPP_Font_Style, 'Miltonian Tattoo' ); ?>>Miltonian Tattoo</option>
								<option value="Miniver" <?php selected($RPP_Font_Style, 'Miniver' ); ?>>Miniver</option>
								<option value="Miss Fajardose" <?php selected($RPP_Font_Style, 'Miss Fajardose' ); ?>>Miss Fajardose</option>
								<option value="Modern Antiqua" <?php selected($RPP_Font_Style, 'Modern Antiqua' ); ?>>Modern Antiqua</option>
								<option value="Molengo" <?php selected($RPP_Font_Style, 'Molengo' ); ?>>Molengo</option>
								<option value="Monofett" <?php selected($RPP_Font_Style, 'Monofett' ); ?>>Monofett</option>
								<option value="Monoton" <?php selected($RPP_Font_Style, 'Monoton' ); ?>>Monoton</option>
								<option value="Monsieur La Doulaise" <?php selected($RPP_Font_Style, 'Monsieur La Doulaise' ); ?>>Monsieur La Doulaise</option>
								<option value="Montaga" <?php selected($RPP_Font_Style, 'Montaga' ); ?>>Montaga</option>
								<option value="Montez" <?php selected($RPP_Font_Style, 'Montez' ); ?>>Montez</option>
								<option value="Montserrat" <?php selected($RPP_Font_Style, 'Montserrat' ); ?>>Montserrat</option>
								<option value="Moul" <?php selected($RPP_Font_Style, 'Moul' ); ?>>Moul</option>
								<option value="Moulpali" <?php selected($RPP_Font_Style, 'Moulpali' ); ?>>Moulpali</option>
								<option value="Mountains of Christmas" <?php selected($RPP_Font_Style, 'Mountains of Christmas' ); ?>>Mountains of Christmas</option>
								<option value="Mr Bedfort" <?php selected($RPP_Font_Style, 'Mr Bedfort' ); ?>>Mr Bedfort</option>
								<option value="Mr Dafoe" <?php selected($RPP_Font_Style, 'Mr Dafoe' ); ?>>Mr Dafoe</option>
								<option value="Mr De Haviland" <?php selected($RPP_Font_Style, 'Mr De Haviland' ); ?>>Mr De Haviland</option>
								<option value="Mrs Saint Delafield" <?php selected($RPP_Font_Style, 'Mrs Saint Delafield' ); ?>>Mrs Saint Delafield</option>
								<option value="Mrs Sheppards" <?php selected($RPP_Font_Style, 'Mrs Sheppards' ); ?>>Mrs Sheppards</option>
								<option value="Muli" <?php selected($RPP_Font_Style, 'Muli' ); ?>>Muli</option>
								<option value="Mystery Quest" <?php selected($RPP_Font_Style, 'Mystery Quest' ); ?>>Mystery Quest</option>
								<option value="Neucha" <?php selected($RPP_Font_Style, 'Neucha' ); ?>>Neucha</option>
								<option value="Neuton" <?php selected($RPP_Font_Style, 'Neuton' ); ?>>Neuton</option>
								<option value="News Cycle" <?php selected($RPP_Font_Style, 'News Cycle' ); ?>>News Cycle</option>
								<option value="Niconne" <?php selected($RPP_Font_Style, 'Niconne' ); ?>>Niconne</option>
								<option value="Nixie One" <?php selected($RPP_Font_Style, 'Nixie One' ); ?>>Nixie One</option>
								<option value="Nobile" <?php selected($RPP_Font_Style, 'Nobile' ); ?>>Nobile</option>
								<option value="Nokora" <?php selected($RPP_Font_Style, 'Nokora' ); ?>>Nokora</option>
								<option value="Norican" <?php selected($RPP_Font_Style, 'Norican' ); ?>>Norican</option>
								<option value="Nosifer" <?php selected($RPP_Font_Style, 'Nosifer' ); ?>>Nosifer</option>
								<option value="Nothing You Could Do" <?php selected($RPP_Font_Style, 'Nothing You Could Do' ); ?>>Nothing You Could Do</option>
								<option value="Noticia Text" <?php selected($RPP_Font_Style, 'Noticia Text' ); ?>>Noticia Text</option>
								<option value="Nova Cut" <?php selected($RPP_Font_Style, 'Nova Cut' ); ?>>Nova Cut</option>
								<option value="Nova Flat" <?php selected($RPP_Font_Style, 'Nova Flat' ); ?>>Nova Flat</option>
								<option value="Nova Mono" <?php selected($RPP_Font_Style, 'Nova Mono' ); ?>>Nova Mono</option>
								<option value="Nova Oval" <?php selected($RPP_Font_Style, 'Nova Oval' ); ?>>Nova Oval</option>
								<option value="Nova Round" <?php selected($RPP_Font_Style, 'Nova Round' ); ?>>Nova Round</option>
								<option value="Nova Script" <?php selected($RPP_Font_Style, 'Nova Script' ); ?>>Nova Script</option>
								<option value="Nova Slim" <?php selected($RPP_Font_Style, 'Nova Slim' ); ?>>Nova Slim</option>
								<option value="Nova Square" <?php selected($RPP_Font_Style, 'Nova Square' ); ?>>Nova Square</option>
								<option value="Numans" <?php selected($RPP_Font_Style, 'Numans' ); ?>>Numans</option>

								<option value="Nunito" <?php selected($RPP_Font_Style, 'Nunito' ); ?>>Nunito</option>
								<option value="Odor Mean Chey" <?php selected($RPP_Font_Style, 'Odor Mean Chey' ); ?>>Odor Mean Chey</option>
								<option value="Old Standard TT" <?php selected($RPP_Font_Style, 'Old Standard TT' ); ?>>Old Standard TT</option>
								<option value="Oldenburg" <?php selected($RPP_Font_Style, 'Oldenburg' ); ?>>Oldenburg</option>
								<option value="Oleo Script" <?php selected($RPP_Font_Style, 'Oleo Script' ); ?>>Oleo Script</option>
								<option value="Open Sans" <?php selected($RPP_Font_Style, 'Open Sans' ); ?>>Open Sans</option>
								<option value="Open Sans Condensed" <?php selected($RPP_Font_Style, 'Open Sans Condensed' ); ?>>Open Sans Condensed</option>
								<option value="Orbitron" <?php selected($RPP_Font_Style, 'Orbitron' ); ?>>Orbitron</option>
								<option value="Original Surfer" <?php selected($RPP_Font_Style, 'Original Surfer' ); ?>>Original Surfer</option>
								<option value="Oswald" <?php selected($RPP_Font_Style, 'Oswald' ); ?>>Oswald</option>
								<option value="Over the Rainbow" <?php selected($RPP_Font_Style, 'Over the Rainbow' ); ?>>Over the Rainbow</option>
								<option value="Overlock" <?php selected($RPP_Font_Style, 'Overlock' ); ?>>Overlock</option>
								<option value="Overlock SC" <?php selected($RPP_Font_Style, 'Overlock SC' ); ?>>Overlock SC</option>
								<option value="Ovo" <?php selected($RPP_Font_Style, 'Ovo' ); ?>>Ovo</option>
								<option value="Oxygen" <?php selected($RPP_Font_Style, 'Oxygen' ); ?>>Oxygen</option>
								<option value="PT Mono" <?php selected($RPP_Font_Style, 'PT Mono' ); ?>>PT Mono</option>
								<option value="PT Sans" <?php selected($RPP_Font_Style, 'PT Sans' ); ?>>PT Sans</option>
								<option value="PT Sans Caption" <?php selected($RPP_Font_Style, 'PT Sans Caption' ); ?>>PT Sans Caption</option>
								<option value="PT Sans Narrow" <?php selected($RPP_Font_Style, 'PT Sans Narrow' ); ?>>PT Sans Narrow</option>
								<option value="PT Serif" <?php selected($RPP_Font_Style, 'PT Serif' ); ?>>PT Serif</option>
								<option value="PT Serif Caption" <?php selected($RPP_Font_Style, 'PT Serif Caption' ); ?>>PT Serif Caption</option>
								<option value="Pacifico" <?php selected($RPP_Font_Style, 'Pacifico' ); ?>>Pacifico</option>
								<option value="Parisienne" <?php selected($RPP_Font_Style, 'Parisienne' ); ?>>Parisienne</option>
								<option value="Passero One" <?php selected($RPP_Font_Style, 'Passero One' ); ?>>Passero One</option>
								<option value="Passion One" <?php selected($RPP_Font_Style, 'Passion One' ); ?>>Passion One</option>
								<option value="Patrick Hand" <?php selected($RPP_Font_Style, 'Patrick Hand' ); ?>>Patrick Hand</option>
								<option value="Patua One" <?php selected($RPP_Font_Style, 'Patua One' ); ?>>Patua One</option>
								<option value="Paytone One" <?php selected($RPP_Font_Style, 'Paytone One' ); ?>>Paytone One</option>
								<option value="Permanent Marker" <?php selected($RPP_Font_Style, 'Permanent Marker' ); ?>>Permanent Marker</option>
								<option value="Petrona" <?php selected($RPP_Font_Style, 'Petrona' ); ?>>Petrona</option>
								<option value="Philosopher" <?php selected($RPP_Font_Style, 'Philosopher' ); ?>>Philosopher</option>
								<option value="Piedra" <?php selected($RPP_Font_Style, 'Piedra' ); ?>>Piedra</option>
								<option value="Pinyon Script" <?php selected($RPP_Font_Style, 'Pinyon Script' ); ?>>Pinyon Script</option>
								<option value="Plaster" <?php selected($RPP_Font_Style, 'Plaster' ); ?>>Plaster</option>
								<option value="Play" <?php selected($RPP_Font_Style, 'Play' ); ?>>Play</option>
								<option value="Playball" <?php selected($RPP_Font_Style, 'Playball' ); ?>>Playball</option>
								<option value="Playfair Display" <?php selected($RPP_Font_Style, 'Playfair Display' ); ?>>Playfair Display</option>
								<option value="Podkova" <?php selected($RPP_Font_Style, 'Podkova' ); ?>>Podkova</option>
								<option value="Poiret One" <?php selected($RPP_Font_Style, 'Poiret One' ); ?>>Poiret One</option>
								<option value="Poller One" <?php selected($RPP_Font_Style, 'Poller One' ); ?>>Poller One</option>
								<option value="Poly" <?php selected($RPP_Font_Style, 'Poly' ); ?>>Poly</option>
								<option value="Pompiere" <?php selected($RPP_Font_Style, 'Pompiere' ); ?>>Pompiere</option>
								<option value="Pontano Sans" <?php selected($RPP_Font_Style, 'Pontano Sans' ); ?>>Pontano Sans</option>
								<option value="Port Lligat Sans" <?php selected($RPP_Font_Style, 'Port Lligat Sans' ); ?>>Port Lligat Sans</option>
								<option value="Port Lligat Slab" <?php selected($RPP_Font_Style, 'Port Lligat Slab' ); ?>>Port Lligat Slab</option>
								<option value="Prata" <?php selected($RPP_Font_Style, 'Prata' ); ?>>Prata</option>
								<option value="Preahvihear" <?php selected($RPP_Font_Style, 'Preahvihear' ); ?>>Preahvihear</option>
								<option value="Press Start 2P" <?php selected($RPP_Font_Style, 'Press Start 2P' ); ?>>Press Start 2P</option>
								<option value="Princess Sofia" <?php selected($RPP_Font_Style, 'Princess Sofia' ); ?>>Princess Sofia</option>
								<option value="Prociono" <?php selected($RPP_Font_Style, 'Prociono' ); ?>>Prociono</option>
								<option value="Prosto One" <?php selected($RPP_Font_Style, 'Prosto One' ); ?>>Prosto One</option>
								<option value="Puritan" <?php selected($RPP_Font_Style, 'Puritan' ); ?>>Puritan</option>
								<option value="Quantico" <?php selected($RPP_Font_Style, 'Quantico' ); ?>>Quantico</option>
								<option value="Quattrocento" <?php selected($RPP_Font_Style, 'Quattrocento' ); ?>>Quattrocento</option>
								<option value="Quattrocento Sans" <?php selected($RPP_Font_Style, 'Quattrocento Sans' ); ?>>Quattrocento Sans</option>
								<option value="Questrial" <?php selected($RPP_Font_Style, 'Questrial' ); ?>>Questrial</option>
								<option value="Quicksand" <?php selected($RPP_Font_Style, 'Quicksand' ); ?>>Quicksand</option>
								<option value="Qwigley" <?php selected($RPP_Font_Style, 'Qwigley' ); ?>>Qwigley</option>
								<option value="Radley" <?php selected($RPP_Font_Style, 'Radley' ); ?>>Radley</option>
								<option value="Raleway" <?php selected($RPP_Font_Style, 'Raleway' ); ?>>Raleway</option>
								<option value="Rammetto One" <?php selected($RPP_Font_Style, 'Rammetto One' ); ?>>Rammetto One</option>
								<option value="Rancho" <?php selected($RPP_Font_Style, 'Rancho' ); ?>>Rancho</option>
								<option value="Rationale" <?php selected($RPP_Font_Style, 'Rationale' ); ?>>Rationale</option>
								<option value="Redressed" <?php selected($RPP_Font_Style, 'Redressed' ); ?>>Redressed</option>
								<option value="Reenie Beanie" <?php selected($RPP_Font_Style, 'Reenie Beanie' ); ?>>Reenie Beanie</option>
								<option value="Revalia" <?php selected($RPP_Font_Style, 'Revalia' ); ?>>Revalia</option>
								<option value="Ribeye" <?php selected($RPP_Font_Style, 'Ribeye' ); ?>>Ribeye</option>
								<option value="Ribeye Marrow" <?php selected($RPP_Font_Style, 'Ribeye Marrow' ); ?>>Ribeye Marrow</option>
								<option value="Righteous" <?php selected($RPP_Font_Style, 'Righteous' ); ?>>Righteous</option>
								<option value="Rochester" <?php selected($RPP_Font_Style, 'Rochester' ); ?>>Rochester</option>
								<option value="Rock Salt" <?php selected($RPP_Font_Style, 'Rock Salt' ); ?>>Rock Salt</option>
								<option value="Rokkitt" <?php selected($RPP_Font_Style, 'Rokkitt' ); ?>>Rokkitt</option>
								<option value="Ropa Sans" <?php selected($RPP_Font_Style, 'Ropa Sans' ); ?>>Ropa Sans</option>
								<option value="Rosario" <?php selected($RPP_Font_Style, 'Rosario' ); ?>>Rosario</option>
								<option value="Rosarivo" <?php selected($RPP_Font_Style, 'Rosarivo' ); ?>>Rosarivo</option>
								<option value="Rouge Script" <?php selected($RPP_Font_Style, 'Rouge Script' ); ?>>Rouge Script</option>
								<option value="Ruda" <?php selected($RPP_Font_Style, 'Ruda' ); ?>>Ruda</option>
								<option value="Ruge Boogie" <?php selected($RPP_Font_Style, 'Ruge Boogie' ); ?>>Ruge Boogie</option>
								<option value="Ruluko" <?php selected($RPP_Font_Style, 'Ruluko' ); ?>>Ruluko</option>
								<option value="Ruslan Display" <?php selected($RPP_Font_Style, 'Ruslan Display' ); ?>>Ruslan Display</option>
								<option value="Russo One" <?php selected($RPP_Font_Style, 'Russo One' ); ?>>Russo One</option>
								<option value="Ruthie" <?php selected($RPP_Font_Style, 'Ruthie' ); ?>>Ruthie</option>
								<option value="Sail" <?php selected($RPP_Font_Style, 'Sail' ); ?>>Sail</option>
								<option value="Salsa" <?php selected($RPP_Font_Style, 'Salsa' ); ?>>Salsa</option>
								<option value="Sancreek" <?php selected($RPP_Font_Style, 'Sancreek' ); ?>>Sancreek</option>
								<option value="Sansita One" <?php selected($RPP_Font_Style, 'Sansita One' ); ?>>Sansita One</option>
								<option value="Sarina" <?php selected($RPP_Font_Style, 'Sarina' ); ?>>Sarina</option>
								<option value="Satisfy" <?php selected($RPP_Font_Style, 'Satisfy' ); ?>>Satisfy</option>
								<option value="Schoolbell" <?php selected($RPP_Font_Style, 'Schoolbell' ); ?>>Schoolbell</option>
								<option value="Seaweed Script" <?php selected($RPP_Font_Style, 'Seaweed Script' ); ?>>Seaweed Script</option>
								<option value="Sevillana" <?php selected($RPP_Font_Style, 'Sevillana' ); ?>>Sevillana</option>
								<option value="Shadows Into Light" <?php selected($RPP_Font_Style, 'hadows Into Light' ); ?>>Shadows Into Light</option>
								<option value="Shadows Into Light Two" <?php selected($RPP_Font_Style, 'Shadows Into Light Two' ); ?>>Shadows Into Light Two</option>
								<option value="Shanti" <?php selected($RPP_Font_Style, 'Shanti' ); ?>>Shanti</option>
								<option value="Share">Share</option>
								<option value="Shojumaru" <?php selected($RPP_Font_Style, 'Shojumaru' ); ?>>Shojumaru</option>
								<option value="Short Stack" <?php selected($RPP_Font_Style, 'Short Stack' ); ?>>Short Stack</option>
								<option value="Siemreap"<?php selected($RPP_Font_Style, 'Siemreap' ); ?>>Siemreap</option>
								<option value="Sigmar One" <?php selected($RPP_Font_Style, 'Sigmar One' ); ?>>Sigmar One</option>
								<option value="Signika"<?php selected($RPP_Font_Style, 'Signika' ); ?>>Signika</option>
								<option value="Signika Negative" <?php selected($RPP_Font_Style, 'Signika Negative' ); ?>>Signika Negative</option>
								<option value="Simonetta" <?php selected($RPP_Font_Style, 'Simonetta' ); ?>>Simonetta</option>
								<option value="Sirin Stencil" <?php selected($RPP_Font_Style, 'Sirin Stencil' ); ?>>Sirin Stencil</option>
								<option value="Six Caps" <?php selected($RPP_Font_Style, 'Six Caps' ); ?>>Six Caps</option>
								<option value="Slackey" <?php selected($RPP_Font_Style, 'Slackey' ); ?>>Slackey</option>
								<option value="Smokum" <?php selected($RPP_Font_Style, 'Smokum' ); ?>>Smokum</option>
								<option value="Smythe" <?php selected($RPP_Font_Style, 'Smythe' ); ?>>Smythe</option>
								<option value="Sniglet" <?php selected($RPP_Font_Style, 'Sniglet' ); ?>>Sniglet</option>
								<option value="Snippet" <?php selected($RPP_Font_Style, 'Snippet' ); ?>>Snippet</option>
								<option value="Sofia" <?php selected($RPP_Font_Style, 'Sofia' ); ?>>Sofia</option>
								<option value="Sonsie One" <?php selected($RPP_Font_Style, 'Sonsie One' ); ?>>Sonsie One</option>
								<option value="Sorts Mill Goudy" <?php selected($RPP_Font_Style, 'Sorts Mill Goudy' ); ?>>Sorts Mill Goudy</option>
								<option value="Special Elite" <?php selected($RPP_Font_Style, 'Special Elite' ); ?>>Special Elite</option>
								<option value="Spicy Rice" <?php selected($RPP_Font_Style, 'Spicy Rice' ); ?>>Spicy Rice</option>
								<option value="Spinnaker" <?php selected($RPP_Font_Style, 'Spinnaker' ); ?>>Spinnaker</option>
								<option value="Spirax" <?php selected($RPP_Font_Style, 'Spirax' ); ?>>Spirax</option>
								<option value="Squada One" <?php selected($RPP_Font_Style, 'Squada One' ); ?>>Squada One</option>
								<option value="Stardos Stencil" <?php selected($RPP_Font_Style, 'Stardos Stencil' ); ?>>Stardos Stencil</option>
								<option value="Stint Ultra Condensed" <?php selected($RPP_Font_Style, 'Stint Ultra Condensed' ); ?>>Stint Ultra Condensed</option>
								<option value="Stint Ultra Expanded" <?php selected($RPP_Font_Style, 'Stint Ultra Expanded' ); ?>>Stint Ultra Expanded</option>
								<option value="Stoke" <?php selected($RPP_Font_Style, 'Stoke' ); ?>>Stoke</option>
								<option value="Sue Ellen Francisco" <?php selected($RPP_Font_Style, 'Sue Ellen Francisco' ); ?>>Sue Ellen Francisco</option>
								<option value="Sunshiney" <?php selected($RPP_Font_Style, 'Sunshiney' ); ?>>Sunshiney</option>
								<option value="Supermercado One" <?php selected($RPP_Font_Style, 'Supermercado One' ); ?>>Supermercado One</option>
								<option value="Suwannaphum" <?php selected($RPP_Font_Style, 'Suwannaphum' ); ?>>Suwannaphum</option>
								<option value="Swanky and Moo Moo" <?php selected($RPP_Font_Style, 'Swanky and Moo Moo' ); ?>>Swanky and Moo Moo</option>
								<option value="Syncopate" <?php selected($RPP_Font_Style, 'Syncopate' ); ?>>Syncopate</option>
								<option value="Tangerine" <?php selected($RPP_Font_Style, 'Tangerine' ); ?>>Tangerine</option>
								<option value="Taprom" <?php selected($RPP_Font_Style, 'Taprom' ); ?>>Taprom</option>
								<option value="Telex" <?php selected($RPP_Font_Style, 'Telex' ); ?>>Telex</option>
								<option value="Tenor Sans" <?php selected($RPP_Font_Style, 'Tenor Sans' ); ?>>Tenor Sans</option>
								<option value="The Girl Next Door" <?php selected($RPP_Font_Style, 'The Girl Next Door' ); ?>>The Girl Next Door</option>
								<option value="Tienne" <?php selected($RPP_Font_Style, 'Tienne' ); ?>>Tienne</option>
								<option value="Tinos" <?php selected($RPP_Font_Style, 'Tinos' ); ?>>Tinos</option>
								<option value="Titan One" <?php selected($RPP_Font_Style, 'Titan One' ); ?>>Titan One</option>
								<option value="Trade Winds" <?php selected($RPP_Font_Style, 'Trade Winds' ); ?> >Trade Winds</option>
								<option value="Trocchi" <?php selected($RPP_Font_Style, 'Trocchi' ); ?>>Trocchi</option>
								<option value="Trochut" <?php selected($RPP_Font_Style, 'Trochut' ); ?>>Trochut</option>
								<option value="Trykker" <?php selected($RPP_Font_Style, 'Trykker' ); ?>>Trykker</option>
								<option value="Tulpen One" <?php selected($RPP_Font_Style, 'Tulpen One' ); ?>>Tulpen One</option>
								<option value="Ubuntu" <?php selected($RPP_Font_Style, 'Ubuntu' ); ?>>Ubuntu</option>
								<option value="Ubuntu Condensed" <?php selected($RPP_Font_Style, 'Ubuntu Condensed' ); ?>>Ubuntu Condensed</option>
								<option value="Ubuntu Mono" <?php selected($RPP_Font_Style, 'Ubuntu Mono' ); ?>>Ubuntu Mono</option>
								<option value="Ultra" <?php selected($RPP_Font_Style, 'Ultra' ); ?>>Ultra</option>
								<option value="Uncial Antiqua" <?php selected($RPP_Font_Style, 'Uncial Antiqua' ); ?>>Uncial Antiqua</option>
								<option value="UnifrakturCook" <?php selected($RPP_Font_Style, 'UnifrakturCook' ); ?>>UnifrakturCook</option>
								<option value="UnifrakturMaguntia" <?php selected($RPP_Font_Style, 'UnifrakturMaguntia' ); ?>>UnifrakturMaguntia</option>
								<option value="Unkempt" <?php selected($RPP_Font_Style, 'Unkempt' ); ?>>Unkempt</option>
								<option value="Unlock" <?php selected($RPP_Font_Style, 'Unlock' ); ?>>Unlock</option>
								<option value="Unna" <?php selected($RPP_Font_Style, 'Unna' ); ?>>Unna</option>
								<option value="VT323" <?php selected($RPP_Font_Style, 'VT323' ); ?>>VT323</option>
								<option value="Varela" <?php selected($RPP_Font_Style, 'Varela' ); ?>>Varela</option>
								<option value="Varela Round" <?php selected($RPP_Font_Style, 'Varela Round' ); ?>>Varela Round</option>
								<option value="Vast Shadow" <?php selected($RPP_Font_Style, 'Vast Shadow' ); ?>>Vast Shadow</option>
								<option value="Vibur" <?php selected($RPP_Font_Style, 'Vibur' ); ?>>Vibur</option>
								<option value="Vidaloka" <?php selected($RPP_Font_Style, 'Vidaloka' ); ?>>Vidaloka</option>
								<option value="Viga" <?php selected($RPP_Font_Style, 'Viga' ); ?>>Viga</option>
								<option value="Voces" <?php selected($RPP_Font_Style, 'Voces' ); ?>>Voces</option>
								<option value="Volkhov" <?php selected($RPP_Font_Style, 'Volkhov' ); ?>>Volkhov</option>
								<option value="Vollkorn" <?php selected($RPP_Font_Style, 'Vollkorn' ); ?>>Vollkorn</option>
								<option value="Voltaire" <?php selected($RPP_Font_Style, 'Voltaire' ); ?>>Voltaire</option>
								<option value="Waiting for the Sunrise" <?php selected($RPP_Font_Style, 'Waiting for the Sunrise' ); ?>>Waiting for the Sunrise</option>
								<option value="Wallpoet" <?php selected($RPP_Font_Style, 'Wallpoet' ); ?>>Wallpoet</option>
								<option value="Walter Turncoat" <?php selected($RPP_Font_Style, 'Walter Turncoat' ); ?>>Walter Turncoat</option>
								<option value="Wellfleet" <?php selected($RPP_Font_Style, 'Wellfleet' ); ?>>Wellfleet</option>
								<option value="Wire One" <?php selected($RPP_Font_Style, 'Wire One' ); ?>>Wire One</option>
								<option value="Yanone Kaffeesatz" <?php selected($RPP_Font_Style, 'Yanone Kaffeesatz' ); ?>>Yanone Kaffeesatz</option>
								<option value="Yellowtail" <?php selected($RPP_Font_Style, 'Yellowtail' ); ?>>Yellowtail</option>
								<option value="Yeseva One" <?php selected($RPP_Font_Style, 'Yeseva One' ); ?>>Yeseva One</option>
								<option value="Yesteryear" <?php selected($RPP_Font_Style, 'Yesteryear' ); ?>>Yesteryear</option>
								<option value="Zeyada" <?php selected($RPP_Font_Style, 'Zeyada' ); ?>>Zeyada</option>
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
					<th scope="row" ><?php _e('Enable Input Box Icon?','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="radio-span" style="border-bottom:none;">
					<td>
						<span>
							<input type="radio" name="enable_inputbox_icon" value="yes" id="enable_inputbox_icon1" <?php if($enable_inputbox_icon=="yes")echo "checked"; ?> />&nbsp;<?php _e('Yes','WEBLIZAR_ACL')?><br>
						</span>
						<span>	
							<input type="radio" name="enable_inputbox_icon" value="no" id="enable_inputbox_icon2" <?php if($enable_inputbox_icon=="no")echo "checked"; ?> />&nbsp;<?php _e('No','WEBLIZAR_ACL')?><br>
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
					<th scope="row" ><?php _e('Icon For user Input Box','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="" style="border-bottom:none;">
					<td>
						<!-- Modal -->
						<div class="col-md-9">
						<div class="input-group">
								<input data-placement="bottomRight" class="form-control icp icp-auto" type="text" id="user-input-icon" name="user-input-icon" value="<?php echo $user_input_icon; ?>"/>
								<span class="input-group-addon"></span>
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
					<th scope="row" ><?php _e('Icon For Password Input Box','WEBLIZAR_ACL')?></th>
					<td></td>
				</tr>
				<tr class="" style="border-bottom:none;">
					<td>
						<!-- Modal -->
						<div class="col-md-9">
						<div class="input-group">
								<input data-placement="bottomRight" class="form-control icp icp-auto" type="text" id="password-input-icon" name="password-input-icon" value="<?php echo $password_input_icon; ?>"/>
								<span class="input-group-addon"></span>
						</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<button data-dialog3="somedialog3" class="dialog-button3" style="display:none">Open Dialog</button>
	<div id="somedialog3" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php _e('Text and Color ','WEBLIZAR_ACL')?></strong><?php _e('Setting Save Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button3"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
			</div>
		</div>
	</div>

	<button data-dialog9="somedialog9" class="dialog-button9" style="display:none">Open Dialog</button>
	<div id="somedialog9" class="dialog" style="position: fixed; z-index: 9999;">
		<div class="dialog__overlay"></div>
		<div class="dialog__content">
			<div class="morph-shape" data-morph-open="M33,0h41c0,0,0,9.871,0,29.871C74,49.871,74,60,74,60H32.666h-0.125H6c0,0,0-10,0-30S6,0,6,0H33" data-morph-close="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33">
				<svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
					<path d="M33,0h41c0,0-5,9.871-5,29.871C69,49.871,74,60,74,60H32.666h-0.125H6c0,0-5-10-5-30S6,0,6,0H33"></path>
				</svg>
			</div>
			<div class="dialog-inner">
				<h2><strong><?php _e('Text and Color ','WEBLIZAR_ACL')?></strong><?php _e('Setting Reset Successfully','WEBLIZAR_ACL')?></h2><div><button class="action dialog-button-close" data-dialog-close id="dialog-close-button9"><?php _e('Close','WEBLIZAR_ACL')?></button></div>
			</div>
		</div>
	</div>
	
	<div class="panel panel-primary save-button-block" >
		<div class="panel-body">
			<div class="pull-left">
				<button type="button" onclick="return Custom_login_text('textandcolorSave', '');" class="btn btn-info btn-lg"><?php _e('Save Changes','WEBLIZAR_ACL')?></button>
			</div>
			<div class="pull-right">
				<button type="button" onclick="return Custom_login_text('textandcolorReset', '');" class="btn btn-primary btn-lg"><?php _e('Reset Default','WEBLIZAR_ACL')?></button>
			</div>
		</div>
	</div>
</div>
<!-- /row -->
<script>
function Custom_login_text(Action, id){
	if(Action == "textandcolorSave") {
		(function() {
			var dlgtrigger = document.querySelector( '[data-dialog3]' ),
				somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog3' ) ),
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

		var heading_font_color = jQuery("#headline-font-color").val();
		var input_font_color = jQuery("#input-font-color").val();
		var link_color = jQuery("#link-color").val();
		var button_color = jQuery("#button-color").val();
		
		var heading_font_size = jQuery("#headline-size-text-box").val();
		var input_font_size = jQuery("#input-size-text-box").val();
		var link_size = jQuery("#link-size-text-box").val();
		var button_font_size = jQuery("#button-size-text-box").val();
		
		if (document.getElementById('enable_Link_shadow1').checked) {
			var enable_link_shadow = document.getElementById('enable_Link_shadow1').value;
		}
		else{
			var enable_link_shadow = document.getElementById('enable_Link_shadow2').value;
		}
		var link_shadow_color = jQuery("#link-shadow-color").val();
		
		var heading_font_style = jQuery( "#headline_font_style option:selected" ).val();
		var input_font_style = jQuery( "#input_font_style option:selected" ).val();
		var link_font_style = jQuery( "#link_font_style option:selected" ).val();
		var button_font_style = jQuery( "#button_font_style option:selected" ).val();
		
		if (document.getElementById('enable_inputbox_icon1').checked) {
			var enable_inputbox_icon = document.getElementById('enable_inputbox_icon1').value;
		}
		else{
			var enable_inputbox_icon = document.getElementById('enable_inputbox_icon2').value;
		}
		var user_input_icon = jQuery("#user-input-icon").val();
		var password_input_icon = jQuery("#password-input-icon").val();
		var PostData = "Action=" + Action + "&heading_font_color=" + heading_font_color + "&input_font_color=" + input_font_color + "&link_color=" + link_color + "&button_color=" + button_color  + "&heading_font_size=" + heading_font_size + "&input_font_size=" + input_font_size + "&link_size=" + link_size + "&button_font_size=" + button_font_size + "&enable_link_shadow=" + enable_link_shadow + "&link_shadow_color=" + link_shadow_color + "&heading_font_style=" + heading_font_style + "&input_font_style=" + input_font_style + "&link_font_style=" + link_font_style + "&button_font_style=" + button_font_style + "&enable_inputbox_icon=" + enable_inputbox_icon + "&user_input_icon=" + user_input_icon + "&password_input_icon=" + password_input_icon;
		jQuery.ajax({
			dataType : 'html',
			type: 'POST',
			url : location.href,
			cache: false,
			data : PostData,
			complete : function() {  },
			success: function(data) {
				// Save message box open
				jQuery(".dialog-button3").click();
				// Function to close message box
				setTimeout(function(){
					jQuery("#dialog-close-button3").click();
				}, 1000);
			}
		});
	}
	// Save Message box Close On Mouse Hover
	document.getElementById('dialog-close-button3').disabled = false;
	 jQuery('#dialog-close-button3').hover(function () {
		   jQuery("#dialog-close-button3").click();
		   document.getElementById('dialog-close-button3').disabled = true; 
		 }
	 );
	 
	// Reset Message box Close On Mouse Hover
	document.getElementById('dialog-close-button9').disabled = false;
	 jQuery('#dialog-close-button9').hover(function () {
		   jQuery("#dialog-close-button9").click();
		   document.getElementById('dialog-close-button9').disabled = true; 
		 }
	 );
	 
	if(Action == "textandcolorReset") {
		
		(function() {
			var dlgtrigger = document.querySelector( '[data-dialog9]' ),
				somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog9' ) ),
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
				 
				 //Headline Font Style
				 jQuery("#headline_font_style").val('Arial');
				//Input Font Style
				 jQuery("#input_font_style").val('Arial');
				//Link Font Style 
				 jQuery("#link_font_style").val('Arial');	
				//Button Font Style 
				 jQuery("#button_font_style").val('Arial');
				//	Heading Font Color
				 jQuery("#td-headline-font-color a.wp-color-result").closest("a").css({"background-color": "#ffffff"});
				//	Input Font Color
				 jQuery("#td-input-font-color a.wp-color-result").closest("a").css({"background-color": "#000000"});
				//Link Font Color
				 jQuery("#td-link-font-color a.wp-color-result").closest("a").css({"background-color": "#ffffff"});
				//	Button Font Color
				 jQuery("#td-button-font-color a.wp-color-result").closest("a").css({"background-color": "#dd3333"});

				jQuery( "#button-size-slider" ).slider("value",14 );
				jQuery( "#headline-size-text-box" ).val( jQuery( "#button-size-slider" ).slider( "value") );
				
				jQuery( "#button-size-slider2" ).slider("value",18 );
				jQuery( "#input-size-text-box" ).val( jQuery( "#button-size-slider2" ).slider( "value") );
				
				jQuery( "#button-size-slider3" ).slider("value",14 );
				jQuery( "#link-size-text-box" ).val( jQuery( "#button-size-slider3" ).slider( "value") );
				
				jQuery( "#button-size-slider7" ).slider("value",14 );
				jQuery( "#button-size-text-box" ).val( jQuery( "#button-size-slider7" ).slider( "value") );
				
				document.getElementById("user-input-icon").value ='fa-user';
				document.getElementById("password-input-icon").value ='fa-key';
				// Reset message box open
				jQuery(".dialog-button9").click();
				// Function to close message box
				setTimeout(function(){
					jQuery("#dialog-close-button9").click();
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
	if($Action == "textandcolorSave"){
		$heading_font_color = $_POST['heading_font_color'];
		$input_font_color = $_POST['input_font_color'];
		$link_color = $_POST['link_color'];
		$button_color = $_POST['button_color'];
		$heading_font_size = $_POST['heading_font_size'];
		$input_font_size = $_POST['input_font_size'];
		$link_size = $_POST['link_size'];
		$button_font_size = $_POST['button_font_size'];
		$enable_link_shadow = $_POST['enable_link_shadow'];
		$link_shadow_color = $_POST['link_shadow_color'];
		$heading_font_style = $_POST['heading_font_style'];
		$input_font_style = $_POST['input_font_style'];
		$link_font_style = $_POST['link_font_style'];
		$button_font_style = $_POST['button_font_style'];
		$enable_inputbox_icon = $_POST['enable_inputbox_icon'];
		$user_input_icon = $_POST['user_input_icon'];
		$password_input_icon = $_POST['password_input_icon'];

		// Save Values in Option Table
		$text_and_color_page= serialize(array(
			'heading_font_color'=>$heading_font_color,
			'input_font_color'=>$input_font_color,
			'link_color'=>$link_color,
			'button_color'=>$button_color,
			'heading_font_size'=>$heading_font_size,
			'input_font_size'=>$input_font_size,
			'link_size'=>$link_size,
			'button_font_size'=>$button_font_size,
			'enable_link_shadow'=>$enable_link_shadow,
			'link_shadow_color'=>$link_shadow_color,
			'heading_font_style'=>$heading_font_style,
			'input_font_style'=>$input_font_style,
			'link_font_style'=>$link_font_style,
			'button_font_style'=>$button_font_style,
			'enable_inputbox_icon'=>$enable_inputbox_icon,
			'user_input_icon'=>$user_input_icon,
			'password_input_icon'=>$password_input_icon
		));
		update_option('Admin_custome_login_text', $text_and_color_page);
	}

	if($Action == "textandcolorReset") {
		$text_and_color_page= serialize(array(
			'heading_font_color'=>'#ffffff',
			'input_font_color'=>'#000000',
			'link_color'=>'#ffffff',
			'button_color'=>'#dd3333',
			'heading_font_size'=>'14',
			'input_font_size'=>'18',
			'link_size'=>'14',
			'button_font_size'=>'14',
			'enable_link_shadow'=>'yes',
			'link_shadow_color'=>'#ffffff',
			'heading_font_style'=>'Arial',
			'input_font_style'=>'Arial',
			'link_font_style'=>'Arial',
			'button_font_style'=>'Arial',
			'enable_inputbox_icon'=>'yes',
			'user_input_icon'=>'fa-user',
			'password_input_icon'=>'fa-key'
		));
		update_option('Admin_custome_login_text', $text_and_color_page);
	}
}
?>