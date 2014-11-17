<?php

include_once 'model/HorarioProfessor.php';
class ChorarioProfessor {
    
    function cadastrardisponibilidade() {
        
        $obj = new HorarioProfessor();
        $verifica = $obj->verificacadastro($_SESSION['idUsu']);
        $total = count($verifica);

        
        $dia[1]="Segunda";
        $dia[2]="Terca";
        $dia[3]="Quarta";
        $dia[4]="Quinta";
        $dia[5]="Sexta";
        $dia[6]="Sabado";
        
        if($total > 0){
            
            include_once 'view/EditarDisponibilidade.php';
            exit();
            
        }
        
        include_once 'view/CadastrarDisponibilidade.php';
        
    }
    
    function inserirdisponibilidade($dados) {
        $obj = new HorarioProfessor();
   
        $aux[1]=$dados['Segunda'];
        $aux[2]=$dados['Terca'];
        $aux[3]=$dados['Quarta'];
        $aux[4]=$dados['Quinta'];
        $aux[5]=$dados['Sexta'];
        $aux[6]=$dados['Sabado'];
        
        for ($i = 1; $i < 7; $i++) {
            for ($j = 1; $j < 16; $j++) {
            if (empty($aux[$i][$j])){
                $dia= $i;
                $aula = $j;
                $indis = 0;
                $obj->setDia($i);
                $obj->setAula($aula);
                $obj->setStatus($indis);
                $obj->setIdProfessor($dados['idprofessor']);
                $obj->insert();
                
            } else {
                $dia= $i;
                $aula = $j;
                $indis = 1;
                $obj->setDia($i);
                $obj->setAula($aula);
                $obj->setStatus($indis);
                $obj->setIdProfessor($dados['idprofessor']);
                $obj->insert(); 
            }
    
            }
            
        }
        
        $error = "<p>Cadastro Efetuado com Sucesso</p>";
        $url = "index.php";
        include_once 'view/Aviso.php';
        exit();
        
    }
    
    function atualizardisponibilidade($dados) {
        
        $obj = new HorarioProfessor();
   
        $aux[1]=$dados['Segunda'];
        $aux[2]=$dados['Terca'];
        $aux[3]=$dados['Quarta'];
        $aux[4]=$dados['Quinta'];
        $aux[5]=$dados['Sexta'];
        $aux[6]=$dados['Sabado'];
        
         for ($i = 1; $i < 7; $i++) {
            for ($j = 1; $j < 16; $j++) {
            if (empty($aux[$i][$j])){
                $dia= $i;
                $aula = $j;
                $professor = $dados['idprofessor'];
                $indis = 0;
                $obj->setStatus($indis);
                $obj->updatedisponibilidade($dia, $aula, $professor);
                
            } else {
                $dia= $i;
                $aula = $j;
                $professor = $dados['idprofessor'];
                $indis = 1;
                $obj->setStatus($indis);
                $obj->updatedisponibilidade($dia, $aula, $professor);
            }
    
            }
            
        }
        $error = "<p>Cadastro Efetuado com Sucesso</p>";
        $url = "index.php";
        include_once 'view/Aviso.php';
        exit();
        
    }
        
    
}
