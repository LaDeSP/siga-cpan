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
                                <form id="usuario" class="form-horizontal" method="POST" action="index.php?pg=InserirUsuario">
                                <fieldset>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="nome">Nome</label>
                                  <div class="controls">
                                    <input id="nome" name="nome" placeholder="Nome" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="siape">Siape</label>
                                  <div class="controls">
                                    <input id="siape" name="siape" placeholder="Siape" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="control-group">
                                  <label class="control-label" for="nivel">Nivel</label>
                                  <div class="controls">
                                    <select id="nivel" name="nivel" class="input-large">
                                        <option value="1">professor</option>
                                        <option value="2">Coordenador</option>
                                        <option value="3">Secretaria</option>
                                        <option value="4">Coodenadora Academica</option>
                                        <option value="5">SAP</option>
                                    </select>
                                  </div>
                                </div>

                                <!-- Text input-->
                                <div class="control-group">
                                  <label class="control-label" for="email">E-mail</label>
                                  <div class="controls">
                                    <input id="email" name="email" placeholder="E-mail" class="input-large" type="text">

                                  </div>
                                </div>

                                <!-- Password input-->
                                <div class="control-group">
                                  <label class="control-label" for="senha">Senha</label>
                                  <div class="controls">
                                      <input id="senha" name="senha" id="senha" placeholder="Senha" class="input-large" type="password">

                                  </div>
                                </div>

                                <!-- Password input-->
                                <div class="control-group">
                                  <label class="control-label" for="senha2">Confirme a Senha</label>
                                  <div class="controls">
                                    <input id="senha2" name="senha2" placeholder="Senha" class="input-large" type="password">

                                  </div>
                                </div>
                                
                                <!-- Multiple Checkboxes -->
                                <div class="control-group">
                                  <label class="control-label" for="curso">Selecione os Cursos que Leciona</label>
                                  <div class="controls">
                                    <?php
                                        foreach ($curso as $valor) {
                                            echo'
                                               <label class="checkbox" for="curso-0">
                                                <input name="curso[]" id="curso-0" value="'.$valor->id.'" type="checkbox">
                                                '.$valor->cur_nome.'
                                              </label>';
                                        }
                                    ?>  
                                 
                                  </div>
                                </div>

                                <!-- Button -->
                                <div class="control-group">
                                  <label class="control-label" for="cadastrar"></label>
                                  <div class="controls">
                                    <button id="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>
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
    <script type="text/javascript" src="js/validaformusuario.js"></script>
  </body>
</html>



