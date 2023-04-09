<?php
include("modelo/sesion_activa.php");

if($_SESSION['rol'] !=2 )
{
  header("location: index.php");
}
if(isset($_POST['cerrar']))
{
  session_destroy();
  header("location: index.php");
}

require 'config/conexion.php';
$db = new Database();
$con = $db->conectar();

$sql=  $con->prepare("SELECT p.id, p.nombre_producto, p.descripcion_producto, p.imagen_producto, c.categoria, p.precio_producto FROM productos p, categorias c WHERE p.id_categorias=c.id ORDER BY p.id");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Salsa">
    <LINK rel=StyleSheet href="styles/interfaz_admin.css">
    
    <title>Admin</title>

</head>
<body>
  <header> 
    <div class="registro_inicio_sesion">
      <a href="index.php"><button id="principal" name="cerrar">Home</button></a>
    </div>
    <div class="title_home">
      <img src="img/logo_home.jpg" width="90px" height="100px">
      Alterno Shop
    </div>
  </header>
  <hr>
  <div class="container mt-3">
    <h3>Insertar productos</h3> 
    <br> 
    <a href="formadmin.php">
    <button class="boton_ingresar"> Insertar
    </button></a>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>id</th>
          <th>Imagen</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th>Categoria</th>
          <th>Editar</th>
          <th>Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($resultado as $row)
        { 
          $img = $row['imagen_producto'];  
          $nombre = $row['nombre_producto'];  
          $descripcion = $row['descripcion_producto'];  
          $precio = $row['precio_producto'];
          $categoria = $row['categoria'];
          $id = $row['id'];
        ?>
        <tr>
          <td><?php echo $id ?></td>
          <td class="imagen"><img src="<?php echo $img ?>" height="50px"></td>
          <td><?php echo $nombre ?></td>
          <td><?php echo $descripcion ?></td>
          <td>$<?php echo $precio ?>MXN</td>
          <td><?php echo $categoria ?></td>
          <td>
          <a href="modelo/modificar.php?id=<?php echo $id ?>"> <button type="submit"  class="btn btn-warning">Editar</button></a>
          </td>
          <td>
          <?php echo  "<a href='modelo/eliminar_producto.php?id=$id' ><button type='button' class='btn btn-danger'>Eliminar</button></a>"?>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
</body>
</html>