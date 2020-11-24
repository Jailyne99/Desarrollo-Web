<?php

$server = "localhost";
$bd = "galeria";
$contrasenia = "1234";
$user = "pablito";

$con = mysqli_connect($server,$user,$contrasenia,$bd);

if($con){
  //  echo "bien";
}else{
    echo "No se conecto";
}
?>