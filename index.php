<?php
    require __DIR__ . '/includes/funciones.php';
    $resultado = obtener_usuarios();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD</title>
    <link rel="stylesheet" href="build/css/styles.css">
</head>
<body>
    <header>
        <h1>Sistema CRUD de Usuarios</h1>
    </header>
    <nav>
        <a href="agregar.php">Agregar Usuario</a>
        </nav>
    <div class="container">
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Ciudad</th>
                <th>Acciones</th> </tr>
            <?php while($fila = mysqli_fetch_assoc($resultado)): ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['apellido']; ?></td>
                <td><?php echo $fila['email']; ?></td>
                <td><?php echo $fila['telefono']; ?></td>
                <td><?php echo $fila['ciudad']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $fila['id']; ?>" style="color: #2563eb;">Editar</a> | 
                    <a href="eliminar.php?id=<?php echo $fila['id']; ?>" 
                       style="color: #dc2626;" 
                       onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <script src="js/validar.js"></script>
</body>
</html>