<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_estudiante'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$foto=$_POST['foto'];


$sql="INSERT INTO alumno VALUES('$cod_estudiante','$dni','$nombres','$apellidos','$foto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>