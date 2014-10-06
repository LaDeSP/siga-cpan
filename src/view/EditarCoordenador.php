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
                                <form id="curso" class="form-horizontal" method="POST" action="index.php?pg=AtualizarCoordenador">
                                        <fieldset>

                                        <!-- Text input-->
                                        <div class="control-group">
                                          <label class="control-label" for="nome_curso">Curso</label>
                                          <div class="controls">
                                            <input id="nome_curso" name="nome_curso" placeholder="Nome do Curso" readonly="true" class="input-large" value="<?php echo $coor->cur_nome; ?>" required="" type="text">
                                            
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                           <div class="controls">
                                            <input id="id" name="id" class="input-large" type="hidden"  value="<?php echo $coor->id; ?>">
                                           </div>
                                        </div>


                                        <!-- Select Basic -->
                                        <div class="control-group">
                                          <label class="control-label" for="coordenador">Coordenador</label>
                                          <div class="controls">
                                            <select id="coordenador" name="coordenador" class="input-mini">
                                              <?php foreach ($valor as $va) {
                                                echo '<option value="'.$va->id.'">'.$va->usu_nome.'</option>';
                                                 } ?>
                                              

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
