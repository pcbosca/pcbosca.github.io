<?php

/*echo "<h1>Usuario: " . $_POST["usuario"] . "</h1>";
echo "<h2>Contraseña: " .$_POST["contrasena"] . "</h2>";*/

$archivo = fopen("login.txt", "w") or die ("ERROR FATAL!!!");

fwrite($archivo, $_POST["usuario"] . "\n");
fwrite($archivo, $_POST["contrasena"] . "\n");

fclose($archivo);

echo "<h2>Usuario registrado correctamente</h2>";

?>