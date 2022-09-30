<?php
    include('conexion.php');
    $con=conectar();
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $rut=$_POST['rut'];

    session_start();
    $_SESSION['correo']=$correo;

    $consulta="SELECT * FROM usuarios where rut='$rut' and correo='$email' and clave='$clave'";
    $resultado=mysqli_query($con,$consulta);
    $filas=mysqli_num_rows($resultado);

    if($resultado){

        header("Location: ../vistas/gui/menu.php");
        
    }else{
    
        echo "<script> alert ('Las credenciales ingresadas no son validas. Por favor vuelva a intentarlo.'); window.location='../index.php' </script>";
    }
?>