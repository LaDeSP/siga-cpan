<?php

include_once 'banco/Crud.php';
class MatrizDisciplina extends Crud {
    protected $table= matriz_vs_disciplina;
    private $idMatriz;
    private $idDisciplina;
    
    public function getIdMatriz() {
        return $this->idMatriz;
    }

    public function getIdDisciplina() {
        return $this->idDisciplina;
    }

    public function setIdMatriz($idMatriz) {
        $this->idMatriz = $idMatriz;
    }

    public function setIdDisciplina($idDisciplina) {
        $this->idDisciplina = $idDisciplina;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (mvd_id_matriz, mvd_id_disciplina) VALUES (:idMatriz, :idDisciplina)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':idMatriz', $this->idMatriz);
        $stmt->bindParam(':idDisciplina', $this->idDisciplina);
        return $stmt->execute();
        
    }

    public function update($id) {
        
    }

}
