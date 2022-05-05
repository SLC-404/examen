<?php
include "conectar_bd.php";

$mensaje = $_POST['mensaje'];
#$documento = $_POST['documento'];

$insertar = "INSERT INTO chats (id_usuario,mensaje,fecha)VALUES
('2','$mensaje',now())";
$resultado_2 = mysqli_query($conexion, $insertar)
    or die("ERROR AL INSERTAR LOS DATOS");
mysqli_close($conexion);
header("location:index.php");
exit();
