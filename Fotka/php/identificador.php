<?php
include 'conexion.php';

$query = "SELECT * FROM galeria";
$result = mysqli_query($con, $query);

if(!$result){
    echo 'Consulta fallida ';
}

$json = array(); //Variable json  
while($fila = mysqli_fetch_array($result)){ 
    //Crear objetos para esta variable 
    $json[] = array(
        'id' => $fila['id'], 
        'imagen' => $fila['imagen'], 
        'descripcion' => $fila['descripcion']
    );
}

$jsonstring = json_encode($json);
echo $jsonstring;

?>