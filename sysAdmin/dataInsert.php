<?php
	
	require_once("configuraciones.php");
	require_once(PLANTILLA_ESTILO);
	require_once(RUTA_LIB_VALIDACION);
	require_once("model/Departamento.php");
	require_once("model/Usuario.php");
	
	session_start();
	$_SESSION['parametroBusquedaMantenimiento'] = "";
	
	if(isset($_SESSION['usuario'])){
		require_once("controller/cDataInsert.php");
		require_once("view/vDataInsert.php");
	}else{
		header("Location: index.php");
	}
?>