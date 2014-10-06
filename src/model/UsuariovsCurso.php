<?php

include_once 'banco/Crud.php';
class UsuariovsCurso extends Crud {
    protected $table = "usuario_vs_curso";
    private $idUsuario;
    private $idCurso;
    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getIdCurso() {
        return $this->idCurso;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (uvc_id_usuario, uvc_id_curso) VALUES (:idUsuario, :idCurso)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':idUsuario', $this->idUsuario);
        $stmt->bindParam(':idCurso', $this->idCurso);
        return $stmt->execute();
    }

    public function update($id) {
        
    }

}
