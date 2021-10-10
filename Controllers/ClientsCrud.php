<?php
require_once('../Model/ClientsModel.php');
require_once('../Model/ConexionBD.php');
require_once('../Model/CitiesModel.php');
 
	class ClientsCrud{
		public function __construct(){}

		public function insertar($clients){
			$db=ConexionBD::conectar();
			$insert=$db->prepare('INSERT INTO clients 
            values(NULL,:name,:code,:picture,:city)');
			$insert->bindValue('name',$clients->getName());
			$insert->bindValue('code',$clients->getCode());
			$insert->bindValue('picture',$clients->getPicture());
            $insert->bindValue('city',$clients->getCity());
			$insert->execute();

 
		}
 
		public function mostrar(){
			$db=ConexionBD::conectar();
			$listClients=[];
			$select=$db->query('SELECT c.id as id, c.name as name, c.code as code, c.picture as picture, ct.name as cityName
			 FROM clients as c, cities as ct
			 where c.city=ct.id');
 
			foreach($select->fetchAll() as $clients){
				$listClients[]=$clients;
			}

			$dataClient=(json_encode($listClients));

			echo '{"success":"1",  "Client":'.$dataClient.'}';
		}
 
		public function eliminar($id){
			$db=ConexionBD::conectar();
			$eliminar=$db->prepare('DELETE FROM clients WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		public function obtenerClient($id){
			$db=ConexionBD::conectar();
			$select=$db->prepare('SELECT * FROM clients WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$client=$select->fetch();
			$dataClient=(json_encode($client));
			echo '{"success":"1",  "Client":'.$dataClient.'}';

		}
 
		public function actualizar($clients){
			$db=ConexionBD::conectar();
			$arrayClient=json_encode($clients);
			$actualizar=$db->prepare('UPDATE clients SET name=:name, code=:code, picture=:picture, city=:city WHERE ID=:id');
			$actualizar->bindValue('id',$clients['id']);
			$actualizar->bindValue('name',$clients['name']);
			$actualizar->bindValue('code',$clients['code']);
			$actualizar->bindValue('picture',$clients['picture']);
            $actualizar->bindValue('city',$clients['city']);
			$actualizar->execute();
			echo '{"success":"1"}';
		}

		public function mostrarCities(){
			$db=ConexionBD::conectar();
			$listCities=[];
			$select=$db->query('SELECT * FROM cities');
 
			foreach($select->fetchAll() as $cities){
				$listCities[]=$cities;
			}

			$informacion=(json_encode($listCities));

			echo '{"success":"1",  "city":'.$informacion.'}';
		}
	}
?>