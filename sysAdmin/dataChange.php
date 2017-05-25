<?php
	
	require_once("configuraciones.php");
	require_once(PLANTILLA_ESTILO);
	require_once(__DIR__ . "/../model/Plato.php");
	
	session_start();
	$_SESSION['parametroBusquedaMantenimiento'] = "";
	
	if(isset($_SESSION['usuario'])){
		require_once("controller/cDataChange.php");
		require_once("view/vDataChange.php");
	}else{
		header("Location: index.php");
	}
?>