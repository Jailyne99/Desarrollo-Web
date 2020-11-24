<?php

include 'conexion.php';

if(isset($_POST['botton'])){
    $USER = $_POST['usuario'];
    $APE = $_POST['apellido'];
    $CORREO = $_POST['correo'];
    $CONTRA1 = $_POST['contra1'];
    $CONTRA2 = $_POST['contra2'];

    if($CONTRA2==$CONTRA1){
        $CONTRA1 = hash('sha512',$CONTRA1);
      //  echo $CONTRA1;
      $query = myqli_query($con,"INSERT INTO usuario (nombre,apellido,corre,contrasenia)
      VALUES ('$USER','$APE','$CORREO','$CONTRA1')");


      if($query){
          echo "CORRECTO";
      }else {
          echo "Lo importante que hay salud";
      }
      myqli_close($con);


    }else {
        echo "Contraseña incorrecta";
    }

}


?>