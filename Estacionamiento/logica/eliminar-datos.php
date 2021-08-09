<?php
 require 'conexion.php';
  
 $id = $_GET['id'];

$eliminar = "DELETE FROM `login` WHERE id = '$id' ";

$resultado_eliminar = mysqli_query($conexion, $eliminar);

if($resultado_eliminar){

   echo "<script> alert('Usuario eliminado con exito');
    location.href = '../admin.php';
   </script>";

}else{
    echo "<script> alert('Error al eliminar usuario');
    location.href = '../admin.php';
    </script>";
}


?>