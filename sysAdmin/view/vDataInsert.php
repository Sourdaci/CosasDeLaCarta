<?php
	inicioPlantilla("Nuevo Plato");
	?>
	<form name="FormCrear" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method="post">
		<?php
			if(isset($_POST['btnEnviar'])){
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
			<?php
			}else{
				?>
				Nombre del Plato: <input type="text" name="nombre"><br />
				<table>
					<tr><th>Temporada</th></tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoPrimavera" title="Primavera"></div>
						</td>
						<td>
							<input type="checkbox" name="checkPrimavera">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoVerano" title="Verano"></div>
						</td>
						<td>
							<input type="checkbox" name="checkVerano">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoOtono" title="Otoño"></div>
						</td>
						<td>
							<input type="checkbox" name="checkOtono">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoInvierno" title="Invierno"></div>
						</td>
						<td>
							<input type="checkbox" name="checkInvierno">
						</td>
					</tr>
				</table>
				<table>
					<tr><th>Alergias</th></tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoGluten" title="Gluten"></div>
						</td>
						<td>
							<input type="checkbox" name="checkGluten">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCrustaceo" title="Crustaceo"></div>
						</td>
						<td>
							<input type="checkbox" name="checkCrustaceo">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoHuevo" title="Huevo"></div>
						</td>
						<td>
							<input type="checkbox" name="checkHuevo">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoPescado" title="Pescado"></div>
						</td>
						<td>
							<input type="checkbox" name="checkPescado">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCacahuete" title="Cacahuete"></div>
						</td>
						<td>
							<input type="checkbox" name="checkCacahuete">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSoja" title="Soja"></div>
						</td>
						<td>
							<input type="checkbox" name="checkSoja">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoLacteos" title="Lacteos"></div>
						</td>
						<td>
							<input type="checkbox" name="checkLacteos">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoCascara" title="Cascara"></div>
						</td>
						<td>
							<input type="checkbox" name="checkCascara">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoApio" title="Apio"></div>
						</td>
						<td>
							<input type="checkbox" name="checkApio">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoMostaza" title="Mostaza"></div>
						</td>
						<td>
							<input type="checkbox" name="checkMostaza">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSesamo" title="Sesamo"></div>
						</td>
						<td>
							<input type="checkbox" name="checkSesamo">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoSulfitos" title="Sulfitos"></div>
						</td>
						<td>
							<input type="checkbox" name="checkSulfitos">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoAltramuces" title="Altramuces"></div>
						</td>
						<td>
							<input type="checkbox" name="checkAltramuces">
						</td>
					</tr>
					<tr>
						<td>
							<div class="icoAlergiaAdmin icoMoluscos" title="Moluscos"></div>
						</td>
						<td>
							<input type="checkbox" name="checkMoluscos">
						</td>
					</tr>
				</table>
				<?php
			}
		?>
			<input type="submit" name="btnEnviar" value="Crear">
	</form>
	<?php
	finPlantilla();
	$_SESSION['errorTemporada'] = false;
?>