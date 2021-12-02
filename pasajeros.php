<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT `id`, `nombre`, `apellido`, `correoelectronico`, `direccion`, `telefono` FROM `pasajeros` WHERE 1";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> Boletos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="id" placeholder="ID Pasajeros">
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="apellido" placeholder="Apellido">
                    <input type="text" class="form-control mb-3" name="correoelectronico" placeholder="Correo Electronico">
                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">
                    <input type="text" class="form-control mb-3" name="telefono" placeholder="Telefono">


                    <input type="submit" class="btn btn-primary">
                    <a href="../index.php">Inicio</a>
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>ID Pasajeros</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo Electronico</th>
                            <th>Direccion</th>
                            <th>Telefono</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id'] ?></th>
                                <th><?php echo $row['nombre'] ?></th>
                                <th><?php echo $row['apellido'] ?></th>
                                <th><?php echo $row['correoelectronico'] ?></th>
                                <th><?php echo $row['direccion'] ?></th>
                                <th><?php echo $row['telefono'] ?></th>

                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>