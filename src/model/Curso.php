<?php

include_once 'banco/Crud.php';
class Curso extends Crud {
    
    protected   $table = "curso";
    private     $nome;
    private     $codigo;
    private     $qtdSemestre;
    private     $coordenador;
    
    public function getNome() {
        return $this->nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getQtdSemestre() {
        return $this->qtdSemestre;
    }

    public function getCoordenador() {
        return $this->coordenador;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setQtdSemestre($qtdSemestre) {
        $this->qtdSemestre = $qtdSemestre;
    }

    public function setCoordenador($coordenador) {
        $this->coordenador = $coordenador;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (cur_nome, cur_codigo, cur_qtd_semestre, cur_coordenador) VALUES (:nome, :codigo, :qtdSemestre, :coordenador)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':codigo', $this->codigo);
        $stmt->bindParam(':qtdSemestre', $this->qtdSemestre);
        $stmt->bindParam(':coordenador', $this->coordenador);
        return $stmt->execute();
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET cur_nome = :nome, cur_codigo = :codigo, cur_qtd_semestre = :qtdSemestre, cur_coordenador = :coordenador WHERE id = :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':codigo', $this->codigo);
        $stmt->bindParam(':qtdSemestre', $this->qtdSemestre);
        $stmt->bindParam(':coordenador', $this->coordenador);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
        
    }
    
    public function selecionacoordenador($id) {
        $sql = "SELECT * FROM usuario_vs_curso INNER JOIN usuario ON usuario_vs_curso.uvc_id_usuario = usuario.id AND usuario_vs_curso.uvc_id_curso = :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
        
    }
    
    public function atualizacoordenador($id) {
        $sql = "UPDATE $this->table SET cur_coordenador = :coordenador WHERE id = :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':coordenador', $this->coordenador);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    
    public function buscacurso() {
        $sql = "SELECT curso.cur_codigo, curso.cur_nome, curso.id  FROM curso";
        $stmt = Db::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
        
        
    }
    
}
