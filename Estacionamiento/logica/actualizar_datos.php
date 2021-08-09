<?php
require 'conexion.php';

 $id = $_POST['id'];
 $email  = $_POST['email'];
 $usuario  = $_POST['usuario'];
 $telefono  = $_POST['telefono'];
 $opcion  = $_POST['opcion'];

$actualizar="UPDATE `login` SET  email='$email', usuario='$usuario', telefono='$telefono', opcion='$opcion' WHERE id='$id'";

$query = mysqli_query($conexion,$actualizar);
#print_r($query) es solo para verificar un error

if($query){

   echo "<script> alert('Usuario actualizado');
    location.href = '../admin.php';
   </script>";
   print_r($query);

}else{
    echo "<script> alert('Error al actualizar usuario');
    location.href = '../admin.php';
    </script>";
}


?>