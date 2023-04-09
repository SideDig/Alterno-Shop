<?php
    include("../config/conexion.php");
    $id = $_REQUEST['id'];
    $nombre=$_POST['nombre_productos'];
    $descripcion=$_POST['descripcion_productos'];
    $precio=$_POST['precio_productos'];
    $categoria=$_POST['categoria'];
    $nombreimg=$_FILES['imagen']['name'];//contiene el nombre
    $archivo=$_FILES['imagen']['tmp_name'];//contiene el archivo
    
    $ruta="images";

    $ruta=$ruta."/".$nombreimg;//images/nombre.jpg

    move_uploaded_file($archivo,$ruta);

    $sql = "UPDATE productos SET nombre_producto='$nombre', precio_producto='$precio', descripcion_producto='$descripcion', id_categorias='$categoria', imagen_producto='$ruta' WHERE id=$id";
    $result = $conex->query($sql);
    if($result)
    {
        header("Location: ../interfaz_admin.php");
    }
?>