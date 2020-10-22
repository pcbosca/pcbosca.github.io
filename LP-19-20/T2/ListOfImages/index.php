<?php

$filename = "imagenes.txt";
$miArchivo = fopen($filename, "r") or die("No puedo abrir el archivo: " . $filename);

/* leer y mostrar todo el archivo leyendolo linea a linea */
while (!feof($miArchivo)) {
    /* leer y mostrar una linea del archivo */
    echo "<img src='../images/" . trim(fgets($miArchivo)) . "' width='300px'>" . "<br>\n";
}

fclose($miArchivo);

?>