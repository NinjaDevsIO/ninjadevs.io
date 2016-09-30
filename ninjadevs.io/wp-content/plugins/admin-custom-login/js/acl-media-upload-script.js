function weblizar_image(image_id) {
	// media upload js
	var uploadID = ''; /*setup the var*/
	var showImg= '';
	var upload_image_button="#upload-background-"+image_id;
		
	showImg = jQuery(upload_image_button).prev('img');
	uploadID = jQuery(upload_image_button).next('input'); 			/*grab the specific input*/			
	formfield = jQuery('.upload').attr('name');
	tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
	
	window.send_to_editor = function(html)
	{
		imgurl = jQuery(html).attr('src');
		if(!(imgurl)) {
			imgurl = jQuery('img', html).attr('src');
		}
		 showImg.attr('src',imgurl);
		uploadID.val(imgurl); /*assign the value to the input*/
		tb_remove();
	};		
	return false;
}