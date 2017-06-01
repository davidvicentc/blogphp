<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">


		<?php 
			if (!isset($titulo) || empty($titulo)) {
				$titulo = 'Blog JassielPHP';
			}

			echo "<title>$titulo</title>";

		?>

		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/hover-min.css">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>