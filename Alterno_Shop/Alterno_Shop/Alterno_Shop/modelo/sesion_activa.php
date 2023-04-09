<?php
session_start();

if(isset($_SESSION['nombredelusuario']))
{
  $usuarioingresado=$_SESSION['nombredelusuario'];
  
  echo "<div class='registro_inicio_sesion' <a>
  <p class='texto_inicio_o_registro'>|$usuarioingresado|</p>
  </a> </div>";

  ?>
  <head>
    <style>
      #cerrar{
      background-color: rgb(255, 255, 255);
      border: 1px solid #BA7B7C;
      height: 20px;;
      width: 80px;
      border-radius: 7px;
      cursor: pointer;
      
      }
        
      #cerrar:active {
          color: white;
          transform: translateY(0.2rem);
      }
        
      #cerrar:hover:not(:disabled) {
          background: #BA7B7C;
          color: white;
        
      }
        
      #cerrar:disabled{
          cursor: auto;
          
      }
      #principal{
      background-color: rgb(255, 255, 255);
      border: 1px solid #BA7B7C;
      height: 20px;;
      width: 50px;
      border-radius: 7px;
      cursor: pointer;
      
      }
        
      #principal:active {
          color: white;
          transform: translateY(0.2rem);
      }
        
      #principal:hover:not(:disabled) {
          background: #BA7B7C;
          color: white;
        
      }
        
      #principal:disabled{
          cursor: auto;
          
      }
    </style>
  </head>
    <div class="registro_inicio_sesion">
      <form method="POST">
      <input id="cerrar" type="submit" value="Cerrar Sesion" name="cerrar">
      </input>
      </form>
    </div>
  <?php
}
else
{
  echo "<div class='registro_inicio_sesion'>
  <a href='iniciar_sesion.php'>
  <p class='texto_inicio_o_registro'>|Iniciar Sesion|</p>
  </a>
  </div>";
    
  echo"<div class='registro_inicio_sesion' >
  <a href='registro.php' >
  <p class='texto_inicio_o_registro'> |Registrar|</p>
  </a>
  </div>";
}

if(isset($_POST['cerrar']))
{
  session_destroy();
}
?>