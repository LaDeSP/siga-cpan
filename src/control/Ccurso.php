<?php

include_once 'model/Curso.php';
class Ccurso {
    


    public function cadastrarcurso() {
        $seleciona = new Curso();
        $dados = $seleciona->findAll();
        include_once 'view/CadastrarCurso.php';
   
    }
    
    function alterarcurso($dados) {
        $alt = new Curso();
        $valor = $alt->find($dados);
        include_once 'view/EditarCurso.php';
        
    }
    
    public function selecionacurso() {
        $seleciona = new Curso();
        $cursos = $seleciona->findAll();
        include_once 'view/SelecionaCurso.php';
    }
    
    public function inserircurso($dados) {
        $inserir = new Curso();
        $inserir->setCodigo($dados['codigo_curso']);
        $inserir->setNome($dados['nome_curso']);
        $inserir->setQtdSemestre($dados['qtd_semestre']);
        $inserir->insert();
       header("Location: index.php?pg=CadastrarCurso");
        
        
    }
}
