<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link type="text/php" href="php/registro.php"> -->

    <title>Registro</title>
</head>

<body>
    
    <form method="POST">
    Nombre
    <input type="text" name="usuario">
    Apellido
    <input type="text" name="apellido">
    Correo
    <input type="email" name="correo">
    Contraseñia
    <input type="password" name="contra1">
    Verificación contraseñia
    <input type="password" name="contra2">
    <button type="submit" name="botton">Registrar</button>
   
    <?php

include 'php/conexion.php';

if(isset($_POST['botton'])){
    $USER = $_POST['usuario'];
    $APE = $_POST['apellido'];
    $CORREO = $_POST['correo'];
    $CONTRA1 = $_POST['contra1'];
    $CONTRA2 = $_POST['contra2'];
    // echo $USER,$APE,$CORREO,$CONTRA1,$CONTRA2;

    if($CONTRA2==$CONTRA1){
        $CONTRA1 = hash('sha512',$CONTRA1);
      //  echo $CONTRA1;
      $query = mysqli_query($con,"INSERT INTO usuario (nombre,apellido,correo,contrasenia)
      VALUES ('$USER','$APE','$CORREO','$CONTRA1')");


      if(!mysqli_query($con,$query)){
          echo "CORRECTO";
      }else {
          echo "Lo importante que hay salud";
      }
      mysqli_close($con);


    }else {
        echo "Contraseña incorrecta";
    }

}


?>


    </form>
</body>


</html>