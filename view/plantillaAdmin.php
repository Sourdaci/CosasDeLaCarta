<?php
	// Cabecera del archivo HTML que genera PHP
	function inicioPlantilla($texto){
		?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta http-equiv="Content-type" content="text/html"; charset="UTF-8">
		<?php
		echo('<title>'.$texto.'</title>'.PHP_EOL);
		?>
		<link rel="stylesheet" href="../webroot/css/estilo.css" type="text/css" media="all" />
		<link rel="stylesheet" href="../webroot/css/carta.css" type="text/css" media="all" />
		<link rel="stylesheet" href="individual.css" type="text/css" media="all" />
		<script>
			function goBack() {
				window.history.back()
			}
		</script>
	</head>
	<body>
		<header>
			<?php
			echo('<h1>'.$texto.'</h1>'.PHP_EOL);
			?>
		</header>
		<main>
		<button id="botonAtras" onclick="goBack()">Atrás</button>
		<?php
		printf('<form id="formExit" action=%s method="post">', $_SERVER['PHP_SELF']);
		echo('<button type="submit" name="salir" value="salir">Cerrar sesión</button>');
		echo("</p>");
		echo("</form>");
	}
	
	// Etiquetas de final de archivo HTML generado por PHP
	function finPlantilla(){
		?>
		</main>
	</body>
</html>
		<?php
	}
?>