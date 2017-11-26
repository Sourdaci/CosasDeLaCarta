<?php

	/*
	*
	* cLogin.php
	*
	*/
	
	require_once(__DIR__ ."/../../model/DBPDO.php");

	session_start();
	
	// Código de inicio de sesión para el POST del formulario
	if(!isset($_SESSION['errorLogin'])){
		$_SESSION['errorLogin'] = "";
	}
	
	// Si hay sesión iniciada, redirigimos al inicio, sin indicar página
	// Comprobación para cuando el usuario vuelve a posta al login
	if(isset($_SESSION['usuario'])){
		unset($_SESSION['destino']);
		header("Content-Type: text/html;charset=utf-8");
		header("Location: ../index.php");
	}
	
	// Comprobamos si ya se ha enviado el formulario 
	if (isset($_POST['enviar'])){
		// Recuperamos los valores de login
		$password = $_POST['password']; 
		
		if (empty($password)){
			$_SESSION['errorLogin'] = "Debes introducir un Password"; 
		}else { 
			// Comprobamos las credenciales con la base de datos
			$recibido = DBPDO::verificar($password); 
			if ($recibido != null) {
				// Almacenamiento de usuario y redirección a página principal
				$_SESSION['usuario']="sysAdmin";
				header("Content-Type: text/html;charset=utf-8");
				header("Location: ../index.php");                     
			} else { 
				// Si las credenciales no son válidas, se vuelven a pedir 
				$_SESSION['errorLogin'] = "¡Contraseña errónea!"; 
			}          
		} 
	}
	
	// Vista del login (formulario)
	require_once(__DIR__ ."/../view/vLogin.php");
	finPlantilla();
?>