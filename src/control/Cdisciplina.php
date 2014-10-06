<?php

include_once 'model/Disciplina.php';
include_once 'model/Matriz.php';

class Cdisciplina {
    
    function cadastrardisciplina($dados) {
        $curso = $dados;
        $consulta = new Matriz();
        $matriz = $consulta->selecionaidmatriz($dados); 
        $con = new Disciplina();
        $disciplina = $con->listadisciplina($matriz['id']);
        include_once 'view/CadastrarDisciplina.php';
        
    }
    
    function inserirdisciplina($dados) {
        $inserir = new Disciplina();
        $inserir->setSemestre($dados['semestre']);
        $inserir->setCodigo($dados['codigo']);
        $inserir->setNome($dados['nome']);
        $inserir->setAbreviacao($dados['abreviacao']);
        $inserir->setCargaHoraria($dados['cargahoraria']);
        $inserir->setCurso($dados['curso']);
        $inserir->setIdMatriz($dados['idmatriz']);
        $inserir->setTipo($dados['tipo']);
        $inserir->insert();
        $cont = new Cdisciplina();
        $cont->continuarcadastrardisciplina($inserir->getIdMatriz());
        
    }
    
    function continuarcadastrardisciplina($idMatriz) {
        $consulta = new Matriz();
        $idcurso = $consulta->selecionacursomatriz($idMatriz);
        $curso = $idcurso['mat_curso'];
        $matriz['id'] = $idMatriz;
        $con = new Disciplina();
        $disciplina = $con->listadisciplina($matriz['id']);
        include_once 'view/CadastrarDisciplina.php';
    }
    
  
}
