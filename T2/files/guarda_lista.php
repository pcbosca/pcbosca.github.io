<?php
$miArchivo = fopen("C:\\Users\\Pascual\\Desktop\\personas.txt", "w") or die("No puedo crear el archivo: datos.txt");

$lista = array("Pep Garcia, 40, panadero, Barcelona\n", "Joan Llopis, 20, electricista, Girona\n", "Maria Forcadell, 18, diseñadora, Tarragona\n");
$lista_longitud = count($lista);

/* Bucle WHILE para guardar el array */
/* $i = 0;
while ($i < $lista_longitud) {
    $res = fwrite($miArchivo, $lista[$i]);

    if ($res == false) {
        die("No puedo escribir en el archivo: personas.txt");
    } else {
        echo "<h2>Datos de " . $lista[$i] . " escritos correctamente</h2>";
    }
    $i++;
} */
/* Bucle FOR para guardar el array */
for ($i = 0; $i < $lista_longitud; $i++) {
    $res = fwrite($miArchivo, $lista[$i]);

    if ($res == false) {
        die("No puedo escribir en el archivo: personas.txt");
    } else {
        echo "<h2>Datos de " . $lista[$i] . " escritos correctamente</h2>";
    }
}
fclose($miArchivo);
?>