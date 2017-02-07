<?php
//conexion bd y server
  $link = mysqli_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
  $db = mysqli_select_db($link,"u980603238_notas") or die("<h2>BD no encontrado</h2>");

  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $pass=$_POST['pass'];
  $r_pass=$_POST['r_pass'];

  //setcookie('nomUser', $nombre, time() + 5800);
  //setcookie('emailUser', $correo, time() + 5800);


  $req = (strlen($nombre)*strlen($email)*strlen($pass)*strlen($r_pass)) or die('<h2><a href="registro_usuarios.php">Completa los campos</a></h2>');

  if($pass != $r_pass){
    die('Las password no coinciden<br><h2><a href= "registro_web.php">Regresar</a></h2>');
  }

  //$password = md5($r_password);

  mysqli_query($link,"INSERT INTO usuarios VALUES('','$nombre','$email','$pass')") or die("Error de envío");

  echo '
    <h1>Registro completo</h1>
    <h1>Gracias por su registro, ya es todo un usuario</h1>
    <h1><a href = "login_web.php">Conectarse</a></h1>
  '
 ?>
