<?php
/* copia limpia */
$frm_contrasenya = trim($_POST["psw"]);

/* leo datos del archivo */
$arxiu = fopen("password.txt", "r") or die("ERROR FATAL!!!");
$contrasenya = trim(fgets($arxiu));
fclose($arxiu);

if (strcmp($contrasenya, $frm_contrasenya) == 0) {
    /* salta a la página autorizada */
    header("Location: http://www.elmundo.es");
} else {
    header("Location: index.html");
}
?>