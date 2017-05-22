<?php
	/*
	*
	* Departamento.php
	*
	*/
	
	require_once("DepartamentoPDO.php");
	
	class Departamento{
		
		protected $codDepartamento; // String de 3 letras mayúsculas
		protected $descDepartamento; // String alfabético
		
		public function __construct($cod, $desc){
			$this->codDepartamento = $cod;
			$this->descDepartamento = $desc;
		}
		
		// Devuelve el ID del Departamento
		public function getCodDepartamento(){
			return $this->codDepartamento;
		}
		
		// Devuelve la descripción del Departamento
		public function getDescDepartamento(){
			return $this->descDepartamento;
		}
		
		/*
		* Busca en la BD todos los Departamentos cuya descripción contiene la que se pasa por parámetro
		* Devuelve el número de Departamentos coincidentes.
		* En caso de error, se devuelve -1
		*
		* $desc: String a comprobar en el campo DescDepartamento de la BD
		*/
		public static function contarDepartamentosPorDesc($desc){
			return DepartamentoPDO::contarDepartamentosPorDesc($desc);
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
			$listaRecibida = DepartamentoPDO::getDepartamentosPorDesc($desc, $numeroSaltar, $numeroContar);
			if($listaRecibida != null){
				$objetosDept = Array();
				foreach($listaRecibida AS $entrada){
					$objetosDept[] = new Departamento($entrada['CodDepartamento'], $entrada['DescDepartamento']);
				}
				return $objetosDept;
			}else{
				return null;
			}
		}
		
		/*
		* Convierte un Departamento en un array asociativo y lo devuelve
		* 
		* $dept: Departamento a convertir en array asociativo
		*/
		public static function getDepartamentoComoArray($dept){
			$arrayDept = Array();
			$arrayDept['CodDepartamento'] = $dept->getCodDepartamento();
			$arrayDept['DescDepartamento'] = $dept->getDescDepartamento();
			return $arrayDept;
		}
		
		/*
		* Busca un Departamento en la BD por su ID
		* Si existe, lo devuelve como array asociativo
		* Si no, devuelve null
		*
		* $codDepartamento: ID del Departamento a buscar
		*/
		public static function getDepartamento($codDepartamento){
			return DepartamentoPDO::getDepartamento($codDepartamento);
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
			return DepartamentoPDO::modificarDepartamento($codDepartamento, $descDepartamento);
		}
		
		/*
		* Busca un Departamento en la BD y lo elimina
		* Si lo borra, devuelve true
		* En caso contrario, devuelve false
		*
		* $codDepartamento: ID del Departamento a borrar
		*/
		public static function borrarDepartamento($codDepartamento){
			return DepartamentoPDO::borrarDepartamento($codDepartamento);
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
			return DepartamentoPDO::insertarDepartamento($codDepartamento, $descDepartamento);
		}
	}
?>