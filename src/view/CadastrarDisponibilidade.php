<!doctype html>
<html lang="pt-br">
  <head>
      <title>Cadastrar Disponibilidade</title>
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
                                <form id="curso" class="form-horizontal" method="POST" action="index.php?pg=InserirDisponibilidade">
                                        <fieldset>

                                        <!-- Form Name -->
                                        <legend>Cadastrar Disponibilidade</legend>

                                        <table class="table">
                                            <tr>
                                                <th></th>
                                                <th colspan="5" ><p class="centralizar">Aulas - Manhã</p></th>
                                                <th colspan="5" ><p class="centralizar">Aulas - Tarde</p></th>
                                                <th colspan="5" ><p class="centralizar">Aulas - Noite</p></th>
                                            </tr>
                                            <tr>
                                                <th>Dia</th>
                                                <th class="verde">1º</th>
                                                <th class="verde">2º</th>
                                                <th class="verde">3º</th>
                                                <th class="verde">4º</th>
                                                <th class="verde">5º</th>
                                                <th class="azul">1º</th>
                                                <th class="azul">2º</th>
                                                <th class="azul">3º</th>
                                                <th class="azul">4º</th>
                                                <th class="azul">5º</th>
                                                <th class="vermelho">1º</th>
                                                <th class="vermelho">2º</th>
                                                <th class="vermelho">3º</th>
                                                <th class="vermelho">4º</th>
                                                <th class="vermelho">5º</th>
                                            </tr>
                                            <?php for ($i = 1; $i < 7; $i++) {
                                                echo '<tr><td>'.$dia[$i].'</td>';
                                                for ($j = 1; $j < 16; $j++) {
                                                    echo '<td><input id="" type="checkbox" name="'.$dia[$i].'['.$j.']" value="1" ></td>';
                                                    
                                                }
                                                echo '</tr>';
                                             } ?>
                                            
                                        </table>
                                        
                                        <input id="idprofessor" type="hidden" name="idprofessor" value="<?php echo $_SESSION['idUsu']; ?>" >
                                        
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
  </body>
</html>
