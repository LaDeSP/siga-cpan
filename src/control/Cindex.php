<?php

include_once 'control/Ccurso.php';
include_once 'control/Cmatriz.php';
include_once 'control/Cusuario.php';
include_once 'control/Csala.php';
include_once 'control/Cindisponibilidade.php';
include_once 'control/Clogar.php';
include_once 'control/ChorarioProfessor.php';
class Cindex {
    
    function paginas($pg,$dados=array(),$id) {
        if(isset($_SESSION['idUsu'])){
        $acesso = new Clogar();
        $sesao = $_SESSION['idUsu'] ;
        }
        
        switch ($pg){
            
        case 'Home':
        if(isset($_SESSION['idUsu'])){  
        include ("view/Home.php"); 
        }else{    
            header('Location: index.php?pg=Logar');
        }
	break;    
            
        case 'Logar':      
        $pagina = new Clogar();
        $pagina->login(); 
	break;
    
        case 'ValidarLogin':
        $pagina = new Clogar();
        $pagina->validalogin($dados['login'],$dados['senha']); 
	break;
    
        case 'Validado':
        include_once 'view/Validado.php';    
	break;
    
        case 'ErroLogin':
        include_once 'view/ErroLogin.php';    
	break;
    
        case 'RecuperarSenha':
        include_once 'view/RecuperarSenha.php';    
	break; 
    
        case 'EnviarSenha':
        $pagina = new Clogar();
        $pagina->recuperasenha($dados['recuperar']);       
	break;   
    
        case 'LinkSenha':
        $pagina = new Clogar();
        $pagina->linksenha($id);       
	break; 
    
        case 'NovaSenha':
        $pagina = new Clogar();
        $pagina->trocasenha($dados);       
	break; 
         
      
        case 'CadastrarCurso':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Ccurso();
        $pagina->cadastrarcurso();    
	break;
    
        case 'InserirCurso':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);    
        $pagina = new Ccurso();
        $pagina->inserircurso($dados);    
	break;
    
        case 'AlterarCurso':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Ccurso();
        $pagina->alterarcurso($id);    
	break;
    
        case 'AtualizarCurso':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Ccurso();
        $pagina->atualizacurso($dados);    
	break;
    
        case 'SelecionaCurso':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Ccurso();
        $pagina->selecionacurso();    
	break;
    
        case 'CadastrarMatriz':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cmatriz();
        $pagina->cadastrarmatriz($dados);    
	break;
    
        case 'ListarMatriz':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cdisciplina();
        $pagina->listardisciplina($id);  
	break;
    
        case 'AlterarMatriz':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cmatriz();
        $pagina->alterarmatriz($id);    
	break;
    
        case 'AtualizarMatriz':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cmatriz();
        $pagina->atualizamatriz($dados,$id);    
	break;
    
        case 'InserirMatriz':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cmatriz();
        $pagina->inserirmatriz($dados);    
	break;
    
        case 'CadastrarDisciplina':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cdisciplina();
        $pagina->cadastrardisciplina($dados);    
	break;
    
        case 'ContinuarCadastrarDisciplina':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cdisciplina();
        $pagina->continuarcadastrardisciplina($id);    
	break;
    
        case 'InserirDisciplina':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cdisciplina();
        $pagina->inserirdisciplina($dados);    
	break;
    
        case 'AlterarDisciplina':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cdisciplina();
        $pagina->alterardisciplina($id);  
	break;
    
        case 'AtualizarDisciplina':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cdisciplina();
        $pagina->atualizardisciplina($dados);
	break;
    
        case 'CadastrarUsuario':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cusuario();
        $pagina->cadastrarusuario();     
	break;
    
        case 'InserirUsuario':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cusuario();
        $pagina->inserirusuario($dados);     
	break;
    
        case 'ListarCurso':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Ccurso();
        $pagina->listarcurso();    
	break;
    
        case 'AlterarCoordenador':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Ccurso();
        $pagina->alterarcoordenador($id);  
	break;
    
        case 'AtualizarCoordenador':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Ccurso();
        $pagina->mudacoordenador($dados);   
	break;
    
        case 'CadastrarSala':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Csala();
        $pagina->cadastrarsala();  
	break;
    
        case 'InserirSala':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Csala();
        $pagina->inserirsala($dados); 
	break;
    
        case 'AlterarSala':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Csala();
        $pagina->alterarsala($id);
	break;
    
        case 'AtualizarSala':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Csala();
        $pagina->atualizarsala($dados);
	break;
    
        case 'CadastrarDisponibilidade':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new ChorarioProfessor();
        $pagina->cadastrardisponibilidade();
	break;
    
        case 'InserirDisponibilidade':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new ChorarioProfessor();
        $pagina->inserirdisponibilidade($dados);
	break;
    
        case 'AtualizarDisponibilidade':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new ChorarioProfessor();
        $pagina->atualizardisponibilidade($dados);
	break;
    
        case 'EditarDados':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cusuario();
        $pagina->editardadosuser();
	break;
        
        case 'AtualizarDados':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cusuario();
        $pagina->atualizardadosuser($dados);
	break;
    
        case 'EditarSenha':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cusuario();
        $pagina->editarsenhauser($dados);
	break;
    
        case 'AtualizarSenha':
        $nive =array(1,2,3,4,5);
        $acesso->validacao($sesao,$nive);
        $pagina = new Cusuario();
        $pagina->atualizarsenhauser($dados);
	break;
    
        case 'Sair':
        session_destroy();
        include ("view/Logar.php");      
	break; 

	default:
        if(isset($_SESSION['idUsu'])){
            include ("view/Home.php");
        }else{    
            include ("view/Logar.php");
        }
	break;

        }

        
    }
    
}
