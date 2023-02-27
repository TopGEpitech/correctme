<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$ipServer = "localhost";
$NomBase = "MyTodoList";
try{
    // Connexion à la base
    $db = new PDO("mysql:host=".$ipServer.";dbname=".$NomBase.";port=3306", 'root','root');
    $db->exec('SET NAMES "UTF8"');
}catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
    die()   ;
}   
