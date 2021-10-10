<?php

require_once('ClientsCrud.php');
 
$crud= new ClientsCrud();
$client= new ClientsModel();
 
	if (isset($_REQUEST['Data']['id'])) {
		if ($_REQUEST['Data']['id']=='') {
			$client->setName($_REQUEST['Data']['name']);
			$client->setCode($_REQUEST['Data']['code']);
			$client->setPicture($_REQUEST['Data']['picture']);
			$client->setCity($_REQUEST['Data']['city']);
			
			$crud->insertar($client);
		}
	
	}elseif($_REQUEST['Data']=='CargarCities'){
		$info = $crud->mostrarCities();
	}elseif($_REQUEST['Data']=='ListClient'){
		$info = $crud->mostrar();
	}elseif($_REQUEST['Data']=='obtenerClient'){
		$id=$_REQUEST['id'];
		$info = $crud->obtenerClient($id);
	}elseif($_REQUEST['Data']=='updatedClient'){
		$client=$_REQUEST['info'];
		$info = $crud->actualizar($client);
	}elseif($_REQUEST['Data']=='eliminarClient'){
		$id=$_REQUEST['id'];
		$info = $crud->eliminar($id);
	}

?>