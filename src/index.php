<?php
if(!isset($_SESSION['idFun'])){
session_start();
}

include 'control/Cindex.php';
$index = new Cindex();
$index->paginas(@$_GET['pg'],@$_POST,@$_GET['id']);