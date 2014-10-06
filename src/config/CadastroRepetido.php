<?php
include_once 'banco/Db.php';
class CadastroRepetido extends Db  {
    private $tabela;
    private $campoBuscado;
    private $campoBanco;
    
    public function getTabela() {
        return $this->tabela;
    }

    public function getCampoBuscado() {
        return $this->campoBuscado;
    }

    public function getCampoBanco() {
        return $this->campoBanco;
    }

    public function setTabela($tabela) {
        $this->tabela = $tabela;
    }

    public function setCampoBuscado($campoBuscado) {
        $this->campoBuscado = $campoBuscado;
    }

    public function setCampoBanco($campoBanco) {
        $this->campoBanco = $campoBanco;
    }

        
    function verificacadastrorepetido() {
        $sql  = "SELECT * FROM $this->tabela WHERE $this->campoBanco = :campoBuscado";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':campoBuscado',$this->campoBuscado);
        $stmt->execute();
        $confere = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $total = count($confere);
        return $total;
    }
   
}
