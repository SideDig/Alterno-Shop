<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='styles/formaddimn.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formcrood</title>
</head>
<body>
    <form method="POST" action="modelo/productos_conexion.php" enctype="multipart/form-data" class="formulario">
     <p>nombre_producto</p>   <input name="nombre_productos" type="text"id="nombre">
     <p>descripcion_producto</p>  <textarea name="descripcion_productos"></textarea>
     <p>precio_producto</p>   <input name="precio_productos" type="number"id="precio">
     <p>imagen_producto</p>   <input name="imagen" type="file" id="imagen">
     <br>
     
     <br>
     <select name="categoria">
        <option value="1">Home</option>
        <option value="2">Cosplay wigs</option>
        <option value="3">Lolita wigs</option>
        <option value="4">Accsesorios</option> 
     </select>
     <br>
     <br>
     <button class="btn btn-success" type="submit" name="mandar_productos">Agregar</button>
    </form>
    
    
</body>
</html>