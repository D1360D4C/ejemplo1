<?php
include_once("cn.php");

modificar($conexion);

function modificar($conexion){
    $actu_nombre = $_POST['nombre_actu'];
    $actu_ape = $_POST['ape_actu'];
    $nuevo_nom = $_POST['nombre_nuevo'];
    $nuevo_ape = $_POST['apellido_nuevo'];
    $consulta = "UPDATE usuario SET nombre = '$nuevo_nom', apellido = '$nuevo_ape' WHERE nombre='$actu_nombre' OR apellido = '$actu_ape' ";
    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);

}
?>