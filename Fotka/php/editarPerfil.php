<?php

include 'conexion.php';
include 'sesion-inicio.php';

   

//if(isset($_POST['agregar'])){
  
	$imagen = $_FILES['imagen']['name'];
    $nombre = $_POST['labelNom'];
    $apellido = $_POST['labelApe'];
    $correo = $_POST['labelCorreo'];
   // $id = $_POST['clave'];
    $descripcion = $_POST['labelDes'];
    $id = $_SESSION['id'];
	    
    echo $imagen;
    echo ' ';
    echo $nombre;
    echo ' ';
    echo $id;
    echo ' ';
    echo $descripcion;
	echo ' ';
	echo $apellido;
	echo ' ';
	echo $correo;
    echo ' ';
    //echo $id;


	if(isset($imagen) && $imagen!=""){

		$tipo = $_FILES['imagen']['type'];
		$temp = $_FILES['imagen']['tmp_name'];

		if(!((strpos($tipo,'webp') || strpos($tipo,'jpeg') || strpos($tipo,'png')))){
			echo "Error archivo incompatible...";
		}else{
            //Editar esta consulta 
			$query="UPDATE usuario SET nombre='$nombre',apellido='$apellido',perfil='$imagen',descripcion='$descripcion',correo='$correo' WHERE 
			id='$id'";
		
		$resultado = mysqli_query($con, $query);

			if($resultado) {
				move_uploaded_file($temp,'../img/'.$imagen);
				echo "Imagen subida corrrectamente.. ";
				header('Location: ../perfil.html');
			}else{
				echo "Error al subir la imagen.. ".mysql_error($resultado);
			}

		}

	}


//}


?>