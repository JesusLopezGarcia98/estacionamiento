<?php

//creamos la conexion a mysql

$host = "localhost";
$usuario = "root";
$clave = "";
$bd = "estacionamiento";

$conexion = mysqli_connect($host,$usuario,$clave,$bd);
//verificamos si esta haciendo la consulta de la conexion a MySQL

//si esta haciendo bien la conexion nuestra cadena 
if($conexion){
    //entonces que nos imprima que esta conectada a nuestra bd
    echo "Conectado correctamente";
}else{
//En caso que no se conecte que nos imprima lo contrario 
    echo " No se pudo conectar";
}


?>