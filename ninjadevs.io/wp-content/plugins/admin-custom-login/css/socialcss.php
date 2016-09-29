<?php $Social_page = unserialize(get_option('Admin_custome_login_Social'));
	$social_icon_size=$Social_page['social_icon_size'];
	$social_icon_layout=$Social_page['social_icon_layout'];
	$social_icon_color=$Social_page['social_icon_color'];
	$social_icon_color_onhover=$Social_page['social_icon_color_onhover'];
	$social_icon_bg=$Social_page['social_icon_bg'];
	$social_icon_bg_onhover=$Social_page['social_icon_bg_onhover'];
	$social_facebook_link=$Social_page['social_facebook_link'];
	$social_twitter_link=$Social_page['social_twitter_link'];
	$social_linkedin_link=$Social_page['social_linkedin_link'];
	$social_google_plus_link=$Social_page['social_google_plus_link'];
	$social_pinterest_link=$Social_page['social_pinterest_link'];
	$social_digg_link=$Social_page['social_digg_link'];
	$social_youtube_link=$Social_page['social_digg_link'];
	$social_flickr_link=$Social_page['social_flickr_link'];
	$social_tumblr_link=$Social_page['social_tumblr_link'];
	$social_vkontakte_link=$Social_page['social_vkontakte_link'];
	$social_skype_link=$Social_page['social_skype_link'];
	$social_instagram_link=$Social_page['social_instagram_link'];
	
	$login_page = unserialize(get_option('Admin_custome_login_login'));

	if($social_icon_size=="large")
	{
?>
		<style>
			.divsocial{
				text-align: <?php echo $login_page['login_form_float']; ?>;
				padding:20px;
				<?php if($login_page['login_form_float'] == "left") {?>
						padding-left : 0px;
				<?php }?>
				<?php if($login_page['login_form_float'] == "right") {?>
					padding-right: 0px;
					padding-top:42px;
				<?php }?>
			}

			.icon-button {
				background-color: <?php echo $social_icon_bg;?>;
				border-radius: <?php if ($social_icon_layout=="rectangle"){echo '0rem';} else {echo '2rem';}?>;
				cursor: pointer;
				display: inline-block;
				font-size: 22px;
				height: 50px;
				line-height: 50px;
				margin: 0 4px;
				position: relative;
				text-align: center;
				-webkit-user-select: none;
				   -moz-user-select: none;
					-ms-user-select: none;
						user-select: none;
				width: 50px;
				text-decoration: none;
			}

			.icon-button span {
				border-radius: 0;
				display: block;
				height: 0;
				left: 50%;
				margin: 0;
				position: absolute;
				top: 50%;
				-webkit-transition: all 0.3s;
				   -moz-transition: all 0.3s;
					 -o-transition: all 0.3s;
						transition: all 0.3s;
				width: 0;
			}
			.icon-button:hover span {
				width: 50px;
				height: 50px;
				border-radius: <?php if ($social_icon_layout=="rectangle"){echo '0rem';} else {echo '2rem';}?>;
				margin: -25px;
			}
			.icon-button span {
				background-color: <?php echo $social_icon_bg_onhover;?>
			}

			.icon-button i {
				background: none;
				color: white;
				height: 50px;
				left: 0;
				line-height: 48px;
				position: absolute;
				top: 0;
				-webkit-transition: all 0.3s;
				   -moz-transition: all 0.3s;
					 -o-transition: all 0.3s;
						transition: all 0.3s;
				width: 50px;
				z-index: 10;
			}
			.icon-button .fa{
				color: <?php echo $social_icon_color;?>;
			}

			.icon-button:hover .fa{
				color: <?php echo $social_icon_color_onhover;?>;
			}
		</style>
<?php } 	
	else if($social_icon_size=="mediam") 
	{ ?>
		<style>
			.divsocial{
				text-align: <?php echo $login_page['login_form_float']; ?>;
				padding:20px;
				<?php if($login_page['login_form_float'] == "left") {?>
						padding-left : 0px;
				<?php }?>
				<?php if($login_page['login_form_float'] == "right") {?>
					padding-right: 0px;
					padding-top:42px;
				<?php }?>
			}	

			.icon-button {
				background-color: <?php echo $social_icon_bg;?>;
				border-radius: <?php if ($social_icon_layout=="rectangle"){echo '0rem';} else {echo '2rem';}?>;
				cursor: pointer;
				display: inline-block;
				font-size: 18px;
				height: 42px;
				line-height: 42px;
				margin: 0 2px;
				position: relative;
				text-align: center;
				-webkit-user-select: none;
				   -moz-user-select: none;
					-ms-user-select: none;
						user-select: none;
				width: 42px;
				text-decoration: none;
			}

			.icon-button span {
				border-radius: 0;
				display: block;
				height: 0;
				left: 50%;
				margin: 0;
				position: absolute;
				top: 50%;
				-webkit-transition: all 0.3s;
				   -moz-transition: all 0.3s;
					 -o-transition: all 0.3s;
						transition: all 0.3s;
				width: 0;
			}
			.icon-button:hover span {
				width: 42px;
				height: 42px;
				border-radius: <?php if ($social_icon_layout=="rectangle"){echo '0rem';} else {echo '2rem';}?>;
				margin: -21px;
			}
			.icon-button span {
				background-color: <?php echo $social_icon_bg_onhover;?>
			}

			.icon-button i {
				background: none;
				color: white;
				height: 42px;
				left: 0;
				line-height: 40px;
				position: absolute;
				top: 0;
				-webkit-transition: all 0.3s;
				   -moz-transition: all 0.3s;
					 -o-transition: all 0.3s;
						transition: all 0.3s;
				width: 42px;
				z-index: 10;
			}
			.icon-button .fa{
				color: <?php echo $social_icon_color;?>;
			}

			.icon-button:hover .fa{
				color: <?php echo $social_icon_color_onhover;?>;
			}
		</style>
<?php }
	else 
	{ ?>
		<style>
			.divsocial{
				text-align: <?php echo $login_page['login_form_float']; ?>;
				padding:20px;
				<?php if($login_page['login_form_float'] == "left") {?>
						padding-left : 0px;
				<?php }?>
				<?php if($login_page['login_form_float'] == "right") {?>
					padding-right: 0px;
					padding-top:42px;
				<?php }?>
			}

			.icon-button {
				background-color: <?php echo $social_icon_bg;?>;
				border-radius: <?php if ($social_icon_layout=="rectangle"){echo '0rem';} else {echo '2rem';}?>;
				cursor: pointer;
				display: inline-block;
				font-size: 14px;
				height: 28px;
				line-height: 28px;
				margin: 0 2px;
				position: relative;
				text-align: center;
				-webkit-user-select: none;
				   -moz-user-select: none;
					-ms-user-select: none;
						user-select: none;
				width: 28px;
				text-decoration: none;
			}

			.icon-button span {
				border-radius: 0;
				display: block;
				height: 0;
				left: 50%;
				margin: 0;
				position: absolute;
				top: 50%;
				-webkit-transition: all 0.3s;
				   -moz-transition: all 0.3s;
					 -o-transition: all 0.3s;
						transition: all 0.3s;
				width: 0;
			}
			.icon-button:hover span {
				width: 28px;
				height: 28px;
				border-radius: <?php if ($social_icon_layout=="rectangle"){echo '0rem';} else {echo '2rem';}?>;
				margin: -14px;
			}
			.icon-button span {
				background-color: <?php echo $social_icon_bg_onhover;?>
			}

			.icon-button i {
				background: none;
				color: white;
				height: 28px;
				left: 0;
				line-height: 30px;
				position: absolute;
				top: 0;
				-webkit-transition: all 0.3s;
				   -moz-transition: all 0.3s;
					 -o-transition: all 0.3s;
						transition: all 0.3s;
				width: 28px;
				z-index: 10;
			}
			.icon-button .fa{
				color: <?php echo $social_icon_color;?>;
			}

			.icon-button:hover .fa{
				color: <?php echo $social_icon_color_onhover;?>;
			}
		</style>
<?php }
?>