<?php
session_start();
if (!isset($_SESSION['roll'])) {
    header("location:../index.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
</head>

<body>
    <a href="logout.php">ESTO ES HOME DE USER</a>

    <div class="user-info">
        Usuario: <?php echo $_SESSION['nombre']; ?>
        (ID: <?php echo $_SESSION['id']; ?>)
    </div>

</body>

</html>