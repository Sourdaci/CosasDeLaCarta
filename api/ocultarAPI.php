<?php
	
	require_once(__DIR__ . "/../model/Plato.php");
	
	// Tipo de peticion
	$method = $_SERVER['REQUEST_METHOD'];
	
	// Cabecera HTTP de respuesta JSON
	header("Content-Type: application/json");
	
	$json = "";
	
	// C�digo de error para operaci�n con �XITO
	$error = 200;
	
	// Petici�n de datos al servidor
	if($method == "GET"){
		// Petici�n con codUsuario para consultar
		if(isset($_GET['cod'])){
			// B�squeda de usuario
			if(Plato::ocultarPlato($_GET['Plato'])){
				// Plato ocultado
				$json = json_encode(Array("res" => true));
			}else{
				// Error
				$json = json_encode(Array("res" => false));
			}
			// Petici�n completa con �xito
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
		// Codificaci�n de error
		$json = json_encode($msg);
	}
	// Env�o de respuesta
	echo $json;
?>