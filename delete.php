<?php

include("conexion.php");
$con=conectar();

$nodeboleto=$_GET['id'];

$sql="DELETE FROM `boletos` WHERE id='$nodeboleto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: boletos.php");
    }
?>
