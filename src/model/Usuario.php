<?php

include_once 'banco/Crud.php';
class Usuario extends Crud {
    protected $table = "usuario";
    private $nome;
    private $nivel;
    private $senha;
    private $email;
    private $siape;
    
    public function getNome() {
        return $this->nome;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSiape() {
        return $this->siape;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setSiape($siape) {
        $this->siape = $siape;
    }

    public function insert() {
        $sql = "INSERT INTO $this->table (usu_nome, usu_nivel, usu_senha, usu_email, usu_siape) VALUES (:nome, :nivel, :senha, :email, :siape)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':nivel', $this->nivel);
        $stmt->bindParam(':senha', $this->senha);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':siape', $this->siape);
        return $stmt->execute();
        
    }

    public function update($id) {
        
    }
    
}
