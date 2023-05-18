<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
</head>
<body>

<!--Se coloca el php dentro de body-->
<?php
//Se hace conexion a la base de datos con PDO
$server="127.0.0.1:3308";
$user="root";
$password="";


try{
    $conexion=new PDO("mysql:host=$server;dbname=prueba_3",$user,$password);
    $conexion->setAttribute(PDO::ATRR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    
}
$conexion=null;

//Sesion donde se declarara dos variables para el inicio de sesion()

$login= "sesion";
$register= "registro";


?>
</body>
</html>

