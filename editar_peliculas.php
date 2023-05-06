<?php
   if (isset($_GET['id'])) {
      include 'controladores/conexion.php';
      $id_pelicula = $_GET['id'];

      $query_select_id = "SELECT * FROM `peliculas` WHERE id = '$id_pelicula';";
      $result = mysqli_query($conexion, $query_select_id);
      $pelicula = mysqli_fetch_array($result);
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Editar película</title>
   <!-- BootStrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
   <div class="container p-4 col-3">
      <div class="card card-body">

         <!-- Formulario para editar -->
         <form action="controladores/editar_post.php" method="post">
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Nombre pelicula" name="nombre" value="<?= $pelicula['nombre'] ?>" autofocus>
               <input type="hidden"" class="form-control" autofocus name="id" value="<?= $pelicula['id'] ?>">
            </div>
            <div class="form-group my-2">
               <input type="text" class="form-control" placeholder="Año de estreno" min="0" step="1" name="estreno" value="<?= $pelicula['estreno'] ?>" >
            </div>
            <div class="form-group my-2">
               <select class="form-select" aria-label="Default select example" name="genero">
                  <option selected>Genero</option>
                  <option value="Acción">Acción</option>
                  <option value="Drama">Drama</option>
                  <option value="Suspenso">Suspenso</option>
               </select>
            </div>
            <div class="d-grid gap-2">
               <button class="btn btn-primary" type="submit" name="actualizar">Editar película</button>
            </div>
         </form>

      </div>
   </div>

   <!-- BootStrap scripts -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"
      defer></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"
      defer></script>
</body>

</html>