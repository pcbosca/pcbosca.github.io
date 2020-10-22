<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera página en PHP</title>
    <style>
        
        .red {
            color: red;
        }
    </style>
</head>
<body>
<?php
// Este es mi primer comentario de PHP
# Este es mi segundo comentario de PHP

$mensaje = "<h1 class='red'>Hola Mundo desde PHP!!!</h1>";
echo $mensaje;

$numero1 = 45;
$numero2 = 73;
$resultado = $numero1 + $numero2;

print "El resultado es: " . $resultado;

// PUEDO PASAR HTML, CSS y JS desde PHP --- MUY IMPORTANTE ---
$mensaje = "<script> alert('Hola soy JS desde PHP') </script>";
echo $mensaje;

echo "<br>";
$lista = array(15, 10, 20);

var_dump($lista);

echo "<br>";

Echo $lista[1];

?>
</body>
</html>