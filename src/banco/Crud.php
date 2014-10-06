<?php

include_once 'Db.php';
abstract class Crud extends Db {
    
    protected $table;
    
    abstract public function insert();
    abstract public function update($id);
    
    public function find($id){
        $sql  = "SELECT * FROM $this->table WHERE id= :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public function findAll(){
        $sql = "SELECT * FROM $this->table";
        $stmt = Db::prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    
    public function delete($id){
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = Db::prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    

    
}