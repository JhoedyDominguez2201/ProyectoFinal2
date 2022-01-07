<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM alumno";
    $query=mysqli_query($con,$sql);

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Registro Alumnos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div style="background-color: #CEDACC;"> 
    <header >
        <img class="header-img" src ="https://bucketproyecto22.s3.amazonaws.com/seplogo.png" height="105px"  style="position: relative; top: 0px; left: 1180px;"/>
        <img class="header-img" src ="https://bucketproyecto22.s3.amazonaws.com/logo_tecnm_2.png" height="105px"  style="position: relative; top: 0px; left: -300px;"/>

        <h1 style="text-align: center;" >REGISTRO DE ALUMNOS</h1>
        <button class="btn btn-secondary" onclick="location.href='https://bucketproyecto22.s3.amazonaws.com/index.html'"style="position: relative; top: -15px; left: 1350px;">Conocenos</button>

    </header>
    </div>   
            <div class="container mt-5">
                    <div class="row"> 
                    
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="Id Estudiante">
                                    <input type="text" class="form-control mb-3" name="dni" placeholder="Numero de Control">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos">


                                    <input type="submit" class="btn btn-primary">
                                      
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Numero de Control</th>
                                        <th>Nombres</th>
                                        <th>Apellidos</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['cod_estudiante']?></th>
                                                <th><?php  echo $row['dni']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['cod_estudiante'] ?>" class="btn btn-danger">Eliminar</a></th>
                                                                                     
  

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