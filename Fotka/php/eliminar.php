<?php
  include 'conexion.php';

  $eliminar=$_POST['id'];

  $query=" DELETE FROM galeria WHERE id='$eliminar'"; 

  $resultado= mysqli_query($con, $query);
        
?>