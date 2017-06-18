<?php 
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Login';


include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
 ?>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<h4>Iniciar Sesión</h4>
				</div>
				<div class="panel-body text-center">
					<form role="form" method="post" action="<?php echo $_SERVER[PHP_SELF] ?>">
					<h2>¡Introduce tus datos!</h2>
					<br>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" name="email" id="email" placeholder="Email" class="form-control">
						</div>
						<div class="form-group">
							<label for="clave" class="sr-only">Contraseña</label>
							<input type="password" name="clave" id="clave" placeholder="Contraseña" class="form-control">
						</div>
						<div class="form-group">
							<button type="submit" name="login" class="btn btn-lg btn-success btn-block">
								Iniciar Sesión
							</button>
						</div>
					</form>
					<br>
					<a href="#">¿Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>