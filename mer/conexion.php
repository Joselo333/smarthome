<?php
    function conectar(){
        $host="localhost";
        $user="root";
        $pass="";

        $bd="smarthome";

        $con=mysqli_connect($host,$user,$pass,$bd) or die("ERROR AL CONECTAR CON LA BASE DE DATOS".mysqli_error());
        
        return $con;
    }
?>