<?php
include_once 'model/Matriz.php';
include_once 'control/Cdisciplina.php';
class Cmatriz {
    
    function cadastrarmatriz($dados) {
        if(!isset($dados['curso'])){
            header('Location: index.php?pg=SelecionaCurso');
        }
        $curso = $dados['curso'];
        $consulta = new Matriz();
        $matrizes = $consulta->selecionamatriz($curso);
        include_once 'view/CadastrarMatriz.php';
    }
    
    function alterarmatriz($id) {
        $alt = new Matriz();
        $valor = $alt->find($id);
        include_once 'view/EditarMatriz.php';     
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
    
    function atualizamatriz($dados) {
        $alt = new Matriz();
        $alt->setNumero($dados['numero']);
        $alt->setAno($dados['ano']);
        $alt->setCurso($dados['curso']);
        $alt->setStatus($dados['status']);
        $alt->update($dados['id']);
        $error = "<p>Registro Atualizado com Sucesso</p>";
        $url = "index.php?pg=SelecionaCurso";
        include_once 'view/Aviso.php';
        exit();
        
    }
}
