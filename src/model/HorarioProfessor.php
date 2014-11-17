<?php

include_once 'banco/Crud.php';
class HorarioProfessor extends Crud {
    
    protected $table = "horarioprofessor";
    private $idProfessor;
    private $idcurso;
    private $idDisciplina;
    private $dia;
    private $aula;
    private $status;
    
    public function getIdProfessor() {
        return $this->idProfessor;
    }

    public function getIdcurso() {
        return $this->idcurso;
    }

    public function getIdDisciplina() {
        return $this->idDisciplina;
    }

    public function getDia() {
        return $this->dia;
    }

    public function getAula() {
        return $this->aula;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setIdProfessor($idProfessor) {
        $this->idProfessor = $idProfessor;
    }

    public function setIdcurso($idcurso) {
        $this->idcurso = $idcurso;
    }

    public function setIdDisciplina($idDisciplina) {
        $this->idDisciplina = $idDisciplina;
    }

    public function setDia($dia) {
        $this->dia = $dia;
    }

    public function setAula($aula) {
        $this->aula = $aula;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (hopr_id_professor, hopr_id_curso, hopr_id_disciplina, hopr_dia, hopr_aula, hopr_status) VALUES (:idProfessor, :idCurso, :idDisciplina, :dia, :aula, :status)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':idProfessor', $this->idProfessor);
        $stmt->bindParam(':idCurso', $this->idcurso);
        $stmt->bindParam(':idDisciplina', $this->idDisciplina);
        $stmt->bindParam(':dia', $this->dia);
        $stmt->bindParam(':aula', $this->aula);
        $stmt->bindParam(':status', $this->status);
        return $stmt->execute();
        
    }

    public function update($id) {
        
    }
    
    public function verificacadastro($professor) {
        $sql = "SELECT * FROM $this->table WHERE hopr_id_professor = :professor";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':professor', $professor, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
        
    }
    
    public function updatedisponibilidade($dia,$aula, $professor) {
        
        $sql = "UPDATE $this->table SET hopr_status = :status WHERE hopr_aula = :aula AND hopr_dia = :dia AND hopr_id_professor = :professor";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':dia', $dia);
        $stmt->bindParam(':aula', $aula);
        $stmt->bindParam(':professor', $professor);
        return $stmt->execute();
        
    }

}
