<?php

include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

    $titulo = 'Blog jassiel';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>
		<div class="container">
		  <div class="jumbotron top-space">
			 <h1 >Bienvenido a Jassiel Blog</h1>
			 <p>Es mi test de creacion de blog en el lenguaje PHP</p>
		  </div>
		</div>
		<div class="container">
		  <div class="row">
			 <div class="col-md-4">
				<div class="row">
				  <div class="col-md-12">
					 <div class="panel panel-default">
						<div class="panel-heading">
						  <span class="glyphicon glyphicon-search" aria-hidden="true"></span> buscar
						</div>
						<div class="panel-body">
						  <form role="form">
								<div class="form-group">
									<label>¿Que estas buscando?</label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group text-center">
									<button type="button" name="buscar" class="btn-search"><span>Buscar</span></button>
								</div>
							</form>
						</div>
					 </div>
				  </div>
				  <div class="col-md-12">
					 <div class="panel panel-default">
						<div class="panel-heading">
						  <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
						</div>
						<div class="panel-body">
						  <p></p>
						</div>
					 </div>
				  </div>
				</div>
			 </div>
			 <div class="col-md-8">
				<div class="row">
				  <div class="col-md-12">
					 <div class="panel panel-default">
						<div class="panel-heading">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ultimas entradas
						</div>
						<div class="panel-body">
						  <p>Todavia no hay entradas que mostrar.</p>
						</div>
					 </div>
				  </div>
				</div>
			 </div>
		  </div>
		</div>
	<?php
        include_once 'plantillas/documento-cierre.inc.php';
	?>
