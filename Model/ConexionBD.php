<?php

class ConexionBD
{
	private static $conexion=NULL;
	private function __construct (){}
    
	public static function conectar(){

		$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
		self::$conexion= new PDO('mysql:host=127.0.0.1;dbname=clients','root','',$pdo_options);
		return self::$conexion;

	} 
}
?>