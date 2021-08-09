<?php

require 'conexion.php';

$consulta = "SELECT * FROM login ";
$query = mysqli_query($conexion,$consulta);
$array = mysqli_fetch_array($query);

?>