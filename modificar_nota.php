<?php
	$link = mysql_connect("mysql.hostinger.mx", "u980603238_notas", "Pillespilles1702", "u980603238_notas") or die("<h2>Servidor no encontrado</h2>");
	$db = mysql_select_db("u980603238_notas",$link) or die("<h2>BD no encontrado</h2>");
	session_start();
	if (!isset($_SESSION['id_usuario'])) {
		header("Location: login_web.php");
	}
	$id = $_GET['id'];
	$sql = mysql_query("SELECT * FROM notas WHERE id_nota = $id");
	$datos = mysql_fetch_object($sql);
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
			<h2 class="text-center">
			Modificar los siguientes campos:
			</h2>
			<br>
			<form class="form-horizontal" action="modificarNota.php" method="POST">
				
				<div class="form-group has-success">
					<div class="col 10">
						<input class="form-control text-center" type="hidden" name="id_nota" value="<?php
								echo $datos->id_nota;
						?>" readonly>
					</div>
					
				</div>
				<div class="form-group">
					<label for="descripcion" class="control-label col-md-2">Titulo:</label>
					<div class="col-md-10">
						<input type="text" name="titulo" class="form-control" id="titulo" value="<?php
							echo $datos->titulo;
						?>">
					</div>
				</div>
				<div class="form-group">
					<label for="descripcion" class="control-label col-md-2">Descripción:</label>
					<div class="col-md-10">
						<input type="text" name="descripcion" class="form-control" id="descripcion" value="<?php
							echo $datos->descripcion;
						?>">
					</div>
				</div>
			</div>
			<center>
			<a href="modificarNota.php"><button class="btn waves-effect waves-light" type="submit" name="action">Guardar
			<i class="material-icons right">done</i></button></a>
		</form>
		<a href="index.php"><button class="btn waves-effect waves-light" type="submit" name="action">Regresar
		<i class="material-icons right">skip_previous</i></button></a>
		</center>
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