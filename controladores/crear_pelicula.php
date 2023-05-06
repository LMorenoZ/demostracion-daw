<!-- 5. Crear el script para crear la pelicula en la base de datos -->
<?php
include 'conexion.php'; // Se importa el string de conexion

if (isset($_POST)) {
   $nombre = $_POST['nombre'];
   $genero = $_POST['genero'];
   $estreno = $_POST['estreno'];

   $query_select = "INSERT INTO `peliculas`(`nombre`, `genero`, `estreno`) VALUES ('$nombre ','$genero','$estreno')";
   $resultado = mysqli_query($conexion, $query_select);

   header('Location: ../index.php');
}

echo 'Ocurrio un error';