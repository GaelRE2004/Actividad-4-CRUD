<?php
include("conexion.php");
$con=conectar();

$matricula=$_POST['matricula'];
$gpo=$_POST['gpo'];
$email=$_POST['email'];
$nombre=$_POST['nombre'];


$sql="INSERT INTO alumno VALUES('$matricula','$gpo','$email','$nombre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>