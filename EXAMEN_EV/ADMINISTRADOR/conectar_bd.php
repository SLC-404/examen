<?php
header('Content-Type: text/html; charset=UTF-8');
header("Content-Type: text/html; charset=utf-8");
//___________________________________________________CONEXION A LA BASE DE DATOS____________________________________
$user = "root";
$pass = "";
$server = "localhost";
$db = "CHAT";
$conexion = mysqli_connect($server, $user, $pass, $db)
    or die("ERROR EN LA CONEXION");
//_____________________________________________________________________________________________________________________
