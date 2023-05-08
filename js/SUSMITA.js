function MODAL_TRANSFFER_BUY(SRC_BTN){
	jQuery(document).ready(function($){
		$(document).ready(function(){				
				
				var pid 	= $(SRC_BTN).data('serial');
								
				
				$('#BUY_FRAME').attr('src', 'BUYPLANT.php?pid=' + pid);
				$('#BUYPLANT').modal('show'); 		
				
			   
			});
	});			
}