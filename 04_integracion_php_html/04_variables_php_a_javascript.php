<?php
$lenguajes = array(
    array(
        "id" => 0,
        "name" => "c++"
    ),
    array(
        "id" => 1,
        "name" => "c#"
    ),
    array(
        "id" => 2,
        "name" => "python"
    )
);

$otra_variable = 21;
$algun_nombre = "Jesus";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        let lenguajes = JSON.parse('<?= json_encode($lenguajes) ?>');
        let otra_variable = <?= $otra_variable ?>;
        let nombre = '<?= $algun_nombre ?>';
        console.log(lenguajes)
    </script>
    <script src="./04_variables_php_a_javascript.js"></script>
</body>

</html>