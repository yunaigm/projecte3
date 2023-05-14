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
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/main.css"/>

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
            	<a href="zelda.php" class="ehome">Otras noticias</a>
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


    <h1 class="bienvenida">
      ¡Bienvenido/a a nuestra página web sobre noticias de anime, películas y guías de videojuegos! Aquí encontrarás toda la información más relevante sobre tus pasatiempos favoritos, así como reseñas, noticias de última hora y todo lo que necesitas saber para mantenerte actualizado/a en el mundo del entretenimiento. ¡Esperamos que disfrutes tu experiencia en nuestro sitio y encuentres la información que estás buscando!
    </h1>



    	<h4 class="newstitle"> Noticias destacadas  </h4>



  <div class="maii">
    <div class="swiper mySwiper swiper-initialized swiper-horizontal swiper-backface-hidden">
    <div class="swiper-wrapper" id="swiper-wrapper-e7c210c5b6e829cf3" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
      <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 9" style="width: 442.333px; margin-right: 30px;">
        <h1 class="mandacol"> <a href="mandalorian.php"> El primer tráiler de la temporada 3 de 'The Mandalorian' viaja a Mandalore, amplia el alcance de la serie y revela fecha</a></h1>
        <img src="./img/portada3.jpg"></src>
      </div>
      <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 9" style="width: 442.333px; margin-right: 30px;">
        <h1 class="mariocol"> <a href="mario.php">Super Mario Bros, de videojuego legendario a película del año</a></h1>
        <img src="./img/portada4.jpg"></src>
      </div>
      <div class="swiper-slide" role="group" aria-label="3 / 9" style="width: 442.333px; margin-right: 30px;">
        <h1 class="zeldacol"> <a href="zelda.php"> Guía The Legend of Zelda: Tears of the Kingdom, trucos, consejos y secretos</a></h1>
        <img src="./img/portada2.jpg">
      </div>
      <div class="swiper-slide" role="group" aria-label="4 / 9" style="width: 442.333px; margin-right: 30px;">
        <h1 class="kimetsucol"> <a href="kimetsu.php"> ¿Cuándo se estrena el próximo capítulo de Kimetsu no Yaiba? Este es el calendario para la temporada 3 del anime</a></h1>
        <img src="./img/portada1.jpg">
      </div>
      <div class="swiper-slide" role="group" aria-label="4 / 9" style="width: 442.333px; margin-right: 30px;">
        <h1 class="sxfcol"> <a href="spyxfamily.php"> Spy x Family tendrá segunda temporada y película</a></h1>
        <img src="./img/portada5.jpg">
      </div>

    </div>
    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiperpagination bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 7"></span></div>
  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>




	<div class="bodytext">


        	<br>
        	</br>
            <br>
        	</br>
            <br>
        	</br>
            <br>
        	</br>
            <br>
        	</br>
            <br>
        	</br>
            <br>
        	</br>
            <br>
        	</br>
            

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

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>


</body>



</html>