<!DOCTYPE html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
      <title>Inicio de sesion</title> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="styles/sesion.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Salsa">
      <style>
        .notener
        {
            height: 40px;
            width: 135px;
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
            margin-right: 130px;
        }
      </style>
   </head>
    <body>
    <form method="POST" action="modelo/conexion_sesion.php">
      <div class="modal">
        <div class="contenedor">
          <header> 
            <div class="title_home">
               Alterno Shop
            </div>
         </header>
          <div>
            <div id="division">
              <p class="etiquetas">Usuario</p>
              <input class="textos" type="text" name="txtusuario">
            </div>
            <div id="division">
              <p class="etiquetas">Contraseña</p>
              <input class="textos" type="password" name="txtcontraseña">
            </div>
            <div id="division2">
              <button class="btn_buscar" type="submit" name="iniciar">Ingresar</button>
            </div>
            <div class="notener">
              <p>¿No tienes cuenta?</p>
            </div>
            <div class="notener2">
                <a href="registro.php">
                <p>Registrar</p>
                </a>
            </div>
          </div>
        </div>
      </div>
    </form>
    </body>
</html>
