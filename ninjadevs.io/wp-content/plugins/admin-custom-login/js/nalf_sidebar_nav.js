// js to active the link of option pannel
 jQuery(document).ready(function() {
	
	// menu click	
	jQuery('#side-menu > li > a').click(function(){	
	
		if (jQuery(this).attr('class') != 'active')
		{ 	
	
			jQuery('#side-menu > li > ul.in').collapse("hide");
			jQuery('ul.options_tabs li').removeClass('active');
			
			jQuery(this).parent().addClass('active');
			jQuery('ul.nav li li a').removeClass('active');
			jQuery('ul.nav li  a').removeClass('active');
			
		
			var divid =  jQuery(this).attr("id");	
		
			if(divid.length==1){
			var add="#option-ui-id-"+divid;
			}
			else {
			var add="#option-"+divid;
			
			}
			
			var ulid ="#ui-id-"+divid;
			jQuery('ul.nav li li ').removeClass('active');
			jQuery(ulid).removeClass('deactive');		
			jQuery(ulid).addClass('active');
			
			jQuery('div.ui-tabs-panel').addClass('deactive');
			jQuery(add).removeClass('active');
			jQuery(add).removeClass('deactive');
			
			
		}
	});
	
	// child submenu click
	jQuery('ul.nav li li a').click(function() {	
	
		jQuery('ul.nav li li a').removeClass('active');
		jQuery(this).addClass('active');
		
		var sub_a_id =  jQuery(this).attr("id");
		var option_add="div#option-"+sub_a_id;
		jQuery('div.ui-tabs-panel').addClass('deactive');
		jQuery('div.ui-tabs-panel').removeClass('active');
		jQuery(option_add).removeClass('deactive');		
		jQuery(option_add).addClass('active');
		
		
	});
	
	
	
	
});
 