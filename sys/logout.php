<?php
session_start();

if(isset($_SESSION['nombre']) && isset($_SESSION['id']) && isset($_SESSION['roll'])) {
    $nombre = $_SESSION['nombre'];
    $id = $_SESSION['id'];
    $roll = $_SESSION['roll'];
    
    
    session_destroy();
    
    
    echo "<h2>Sesión cerrada</h2>";
    echo "<p>Cerrar sesión como: $nombre (ID: $id, Rol: $roll)</p>";
    echo "<a href='../index.php'>Volver al inicio</a>";
} else {
    header("location:../index.php");
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG OUT</title>
</head>
<body>
    <a href="../index.php"> LOGOUT</a>
</body>
</html>