<?php


include_once 'config/Configuracao.php';

class Db extends Configuracao {
private static $instance;

public static function getinstance(){

    if(!isset(self::$instance)){
        try{
            self::$instance = new PDO('mysql:host=localhost;dbname=sistemas_horarios', 'root','');
            self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            echo $e->getMessage();

        }
        
    }
    return self::$instance;
}
  
public static function prepare($sql){
    return self::getinstance()->prepare($sql);
}

public static function ultimoid(){
    
    return self::$instance->lastInsertId();
}
}
