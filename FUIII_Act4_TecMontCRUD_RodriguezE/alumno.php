<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Datos Alumno</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="matricula" placeholder="Matrícula">
                                    <input type="text" class="form-control mb-3" name="gpo" placeholder="Grupo">
                                    <input type="text" class="form-control mb-3" name="email" placeholder="Email">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Matricula</th>
                                        <th>Grupo</th>
                                        <th>Email</th>
                                        <th>Nombres</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['matricula']?></th>
                                                <th><?php  echo $row['gpo']?></th>
                                                <th><?php  echo $row['email']?></th>
                                                <th><?php  echo $row['nombre']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['matricula'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['matricula'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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