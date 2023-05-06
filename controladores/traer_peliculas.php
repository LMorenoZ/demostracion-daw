<?php
include 'conexion.php';

$select_query = "SELECT * FROM peliculas";
$result_select = mysqli_query($conexion, $select_query); // array de resultados de la consulta
$cuantas_peliculas = mysqli_num_rows($result_select); // Numero de filas traidas = numero de peliculas

?>