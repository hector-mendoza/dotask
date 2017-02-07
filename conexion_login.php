<?php
session_start();
$link =mysqli_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas");
$db = mysqli_select_db($link,"u980603238_notas") or die("<h2>BD no encontrado</h2>");


$email = $_POST['email'];
$pass=$_POST['pass'];

$req = (strlen($email)*strlen($pass)) or die('<a href = "login_web.php"><h2>Completa los campos</h2></a>');

$sql = "SELECT id_usuario FROM usuarios WHERE correo = '$email' AND telefono = '$pass'";
$comprobar = mysqli_query($link,$sql);




if(mysqli_num_rows($comprobar) > 0){
  $datos_usuario = mysqli_fetch_array($comprobar);
  $id_usuario = $datos_usuario['id_usuario'];

  $_SESSION['id_usuario'] = $id_usuario;
  //$id = $_SESSION['id_usuario'];
  $id_usuario = mysql_result($comprobar, 0);
  

  setcookie("login_id_user", "$id_usuario", time() + 31535000);

  //echo "$_SESSION[nombreUsuario]";

  //if ($_SESSION['nombreUsuario'] == "admin") {
    //header("Location:index_admin.php");
  //}
  
  header("Location:index.php");
} else
  echo "
    <h2>Usuario o password incorrectos</h2> <br>   

    <h2><a href=login_web.php>VOLVER</a></h2>
  ";



 ?>
