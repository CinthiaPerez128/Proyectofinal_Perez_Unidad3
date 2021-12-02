<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT `id`, `modelo`, `matricula`, `tipodemotor`, `tipodecombustible`, `cantidaddeasientos` FROM `camion` WHERE 1";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Camion</title>
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

                                    <input type="text" class="form-control mb-3" name="id" placeholder="ID Camion">
                                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Modelo">
                                    <input type="text" class="form-control mb-3" name="matricula" placeholder="Matricula">
                                    <input type="text" class="form-control mb-3" name="tipodemotor" placeholder="Tipo de Motor">
                                    <input type="text" class="form-control mb-3" name="tipodecombustible" placeholder="Tipo de Combustible">
                                    <input type="text" class="form-control mb-3" name="cantidaddeasientos" placeholder="Cantidad de Asientos">
                                    
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID Camion</th>
                                        <th>Modelo</th>
                                        <th>Matricula</th>
                                        <th>Tipo de Motor</th>
                                        <th>Tipo de Combustible</th>
                                        <th>Cantidad de Asientos</th>

                                        
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['modelo']?></th>
                                                <th><?php  echo $row['matricula']?></th>
                                                <th><?php  echo $row['tipodemotor']?></th>
                                                <th><?php  echo $row['tipodecombustible']?></th>
                                                <th><?php  echo $row['cantidaddeasientos']?></th>
                                                
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