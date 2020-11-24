<?php
     include 'conexion.php';
    /* include 'sesion-inicio.php';*/


    /* $user = $_SESSION['usuario'];
     $id = $_SESSION['id'];*/


     $query = "SELECT id, nombre, perfil FROM usuario";
     $result = mysqli_query($con, $query);

     if(!$result){
        die('Error de consulta'.mysqli_error($con));
    }

    
    $json = array();
    while($fila =  mysqli_fetch_array($result)){
        $json[] = array(
			'id' => $fila['id'],
			'nombre' => $fila['nombre'],
			'perfil' => $fila['perfil'],
		);
    }
    $jsonstring = json_encode($json);
    echo $jsonstring;


?>