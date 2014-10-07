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
                                <form id="matriz" class="form-horizontal" method="post" action="index.php?pg=InserirMatriz">
                                <fieldset>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="numero">Numero da Matriz</label>
                                  <div class="controls">
                                    <input id="numero" name="numero" placeholder="Numero" class="input-large" type="text">
                                   
                                  </div>
                                </div>                      
                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="ano">Ano de Aprovação</label>
                                  <div class="controls">
                                    <input id="ano" name="ano" placeholder="" class="input-large"  type="text">
                                    
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <div class="controls">
                                      <input id="curso" name="curso" value="<?php echo $curso; ?>" placeholder="" class="input-large" required="" type="hidden">
                                    <p class="help-block"></p>
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
                                
                                 <table class="table">
                                    <tr>
                                        <th>Numero da Matriz</th>
                                        <th>Ano Aprovado</th>
                                        <th>Status</th>
                                        <th>Editar</th>
                                        <th>Disciplina</th>
                                        <?php
                                         foreach ($matrizes as $ma){ 
                                             echo '<tr><td>'.$ma->mat_numero.'</td><td>'.$ma->mat_ano.'</td><td>'.$ma->mat_status.'</td><td><a class = "btn" href=index.php?pg=AlterarMatriz&id='.$ma->id.'>Editar</a></td><td><a class = "btn" href=index.php?pg=ContinuarCadastrarDisciplina&id='.$ma->id.'>Inserir</a></td></tr>';
                                         
                                             
                                         }
                                         
                                       ?>
                                    </tr>
                                    
                                </table>     
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


