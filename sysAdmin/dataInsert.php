<?php
	
	require_once("configuraciones.php");
	require_once(PLANTILLA_ESTILO);
	require_once(__DIR__ . "/../model/Plato.php");
	
	session_start();
	$_SESSION['parametroBusquedaMantenimiento'] = "";
	
	if(isset($_SESSION['usuario'])){
		require_once("controller/cDataInsert.php");
		require_once("view/vDataInsert.php");
	}else{
		header("Location: index.php");
	}
?>