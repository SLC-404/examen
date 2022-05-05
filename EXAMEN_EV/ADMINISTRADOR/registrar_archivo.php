<?php
include "conectar_bd.php";

$insertar = "INSERT INTO numero_de_mensaje (valor)VALUES
('1')";
$resultado = mysqli_query($conexion, $insertar)
    or die("ERROR AL INSERTAR LOS DATOS");

$consulta = mysqli_query($conexion, "SELECT * FROM numero_de_mensaje")
    or die("ERROR AL TRAER LOS DATOS");
$numero = 0;
while ($extrer = mysqli_fetch_array($consulta)) {
    $numero = $extrer['id_n'];
}
if (isset($_POST['enviar_documento'])) {
    $titulo = $_FILES['documento']['name'];
    $insertar = "INSERT INTO archivos_adjuntos (id_usuario,archivo,nombre_archivo,n_mensaje,fecha)VALUES
    ('1','$titulo','$titulo','$numero',now())";
    $resultado_2 = mysqli_query($conexion, $insertar)
        or die("ERROR AL INSERTAR LOS DATOS");
}
mysqli_close($conexion);
header("location:index.php");
exit();
