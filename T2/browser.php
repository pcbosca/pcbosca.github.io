<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Averiguar el navegador del cliente</title>
<style>
.blue {
    color: blue;
}
</style>
</head>
<body>
<?php

// Develve una cadena con información del lado del cliente: navegador, SO, ..
$navegador = $_SERVER['HTTP_USER_AGENT'];

// IE
if (strpos($navegador, "Trident") !== FALSE) {
    echo "<h1>Estás navegando con Internet Explorer</h1>";
} else if (strpos($navegador, "Firefox") !== FALSE) { // FIREFOX
    echo "<h1 class='blue'>Estás navegando con Firefox</h1>";
} else if (strpos($navegador, "Chrome") !== FALSE) { // CHROME
    echo "<h1>Estás navegando con Chrome</h1>";
} else if (strpos($navegador, "Safari") !== FALSE) { // SAFARI
    echo "<h1>Estás navegando con Safari</h1>";
} else { // NAVEGADOR DESCONOCIDO
    echo "<h1>No sé con que navegador estás navegando</h1>";
}

?>
</body>
</html>

