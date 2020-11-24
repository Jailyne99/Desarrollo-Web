<?php
   ob_start();
   session_start();

   include 'php/conexion.php';
  
   if(isset($_SESSION['usuario'])){
      header("Location: todos.php");
   }
?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">

     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/stylelogin.css">
     <link rel="icon" href="img/favicon.ico">

    <title>Bienvenido a FOTKA</title>
  </head>
  <body class="bg-dark">

    <form method="POST">     
    <section>
        <div class="row g-0">
            <div class="col-lg-7">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="img/inicio1.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/inicio2.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/inicio3.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="img/inicio4.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden"></span>
                    </a>
                  </div>
            </div>

            <div class="col-lg-5">
                 <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4">
                    <br>
                    <br>
                   <img src="img/logo.PNG"  class="img-fluid" alt="">
                 </div>
                 <div class="px-lg-5 py-lg-4 p-4">
                    <h1 class="font-weight-bold mb-4">Bienvenido de vuelta</h1>
                    <form>
                        <div class="mb-4">
                          <label for="validationDefault01" class="form-label font-weight-bold" >Usuario</label>
                          <input type="text" name="nombrelog" class="form-control bg-dark-x border-0" placeholder="Ingresa tu usuario o correo" required>
                        </div>
                        <div class="mb-5">
                          <label for="exampleInputPassword1" class="form-label font-weight-bold">Contraseña</label>
                          <input type="password" name="contrasenialog" class="form-control bg-dark-x border-0 mb-2" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <button type="submit" name="botonlog" class="btn btn-outline-light w-100">Iniciar Sesión</button>
                        
                        <?php

                        if(isset($_POST['botonlog'])){
                         $USER = $_POST['nombrelog'];
                         $CONTRA = $_POST['contrasenialog'];
                         //echo $USER;
                         $CONTRA=hash('sha512',$CONTRA);
                   
                         $query = mysqli_query($con,"SELECT * FROM usuario WHERE nombre = '$USER'
                          AND contrasenia ='$CONTRA' OR correo = '$USER' AND contrasenia = '$CONTRA'");
                   
                         $NUM = mysqli_num_rows($query);
                   
                         if($NUM==1){
                          while($row=mysqli_fetch_row($query)){
                           if(($USER==$row[1] && $CONTRA==$row[6])
                           || ($USER==$row[5] && $CONTRA==$row[6])){
                             
                             $_SESSION['usuario']=$row[1];
                             $_SESSION['id']=$row[0];
                             echo "Ingresaste correctamente.  Loading ...";
                             header("Refresh:5; url=todos.html");
                           }
                          }
                         }else{
                           echo "No existe usuario con ese nombre o contraseñia";
                         }
                        }    
                        
                        ?>
                   
                            



                      </form>

                      <br>
                      <br>
                      <a href="registro.php" id="boton" class="registro text-decoration-none font-weight-bold text-white">Crear cuenta Registrate</a>
                      
                 </div>

            </div>

        

           <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
        </div>
    </section>









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper.js and Bootstrap JS
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
ob_end_flush();
?>