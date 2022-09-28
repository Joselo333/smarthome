<?php
    include('conexion.php');
    $con=conectar();
    $email=$_POST['email'];
    $contraseña=$_POST['password'];
    $rut=$_POST['rut'];

    session_start();
    $_SESSION['email']=$email;

    $consulta="SELECT * FROM usuarios where rut='$rut' and email='$email' and contraseña='$contraseña'";
    $resultado=mysqli_query($con,$consulta);
    $filas=mysqli_num_rows($resultado);

    if($resultado){

        header("Location: ../vistas/gui/menu.php");
        
    }else{
    
        echo "<script> alert ('Las credenciales ingresadas no son validas. Por favor vuelva a intentarlo.'); window.location='../index.php' </script>";
    }
?>