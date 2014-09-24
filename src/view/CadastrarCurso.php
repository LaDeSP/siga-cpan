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
                                <form class="form-horizontal" method="POST" action="index.php?pg=InserirCurso">
                                        <fieldset>

                                        <!-- Form Name -->
                                        <legend><?php if (isset ($_GET["acao"])){echo $acao;} else {echo "Cadastrar";} ?> Curso</legend>

                                        <!-- Text input-->
                                        <div class="control-group">
                                          <label class="control-label" for="codigo_curso">Codigo Curso</label>
                                          <div class="controls">
                                            <input id="codigo_curso" name="codigo_curso" value="<?php if(isset ($_GET["acao"])) {echo "$codigo_curso";} ?>" placeholder="Codigo Curso" class="input-large" required="" type="text">
                                            <p class="help-block">Digite o Codigo do Curso</p>
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                          <label class="control-label" for="nome_curso">Curso</label>
                                          <div class="controls">
                                            <input id="nome_curso" name="nome_curso" placeholder="Nome do Curso" class="input-large" value="<?php if (isset ($_GET["acao"])){echo $curso ;} ?>" required="" type="text">
                                            <p class="help-block">Digite o Nome do Curso</p>
                                          </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                           <div class="controls">
                                            <input id="acao" name="acao" class="input-large" type="hidden" value="<?php if (isset ($_GET["acao"])){echo $acao;} else {echo "Inserir";} ?>">
                                           </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="control-group">
                                           <div class="controls">
                                            <input id="id" name="id" class="input-large" type="hidden" value="<?php if (isset ($_GET["acao"])){echo $id;} ?>">
                                           </div>
                                        </div>


                                        <!-- Select Basic -->
                                        <div class="control-group">
                                          <label class="control-label" for="qtd_semestre">Quantidade de Semestres</label>
                                          <div class="controls">
                                            <select id="qtd_semestre" name="qtd_semestre" class="input-mini">

                                            <?php
                                            if(Isset ($_GET['acao']))
                                                        {
                                                                include_once("classes/combo.php");
                                                                $cb = new combo();
                                                                $cb->mostrarSemestre($id);
                                                        }
                                                ?>
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
                                          <label class="control-label" for="cadastrar_curso"></label>
                                          <div class="controls">
                                            <button id="cadastrar_curso" name="cadastrar_curso" class="btn btn-primary"><?php if (isset ($_GET["acao"])){echo $acao;} else {echo "Cadastrar Curso";} ?></button>
                                          </div>
                                        </div>

                                        </fieldset>
                                </form>
                                
                                <table class="table">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nome</th>
                                        <th>Editar</th>
                                    </tr>
                                    
                                        <?php 
                                        foreach ($dados as $da){
                                            echo '
                                      <tr>          
                                        <td>'.$da->cur_codigo.'</td>
                                        <td>'.$da->cur_nome.'</td>
                                        <td><a href="index.php?pg=AlterarCurso&id='.$da->id.'">Editar </a></td>
                                      </tr>';
                                        }
                                        ?>
                                    
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

  </body>
</html>
