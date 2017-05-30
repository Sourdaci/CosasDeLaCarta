<?php
	
	/*
	*
	* PlatoPDO.php
	*
	*/

	require_once("DBPDO.php");
	
    class PlatoPDO{
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve el número de Platos coincidentes.
		* En caso de error, se devuelve -1
		*
		* $desc: String a comprobar en el campo nombre de la BD
		*/
		public static function contarPlatosPorDesc($desc){
			
			$sql = <<< EOQ
            SELECT count(*) AS Cuenta 
			FROM Plato 
            WHERE nombre LIKE "%$desc%" 
			AND Visible=true
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return -1;
            }else{
                if($resultado->rowCount() == 1){
					// Array asociativo con los datos de la tupla de resultados
                    return $resultado->fetch(PDO::FETCH_ASSOC)['Cuenta'];
                }else{
                    return -1;
                }
            }
		}
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve el número de Platos coincidentes.
		* En caso de error, se devuelve -1
		*
		* $desc: String a comprobar en el campo nombre de la BD
		*/
		public static function contarPlatosPorDescAdmin($desc){
			
			$sql = <<< EOQ
            SELECT count(*) AS Cuenta 
			FROM Plato 
            WHERE nombre LIKE "%$desc%"
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return -1;
            }else{
                if($resultado->rowCount() == 1){
					// Array asociativo con los datos de la tupla de resultados
                    return $resultado->fetch(PDO::FETCH_ASSOC)['Cuenta'];
                }else{
                    return -1;
                }
            }
		}
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve el número de Platos coincidentes.
		* En caso de error, se devuelve -1
		*
		* $desc: String a comprobar en el campo nombre de la BD
		*/
		public static function contarPlatosTemporadaPorDesc($desc){
			
			$temporada = self::getTemporadaParaQuery();
			
			$sql = <<< EOQ
            SELECT count(*) AS Cuenta 
			FROM Plato 
            WHERE nombre LIKE "%$desc%" 
			$temporada
			AND Visible=true
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return -1;
            }else{
                if($resultado->rowCount() == 1){
					// Array asociativo con los datos de la tupla de resultados
                    return $resultado->fetch(PDO::FETCH_ASSOC)['Cuenta'];
                }else{
                    return -1;
                }
            }
		}
		
		public static function getTemporada(){
			$sql = <<< EOQ
			SELECT Temporada 
			FROM Config
EOQ;
			
			$resultado = DBPDO::ejecutarConsulta($sql);
			return $resultado->fetch(PDO::FETCH_ASSOC)['Temporada'];
		}
		
		private static function getTemporadaParaQuery(){
			
			switch(self::getTemporada()){
				case "Primavera":
					$temporada = "AND Primavera=true";
					break;
				case "Verano":
					$temporada = "AND Verano=true";
					break;
				case "Otoño":
					$temporada = "AND Otono=true";
					break;
				case "Invierno":
					$temporada = "AND Invierno=true";
					break;
			}
			
			return $temporada;
		}
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve todos los Platos en array de array asociativo
		* En caso de error, se devuelve null
		*
		* $desc: String a comprobar en el campo nombre de la BD
		* $numeroSaltar: Integer, Platos que excluir de la búsqueda (paginación)
		* $numeroContar: Integer, Platos que devolver con la búsqueda (paginación)
		*/
		public static function getPlatosPorDesc($desc, $numeroSaltar, $numeroContar){
			
			$sql = <<< EOQ
            SELECT * FROM Plato
            WHERE nombre LIKE "%$desc%" 
			AND Visible=true 
			ORDER BY nombre ASC
			LIMIT $numeroSaltar, $numeroContar
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			
			if($resultado == null || $resultado == false){
                return null;
            }else{
                if($resultado->rowCount() != 0){
					// Array que contiene los array asociativos de Platos
                    return $resultado->fetchAll(PDO::FETCH_ASSOC);
                }else{
                    return null;
                }
            }
		}
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve todos los Platos en array de array asociativo
		* En caso de error, se devuelve null
		*
		* $desc: String a comprobar en el campo nombre de la BD
		* $numeroSaltar: Integer, Platos que excluir de la búsqueda (paginación)
		* $numeroContar: Integer, Platos que devolver con la búsqueda (paginación)
		*/
		public static function getPlatosPorDescAdmin($desc, $numeroSaltar, $numeroContar){
			
			$sql = <<< EOQ
            SELECT * FROM Plato
            WHERE nombre LIKE "%$desc%"
			ORDER BY nombre ASC
			LIMIT $numeroSaltar, $numeroContar
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return null;
            }else{
                if($resultado->rowCount() != 0){
					// Array que contiene los array asociativos de Platos
                    return $resultado->fetchAll(PDO::FETCH_ASSOC);
                }else{
                    return null;
                }
            }
		}
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve todos los Platos en array de array asociativo
		* En caso de error, se devuelve null
		*
		* $desc: String a comprobar en el campo nombre de la BD
		* $numeroSaltar: Integer, Platos que excluir de la búsqueda (paginación)
		* $numeroContar: Integer, Platos que devolver con la búsqueda (paginación)
		*/
		public static function getPlatosTemporadaPorDesc($desc, $numeroSaltar, $numeroContar){
			
			$temporada = self::getTemporadaParaQuery();
			
			$sql = <<< EOQ
            SELECT * FROM Plato
            WHERE nombre LIKE "%$desc%"
			AND Visible=true
			$temporada 
			ORDER BY nombre ASC
			LIMIT $numeroSaltar, $numeroContar
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return null;
            }else{
                if($resultado->rowCount() != 0){
					// Array que contiene los array asociativos de Platos
                    return $resultado->fetchAll(PDO::FETCH_ASSOC);
                }else{
                    return null;
                }
            }
		}
		
		/*
		* Busca un Plato en la BD por su ID
		* Si existe, lo devuelve como array asociativo
		* Si no, devuelve null
		*
		* $codPlato: ID del Plato a buscar
		*/
		public static function getPlato($codPlato){
			
			$sql = <<< EOQ
            SELECT * FROM Plato
            WHERE cod="$codPlato"
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return null;
            }else{
                if($resultado->rowCount() == 1){
					return $resultado->fetch(PDO::FETCH_ASSOC);
                }else{
                    return null;
                }
            }
		}
		
		/*
		* Busca un Plato en la BD para modificar sus datos
		* Si se modifica, devuelve true
		* En caso contrario, devuelve false
		*
		* $codPlato: ID del Plato a modificar
		* $nombre: Campo del Plato a modificar (estos Platos solo modifican 1 campo)
		*/
		public static function modificarPlato($codPlato, $nombre, 
			$esPrimavera, $esVerano, $esOtono, $esInvierno, 
			$contGluten, $contCrustaceo, $contHuevo, $contPescado,
			$contCacahuete, $contSoja, $contLacteos, $contCascara, 
			$contApio, $contMostaza, $contSesamo, $contSulfitos, 
			$contAltramuces, $contMoluscos){
			
			$sql = <<< EOQ
            UPDATE Plato
			SET nombre="$nombre",
			Primavera = $esPrimavera, 
			Verano = $esVerano, 
			Otono = $esOtono, 
			Invierno = $esInvierno, 
			Gluten = $contGluten, 
			Crustaceo = $contCrustaceo, 
			Huevo = $contHuevo, 
			Pescado = $contPescado, 
			Cacahuete = $contCacahuete, 
			Soja = $contSoja, 
			Lacteos = $contLacteos, 
			Cascara = $contCascara, 
			Apio = $contApio, 
			Mostaza = $contMostaza, 
			Sesamo = $contSesamo, 
			Sulfitos = $contSulfitos, 
			Altramuces = $contAltramuces, 
			Moluscos = $contMoluscos
            WHERE cod="$codPlato"
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return false;
            }else{
                if($resultado->rowCount() == 1){
					return true;
                }else{
                    return false;
                }
            }
		}
		
		/*
		* Busca un Plato en la BD y lo oculta al usuario de la web
		* Si lo oculta, devuelve true
		* En caso contrario, devuelve false
		*
		* $codPlato: ID del Plato a ocultar
		*/
		public static function ocultarPlato($codPlato){
			$sql = <<< EOQ
            UPDATE Plato
			SET Visible=false
            WHERE cod="$codPlato"
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return false;
            }else{
                if($resultado->rowCount() == 1){
					return true;
                }else{
                    return false;
                }
            }
		}
		
		/*
		* Busca un Plato en la BD y lo oculta al usuario de la web
		* Si lo oculta, devuelve true
		* En caso contrario, devuelve false
		*
		* $codPlato: ID del Plato a ocultar
		*/
		public static function mostrarPlato($codPlato){
			$sql = <<< EOQ
            UPDATE Plato
			SET Visible=true
            WHERE cod="$codPlato"
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return false;
            }else{
                if($resultado->rowCount() == 1){
					return true;
                }else{
                    return false;
                }
            }
		}
		
		/*
		* Busca un Plato en la BD y lo elimina
		* Si lo borra, devuelve true
		* En caso contrario, devuelve false
		*
		* $codPlato: ID del Plato a borrar
		*/
		public static function borrarPlato($codPlato){
			$sql = <<< EOQ
            DELETE FROM Plato
            WHERE cod="$codPlato"
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return false;
            }else{
                if($resultado->rowCount() == 1){
					return true;
                }else{
                    return false;
                }
            }
		}
		
		/*
		* Registra un nuevo Plato en la BD
		* Si lo consigue, devuelve true
		* En caso contrario, devuelve false
		*
		* $codPlato: ID del nuevo Plato
		* $nombre: Descripción del nuevo Plato
		*/
		public static function insertarPlato($nombre, 
			$esPrimavera, $esVerano, $esOtono, $esInvierno, 
			$contGluten, $contCrustaceo, $contHuevo, $contPescado,
			$contCacahuete, $contSoja, $contLacteos, $contCascara, 
			$contApio, $contMostaza, $contSesamo, $contSulfitos, 
			$contAltramuces, $contMoluscos){
			$sql = <<< EOQ
            INSERT INTO Plato (nombre, 
			Primavera, Verano, Otono, Invierno, 
			Gluten, Crustaceo, Huevo, Pescado,
			Cacahuete, Soja, Lacteos, Cascara, 
			Apio, Mostaza, Sesamo, Sulfitos, 
			Altramuces, Moluscos, Visible)
            VALUES ("$nombre", 
			$esPrimavera, $esVerano, $esOtono, $esInvierno, 
			$contGluten, $contCrustaceo, $contHuevo, $contPescado,
			$contCacahuete, $contSoja, $contLacteos, $contCascara, 
			$contApio, $contMostaza, $contSesamo, $contSulfitos, 
			$contAltramuces, $contMoluscos, true)
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return false;
            }else{
                if($resultado->rowCount() == 1){
					return true;
                }else{
                    return false;
                }
            }
		}
		
		public static function platoVisible($cod){
			$sql = <<< EOQ
            SELECT Visible 
			FROM Plato
            WHERE cod="$cod"
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return false;
            }else{
                if($resultado->rowCount() == 1){
					return ($resultado->fetch(PDO::FETCH_ASSOC))['Visible'];
                }else{
                    return false;
                }
            }
		}
		
		public static function cambioTemporada($nueva){
			$sql = <<< EOQ
            UPDATE Config
			SET Temporada="$nueva"
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
		}
	}
?>