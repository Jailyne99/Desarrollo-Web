<?php
include 'conexion.php';
include 'sesion-inicio.php';

$actual = $_SESSION['id'];

$query = "SELECT id, nombre, imagen, descripcion FROM galeria WHERE id_usuario='$actual' ORDER BY nombre DESC;";
$result = mysqli_query($con, $query);

if(!$result){
    echo 'Consulta fallida ';
}

$json = array(); //Variable json  
while($fila = mysqli_fetch_array($result)){ 
    //Crear objetos para esta variable 
    $json[] = array(
        'id'=>$fila['id'],
        'nombre' => $fila['nombre'], 
        'imagen' => $fila['imagen'], 
        'descripcion' => $fila['descripcion']
    );
}

$jsonstring = json_encode($json);
echo $jsonstring;

?>