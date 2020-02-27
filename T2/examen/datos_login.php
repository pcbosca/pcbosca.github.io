<?php
/* copia limpia */
$frm_usuari = trim($_POST["usuario"]);
$frm_contrasenya = trim($_POST["contrasena"]);

/* leo datos del archivo */
$arxiu = fopen("login.txt", "r") or die("ERROR FATAL!!!");
$usuari = trim(fgets($arxiu));
$contrasenya = trim(fgets($arxiu));
fclose($arxiu);

if ((strcmp($usuari, $frm_usuari) == 0) &&
    (strcmp($contrasenya, $frm_contrasenya) == 0)
) {
    /* salta a la página autorizada */
    //include "private.php";
    header("Location: private.php");

} else {

    header("Location: index.php");
}
?>