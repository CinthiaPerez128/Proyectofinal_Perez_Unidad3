<?php
include("conexion.php");
$con = conectar();

$nodeboleto=$_GET['id'];

$sql = "SELECT `id`, `iddestino`, `idpasajero`, `idcamion`, `precio`, `noasiento`, `fecha` FROM `boletos` WHERE id='$nodeboleto'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="update.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">

            <input type="text" class="form-control mb-3" name="iddestino" placeholder="ID Destino" value="<?php echo $row['iddestino']  ?>">
            <input type="text" class="form-control mb-3" name="idpasajero" placeholder="ID Pasajero" value="<?php echo $row['idpasajero']  ?>">
            <input type="text" class="form-control mb-3" name="idcamion" placeholder="ID Camion" value="<?php echo $row['idcamion']  ?>">
            <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
            <input type="text" class="form-control mb-3" name="noasiento" placeholder="No. Asiento" value="<?php echo $row['noasiento']  ?>">
            <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']  ?>">


            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>

</html>