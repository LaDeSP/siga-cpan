<!doctype html>
<html lang="pt-br">
  <head>
      <title>Editar Dados</title>
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
      <?php 
      //inclui o arquivo de topo na pagina
        include('topo.php'); 
      // inclui o arquivo de menu responsivo no sistema
        include('menu.php'); ?>
        <!-- Conteudo do sistema   -->
        <section> 
            <div class="row-fluid">
                    <div id="conteudo">
                            <div class="span12">
                                <form id="curso" class="form-horizontal" method="POST" action="index.php?pg=AtualizarDados">
                                        <fieldset>

                                        <!-- Text input-->
                                        <div class="control-group">
                                          <label class="control-label" for="nome">Nome</label>
                                          <div class="controls">
                                              <input id="nome" name="nome" value="<?php echo "$valor->usu_nome";?>" placeholder="" class="input-large" required="" type="text">
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                          <label class="control-label" for="email">E-mail</label>
                                          <div class="controls">
                                            <input id="email" name="email" placeholder="" class="input-large" value="<?php echo $valor->usu_email; ?>" required="" type="text">
                                            
                                          </div>
                                        </div>
                                        
                                          <!-- Text input-->
                                        <div class="control-group">
                                          <label class="control-label" for="siape">SIAPE</label>
                                          <div class="controls">
                                            <input id="siape" name="siape" placeholder="" class="input-large" value="<?php echo $valor->usu_siape; ?>" required="" type="text">
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                           <div class="controls">
                                            <input id="id" name="id" class="input-large" type="hidden" value="<?php echo $valor->id; ?>">
                                           </div>
                                        </div>



                                        <!-- Button -->
                                        <div class="control-group">
                                          <label class="control-label" for="atualizarDados"></label>
                                          <div class="controls">
                                            <button id="AtualizarDados" name="atualizarDados" class="btn btn-primary">Atualizar Dados</button>
                                          </div>
                                        </div>

                                        </fieldset>
                                </form>
                                                                                                  
                            </div>
                    </div>
            </div>
        </section>
        
        
       <!-- Fim do Conteudo do sistema   --> 
       <?php
       //inclui o arquivo de rodape no sistema
       include('rodape.php');?>
          
   
      
    </div><!-- fim da div container -->

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/validaformcurso.js"></script>

  </body>
</html>
