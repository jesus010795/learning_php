<?php
setcookie(
    name: "header_color",
    value: "#9fd5d1",
);

$color = $_COOKIE["header_color"] ?? "#e30052";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cookies</title>
</head>
<body>

    <div class="header" style="
        background: <?= $color ?>
    ">
        <h1>Prueba</h1>
    </div>
    
</body>
</html>