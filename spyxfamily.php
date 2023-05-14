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

    <link rel="stylesheet" href="./css/spyxfamily.css"/>

    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>


</head>

<body>


    <!--Imprimim foto de perfil i nom-->

    <div class = "registerandlogin">
        <input type="button" name="login" id="login" onclick="location.href='loginzelda.php';" value="Login" />
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
            	<a href="mandalorian.php" class="ehome">Otras noticias</a>
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

	<div class="lateralizelda">
    	<img src="./img/laterales.PNG">
	</div>




	<div class="mandalorian">
    	<h4 class="newstitle"> Spy x Family tendrá segunda temporada y película </h4>
    	<img src="./img/bannerspyxf.jpg">
	</div>

	<div class="bodytext">

    	<h1> La primera parte del anime de Spy x Family se estrenó el pasado 9 de abril y contó con 12 episodios.
            Por su parte, segunda parte comenzó en octubre y contará con 13 episodios. De este modo el anime finalizará con 25 episodios. Todos ellos se encuentran disponibles en Crunchyroll en VOSE. En cuanto al elenco de trabajo, todos los miembros encargados de la primera parte del anime repiten.

        	<br>
        	</br>
          De este modo, Kazuhiro Furuhashi  (Dororo, Altair, Neo Yokio) dirige este proyecto para los estudios Cloverworks y Wit Studio. Kazuaki Shimada (The Promise Neverland) es el encargado del diseño de personajes,
              mientras que (Dorohedoro, Sakura Quest) es el encargado de componer la música de este anime. El actor de doblaje Takuya Eguchi da voz al personaje Loid Forger, mientras que Atsumi Tanezaki (Mujika en The Promised Neverland 2) pone voz a Anya Forger y Saori Hayami (Shinobu Kochô en Kimetsu no Yaiba) pone voz a Yor Forger.
     </h1>

        <br></br>  <h2 class="indice"> El manga de Spy x Family, la alternativa</h2>
        <div class="indicecontenido">
          <br>
          </br>
          <br>
          </div>
          <h1>
          El manga de Spy x Family comenzó su publicación en marzo de 2019 en la revista digital Shônen Jump + de Shueisha. La editorial japonesa lanzó el noveno tomo el pasado 4 de abril. El décimo tomo saldrá en Japón el 4 de octubre. La obra de Tatsuya Endo fue nominada a mejor obra en los 12th Manga Taishou Award en 2019, mejor manga shônen en 44 la edición de los Kodansha Manga Awards y mejor manga en los 24 Tezuka Osamu Cultural Prize. En este año la obra ha sido nominada a Mejor Edición

          <h1> de EE.UU. de Material Internacional — Asia a los premios Will Eisner Comic Industry Awards de este año. </h1>
          <div class = "mandoimg">
              <img src = "./img/fondoxx.jpg" alt="manda"> </src>
          </div>
          <h1>
        Los países de Westalis y Ostania libran desde hace años una guerra fría donde el espionaje y los asesinatos son moneda corriente. El inigualable espía conocido como Twilight es el mejor agente de Westalis que tiene por objetivo encargarse del poderoso Donovan Desmond. El problema es que Desmond es un ermitaño antisocial cuyas únicas apariciones públicas son en los actos escolares de su hijo. Twilight deberá acercarse al objetivo lo suficiente como para desbaratar su agenda secreta.
          </h1>


        <h1>Para ello, sólo deberá simular que es un hombre de familia. Sin embargo, hay un inconveniente, sólo tiene 7 días para conseguir la familia ideal. Es por eso que bajo la identidad del psiquiatra Loid Forger, Twilight reclutará a Yor Briar, una civil ostaniana que quiere tener bajo perfil como su esposa. Mientras que Anya, una huerfanita será su hija. Pero no todo es tan facil. Yor es una asesina profesional buscada por ambos bandos y Anya es una prófuga de un laboratorio secreto donde consiguió poderes telepáticos.
      </h1>
      <h2 class="problemas"> 'Spy x Family' película 'Code: White': Fecha de estreno y dónde ver en España</h2>
      <h1>
        Spy X Family Code: White' llegará a los cines de Japón el 22 de diciembre de 2023, aunque habrá que esperar a ver quién y cuando la estrena en España (probablemente Crunchyroll, como 'Suzume'). Antes llegará la temporada 2, de la que todavía no sabemos el número de episodios, pero nos extrañaría que fuese tan larga como la primera. La temporada 2 de 'Spy X Family' llegará en octubre de 2023'. Se prevé que se estrene en Crunchyroll, que ya es el servicio de streaming donde pudimos y podemos ver en exclusiva la primera temporada.
        Sabremos mejor el argumento de la película cuando sepamos hasta donde cubre la temporada 2. <br></br>Por ahora se ha confirmado que será una historia original creada por los responsables del anime sin ningún vínculo con el mangaka.

      </h1>


      <div class="lateraldzelda">
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