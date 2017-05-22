<?php
	require_once("model/Plato.php");
	require_once("view/plantilla.php");
	
	paginaCarta();
	
	require_once("view/vCartaCompleta.php");
	require_once("controller/cCartaCompleta.php");
	
	finPagina();
?>