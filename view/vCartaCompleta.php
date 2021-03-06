﻿<?php

	/*
	*
	* vCarta.php
	*
	*/

	function muestraInicio($coleccionEntradas, $paginaActual, $paginaMaxima, $totalEntradas){
		?>
				<h2>Nuestra carta Completa</h2>
				<!-- Formulario de Filtrado -->
				<form id="buscaPlato" name="BuscaPlato" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<p>Buscar por nombre Plato: 
					<input type="text" name="cadenaBusqueda" width="40"> 
					<input type="submit" name="btnBuscar" value="Buscar">
					<br />Dejar vacío para buscar todos los Platos</p>
				</form>
		<?php
			if(count($coleccionEntradas) > 0){
				// Para recuperar los valores de cada elemento en orden
				$clavesArray = array_keys($coleccionEntradas[0]);
				
				if(isset($_SESSION['mensaje'])){
					printf("<h2>%s</h2>", $_SESSION['mensaje']);
				}
				?>
				<table>
				<tr>
					<th>Nombre</th>
					<th>Temporada</th>
					<th>Alérgenos</th>
				</tr>
				<tr>
				<?php
				// Valores de tabla
				foreach($coleccionEntradas AS $entrada){
					echo("<tr>" . PHP_EOL);
					// Recuperación de los valores de elementos
					echo('<td>' . $entrada["nombre"] . '</td>' . PHP_EOL);
					echo('<td>');
					foreach($entrada["season"] AS $nombre => $valor){
						if($valor){
							if($nombre == "Otono"){
								echo('<div class="icoAlergia ico' . $nombre . '" title="Otoño"></div>');
							}else{
								echo('<div class="icoAlergia ico' . $nombre . '" title="' . $nombre . '"></div>');
							}
							
						}
					}
					echo('</td>');
					echo('<td>');
					$rellenar = true;
					foreach($entrada["alergias"] AS $nombre => $valor){
						if($valor){
							echo('<div class="icoAlergia ico' . $nombre . '" title="' . $nombre . '"></div>');
							$rellenar = false;
						}
					}
					if($rellenar){
						echo('<div class="icoAlergia"></div>');
					}
					echo('</td>');
					?>
					</tr>
					<?php
				}
				echo("</table>" . PHP_EOL);
				
				// Generacion de enlaces de Anterior y Siguiente
				if($paginaActual > 1){ // Anterior
					echo('<b><a href="'.$_SERVER['PHP_SELF'].'?pag=1">Primera</a></b> ');
					echo('<b><a href="'.$_SERVER['PHP_SELF'].'?pag='.($paginaActual - 1).'">Anterior</a></b> ');
				}
				if($paginaActual < $paginaMaxima){ // Siguiente
					echo('<b><a href="'.$_SERVER['PHP_SELF'].'?pag='.($paginaActual + 1).'">Siguiente</a></b>');
					echo(' <b><a href="'.$_SERVER['PHP_SELF'].'?pag=' . $paginaMaxima . '">Ultima</a></b> ');
				}
				echo("<br />Pagina <b>$paginaActual</b> de <b>$paginaMaxima</b><br />");
				echo("Entradas: <b>$totalEntradas</b>" . PHP_EOL);
			}else{
				?> <h2>No se han encontrado entradas</h2> <?php
			}
	}
?>