<?php
include_once 'banco/Crud.php';
class Matriz extends Crud {
    protected $table = "matriz";
    private $numero;
    private $curso;
    private $ano;
    private $status;
    

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

        public function getNumero() {
        return $this->numero;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getAno() {
        return $this->ano;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (mat_numero, mat_curso, mat_ano) VALUES (:numero, :curso, :ano)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':curso', $this->curso);
        $stmt->bindParam(':ano', $this->ano);
        return $stmt->execute();
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET mat_numero = :numero, mat_curso = :curso, mat_ano = :ano, mat_status = :status WHERE id = :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':numero', $this->numero);
        $stmt->bindParam(':curso', $this->curso);
        $stmt->bindParam(':ano', $this->ano);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
    public function selecionamatriz($dados){
    $sql = "SELECT * FROM $this->table WHERE mat_curso = $dados";
    $stmt = Db::prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function selecionaidmatriz($dados){
    $sql = "SELECT * FROM $this->table WHERE mat_curso = $dados ORDER BY id DESC ";
    $stmt = Db::prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function selecionacursomatriz($dados){
    $sql = "SELECT * FROM $this->table WHERE id = $dados ";
    $stmt = Db::prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
