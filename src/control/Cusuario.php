<?php

include_once 'model/Usuario.php';
include_once 'config/CadastroRepetido.php';
include_once 'model/Curso.php';
include_once 'model/UsuariovsCurso.php';
class Cusuario {
    
    function cadastrarusuario() {
        $consulta = new Curso();
        $curso = $consulta->findAll();        
        include_once 'view/CadastrarUsuario.php';   
    }
    
    function inserirusuario($dados) {
        
        $inserir = new Usuario();
        $inserir->setNome($dados['nome']);
        $inserir->setSiape($dados['siape']);
        $valida = new CadastroRepetido;
        $valida->setCampoBanco("usu_siape");
        $valida->setCampoBuscado($inserir->getSiape());
        $valida->setTabela("usuario");
        $total = $valida->verificacadastrorepetido();
        if($total > 0){
            $error = "<p>Siape já Cadastrado</p>";
            $url = "index.php?pg=CadastrarUsuario";
            include_once 'view/Aviso.php';
            exit();
        }
        $inserir->setNivel($dados['nivel']);
        $inserir->setEmail($dados['email']);
        if(strcmp($dados['senha'], $dados['senha2']) != 0){
            $error = "<p>Senhas Digitadas Diferentes</p>";
            $url = "index.php?pg=CadastrarUsuario";
            include_once 'view/Aviso.php';
            exit();
        }
        $inserir->setSenha(md5($dados['senha']));
        $inserir->insert();
        $numero = $inserir->ultimoid();
        $cont = new UsuariovsCurso();
        foreach ($dados[curso] as $cur) {
           $cont->setIdUsuario($numero);
           $cont->setIdCurso($cur);
           $cont->insert();
        }
        
        $error = "Cadastro Realializado com Sucesso.";
        $url = "index.php";
        include_once 'view/Aviso.php';
        exit();
        
    }
}
