<?php
include("../config/conexion.php");

if(isset($_POST['ingresar_ref']))
{
  $producto = $_POST['txtproducto'];
  $reseña=$_POST['txtreseña'];
  $nombreimg=$_FILES['imagen']['name'];//contiene el nombre
  $archivo=$_FILES['imagen']['tmp_name'];//contiene el archivo
  $ruta="images";
  echo "<br>".$producto."<br>".$reseña."<br>".$nombreimg."<br>".$archivo;

  $ruta=$ruta."/".$nombreimg;//images/nombre.jpg

  move_uploaded_file($archivo,$ruta);
  $consulta = "INSERT INTO referencias(nombre, descripcion, imagen) VALUES ('$producto','$reseña','$ruta')";

  $query=mysqli_query($conex,$consulta);

  if($query)
  {
      echo"eso patronaaaaa";
      header("location: ../referencias.php");
  }
  else
  {
      echo"pues no mi programadora";
  }
}
?>