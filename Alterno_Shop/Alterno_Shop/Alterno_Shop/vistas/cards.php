<section class="contenedor">
  <?php foreach($resultado as $row)
  { 
    $img = $row['imagen_producto'];  
    $nombre = $row['nombre_producto'];  
    $descripcion = $row['descripcion_producto'];  
    $precio = $row['precio_producto'];
    $categoria = $row['id_categorias'];
    $id = $row['id'];
  ?>
            
  <div class="card">
    <img src="<?php echo $img?>">
    <p><?php echo $nombre ?><br>$<?php echo $precio ?> MXN</p>
    <?php echo "<a class='openBtn' data-id='$id'>Comprar</a>"?>
    <?php //echo "<a  class='btn btn-success openBtn' type='submit' data-id='$id' >Comprar</a>"?>
  </div>
  <?php } ?>
</section>

<script>
  $('.openBtn').on('click',function(){
  var valor = $(this).data("id");
  $('.modal-body').load('modelo/getContent.php?id='+valor,function(){
  $('#myModal').modal({show:true});
  });
  });
</script>
</section>