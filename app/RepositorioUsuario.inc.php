<?php

class RepositorioUsuario
{

	 public static function obtener_todos($conexion)
	 {

			$usuarios = array();

			if (isset($conexion)) {
				 //si la conexion esta abierta ejecutamos el try

				 try {

						include_once 'app/Usuario.inc.php';

						$sql = "SELECT * FROM usuarios"; //aca en la variable sql se seleccionara todo lo que haya en la tabla usuarios para eso es el "*"

						$sentencia = $conexion->prepare($sql); //seguridad, asi quitamos todo los /&%$()
						$sentencia->execute(); //con el execute ejecutamos el prepare

						$resultado = $sentencia->fetchAll();

						if (count($resultado)) {
							 foreach ($resultado as $fila) {
									$usuarios[] = new Usuario($fila['id'], $fila['nombre'], $fila['email'], $fila['password'], $fila['fecha_registro'], $fila['activo']);
							 }
						} else {
							 print 'no hay usuarios';
						}

				 } catch (PDOException $ex) {
						print "ERROR" . $ex->getMessage();
				 }
			}
			return $usuarios;
	 }

	 public static function obtener_numero_usuarios($conexion)
	 {

			$total_usuarios = null;

			if (isset($conexion)) {
				 try {

						$sql = "SELECT COUNT(*) as total FROM usuarios";

						$sentencia = $conexion->prepare($sql);
						$sentencia->execute();

						$resultado = $sentencia->fetch();

						$total_usuarios = $resultado['total'];
				 } catch (PDOException $ex) {
						print "ERROR" . $ex->getMessage();
				 }
			}
			return $total_usuarios;

	 }
}
