<!doctype html>
<html lang="pt-br">
  <head>
      <title>Editar Disciplina</title>
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
                                <form class="form-horizontal" method="post" action="index.php?pg=AtualizarDisciplina" >
                                <fieldset>

                                <!-- Select Basic -->
                                <div class="control-group">
                                  <label class="control-label" for="semestre">Selecione o Semestre</label>
                                  <div class="controls">
                                    <select id="semestre" name="semestre" class="input-small">
                                        <?php echo '<option value="'.$consulta->dis_semestre.'">'.$consulta->dis_semestre.'</option>'; ?>
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
                                        <option value="opt">Opt</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="codigo">Codigo</label>
                                  <div class="controls">
                                      <input id="codigo" name="codigo" value="<?php echo $consulta->dis_codigo; ?>" placeholder="" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="nome">Nome</label>
                                  <div class="controls">
                                      <input id="nome" name="nome" value="<?php echo $consulta->dis_nome; ?>" placeholder="" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="abreviacao">Abreviação</label>
                                  <div class="controls">
                                      <input id="abreviacao" name="abreviacao" value="<?php echo $consulta->dis_abrev; ?>" placeholder="" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="cargahoraria">Carga Horaria</label>
                                  <div class="controls">
                                      <input id="cargahoraria" name="cargahoraria" value="<?php echo $consulta->dis_carga_horaria; ?>" placeholder="" class="input-large" type="text">

                                  </div>
                                </div>
                                
                                <!-- Text input-->
                                <div class="control-group">
                                  <div class="controls">
                                      <input id="curso" name="curso" value="<?php echo $consulta->dis_curso; ?>" placeholder="" class="input-large" required="" type="hidden">
                                    <p class="help-block"></p>
                                  </div>
                                </div>
                                
                                <!-- Text input-->
                                <div class="control-group">
                                  <div class="controls">
                                      <input id="idmatriz" name="idmatriz" value="<?php echo $consulta->dis_id_mat; ?>" placeholder="" class="input-large" required="" type="hidden">
                                    <p class="help-block"></p>
                                  </div>
                                </div>
                                
                                <!-- Text input-->
                                <div class="control-group">
                                  <div class="controls">
                                      <input id="id" name="id" value="<?php echo $consulta->id; ?>" placeholder="" class="input-large" required="" type="hidden">
                                    <p class="help-block"></p>
                                  </div>
                                </div>

                                <!-- Multiple Radios (inline) -->
                                <div class="control-group">
                                  <label class="control-label" for="tipo">Selecione o Tipo</label>
                                  <div class="controls">
                                      <?php if($consulta->dis_tipo == "T") { ?> 
                                    <label class="radio inline" for="tipo-0">
                                        <input name="tipo" id="tipo-0" checked="checked" value="T" type="radio">
                                      Teorica
                                    </label>
                                    <label class="radio inline" for="tipo-1">
                                      <input name="tipo" id="tipo-1" value="P" type="radio">
                                      Pratica
                                    </label>
                                      <?php } else { ?>
                                    <label class="radio inline" for="tipo-0">
                                        <input name="tipo" id="tipo-0"  value="T" type="radio">
                                            Teorica
                                    </label>
                                    <label class="radio inline" for="tipo-1">
                                        <input name="tipo" checked="checked" id="tipo-1" value="P" type="radio">
                                            Pratica
                                    </label>
                                      <?php } ?>
                                  </div>
                                </div>
                                
                                <!-- Multiple Radios (inline) -->
                                <div class="control-group">
                                    <?php if($consulta->dis_status == 0) { ?>
                                    <label class="control-label" for="status">Selecione o Tipo</label>
                                    <div class="controls">
                                    <label class="radio inline" for="status-0">
                                        <input name="status" id="tipo-0" checked="checked" value="0" type="radio">
                                      Desativado
                                    </label>
                                    <label class="radio inline" for="status-1">
                                      <input name="status" id="status-1" value="1" type="radio">
                                      Ativado
                                    </label>
                                    </div>
                                    <?php } else { ?> 
                                    
                                    <label class="control-label" for="status">Status</label>
                                    <div class="controls">
                                    <label class="radio inline" for="status-0">
                                    <input name="status" id="tipo-0"  value="0" type="radio">
                                      Desativado
                                    </label>
                                    <label class="radio inline" for="status-1">
                                      <input name="status" checked="checked" id="status-1" value="1" type="radio">
                                      Ativado
                                    </label>    
                                    </div>
                                    <?php } ?>
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

  </body>
</html>


