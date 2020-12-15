<?php 
	require_once "../clases/conexion.php";
	require_once "../clases/crud.php";
	$obj= new crud();

	$datos=array(
		$_POST['nombre1'],
		$_POST['paterno1'],
		$_POST['materno1'],
		$_POST['telefono1'],
		$_POST['email1'],
		$_POST['id_categoria1'],
		$_POST['idjuego']
	);

	echo $obj->actualizar($datos);
	

 ?>