<?php
$miArchivo = fopen("C:\\Users\\Pascual\\Desktop\\personas.txt", "a") or die("No puedo crear el archivo: datos.txt");

$persona = "Pep Garcia, 40, panadero, Barcelona\n";
$res = fwrite($miArchivo, $persona);
if ($res == false) {
    die("No puedo escribir en el archivo: personas.txt");
} else {
    echo "<h2>Datos escritos correctamente</h2>";
}

$persona = "Joan Llopis, 20, electricista, Girona\n";
$res = fwrite($miArchivo, $persona);
if ($res == false) {
    die("No puedo escribir en el archivo: personas.txt");
} else {
    echo "<h2>Datos escritos correctamente</h2>";
}

fclose($miArchivo);
?>