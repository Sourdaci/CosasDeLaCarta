<?php
	/*
	*
	* Plato.php
	*
	*/
	
	require_once("PlatoPDO.php");
	
	class Plato{
		
		protected $cod; // Autonumerico en BD
		protected $nombre; // String
		protected $temporadas; // Array de Boolean
		protected $alergenos; // Array de Boolean
		
		public function __construct(
			$cod, $nombre, 
			$esPrimavera, $esVerano, $esOtono, $esInvierno, 
			$contGluten, $contCrustaceo, $contHuevo, $contPescado,
			$contCacahuete, $contSoja, $contLacteos, $contCascara, 
			$contApio, $contMostaza, $contSesamo, $contSulfitos, 
			$contAltramuces, $contMoluscos
		){
			$this->cod = $cod;
			$this->nombre = $nombre;
			
			$this->temporadas = Array();
			$this->temporadas["Primavera"] = $esPrimavera;
			$this->temporadas["Verano"] = $esVerano;
			$this->temporadas["Otono"] = $esOtono;
			$this->temporadas["Invierno"] = $esInvierno;
			
			$this->alergenos = Array();
			$this->alergenos["Gluten"] = $contGluten;
			$this->alergenos["Crustaceo"] = $contCrustaceo;
			$this->alergenos["Huevo"] = $contHuevo;
			$this->alergenos["Pescado"] = $contPescado;
			$this->alergenos["Cacahuete"] = $contCacahuete;
			$this->alergenos["Soja"] = $contSoja;
			$this->alergenos["Lacteos"] = $contLacteos;
			$this->alergenos["Cascara"] = $contCascara;
			$this->alergenos["Apio"] = $contApio;
			$this->alergenos["Mostaza"] = $contMostaza;
			$this->alergenos["Sesamo"] = $contSesamo;
			$this->alergenos["Sulfitos"] = $contSulfitos;
			$this->alergenos["Altramuces"] = $contAltramuces;
			$this->alergenos["Moluscos"] = $contMoluscos;
		}
		
		// Devuelve el cod del Plato
		public function getCod(){
			return $this->cod;
		}
		
		// Devuelve el nombre del Plato
		public function getNombre(){
			return $this->nombre;
		}
		
		/*
		* SECCION TEMPORADA
		*/
		public function esDePrimavera(){
			return $this->temporadas["Primavera"];
		}
		
		public function esDeVerano(){
			return $this->temporadas["Verano"];
		}
		
		public function esDeOtono(){
			return $this->temporadas["Otono"];
		}
		
		public function esDeInvierno(){
			return $this->temporadas["Invierno"];
		}
		
		/*
		* SECCION ALERGIAS
		*/
		public function tieneGluten(){
			return $this->alergenos["Gluten"];
		}
		
		public function tieneCrustaceo(){
			return $this->alergenos["Crustaceo"];
		}
		
		public function tieneHuevo(){
			return $this->alergenos["Huevo"];
		}
		
		public function tienePescado(){
			return $this->alergenos["Pescado"];
		}
		
		public function tieneCacahuete(){
			return $this->alergenos["Cacahuete"];
		}
		
		public function tieneSoja(){
			return $this->alergenos["Soja"];
		}
		
		public function tieneLacteos(){
			return $this->alergenos["Lacteos"];
		}
		
		public function tieneCascara(){
			return $this->alergenos["Cascara"];
		}
		
		public function tieneApio(){
			return $this->alergenos["Apio"];
		}
		
		public function tieneMostaza(){
			return $this->alergenos["Mostaza"];
		}
		
		public function tieneSesamo(){
			return $this->alergenos["Sesamo"];
		}
		
		public function tieneSulfitos(){
			return $this->alergenos["Sulfitos"];
		}
		
		public function tieneAltramuces(){
			return $this->alergenos["Altramuces"];
		}
		
		public function tieneMoluscos(){
			return $this->alergenos["Moluscos"];
		}
		
		public function getPlatoComoArray(){
			$datos = Array();
			$datos['cod'] = $this->cod;
			$datos['nombre'] = $this->nombre;
			$datos['season'] = $this->temporadas;
			$datos['alergias'] = $this->alergenos;
			return $datos;
		}
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve el número de Platos coincidentes.
		* En caso de error, se devuelve -1
		*
		* $desc: String a comprobar en el campo nombre de la BD
		*/
		public static function contarPlatosPorDesc($desc){
			return PlatoPDO::contarPlatosPorDesc($desc);
		}
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve el número de Platos coincidentes.
		* En caso de error, se devuelve -1
		*
		* $desc: String a comprobar en el campo nombre de la BD
		*/
		public static function contarPlatosPorDescAdmin($desc){
			return PlatoPDO::contarPlatosPorDescAdmin($desc);
		}
		
		/*
		* Busca en la BD todos los Platos cuya descripción contiene la que se pasa por parámetro
		* Devuelve el número de Platos coincidentes.
		* En caso de error, se devuelve -1
		*
		* $desc: String a comprobar en el campo nombre de la BD
		*/
		public static function contarPlatosTemporadaPorDesc($desc){
			return PlatoPDO::contarPlatosTemporadaPorDesc($desc);
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
			$listaRecibida = PlatoPDO::getPlatosPorDesc($desc, $numeroSaltar, $numeroContar);
			$objetosPlato = Array();
			if($listaRecibida != null){
				foreach($listaRecibida AS $entrada){
					$objetosPlato[] = new Plato($entrada['cod'], $entrada['nombre'], 
						$entrada['Primavera'], $entrada['Verano'], $entrada['Otono'], $entrada['Invierno'], 
						$entrada['Gluten'], $entrada['Crustaceo'], $entrada['Huevo'], $entrada['Pescado'], 
						$entrada['Cacahuete'], $entrada['Soja'], $entrada['Lacteos'], $entrada['Cascara'], 
						$entrada['Apio'], $entrada['Mostaza'], $entrada['Sesamo'], $entrada['Sulfitos'], 
						$entrada['Altramuces'], $entrada['Moluscos']);
				}
			}else{
				$objetosPlato = null;
			}
			return $objetosPlato;
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
			$listaRecibida = PlatoPDO::getPlatosPorDescAdmin($desc, $numeroSaltar, $numeroContar);
			$objetosPlato = Array();
			if($listaRecibida != null){
				foreach($listaRecibida AS $entrada){
					$objetosPlato[] = new Plato($entrada['cod'], $entrada['nombre'], 
						$entrada['Primavera'], $entrada['Verano'], $entrada['Otono'], $entrada['Invierno'], 
						$entrada['Gluten'], $entrada['Crustaceo'], $entrada['Huevo'], $entrada['Pescado'], 
						$entrada['Cacahuete'], $entrada['Soja'], $entrada['Lacteos'], $entrada['Cascara'], 
						$entrada['Apio'], $entrada['Mostaza'], $entrada['Sesamo'], $entrada['Sulfitos'], 
						$entrada['Altramuces'], $entrada['Moluscos']);
				}
			}else{
				$objetosPlato = null;
			}
			return $objetosPlato;
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
			$listaRecibida = PlatoPDO::getPlatosTemporadaPorDesc($desc, $numeroSaltar, $numeroContar);
			if($listaRecibida != null){
				$objetosPlato = Array();
				foreach($listaRecibida AS $entrada){
					$objetosPlato[] = new Plato($entrada['cod'], $entrada['nombre'], 
						$entrada['Primavera'], $entrada['Verano'], $entrada['Otono'], $entrada['Invierno'], 
						$entrada['Gluten'], $entrada['Crustaceo'], $entrada['Huevo'], $entrada['Pescado'], 
						$entrada['Cacahuete'], $entrada['Soja'], $entrada['Lacteos'], $entrada['Cascara'], 
						$entrada['Apio'], $entrada['Mostaza'], $entrada['Sesamo'], $entrada['Sulfitos'], 
						$entrada['Altramuces'], $entrada['Moluscos']);
				}
				return $objetosPlato;
			}else{
				return null;
			}
		}
		
		/*
		* Busca un Plato en la BD por su ID
		* Si existe, lo devuelve como array asociativo
		* Si no, devuelve null
		*
		* $id: ID del Plato a buscar
		*/
		public static function getPlato($cod){
			return PlatoPDO::getPlato($cod);
		}
		
		/*
		* Busca un Plato en la BD para modificar sus datos
		* Si se modifica, devuelve true
		* En caso contrario, devuelve false
		*
		* $id: ID del Plato a modificar
		* $nombre: Campo del Plato a modificar (estos Platos solo modifican 1 campo)
		*/
		public static function modificarPlato($cod, $nombre, 
				$esPrimavera, $esVerano, $esOtono, $esInvierno, 
				$contGluten, $contCrustaceo, $contHuevo, $contPescado,
				$contCacahuete, $contSoja, $contLacteos, $contCascara, 
				$contApio, $contMostaza, $contSesamo, $contSulfitos, 
				$contAltramuces, $contMoluscos){
			return PlatoPDO::modificarPlato($cod, $nombre, 
				$esPrimavera, $esVerano, $esOtono, $esInvierno, 
				$contGluten, $contCrustaceo, $contHuevo, $contPescado,
				$contCacahuete, $contSoja, $contLacteos, $contCascara, 
				$contApio, $contMostaza, $contSesamo, $contSulfitos, 
				$contAltramuces, $contMoluscos);
		}
		
		/*
		* Busca un Plato en la BD y lo elimina
		* Si lo borra, devuelve true
		* En caso contrario, devuelve false
		*
		* $id: ID del Plato a borrar
		*/
		public static function borrarPlato($cod){
			return PlatoPDO::borrarPlato($cod);
		}
		
		/*
		* Registra un nuevo Plato en la BD
		* Si lo consigue, devuelve true
		* En caso contrario, devuelve false
		*/
		public static function insertarPlato(
			$nombre, 
			$esPrimavera, $esVerano, $esOtono, $esInvierno, 
			$contGluten, $contCrustaceo, $contHuevo, $contPescado,
			$contCacahuete, $contSoja, $contLacteos, $contCascara, 
			$contApio, $contMostaza, $contSesamo, $contSulfitos, 
			$contAltramuces, $contMoluscos
		){
			return PlatoPDO::insertarPlato(
				$nombre, 
				$esPrimavera, $esVerano, $esOtono, $esInvierno, 
				$contGluten, $contCrustaceo, $contHuevo, $contPescado,
				$contCacahuete, $contSoja, $contLacteos, $contCascara, 
				$contApio, $contMostaza, $contSesamo, $contSulfitos, 
				$contAltramuces, $contMoluscos
			);
		}
		
		/*
		* Busca un Plato en la BD y lo oculta al usuario de la web
		* Si lo oculta, devuelve true
		* En caso contrario, devuelve false
		*
		* $codPlato: ID del Plato a ocultar
		*/
		public static function ocultarPlato($codPlato){
			return PlatoPDO::ocultarPlato($codPlato);
		}
		
		/*
		* Busca un Plato en la BD y lo oculta al usuario de la web
		* Si lo oculta, devuelve true
		* En caso contrario, devuelve false
		*
		* $codPlato: ID del Plato a ocultar
		*/
		public static function mostrarPlato($codPlato){
			return PlatoPDO::mostrarPlato($codPlato);
		}
	}
?>