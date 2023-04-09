<?php

include("../config/conexion.php");

if(isset($_POST['mandar_productos']))
{
  $nombre_productos=$_POST['nombre_productos'];
  $descripcion_productos=$_POST['descripcion_productos'];
  $precio_productos=$_POST['precio_productos'];
  $nombreimg=$_FILES['imagen']['name'];//contiene el nombre
  $archivo=$_FILES['imagen']['tmp_name'];//contiene el archivo
  $id_categoria=$_POST['categoria'];
  $ruta="images";
  echo "<br>".$id_productos."<br>".$nombre_productos."<br>".$descripcion_productos."<br>".$precio_productos."<br>".$nombreimg."<br>".$archivo."<br>".$id_categoria;

  $ruta=$ruta."/".$nombreimg;//images/nombre.jpg

  move_uploaded_file($archivo,$ruta);
  $consulta = "INSERT INTO productos(nombre_producto, descripcion_producto, precio_producto, imagen_producto, id_categorias) VALUES ('$nombre_productos','$descripcion_productos','$precio_productos','$ruta','$id_categoria')";

  $query=mysqli_query($conex,$consulta);

  if($query)
  {
      echo"eso patronaaaaa";
      header("location: ../interfaz_admin.php");
     
  }
  else
  {
      echo"pues no mi programadora";
  }
}


?>