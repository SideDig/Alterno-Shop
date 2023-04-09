<?php
require 'config/conexion.php';
$db = new Database();
$con = $db->conectar();

$sql=  $con->prepare("SELECT id, nombre, descripcion, imagen FROM referencias WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

include("modelo/sesion_activa.php");
?>

<!DOCTYPE html>
  <head>
    <title>Referencias</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Salsa">
    <link rel="stylesheet" href="styles/styles.css">   
    <style>
      .contenedor .referencia_card
      {
        float: left;
        border: 1px solid rgb(0, 0, 0);
        width: 270px;
        height: 400px;
        border-radius: 8px;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        margin: 20px;
        text-align: center;
      }
      .contenedor .referencia_card img
      {
        width: 270px;
        height:250px;
      }
      .contenedor .referencia_card p
      {
      font-family: "Salsa";
      border-top:1px solid gray;
      padding: 0 1rem;
      font-size: 16px;
      font-weight: 300;
      }
      .contenedor .referencia_card .titulo_producto
      {
      font-family: "Salsa";
      border-top:1px solid gray;
      font-size: 24px;
      font-weight: 300;
      color: #823F3F
      }
      
      /*Agregar*/ 
      .agregar 
      {
        font-family: "Salsa";
        margin-top: 5px;
        background-color: rgb(255, 255, 255);
        border: 1.5px solid #BA7B7C;
        height:32px;
        font-size: 16px;
        width: 200px;
        border-radius: 7px;
        color: #BA7B7C;
        cursor: pointer;
        margin-left: 42%;
      }
        .agregar:active
        {
        color: white;
        transform: translateY(-0.2rem);
        }
   
        .agregar:hover:not(:disabled) 
        {
            background: #BA7B7C;
            color: white;
        
        }
        
        .agregar:disabled{
            cursor: auto;
            
        }
        .btn_eliminar {
          font-family: "Salsa";
          background-color: rgb(255, 255, 255);
          border: 1px solid #BA7B7C;
          height:28px;
          font-size: 15px;
          width: 80px;
          border-radius: 7px;
          color: lightcoral;
          cursor: pointer;
          
        }
          
        .btn_eliminar:active {
            color: white;
            transform: translateY(0.2rem);
        }
          
        .btn_eliminar:hover:not(:disabled) {
            background: #BA7B7C;
            color: white;
          
        }
          
        .btn_eliminar:disabled{
            cursor: auto;
            
        }
    </style>
  </head>
  
  <body>
    <header>
      <?php
        include_once("vistas/header.php");
        elheader();
      ?>
      <nav>
        <a href="index.php" >Home</a>             
        <a href="cosplay.php" >Cosplay wigs</a>             
        <a href="lolitawigs.php" >Lolita wigs</a>             
        <a href="accesorios.php" >Accesorios</a>             
        <a href="#" id="home" >Referencias</a>     
      </nav>
    </header>

    <hr>

     <div>
        <a href="form_referencias.php">
        <button class="agregar"> Agregar Referencias</button>
        </a>
     </div>
    
     <section class="contenedor">
     <?php foreach($resultado as $row){?>
      <?php 
        $img = $row['imagen'];  
        $nombre = $row['nombre'];  
        $descripcion = $row['descripcion'];  
        $id = $row['id'];
      ?>
      <div class="referencia_card" data-bs-toggle="modal" data-bs-target="#exampleModal">
         <img src="<?php echo $img ?>">
         <p class="titulo_producto"><?php echo $nombre ?></p>
         <p> <?php echo $descripcion ?> </p>
         <form action="modelo/eliminar_referencia.php" method="post"></form>
         <?php echo "<a href='modelo/eliminar_referencia.php?id=$id'><button class='btn_eliminar'>Eliminar</button></a>"?>
       </div>
     <?php } ?>
     </section>

   </body>
</html>