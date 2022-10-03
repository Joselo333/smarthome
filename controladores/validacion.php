<?php
    include('conexion.php');
    $con=conectar();
    $correo=$_GET['correo'];
    $clave=$_GET['clave'];
    $rut=$_GET['rut'];

    session_start();
    $_SESSION['correo']=$correo;

    $consulta="SELECT * FROM usuarios WHERE rut='$rut' and correo='$correo' and clave='$clave'";
    $resultado=mysqli_query($con,$consulta);
    $filas=mysqli_num_rows($resultado);

    if($filas > 0){
        
        header("Location: ../vistas/gui/menu.php");
        
    }else{
    
        echo "<script> alert ('Las credenciales ingresadas no son validas. Por favor vuelva a intentarlo.'); window.location='../index.php' </script>";
    }
    mysqli_free_result($resultado);
    mysqli_close($con);
?>