<?php 
  require("ConexionBD.php");

  class ClientsModel
{
        private $id;
		private $name;
		private $picture;
		private $city;
 
		function __construct(){}
 
		public function getName(){
		return $this->name;
		}
 
		public function setName($name){
			$this->name = $name;
		}
 
		public function getPicture(){
			return $this->picture;
		}
 
		public function setPicture($picture){
			$this->picture = $picture;
		}
 
        public function getCode(){
        return $this->code;
        }

        public function setCode($code){
            $this->code = $code;
        }

		public function getCity(){
		return $this->city;
		}
 
		public function setCity($city){
			$this->city = $city;
		}
		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		public function getIdCitie(){
			return $this->getIdCitie;
		}
 
		public function setIdCitie($idCitie){
			$this->idCitie = $idCitie;
		}

		public function getNameCitie(){
			return $this->nameCitie;
			}
	 
		public function setNameCitie($nameCitie){
			$this->nameCitie = $nameCitie;
		}
  }

?>