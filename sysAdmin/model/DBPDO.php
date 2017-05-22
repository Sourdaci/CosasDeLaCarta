<?php

	/*
	*
	* DBPDO.php
	*
	*/
	
	// Se utiliza para evitar errores de importación duplicada
	// Y a la vez importa si no lo hacen las clases que importen a esta
	require_once(__DIR__ ."/../configuraciones.php");
	
	class DBPDO{
		
		// Devuelve un conjunto de resultados fruto del parámetro consulta sql
		// En cualquier otro caso, devuelve null
        public static function ejecutarConsulta($sentenciaSQL){
            try{
                // Conectamos a la base de datos
				$conexion = new PDO(DSN_MYSQL_PDO, DBUSER, DBPASS);
				
				//Habilitamos las excepciones para nuestro código
                $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				// Ejecutamos la sentencia como sentencia preparada
                $preparedStatement = $conexion->prepare($sentenciaSQL);
				
                $preparedStatement->execute(array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				
                // Destruimos la conexión
                unset($conexion);
            } catch (PDOException $e) {
                // Pendiente de decidir protocolo de actuación
				//echo("<p>" . $e->getMessage() . "</p>");
				$preparedStatement = null;
            }
			// Devolvemos el resultado de la consulta
            return $preparedStatement;
        }
		
		// Devuelve el número de registros que encuentra la consulta
		// En caso de error, devuelve -1
		public static function ejecutarCuenta($sentenciaSQL){
			$resultSet = self::ejecutarConsulta($sentenciaSQL);
			if($resultSet == null){
				return -1;
			}else{
				return $resultSet->rowCount();
			}
		}
    }
?>