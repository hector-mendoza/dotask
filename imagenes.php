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
							<h4 class="center-align"><b>Tus imágenes en todo momento</b></h4>
						</span>
						<p class="white-text center-align">y en todo lugar</p>
					</div>
				</div>

				<?php 
					include("notas_imagenes.php");
				 ?>
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