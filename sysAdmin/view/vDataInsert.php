<?php
	inicioPlantilla("Nuevo Plato");
	?>
	<form name="FormModif" action="<?php echo(htmlspecialchars($_SERVER['PHP_SELF'])) ?>" method="post">
		<p>
		<?php
			if(isset($_POST['btnEnviar'])){
				foreach($camposErroneos AS $indice => $valor){
					printf('%s: <input type="text" name="%s"', $indice, $indice);
					if($valor != null){
						print(' class="campoMaloFormulario"><br />' . PHP_EOL);
					}else{
						printf(' value="%s"><br />' . PHP_EOL, $_POST[$indice]);
					}
				}
			}else{
				?>
				DescDepartamento (Sólo texto): <input type="text" name="DescDepartamento"><br />
				<?php
			}
		?>
			<input type="submit" name="btnEnviar" value="Insertar">
		</p>
	</form>
	<?php
	finPlantilla();
?>