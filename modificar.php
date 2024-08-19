<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Asegúrate de tener un identificador único
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $localidad = $_POST['localidad'];

    //Podemos reemplazar id por lo que queremos buscar
    $sql = "UPDATE nombres SET nombre='$nombre', edad='$edad', localidad='$localidad' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "Error actualizando el registro: " . $conn->error;
    }

    $conn->close();
}
?>
