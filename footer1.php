</body>
</html>
<script type="text/Javascript">
  $(document).ready(function(){
    $('#btnnuevo').click(function(){
      datos=$('#formulario').serialize();

      $.ajax({
        type:"POST",
        data:datos,
        url:"procesos/agregarc.php",
        success:function(r){
          if(r==1){
            $('#formulario')[0].reset();
            $('#tablacat').load('tablacat.php');
            alertify.success("Agregado con exito ");
          }else{
            alertify.error("Fallo al agregar");
          }
        }
      });
    });
    $('#btnActualizar').click(function(){
      datos=$('#frmnuevoU').serialize();

      $.ajax({
        type:"POST",
        data:datos,
        url:"procesos/actualizarc.php",
        success:function(r){
          if(r==1){
            $('#tablacat').load('tablacat.php');
            alertify.success("Actualizado con exito ");
          }else{
            alertify.error("Fallo al actualizar");
          }
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    //funcion load de jquery
    //primero agregamos el id de la sección donde se cargaaara el archivo
    $('#tablacat').load('tablacat.php')
  });
</script>

<script type="text/javascript">
  function agregaFrmActualizar(idcategoria){
    $.ajax({
      type:"POST",
      data:"idcategoria=" + idcategoria,
      url:"procesos/obtenDatosc.php",
      success:function(r){
        datos=jQuery.parseJSON(r);
        $('#idcategoria').val(datos['id_categoria']);
        $('#categoria1').val(datos['Categoria']);
        $('#descripcion1').val(datos['Descripcion']);
      }
    });
  }

  function eliminarDatos(idcategoria){
    alertify.confirm('Eliminar Categoria', '¿Seguro de eliminar esta Categoria?', function(){ 

      $.ajax({
        type:"POST",
        data:"idcategoria=" + idcategoria,
        url:"procesos/eliminarc.php",
        success:function(r){
          if(r==1){
            $('#tablacat').load('tablacat.php');
            alertify.success("Eliminado con exito !");
          }else{
            alertify.error("No se pudo eliminar...");
          }
        }
      });

    }
    , function(){

    });
  }
</script>