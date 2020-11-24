<?php
   ob_start();
   session_start();

   
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    
    <title>Principal</title>
</head>
<style>
    body{
        margin: 0;
        background-color: #5e60ce;
        font-family: 'Roboto Condensed', sans-serif;
    }
    header{
        background-color: #5e60ce;
        width: 100%;
        height: 80px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .header__img{
        width: 200px;
        margin-top: 10px;
        margin-left: 10px;
        
    }
    .header__menu{
        margin-right: 30px;
    }
    .header__menu ul{
        display: none;
        list-style: none;
        padding: 0px;
        position: absolute;
        width: 100px;
        text-align: right;
        margin: 0px 0px 0px -14px;
    }
    .header__menu:hover ul, ul:hover{
        display: block;
    }
    .header__menu li{
        margin:  10px 0px;
    }
    .header__menu li a{
       color: white;
       text-decoration: none;       
    }
    .header__menu li a:hover{
        text-decoration: underline;  
    }
    .header__menu--profile{
       margin-right: 8px;
      /* width: 40px; */
       display: flex; 
       align-items: center;
    }
    .header__menu--profile img{
       margin-right: 8px;
       width: 40px; 
             
    }
    .header__menu--profile p{
      margin: 0px; 
      color: white;     
    }
</style>
<body>
    <header class="header">
      <img class="header__img" src="img/logopng.png" alt="">
      <div class="header__menu">
          <div class="header__menu--profile">
              <img src="./img/user-icon.png" alt="">
              <p>Perfil</p>
          </div>
          <ul>
              <li><a href="/">Cuenta</a></li>
              <li><a href="cerrar.php">Cerrar Sesión</a></li>
          </ul>
      </div>    
    </header>
    <section>
        <h2>¿A quién buscas?</h2>
        <input type="text">
    </section>
</body>
</html>