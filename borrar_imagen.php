<?php
	$link = mysql_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
	$db = mysql_select_db("u980603238_notas",$link) or die("<h2>BD no encontrado</h2>");
	session_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: login_web.php");
	}	
	
	

	//$req = (strlen($_SESSION['id_usuario'])*strlen($titulo)*strlen($descrip)) or die('<h2><a href="insertar_nota.php">Completa los campos</a></h2>');

	mysql_query("DELETE FROM notas_imagenes WHERE id_img = '$_GET[id]'");
 ?>

 <script type="text/javascript" charset="utf-8">
		alert('IMAGEN ELIMINADA :D');
        location.href = "imagenes.php";
	</script>