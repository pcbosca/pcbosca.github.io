<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navegador del cliente</title>
    <style>
    .rojo {
        color: red;
    }
    .azul {
        color: blue;
    }
    </style>
</head>
<body>
<?php
$navegador = $_SERVER['HTTP_USER_AGENT'];

if (strpos($navegador, "Firefox") !== FALSE) {
    echo "<h1 class='rojo'>Estás navegando desde FIREFOX</h1>";
} else if (strpos($navegador, "Chrome") !== FALSE) {
    echo "<h1>Estás navegando desde CHROME</h1>";
} else if (strpos($navegador, "Trident") !== FALSE) {
    echo "<h1 class='azul'>Estás navegando desde INTERNET EXPLORER</h1>";
} else if (strpos($navegador, "Safari") !== FALSE) {
    echo "<h1>Estás navegando desde SAFARI</h1>";
} else {
    echo "<h1>No sé qué navegador estás usando.</h1>";
}
?>
</body>
</html>