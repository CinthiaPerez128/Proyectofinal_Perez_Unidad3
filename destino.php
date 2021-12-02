<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT `id`, `fechasalida`, `horasalida`, `lugardestino`, `idcamion`, `idchofer`, `idpasajero`, `fechallegada`, `horallegada` FROM `destino` WHERE 1";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
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

                                    <input type="text" class="form-control mb-3" name="id" placeholder="ID Destino">
                                    <input type="text" class="form-control mb-3" name="fechasalida" placeholder="Fecha de Salida">
                                    <input type="text" class="form-control mb-3" name="horasalida" placeholder="Hora de Salida">
                                    <input type="text" class="form-control mb-3" name="lugardestino" placeholder="Lugar de Destino">
                                    <input type="text" class="form-control mb-3" name="idcamion" placeholder="ID camion">
                                    <input type="text" class="form-control mb-3" name="idchofer" placeholder="ID de Pasajero">
                                    <input type="text" class="form-control mb-3" name="fechallegada" placeholder="Fecha de Llegada">
                                    <input type="text" class="form-control mb-3" name="horallegada" placeholder="Hora de Llegada">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID Destino</th>
                                        <th>Fecha de Salida</th>
                                        <th>Hora de Salida</th>
                                        <th>Lugar de Destino</th>
                                        <th>ID Camion</th>
                                        <th>ID Chofer</th>
                                        <th>ID Pasajero</th>
                                        <th>Fecha de Llegada</th>
                                        <th>Hora de Llegada</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['fechasalida']?></th>
                                                <th><?php  echo $row['horasalida']?></th>
                                                <th><?php  echo $row['lugardestino']?></th>
                                                <th><?php  echo $row['idcamion']?></th>
                                                <th><?php  echo $row['idchofer']?></th>
                                                <th><?php  echo $row['idpasajero']?></th>
                                                <th><?php  echo $row['fechallegada']?></th>
                                                <th><?php  echo $row['horallegada']?></th>
                                                
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