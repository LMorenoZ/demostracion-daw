<!-- 3. Importar el script 'traer_peliculas.php' al inicio de index.php (index.php): -->

<!--  -->

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Ver y crear películas</title>
   <!-- BootStrap 5 -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
   <!-- Font Awesome -->
   <script src="https://kit.fontawesome.com/846e98f337.js" crossorigin="anonymous"></script>
</head>

<body>
   <div class="container p-4">
      <div class="row">
         <h1 class="text-center mb-2">Películas</h1>
         <div class="col-md-3">
            <div class="card card-body">
               <h3 class="card-title text-secondary">Crear película</h3>

               <!-- Formulario para crear una película -->
               <form action="controladores/crear_pelicula.php" method="post">
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Nombre pelicula" name="nombre" autofocus />
                  </div>
                  <div class="form-group my-2">
                     <input type="text" class="form-control" placeholder="Año de estreno" min="0" step="1" name="estreno"/>
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
                     <button class="btn btn-success" type="submit" name="crear">Crear película</button>
                  </div>
               </form>

            </div>
         </div>
         <div class="col-md-9">

            <!-- Tabla -->
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th>Nombre</th>
                     <th>Genero</th>
                     <th>Estreno</th>
                     <th>Acciones</th>
                  </tr>
               </thead>
               <tbody>

               <!-- 4. Mostrar las peliculas en la tabla (index.php)  -->


               <!--  -->

               </tbody>
            </table>

         </div>
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