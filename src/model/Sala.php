<?php


include_once 'banco/Crud.php';

class Sala extends Crud {
    
    protected $table = "sala";
    private  $nome;
    private $predio;
    
    
    public function getPredio() {
        return $this->predio;
    }

    public function setPredio($predio) {
        $this->predio = $predio;
    }

    

    public function getNome() {
        return $this->nome;
    }


    public function setNome($nome) {
        $this->nome = $nome;
    }


    public function insert() {
    
        $sql = "INSERT INTO $this->table (sal_nome, sal_predio) VALUES (:nome, :predio)";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':predio', $this->predio);
        return $stmt->execute();
        
    }

    public function update($id) {
        $sql = "UPDATE $this->table SET sal_nome = :nome, sal_predio = :predio WHERE id = :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':nome', $this->nome);
        $stmt->bindParam(':predio', $this->predio);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

}
