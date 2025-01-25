<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
    <title>Lista de ingresos</title>

</head>
<body>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Metodo de pago</th>
                    <th>Tipo</th>
                    <th>Fecha</th>
                    <th>Cantidad</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result): ?>
                    <tr>
                        <td> <?=$result["payment_method"] ?> </td>
                        <td> <?=$result["type"] ?> </td>
                        <td> <?=$result["date"] ?> </td>
                        <td class="amount"> <?= "$".$result["amount"] ?> </td>
                        <td> <?=$result["description"] ?> </td>
                    </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
        <a class="button"  href="/incomes/create">Agregar</a>
    </div>

</body>
</html>