<div class="form-group">
	<label>
		Nombre de usuario
	</label>
	<input class="form-control" name="nombre" placeholder="Coloca tu nombre de usuario" type="text" <?php $validador -> mostrar_nombre() ?>> <!-- Imprimimos el valor del input usuario -->
	</input>
	<?php 
	$validador -> mostrar_error_nombre(); //llamamos a la variable para mostrar el error que tuvo el usuario

	 ?>
</div>
<div class="form-group">
	<label>
		Correo electronico
	</label>
	<input class="form-control" name="email" placeholder="Coloca tu correo electronico" type="email" <?php $validador -> mostrar_email() ?>>
	</input>
	<?php 
	$validador -> mostrar_error_email(); //llamamos a la variable para mostrar el error que tuvo el usuario

	 ?>
</div>
<div class="form-group">
	<label>
		Contraseña
	</label>
	<input class="form-control" name="clave1" placeholder="Coloca tu contraseña" type="password">
	</input>
	<?php 
	$validador -> mostrar_error_clave1(); //llamamos a la variable para mostrar el error que tuvo el usuario

	 ?>
</div>
<div class="form-group">
	<label>
		Repite la contraseña
	</label>
	<input class="form-control" name="clave2" placeholder="Coloca tu contraseña" type="password">
	</input>
	<?php 
	$validador -> mostrar_error_clave2(); //llamamos a la variable para mostrar el error que tuvo el usuario

	 ?>
</div>
<br>
<div class="form-group text-center">
	<button class="green" name="enviar" type="submit">
		<span>
			Enviar
		</span>
	</button>
	<button class="green" type="reset">
		<span>
			Limpiar
		</span>
	</button>
</div>