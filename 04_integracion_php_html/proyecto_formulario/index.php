<?php
require "mail.php";

$data_form = [...$_POST];
function validation($data) {
    foreach ($data as $key => $value) {
        if(empty($value)){
            return false;
        }
    }
    return true;
}

$state = "";

if (isset($_POST['form_submit'])) {
    
    if (validation($data_form)){

        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];
        $city = $_POST['city'];
        $postal_code = $_POST['postal_code'];
        $subject = $_POST['subject'];
        $comments = $_POST['comments'];

        // // Logica para mandar correo
        $body = "Mensaje enviado por: $name $lastname <br> <br> Contenido: $comments";
        sendMail($subject, $body, $email, $name, true);

        $state = "succes";

    } else {
        $state = "danger";
    }
    // echo "Formulario enviado";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>

</head>
<body>
    <header>
        <nav></nav>
    </header>

    <div class="container">
        <div class="hero-contact">
            <h3 class="hero-contact__title">Contactanos</h3>
            <p class="hero-contact__work">Trabajemos juntos</p>
        </div>
    </div>

    <section class="contact container">

        <section class="contact__info">

            <div class="info__cards">
                <div class="cards__card">
                    <i class="fa-solid fa-location-dot card__icon"></i>
                    <p class="card__title">Direccion</p>
                    <p class="card__description">Your address goes here</p>
                </div>
                <div class="cards__card">
                    <i class="fa-solid fa-envelope card__icon"></i>
                    <p class="card__title">Email</p>
                    <p class="card__description">demo@example.com</p>
                </div>
                <div class="cards__card">
                    <i class="fa-solid fa-phone card__icon"></i>
                    <p class="card__title">Telefono</p>
                    <p class="card__description">0123 456 789</p>
                </div>
            </div>
        </section>

        <p class="contact__description">Si te interesa una cotización rellena el siguiente formulario y nos pondremos en contacto.</p>

        
        
        
        <?php if($state == "succes"):?>
            <div class="alert succes">
                <span>Mensaje enviado con exito!</span>
            </div>
        <?php endif; ?>
        
        <?php if($state == "danger"): ?>
            <div class="alert danger">
                <span>Surgio un problema</span>
            </div>
        <?php endif; ?>
    

        <form class="contact__form" action="./" method="post" enctype="multipart/form-data" id="form">

            <input class="form__input" type="text" id="name" name="name" placeholder="Nombre">
    
            <input class="form__input" type="text" id="last_name" name="last_name" placeholder="Apellido">
    
            <input class="form__input" type="text" id="company" name="company" placeholder="Compania">
    
            <input class="form__input" type="email" name="emali" id="email" placeholder="Email">
    
            <input class="form__input" type="tel" name="telephone" id="telephone" placeholder="Tel.">
    
            <input class="form__input" type="text" name="city" id="city" placeholder="Ciudad">
            
            <input class="form__input" type="text" name="postal_code" id="postal_code" placeholder="Codigo Postal">
            
            <input class="form__input" type="text" name="subject" id="subject" placeholder="Asunto">

            
            <textarea class="form__input" name="comments" id="comments" form="form">Comentarios</textarea>
    
            <input class="form__submit btn" name="form_submit" type="submit" value="Enviar">
        </form>

        <section class="contact__map">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d422.2331893554455!2d-103.4364143898851!3d20.54107412358911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842f515a9e6254ab%3A0x8c8a7e1b9d169197!2sPigore%20Ingenieria%2C%20S.A.%20De%20C.V.!5e0!3m2!1ses-419!2smx!4v1719379994333!5m2!1ses-419!2smx"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
    </section>
    <footer class="footer">
        <section class="wrap">
            <div class="footer__wrapper container">
                <div class="footer__company-description ">
                    <p class="company__logo">
                        <i class="fa-solid fa-pen-ruler logo__icon"></i> <span class="logo__name">Empresa</span>
                    </p>
                    <p class="company__some-details">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae quaerat soluta aliquid consectetur ipsa. Ipsam animi at. Modi nobis minima sunt officiis soluta, cupiditate temporibus magni at quis deleniti veniam impedit eiusntium corporis similique.
                    </p>
                </div>
                <section class="footer__contact">
                    <p class="contact__title">Contactanos</p>
                    <p class="contact__item">Direccion: <span class="contact__item-description">Your address goes here</span></p>
                    <p class="contact__item">Email: <span class="contact__item-description">demo@example.com</span>
                    </p>
                    <p class="contact__item">Telefono: <span class="contact__item-description">0123 456 789</span>
                    </p>
                </section>
                <section class="footer__social">
                    <p class="social__title">Siguenos:</p>
                    <ul class="social__list">
                        <li class="social__item">
                            <a href="" class="social__link">
                                <i class="fa-brands fa-facebook social__icon"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="" class="social__link">
                                <i class="fa-brands fa-tiktok social__icon"></i>
                            </a>
                        </li>
                        <li class="social__item">
                            <a href="" class="social__link">
                                <i class="fa-brands fa-instagram social__icon"></i>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>
            
        </section>
        <section class="footer__copy">
            <p>
                &copy; 2024 Page made whit &hearts; by  <a href="https://github.com/jesus010795">JCD</a>
            </p>
        </section>
    </footer>
    
</body>
</html>