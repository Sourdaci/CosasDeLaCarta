<?php
	
	require_once("configuraciones.php");
	require_once(PLANTILLA_ESTILO);
	require_once(RUTA_LIB_VALIDACION);
	require_once("model/Departamento.php");
	require_once("model/Usuario.php");
	
	session_start();
	$_SESSION['parametroBusquedaMantenimiento'] = "";
	
	if(isset($_SESSION['usuario'])){
		require_once("controller/cDataDrop.php");
		require_once("view/vDataDrop.php");
	}else{
		header("Location: index.php");
	}
?>