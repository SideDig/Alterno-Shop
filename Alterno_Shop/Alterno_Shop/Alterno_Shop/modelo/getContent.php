<?php
if(!empty($_GET['id'])){
    //DB details
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'alterno_shop';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    if ($db->connect_error) {
        die("Unable to connect database: " . $db->connect_error);
    }
    
    //get content from database
    $query = $db->query("SELECT * FROM productos WHERE id = {$_GET['id']}");
    
    if($query->num_rows > 0){
        $cmsData = $query->fetch_assoc();
        $img = $cmsData['imagen_producto'];  
        $nombre = $cmsData['nombre_producto'];  
        $descripcion = $cmsData['descripcion_producto'];  
        $precio = $cmsData['precio_producto'];
        $categoria = $cmsData['id_categorias'];
        $id = $cmsData['id'];
        ?>
            <head>
                <link rel="stylesheet" href=styles/styles.css>
            </head>
          <img src="<?php echo $img?>" height="auto" width="200px" style="margin-top:50px">
         <h3><b><?php echo $nombre?></b></h3>  
         <br>
         <br>
         <br>
          <h5 style="margin-top:-30px; font-size:15px;"  >Detalles del producto:</h5>
         <div class="detalles_Produc">
            
            <li>
            <?php echo $descripcion?>
            </li>
         </div>
         <br>
         <h5 style="margin-buttom:-150px; font-size:15px;" >$<?php echo $precio?>.00 MXN</h5>  
         <br>
         <div class="cantidad_Product">
          <form>
            Cantidad:
            <input type="number" name="cantidad" min="0" max="50" step="1" value="1" height="444px" width="1240px"><br>
            <button class="cta">
            <span class="hover-underline-animation"> Comprar </span>
            <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
            <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
            </svg> </button>


          </form>
         </div>
        <?php
    }else{
        echo 'Content not found....';
    }
}else{
    echo 'Content not found....';
}

/*Detalles
<div class="detalles_Produc">
    <li>
        Material: 100% fibra de alta temperatura
    </li>
    <li>
        Longitud: 40 cm (16 pulgadas) 
    </li>
    <li>
        Color: Plata y Negro
    </li>
    <li>
        Peso: 200g
    </li>
    <li>
        Anime: Genshin impacto Cosplay
    </li>
</div>
*/
?>