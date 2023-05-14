<?php
require("conexfinal.php");


  if (isset($_POST["posting"])) {
    # Inyeccion de comentarios en la database
    $querysend = "INSERT INTO `comentarios` (`nombre`, `comentario`) VALUES ('".$_POST['nombre']."','".$_POST['comment-box']."')";
    $z = mysqli_query($conexion, $querysend);

    # Redireccionar a la misma pagina despues de enviar el comentario
    header("Location: kimetsu.php");
    exit();
  }






?>







<!DOCTYPE html>
<head>

    <link rel="stylesheet" href="./css/goodcss.css"/>

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


</head>

<body>


    <!--Imprimim foto de perfil i nom-->

    <div class = "registerandlogin">
        <input type="button" name="login" id="login" onclick="location.href='loginmando.php';" value="Login" />
        <input type="button" name ="register" id="register" onclick="location.href='registerform.php';" value="Registrarse" />
    </div>

	<div id="output-container">
		<?php
			function fotoinombo($logged, $info){
				require("conexfinal.php");
				if($logged == "yes"){
					$q = "SELECT * FROM `usuarios` WHERE `email` = '" . $info . "'";
					$z = mysqli_query($conexion, $q);

					if ($z && mysqli_num_rows($z) > 0) {
					$row = mysqli_fetch_assoc($z);
					echo $row['email'];
					} else {
					echo "No results found";
					}



				}


			}
		?>

	</div>


    <div class="containerimagen">
    <img src="fondo.jpg" alt="Imagen de fondo">
    <div class="contenido">
      <!-- Aquí agregarías el contenido de tu página -->
    </div>
    </div>


	<div class ="default-header-color">
    	<img src="./img/header-color.png">
	</div>

	<div class = "logo">
    	<img src="./img/logo.png">
    	<div class="header-links">
        	<ul class="lhorizontal">
          	<li class="home">
            	<a href="main.php" class="ehome">Home   </a>
          	</li>
          	<li class="otras_noticias">
            	<a href="spyxfamily.php" class="ehome">Otras noticias</a>
          	</li>
        	<!--Suscribirse a la newsletter-->
          	<li class="newsletter">
          	<a href="newsletter.php" class="ehome">Newsletter</a>
        	</li>
          	<li class="contactar">
          	<a href="../sendemail/index.php" class="ehome">Contacto</a>
        	</li>
        	</ul>
    	</div>
	</div>

	<div class="lateralimando">
    	<img src="./img/laterales.PNG">
	</div>




	<div class="mandalorian">
    	<h4 class="newstitle">  El primer tráiler de la temporada 3 de 'The Mandalorian' viaja a Mandalore, amplia el alcance de la serie y revela fecha  </h4>
    	<img src="./img/the-mandalorian-tv-4k-0b-2560x1080.jpg">
	</div>

	<div class="bodytext">

    	<h1> En esta nueva temporada, y por lo que revela este primer avance, tenemos a unos Din Djarin (Pedro Pascal) y Grogu como viajeros estelares que los llevará a Mandalore y a la ya conocida capital galáctica Coriscant. Vemos también a un grupo de Jedis tradicionales y a criaturas que parecen ser de la misma raza que el recordado Babu Frik. Y, por supuesto, a Grogu demostrando que gracias a la Fuerza, su tamaño no es algo que se deba subestimar.

        	<br>
        	</br>
          También parece que conoceremos en profundidad a la sociedad mandaloriana, desde las posiciones más integristas a los más tolerantes. "Ser un mandaloriano no es solo aprender a pelear" dice el personaje de Pedro Pascal, y parece que ahondaremos en esa filosofía.
           Entre los directores que tiene esta nueva temporada destaca Lee Isaac Chung, cineasta que estuvo nominado este año al Oscar por 'Minari'. A él se suman Rick Famuyiwa, Rachel Morrison, Carl Weathers, Peter Ramsey y Bryce Dallas Howard, actriz que ya ha despuntado como directora en algunos de los episodios más notorios 'El libro de Boba Fett', donde reaparecía Din Djarin.
          <br></br>En su relativamente corta vida, 'The Mandalorian' ha dado ya unos cuantos tumbos: arrancó con una primera temporada que sorprendió por funcionar de forma absolutamente ajena al laberinto de continuidades de 'Star Wars'. Sacaba buen partido, por supuesto, de la abundante mitología de la franquicia, sobre todo la que está vinculada en torno a Tatooine, pero respiraba a su propio ritmo.
           La esencia de esa primera temporada era Grogu, a quien conocimos como Baby Yoda durante tanto tiempo. Su físico recordaba a uno de los personajes indiscutiblemente más memorables de la trilogía original, pero estaba dotado de una personalidad única, lo que que le convirtió a su vez en un icono por derecho propio. Y todo reforzado por un tono a medio camino entre el western desértico y las historias de espada y brujería de Robert E. Howard con el que la saga había experimentado puntualmente, pero que nunca había eclosionado con tan buen tino.

           </h1>

    <br></br>  <h2 class="indice"> Las historias que terminan y empiezan en la tercera temporada de The Mandalorian </h2>
        <div class="indicecontenido">
          <br>
          </br>
          <br>
          </div>
          <h1>
            Algo que fue obvio en su cierre de la tercera temporada de The Mandalorian. El episodio fue un tributo directo a la trilogía original, que convirtió varias de sus grandes secuencias en una batalla simbólica entre bien y el mal. Al mismo tiempo, recordó que la Space Opera más querida del cine siempre fue un argumento basado en las emociones. </h1>
            <div class = "mandoimg">
                <img src = "./img/baby-yoda.png" alt="manda"> </src>
            </div>
            <h1>
            De modo que volvió de manera parcial a sus comienzos: la trama entre el cazarrecompensas y su pequeño protegido. Din Djarin (Pedro Pascal) salvó su vida en un enfrentamiento contra el Moff Gideon (Giancalo Esposito) y, finalmente, ocupó su lugar como padre de Grogu. En cierta medida, un cierre apropiado y sensible para una etapa de la serie.

          </h1>


        <h1>Buena parte de la entrega se basó precisamente en la exploración de las diferentes facciones mandalorianas sobrevivientes al ataque de Moff Gideon. Lo que extendió el argumento de la tercera temporada de The Mandalorian a nuevos territorios, cada vez más ambiciosos. Con toda probabilidad, de cara a futuros proyectos de Star Wars y a la trama de Ahsoka, con la que guarda notorios vínculos.</h1>

          <h1>No obstante, este último punto apartó a la serie del carácter sencillo y relativamente independiente del Canon G que hasta ahora había tenido. En su primera entrega, The Mandalorian era un homenaje directo a los westerns y narraciones de Samuráis en las que se basó George Lucas para crear su universo.
      </h1>
      <h2 class="problemas"> Un final idílico que conduce a un nuevo comienzo</h2>
      <h1>
        No obstante, con Mandalore de nuevo convertido en hogar para su gente y Din Grogu adoptado por Mando, la tercera temporada de The Mandalorian parece crear las condiciones que le permitirían volver a su punto central.
        Especialmente ahora que el protagonista forma parte del equipo de cazadores de fugitivos de Carson Teva (Paul Sun-Hyung Lee). <br></br>¿Será la cuarta temporada una búsqueda de líderes del Imperio y nuevas aventuras para el dúo de padre e hijo? Esta posría ser una conclusión digna de una narración que nació para recrear lo mejor de Star Wars en un nuevo medio.

      </h1>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/2Q78IeAZvEA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


      <div class="lateraldmando">
          <img src="./img/laterales.PNG">
      </div>
      <div class="commentinput">
      <form action="kimetsu.php" method="post" name="form1">
          <h1 id="texto"> Añadir un comentario anónimo 💬 </h1>
          <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
          <input type="text" name="comment-box" id="comment-box" placeholder="Enter comment" />
          <input type="submit" name="posting" id="posting" value="Enviar" />
      </form>
	  </div>




    <!--Caja de comentarios-->



    <!--Impresion de comentarios en la pagina-->
	<div class="printcom">
    <?php
        $query = "SELECT * FROM `comentarios` ";
        $ejecucion = mysqli_query($conexion, $query);
        while ($row = mysqli_fetch_array($ejecucion)) {
            print '<p style="color: black; font-weight: bolder; font-size: 20px;">' .$row['nombre'];

            print '<p style="color: black; font-weight: normal; font-size: 13px">' .$row['comentario'];
            print "<br> </br>";
        }



        include("functions.php");

        mysqli_close($conexion);
    ?>
