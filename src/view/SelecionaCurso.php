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
                                <form class="form-horizontal" action="index.php?pg=CadastrarMatriz" method="post">
                                <fieldset>

                               
                                <!-- Select Basic -->
                                <div class="control-group">
                                  <label class="control-label" for="curso">Selecione o Curso</label>
                                  <div class="controls">
                                    <select id="curso" name="curso" class="input-large">
                                        <?php
                                        foreach ($cursos as $nome){
                                            echo '<option value="'.$nome->id.'">'.$nome->cur_nome.'</option>';
                                        }
                                        ?>
                                    </select>
                                  </div>
                                </div>

                                <!-- Button -->
                                <div class="control-group">
                                  <label class="control-label" for="ok"></label>
                                  <div class="controls">
                                    <button id="ok" name="ok" class="btn btn-primary">ok</button>
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

  </body>
</html>


