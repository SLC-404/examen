<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bbbootstrap.com/embed/simple-chat-application-57631463">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card card-bordered">
                    <div class="card-header">
                        <h4 class="card-title"><strong>Chat</strong></h4>
                    </div>

                    <div class="ps-container ps-theme-default ps-active-y" id="chat-content" style="overflow-y: scroll !important; height:400px !important;">
                        <?php
                        include "mostrar_mensaje.php";
                        ?>
                    </div>
                    <form action="registrar_mensaje.php" method="POST" enctype="multipart/form-data">
                        <div class="publisher bt-1 border-light">
                            <img class="avatar avatar-xs" src="https://img.icons8.com/color/36/000000/administrator-male.png" alt="...">
                            <input class="publisher-input" type="text" name="mensaje" id="mensaje" placeholder="Escribir...">
                            <span>
                                <i></i>
                                <!--<input name="documento" id="documento" type="file">-->
                            </span>
                            <input type="submit" class="publisher-btn text-info">
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

</html>