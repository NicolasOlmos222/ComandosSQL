<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    //Podemos reemplazar id por lo que queremos buscar
    $sql = "DELETE FROM nombres WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado exitosamente";
    } else {
        echo "Error eliminando el registro: " . $conn->error;
    }

    $conn->close();
}
?>
