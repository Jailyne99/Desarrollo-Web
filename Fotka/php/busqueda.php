<?php

include "conexion.php";

$search = $_POST['search'];

if(empty($search)){
   /* $query = "SELECT *FROM usuario";
    $result = mysqli_query($con, $query);

    if(!$result){
        die('Error de consulta'.mysqli_error($con));
    }

    $json = array();
    while($fila =  mysqli_fetch_array($result)){
        $json[] = array(
			'id' => $fila['id'],
			'nombre' => $fila['nombre'],
			'perfil' => $fila['perfil']
		);
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;*/

}else{
    $query = "SELECT *FROM usuario WHERE nombre LIKE '$search%'";
    $result = mysqli_query($con, $query);

    if(!$result){
        die('Error de consulta'.mysqli_error($con));
    }

    $json = array();
    while($fila =  mysqli_fetch_array($result)){
        $json[] = array(
            'id' => $fila['id'],
            'nombre' => $fila['nombre'],
            'perfil' => $fila['perfil']
        );
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;
}


?>