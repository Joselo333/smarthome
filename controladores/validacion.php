<?php
    include('../mer/conexion.php');
    $con=conectar();
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];

    session_start();
    $_SESSION['correo']=$correo;

    $consulta="SELECT * FROM usuarios WHERE correo='$correo' and clave='$clave'";
    $resultado=mysqli_query($con,$consulta);
    $filas=mysqli_num_rows($resultado);
    $row=mysqli_fetch_array($resultado);
    
    if($filas> 0){
        
        $id = $row['id'];
        header("Location: ../vistas/gui/menu.php?id=$id");
        
    }else{
    
        echo "<script> alert ('Las credenciales ingresadas no son validas. Por favor vuelva a intentarlo.'); window.location='../index.php' </script>";
    }
    mysqli_free_result($resultado);
    mysqli_close($con);
?>