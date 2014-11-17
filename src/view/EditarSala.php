<!doctype html>
<html lang="pt-br">
  <head>
      <title>Editar Sala </title>
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
                                
                                <form id="sala" class="form-horizontal" method="POST" action="index.php?pg=AtualizarSala">
                                        <fieldset>

                                        <!-- Form Name -->
                                        <legend>Cadastrar Sala</legend>
                                        <div class="alert alert-info"> Caso a sala seja no prédio I utilize o I, a letra do bloco e o número da sala.</br> 
                                        Caso a sala seja no prédio II utilize o I, o número da sala </div>
                                        <!-- Text input-->
                                        <div class="control-group">
                                          <div class="controls">
                                              <input id="idsala" name="idsala"  placeholder="" class="input-small" value="<?php echo $sala->id; ?>" type="text">
                                          </div>
                                        </div>
                                        
                                        <div class="control-group">
                                          <label class="control-label" for="sala">Sala</label>
                                          <div class="controls">
                                            <input id="sala" name="sala" style="text-transform:uppercase;" placeholder="I-1 ou II-F1" class="input-small" value="<?php echo $sala->sal_nome; ?>" type="text">
                                          </div>
                                        </div>

                                        <!-- Select Basic -->
                                        <div class="control-group">
                                          <label class="control-label" for="predio">Prédio</label>
                                          <div class="controls">
                                            <select id="predio" name="predio" class="input-large">
                                            <?php echo '<option value="'.$sala->sal_predio.'">Unidade '.$sala->sal_predio.'</option> '; ?> 
                                              <option value="I">Unidade I</option>
                                              <option value="II">Unidade II</option>
                                              <option value="III">Unidade III</option>
                                            </select>
                                          </div>
                                        </div>
                                        
                                        <!-- Button -->
                                        <div class="control-group">
                                          <label class="control-label" for="atualizarsala"></label>
                                          <div class="controls">
                                            <button id="atualizarsala" name="atualizarsala" class="btn btn-primary">Atualizar</button>
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
    <script type="text/javascript" src="js/validaformsala.js"></script>

  </body>
</html>
