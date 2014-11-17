<?php

include_once 'model/Sala.php';

class Csala {
    
    function cadastrarsala() {
        $listar = new Sala();
        $dados = $listar->findAll();
        
        include_once 'view/CadastrarSala.php';
        
    }
    
    function inserirsala($dados) {
        
        $inserir = new Sala();
        $inserir->setNome($dados['sala']);
        $inserir->setPredio($dados['predio']);
        $inserir->insert();
        $error = "<p>Cadastro Efetuado com Sucesso</p>";
        $url = "index.php?pg=CadastrarSala";
        include_once 'view/Aviso.php';
        exit();
        
    }
    
    function alterarsala($idSala) {
        $buscar = new Sala();
        $sala = $buscar->find($idSala);
        include_once 'view/EditarSala.php';
        
    }
    
    function atualizarsala($dados) {
        $up = new Sala();
        $up->setNome($dados['sala']);
        $up->setPredio($dados['predio']);
        $up->update($dados['idsala']);
        $error = "<p>Registro Atualizado com Sucesso</p>";
        $url = "index.php?pg=CadastrarSala";
        include_once 'view/Aviso.php';
        exit();
        
        
    }
}
