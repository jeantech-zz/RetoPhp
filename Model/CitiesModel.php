<?php 
  
  class CitiesModel
{
        private $id;
		private $name;
 
		function __construct(){}

		public function getId(){
			return $this->getId;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		public function getName(){
			return $this->name;
			}
	 
		public function setName($name){
			$this->name = $name;
		}
  }

?>