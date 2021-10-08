jQuery(document).ready(function($) {	
	jQuery('#submit_inv').on('click', function() {
		var mobile = $("#mobile").val(); 
		var name = $("#name").val(); 
		var email = $("#email").val();
		jQuery.ajax({
			url : ajax_object.ajaxurl,
			type : 'post',
			data : {
				action : 'ajax_action_investor',
				name : name,
				email : email,
				mobile : mobile
			},
			success : function( response ) {
				jQuery('#investor_img').attr("src","https://www.lifeonline.co/shriram-properties/wp-content/themes/shriram-prop/images-investors/"+response['name']+""+response['mobile']+".jpg");
				jQuery('#append-img').append('<a download="'+response["name"]+''+response["mobile"]+'.jpg" href="https://www.lifeonline.co/shriram-properties/wp-content/themes/shriram-prop/images-investors/'+response["name"]+''+response["mobile"]+'.jpg" title="ImageName">Click here to download!</a>');
				return;			
			},
			error : function( response ) {
				jQuery('#append-img').append('<p>Something went wrong Please try again!</p>');
				return;			
			}
		});
	});
});