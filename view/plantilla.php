<?php
	function paginaInicio(){
		inicioCabecera();
		finCabecera();
	}
	
	function paginaImagenes(){
		inicioCabecera();
		?>
		<link rel="stylesheet" href="webroot/css/caroussel.css">
		<script src="webroot/js/jquery.min.js" type="text/javascript"></script>
		<script src="webroot/js/caroussel.js" type="text/javascript"></script>
		<?php
		finCabecera();
	}
	
	function paginaCarta(){
		inicioCabecera();
		?>
		<link rel="stylesheet" href="webroot/css/carta.css">
		<?php
		finCabecera();
	}
	
	function paginaNosotros(){
		inicioCabecera();
		?>
		<link rel="stylesheet" href="webroot/css/nosotros.css">
		<?php
		finCabecera();
	}
	
	function inicioCabecera(){
		?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Le Escocésé</title>
		<link rel="stylesheet" href="webroot/css/estilo.css">
		<?php
	}
	
	function finCabecera(){
		?>
	</head>
	<body>
		<header>
			<p id="pageTitle">Le Escocésé</p>
		</header>
		<main>
			<nav>
				<div class="menuContainer" onclick="location.href='index.php'">
					<span class="menuText">Inicio</span>
				</div>
				<div class="menuContainer" onclick="location.href='images.php'">
					<span class="menuText">Imágenes</span>
				</div>
				<div class="menuContainer" onclick="location.href='carta.php'">
					<span class="menuText">Carta</span>
				</div>
			</nav>
			<div id="contenido">
		<?php
	}
	
	function finPagina(){
		?>
			</div>
		</main>
	</body>
</html>
		<?php
	}
?>