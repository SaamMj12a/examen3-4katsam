<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['categoria'],
		$_POST['descripcion']
				);

	echo $obj->agregarc($datos);
	

 ?>