<?php

	define("DBHOST", "localhost");
	define("DBUSER", "root");
	define("DBPASS", "toor");
	
	// Plantilla de estilo
	define("PLANTILLA_ESTILO", __DIR__ . "/view/plantillaAdmin.php");
	
	// Conexión BD 2
	// Para MySQLi: DBHOST, DBNAME, DBUSER y DBPASS
	// Para PDO: DBUSER, DBPASS y DSN_MYSQL_PDO
    define("DBNAME", "restaurant");
	define("DSN_MYSQL_PDO", "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8");
?>