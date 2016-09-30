<?php 
$top_page = unserialize(get_option('Admin_custome_login_top'));
$top_slideshow_no = $top_page['top_slideshow_no'];
$Slidshow_image = unserialize(get_option('Admin_custome_login_Slidshow'));
	$Slidshow_image_1=$Slidshow_image['Slidshow_image_1'];
	$Slidshow_image_2=$Slidshow_image['Slidshow_image_2'];
	$Slidshow_image_3=$Slidshow_image['Slidshow_image_3'];
	$Slidshow_image_4=$Slidshow_image['Slidshow_image_4'];
	$Slidshow_image_5=$Slidshow_image['Slidshow_image_5'];
	$Slidshow_image_6=$Slidshow_image['Slidshow_image_6'];
	
	$seconds=$top_slideshow_no*6;
	//echo $seconds;
?>
<style>
.cb-slideshow,
.cb-slideshow:after {
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0px;
    left: 0px;
    z-index: 0;
}

.cb-slideshow li span {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    color: transparent;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: none;
    opacity: 0;
    z-index: 0;
	-webkit-backface-visibility: hidden;
    -webkit-animation: imageAnimation <?php echo $seconds; ?>s linear infinite 0s;
    -moz-animation: imageAnimation <?php echo $seconds; ?>s linear infinite 0s;
    -o-animation: imageAnimation <?php echo $seconds; ?>s linear infinite 0s;
    -ms-animation: imageAnimation <?php echo $seconds; ?>s linear infinite 0s;
    animation: imageAnimation <?php echo $seconds; ?>s linear infinite 0s;
}


.cb-slideshow li:nth-child(1) span { background-image: url('<?php echo $Slidshow_image_1 ; ?>') }
.cb-slideshow li:nth-child(2) span {
    background-image: url('<?php echo $Slidshow_image_2 ; ?>');
    -webkit-animation-delay: 6s;
    -moz-animation-delay: 6s;
    -o-animation-delay: 6s;
    -ms-animation-delay: 6s;
    animation-delay: 6s;
}
.cb-slideshow li:nth-child(3) span {
    background-image: url('<?php echo $Slidshow_image_3 ; ?>');
    -webkit-animation-delay: 12s;
    -moz-animation-delay: 12s;
    -o-animation-delay: 12s;
    -ms-animation-delay: 12s;
    animation-delay: 12s;
}
.cb-slideshow li:nth-child(4) span {
    background-image: url('<?php echo $Slidshow_image_4 ; ?>');
    -webkit-animation-delay: 18s;
    -moz-animation-delay: 18s;
    -o-animation-delay: 18s;
    -ms-animation-delay: 18s;
    animation-delay: 18s;
}
.cb-slideshow li:nth-child(5) span {
    background-image: url('<?php echo $Slidshow_image_5 ; ?>');
    -webkit-animation-delay: 24s;
    -moz-animation-delay: 24s;
    -o-animation-delay: 24s;
    -ms-animation-delay: 24s;
    animation-delay: 24s;
}
.cb-slideshow li:nth-child(6) span {
    background-image: url('<?php echo $Slidshow_image_6 ; ?>');
    -webkit-animation-delay: 30s;
    -moz-animation-delay: 30s;
    -o-animation-delay: 30s;
    -ms-animation-delay: 30s;
    animation-delay: 30s;
}

/* Animation for the slideshow images */
<?php if ($top_slideshow_no == "2") {?>
@keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	70% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-webkit-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	70% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	70% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	70% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	70% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
<?php } else if ($top_slideshow_no == "3") { ?>
@keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-webkit-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	50% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
<?php } else if ($top_slideshow_no == "4") { ?>
@keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	40% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-webkit-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	40% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	40% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	40% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	40% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
<?php } else if ($top_slideshow_no >= "5") { ?>
@keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-webkit-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-moz-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-o-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
@-ms-keyframes imageAnimation { 
	0% {
	    opacity: 0;
	    animation-timing-function: ease-in;
	}
	8% {
	    opacity: 1;
	    transform: scale(1.05);
	    animation-timing-function: ease-out;
	}
	17% {
	    opacity: 1;
	    transform: scale(1.1) rotate(3deg);
	}
	25% {
	    opacity: 0;
	    transform: scale(1.1) rotate(3deg);
	}
	100% { opacity: 0 }
}
<?php } ?>
/* Show at least something when animations not supported */
.no-cssanimations .cb-slideshow li span{
	opacity: 1;
}

</style>