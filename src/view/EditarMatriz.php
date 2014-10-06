<!doctype html>
<html lang="pt-br">
  <head>
      <title>Editar Matriz</title>
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
                                <form id="matriz" class="form-horizontal" method="post" action="index.php?pg=AtualizarMatriz">
                                <fieldset>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="numero">Numero da Matriz</label>
                                  <div class="controls">
                                      <input id="numero" name="numero" placeholder="Numero" value="<?php echo $valor->mat_numero ?>" class="input-large" type="text">
                                   
                                  </div>
                                </div>                      
                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="ano">Ano de Aprovação</label>
                                  <div class="controls">
                                    <input id="ano" name="ano" value="<?php echo $valor->mat_ano ?>" placeholder="" class="input-large"  type="text">
                                    
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <div class="controls">
                                      <input id="curso" name="curso" value="<?php echo $valor->mat_curso; ?>" placeholder="" class="input-large" required="" type="hidden">
                                    <p class="help-block"></p>
                                  </div>
                                </div>
                                
                                <!-- Text input-->
                                <div class="control-group">
                                  <div class="controls">
                                      <input id="id" name="id" value="<?php echo $valor->id; ?>" placeholder="" class="input-large" required="" type="hidden">
                                    <p class="help-block"></p>
                                  </div>
                                </div>
                                
                                <!-- Multiple Radios (inline) -->
                                <div class="control-group">
                                  <label class="control-label" for="status">Status</label>
                                  <div class="controls">
                                    <label class="radio inline" for="status-0">
                                        <?php if($valor->mat_status == 1){
                                        echo '
                                            <input name="status" id="status-0" value="1" checked="checked" type="radio">
                                              Ativado
                                            </label>
                                            <label class="radio inline" for="status-1">
                                              <input name="status" id="status-1" value="0" type="radio">
                                              Desativado
                                            </label>';            
                                        }else{
                                            echo '
                                            <input name="status" id="status-0" value="1" type="radio">
                                              Ativado
                                            </label>
                                            <label class="radio inline" for="status-1">
                                              <input name="status" id="status-1" value="0" checked="checked" type="radio">
                                              Desativado
                                            </label>';  
                                        }    
                                        ?>
                                     
                                      
                                  </div>
                                </div>

                                <!-- Button -->
                                <div class="control-group">
                                  <label class="control-label" for="salvar"></label>
                                  <div class="controls">
                                    <button id="salvar" name="salvar" class="btn btn-primary">Salvar</button>
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
    <script type="text/javascript" src="js/validaformmatriz.js"></script>

  </body>
</html>


