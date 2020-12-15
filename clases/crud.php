 <?php 
	class crud {
		public function agregar($datos) {
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT INTO t_agenda (Nombre, paterno, materno, telefono, email, id_categoria)
									values ('$datos[0]',
											'$datos[1]',
											'$datos[2]',
											'$datos[3]',
											'$datos[4]',
											'$datos[5]'
											)";
			return mysqli_query($conexion, $sql);
		}
		public function obtenDatos($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_agenda,
							Nombre,
							paterno,
							materno,
							telefono,
							email,
							id_categoria
					from t_agenda
					where id_agenda='$idjuego'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_agenda' => $ver[0],
				'Nombre' => $ver[1],
				'paterno' => $ver[2],
				'materno' => $ver[3],
				'telefono' => $ver[4],
				'email' => $ver[5],
				'id_categoria' => $ver[6]
				);
			return $datos;
		}
		public function actualizar($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_agenda set Nombre='$datos[0]',
										paterno='$datos[1]',
										materno='$datos[2]',
										telefono='$datos[3]',
										email='$datos[4]',
										id_categoria='$datos[5]'
						where id_agenda='$datos[6]'";
			return mysqli_query($conexion,$sql);
		}

		public function eliminar($idjuego){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_agenda where id_agenda='$idjuego'";
			return mysqli_query($conexion,$sql);
		}

		public function agregarc($datos) {
			$obj= new conectar();
			$conexion=$obj->conexion();
			$sql="INSERT INTO t_categorias (Categoria, Descripcion)
									values ('$datos[0]',
											'$datos[1]')";
			return mysqli_query($conexion, $sql);
		}

		public function obtenDatosc($idcategoria){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="SELECT id_categoria,
							Categoria,
							Descripcion
					from t_categorias
					where id_categoria='$idcategoria'";
			$result=mysqli_query($conexion,$sql);
			$ver=mysqli_fetch_row($result);

			$datos=array(
				'id_categoria' => $ver[0],
				'Categoria' => $ver[1],
				'Descripcion' => $ver[2]
				);
			return $datos;
		}
		public function actualizarc($datos){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="UPDATE t_categorias set Categoria='$datos[0]',
										Descripcion='$datos[1]'
						where id_categoria='$datos[5]'";
			return mysqli_query($conexion,$sql);
		}

		public function eliminarc($idcategoria){
			$obj= new conectar();
			$conexion=$obj->conexion();

			$sql="DELETE from t_categorias where id_categoria='$idcategoria'";
			return mysqli_query($conexion,$sql);
		}

	}

 ?>