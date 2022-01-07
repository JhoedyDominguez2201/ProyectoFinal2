<?php
function conectar(){
    $host="database-1.cb5deliekrpq.us-east-1.rds.amazonaws.com";
    $user="admin";
    $pass="Administrador22.";
    $bd="bd_prueba";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
