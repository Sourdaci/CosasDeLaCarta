<?php

	/*
	*
	* UsuarioPDO.php
	*
	*/

	require_once("UsuarioDB.php");
	require_once("DBPDO.php");
	
    class UsuarioPDO implements UsuarioDB{

		// Recibe 2 String (CodUsuario y Password)
		// Los busca en la BD llamando a BDPDO.php
		// Si existen y sólo hay 1 resultado, devuelve un Array Asociativo con todos los datos
		// En cualquier otro caso, devuelve null
        public static function validarUsuario($usuario, $pass){

            $sql = <<< EOQ
            SELECT * FROM Usuario 
            WHERE CodUsuario='$usuario' AND 
            Password=sha2('$pass', 256)
EOQ;

            $resultado = DBPDO::ejecutarConsulta($sql);

            if($resultado == null || $resultado == false){
                return null;
            }else{
                if($resultado->rowCount() == 1){
					// Array asociativo con los datos de la tupla de resultados
                    return $resultado->fetch(PDO::FETCH_ASSOC);
                }else{
                    return null;
                }
            }
        }
    }
?>