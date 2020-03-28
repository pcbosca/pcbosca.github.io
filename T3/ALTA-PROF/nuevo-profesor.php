<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo profesor - Resultado</title>
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

// Datos del formulario
$frm_nombre = trim($_GET["nombre"]);
$frm_apellidos = trim($_GET["apellidos"]);
$frm_asignatura = trim($_GET["asignatura"]);

$sql = "INSERT INTO profesores (nombre, apellidos, asignatura)
VALUES ('" . $frm_nombre . "','" . $frm_apellidos . "','" . $frm_asignatura . "')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "<h2>Nuevo registro creado con éxito. El último ID insertado es: " . $last_id . "</h2>";
} else {
    echo "<h3>Error: " . $sql . "</h3>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>

</html>