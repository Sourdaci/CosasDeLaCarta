<?php
	$caso = null;
	$datosEntrada = Array();
	// Comprobación de ID de Departamento
	if(isset($_GET['id'])){
		// Búsqueda del Departamento
		$dept = Departamento::getDepartamento($_GET['id']);
		if($dept != null){
			// Existe el Departamento, se pasa a un array
			foreach($dept AS $indice => $valor){
				$datosEntrada[] = Array($indice, $valor);
			}
			
			if(isset($_POST['btnEnviar'])){
				// Se ha enviado la orden de borrado
				if($dept['CodDepartamento'] == $_POST['CodDepartamento']){
					// El departamento buscado en la BD tiene el mismo ID que el del cuadro de texto
					if(Departamento::borrarDepartamento($dept['CodDepartamento'])){
						$_SESSION['mensaje'] = "<h2>Borrado correcto</h2>";
					}else{
						$_SESSION['mensaje'] = "<h2>Borrado fallido</h2>";
					}
					// de vuelta al inicio
					header("Location: index.php");
				}else{
					// different, El ID del formulario no coincide con el del Departamento buscado
					$caso = "different";
				}
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