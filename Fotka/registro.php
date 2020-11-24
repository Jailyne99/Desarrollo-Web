<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="css/styleregistro.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">

    <title>FOTKA Registrate</title>
  </head>
  <body>
     <section class="contact-box m-0">
       <div class="row no-gutters bg-dark ">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-muted">"Expresate,ayuda a las personas a ver”</h3>
                <p class="lead text-muted">No hay reglas para las buenas fotografías, son solo buenas fotografías.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Registrate</h1>
                    <p class="text-muted mb-5">Ingresa la siguiente información para registrarte.</p>
                    <form method="POST">
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Nombre <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Ingresa tu nombre" name="usuario" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Apellido <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Ingresa tu apellido" name="apellido" required>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Correo electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Ingresa tu correo electrónico" name="correo" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa una contraseña" name="contra1" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Verificación contraseña <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Ingresa una contraseña" name="contra2" required>
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input is-invalid" type="checkbox" aria-describedby="invalidCheck3Feedback" required>
                                <label class="form-check-label text-muted">Al seleccionar esta casilla aceptas nuestro aviso de privacidad y los términos y condiciones</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-light w-100" name="botton">Regístrate</button>
                        <hr>
                        <a href="login.php" id="boton" class="logueate text-decoration-none font-weight-bold text-white">Tengo Cuenta Login</a>
                                    
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
              echo "Bienvenido a FOTKA, YA TIENES CUENTA";
          }else {
              echo "Intenta nuevamente";
          }
          mysqli_close($con);
    
    
        }else {
            echo "Contraseña incorrecta";
        }
    
    }
    
    
    ?>



                    </form>
                </div>
           </div>
       </div>
   </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
</body>
</html>