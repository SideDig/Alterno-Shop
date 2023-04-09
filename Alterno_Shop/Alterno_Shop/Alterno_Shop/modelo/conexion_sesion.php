<?php
session_start();
include("../config/conexion.php");
if(isset($_SESSION['rol']))
{  
  switch($_SESSION['rol'])
  {
    case 1:
      header("location: ../index.php");
    break;
    case 2:
      header("location: ../interfaz_admin.php");
    break;
  }
}
if(isset($_POST['iniciar']))
{
  $usuario=$_POST['txtusuario'];
  $contra=$_POST['txtcontraseña'];

  $db = new Database();
  $sql = $db->conectar()->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND contraseña = :contra');
  $sql->execute(['usuario' => $usuario, 'contra' => $contra]);
  $row = $sql->fetch(PDO::FETCH_NUM);

  if(!isset($_SESSION['nombredelusuario']))
  {
    $_SESSION['nombredelusuario']=$usuario;
    if($row == true)
    {
      $rol = $row[4];
      $_SESSION['rol']=$rol; 
      switch($_SESSION['rol'])
      {
        case 1:
          header("location: ../index.php");
        break;
        case 2:
          header("location: ../interfaz_admin.php");
        break;
        default:
      }
    }
    else if($row == false)
    {
      echo "<script>alert('usuario no existe');window.location= '../iniciar_sesion.php' </script>";
      session_destroy();
    }
  }
}
?>