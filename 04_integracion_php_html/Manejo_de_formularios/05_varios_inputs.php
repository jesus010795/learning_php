<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="05_server.php" method="post" enctype="multipart/form-data">

        <!-- ENVIAR ARRAYS POR MEDIO DEL FORMULARIO INPUTS SIMPLES-->
        <!-- <span>Envio de arreglos </span>
        <label>Personas</label>
        <input type="text" name="personas[]">
        <input type="text" name="personas[]"> -->

        <!-- ENVIO DE ARREGLOS ASOCIATIVOS -->
        <!-- <span>Envio de arreglos asociativos</span>
        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="usuario[nombre]">

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="usuario[email]">

        <p>Dirección:</p>
        <label for="calle">Calle</label>
        <input type="text" id="calle" name="usuario[direccion][calle]">

        <label for="numero">Numero</label>
        <input type="text" id="numero" name="usuario[direccion][numero]">
        
        <label for="ciudad">Ciudad</label>
        <input type="text" id="ciudad" name="usuario[direccion][ciudad]">-->

        <!-- ENVIO DE INPUTS DE TIPO CHECKBOX -->
        <p>CHECKBOX</p>
        <br>
        <input type="checkbox" name="colores[]" value="rojo">Rojo<br>
        <input type="checkbox" name="colores[]" value="verde">Verde<br>
        <input type="checkbox" name="colores[]" value="azul">Azul<br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>