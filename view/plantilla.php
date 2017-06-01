<?php
	function paginaInicio(){
		inicioCabecera();
		finCabecera();
	}
	
	function paginaImagenes(){
		inicioCabecera();
		?>
		<script src="webroot/js/jquery.min.js" type="text/javascript"></script>
		<link id="pagestyle" rel="stylesheet" href="webroot/css/caroussel.css">
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
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="/webroot/img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/webroot/img/favicon.ico" type="image/x-icon">
		<title>Le Escocésé</title>
		<?php
			/*
				http://mobiledetect.net/
			*/
			require_once("controller/Mobile_Detect.php");
			$detect = new Mobile_Detect;
			if($detect->isMobile()){
				echo('<link rel="stylesheet" href="webroot/css/estiloMobile.css">');
			}else{
				echo('<link rel="stylesheet" href="webroot/css/estilo.css">');
			}
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
				<div class="menuContainer" onclick="location.href='nosotros.php'">
					<span class="menuText">Nosotros</span>
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