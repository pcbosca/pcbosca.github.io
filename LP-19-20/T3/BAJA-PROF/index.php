<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baja - Profesor</title>
    <style>
    div {
        text-align: center;
    }
    </style>
</head>

<body>
    <div>
        <h1>Borrar profesor</h1>
        <p>Selecciona un profesor del siguiente menú:</p>
        <form action="baja-profesor.php">
            <label for="profesor">Profesor </label>
            <select id="profesor" name="profesor">
                <option value="0">Seleccione:</option>
                <?php
                require "conectarBD.php";

                $sql = "SELECT * FROM profesores";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<option value='$row[cod_profesor]'>$row[nombre] | $row[apellidos] | $row[asignatura]</option>\n";
                }

                mysqli_close($conn);
                ?>
            </select>
            <input type="submit" value="Borrar">
        </form>
    </div>
</body>

</html>