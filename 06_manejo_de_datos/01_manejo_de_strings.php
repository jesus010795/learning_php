<?php

$data = "Estudio PHP";

// echo $data[0];

$get_post = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quisquam fuga quam excepturi et dolore deleniti libero! Quasi odit architecto autem dicta perspiciatis officia perferendis suscipit molestias? Earum, modi dicta.";

$extract = substr($get_post,0,20);


$languages = 'Javacript, Python, Php'; 
// Estos podrian ser datos obtenidos de un formulario
$tags = explode(",", $languages); 
// De esta forma separamos cada dato convertido en un array para despues guardarlo en una base de datos.


$courses = ["javascript", "marketing", "laravel"];

$course = "    Curso php    ";
$course_whitout_spaces = trim($course); // Funcion para eliminar espacios

echo "<pre>";
echo "$extract ... [Ver mas]";
print_r($tags);
echo implode(",", $courses);
echo "\n";
echo "Quiero aprender $course y otra cosa \n";
echo "Quiero aprender $course_whitout_spaces, y otra cosa \n";
echo "</pre>";

?>