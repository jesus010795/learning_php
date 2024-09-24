<?php
include "./person.php";
include "./user.php";
include "./admin.php";


$user = new User;
$user->type = new Admin(1, "Jesus", "Cruz");

echo "<pre>";
echo $user->type->greet();
echo "</pre>";

?>