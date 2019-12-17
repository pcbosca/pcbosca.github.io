<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php
$navegador = $_SERVER['HTTP_USER_AGENT'];

if (strpos($navegador, "Firefox") !== FALSE) {
    //echo "<title>Navegador Firefox</title>";
    //echo "<style>";
    //echo ".rojo {";
    //echo "    color: red;";
    //echo "}";
    //echo ".azul {";
    //echo "color: blue;";
    //echo "}";
    //echo "</style>";
    //echo "</head>";
    //echo "<body>";
    //echo "<h1 class='rojo'>Estás navegando desde FIREFOX</h1>";
    //echo "<p> Esta página es para firefox</p>";
    //echo "<img src='images/Koala.jpg'>";

    include "pag_firefox.php";
} else if (strpos($navegador, "Chrome") !== FALSE) {
    echo "<h1>Estás navegando desde CHROME</h1>";
} else if (strpos($navegador, "Trident") !== FALSE) {
    echo "<title>Navegador Internet Explorer</title>";
    echo "<style>";
    echo ".rojo {";
    echo "    color: red;";
    echo "}";
    echo ".azul {";
    echo "color: blue;";
    echo "}";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<h1 class='rojo'>Estás navegando desde Internet explorer</h1>";
    echo "<p> <strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";
    echo "<img src='images/Tulips.jpg'>";
    echo "<img src='images/Lighthouse.jpg'>";
} else if (strpos($navegador, "Safari") !== FALSE) {
    echo "<h1>Estás navegando desde SAFARI</h1>";
} else {
    echo "<h1>No sé qué navegador estás usando.</h1>";
}
?>
</body>
</html>