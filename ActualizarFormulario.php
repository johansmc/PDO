<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php 
include './config/conexion.php';

$Id =($_GET['id']);
$sql = $con->prepare("SELECT * FROM libros WHERE id = ?");
$sql->execute([$Id]);
$libro = $sql->fetch();
?>


<div class="container p-4 ps-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Actualizar libro</h1>
                </div>

            </div>
        </div>
        <form action="Actualizar.php" method="POST" class="p-4 ps-5">

            <input type="hidden" name="id" value="<?php echo $libro['id']; ?>">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $libro['titulo']; ?>">
            </div>
            <div class="form-group">
                <label for="autor">Autor</label>
                <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $libro['autor']; ?>">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $libro['descripcion']; ?>">
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="year" class="form-control" id="fecha" name="fecha" value="<?php echo $libro['fecha']; ?>">
            </div>
            <button type="submit" class="btn btn-success mt-2">Actualizar</button>
            <a href="index.php" class="btn btn-danger mt-2">Regresar</a"></a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="s ha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>