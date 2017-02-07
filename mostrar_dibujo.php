<?php
session_start();
if (!isset($_SESSION['id_usuario'])) {
header("Location: login_web.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
			include('head.php');
		?>
	</head>
	<body>
		<?php
			include("menu.php");
		?>
		<div class="container">
			<div class="row">
				<div class="card-panel blue hoverable col m12" id="descrip">
					<span class="white-text">
						<h4 class="center-align"><b>Tus dibujos en todo momento</b></h4>
					</span>
					<p class="white-text center-align">y en todo lugar</p>
				</div>
			</div>
			<?php
				//conexion a la base de datos
				mysql_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die(mysql_error()) ;
				mysql_select_db("u980603238_notas") or die(mysql_error()) ;

				//si la variable imagen no ha sido definida nos dara un advertencia.
				$id = $_GET['id'];

				//vamos a crear nuestra consulta SQL
				$consulta = "SELECT dibujo FROM notas_dibujos WHERE id_dib = $id";
				//con mysql_query la ejecutamos en nuestra base de datos indicada anteriormente
				//de lo contrario mostraremos el error que ocaciono la consulta y detendremos la ejecucion.
				$resultado= @mysql_query($consulta) or die(mysql_error());

				//si el resultado fue exitoso
				//obtendremos el dato que ha devuelto la base de datos
				$datos = mysql_fetch_assoc($resultado);
				//ruta va a obtener un valor parecido a "imagenes/nombre_imagen.jpg" por ejemplo
				$ruta = "dibujos/" . $datos['dibujo'];

				//ahora solamente debemos mostrar la imagen
				echo "<center><img src='$ruta' width='400'/></center><br><br>";
				echo "<a href='$ruta' class='white-text' download><button class='btn waves-effect waves-light' type='submit' name='descargar'>Descargar
					<i class='material-icons'>play_for_work</i></a></center>";
				?>
			
			<center>
			<a href="dibujos.php"><button class="btn waves-effect waves-light" type="submit" name="action">Regresar
			<i class="material-icons right">skip_previous</i></button></a>
			</center>
		</div>
		
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".button-collapse").sideNav();
				//$('.tooltipped').tooltip({delay: 50});
				$('.slider').slider({full_width: false});
				//$('.carousel').carousel();
				$('.parallax').parallax();
				$('.modal-trigger').leanModal();
			});
		</script>
	</body>
</html>