<?php

	/*
	*
	* vInicio.php
	*
	*/

	function muestraInicio($coleccionEntradas, $paginaActual, $paginaMaxima, $totalEntradas, $valoresDesplegable, $temporadaActual){
		
		inicioPlantilla("Les Platos");
		?>
			<a href="dataInsert.php"><div id="divNuevo"><img src="img/new.png" /><h3>Nuevo Plato</h3></div></a>
				<form id="cambioTemporada" name="cambioTemporada" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<select name="desplegable">
					<?php
						foreach($valoresDesplegable as $indiceDesplegable => $valorDesp){
							if(strcmp($temporadaActual, $valorDesp) == 0){
								printf('<option value="%s" selected>%s</option>', $valorDesp, $valorDesp);
							}else{
								printf('<option value="%s">%s</option>', $valorDesp, $valorDesp);
							}
						}
					?>
					</select>
					<input type="submit" name="btnTemporada" value="Cambiar">
				</form>
				
			<!-- Formulario de Filtrado -->
			<form id="buscaPlatoAdmin" name="BuscaPlato" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				<p>Buscar por nombre Plato: 
				<input type="text" name="cadenaBusqueda" width="40"> 
				<input type="submit" name="btnBuscar" value="Buscar">
				<br />Dejar vacío para buscar todos los Platos</p>
			</form>
		<?php
		if(count($coleccionEntradas) > 0){
				
				if(isset($_SESSION['mensaje'])){
					printf("%s", $_SESSION['mensaje']);
				}
				?>
				<table class="listaAdmin">
				<tr>
					<th>Nombre</th>
					<th>Temporada</th>
					<th>Alérgenos</th>
					<th>Editar</th>
					<th>Borrar</th>
					<th>Visibilidad</th>
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
								echo('<div class="icoAlergiaAdmin ico' . $nombre . '" title="Otoño"></div>');
							}else{
								echo('<div class="icoAlergiaAdmin ico' . $nombre . '" title="' . $nombre . '"></div>');
							}
							
						}
					}
					echo('</td>');
					echo('<td>');
					$rellenar = true;
					foreach($entrada["alergias"] AS $nombre => $valor){
						if($valor){
							echo('<div class="icoAlergiaAdmin ico' . $nombre . '" title="' . $nombre . '"></div>');
							$rellenar = false;
						}
					}
					if($rellenar){
						echo('<div class="icoAlergiaAdmin"></div>');
					}
					echo('</td>');
					?>
					<td>
					<a href="dataChange.php?id=<?php echo($entrada['cod']); ?>">
					<img src="img/edit.png" alt="Modificar" />
					</a>
					</td>
					<td>
					<a href="dataDrop.php?id=<?php echo($entrada['cod']); ?>">
					<img src="img/delete.png" alt="Borrar" />
					</a>
					</td>
					<td>
						<?php
							echo('<button id="botonVer' . $entrada['cod'] . '" data-cod="' . $entrada['cod'] . '" class="buttonAPI"></button>');
						?>
					</td>
					</tr>
					<?php
				}
				echo("</table>" . PHP_EOL);
				echo("<p>");
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
				echo("</p>");
			}else{
				?> <h2>No se han encontrado entradas</h2> <?php
			}
		
		finPlantilla();
		unset($_SESSION['mensaje']);
	}
	
	function muestraErrorInicio(){
		inicioPlantilla("Les Platos");
		echo("<h2>Lo siento, no hay destino definido</h2>");
		finPlantilla();
	}
?>