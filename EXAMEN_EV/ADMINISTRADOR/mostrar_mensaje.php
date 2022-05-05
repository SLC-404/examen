<?php
include "conectar_bd.php";

$vector_1[][] = "";
$vector_2[][] = "";
$contador = 0;
$n_chats = 0;
$n_archivos = 0;
#===============================================================================0
$consulta = mysqli_query($conexion, "SELECT * FROM numero_de_mensaje")
    or die("ERROR AL TRAER LOS DATOS DE NUMERO DE MENSAJES");
$numero = 0;
while ($extrer = mysqli_fetch_array($consulta)) {
    $numero = $extrer['id_n'];
}
#===============================================================================
$consulta_chat = mysqli_query($conexion, "SELECT * FROM chats")
    or die("ERROR AL TRAER LOS DATOS DE CHATS");

while ($extrer = mysqli_fetch_array($consulta_chat)) {
    $vector_1[0][$contador] = (string)$extrer['id_usuario'];
    $vector_1[1][$contador] = (string)$extrer['mensaje'];
    $vector_1[2][$contador] = (string)$extrer['n_mensaje'];
    $vector_1[3][$contador] = (string)$extrer['fecha'];
    $contador = $contador + 1;
}
$n_chats = $contador;
#===============================================================================
$consulta_archivo = mysqli_query($conexion, "SELECT * FROM archivos_adjuntos")
    or die("ERROR AL TRAER LOS DATOS DE ARCHIVOS");
$contador = 0;
while ($extrer = mysqli_fetch_array($consulta_archivo)) {
    $vector_2[0][$contador] = (string) $extrer['id_usuario'];
    $vector_2[1][$contador] = (string) $extrer['archivo'];
    $vector_2[2][$contador] = (string) $extrer['n_mensaje'];
    $vector_2[3][$contador] = (string) $extrer['fecha'];
    $contador = $contador + 1;
}
$n_archivos = $contador;
$entrada_c = 0;
$entrada_a = 0;
#===============================================================================
$contador = 0;
for ($i = 1; $i <= $numero; $i++) {


    if ($n_chats > $entrada_c) {
        if ($vector_1[0][$entrada_c] == 1 && $vector_1[2][$entrada_c] == $i) {
            echo '<div class="media media-chat media-chat-reverse">';
            echo '<img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">';
            echo '<div class="media-body">';
            echo '<p>' . $vector_1[1][$entrada_c] . '</p>';
            echo '<p class="meta" style="color:black"><time datetime="2022">' . $vector_1[3][$entrada_c] . '</time></p>';
            echo '</div>';
            echo '</div>';
            $entrada_c = $entrada_c + 1;
        } else {
            if ($vector_1[0][$entrada_c] == 2 && $vector_1[2][$entrada_c] == $i) {
                echo '<div class="media media-chat">';
                echo '<img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">';
                echo '<div class="media-body">';
                echo '<p>' . $vector_1[1][$entrada_c] . '</p>';
                echo '<p class="meta"><time datetime="2022">' . $vector_1[3][$entrada_c] . '</time></p>';
                echo '</div>';
                echo '</div>';
                $entrada_c = $entrada_c + 1;
            }
        }
    }


    if ($n_archivos > $entrada_a) {
        if ($vector_2[0][$entrada_a] == 1 && $vector_2[2][$entrada_a] == $i) {
            echo '<div class="media media-chat media-chat-reverse">';
            echo '<img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">';
            echo '<div class="media-body">';
            echo '<p>' . $vector_2[1][$entrada_a] . '</p>';
            echo '<p class="meta" style="color:black"><time datetime="2022">' . $vector_2[3][$entrada_a] . '</time></p>';
            echo '</div>';
            echo '</div>';
            $entrada_a = $entrada_a + 1;
        } else {
            if ($vector_2[0][$entrada_a] == 2 && $vector_2[2][$entrada_a] == $i ) {
                echo '<div class="media media-chat">';
                echo '<img class="avatar" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">';
                echo '<div class="media-body">';
                echo '<p>' . $vector_2[1][$entrada_a] . '</p>';
                echo '<p class="meta"><time datetime="2022">' . $vector_2[3][$entrada_a] . '</time></p>';
                echo '</div>';
                echo '</div>';
                $entrada_a = $entrada_a + 1;
            }
        }
    }
    $contador = $contador + 1;
}
