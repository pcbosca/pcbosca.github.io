<?php

// Develve una cadena con información del lado del cliente: navegador, SO, ..
$navegador = $_SERVER['HTTP_USER_AGENT'];

// IE
if (strpos($navegador, "Trident") !== FALSE) {
    require "ie.html";
} else if (strpos($navegador, "Firefox") !== FALSE) { // FIREFOX
    require "firefox.html";
} else if (strpos($navegador, "Chrome") !== FALSE) { // CHROME
    require "chrome.html";
} else if (strpos($navegador, "Safari") !== FALSE) { // SAFARI
    print "<h1>Estás navegando con Safari</h1>";
} else { // NAVEGADOR DESCONOCIDO
    print "<h1>No sé con que navegador estás navegando</h1>";
}

?>

