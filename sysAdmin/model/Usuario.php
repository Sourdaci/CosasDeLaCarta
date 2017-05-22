<?php

	/*
	*
	* Usuario.php
	*
	*/

	include_once("UsuarioPDO.php");
	
	class Usuario{

		// Los campos de la BD tienen la primera letra mayúscula
        protected $codUsuario = ""; // CodUsuario, String
		private $password = ""; // Password, String
        protected $descUsuario = ""; // DescUsuario, String
        protected $perfil = ""; // Perfil, String
		protected $accesos = 0; // Accesos, Integer
		protected $ultimoAcceso = null; // UltimoAcceso, DateTime

        public function __construct($cod, $pa, $desc, $ro, $acc, $ultAcc){
            $this->codUsuario = $cod;
			$this->password = $pa;
            $this->descUsuario = $desc;
            $this->perfil = $ro;
			$this->accesos = $acc;
			$this->ultimoAcceso = $ultAcc;
        }

		// Devuelve un String con el Codigo de Usuario
        public function getCodUsuario(){
            return $this->codUsuario;
        }
		
		// Devuelve un String con Hash del Password
		protected function getPassword(){
			return $this->password;
		}

		// Devuelve un String con la Descripción de Usuario
        public function getDescUsuario(){
            return $this->descUsuario;
        }
		
		// Devuelve un String con el Perfil de Usuario
		public function getPerfil(){
			return $this->perfil;
		}
		
		// Devuelve un Integer con el Contador de Accesos de Usuario
		public function getAccesos(){
			return $this->accesos;
		}
		
		// Devuelve un DateTime fechando el Ultimo Acceso del Usuario
		public function getUltimoAcceso(){
			return $this->ultimoAcceso;
		}
		
		// Recibe el usuario y el password a validar
		// Consulta en la BD si existen a través del controlador de BD
		// Si el controlador indica que existe, se devuelve el objeto usuario asociado
		// En cualquier otro caso, devuelve null
		public static function validarUsuario($usr, $pass){
			$recibido = UsuarioPDO::validarUsuario($usr, $pass);
			if($recibido != null){
				return new Usuario($recibido['CodUsuario'], $recibido['Password'], $recibido['DescUsuario'], $recibido['Perfil'], $recibido['Accesos'], $recibido['UltimoAcceso']);
			}else{
				return null;
			}
		}
    }
?>