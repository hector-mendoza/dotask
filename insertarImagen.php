<?php
//conexion a la base de datos
	$link = mysql_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
	$db = mysql_select_db("u980603238_notas",$link) or die("<h2>BD no encontrado</h2>");
	session_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: login_web.php");
	}	

//comprobamos si ha ocurrido un error.
if ($_FILES["imagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 100000;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "imagenes/" . $_FILES['imagen']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado){
				$nombre = $_FILES['imagen']['name'];
				@mysql_query("INSERT INTO notas_imagenes (id_usuario,titulo,imagen) VALUES ('$_SESSION[id_usuario]','$_POST[titulo]','$nombre')") ;
					header("Location: imagenes.php");
			} else {
				echo "ERROR <a href='insertar_imagen.php'>Intentar de nuevo</a>";
			}
		} else {
			$res = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($res){
				$nombre = $_FILES['imagen']['name'];
				@mysql_query("INSERT INTO notas_imagenes (id_usuario,titulo,imagen) VALUES ('$_SESSION[id_usuario]','$_POST[titulo]','$nombre')") ;
					header("Location: imagenes.php");
			} else {
				echo "ERROR <a href='insertar_imagen.php'>Intentar de nuevo</a>";
			}
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes<br><a href='insertar_imagen.php'>Intentar de nuevo</a>";
	}
}

?>