<?php 
if (isset($_POST['registrar'])) {
    include("../config/conexion.php");
    if (strlen($_POST['usuarios']) >= 1 && strlen($_POST['correo']) >= 1) {
	    $usuario = trim($_POST['usuarios']);
	    $correo = trim($_POST['correo']);
	    $contraseña = $_POST['contraseña'];
        $contraseña2 = $_POST['confirmar_contraseña'];
            if ($contraseña === $contraseña2){

                echo("si esta bien wey");
                $consulta = "INSERT INTO usuarios(usuario, correo, contraseña) VALUES ('$usuario','$correo','$contraseña')";
                header("Location: ../index.php");

            }else{
                echo("No esta bien wey");
                header("Location: ../registro.php");
            }
 
	    
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
            echo "<script>alert('Registro correcto');window.location= '../index.php'</script>";
	    } else {
	    	
            echo "<script>alert('usuario no existe');window.location= '../registro.php'</script>";
           
	    }
    }   else {
	    	
            echo "<script>alert('¡Por favor complete los campos!');window.location= '../registro.php' </script>";
           
    }
}

?>