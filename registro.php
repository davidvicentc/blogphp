<?php

include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';

if (isset($_POST['enviar'])) { //para que el validador solo valide el formulario cuando el usuario de click en el boton "enviar"
	$validador = new ValidadorRegistro($_POST['nombre'], $_POST['email'], $_POST['clave1'], $_POST['clave2']); //todo lo que esta dentro del array de la variable $_POST son los nombre que le dimos a los inputs
	if ($validador -> registro_validado()) {
	echo "TODO CORRECTO!";
	}
}


$titulo = 'Registro';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<div class="container">
	<div class="jumbotron">
		<h1 class="text-center">
			Formulario de registro
		</h1>
	</div>
</div>
<div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Instrucciones</h3>
					</div>
					<div class="panel-body">
						<p class="text-justify">
							para unirte a el blog jassiel que esta elaborado en php, deberas registrarte colocando tu nombre de usuario, email, tu email debe ser verdadero ya que se mandara a tu correo un mensaje de verificacion, y debes colocar una contraseña, se recomienda que tu contraseña no sea comun, que incluya caracteres extraños como por ejemplo ""#$%#" para asi tu cuenta este mucho mas segura!
						</p>
						<br>
						<a href="#">¿Ya tienes cuenta?</a>
						<br>
						<br>
						<a href="#">¿Olvidaste tu contraseña?</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 text">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title text-center">Introduce tus datos</h3>
					</div>
					<div class="panel-body">
						<form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
							<?php 
							if (isset($_POST['enviar'])) {
								include_once 'plantillas/registro_validado.inc.php';
							} else {
								include_once 'plantillas/registro_vacio.inc.php';
							}

							 ?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>
