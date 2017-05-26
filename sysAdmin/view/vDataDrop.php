<?php
	inicioPlantilla("Borrado Plato");
	switch($caso){
		case "noGet":
			?>
			<h2>No ha indicado ID</h2>
			<?php
			break;
		case "noId":
			?>
			<h2>No se encuentra el ID</h2>
			<?php
			break;
		case "noPost":
			?>
			<form name="FormModif" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) . "?id=" .  $_GET['id'] ?>" method="post">
				<?php
					printf('Cod: <input readonly type="number" name="cod" value="' . $datosEntrada['cod'] . '"><br />');
					printf('Nombre del Plato: <input readonly type="text" name="nombre" value="' . $datosEntrada['nombre'] . '"><br />');
					?>
					<table>
					<tr><th>Temporada</th></tr>
					<tr>
						<?php
						if($datosEntrada['season']["Primavera"]){
							echo('<td><div class="icoAlergiaAdmin icoPrimavera" title="Primavera"></div></td>');
						}
						if($datosEntrada['season']["Verano"]){
							echo('<td><div class="icoAlergiaAdmin icoVerano" title="Verano"></div></td>');
						}
						if($datosEntrada['season']["Otono"]){
							echo('<td><div class="icoAlergiaAdmin icoOtono" title="Otoño"></div></td>');
						}
						if($datosEntrada['season']["Invierno"]){
							echo('<td><div class="icoAlergiaAdmin icoInvierno" title="Invierno"></div></td>');
						}
						?>
					</tr>
					</table>
					<table>
					<tr><th>Alergias</th></tr>
					<tr>
						<?php
							if($datosEntrada['alergias']['Gluten']){
								echo('<td><div class="icoAlergiaAdmin icoGluten" title="Gluten"></div></td>');
							}
							if($datosEntrada['alergias']['Crustaceo']){
								echo('<td><div class="icoAlergiaAdmin icoCrustaceo" title="Crustaceo"></div></td>');
							}
							if($datosEntrada['alergias']['Huevo']){
								echo('<td><div class="icoAlergiaAdmin icoHuevo" title="Huevo"></div></td>');
							}
							if($datosEntrada['alergias']['Pescado']){
								echo('<td><div class="icoAlergiaAdmin icoPescado" title="Pescado"></div></td>');
							}
							if($datosEntrada['alergias']['Cacahuete']){
								echo('<td><div class="icoAlergiaAdmin icoCacahuete" title="Cacahuete"></div></td>');
							}
							if($datosEntrada['alergias']['Soja']){
								echo('<td><div class="icoAlergiaAdmin icoSoja" title="Soja"></div></td>');
							}
							if($datosEntrada['alergias']['Lacteos']){
								echo('<td><div class="icoAlergiaAdmin icoLacteos" title="Lacteos"></div></td>');
							}
							if($datosEntrada['alergias']['Cascara']){
								echo('<td><div class="icoAlergiaAdmin icoCascara" title="Cascara"></div></td>');
							}
							if($datosEntrada['alergias']['Apio']){
								echo('<td><div class="icoAlergiaAdmin icoApio" title="Apio"></div></td>');
							}
							if($datosEntrada['alergias']['Mostaza']){
								echo('<td><div class="icoAlergiaAdmin icoMostaza" title="Mostaza"></div></td>');
							}
							if($datosEntrada['alergias']['Sesamo']){
								echo('<td><div class="icoAlergiaAdmin icoSesamo" title="Sesamo"></div></td>');
							}
							if($datosEntrada['alergias']['Sulfitos']){
								echo('<td><div class="icoAlergiaAdmin icoSulfitos" title="Sulfitos"></div></td>');
							}
							if($datosEntrada['alergias']['Altramuces']){
								echo('<td><div class="icoAlergiaAdmin icoAltramuces" title="Altramuces"></div></td>');
							}
							if($datosEntrada['alergias']['Moluscos']){
								echo('<td><div class="icoAlergiaAdmin icoMoluscos" title="Moluscos"></div></td>');
							}
						?>
					</tr>
				</table>
				<input type="submit" name="btnEnviar" value="Borrar">
			</form>
			<?php
			break;
		case "different":
			?>
			<h2>Valores recibidos no coincidentes</h2>
			<?php
			break;
	}

	finPlantilla();
?>