<?php
	inicioPlantilla("Modificacion Mantenimiento PDO");
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
				<p>
				<?php
					printf('%s: <input type="text" name="%s" value="%s" readonly><br />', $datosEntrada[0][0], $datosEntrada[0][0], $datosEntrada[0][1]);
					for($i=1;$i<count($datosEntrada);$i++){
						printf('%s: <input type="text" name="%s" value="%s"><br />', $datosEntrada[$i][0], $datosEntrada[$i][0], $datosEntrada[$i][1]);
					}
				?>
					<input type="submit" name="btnEnviar" value="Actualizar">
				</p>
			</form>
			<?php
			break;
		case "post":
			?>
			<form name="FormModif" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) . "?id=" .  $_GET['id'] ?>" method="post">
				<p>
				<?php
					printf('%s: <input type="text" name="%s" value="%s" readonly><br />', $datosEntrada[0][0], $datosEntrada[0][0], $datosEntrada[0][1]);
					for($i=1;$i<count($datosEntrada);$i++){
						printf('%s: <input type="text" name="%s"', $datosEntrada[$i][0], $datosEntrada[$i][0]);
						if(in_array($datosEntrada[$i][0], $camposErroneos)){
							echo(' class="campoMaloFormulario"');
						}else{
							printf(' value="%s"', $_POST[$datosEntrada[$i][0]]);
						}
						echo("><br />");
					}
				?>
					<input type="submit" name="btnEnviar" value="Actualizar">
				</p>
			</form>
			<?php
			break;
	}

	finPlantilla();
?>