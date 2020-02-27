<?php
/* recojo datos del formulario */
/* echo "<h1>Formulario</h1>";
echo "<h2>Usuario: " . $_POST["usuario"] . "</h2>";
echo "<h2>Contraseña: " . $_POST["contrasena"] . "</h2>"; */

/* copia limpia */
$frm_usuari = trim($_POST["usuario"]);
$frm_contrasenya = trim($_POST["contrasena"]);

/* leo datos del archivo */
$arxiu = fopen("login.txt", "r") or die("ERROR FATAL!!!");
$usuari = trim(fgets($arxiu));
$contrasenya = trim(fgets($arxiu));
fclose($arxiu);

/* Compara los datos pasados por el formulario con los datos guardados en el archivo */
/* echo "<h1>Archivo: login.txt</h1>";
echo "<h2>Usuario: " . $usuari . "</h2>";
echo "<h2>Contraseña: " . $contrasenya . "</h2>"; */

if ((strcmp($usuari, $frm_usuari) == 0) &&
    (strcmp($contrasenya, $frm_contrasenya) == 0)
) {
    /* salta a la página autorizada */
    //include "principal.html";
    header("Location: principal.html");
    //header("Location: http://www.elmundo.es");
} else {
    //echo "<h1>Acceso no autorizado</h1>";
    header("Location: index.php");
}
?>