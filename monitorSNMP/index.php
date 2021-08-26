
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MonitorSNMP</title>
        <!-- Bootstrap  -->
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/9c0c203a4a.js" crossorigin="anonymous"></script>

        <script src="js/compressor.js"></script>
        <!-- JS, Popper.js, and jQuery -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    </head>
    <body class="bg-dark">

        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="pt-3 text-white">
                        <h3>MonitorSNMP</h3>
                        <p>Aplicación en Java que escanea la red buscando impresoras para leer los contadores de copias y comprobar estado. Actualmente está en fase de pruebas.
                            Reconoce una lista de varias impresoras Ricoh y genera una tabla con Modelo, Número de serie, copias BN y copias color. Esta tabla se puede enviar desde la aplicación por email.</p>
                        <p>De momento solo comparto unas capturas de pantalla. Si estas interesado en recibir más información puedes usar el <a href="https://tallerdeapps.com/contacto/">formulario de contacto</a></p>
                    </div>

                    <img id="snmp" class="col-12" src="snmpCaptura.jpg" alt="snmpCaptura"/>
                    <img id="email" class="col-12 pt-3" src="emailCaptura.jpg" alt="emailCaptura"/>
                </div>
            </div>
        </div>

        <script>
            function getFullscreen(element) {
                if (element.requestFullscreen) {
                    element.requestFullscreen();
                } else if (element.mozRequestFullScreen) {
                    element.mozRequestFullScreen();
                } else if (element.webkitRequestFullscreen) {
                    element.webkitRequestFullscreen();
                } else if (element.msRequestFullscreen) {
                    element.msRequestFullscreen();
                }
            }

            var imagenSnmp = document.getElementById("snmp");
            var imagenEmail = document.getElementById("email");
            
            imagenSnmp.addEventListener("dblclick", function (e) {
                getFullscreen(this);
            }, false);
            
             imagenEmail.addEventListener("dblclick", function (e) {
                getFullscreen(this);
            }, false);


        </script>




    </body>
</html>
