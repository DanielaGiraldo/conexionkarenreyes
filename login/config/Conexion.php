<?php

//Conexion a la base de datos (PDO)
class Conexion {

	public static function conectar(){
		try{

			$cn = new PDO("mysql:host=localhost;dbname=scripwebDB", "root", "");

			//echo "Conectado";
			return $cn;

		} catch (Exception $ex) {
			die($ex->getMessage());
		}

	}
}
//Conexion::conectar();
