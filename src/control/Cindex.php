<?php

include_once 'control/Ccurso.php';
include_once 'control/Cmatriz.php';

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
    

	default:
	include ("view/Home.php");
	break;

        }

        
    }
    
}
