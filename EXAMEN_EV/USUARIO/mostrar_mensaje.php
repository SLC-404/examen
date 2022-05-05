<?php
include "conectar_bd.php";

$consulta = mysqli_query($conexion, "SELECT * FROM CHATS")
    or die("ERROR AL TRAER LOS DATOS");

while ($extrer = mysqli_fetch_array($consulta)) {

    if($extrer['id_usuario']==2){
        echo'<div class="media media-chat media-chat-reverse">';
        echo'<img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">';
        echo'<div class="media-body">';
        echo'<p>'.$extrer['mensaje'].'</p>';
        echo'<p class="meta" style="color:black"><time datetime="2022">'.$extrer['fecha'].'</time></p>';
        echo'</div>';
        echo'</div>';
    }
    if($extrer['id_usuario']==1){
    echo'<div class="media media-chat">';
    echo'<img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">';
    echo'<div class="media-body">';
    echo'<p>'.$extrer['mensaje'].'</p>';
    echo'<p class="meta"><time datetime="2022">'.$extrer['fecha'].'</time></p>';
    echo'</div>';
    echo'</div>';
    }
}