</body>
</html>
<script type="text/Javascript">
  $(document).ready(function(){
    $('#btnnuevo').click(function(){
      datos=$('#formulario').serialize();

      $.ajax({
        type:"POST",
        data:datos,
        url:"procesos/agregar.php",
        success:function(r){
          if(r==1){
            $('#formulario')[0].reset();
            $('#tablaCrudLoad').load('tabla.php');
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
        url:"procesos/actualizar.php",
        success:function(r){
          if(r==1){
            $('#tablaCrudLoad').load('tabla.php');
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
    //primero agregamos el id de la sección donde se cargara el archivo
    $('#tablaDatatable').load('tabla.php')
  });
</script>

<script type="text/javascript">
  function agregaFrmActualizar(idjuego){
    $.ajax({
      type:"POST",
      data:"idjuego=" + idjuego,
      url:"procesos/obtenDatos.php",
      success:function(r){
        datos=jQuery.parseJSON(r);
        $('#idjuego').val(datos['id_agenda']);
        $('#nombre1').val(datos['Nombre']);
        $('#paterno1').val(datos['paterno']);
        $('#materno1').val(datos['materno']);
        $('#telefono1').val(datos['telefono']);
        $('#email1').val(datos['email']);
        $('#id_categoria1').val(datos['id_categoria']);
      }
    });
  }

  function eliminarDatos(idjuego){
    alertify.confirm('Eliminar Contacto', '¿Seguro de eliminar el contacto?', function(){ 

      $.ajax({
        type:"POST",
        data:"idjuego=" + idjuego,
        url:"procesos/eliminar.php",
        success:function(r){
          if(r==1){
            $('#tablaCrudLoad').load('tabla.php');
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