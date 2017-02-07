<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>DoTask - REGISTER</title>
		<link rel="icon" href="img/icon.png">
		<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
		<script src="js/jquery.js" charset="utf-8"></script>
	</head>
	<body>
		<style type="text/css" media="screen">
			/*body{
				background-image: url('img/fondo_nota.jpg');
				background-size: cover;
			}*/
			#registro{
    /*	font-family: 'Lato', sans-serif;*/
    			font-family: 'Baloo Tamma', sans-serif;
			}
			.icon-alarm{
				font-size: 3em;
			}
			.icon-android{
				font-size: 3em;
			}
			.icon-explore{
				font-size: 3em;
			}
			#registro{
				border-radius: 30px;
			}
			#reg{
				font-size: 20px;
			}
		</style>
			<div class="container">				
				<div class="row">
					<form class="col s12" method="POST" action="conexion_registro.php">
						<div class="col s12 m12">
							<div class="card-panel #448aff blue accent-2" id="registro">
								<h2 class="center-align white-text">DoTask - Registro</h2>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<i class="material-icons prefix">account_circle</i>
								<input id="icon-prefix" type="text" class="validate" name="nombre">
								<label for="icon-prefix">Nombre</label>
							</div>
							<div class="input-field col s6">
								<input id="email" type="email" class="validate" name="email">
								<label for="last_name">Correo</label>
							</div>
						</div>
						
						<div class="row">
							<div class="input-field col s6	">
								<input id="password" type="password" class="validate" name="pass">
								<label for="password">Password (Teléfono)</label>
							</div>
							<div class="input-field col s6	">
								<input id="password" type="password" class="validate" name="r_pass">
								<label for="password">Repite tu Password</label>
							</div>
						</div>

						<center>
							<a href="login_web.php" id="reg">Ya estoy registrado</a>
						</center>

						<br>
						<br>
						
						<div class="">
							<div class="col s12 m6">
								<ul class="collapsible popout" data-collapsible="acordion">
									<li>
										<div class="collapsible-header">
											<i class="material-icons">verified_user</i>
											Términos y condiciones
										</div>
										<div class="collapsible-body">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
												consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
												cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
											proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
											<p>
												<center>
												<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Cookies y terceros</a>
												
												<!--<input type="checkbox" id="test5" />
												<label for="test5">Estoy de acuerdo</label>-->
												</center>
												<div id="modal1" class="modal modal-fixed-footer">
													<div class="modal-content">
														<h4>Cookies y terceros</h4>
														<p>DoTask no se responsabiliza por pérdida de información</p>
													</div>
													<div class="modal-footer">
														<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">De acuerdo</a>
													</div>
												</div>
											</p>
										</div>
									</li>
								</ul>
							</div>
						</div>
						
						<center>
						<!--<div class="switch">
							Recordarme
							<br>
							<label>
								No
								<input type="checkbox">
								<span class="lever"></span>
								Si
							</label>
						</div>-->
						
						<button type="submit" name="action" class="btn waves-effect waves-orange tooltipped" data-position="left" data-delay="50" data-tooltip="Envío de datos">
						Registrarse
						<i class="material-icons right">send</i>
						</button>
						</center>
					</form>
				</div>
			</div>
			
			
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script type="text/javascript" src="js/materialize.min.js"></script>
			<script>
				$(document).ready(function() {
					$(".button-collapse").sideNav();
					//$('.tooltipped').tooltip({delay: 50});
					//$('.slider').slider({full_width: false});
					//$('.carousel').carousel();
					//$('.parallax').parallax();
					$('.modal-trigger').leanModal();
				});
			</script>
		</body>
	</html>