<?php
	$caso = null;
	$camposErroneos = Array();
	$datosEntrada = Array();
	// Se busca ID de Departamento para Modificación
	if(isset($_GET['id'])){
		// Se busca el ID en la BD
		$dept = Departamento::getDepartamento($_GET['id']);
		if($dept != null){
			// El ID existe, se convierte el Departamento en array para la vista
			foreach($dept AS $indice => $valor){
				$datosEntrada[] = Array($indice, $valor);
			}
			if(isset($_POST['btnEnviar'])){
				// Se ha enviado el formulario de modificación
				foreach($datosEntrada AS $valor){
					// cada campo del objeto se busca en $_POST para validarlo
					if(isset($_POST[$valor[0]])){
						// el campo existe
						if(validarCampoSoloTexto($_POST[$valor[0]]) != null){
							// el campo tiene un valor invalido
							$camposErroneos[] = $valor[0];
						}
					}else{
						// falta el campo
						$camposErroneos[] = $valor[0];
					}
				}
				
				if(count($camposErroneos) == 0){
					// todos los campos son correctos, modificar entrada
					if(Departamento::modificarDepartamento($_GET['id'], $_POST['DescDepartamento'])){
						// modificada
						$_SESSION['mensaje'] = "<h2>Modificación correcta</h2>";
					}else{
						// error en modificación
						$_SESSION['mensaje'] = "<h2>Modificación fallida</h2>";
					}
					// de vuelta al inicio
					header("Location: index.php");
				}
				
				// post, se ha cargado el formulario y se ha pulsado el boton de modificar
				// si llega hasta aqui, alguno de los campos no era valido
				$caso = "post";
			}else{
				// noPost, Primera vez que se carga el formulario
				$caso = "noPost";
			}
		}else{
			// noId, // No existe el valor indicado por metodo GET
			$caso = "noId";
		}
	}else{
		// noGet, No se ha indicado valor por metodo GET
		$caso = "noGet";
	}
?>