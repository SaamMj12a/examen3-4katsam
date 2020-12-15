<?php 
require_once "header.php";
require_once "menu.php";
?>
<?php
  $mysqli = new mysqli('localhost',
                       'root', 
                       '', 
                       'katsam');
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Tablas Contactos
					</div>
					<div class="card-body">
						<div id="tablaDatatable"></div>
					</div>
					<div class="card-footer text-muted">
						By: Samara Mejía Maya - Katia Castañeda Mendez Grupo: 7S2
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal agregar-->
	<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Agregar Contacto </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formulario">
          <label> Nombre </label>
          <input type="text" name="nombre" id="nombre" class="form-control input-sm" required="">
          <label> Apellido Paterno </label>
          <input type="text" name="paterno" id="paterno" class="form-control input-sm" required="">
          <label> Apellido Materno </label>
          <input type="text" name="materno" id="materno" class="form-control input-sm" required="">
          <label> Telefono </label>
          <input type="text" name="telefono" id="telefono" class="form-control input-sm" required="">
          <label> E-mail </label>
          <input type="text" name="email" id="email" class="form-control input-sm" required="">
          <label>Categoria</label>
          <select name="id_categoria" id="id_categoria" class="form-control">
            <option disabled selected>Escoje categoria</option>
            <?php
            $query = $mysqli -> query ("SELECT id_categoria, Categoria FROM t_categorias");
            while ($valores = mysqli_fetch_array($query)) {
              echo '<option value="'.$valores[id_categoria].'">'.$valores[Categoria].'</option>';
            }
            ?>
          </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" >
          <span class="fas fa-times-circle"></span> Cerrar
        </button>
        <button type="button" id="btnnuevo" class="btn btn-primary">
          <span class="fas fa-save"></span> Guardar
        </button>
      </div>
    </div>
  </div>
</div>


	<!-- Modal actualizar -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar datos de contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmnuevoU">
          <input type="text" hidden="" id="idjuego" name="idjuego">
          <label> Nombre </label>
          <input type="text" name="nombre1" id="nombre1" class="form-control input-sm">
          <label> Apellido Paterno </label>
          <input type="text" name="paterno1" id="paterno1" class="form-control input-sm">
          <label> Apellido Materno </label>
          <input type="text" name="materno1" id="materno1" class="form-control input-sm">
          <label> Telefono </label>
          <input type="text" name="telefono1" id="telefono1" class="form-control input-sm">
          <label> E-mail </label>
          <input type="text" name="email1" id="email1" class="form-control input-sm">
          <label> Contacto </label>
          <select name="id_categoria1" id="id_categoria1" class="form-control">
            <?php
            $query = $mysqli -> query ("SELECT id_categoria, Categoria FROM t_categorias");
            while ($valores = mysqli_fetch_array($query)) {
              echo '<option value="'.$valores[id_categoria].'">'.$valores[Categoria].'</option>';
            }
            ?>
          </select>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          <span class="fas fa-times-circle"></span> Cerrar
        </button>
        <button type="button" class="btn btn-warning" id="btnActualizar">
          <span class="fas fa-edit"></span> Actualizar
        </button>
      </div>
    </div>
  </div>
<?php
require_once "footer.php"; 
?>