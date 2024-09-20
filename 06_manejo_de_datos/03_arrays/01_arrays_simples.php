<?php
//Arrays indexado

$courses = ["Js", 'PHP', 'Laravel', 'Python', 'html'];

echo "<pre>";
print_r($courses);
echo "Iterando con foreach <br>";
foreach ($courses as $course) {
    echo "<br>";
    print_r($course);
}
echo "</pre>";



$users_age = [
    "Jesus" => 29,
    "Martha" => 28,
    "Anaissa" => 32,
    "Anahi" => 8
];

echo "<pre>";
print_r($users_age);
echo "Iterando con foreach <br>";
foreach ($users_age as $user => $age) {
    echo "Usuario: $user - Edad: $age <br>";
}
echo "</pre>";


echo "<pre>";

array_walk($courses, function ($course){
    if ($course == "html"){
        echo "<pre>";
        echo "Curso frontend: $course";
        echo "</pre>";
    } else {
        echo "<pre>";
        echo "Curso: $course";
        echo "</pre>";
    }
});

echo "</pre>";



?>