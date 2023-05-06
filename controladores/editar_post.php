<?php

if (isset($_POST['actualizar'])) {
   include 'conexion.php';

   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $genero = $_POST['genero'];
   $estreno = $_POST['estreno'];

   $query_edit = "UPDATE `peliculas` SET `nombre`='$nombre',`genero`='$genero',`estreno`='$estreno' WHERE id = '$id'";
   mysqli_query($conexion, $query_edit);

   header('Location: ../index.php');
}

?>