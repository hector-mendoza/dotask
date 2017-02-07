<?php
//conexion a la base de datos
$link = mysql_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
	$db = mysql_select_db("u980603238_notas",$link) or die("<h2>BD no encontrado</h2>");
	session_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: login_web.php");
	}	

//comprobamos si ha ocurrido un error.
if ($_FILES["dibujo"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
	//y que el tamano del archivo no exceda los 100kb
	$permitidos = array("image/png");
	$limite_kb = 100000;

	if (in_array($_FILES['dibujo']['type'], $permitidos) && $_FILES['dibujo']['size'] <= $limite_kb * 1024){
		//esta es la ruta donde copiaremos la imagen
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = "dibujos/" . $_FILES['dibujo']['name'];
		//comprobamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = @move_uploaded_file($_FILES["dibujo"]["tmp_name"], $ruta);
			if ($resultado){
				$nombre = $_FILES['dibujo']['name'];
				@mysql_query("INSERT INTO notas_dibujos (id_usuario,titulo,dibujo) VALUES ('$_SESSION[id_usuario]','$_POST[titulo]','$nombre')") ;
					header("Location: dibujos.php");
			} else {
				echo "ERROR <a href='insertar_imagen.php'>Intentar de nuevo</a>";
			}
		} else {
			$resultado = @move_uploaded_file($_FILES["dibujo"]["tmp_name"], $ruta);
			if ($resultado){
				$nombre = $_FILES['dibujo']['name'];
				@mysql_query("INSERT INTO notas_dibujos (id_usuario,titulo,dibujo) VALUES ('$_SESSION[id_usuario]','$_POST[titulo]','$nombre')") ;
					header("Location: dibujos.php");
			} else {
				echo "ERROR <a href='insertar_imagen.php'>Intentar de nuevo</a>";
			}
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes<br><a href='insertar_dibujo.php'>Intentar de nuevo</a>";
	}
}

?>