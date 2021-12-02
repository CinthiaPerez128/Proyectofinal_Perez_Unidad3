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


$sql="INSERT INTO `boletos`(`id`, `iddestino`, `idpasajero`, `idcamion`, `precio`, `noasiento`, `fecha`) VALUES ('$nodeboleto','$iddestino','$idpasajero','$idcamion','$precio','$noasiento','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: boletos.php");
    
}else {
}
?>