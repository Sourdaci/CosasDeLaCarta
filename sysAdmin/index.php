<?php

	/*
	*
	* index.php
	*
	*/
	
	require_once("configuraciones.php");
	require_once(PLANTILLA_ESTILO);
	
	// Elementos necesarios para la ejecución del sistema
    require_once(__DIR__ . "/../model/Plato.php");
	require_once(__DIR__ . "/../model/PlatoPDO.php");
	require_once(__DIR__ . "/../model/DBPDO.php");
	require_once("view/vInicio.php");
	
    // Recuperamos la información de la sesión 
    session_start();
	
	// Llamada al controlador de inicio
	require_once("controller/cInicio.php");
?>