<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP + SQL</title>
</head>

<body>

    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$sql = "SELECT nombre, apellidos, curso, correo, fecha_nacimiento FROM alumnos WHERE curso = 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br> nombre: " . $row["nombre"] . " - apellidos: " . $row["apellidos"] . " - curso: " . $row["curso"] . " - correo: " . $row["correo"] . " - fecha de nacimiento: " . $row["fecha_nacimiento"] . "<br>";
    }
} else {
    echo "0 resultados";
}

mysqli_close($conn);

?>
</body>

</html>