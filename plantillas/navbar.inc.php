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
			<a href="<?php echo SERVIDOR ?>" class="navbar-brand big">Jassiel Blog</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo RUTA_ENTRADAS ?>">Entradas</a></li>
				<li><a href="<?php echo RUTA_FAVORITOS ?>">Favoritos</a></li>
				<li><a href="<?php echo RUTA_AUTORES ?>">Autores</a></li>
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
				<li><a href="<?php echo RUTA_LOGIN ?>">Iniciar Sesión <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
				<li><a href="<?php echo RUTA_REGISTRO ?>">Registrarse <span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a></li>
			</ul>
		</div>
	</div>
</nav>