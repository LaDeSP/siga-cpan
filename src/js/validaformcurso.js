$(document).ready( function() {
	$("#curso").validate({
		// Define as regras
		rules:{
			codigo_curso: {
				required: true
			},
			nome_curso: {
				required: true 
			}
      		},
		// Define as mensagens de erro para cada regra
		messages:{
			codigo_curso:{
				required: "Digite o seu nome",
				
			},
			nome_curso:{
				required: "Digite o nome do Curso",
				
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
