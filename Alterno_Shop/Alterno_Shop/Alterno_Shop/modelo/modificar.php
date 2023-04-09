<?php
include("../config/conexion.php");

$img = "";  
$nombre = "";  
$descripcion = "";  
$precio = "";
$categoria = "";
$id = "";

$errorMessage = "";
$succesMessage = "";
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    if(!isset($_GET["id"]))
    {
        header("location: ../interfaz_admin.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM productos WHERE id=$id";
    $result = $conex->query($sql);
    $row = $result->fetch_assoc();

    if(!$row)
    {
        header("location: ../interfaz_admin.php");
        exit;
    }
    $img = $row['imagen_producto'];  
    $nombre = $row['nombre_producto'];  
    $descripcion = $row['descripcion_producto'];  
    $precio = $row['precio_producto'];
    $categoria = $row['id_categorias'];
    $id = $row['id'];
}

?>
<form enctype="multipart/form-data" class="formulario" method="post" action="proceso_modificar.php?id=<?php echo $id ?>">
    <input type="hidden" name="txtid" value="<?php echo $id ?>">

     <p>nombre_producto</p>   <input name="nombre_productos" type="text" id="nombre" value="<?php echo $row['nombre_producto'] ?>">
     <p>descripcion_producto</p>  <input  name="descripcion_productos" type="text" value="<?php echo $row['descripcion_producto'] ?>">
     <p>precio_producto</p>   <input name="precio_productos" type="number"id="precio" value="<?php echo $row['precio_producto'] ?>">
     <p>imagen_producto</p>  <img src="<?php echo $img ?>" height="80px"> <br><input name="imagen" type="file" id="imagen" value="<?php echo $row['imagen_producto'] ?>">
     <br>
     
     <br>
     <select name="categoria" value="<?php echo $row['categoria'] ?>">
        <option value="1">Home</option>
        <option value="2">Cosplay wigs</option>
        <option value="3">Lolita wigs</option>
        <option value="4">Accsesorios</option> 
     </select>
     <br>
     <br>
     <button class="btn btn-success" type="submit" name="actualizar">Actualizar</button>
</form>