<?php include('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/gg6easy.css">
    <link rel="stylesheet" href="pepito.css">
    <title>Ejemplo1</title>
</head>
<body>

    <div class="formulario">
        <div class= "enviar">

        <form action="conexion.php" method="post">
            <input type="text" name="nom" placeholder="Nombre">
            <input type="text" name="ape" placeholder="Apellido">
            <button type="submit" name="enviar">Enviar</button>
            
        </form>
        </div>

        <div class= "borrar">
            <form action="eliminar.php" method="post">
            <input type="text" name="nombre1" placeholder="Nombre">
            <input type="text" name="apellido" placeholder="Apellido">
            <button type="submit" name="borrar">Borrar</button>

        </form>
        </div>

    </div>

    
</body>
</html>