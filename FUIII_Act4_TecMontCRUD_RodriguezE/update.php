<?php

include("conexion.php");
$con=conectar();

$matricula=$_POST['matricula'];
$gpo=$_POST['gpo'];
$email=$_POST['email'];
$nombre=$_POST['nombre'];

$sql="UPDATE alumno SET  gpo='$gpo', email='$email',nombre='$nombre' WHERE matricula='$matricula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>