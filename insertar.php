<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "Ejemplo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $localidad = $_POST['localidad'];

    $sql = "INSERT INTO nombres (nombre, edad, localidad) VALUES ('$nombre', '$edad', '$localidad')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
