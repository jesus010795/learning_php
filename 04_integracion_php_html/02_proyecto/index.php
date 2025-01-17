<?php

$data = [...$_POST];

function data_validation_form($data){
    foreach ($data as $key => $value) {
        if ( empty($value)) {
            return false;
        }

        return true;
    }
}

if (isset($_POST["input-form"])) {
    $validate = data_validation_form($data);
    if ($validate){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Logica mandar correo


    } else {
        echo "Return false";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="hero">
        <div class="hero__bg-img">
        </div>
        <div class="hero__content">
            <h2 class="hero__contact"> 
                Ponte en contacto
            </h2>
            <span class="hero__icon">
                <i class="fa-regular fa-envelope"></i>
            </span> 
        </div>
    </section>
    <section class="contact__container">
        <section class="contact__description">
            <h2 class="contact__title">¡QUEREMOS ESCUCHARTE!</h2>
            <p class="contact__description">Para nosotros tu opinión es lo más importante.</p>
        </section>
        <section class="contact__form-container">
            <form action="" method="post" class="form">
                <input type="text" name="name" placeholder="Nombre">
                <input type="email" name="email" placeholder="E-mail">
                <input type="number" name="phone" placeholder="Telefono">
                <textarea placeholder="Dejanos tu mensaje" name="message" id="" class=""></textarea>

                <input type="submit" value="Enviar" name="input-form">
            </form>
        </section>
    </section>
    <footer class="footer">
        <section class="footer__description"></section>
        <section class="footer__social"></section>
        <div class="footer__logo"></div>
        <div class="footer__details"></div>
        <div class="footer__develop"></div>
    </footer>
</body>
</html>