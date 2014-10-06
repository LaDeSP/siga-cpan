$(document).ready( function() {
	$("#usuario").validate({
		// Define as regras
		rules:{
			nome: {
				required: true, minlength: 3
			},
			siape: {
				required: true 
			},
                        email: {
				required: true, email: true
			},
			senha: {
				required: true,
				minlength: 5
			},
			senha2: {
				required: true,
				minlength: 5,
				equalTo: "#senha"
			}
		},
		// Define as mensagens de erro para cada regra
		messages:{
			nome:{
				required: "Digite o seu nome",
				minLength: "O seu nome deve conter, no mínimo, 3 caracteres"
			},
			email:{
				required: "Digite o seu e-mail para contato",
				email: "Digite um e-mail válido"
			},
                        siape: {
				required: "Digite o Numero do Siape"
			},
			senha: {
				required: "Digite a Senha",
				minlength: "A sua senha deve conter, no minimo 5 caracteres"
			},
			senha2: {
				required: "Redigite a Senha",
				minlength: "A sua senha deve conter, no minimo 5 caracteres",
				equalTo: "Senhas Diferentes"
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
// -------------------------------------------------------------------------------------------------------------

