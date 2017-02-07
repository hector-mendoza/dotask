<?php
	$link = mysql_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
	$db = mysql_select_db("u980603238_notas",$link) or die("<h2>BD no encontrado</h2>");
	session_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: login_web.php");
	}	

		$sql = "UPDATE notas SET ";
		$sql .= "titulo='".$_POST["titulo"]."', ";
		$sql .= "descripcion='".$_POST["descripcion"]."' ";

		$sql .= "WHERE id_nota=".$_POST['id_nota'];

		

		if (mysql_query($sql)) {
			?>
			<script type="text/javascript" charset="utf-8">
              alert('NOTA ACTUALIZADA');
              location.href = "index.php";
            </script>
            <?php
		}else{
			?>
			<script type="text/javascript" charset="utf-8">
              alert('ERROR AL ACTUALIZAR NOTA');
              location.href = "modificar_nota.php";
            </script>
            <?php
		}
 ?>