<?php

$is_float = filter_var("Esto no es un float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
$is_float_t = filter_var(132.23, FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

$is_int = filter_var("Esto no es un entero", FILTER_VALIDATE_INT);
$is_int_t = filter_var(425, FILTER_VALIDATE_INT);

$is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);
$is_ip_t = filter_var("192.168.100.159", FILTER_VALIDATE_IP);

$is_url_t = filter_var("https://jesus.com", FILTER_VALIDATE_URL);
$is_url = filter_var("jesus.com", FILTER_VALIDATE_URL);

$is_email = filter_var("esto no es un email", FILTER_VALIDATE_EMAIL);
$is_email_t = filter_var("misi@fu.com.mx", FILTER_VALIDATE_EMAIL);


echo "<pre>";
echo "False \n";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
var_dump($is_email);
echo "True \n";
var_dump($is_float_t);
var_dump($is_int_t);
var_dump($is_ip_t);
var_dump($is_url_t);
var_dump($is_email_t);

echo "</pre>";


