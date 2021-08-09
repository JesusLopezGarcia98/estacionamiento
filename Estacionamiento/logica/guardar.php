<?php
 require 'conexion.php';
  
 $email  = $_POST['email'];
 $usuario  = $_POST['usuario'];
 $telefono  = $_POST['telefono'];
 $opcion  = $_POST['opcion'];

$insertar = "INSERT INTO `login`(`email`, `usuario`, `telefono`, `opcion`) VALUES ('$email','$usuario',' $telefono', '$opcion') ";

$query = mysqli_query($conexion, $insertar);

if($query){

   echo "<script> alert('Usuario registrado');
    location.href = '../admin.php';
   </script>";

}else{
    echo "<script> alert('Error al registrar usuario');
    location.href = '../admin.php';
    </script>";
}


?>