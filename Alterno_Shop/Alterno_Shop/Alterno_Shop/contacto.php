<?php
include("modelo/sesion_activa.php");
?>

<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
    <title>Alterno Shop</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style_contacto.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Salsa">
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
        <a href="referencias.php" >Referencias</a>     
      </nav>
    </header>
    <div class="contacto">
        <div class="contacto_tipo1">
            <div>
                <h3>Correo Electronico</h3>
            </div>
            <div>
                <img src="img/icon_gmail.png" class="icon">
                <h5>alternoshop@gmail.com</h5>
            </div>
         </div>

         <div class="contacto_tipo1">
            <div>
                <h3>Telefono</h3>
            </div>
            <div>
                <img src="img/icon_whatsapp.png" class="icon2">
                <h5>+52 (618)-839-0444</h5>
            </div>
         </div>

         <div class="contacto_tipo2">
            <div>
                <h3>Redes Sociales</h3>
            </div>
            <div>
                <img src="img/icon_instagram.png" class="icon2">
                <h5 id="tres">alterno.shop</h5>
            </div>
            <div id="doble">
                <img src="img/icon_facebook.png" class="icon2">
                <h5 id="tres">Alterno Shop</h5>
            </div>
         </div>
    </div>

    </body>
</html>