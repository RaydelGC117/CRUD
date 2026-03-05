<?php
require __DIR__ . '/includes/funciones.php';

/** * PROCESAMIENTO DE ELIMINACIÓN
 */

//  Verificamos si el ID llega por POST (método más seguro)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT); // Validamos que sea un número real
    
    if($id) {
        eliminar_usuario($id);
    }
    header('Location: index.php');
    exit;

// Verificamos si el ID llega por GET (el enlace que pusiste en index.php)
} else if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    
    if($id) {
        eliminar_usuario($id);
    }
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Usuario</title>
    <link rel="stylesheet" href="build/css/styles.css">
</head>
<body>

<nav>
    <a href="index.php">Inicio</a>
</nav>

<div class="container">
    <?php if(!isset($_GET['id']) && !isset($_POST['id'])): ?>
        <div style="text-align: center; margin-top: 50px;">
            <h2 style="color: #dc2626;">Error: No se proporcionó un ID válido.</h2>
            <p>Para eliminar un usuario, debes hacerlo desde la tabla principal.</p>
            <br>
            <a href="index.php" class="button" style="background: #2563eb; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px;">Volver al inicio</a>
        </div>
    <?php endif; ?>
</div>

</body>
</html>