<!DOCTYPE html>

<html lang="en">
     <?php
         
          
          
        ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prueba de PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/desplegable/CSSJuego1.css" rel="stylesheet" type="text/css">
        <script src="css/desplegable/JQueryLatest.js"></script>
        <script src="css/desplegable/main.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
  $( function() {
    $( "#draggable" ).draggable();
  } );
  </script>
        <style>
            body{
                    background-image: url(imagenes/ciudad.jpg);

            }
            
        </style>
    </head>
    <body>
        
        <div class="container" >
            <div class="row">
                <!--<Este es la primera fila que incluye el titulo Histologia >-->
                <div class="col-md-18"><h2 class="text-center" style="color:white;">   <br>  </h2>
                <div class="col-md-12"><h2 class="text-center" style="color:white;">HISTOLOGÍA</h2>
                <!--<Aqui empieza el menu de la pagina >-->
                <header>
		<div class="menu_bar">
			<a href="#" class="bt-menu">Hitoslogía</a>
		</div>

		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
				<li class="submenu">
					<a href="#">Juegos</a>
					<ul class="children">
                                            <li><a href="Juego1.php">Juego 1</a></li>
						<li><a href="#">Juego 2</a></li>
						<li><a href="#">Juego 3</a></li>
						<li><a href="#">Juego 4</a></li>
					</ul>
				</li>
				<li><a href="#">Resultados</a></li>
                                <li><a href="#">Ramdom</a></li>
				
			</ul>
		</nav>
	</header>
                <!--<Fin menu>-->
                
                </div>
            </div>
            
            <div class="col-md-18"><h2 class="text-center" style="color:white;">Juegos</h2>
                <div class="col-md-18"><h2 class="text-center" style="color:white;">   <br>  </h2>
                    <!--<qui empiezan las imagenes>-->
            <div class="row">
                
                    <div class="col">
                        <div class="col-sm-4">
                            <div draggable="true">
                            <a id="imagen1" href="#" class="thumbnail" onclick="dibujaLinea();">
                            <img src="imagenes/fondoNico.jpg" alt="...">
                            <br>
                            </a>
                            </div>
                            <a href="#" class="thumbnail">
                            <img src="imagenes/fondoNico.jpg">
                            </a>
                            
                            <a href="#" class="thumbnail">
                            <img src="imagenes/fondoNico.jpg">
                            </a>
                            
                            <a href="#" class="thumbnail">
                            <img src="imagenes/fondoNico.jpg">
                            </a>
                        </div>
                    
                     </div>
                <div class="col">
                        <div class="col-sm-4">
                            
                        </div>
                    
                     </div>
                <div class="col">
                        <div class="col-sm-4">
                            <a id="imagen2" href="#" class="thumbnail">
                            <img src="imagenes/fondoNico.jpg" alt="...">
                            <br>
                            </a>
                            <div style="">
                            <a href="#" class="thumbnail">
                            <img src="imagenes/fondoNico.jpg">
                            </a>
                            
                            <a href="#" class="thumbnail" >
                            <img src="imagenes/fondoNico.jpg">
                            </a>
                            
                            <a href="#" class="thumbnail">
                            <img src="imagenes/fondoNico.jpg">
                            </a>
                        </div>
                    
                     </div>
            </div>
                    <div class="col-md-18"><h2 class="text-center" style="color:white;">Progreso</h2>
                <div class="col-md-18"><h2 class="text-center" style="color:white;">  </h2>
                    <div class="row">
                       <!--<Aqui empieza el Progreso LA tabla >--> 
                       
                       <div class="jumbotron">
                            <div class="container">
                                <h1>Tu Progreso</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <p><a class="btn btn-primary btn-lg" role="button">Leer más</a></p>
                            </div>
                        </div>
                    
                </div>
                <div class="col-md-4">
                    
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
                <svg><line id="line1"/></svg>
        <?php
          
        ?>
    </body>
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function dibujarLinea(){
            var line1 = $('#line1');
            var div1 = $('#imagen1');
            var div2 = $('#imagen2');
            var pos1 = div1.position();
            var pos2 = div2.position();
            line1.attr('x1',pos1.left).attr('y1',pos1.top).attr('x2',pos2.left).attr('y2',pos2.top);
    }
    </script>