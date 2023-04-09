<!DOCTYPE html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, maximum-scale=1.0">
      <title>Añadir Referencias</title> 
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="styles/sesion.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sacramento">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Salsa">
      <style>
        .contenedor_from_referencias
        {
          width: 500px;
          height: 410px;
          background: white;
          box-shadow: 3px 5.5px rgba(0,0,0,0.57);
          transition: all 500ms ease;
          margin-top: 100px;
          border-radius: 10px;
          margin-bottom: 100px;
        }
        .subir_imagen
        {
          margin-top: 20px;
          margin-left: 30px;
          font-family: "Salsa";
          color: #BA7B7C;
        }
      </style>
   </head>

    <body>
    <form method="POST" action="modelo/conexion_referencias.php" enctype="multipart/form-data">
      <div class="modal">
        <div class="contenedor_from_referencias">
          <header> 
            <div class="title_home">
               Alterno Shop
            </div>
         </header>
          <div>
            <div id="division">
              <p class="etiquetas">Producto</p>
              <input class="textos" type="text" name="txtproducto">
            </div>
            <div id="division">
              <p class="etiquetas">Reseña</p>
              <input class="textos" type="text" name="txtreseña">
            </div>
            <div id="division">
              <p class="etiquetas">Imagen</p>
              <input type="file" name="imagen" class="subir_imagen">
            </div>
            <div id="division2">
              <button class="btn_buscar" type="submit" name="ingresar_ref">Ingresar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    </body>
</html>
