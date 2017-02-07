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
				<div class="card-panel teal lighten-2 hoverable col m12" id="descrip">
					<span class="white-text">
						<h4 class="center-align"><b>DoTask APP</b></h4>
					</span>
					<p class="white-text center-align">Descárgala y disfruta de tus notas en tu ANDROID</p>
				</div>
			</div>
			<div class="row">
				<div class="col s4 m4"></div>
				<div class="col s4 m4">
					<div class="card">
						<div class="card-image">
							<img src="img/icon.png">
							<span class="card-title blue-text">DoTask - APP</span>
						</div>
						<div class="card-action">
							<a href="#">Descargar</a>
						</div>
					</div>
				</div>
				<div class="col s4 m4"></div>
			</div>
		</div>
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".button-collapse").sideNav({

				});
				//$('.tooltipped').tooltip({delay: 50});
				$('.slider').slider({full_width: false});
				//$('.carousel').carousel();
				$('.parallax').parallax();
				$('.modal-trigger').leanModal();
			});
		</script>
	</body>
</html>