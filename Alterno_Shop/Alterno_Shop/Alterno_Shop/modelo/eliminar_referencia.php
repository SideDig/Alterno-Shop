<?php 
include("../config/conexion.php");

if(isset($_GET["id"]))
{
  $id = $_GET["id"];
  $consulta = "DELETE from referencias WHERE id =$id";
  $conex->query($consulta);

  header("location: ../referencias.php");
}
exit;
?>