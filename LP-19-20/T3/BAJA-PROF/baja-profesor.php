<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja - Profesor - Resultado</title>
</head>

<body>
    <?php
require "conectarBD.php";

// sql to delete a record
$sql = "DELETE FROM profesores WHERE cod_profesor=$_GET[profesor]";

if (mysqli_query($conn, $sql)) {
    echo "<h2>Registro borrado con éxito</h2>";
} else {
    echo "Error borrando registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</body>

</html>