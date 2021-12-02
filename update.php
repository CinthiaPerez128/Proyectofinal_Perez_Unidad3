<?php

include("conexion.php");
$con=conectar();

$nodeboleto=$_POST['id'];
$iddestino=$_POST['iddestino'];
$idpasajero=$_POST['idpasajero'];
$idcamion=$_POST['idcamion'];
$precio=$_POST['precio'];
$noasiento=$_POST['noasiento'];
$fecha=$_POST['fecha'];

$sql="UPDATE `boletos` SET `id`='$nodeboleto',`iddestino`='$iddestino',`idpasajero`='$idpasajero',`idcamion`='$idcamion',`precio`='$precio',`noasiento`='$noasiento',`fecha`='$fecha' WHERE id='$nodeboleto'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: boletos.php");
    }
?>