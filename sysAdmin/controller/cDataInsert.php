<?php
	$camposErroneos = Array();
	
	// Si se ha enviado el formulario
	if(isset($_POST['btnEnviar'])){
		$valido = true; // Comenzamos asumiendo que todo está bien
		
		if(isset($_POST['CodDepartamento'])){
			// Comprobación de ID de departamento: 3 Mayúsculas
			$camposErroneos['CodDepartamento'] = validarCampoSoloAlfMayus($_POST['CodDepartamento']);
			if($camposErroneos['CodDepartamento'] == null){
				if(strlen($_POST['CodDepartamento']) != 3){
					// Eran Mayúsculas pero no eran 3
					$camposErroneos['CodDepartamento'] = true;
					$valido = false;
				}
			}else{
				$valido = false;
			}
		}else{
			// No hay ID para comprobar
			$camposErroneos['CodDepartamento'] = true;
			$valido = false;
		}
		
		if(isset($_POST['DescDepartamento'])){
			// Comprobación de descripción de Departamento: texto alfabetico
			$camposErroneos['DescDepartamento'] = validarCampoSoloTexto($_POST['DescDepartamento']);
			if($camposErroneos['DescDepartamento'] != null){
				$valido = false;
			}
		}else{
			// No hay descripción
			$camposErroneos['DescDepartamento'] = true;
			$valido = false;
		}
		
		if($valido){
			// todos los campos son correctos, agregar entrada
			if(Departamento::insertarDepartamento($_POST['CodDepartamento'], $_POST['DescDepartamento'])){
				// Éxito
				$_SESSION['mensaje'] = "<h2>Inserción correcta</h2>";
			}else{
				// error
				$_SESSION['mensaje'] = "<h2>Inserción fallida</h2>";
			}
			// de vuelta al inicio
			header("Location: index.php");
		}
	}
?>