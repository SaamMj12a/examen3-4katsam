<?php 
require_once "header.php";
require_once "menu.php";
?>
<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header">
            Tabla Categorias
          </div>
          <div class="card-body">
            <div id="tablacat"></div>
          </div>
          <div class="card-footer text-muted">
            By: Samara Mejía Maya - Katia Castañeda Mendez Grupo: 7S2
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Agregar Categoria </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="formulario">
            <label> Categoria </label>
            <input type="text" name="categoria" id="categoria" class="form-control input-sm" >
            <label> Descripción </label>
            <input type="text" name="descripcion" id="descripcion" class="form-control input-sm">
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

  <!-- Modal -->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmnuevoU">
            <input type="text" hidden="" id="idcategoria" name="idcategoria">
            <label> Categoria </label>
            <input type="text" name="categoria1" id="categoria1" class="form-control input-sm">
            <label> Descripcion </label>
            <input type="text" name="descripcion1" id="descripcion1" class="form-control input-sm">
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
require_once "footer1.php"; 
?>