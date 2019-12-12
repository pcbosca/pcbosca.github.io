<?php

$locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
echo $locale . "<br>";

$lang = substr($locale, 0, 2);
echo $lang;

switch ($lang) {
case "es":
//echo "PAGE ES";
    //include("index_es.php");//puede ser header(Location...) u otra cosa
    header('Location: index_es.php');
    break;
default:
//echo "PAGE EN - Configuración por defecto";
    include "index_en.php"; //incluye página en inglés, o en otro idioma, si se detecta otro tipo de lengua no indicada en los case
    break;
}

?>