<?php

$miArchivo = fopen("datos.txt", "r") or die("No puedo abrir el archivo: datos.txt");

/* leer y mostrar todo el archivo */
/*echo fread($miArchivo, filesize("datos.txt"));*/

/* leer y mostrar todo el archivo leyendolo linea a linea */
while (!feof($miArchivo)) {
    /* leer y mostrar una linea del archivo */
    echo fgets($miArchivo) . "<br>";
}

fclose($miArchivo);

?>