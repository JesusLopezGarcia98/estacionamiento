<?php
require "conexion.php";

#esta funcion que viene por defecto en php es para inciar con la secion
session_start();

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

#hacemos la consulta le decimos que cuente las columnas de nuestra tabla, para que despues nos traiga /seleccione el usuario y contraseña
$q = "SELECT COUNT(*) as contar FROM `login-admin` WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
//le decimos haga la consulta para ello le pasamos 2 parametros
// nuestro metodo conectar que esta en conexion.php que sirve para conectarce a la bd
//y nuestra variable $q que trae la consulta
$consulta = mysqli_query($conexion,$q);

//ahora guardaremos todos los datos que trae de nuestra consulta  en un array
$array = mysqli_fetch_array($consulta);

#ahora le decimos que si array es mayor a 0 osea que si encontro consulta
#que los redireccione a la pagina principal
if($array['contar']>0){
    //creamos esta variable para traer el nombre del usuario que se logee  en el apartado crud-proyectos
    $_SESSION['usuario'] = $usuario;
    header("location: ../admin.php");

}else{
    echo '<script>alert("DATOS INCORRECTOS");</script>';
    header("location: ../index.php");
}


?>