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
							<h4 class="center-align"><b>NOTAS ARCHIVADAS</b></h4>
						</span>
						<p class="white-text center-align">para evitar algún posible accidente</p>
					</div>
				</div>

				<?php 
					include("notas_archivadas.php");
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
			$('.modal-trigger').leanModal({
				dismissible: true, // Modal can be dismissed by clicking outside of the modal
			      opacity: .5, // Opacity of modal background
			      in_duration: 300, // Transition in duration
			      out_duration: 200, // Transition out duration
			      starting_top: '4%', // Starting top style attribute
			      ending_top: '10%', // Ending top style attribute
			});
		});
	</script>
</body>
</html>