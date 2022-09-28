<?php
    function conectar(){
        $host="localhost";
        $user="root";
        $pass="123456789";

        $bd="smarthome";

        $con=mysqli_connect($host,$user,$pass) or die("ERROR AL CONECTAR CON LA BASE DE DATOS".mysqli_error());

        mysqli_select_db($con,$bd);

        return $con;
    }
?>