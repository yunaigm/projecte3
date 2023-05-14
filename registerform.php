<!--Poner arriba un boton para ir a la pagina principal (donde el 'selector' de noticias)-->


<?php
    include_once ("conexfinal.php");
?>


<!DOCTYPE html>
<html>
<head>



  <link rel="stylesheet" href="./css/registergoodcss.css">
</head>
<body id="registerstyle">
  <div id="registerformu">
    <h1 id="titulo">Formulario de Registro</h1>
    <form action="registerform.php" method="post" name="form3">
      <label for="nombrereg">Username:</label><br>
      <input type="text" id="nombrereg" name="nombrereg" placeholder="Nombre" required><br>

      <label for="apellidos">Apellidos:</label><br>
      <input type="text" id="apellidos" name="apellidos" required><br>

      <label for="birthday">Fecha de tu Cumpleaños:</label><br>
      <input type="date" id="birthday" name="birthday" required><br>

      <label for="pronombre">Indica tu(s) pronombre(s):</label><br>
      <input type="text" id="pronombre" name="pronombre" required><br>

      <label for="contrasena">Contraseña:</label><br>
      <input type="password" id="contrasena" name="contrasena" required><br>

      <label for="email">Correo electrónico:</label><br>
      <input type="text" id="email" name="email" required><br>

      <label for="img">Foto de perfil</label><br>
      <input type="file" id="img" name="img"><br><br>

      <input type="submit" id="regenviado" name="regenviado" value="Enviar">
    </form>
  </div>
</body>
</html>



<?php
#Vamos a enviar los datos del registro a la database.

   
    
    if (isset($_POST['regenviado'])){
        $q= "INSERT INTO `usuarios` (`nombrereg`, `apellidos`, `cumple`, `pronombre`, `contrasena`, `email`, `img`) VALUES ('".$_POST['nombrereg']."','".$_POST['apellidos']."','".$_POST['birthday']."','".$_POST['pronombre']."','".$_POST['contrasena']."','".$_POST['email']."','".$_POST['img']."')";
        $z=mysqli_query($conexion, $q);
        echo 'Registro completado correctamente';

    }


?>