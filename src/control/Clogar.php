<?php

include_once 'core/Logar.php';
class Clogar {
    
    function login() {
        
        include_once 'view/Logar.php';
        
    }
    
    function validalogin($user, $password) {
        $consulta = new Logar();
        $consulta->setLogin($user);
        $consulta->setSenha(md5($password));
        $consulta->valida();
              
    }
    
    function recuperasenha($email) {
        $consulta = new Logar();
        $consulta->buscasenha($email);   
    }
    
    function linksenha($senha) {
        $parte = explode("-", $senha);
        include_once 'view/NovaSenha.php';
        
    }
    function trocasenha($dados) {
        $consulta = new Logar();
        if(strcmp($dados['novasenha'],$dados['novasenha2']) == 0){
            $consulta->verificalogin($dados['idfun'], $dados['senhaantiga']);
            $consulta->atualizasenha($dados['idfun'], $dados['novasenha']);
            header("location: index.php?pg=Logar");
            
        
    }else{
        $error = "Senhas Diferentes";
        $url = "index.php?pg=Logar";
        include_once 'view/Aviso.php';
    }
    }
    
    function validacao($id, $nivel, $cargo) {
        $valida = new Logar();

        $valida->liberaacesso($id,$nivel,$cargo);

        
    }
}
