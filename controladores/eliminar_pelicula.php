<!-- 8. Crear el script para eliminar una pelicula -->
<?php
if (isset($_GET['id'])) {
   include 'conexion.php';
   $id_pelicula = $_GET['id'];

   $query_delete = "DELETE FROM `peliculas` WHERE id = '$id_pelicula'";
   $result = mysqli_query($conexion, $query_delete);
}

header('Location: ../index.php');
?>