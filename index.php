
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Biblioteca</h1>
            </div>
        </div>
       <div class="table responsive table-hover mt-5">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include './config/conexion.php';
                    $sql = $con->query("SELECT * FROM libros");
                    $fila = $sql->fetchAll(PDO::FETCH_OBJ);
                    foreach ($fila as $row) {
                        ?>
                        <tr>
                            <th scope="row"> <?php echo $row->id?>  </th>
                            <td> <?php echo $row->titulo?></td>
                            <td> <?php echo $row->autor?></td>
                            <td> <?php echo $row->descripcion?></td>
                            <td> <?php echo $row->fecha ?></td>
                            <td>
                                <a href="ActualizarFormulario.php?id=<?= $row->id ?>" class="btn btn-warning mb-2">Editar</a>
                                <a href="Eliminar.php?id=<?= $row->id ?>" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <a href="views/AgregaraFormulario.php" class="btn btn-success mb-2 ">Agregfwawafwafar</a></a>
       </div>
    </div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>