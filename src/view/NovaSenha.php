<!DOCTYPE html>

<html>
    <head>
        <title>Alterar Senha</title>
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
            <?php include "menu.php"; ?>
          
           
           <!------------------------------------------Inicio do Conteudo------------------------------------->
		<section>
			<div id="conteudo">
				<div class="row-fluid">
					<div class="span12">
						<div class="titulo">
                                                    <p><b>Alterar Senha</b></p>
						</div>
						<div class="bordas">
                                                    <div></br></br>
                                                            <form class="form-horizontal" method="POST" action="index.php?pg=AtualizarSenha" >
                                                                <fieldset>
                                                                    
                                                                <!-- Text input-->
                                                                <div class="control-group">
                                                                  <label class="control-label" for="senhaatual">Senha Atual</label>
                                                                  <div class="controls">
                                                                      <input id="senhaatual" name="senhaatual" placeholder="" class="input-large" required="" type="password">
                                                                    <p class="help-block">Digite a Senha Atual</p>
                                                                  </div>
                                                                </div>   

                                                               
                                                                <!-- Text input-->
                                                                <div class="control-group">
                                                                  <label class="control-label" for="novasenha">Nova Senha</label>
                                                                  <div class="controls">
                                                                      <input id="novasenha" name="novasenha" placeholder="" class="input-large" required="" type="password">
                                                                    <p class="help-block">Digite a Nova Senha</p>
                                                                  </div>
                                                                </div>
                                                                
                                                                <!-- Text input-->
                                                                <div class="control-group">
                                                                  <label class="control-label" for="novasenha2">Confirmar a Senha</label>
                                                                  <div class="controls">
                                                                      <input id="novasenha" name="novasenha2" placeholder="" class="input-large" required="" type="password">
                                                                    <p class="help-block">Comfirme a Senha</p>
                                                                  </div>
                                                                </div>
                                                                
                                                                <!-- Hidden input-->
                                                                <div class="control-group">
                                                                  <div class="controls">
                                                                      <input id="idusuario" name="idusuario" value="<?php echo $_SESSION['idUsu']; ?>" class="input-large" required="" type="hidden">
                                                                  </div>
                                                                </div>
                                                                
                                                         

                                                                <!-- Button -->
                                                                <div class="control-group">
                                                                  <label class="control-label" for="atualizarsenha"></label>
                                                                  <div class="controls">
                                                                    <button id="atualizarsenha" name="atualizarsenha" class="btn btn-primary">Salvar</button>
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

