<?php 
	class conectar{
		public function conexion(){
			$servidor = "localhost";
			$usuario = "root";
			$password = "";
			$baseDatos = "katsam";//cambiar base de datos agendasamkat
			$conexion = mysqli_connect($servidor, 
										$usuario, 
										$password, 
										$baseDatos);
			return $conexion;
		}
	}
?>