<?php

	/*
	*
	* cInicio.php
	*
	*/
	
	// Cierre de sesión del usuario, debe hacerse inmediatamente después de session_start()
	// De lo contrario, habría incongruencias de funcionamiento
	if(isset($_POST['salir'])){
		unset($_SESSION['usuario']);
	}
	
    // Comprobamos si el usuario está autentificado
    if (!isset($_SESSION['usuario'])){
		// No hay usuario logueado, se le enviará al inicio de sesión
		header("Content-Type: text/html;charset=utf-8");
        header('Location: ../index.php');
    }
	
	// Inicialización del parámetro de búsqueda
	if(!isset($_SESSION['parametroBusquedaMantenimiento'])){
		$_SESSION['parametroBusquedaMantenimiento'] = "";
	}
	// Si se realiza una búsqueda, se almacena en la sesión
	if(isset($_POST['cadenaBusqueda'])){
		$_SESSION['parametroBusquedaMantenimiento'] = $_POST['cadenaBusqueda'];
	}
	
	$valoresDesplegable = array("Primavera", "Verano", "Otoño", "Invierno");
	
	//Se cambia de temporada
	if($_POST['btnTemporada']){
		// Si la cadena coincide con una de las opciones, se continúa
		if(in_array($_POST['desplegable'], $valoresDesplegable)){
			Plato::cambioTemporada($_POST['desplegable']);
		}
	}
	
	$temporadaActual = Plato::getTemporada();
	
	// Numero de registros que devuelve la búsqueda
	$cuentaRegistros = Plato::contarPlatosPorDescAdmin($_SESSION['parametroBusquedaMantenimiento']);
	
	if($cuentaRegistros != -1){ // -1 Significa ERROR DE BD
		
		// Número de registros que mostraremos por página
		$filasPorPagina = 10;
		// Calculamos el número de la última página
		$ultimaPagina = ceil($cuentaRegistros/$filasPorPagina);
		// Nos aseguramos de que la última página no sea inferior a 1
		if($ultimaPagina < 1){
			$ultimaPagina = 1;
		}
		// Inicializamos la página actual
		$paginaActual = 1;
		// Si la página actual existe en la URL, la recogemos
		// Si no existe, la dejamos en 1
		if(isset($_GET['pag'])){
			$paginaActual = preg_replace('#[^0-9]#', '', $_GET['pag']);
		}
		// Nos aseguramos de que el número de página está en el rango [1-$ultimaPagina]
		// Si es inferior, lo dejamos en 1. Si es superior, en $ultimaPagina
		if ($paginaActual < 1) { 
			$paginaActual = 1; 
		} else if ($paginaActual > $ultimaPagina) { 
			$paginaActual = $ultimaPagina; 
		}
	
		$coleccion = Array();
		
		if($cuentaRegistros != 0){
			// Pedimos al modelo el array con los resultados
			$coleccion = Plato::getPlatosPorDescAdmin($_SESSION['parametroBusquedaMantenimiento'], (($paginaActual - 1) * $filasPorPagina), $filasPorPagina);
			$platosComoArray = Array();
			// La clase convierte los objetos del array en arrays asociativos, para la vista
			foreach($coleccion AS $elemento){
				$platosComoArray[] = $elemento->getPlatoComoArray();
			}
			
			// Se llama a la vista con los datos necesarios y los Platos como Array asociativo
			muestraInicio($platosComoArray, $paginaActual, $ultimaPagina, $cuentaRegistros, $valoresDesplegable, $temporadaActual);
		}else{
			// Se llama a la vista con los datos mínimos para que se muestre el mensaje de "No hay resultados"
			muestraInicio($coleccion, 0, 0, 0, $valoresDesplegable, $temporadaActual);
		}
	}else{
		// Intentando evitar que la vista conozca el objeto
		muestraInicio(null, 0, 0, 0, $valoresDesplegable, $temporadaActual);
	}
?>