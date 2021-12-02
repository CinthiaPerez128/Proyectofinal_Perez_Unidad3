<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT `id`, `iddestino`, `idpasajero`, `idcamion`, `precio`, `noasiento`, `fecha` FROM `boletos` WHERE 1";
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

                                    <input type="text" class="form-control mb-3" name="id" placeholder="No. De Boleto">
                                    <input type="text" class="form-control mb-3" name="iddestino" placeholder="ID Destino">
                                    <input type="text" class="form-control mb-3" name="idpasajero" placeholder="ID Pasajero">
                                    <input type="text" class="form-control mb-3" name="idcamion" placeholder="ID Camion">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="noasiento" placeholder="No. Asiento">
                                    <input type="text" class="form-control mb-3" name="fecha" placeholder="Fecha">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        
                                        <th>No. de Boleto</th>
                                        <th>ID Destino</th>
                                        <th>ID Pasajero</th>
                                        <th>ID Camion</th>
                                        <th>Precio</th>
                                        <th>No. Asiento</th>
                                        <th>Fecha</th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['iddestino']?></th>
                                                <th><?php  echo $row['idpasajero']?></th>
                                                <th><?php  echo $row['idcamion']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['noasiento']?></th>
                                                <th><?php  echo $row['fecha']?></th>
                                                
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