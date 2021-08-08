<?php
require_once("User.php");

$id = random_int(1, 100000);
$user = new User ($id);

$user->setName("Henry");
$user->setlasname("Mendoza");

var_dump($user);
echo "<br><br>";
var_dump($user->getFullName());
echo "<br><br>";

//$user->id = 30;
$user->email= "a@a.a";
var_dump($user);
echo "<br><br>";

?>