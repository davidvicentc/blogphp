<?php

Conexion::abrir_conexion();
$total_usuarios = RepositorioUsuario::obtener_numero_usuarios(Conexion::obtener_conexion());
Conexion::cerrar_conexion();

?>

<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Esta pagina se despliega</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand pacifico big">Jassiel Blog</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="#">Entradas</a></li>
				<li><a href="#">Favorito</a></li>
				<li><a href="#">Autores</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
					 <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					<?php
						echo $total_usuarios;
					?>
					</a>
				</li>
				<li><a href="#">Iniciar Sesión <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
				<li><a href="registro.php">Registrarse <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></li>
			</ul>
		</div>
	</div>
</nav>