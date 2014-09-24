<?php
include_once 'model/Matriz.php';
include_once 'control/Cdisciplina.php';
class Cmatriz {
    
    function cadastrarmatriz($dados) {
        $curso = $dados['curso'];
        $consulta = new Matriz();
        $matrizes = $consulta->selecionamatriz($curso);
        include_once 'view/CadastrarMatriz.php';
    }
    
    function alterarmatriz($dados) {
        
        
    }
    
    function inserirmatriz($dados) {
        $inserir = new Matriz();
        $inserir->setNumero($dados['numero']);
        $inserir->setCurso($dados['curso']);
        $inserir->setAno($dados['ano']);
        $inserir->insert();
        $cont = new Cdisciplina();
        $cont->cadastrardisciplina($inserir->getCurso());
        
    }
}
