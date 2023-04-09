<?php 
include("../config/conexion.php");

if(isset($_GET["id"]))
{
  $id = $_GET["id"];
  $consulta = "DELETE from productos WHERE id=$id";
  $conex->query($consulta);

  header("location: ../interfaz_admin.php");
}
exit;
?>