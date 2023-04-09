<?php
include("modelo/sesion_activa.php");

require 'config/conexion.php';
$db = new Database();
$con = $db->conectar();

$sql=  $con->prepare("SELECT * FROM productos WHERE id_categorias=4");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<head>
    <title>Accesorios</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Salsa">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>     
    <header>
        <?php
        include_once("vistas/header.php");
        elheader();
        ?>
        <nav>
            <a href="index.php" id="home">Home</a>      
            <a href="cosplay.php" >Cosplay wigs</a>
            <a href="lolitawigs.php" >Lolita wigs</a>
            <a href="accesorios.php" >Accesorios</a>
            <a href="referencias.php" >Referencias</a>     
         </nav>
    </header>
    <?php
         buscar();
         include_once("vistas/cards.php");
         include_once("vistas/modal.php");
      ?>
    </body>
</html>