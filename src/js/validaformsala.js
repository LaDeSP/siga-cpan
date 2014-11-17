$(document).ready( function() {
	$("#sala").validate({
		// Define as regras
		rules:{
			sala: {
				required: true
			},
			predio: {
				required: true 
			}
      		},
		// Define as mensagens de erro para cada regra
		messages:{
	
   
		},
                
                errorClass:'error',
                validClass:'success',
                errorElement:'span',
                highlight: function(label) {
                                    $(label).closest('.control-group').removeClass('success').addClass('error');
                            },
                success: function(label) {
                        label
                                .text(' ').addClass('valid')
                                .closest('.control-group').removeClass('error').addClass('success');
                }
        });
        });
