<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['categoria1'],
		$_POST['descripcion1']
		$_POST['idcategoria']
	);

	echo $obj->actualizarc($datos);
	

 ?>