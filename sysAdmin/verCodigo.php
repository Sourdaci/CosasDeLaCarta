<?php
	require_once("configuraciones.php");
	require_once(PLANTILLA_ESTILO);
	
	$listado = Array(
		"cIni" => "controller/cInicio.php",
		"cLog" => "controller/cLogin.php",
		"cDaC" => "controller/cDataChange.php",
		"cDaD" => "controller/cDataDrop.php",
		"cDaI" => "controller/cDataInsert.php",
		"mDB" => "model/DBPDO.php",
		"mUs" => "model/Usuario.php",
		"mUsD" => "model/UsuarioDB.php",
		"mUsP" => "model/UsuarioPDO.php",
		"mDe" => "model/Departamento.php",
		"mDeD" => "model/DepartamentoDB.php",
		"mDeP" => "model/DepartamentoPDO.php",
		"vIn" => "view/vInicio.php",
		"vLog" => "view/vLogin.php",
		"vDaC" => "view/vDataChange.php",
		"vDaD" => "view/vDataDrop.php",
		"vDaI" => "view/vDataInsert.php",
		"ind" => "index.php"
	);
	
	inicioPlantilla("Visor Codigo");
	if(isset($_GET['idCod'])){
		if(isset($listado[$_GET['idCod']])){
			show_source($listado[$_GET['idCod']]);
		}else{
			echo("<h2>ID de código no reconocido</h2>");
		}
	}else{
		echo("<h2>No hay ID de código</h2>");
	}
	finPlantilla();
?>