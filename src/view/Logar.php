<!DOCTYPE html>

<html>
    <head>
        <title>Logar no Sistema</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
  	<link href="css/stilo.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
       <div class="container">
           <?php include "topo.php"; ?>
          
           
           <!------------------------------------------Inicio do Conteudo------------------------------------->
		<section>
			<div id="conteudo">
				<div class="row-fluid">
					<div class="span12">
						<div class="titulo">
                                                    <p><b>Logar no Sistema</b></p>
						</div>
						<div class="bordas">
                                                    <div>
                                                        </br></br>
                                                            <form class="form-horizontal" method="POST" action="index.php?pg=ValidarLogin" >
                                                                <fieldset>

                                                               
                                                                <!-- Text input-->
                                                                <div class="control-group">
                                                                  <label class="control-label" for="login">Login</label>
                                                                  <div class="controls">
                                                                    <input id="login" name="login" placeholder="Login" class="input-large" required="" type="text">
                                                                    <p class="help-block">Digite o Seu Login</p>
                                                                  </div>
                                                                </div>
                                                                
                                                                <!-- Text input-->
                                                                <div class="control-group">
                                                                  <label class="control-label" for="senha">Senha</label>
                                                                  <div class="controls">
                                                                      <input id="senha" name="senha" placeholder="Senha" class="input-large" required="" type="password">
                                                                    <p class="help-block">Digite o Sua Senha</p>
                                                                    <p><a href="index.php?pg=RecuperarSenha">Recuperar Senha</a></p>
                                                                  </div>
                                                                </div>
                                                                

                                                             

                                                                <!-- Button -->
                                                                <div class="control-group">
                                                                  <label class="control-label" for="logar"></label>
                                                                  <div class="controls">
                                                                    <button id="cadastrarCargo" name="logar" class="btn btn-primary">Entrar</button>
                                                                  </div>
                                                                </div>

                                                                </fieldset>
                                                              </form>
							</div>
						</div>
					</div>	
				</div>
			</div> <!-- Fim da linha conteudo -->
		</section><!-- ----------------------------------------fim do Conteudo----------------------------------- -->

           
           <?php include "rodape.php"; ?>
           
           
       </div><!-- fim da div container -->    
        
        
    <!-- Arquivos Javascripts ================================================== -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

