<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Aplicativo</title>
</head>
<body>
    <center>
    <fieldset>
    <form action="verificacion.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario"><br><br>
        <label for="usuario">Contraseña</label>
        <input type="text" name="contraseña"><br><br>
        <input type="submit" value="Iniciar Sesion" name="sesion" id="Sesion">
        <input type="submit" value="REGISTRARSE" names="registro" id="Register">
    </fieldset>
</center>
</body>
</html>