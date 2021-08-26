<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();

$mail->Host = 'smtp.hostinger.com';

$mail->Port = 587;

$mail->isHTML(true);

$mail->CharSet = 'UTF-8';

$mail->SMTPAuth = true;

$mail->Username = 'info@tallerdeapps.com';

$mail->Password = 'xxxxxxxxxx';

$mail->setFrom('info@tallerdeapps.com', 'Formulario Contacto');

$mail->addAddress('info@tallerdeapps.com', 'TallerdeAPPS');

if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {

    $mail->Subject = 'PHPMailer TallerdeApps';

    $mail->isHTML(false);

    $mail->Body = <<<EOT

  Nombre: {$_POST['name']}

  Email: {$_POST['email']}

  Mensaje: {$_POST['message']}

  EOT;

    if (!$mail->send()) {
        //$msg es el texto del alert
        //$enviado la uso para controlar color del alert según sea envio ok, con error o sin enviar todavía
        $enviado = 0;
        $msg = 'Lo siento, ocurrió un error. Inténtalo mas tarde';
    } else {
        $enviado = 1;
        $msg = '¡Mensaje enviado! gracias por contactarnos';
    }
} else {
    $enviado = 2;
    $msg = '¡Compártelo con nosotros!';
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap  -->
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- JS, Popper.js, and jQuery -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

        <style>
            .text-responsive {
                font-size: calc(100% + 1vw + 1vh);
            }
        </style>
        <title>El Taller de las Apps</title>
    </head>

    <body class="bg-dark">
        <!--empieza navbar -->    
        <nav class="navbar navbar-expand-lg fixed-top  bg-info navbar-dark sticky-top">
            <a class="navbar-brand" href="https://www.tallerdeapps.com/" target="_blank"><img src="../img/logoTaller36.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <!-- sw momento vacio -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="download" aria-expanded="false">Proyectos <span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="download">
                            <a class="dropdown-item" href="https://www.tallerdeapps.com/preguntas/">Preguntas Frecuentes BBDD</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://www.tallerdeapps.com/monitorSNMP/">Monitor SNMP</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://www.tallerdeapps.com/infodevice/">Info Device</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.tallerdeapps.com/contacto/">Contacto</a>
                    </li>
                </ul>                
            </div>
        </nav><!-- fin de navbar-->

        <div class="container">
            <div class="row pt-sm-5 pt-3">
                <div class="col-md-12">
                    <form id="register-form" class="form-horizontal" method="post">
                        <fieldset>

                            <div class="form-group row">
                                <span class="col-1 text-center"></span>
                                <div class="col-11 col-md-8">
                                    <div class="alert alert-info">
                                        <p class="text-center h4">¿Tienes algo en mente?</p>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row my-1">
                                <span class="col-1 col-offset-2 text-center"></span>
                                <div class="col-11 col-md-8">
                                    <div class="text-light text-left h-5">Formulario de contacto</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-1 text-right px-0"><i class="text-white-50  fa fa-user bigicon"></i></span>
                                <div class="col-11 col-md-8">
                                    <input id="name" name="name" type="text" placeholder="nombre" class="form-control p-1" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-1 text-right px-0"><i class="text-white-50  fa fa-envelope-o bigicon"></i></span>
                                <div class="col-11 col-md-8">
                                    <input id="email" name="email" type="email" placeholder="email (para responder, no se comparte)" class="form-control p-1" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-1 text-right px-0"><i class="text-white-50 fa fa-pencil-square-o bigicon"></i></span>
                                <div class="col-11 col-md-8">
                                    <textarea class="form-control p-1" id="message" name="message" placeholder="Introduce aquí tu mensaje" rows="7" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-11 col-md-9 text-right">
                                    <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                                </div>
                            </div>

                            <div class="form-group row">
                                <span class="col-1 col-offset-2 text-center"></span>
                                <div class="col-11 col-md-8">
                                    <div id="alertaEmail" class="alert alert-dark p-0">
                                        <p class="text-black text-center h5"><?php
                                            if (!empty($msg)) {

                                                //todo
                                                //document.getElementById("MyElement").classList.add('MyClass');
                                                //document.getElementById("MyElement").classList.remove('MyClass');
                                                if ($enviado == 0) {
                                                    //cambiar class de alert a Amarillo
                                                    
                                                    echo '<script type="text/javascript">
                                                         if (document . getElementById("alertaEmail") . classList . contains("alert-dark")) {
                                                            document . getElementById("alertaEmail") . classList . remove("alert-dark");
                                                         }
                                                         document . getElementById("alertaEmail") . classList . add("alert-warning");
                                                    </script>';
                                                    
                                                } else if ($enviado == 1) {
                                                    //cambiar class de alert a Verde
                                                     echo '<script type="text/javascript">
                                                         if (document . getElementById("alertaEmail") . classList . contains("alert-dark")) {
                                                            document . getElementById("alertaEmail") . classList . remove("alert-dark");
                                                         }
                                                         document . getElementById("alertaEmail") . classList . add("alert-success");
                                                    </script>';
                                            
                                                   
                                                    
                                                }
                                                echo "$msg";
                                            }
                                            ?></p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>

        <!-- Load Validation JS -->
        <script type="text/javascript" src="../js/bs4-form-validation.js"></script>
        <script type="text/javascript">
            let form = new Validation("register-form");
            // Validation Functions
            form.requireText("name", 2, 20, [], []);
            form.requireEmail("email", 4, 30, [" "], []);
            form.registerPassword("password", 6, 20, [" "], [], "confirm");
        </script>
    </body>
</html>