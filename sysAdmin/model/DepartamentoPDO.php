<?php
	
	/*
	*
	* DepartamentoPDO.php
	*
	*/

	require_once("DepartamentoDB.php");
	require_once("DBPDO.php");
	
    class DepartamentoPDO implements DepartamentoDB{
		
		/*
		* Busca en la BD todos los Departamentos cuya descripción contiene la que se pasa por parámetro
		* Devuelve el número de Departamentos coincidentes.
		* En caso de error, se devuelve -1
		*
		* $desc: String a comprobar en el campo DescDepartamento de la BD
		*/
		public static function contarDepartamentosPorDesc($desc){
			
			$sql = <<< EOQ
            SELECT count(*) AS Cuenta 
			FROM Departamento 
            WHERE DescDepartamento LIKE "%$desc%"
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
		* Busca en la BD todos los Departamentos cuya descripción contiene la que se pasa por parámetro
		* Devuelve todos los departamentos en array de array asociativo
		* En caso de error, se devuelve null
		*
		* $desc: String a comprobar en el campo DescDepartamento de la BD
		* $numeroSaltar: Integer, Departamentos que excluir de la búsqueda (paginación)
		* $numeroContar: Integer, Departamentos que devolver con la búsqueda (paginación)
		*/
		public static function getDepartamentosPorDesc($desc, $numeroSaltar, $numeroContar){
			
			$sql = <<< EOQ
            SELECT * FROM Departamento
            WHERE DescDepartamento LIKE "%$desc%"
			ORDER BY CodDepartamento ASC
			LIMIT $numeroSaltar, $numeroContar
EOQ;
			$resultado = DBPDO::ejecutarConsulta($sql);
			if($resultado == null || $resultado == false){
                return null;
            }else{
                if($resultado->rowCount() != 0){
					// Array que contiene los array asociativos de Departamentos
                    return $resultado->fetchAll(PDO::FETCH_ASSOC);
                }else{
                    return null;
                }
            }
		}
		
		/*
		* Busca un Departamento en la BD por su ID
		* Si existe, lo devuelve como array asociativo
		* Si no, devuelve null
		*
		* $codDepartamento: ID del Departamento a buscar
		*/
		public static function getDepartamento($codDepartamento){
			
			$sql = <<< EOQ
            SELECT * FROM Departamento
            WHERE codDepartamento="$codDepartamento"
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
		* Busca un Departamento en la BD para modificar sus datos
		* Si se modifica, devuelve true
		* En caso contrario, devuelve false
		*
		* $codDepartamento: ID del Departamento a modificar
		* $descDepartamento: Campo del Departamento a modificar (estos Departamentos solo modifican 1 campo)
		*/
		public static function modificarDepartamento($codDepartamento, $descDepartamento){
			
			$sql = <<< EOQ
            UPDATE Departamento
			SET descDepartamento="$descDepartamento"
            WHERE codDepartamento="$codDepartamento"
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
		* Busca un Departamento en la BD y lo elimina
		* Si lo borra, devuelve true
		* En caso contrario, devuelve false
		*
		* $codDepartamento: ID del Departamento a borrar
		*/
		public static function borrarDepartamento($codDepartamento){
			$sql = <<< EOQ
            DELETE FROM Departamento
            WHERE codDepartamento="$codDepartamento"
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
		* Registra un nuevo Departamento en la BD
		* Si lo consigue, devuelve true
		* En caso contrario, devuelve false
		*
		* $codDepartamento: ID del nuevo Departamento
		* $descDepartamento: Descripción del nuevo Departamento
		*/
		public static function insertarDepartamento($codDepartamento, $descDepartamento){
			$sql = <<< EOQ
            INSERT INTO Departamento (CodDepartamento, DescDepartamento)
            VALUES ("$codDepartamento", "$descDepartamento")
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
	}
?>