<?php 

class ValidadorRegistro {

	private $nombre;
	private $email;

	private $error_nombre;
	private $error_email;
	private $error_clave1;
	private $error_clave2;

	public function __construct($nombre, $email, $clave1, $clave2) {
		$this -> nombre = "";
		$this -> email = "";

		$this -> error_nombre = $this -> validar_nombre($nombre);
		$this -> error_email = $this -> validar_email($email);
		$this -> error_clave1 = $this -> validar_clave1($clave1);
		$this -> error_clave2 = $this -> validar_clave2($clave1, $clave2);
	}

	private function variable_iniciada($variable) {
		if (isset($variable) && !empty($variable)) { //si la variable esta iniciada, y no esta vacia, se devuelve en true, pero si esta vacia, o no cumple con los requisitos se devuelve false!
			return true;
		} else {
			return false;
		}
	}

	private function validar_nombre($nombre) {
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

		return ""; // si todo esta correcto devuelve en mensaje vacio
	}

	private function validar_email($email) {
		if (!$this -> variable_iniciada($email)) {
			return "debes escribir un correo electronico"; 
		} else {
			$this -> email = $email;
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

	public function obtener_email () {
		return $this -> email;
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
}


 ?>