</div>





    <footer>
    <div class="container">
  	<div class="row">
    	<div class="col-md-4">
      	<h3>Contacto</h3>
      	<p><i class="fa fa-envelope"></i> correo@ejemplo.com</p>
      	<p><i class="fa fa-phone"></i> +1234567890</p>
      	<p><i class="fa fa-map-marker"></i> Dirección física</p>
    	</div>
    	<div class="col-md-4">
      	<h3>Enlaces importantes</h3>
      	<ul>
        	<li><a href="#">HOME</a></li>
        	<li><a href="#">Acerca de nosotros</a></li>
        	<li><a href="#">Contacto</a></li>
      	</ul>
    	</div>
    	<div class="col-md-4">
      	<h3>Redes sociales</h3>
      	<ul>
        	<li><a href="#">
          	<img src="./img/twitter.png" alt="twitter" class="fa-twitter">
        	</i></a></li>
        	<li><a href="https://www.instagram.com/jujutsu.news/">
          	<img src="./img/insta.png" alt="instagram" class="fa-instagram">
        	</a></li>
      	</ul>
    	</div>
  	</div>
  	<div class="row">
    	<div class="col-md-12">
      	<p class="text-center">&copy; 2023 - Todos los derechos reservados</p>
    	</div>
  	</div>
    </div>
  </footer>

</body>



</html>