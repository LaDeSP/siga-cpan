<!DOCTYPE html>

<html>
    <head>
        <title>Validar Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
  	<link href="css/stilo.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
        <meta http-equiv="refresh" content="5; URL=index.php?pg=Home"> 
    </head>
    <body>
       <div class="container">
           <?php include "topo.php"; ?>
          
           
           <!------------------------------------------Inicio do Conteudo------------------------------------->
		<section>
			<div id="conteudo">
				<div class="row-fluid">
					<div class="span12">
						<div class="titulo">
                                                    <p><b>Valida Acesso</b></p>
						</div>
						<div class="bordas">
                                                    <p>Você está logado...</p>
                                                    <p>Aguarde que você será redirecionado dentro de instantes.</p>
                                                    
						</div>
					</div>	
				</div>
			</div> <!-- Fim da linha conteudo -->
		</section><!-- ----------------------------------------fim do Conteudo----------------------------------- -->

           
           <?php include "rodape.php"; ?>
           
           
       </div><!-- fim da div container -->    
        
        
    <!-- Arquivos Javascripts ================================================== -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
