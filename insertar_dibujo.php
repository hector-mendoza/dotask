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
		 <style type="text/css" media="screen">
		 	#footer{
		 		position: relative;
		 	}
		 </style>
		
			<div class="container">				
				<div class="row">
				<div class="card-panel blue hoverable col m12" id="descrip">
						<span class="white-text">
							<h4 class="center-align"><b>Agrega una DIBUJO</b></h4>
						</span>
						<p class="white-text center-align">muy FÁCIL y RÁPIDO</p>
					</div>
				</div>

				<form class="form-horizontal" action="insertarDibujo.php" method="POST" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="titulo" class="control-label col-md-2 blue-text"><h5>Titulo:</h5></label>
						<div class="col-md-10">
							<input type="text" name="titulo" class="form-control" id="titulo" placeholder="Inserta el título del dibujo..." autofocus required>
						</div>
					</div>

					<div class="form-group">
						<label for="Imagen" class="control-label col-md-2 blue-text"><h5>Dibujo (.PNG):</h5></label>
						<div class="col 10">
							<input type="file" name="dibujo" id="dibujo" class="form-control" id="descrip">
						</div>
					</div>
				</div>
				<center>				
					<button class="btn waves-effect waves-light" type="submit" name="action">Guardar
				    <i class="material-icons right">done</i></button>
			</form>
		<a href="imagenes.php"><button class="btn waves-effect waves-light" type="submit" name="action">Regresar
			    <i class="material-icons right">skip_previous</i></button></a>
			    </center>
			</div>
			
			<?php 
				//include("footer.php");
			?>

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