<?php
header('Content-Type: text/html; charset=UTF-8');
header("Content-Type: text/html; charset=utf-8");
//___________________________________________________CONEXION A LA BASE DE DATOS____________________________________
$user = "ukxnyslva8zjnzmd";
$pass = "WOA9mf9MffoSHoCXQ5B5";
$server = "bqxj665ylkzbyniprpzo-mysql.services.clever-cloud.com";
$db = "bqxj665ylkzbyniprpzo";
$conexion = mysqli_connect($server, $user, $pass, $db)
    or die("ERROR EN LA CONEXION");
//_____________________________________________________________________________________________________________________
