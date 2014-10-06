<?php

include_once 'model/Curso.php';
class Ccurso {
    


    public function cadastrarcurso() {
        $seleciona = new Curso();
        $dados = $seleciona->findAll();
        include_once 'view/CadastrarCurso.php';
   
    }
    
    function alterarcurso($id) {
        $alt = new Curso();
        $valor = $alt->find($id);
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
    
    public function atualizacurso($dados) {
        $atualiza = new Curso();
        $atualiza->setCodigo($dados['codigo_curso']);
        $atualiza->setNome($dados['nome_curso']);
        $atualiza->setQtdSemestre($dados['qtd_semestre']);
        $atualiza->update($dados['id']);
        $error = "<p>Registro Atualizado com Sucesso</p>";
        $url = "index.php?pg=CadastrarCurso";
        include_once 'view/Aviso.php';
        exit();
        
    }
    
    public function listarcurso() {
        $seleciona = new Curso();
        $cursos = $seleciona->buscacurso();
        include_once 'view/ListarCurso.php';
    }
    
    public function alterarcoordenador($id) {
        $consulta = new Curso();
        $coor = $consulta->find($id);
        $prof = new Curso();
        $valor = $prof->selecionacoordenador($coor->id);
        
        include_once 'view/EditarCoordenador.php';
        
    }
    
    function mudacoordenador($dados) {
        $consul = new Curso();
        $consul->setCoordenador($dados['coordenador']);
        $consul->atualizacoordenador($dados['id']);
        $error = "<p>Registro Atualizado com Sucesso</p>";
        $url = "index.php?pg=ListarCurso";
        include_once 'view/Aviso.php';
        exit();
    }
    


}
