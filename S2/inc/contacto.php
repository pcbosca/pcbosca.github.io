<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio - Contacto</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<div class="container">
<?php

/* incluir el header del web */
include "header.html";
?>
    <div class="topnav" id="myTopnav">
    <a href="index.php">Inicio</a>
    <a href="#" class="active">Contacto</a>
    <a href="javascript:void(0);" class="icon" onclick="desplegar_menu()">
        <i class="fa fa-bars"></i>
    </a>
    </div>
    <main>

    <h1>Contactar</h1>
    <img src="images/iconmonstr-facebook-4-120.png" alt="Facebook">
    <img src="images/iconmonstr-instagram-11-120.png" alt="Instagram">
    <img src="images/iconmonstr-twitter-1-120.png" alt="Twitter">
    </main>
<?php

/* incluir el footer y script del web */
include "footer.html";
?>
</div>
</body>
</html>