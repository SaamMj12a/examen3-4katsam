<?php 
require_once "clases/conexion.php";
$con = new conectar();
$conexion = $con->conexion();
$sql = "SELECT t_agenda.id_agenda, t_agenda.Nombre, t_agenda.paterno, t_agenda.materno, t_agenda.telefono, t_agenda.email, t_agenda.id_categoria, t_categorias.Categoria FROM t_agenda, t_categorias where t_categorias.id_categoria=t_agenda.id_categoria";
$result = mysqli_query($conexion, $sql); 
?>
<button class="bt btn-danger">
	<i class="fas fa-id-card fa-7x"></i>
</button>
<h2>Agenda</h2>
<br>
<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
	<span class="fas fa-user-plus"></span> Agregar nuevo
</button>
<hr>
<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #f9afd5;color: white; font-weight: bold;">
			<tr>
				<td align="center">Id agenda</td>
				<td align="center">Nombre</td>
				<td align="center">Apellido Paterno</td>
				<td align="center">Apellido Materno</td>
				<td align="center">Telefono</td>
				<td align="center">E-mail</td>
				<td align="center">Categoria</td>
				<td align="center">Editar</td>
				<td align="center">Eliminar</td>
			</tr>
		</thead>
		<tfoot style="background-color: #ccc;color: white; font-weight: bold;">
			<tr>
				<td align="center">Id agenda</td>
				<td align="center">Nombre</td>
				<td align="center">Apellido Paterno</td>
				<td align="center">Apellido Materno</td>
				<td align="center">Telefono</td>
				<td align="center">E-mail</td>
				<td align="center">Categoria</td>
				<td align="center">Editar</td>
				<td align="center">Eliminar</td>
			</tr>
		</tfoot>
		<tbody >
			<?php while ($mostrar=mysqli_fetch_row($result)) {?>
				<tr>
					<td align="center"><?php echo $mostrar[0] ?></td>
					<td align="center"><?php echo $mostrar[1] ?></td>
					<td align="center"><?php echo $mostrar[2] ?></td>
					<td align="center"><?php echo $mostrar[3] ?></td>
					<td align="center"><?php echo $mostrar[4] ?></td>
					<td align="center"><?php echo $mostrar[5] ?></td>
					<td align="center"><?php echo $mostrar[7] ?></td>
					<td style="text-align: center;">
						<span class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalEditar" onclick="agregaFrmActualizar('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-edit"></span>
						</span>
					</td>
					<td style="text-align: center;">
						<span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
							<span class="fa fa-trash"></span>
						</span>
					</td>
				</tr>
			<?php }?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>