<?php
	$caso = null;
	$datosEntrada = Array();
	// Comprobación de ID de Plato
	if(isset($_GET['id'])){
		// Búsqueda del Plato
		$bruto = Plato::getPlato($_GET['id']);
		if($bruto != null){

			if(isset($_POST['btnEnviar'])){
				// Se ha enviado la orden de borrado
				if($bruto['cod'] == $_POST['cod']){
					// El Plato buscado en la BD tiene el mismo ID que el del cuadro de texto
					if(Plato::borrarPlato($_POST['cod'])){
						$_SESSION['mensaje'] = "<h2>Borrado correcto</h2>";
					}else{
						$_SESSION['mensaje'] = "<h2>Borrado fallido</h2>";
					}
					// de vuelta al inicio
					header("Location: index.php");
				}else{
					// different, El ID del formulario no coincide con el del Plato buscado
					$caso = "different";
				}
			}else{
				
				// El ID existe, se convierte el Plato en array para la vista
				$intermedio = new Plato($bruto['cod'], $bruto['nombre'], 
				$bruto['Primavera'], $bruto['Verano'], $bruto['Otono'], $bruto['Invierno'], 
				$bruto['Gluten'], $bruto['Crustaceo'], $bruto['Huevo'], $bruto['Pescado'], 
				$bruto['Cacahuete'], $bruto['Soja'], $bruto['Lacteos'], $bruto['Cascara'], 
				$bruto['Apio'], $bruto['Mostaza'], $bruto['Sesamo'], $bruto['Sulfitos'], 
				$bruto['Altramuces'], $bruto['Moluscos']);
				$datosEntrada = $intermedio->getPlatoComoArray();
				
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