/***default js***/
jQuery(document).ready(function($){
	// build a variable to target the #menu div
	var menu = $('.header-menu')	
	// bind a click function to the menu-trigger	
	$('#menu-trigger').click(function(event){		
		// if the menu is visible slide it up
		if ($('.header-menu').is(":visible"))
		{			
			menu.slideUp(300);
			$(this).removeClass("open");
			$(this).addClass(".fa fa-bars");
			$(this).removeClass(".fa fa-times");
			jQuery('#search-trigger').css({'display':'block'});
                        jQuery('body').toggleClass('popup-open');
		}
		// otherwise, slide the menu down
		else
		{
			jQuery('#search-trigger').css({'display':'none'});
			menu.slideDown(400);
			$(this).addClass("open");
			$(this).addClass(".fa fa-times");
			$(this).removeClass(".fa fa-bars");
                        jQuery('body').toggleClass('popup-open');
		}
	});
        if(jQuery('div').hasClass("scrollbar")){
	jQuery('.scrollbar').enscroll({
		showOnHover: false,
		verticalTrackClass: 'track3',
		verticalHandleClass: 'handle3'
	});
	}	
});
jQuery(document).ready(function($){
	// build a variable to target the #menu div
	var serc = $('.header-search')
	// bind a click function to the menu-trigger
	$('#search-trigger').click(function(event){
		// if the menu is visible slide it up
		if ($('.header-search').is(":visible"))		
		{
			serc.slideUp(300);
			jQuery('#menu-trigger').css({'display':'block'});
			$(this).removeClass("open");
			$(this).addClass(".fa fa-search");
			$(this).removeClass(".fa fa-times");
                        jQuery('body').toggleClass('popup-open');
		}
		// otherwise, slide the menu down
		else
		{
			serc.slideDown(400);
			jQuery('#menu-trigger').css({'display':'none'});
			$(this).addClass("open");
			$(this).addClass(".fa fa-times");
			$(this).removeClass(".fa fa-search");
                        jQuery('body').toggleClass('popup-open');
		}
	});
        
        var wheight = (jQuery(window).height()-122);
        jQuery('.home-section').css({'min-height':wheight});
});
jQuery(document).ready(function($) {
	jQuery('.pop-search').keyup(function(e) {
		jQuery('#search_result_form').css('display','block');
		var text = jQuery('.pop-search').val();
		jQuery('#search_text_result').html('Results for "'+text+'"');
		jQuery.ajax({
				type: "POST",
				url: admin_url,
				dataType:"json",
				data: { 
					action: 'medium_search_ajax',
					text: text,
				},
				cache: false,
				success: function(data){					
					if(data['medium_result']==''){
						jQuery('#search_result').hide();
						jQuery('#no_search_result').css('display','block');
					}
					else{
						jQuery('#no_search_result').css('display','none');
						if(data['medium_result']!=''){							
							jQuery('#search_result').css('display','block');
							jQuery('#msg').css('display','none');
							jQuery('#search_result').html(data['medium_result']);	
						}
						else{
							jQuery('#search_result').css('display','none');
							jQuery('#no_search_result').html(data['medium_error']);	
						}
					}
				}
		});
    });
	
});