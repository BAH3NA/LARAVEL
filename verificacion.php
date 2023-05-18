<?php
//Se hace conexion a la base de datos con PDO
$server="127.0.0.1:3308";
$user="root";
$password="";


try{
    $conexion=new PDO("mysql:host=$server;dbname=prueba",$user,$password);
    $conexion->setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $er){
    
}
$conexion=null;

//Sesion donde se declarara dos variables para el inicio de sesion()




?>