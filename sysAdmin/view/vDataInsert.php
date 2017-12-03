<?php
	inicioPlantilla("Nuevo Plato");
	?>
	<form id="formCrear" name="FormCrear" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method="post">
		<?php
			if(isset($_POST['btnEnviar'])){
				printf('Nombre del Plato: <input type="text" name="nombre" ');
				if(isset($camposErroneos['nombre'])){
					printf('class="campoMaloFormulario"><br />');
				}else{
					printf('value="%s"><br />' . PHP_EOL, $_POST['nombre']);
				}

				echo('<fieldset');
				if($_SESSION['errorTemporada']){
					echo(' class="campoMaloFormulario"');
				}
				echo('>');
		?>
						<legend>Temporada</legend>
						<div class="datosForm">
						<div>
							<div class="icoAlergiaAdmin icoPrimavera" title="Primavera"></div>
							<?php
							echo('<input type="checkbox" name="checkPrimavera"');
							if(isset($POST["checkPrimavera"])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoVerano" title="Verano"></div>
							<?php
							echo('<input type="checkbox" name="checkVerano"');
							if(isset($POST["checkVerano"])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoOtono" title="Otoño"></div>
							<?php
							echo('<input type="checkbox" name="checkOtono"');
							if(isset($POST["checkOtono"])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoInvierno" title="Invierno"></div>
							<?php
							echo('<input type="checkbox" name="checkInvierno"');
							if(isset($POST["checkInvierno"])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						</div>
					</fieldset>
					<fieldset>
						<legend>Alergias</legend>
						<div class="datosForm">
						<div>
							<div class="icoAlergiaAdmin icoGluten" title="Gluten"></div>
							<?php
							echo('<input type="checkbox" name="checkGluten"');
							if(isset($POST['checkGluten'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoCrustaceo" title="Crustaceo"></div>
							<?php
							echo('<input type="checkbox" name="checkCrustaceo"');
							if(isset($POST['checkCrustaceo'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoHuevo" title="Huevo"></div>
							<?php
							echo('<input type="checkbox" name="checkHuevo"');
							if(isset($POST['checkHuevo'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoPescado" title="Pescado"></div>
							<?php
							echo('<input type="checkbox" name="checkPescado"');
							if(isset($POST['checkPescado'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoCacahuete" title="Cacahuete"></div>
							<?php
							echo('<input type="checkbox" name="checkCacahuete"');
							if(isset($POST['checkCacahuete'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoSoja" title="Soja"></div>
							<?php
							echo('<input type="checkbox" name="checkSoja"');
							if(isset($POST['checkSoja'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoLacteos" title="Lacteos"></div>
							<?php
							echo('<input type="checkbox" name="checkLacteos"');
							if(isset($POST['checkLacteos'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoCascara" title="Cascara"></div>
							<?php
							echo('<input type="checkbox" name="checkCascara"');
							if(isset($POST['checkCascara'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoApio" title="Apio"></div>
							<?php
							echo('<input type="checkbox" name="checkApio"');
							if(isset($POST['checkApio'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoMostaza" title="Mostaza"></div>
							<?php
							echo('<input type="checkbox" name="checkMostaza"');
							if(isset($POST['checkMostaza'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoSesamo" title="Sesamo"></div>
							<?php
							echo('<input type="checkbox" name="checkSesamo"');
							if(isset($POST['checkSesamo'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoSulfitos" title="Sulfitos"></div>
							<?php
							echo('<input type="checkbox" name="checkSulfitos"');
							if(isset($POST['checkSulfitos'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoAltramuces" title="Altramuces"></div>
							<?php
							echo('<input type="checkbox" name="checkAltramuces"');
							if(isset($POST['checkAltramuces'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						<div>
							<div class="icoAlergiaAdmin icoMoluscos" title="Moluscos"></div>
							<?php
							echo('<input type="checkbox" name="checkMoluscos"');
							if(isset($POST['checkMoluscos'])){
								echo(' checked');
							}
							echo('>');
							?>
						</div>
						</div>
					</fieldset>
			<?php
			}else{
				?>
				Nombre del Plato: <input type="text" name="nombre"><br />
				<fieldset>
					<legend>Temporada</legend>
					<div class="datosForm">
					<div>
						<div class="icoAlergiaAdmin icoPrimavera" title="Primavera"></div>
						<input type="checkbox" name="checkPrimavera">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoVerano" title="Verano"></div>
						<input type="checkbox" name="checkVerano">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoOtono" title="Otoño"></div>
						<input type="checkbox" name="checkOtono">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoInvierno" title="Invierno"></div>
						<input type="checkbox" name="checkInvierno">
					</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Alergias</legend>
					<div class="datosForm">
					<div>
						<div class="icoAlergiaAdmin icoGluten" title="Gluten"></div>
						<input type="checkbox" name="checkGluten">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoCrustaceo" title="Crustaceo"></div>
						<input type="checkbox" name="checkCrustaceo">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoHuevo" title="Huevo"></div>
						<input type="checkbox" name="checkHuevo">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoPescado" title="Pescado"></div>
						<input type="checkbox" name="checkPescado">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoCacahuete" title="Cacahuete"></div>
						<input type="checkbox" name="checkCacahuete">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoSoja" title="Soja"></div>
						<input type="checkbox" name="checkSoja">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoLacteos" title="Lacteos"></div>
						<input type="checkbox" name="checkLacteos">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoCascara" title="Cascara"></div>
						<input type="checkbox" name="checkCascara">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoApio" title="Apio"></div>
						<input type="checkbox" name="checkApio">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoMostaza" title="Mostaza"></div>
						<input type="checkbox" name="checkMostaza">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoSesamo" title="Sesamo"></div>
						<input type="checkbox" name="checkSesamo">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoSulfitos" title="Sulfitos"></div>
						<input type="checkbox" name="checkSulfitos">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoAltramuces" title="Altramuces"></div>
						<input type="checkbox" name="checkAltramuces">
					</div>
					<div>
						<div class="icoAlergiaAdmin icoMoluscos" title="Moluscos"></div>
						<input type="checkbox" name="checkMoluscos">
					</div>
					</div>
				</fieldset>
				<?php
			}
		?>
			<input type="submit" name="btnEnviar" value="Crear">
	</form>
	<?php
	finPlantilla();
	$_SESSION['errorTemporada'] = false;
?>