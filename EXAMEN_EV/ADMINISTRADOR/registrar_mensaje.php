<?php
include "conectar_bd.php";




if (isset($_POST['mensaje'])) {
    $mensaje = $_POST['mensaje'];

    $insertar = "INSERT INTO chats (id_usuario,mensaje,fecha)VALUES
('1','$mensaje',now())";
    $resultado_2 = mysqli_query($conexion, $insertar)
        or die("ERROR AL INSERTAR LOS DATOS");
}




if (isset($_POST['documento'])) {
    $titulo = rand(1000, 10000) . "-" . $_FILES['documento']['name'];
    $insertar = "INSERT INTO archivos_adjuntos (id_usuario,archivo,nombre_archivo,fecha)VALUES
('1','$titulo','nombre',now())";
    $resultado_2 = mysqli_query($conexion, $insertar)
        or die("ERROR AL INSERTAR LOS DATOS");
}
mysqli_close($conexion);
header("location:index.php");
exit();
