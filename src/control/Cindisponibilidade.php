<?php

include_once 'model/Indisponibilidade.php';
class Cindisponibilidade {
    
    function cadastrarindisponibilidade() {
        $dia[1]="Segunda";
        $dia[2]="Terca";
        $dia[3]="Quarta";
        $dia[4]="Quinta";
        $dia[5]="Sexta";
        $dia[6]="Sabado";
        
        include_once 'view/CadastrarIndisponibilidade.php';
        
    }
    
    function inseririndisponibilidade($dados) {
        print_r($dados);
        
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
                $valor = $dia.'-'.$aula.'-'.$indis;
                $obj = new Indisponibilidade();
                $obj->setIndisponibilidade($valor);
                $obj->setProfessor(12);
                $obj->insert();
                
            } else {
                $dia= $i;
                $aula = $j;
                $indis = 1;
                $valor = $dia.'-'.$aula.'-'.$indis;
                $obj = new Indisponibilidade();
                $obj->setIndisponibilidade($valor);
                $obj->setProfessor(12);
                $obj->insert(); 
            }
    
            }
            
        }
        
        $error = "<p>Cadastro Efetuado com Sucesso</p>";
        $url = "index.php";
        include_once 'view/Aviso.php';
        exit();
        
    }
}
