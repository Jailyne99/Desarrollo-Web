<?php
  include 'conexion.php';
  include 'mantener.php';
  $conectusu = $_SESSION['id'];

  $query = mysqli_query($con,"SELECT nombre, apellido, perfil, descripcion FROM usuario WHERE id='$conectusu'");

  $json = array();
  while($row = mysqli_fetch_array($query)){
     $json[] = array(
       'nombre'=>$row['nombre'],
       'apellido'=>$row['apellido'],
       'foto'=>$row['perfil'],
       'descripcion'=>$row['descripcion']
     );
  }

  

  $json_string = json_encode($json);
  echo $json_string;

?> 