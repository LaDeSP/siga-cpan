<!doctype html>
<html lang="pt-br">
  <head>
      <title>Seja Bem Vindo...</title>
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
                                <form id="curso" class="form-horizontal" method="POST" action="index.php?pg=AtualizarCurso">
                                        <fieldset>

                                        <!-- Text input-->
                                        <div class="control-group">
                                          <label class="control-label" for="codigo_curso">Codigo Curso</label>
                                          <div class="controls">
                                              <input id="codigo_curso" name="codigo_curso" value="<?php echo "$valor->cur_codigo";?>" placeholder="Codigo Curso" class="input-large" required="" type="text">
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                          <label class="control-label" for="nome_curso">Curso</label>
                                          <div class="controls">
                                            <input id="nome_curso" name="nome_curso" placeholder="Nome do Curso" class="input-large" value="<?php echo $valor->cur_nome; ?>" required="" type="text">
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                           <div class="controls">
                                            <input id="id" name="id" class="input-large" type="hidden" value="<?php echo $valor->id; ?>">
                                           </div>
                                        </div>


                                        <!-- Select Basic -->
                                        <div class="control-group">
                                          <label class="control-label" for="qtd_semestre">Quantidade de Semestres</label>
                                          <div class="controls">
                                            <select id="qtd_semestre" name="qtd_semestre" class="input-mini">

                                              <option value="<?php echo $valor->cur_qtd_semestre ?>"><?php echo $valor->cur_qtd_semestre ?></option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                              <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                              <option value="9">9</option>
                                              <option value="10">10</option>

                                            </select>
                                          </div>
                                        </div>

                                        <!-- Button -->
                                        <div class="control-group">
                                          <label class="control-label" for="atualizarCurso"></label>
                                          <div class="controls">
                                            <button id="AtualizarCurso" name="atualizarCurso" class="btn btn-primary">Atualizar Curso</button>
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
