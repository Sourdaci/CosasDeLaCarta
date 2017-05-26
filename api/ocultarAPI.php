<?php
	
	require_once(__DIR__ . "/../model/Plato.php");
	
	// Tipo de peticion
	$method = $_SERVER['REQUEST_METHOD'];
	
	// Cabecera HTTP de respuesta JSON
	header("Content-Type: application/json");
	
	$json = "";
	
	// Código de error para operación con ÉXITO
	$error = 200;
	
	// Petición de datos al servidor
	if($method == "GET"){
		// Petición con codUsuario para consultar
		if(isset($_GET['cod'])){
			// Búsqueda de usuario
			if(Plato::ocultarPlato($_GET['Plato'])){
				// Plato ocultado
				$json = json_encode(Array("res" => true));
			}else{
				// Error
				$json = json_encode(Array("res" => false));
			}
			// Petición completa con éxito
			header("HTTP/1.1 200 200");
		}else{
			// No hay cod
			$error = 404;
		}
	}
	
	if($error!=200){
		// Cabecera de error
		header("HTTP/1.1 $error $error");
		// Contenedor de Error
		$msg = "DB ERROR";
		// Codificación de error
		$json = json_encode($msg);
	}
	// Envío de respuesta
	echo $json;
?>