<?php
	interface DepartamentoDB {
		public static function contarDepartamentosPorDesc($desc);
		public static function getDepartamentosPorDesc($desc, $numeroSaltar, $numeroContar);
		public static function getDepartamento($codDepartamento);
		public static function modificarDepartamento($codDepartamento, $descDepartamento);
		public static function borrarDepartamento($codDepartamento);
		public static function insertarDepartamento($codDepartamento, $descDepartamento);
	}
?>