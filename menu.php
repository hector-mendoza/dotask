<header>
	<nav>
		<ul id="dropdown1" class="dropdown-content">
			<li><a href="insertar_nota.php">Nueva</a></li>
			<li class="divider"></li>
			<li><a href="index.php">Ver NOTAS</a></li>
			<li class="divider"></li>
			<li><a href="notas_archivo.php">Archivadas</a></li>
		</ul>
		<ul id="dropdown2" class="dropdown-content">
			<li><a href="insertar_nota.php">Nueva</a></li>
			<li class="divider"></li>
			<li><a href="index.php">Ver NOTAS</a></li>
			<li class="divider"></li>
			<li><a href="notas_archivo.php">Archivadas</a></li>
		</ul>

		<ul id="dropdown3" class="dropdown-content">
			<li><a href="insertar_imagen.php">Nueva</a></li>
			<li class="divider"></li>
			<li><a href="imagenes.php">Ver IMAGENES</a></li>
			<li class="divider"></li>
			<!--<li><a href="notas_archivo.php">Archivadas</a></li>-->
		</ul>

		<ul id="dropdown4" class="dropdown-content">
			<li><a href="insertar_imagen.php">Nueva</a></li>
			<li class="divider"></li>
			<li><a href="imagenes.php">Ver IMAGENES</a></li>
			<li class="divider"></li>
			<!--<li><a href="notas_archivo.php">Archivadas</a></li>-->
		</ul>

		<ul id="dropdown5" class="dropdown-content">
			<li><a href="insertar_dibujo.php">Nuevo</a></li>
			<li class="divider"></li>
			<li><a href="dibujos.php">Ver DIBUJOS</a></li>
			<li class="divider"></li>
			<!--<li><a href="notas_archivo.php">Archivadas</a></li>-->
		</ul>

		<ul id="dropdown6" class="dropdown-content">
			<li><a href="insertar_dibujo.php">Nuevo</a></li>
			<li class="divider"></li>
			<li><a href="dibujos.php">Ver DIBUJOS</a></li>
			<li class="divider"></li>
			<!--<li><a href="notas_archivo.php">Archivadas</a></li>-->
		</ul>

		<nav>
			<div class="nav-wrapper #3949ab indigo darken-1" id="top">
				<a href="index.php" class="center brand-logo">DoTask</a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="left hide-on-med-and-down">
					<li><a href="#" data-activates="dropdown1" class="dropdown-button waves-effect waves-light"><i class="material-icons left">chat_bubble_outline</i>NOTAS</a></li>
					<li><a href="#" data-activates="dropdown3" class="dropdown-button waves-effect waves-light"><i class="material-icons left">dashboard</i>IMAGENES</a></li>
					<li><a  href="#" data-activates="dropdown5" class="dropdown-button waves-effect waves-light""><i class="material-icons left">mode_edit</i>DIBUJOS</a></li>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li><a href="#modal1" class="waves-effect waves-light modal-trigger"><i class="material-icons left">contacts</i>CONTACTO</a></li>
					
					<li><a href="app.php" class="waves-effect waves-light"><i class="material-icons left">view_module</i>APP	</a></li>
					<li><a href="javascript:document.location.reload();" class="waves-effect waves-light"><i class="material-icons">refresh</i></a></li>
					<li><a class="dropdown-button waves-effect waves-light" href="salir.php">SALIR</a></li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<li><a href="index.php" class="waves-effect waves-light"><i class="material-icons left green-text lighten-3">home</i>Inicio</a></li>
					<li><a href="#" data-activates="dropdown2" class="dropdown-button waves-effect waves-light"><i class="material-icons left">chat_bubble_outline</i>NOTAS</a></li>
					<li><a data-activates="dropdown4" class="dropdown-button waves-effect waves-light"><i class="material-icons left blue-text">dashboard</i>IMAGENES</a></li>
					<li><a  href="#" data-activates="dropdown6" class="dropdown-button waves-effect waves-light"><i class="material-icons left red-text">mode_edit</i>DIBUJOS</a></li>
					<li><a href="#modal1" class="waves-effect waves-light modal-trigger"><i class="material-icons left black-text">contacts</i>CONTACTO</a></li>
					<li><a href="app.php" class="waves-effect waves-light"><i class="material-icons left orange-text">view_module</i>APP</a></li>
					<li><a href="salir.php" class="waves-effect waves-light"><i class="material-icons left black-text">input</i>SALIR</a></li>
				</ul>
			</div>
		</nav>
		<div class="fixed-action-btn click-to-toggle" style="bottom: 45px; right: 24px;">
			<a class="btn-floating btn-large indigo">
				<i class="large material-icons">mode_edit</i>
			</a>
			<ul>
				<li><a href="insertar_nota.php" class="btn-floating blue"><i class="material-icons">note_add</i></a></li>
				<li><a href="notas_archivo.php" class="btn-floating red darken-1"><i class="material-icons">class</i></a></li>
				<li><a href="insertar_imagen.php" class="btn-floating green"><i class="material-icons">publish</i></a></li>
				<li><a href="imagenes.php" class="btn-floating blue"><i class="material-icons">view_carousel</i></a></li>
			</ul>
		</div>
	</nav>
</header>

  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
      <h4>Contacto</h4>
      <p>Correo: <span class="blue-text text-darken-2"><a href="mailto:hector_mendoza@dotask.16mb.com?subject=DoTask" "email me">@CORREO</a></span></p>
      <ul>
      	<li class="divider"></li>
      </ul>
      <p>Social: <span class="blue-text text-darken-2"><a target="_blank" href="https://www.facebook.com/hectoordanieel.mendozaa" title="Agregame :D">FACEBOOK</a></span> | <span class="blue-text text-darken-2"><a target="_blank" href="https://www.instagram.com/hector__mendoza_/" title="Sigueme :D">INSTAGRAM</a></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">LISTO</a>
    </div>
  </div>
