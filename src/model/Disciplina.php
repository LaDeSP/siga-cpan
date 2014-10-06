<?php

include_once 'banco/Crud.php';

class Disciplina extends Crud {
    
    protected $table = "disciplina";
    private $semestre;
    private $codigo;
    private $nome;
    private $abreviacao;
    private $cargaHoraria;
    private $tipo;
    private $curso;
    private $status;
    private $idMatriz;
    
    public function getIdMatriz() {
        return $this->idMatriz;
    }

    public function setIdMatriz($idMatriz) {
        $this->idMatriz = $idMatriz;
    }

        public function getSemestre() {
        return $this->semestre;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getAbreviacao() {
        return $this->abreviacao;
    }

    public function getCargaHoraria() {
        return $this->cargaHoraria;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setSemestre($semestre) {
        $this->semestre = $semestre;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAbreviacao($abreviacao) {
        $this->abreviacao = $abreviacao;
    }

    public function setCargaHoraria($cargaHoraria) {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (dis_semestre, dis_codigo, dis_nome, dis_abrev, dis_carga_horaria, dis_tipo, dis_curso, dis_id_mat) VALUES (:semestre, :codigo, :nome, :abreviacao, :cargaHoraria, :tipo, :curso, :idMatriz)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':semestre', $this->semestre);
        $stmt->bindParam(':codigo', $this->codigo);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':abreviacao', $this->abreviacao);
        $stmt->bindParam(':cargaHoraria', $this->cargaHoraria);
        $stmt->bindParam(':tipo', $this->tipo);
        $stmt->bindParam(':curso', $this->curso);
        $stmt->bindParam(':idMatriz', $this->idMatriz);
        return $stmt->execute();
    }

    public function update($id) {
        
    }
    
    public function listadisciplina($id) {
        $sql = "SELECT * FROM $this->table WHERE dis_id_mat = :idMatriz ORDER BY dis_semestre";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':idMatriz', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

}
