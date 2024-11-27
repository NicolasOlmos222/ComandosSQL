<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo CRUD</title>
</head>
<body>
    <h2>Insertar Datos</h2>
    <form action="insertar.php" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Edad: <input type="text" name="edad"><br>
        Localidad: <input type="text" name="localidad"><br>
        <input type="submit" value="Insertar">
    </form>

    <h2>Modificar Datos</h2>
    <form action="modificar.php" method="post">
        ID: <input type="text" name="id"><br>
        Nombre: <input type="text" name="nombre"><br>
        Edad: <input type="text" name="edad"><br>
        Localidad: <input type="text" name="localidad"><br>
        <input type="submit" value="Modificar">
    </form>

    <h2>Eliminar Datos</h2>
    <form action="eliminar.php" method="post">
        ID: <input type="text" name="id"><br>
        <input type="submit" value="Eliminar">
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Localidad</th>
        </tr>
        <?php include 'mostrar.php'; ?></php>
        
    </table>
</body>
</html>
