<?php
	$camposErroneos = Array();
	
	// Si se ha enviado el formulario
	if(isset($_POST['btnEnviar'])){
		$valido = true; // Comenzamos asumiendo que todo está bien
		
		if(!isset($_POST['nombre']) || strlen($_POST['nombre']) == 0){
			// No hay nombre para comprobar
			$camposErroneos['nombre'] = true;
			$valido = false;
		}
		
		if(!isset($_POST['checkPrimavera']) && !isset($_POST['checkVerano']) && !isset($_POST['checkOtono']) && !isset($_POST['checkInvierno'])){
			$_SESSION['errorTemporada'] = true;
			$valido = false;
		}
		
		if($valido){
			
			$pri = "false";
			$ver = "false";
			$oto = "false";
			$inv = "false";
			if(isset($_POST['checkPrimavera'])){
				$pri = "true";
			}
			if(isset($_POST['checkVerano'])){
				$ver = "true";
			}
			if(isset($_POST['checkOtono'])){
				$oto = "true";
			}
			if(isset($_POST['checkInvierno'])){
				$inv = "true";
			}
			
			$glu = "false";
			if(isset($_POST['checkGluten'])){
				$glu = "true";
			}
			$cru = "false";
			if(isset($_POST['checkCrustaceo'])){
				$cru = "true";
			}
			$hue = "false";
			if(isset($_POST['checkHuevo'])){
				$hue = "true";
			}
			$pes = "false";
			if(isset($_POST['checkPescado'])){
				$pes = "true";
			}
			$cac = "false";
			if(isset($_POST['checkCacahuete'])){
				$cac = "true";
			}
			$soj = "false";
			if(isset($_POST['checkSoja'])){
				$soj = "true";
			}
			$lac = "false";
			if(isset($_POST['checkLacteos'])){
				$lac = "true";
			}
			$cas = "false";
			if(isset($_POST['checkCascara'])){
				$cas = "true";
			}
			$api = "false";
			if(isset($_POST['checkApio'])){
				$api = "true";
			}
			$mos = "false";
			if(isset($_POST['checkMostaza'])){
				$mos = "true";
			}
			$ses = "false";
			if(isset($_POST['checkSesamo'])){
				$ses = "true";
			}
			$sul = "false";
			if(isset($_POST['checkSulfitos'])){
				$sul = "true";
			}
			$alt = "false";
			if(isset($_POST['checkAltramuces'])){
				$alt = "true";
			}
			$mol = "false";
			if(isset($_POST['checkMoluscos'])){
				$mol = "true";
			}
			// todos los campos son correctos, agregar entrada
			if(Plato::insertarPlato($_POST['nombre'], 
				$pri, $ver, $oto, $inv,
				$glu, $cru, $hue, $pes,
				$cac, $soj, $lac, $cas,
				$api, $mos, $ses, $sul,
				$alt, $mol)){
				// Éxito
				$_SESSION['mensaje'] = "<h2>Inserción correcta</h2>";
			}else{
				// error
				$_SESSION['mensaje'] = "<h2>Inserción fallida</h2>";
			}
			// de vuelta al inicio
			header("Location: index.php");
		}
	}
?>