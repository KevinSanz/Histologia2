<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/desplegable/CSSJuego1.css" rel="stylesheet" type="text/css">
        <script src="css/desplegable/JQueryLatest.js"></script>
        <script src="css/desplegable/main.js"></script>
         <style>
            body{
                    background-image: url(imagenes/ciudad.jpg);

            }
            
        </style>
    </head>
    <body>
        <div class="container" id="centro">
            <div class="row">
                <div class="col-md-12"><h2 class="text-center" style="color:white;"><br></h2></div>
                <div class="col-md-12"><h2 class="text-center" style="color:white;"><br></h2></div>
                <div class="col-md-12"><h2 class="text-center" style="color:white;"><br></h2></div>
                <div class="col-md-12"><h2 class="text-center" style="color:white;"><br></h2></div>
                <div class="col-md-12"><h2 class="text-center" style="color:white;"><br></h2></div>
                 <div class="col-md-12"><h2 class="text-center" style="color:white;">INICIO DE SESIÓN HISTOLOGÍA</h2></div>
                 
                 <br>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <!--<form action="index2.php" method="post">-->
                        <br>
                        <input id = "usuario_nombre" class="form-control" type="text" placeholder="DNI">
                        <br>
                        <input id = "usuario_clave"  class="form-control" type="password" placeholder="Contraseña">
                        <br>
                        <button class="btn btn-success btn-block" onclick="chequeaPass();"> Entrar</button>
                    <!--</form>-->
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
          
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function chequeaPass(){
            var _usuario_nombre = $('#usuario_nombre').val();
            var _usuario_clave = $('#usuario_clave').val();
            //console.log(_usuario_nombre);
            
            $('#centro').load("inicio.php",{
                usuario_nombre : _usuario_nombre,
                usuario_clave : _usuario_clave
            });
        }
    </script>
</html>