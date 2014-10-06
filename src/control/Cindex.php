<?php

include_once 'control/Ccurso.php';
include_once 'control/Cmatriz.php';
include_once 'control/Cusuario.php';

class Cindex {
    function paginas($pg,$dados=array(),$id) {
        switch ($pg){
      
        case 'CadastrarCurso':
        $pagina = new Ccurso();
        $pagina->cadastrarcurso();    
	break;
    
        case 'InserirCurso':
        $pagina = new Ccurso();
        $pagina->inserircurso($dados);    
	break;
    
        case 'AlterarCurso':
        $pagina = new Ccurso();
        $pagina->alterarcurso($id);    
	break;
    
        case 'AtualizarCurso':
        $pagina = new Ccurso();
        $pagina->atualizacurso($dados);    
	break;
    
        case 'SelecionaCurso':
        $pagina = new Ccurso();
        $pagina->selecionacurso();    
	break;
    
        case 'CadastrarMatriz':
        $pagina = new Cmatriz();
        $pagina->cadastrarmatriz($dados);    
	break;
    
        case 'AlterarMatriz':
        $pagina = new Cmatriz();
        $pagina->alterarmatriz($id);    
	break;
    
        case 'AtualizarMatriz':
        $pagina = new Cmatriz();
        $pagina->atualizamatriz($dados,$id);    
	break;
    
        case 'InserirMatriz':
        $pagina = new Cmatriz();
        $pagina->inserirmatriz($dados);    
	break;
    
        case 'CadastrarDisciplina':
        $pagina = new Cdisciplina();
        $pagina->cadastrardisciplina($dados);    
	break;
    
        case 'ContinuarCadastrarDisciplina':
        $pagina = new Cdisciplina();
        $pagina->continuarcadastrardisciplina($id);    
	break;
    
        case 'InserirDisciplina':
        $pagina = new Cdisciplina();
        $pagina->inserirdisciplina($dados);    
	break;
    
        case 'CadastrarUsuario':
        $pagina = new Cusuario();
        $pagina->cadastrarusuario();     
	break;
    
        case 'InserirUsuario':
        $pagina = new Cusuario();
        $pagina->inserirusuario($dados);     
	break;
    
        case 'ListarCurso':
        $pagina = new Ccurso();
        $pagina->listarcurso();    
	break;
    
        case 'AlterarCoordenador':
        $pagina = new Ccurso();
        $pagina->alterarcoordenador($id);  
	break;
    
        case 'AtualizarCoordenador':
        $pagina = new Ccurso();
        $pagina->mudacoordenador($dados);   
	break;

	default:
	include ("view/Home.php");
	break;

        }

        
    }
    
}
