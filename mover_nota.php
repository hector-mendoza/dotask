<?php
	$link = mysql_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
	$db = mysql_select_db("u980603238_notas",$link) or die("<h2>BD no encontrado</h2>");
	session_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: login_web.php");
	}	
	
	

	//$req = (strlen($_SESSION['id_usuario'])*strlen($titulo)*strlen($descrip)) or die('<h2><a href="insertar_nota.php">Completa los campos</a></h2>');

	mysql_query("INSERT INTO notas VALUES('$_GET[id]','$_SESSION[id_usuario]','$_GET[tit]','$_GET[des]')",$link) or die('<h2>Error al eliminar</h2><br><br><a href="index.php"><h1>Regresar</h1></a>');

	mysql_query("DELETE FROM notas_archivadas WHERE id_nota = '$_GET[id]'");
 ?>
 	<script type="text/javascript" charset="utf-8">
		alert('NOTA RECUPERADA :D');
        location.href = "index.php";
	</script>