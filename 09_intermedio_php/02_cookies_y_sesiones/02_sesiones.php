<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>

<?php if (isset($_SESSION["id"])): ?>
    <h1>Bienvenido <?=$_SESSION["username"] ?> </h1>
    <h2>Tu email es: <?= $_SESSION["email"]?></h2>
<?php else: ?>
    <h1>No estas logueado </h1>
<?php endif; ?>
    
</body>
</html>