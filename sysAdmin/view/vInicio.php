<?php

	/*
	*
	* vInicio.php
	*
	*/

	function muestraInicio($coleccionEntradas, $claveEntradas, $paginaActual, $paginaMaxima, $totalEntradas){
		
		inicioPlantilla("Platos");
		botonSalirUsuario($nombreUsuario);
		if($coleccionEntradas != null){
			if(count($coleccionEntradas) > 0){
				// Para recuperar los valores de cada elemento en orden
				$clavesArray = array_keys($coleccionEntradas[0]);
				
				if(isset($_SESSION['mensaje'])){
					printf("<h2>%s</h2>", $_SESSION['mensaje']);
				}
				
				?>
				<a href="dataInsert.php"><div id="divNuevo"><img src="img/new.png" /><h3>Nuevo Plato</h3></div></a>
				<!-- Formulario de Filtrado -->
				<form name="BuscaDecDep" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
					<p>Buscar por Nombre Plato: 
					<input type="text" name="cadenaBusqueda" width="40"> 
					<input type="submit" name="btnBuscar" value="Buscar">
					<br />Dejar vacío para buscar todos los Platos</p>
				</form>
				
				<table>
				<tr>
				<?php
				foreach($coleccionEntradas[0] AS $valor){
					echo("<th>$valor</th>".PHP_EOL);
				}
				?>
				<th>Editar</th>
				<th>Borrar</th>
				</tr>
				<?php
				// Valores de tabla
				foreach($coleccionEntradas AS $entrada){
					echo("<tr>" . PHP_EOL);
					// Recuperación de los valores de elementos en orden
					foreach($clavesArray AS $nombreClave){
						echo("<td>$entrada[$nombreClave]</td>" . PHP_EOL);
					}
					?>
					<td>
					<a href="dataChange.php?id=<?php echo($entrada[$claveEntradas]); ?>">
					<img src="img/edit.png" alt="Modificar" />
					</a>
					</td>
					<td>
					<a href="dataDrop.php?id=<?php echo($entrada[$claveEntradas]); ?>">
					<img src="img/delete.png" alt="Borrar" />
					</a>
					</td>
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
		}else{
			?> <h2>Ha ocurrido un error en las operaciones de BD</h2> <?php
		}
		finPlantilla();
	}
	
	function muestraErrorInicio(){
		inicioPlantilla("Les Platos");
		botonSalirUsuario();
		echo("<h2>Lo siento, no hay destino definido</h2>");
		finPlantilla();
	}
	
	function botonSalirUsuario(){
		// Botón de Salir en Formulario
		printf('<form action=%s method="post">', $_SERVER['PHP_SELF']);
		echo('<button type="submit" name="salir" value="salir">Cerrar sesión</button>');
		echo("</p>");
		echo("</form>");
	}
?>