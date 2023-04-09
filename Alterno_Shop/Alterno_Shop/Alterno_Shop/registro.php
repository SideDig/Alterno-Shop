<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
    <title>Registro</title> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/sesion.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Salsa">
  </head>
    <style>
    .contenedor_registro
    {
        width: 500px;
        height: 520px;
        background: white;
        box-shadow: 3px 5.5px rgba(0,0,0,0.57);
        transition: all 500ms ease;
        margin-top: 100px;
        border-radius: 10px;
        margin-bottom: 100px;
    }
    .notener
        {
            height: 40px;
            width: 130px;
            font-size: 13px;
            color: black;
            padding:10px;
            display:flex;
            float: left;
            font-family: "Salsa";
            margin-left: 130px;
        }
        .notener2
        {
            height: 40px;
            width: 100px;
            float: right;
            font-size: 13px;
            color: #823F3F;
            padding:10px;
            display:flex;
            font-family: "Salsa";
            margin-right: 140px;
        }  

   </style>
  <body>
    <div class="modal">
    <div class="contenedor_registro">
      <header> 
        <div class="title_home">Alterno Shop</div>
      </header>
      <div>
        <form  method="post" action="modelo/conexion_registro.php">
          <div id="division">
            <p class="etiquetas">Usuario</p>
            <input name="usuarios" class="textos" type="text">
          </div>
          <div id="division">
            <p class="etiquetas">Correo</p>
            <input name="correo" class="textos" type="text">
          </div>
          <div id="division">
            <p class="etiquetas">Contraseña</p>
            <input name="contraseña" class="textos" type="password">
          </div>
          <div id="division">
            <p class="etiquetas">Confirmar contraseña</p>
            <input name="confirmar_contraseña" class="textos" type="password">
          </div>
          <div id="division2">
            <button name="registrar" class="btn_buscar" >Registrar</button>
          </div>
          <div class="notener">
            <p>¿Ya tienes cuenta?</p>
            </div>
          <div class="notener2">
            <a href="iniciar_sesion.php"> <p>Iniciar Sesion</p> </a>
          </div>
        </form>
      </div>
      <?php 
        include("modelo/conexion_registro.php");
      ?>
      </div>
    </div>
  </body>
</html>