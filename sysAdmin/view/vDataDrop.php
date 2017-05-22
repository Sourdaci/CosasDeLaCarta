<?php
	inicioPlantilla("Borrado Mantenimiento PDO");
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
					for($i=0;$i<count($datosEntrada);$i++){
						printf('%s: <input type="text" name="%s" value="%s" readonly><br />', $datosEntrada[$i][0], $datosEntrada[$i][0], $datosEntrada[$i][1]);
					}
				?>
					<input type="submit" name="btnEnviar" value="Actualizar">
				</p>
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