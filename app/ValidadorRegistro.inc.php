<?php 
include_once 'RepositorioUsuario.inc.php';

class ValidadorRegistro {

	private $aviso_inicio;
	private $aviso_cierre;

	private $nombre;
	private $email;
	private $clave;

	private $error_nombre;
	private $error_email;
	private $error_clave1;
	private $error_clave2;

	public function __construct($nombre, $email, $clave1, $clave2, $conexion) {
		$this -> aviso_inicio = "<br><div class='alert alert-danger' role='alert'>"; //mostrar el error con bootstrap
		$this -> aviso_cierre = "</div>";

		$this -> nombre = "";
		$this -> email = "";
		$this -> clave = "";

		$this -> error_nombre = $this -> validar_nombre($conexion, $nombre);
		$this -> error_email = $this -> validar_email($conexion, $email);
		$this -> error_clave1 = $this -> validar_clave1($clave1);
		$this -> error_clave2 = $this -> validar_clave2($clave1, $clave2);

		if ($this -> error_clave1 === "" && $this -> error_clave2 === "") {
			$this -> clave = $clave1;
		}
	}

	private function variable_iniciada($variable) {
		if (isset($variable) && !empty($variable)) { //si la variable esta iniciada, y no esta vacia, se devuelve en true, pero si esta vacia, o no cumple con los requisitos se devuelve false!
			return true;
		} else {
			return false;
		}
	}

	private function validar_nombre($conexion, $nombre) {
		if (!$this -> variable_iniciada($nombre)) { //si no esta iniciada la variable. coloca el mensaje que esta en el return
			return "Debes escribir un nombre de usuario";
		} else {
			$this -> nombre = $nombre;
		}

		if (strlen($nombre) < 6) { //strlen es para colocar la regla de caracteres
			return "El nombre de usuario tiene que tener mas de 6 caracteres";
		}

		if (strlen($nombre) > 24) {
			return "el nombre de usuario tiene que tener menos de 24 caracteres";
		}

		if (RepositorioUsuario :: nombre_existe($conexion, $nombre)) {
			return "Este nombre de usuario ya esta en uso, por favor, prueba con otro nombre.";
		}

		return ""; // si todo esta correcto devuelve en mensaje vacio
	}

	private function validar_email($conexion, $email) {
		if (!$this -> variable_iniciada($email)) {
			return "debes escribir un correo electronico"; 
		} else {
			$this -> email = $email;
		}

		if (RepositorioUsuario ::email_existe($conexion, $email)) {
			return "Este email ya esta en uso, Por favor, prueba con otro email, o <a href='#'>¿Desea recuperar su contraseña?</a>";
		}

		return "";
	}

	private function validar_clave1($clave1) {
		if (!$this -> variable_iniciada($clave1)) {
			return "debes escribir una contraseña"; 
		}

		return "";
	}

	private function validar_clave2($clave1, $clave2) {
		if (!$this -> variable_iniciada($clave1)) {
			return "primero debes colocar la contraseña";
		}

		if (!$this -> variable_iniciada($clave2)) {
			return "debes repetir tu contraseña"; 
		}

		if ($clave1 !== $clave2) {
			return "Ambas contraseñas deben coincidir";
		}

		return "";
	}

	public function obtener_nombre() {
		return $this -> nombre;
	}

	public function obtener_email() {
		return $this -> email;
	}

	public function obtener_clave() {
		return $this -> clave;
	}

	public function obtener_error_nombre() {
		return $this -> error_nombre;
	}

	public function obtener_error_email() {
		return $this -> error_email;
	}

	public function obtener_error_clave1() {
		return $this -> error_clave1;
	}

	public function obtener_error_clave2() {
		return $this -> error_clave2;
	}

	public function mostrar_nombre() { //imprimir el nombre por si se equivoca el usuario, 
		if ($this -> nombre !== "") {
			echo 'value="' . $this -> nombre . '"';
		}
	}

	public function mostrar_error_nombre() { //imprimir el error en pantalla
		if ($this -> error_nombre !== "") {
			echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre;
		}
	}

	public function mostrar_email() { //imprimir el email por si se equivoca el usuario, 
		if ($this -> email !== "") {
			echo 'value="' . $this -> email . '"';
		}
	}

	public function mostrar_error_email() { //imprimir el error en pantalla
		if ($this -> error_email !== "") {
			echo $this -> aviso_inicio . $this -> error_email . $this -> aviso_cierre;
		}
	}

	public function mostrar_error_clave1() { //imprimir el error en pantalla
		if ($this -> error_clave1 !== "") {
			echo $this -> aviso_inicio . $this -> error_clave1 . $this -> aviso_cierre;
		}
	}
	public function mostrar_error_clave2() { //imprimir el error en pantalla
		if ($this -> error_clave2 !== "") {
			echo $this -> aviso_inicio . $this -> error_clave2 . $this -> aviso_cierre;
		}
	}

	public function registro_validado() { //si todo esta bien imprimir arriba "todo correcto"
		if ($this -> error_nombre === "" && $this -> error_email === "" && $this -> error_clave1 === "" && $this -> error_clave2 === "") {
			return true;
		} else {
			return false;
		}
	}
		
}


 ?>