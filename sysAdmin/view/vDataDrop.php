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
			<form id="FormBorra" name="FormModif" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) . "?id=" .  $_GET['id'] ?>" method="post">
				<?php
					printf('Cod: <input readonly type="number" name="cod" value="' . $datosEntrada['cod'] . '"><br />');
					printf('Nombre del Plato: <input readonly type="text" name="nombre" value="' . $datosEntrada['nombre'] . '"><br />');
					?>
					<fieldset>
						<legend>Temporada</legend>
						<div class="datosForm">
						<?php
						if($datosEntrada['season']["Primavera"]){
							echo('<div class="icoAlergiaAdmin icoPrimavera" title="Primavera"></div>');
						}
						if($datosEntrada['season']["Verano"]){
							echo('<div class="icoAlergiaAdmin icoVerano" title="Verano"></div>');
						}
						if($datosEntrada['season']["Otono"]){
							echo('<div class="icoAlergiaAdmin icoOtono" title="Otoño"></div>');
						}
						if($datosEntrada['season']["Invierno"]){
							echo('<div class="icoAlergiaAdmin icoInvierno" title="Invierno"></div>');
						}
						?>
						</div>
					</fieldset>
					<br />
					<fieldset>
						<legend>Alergias</legend>
						<div class="datosForm">
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
						</div>
					</fieldset>
					<br />
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