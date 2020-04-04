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
?>