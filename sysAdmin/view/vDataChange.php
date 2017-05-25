<?php
	inicioPlantilla("Modificacion Plato");
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
					printf('Nombre del Plato: <input type="text" name="nombre" value="' . $datosEntrada['nombre'] . '"><br />');
					?>
					<table>
					<tr><th>Temporada</th></tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoPrimavera" title="Primavera"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkPrimavera"');
							if($datosEntrada['season']["Primavera"]){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoVerano" title="Verano"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkVerano"');
							if($datosEntrada['season']["Verano"]){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoOtono" title="Otoño"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkOtono"');
							if($datosEntrada['season']["Otono"]){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoInvierno" title="Invierno"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkInvierno"');
							if($datosEntrada['season']["Invierno"]){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					</table>
					<table>
					<tr><th>Alergias</th></tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoGluten" title="Gluten"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkGluten"');
							if($datosEntrada['alergias']['Gluten']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCrustaceo" title="Crustaceo"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkCrustaceo"');
							if($datosEntrada['alergias']['Crustaceo']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoHuevo" title="Huevo"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkHuevo"');
							if($datosEntrada['alergias']['Huevo']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoPescado" title="Pescado"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkPescado"');
							if($datosEntrada['alergias']['Pescado']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCacahuete" title="Cacahuete"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkCacahuete"');
							if($datosEntrada['alergias']['Cacahuete']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSoja" title="Soja"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkSoja"');
							if($datosEntrada['alergias']['Soja']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoLacteos" title="Lacteos"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkLacteos"');
							if($datosEntrada['alergias']['Lacteos']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCascara" title="Cascara"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkCascara"');
							if($datosEntrada['alergias']['Cascara']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoApio" title="Apio"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkApio"');
							if($datosEntrada['alergias']['Apio']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoMostaza" title="Mostaza"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkMostaza"');
							if($datosEntrada['alergias']['Mostaza']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSesamo" title="Sesamo"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkSesamo"');
							if($datosEntrada['alergias']['Sesamo']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSulfitos" title="Sulfitos"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkSulfitos"');
							if($datosEntrada['alergias']['Sulfitos']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoAltramuces" title="Altramuces"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkAltramuces"');
							if($datosEntrada['alergias']['Altramuces']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoMoluscos" title="Moluscos"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkMoluscos"');
							if($datosEntrada['alergias']['Moluscos']){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
				</table>
				<input type="submit" name="btnEnviar" value="Actualizar">
			</form>
			<?php
			break;
		case "post":
			?>
			<form name="FormModif" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) . "?id=" .  $_GET['id'] ?>" method="post">
				<?php
				printf('Nombre del Plato: <input type="text" name="nombre" ');
				if(isset($camposErroneos['nombre'])){
					printf('class="campoMaloFormulario"><br />');
				}else{
					printf('value="%s"><br />' . PHP_EOL, $_POST['nombre']);
				}
				echo('<table');
				if($_SESSION['errorTemporada']){
					echo(' class="campoMaloFormulario"');
				}
				echo('>');
				?>
					<tr><th>Temporada</th></tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoPrimavera" title="Primavera"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkPrimavera"');
							if(isset($POST["checkPrimavera"])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoVerano" title="Verano"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkVerano"');
							if(isset($POST["checkVerano"])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoOtono" title="Otoño"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkOtono"');
							if(isset($POST["checkOtono"])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoInvierno" title="Invierno"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkInvierno"');
							if(isset($POST["checkInvierno"])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
				</table>
				<table>
					<tr><th>Alergias</th></tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoGluten" title="Gluten"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkGluten"');
							if(isset($POST['checkGluten'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCrustaceo" title="Crustaceo"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkCrustaceo"');
							if(isset($POST['checkCrustaceo'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoHuevo" title="Huevo"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkHuevo"');
							if(isset($POST['checkHuevo'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoPescado" title="Pescado"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkPescado"');
							if(isset($POST['checkPescado'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCacahuete" title="Cacahuete"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkCacahuete"');
							if(isset($POST['checkCacahuete'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSoja" title="Soja"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkSoja"');
							if(isset($POST['checkSoja'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoLacteos" title="Lacteos"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkLacteos"');
							if(isset($POST['checkLacteos'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCascara" title="Cascara"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkCascara"');
							if(isset($POST['checkCascara'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoApio" title="Apio"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkApio"');
							if(isset($POST['checkApio'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoMostaza" title="Mostaza"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkMostaza"');
							if(isset($POST['checkMostaza'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSesamo" title="Sesamo"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkSesamo"');
							if(isset($POST['checkSesamo'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSulfitos" title="Sulfitos"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkSulfitos"');
							if(isset($POST['checkSulfitos'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoAltramuces" title="Altramuces"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkAltramuces"');
							if(isset($POST['checkAltramuces'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoMoluscos" title="Moluscos"></div>
						</td>
						<td><?php
							echo('<input type="checkbox" name="checkMoluscos"');
							if(isset($POST['checkMoluscos'])){
								echo(' checked');
							}
							echo('>');
							?>
						</td>
					</tr>
				</table>
					<input type="submit" name="btnEnviar" value="Actualizar">
				</p>
			</form>
			<?php
			break;
	}

	finPlantilla();
?>