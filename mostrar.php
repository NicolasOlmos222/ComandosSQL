<?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "Ejemplo";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT id, nombre, edad, localidad FROM nombres";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["edad"] . "</td>";
        echo "<td>" . $row["localidad"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay registros</td></tr>";
}

$conn->close();
?>
