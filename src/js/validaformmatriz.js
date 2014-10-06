$(document).ready( function() {
	$("#matriz").validate({
		// Define as regras
		rules:{
			numero: {
				required: true
			},
			ano: {
				required: true 
			}
      		},
		// Define as mensagens de erro para cada regra
		messages:{
			numero:{
				required: "Digite o numero da Matriz",
				
			},
			ano:{
				required: "Digite o ano da Matriz",
				
			}
   
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
