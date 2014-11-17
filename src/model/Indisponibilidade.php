<?php

include_once 'banco/Crud.php';

class Indisponibilidade extends Crud {
    
    protected $table="indisponibilidade";
    private $indisponibilidade;
    private $professor;
    
    public function getIndisponibilidade() {
        return $this->indisponibilidade;
    }

    public function getProfessor() {
        return $this->professor;
    }

    public function setIndisponibilidade($indisponibilidade) {
        $this->indisponibilidade = $indisponibilidade;
    }

    public function setProfessor($professor) {
        $this->professor = $professor;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (ind_dia_aul_dis, ind_prof) VALUES (:indisponibilidade, :professor)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':indisponibilidade', $this->indisponibilidade);
        $stmt->bindParam(':professor', $this->professor);
        return $stmt->execute();
        
    }

    public function update($id) {
        
    }

}
