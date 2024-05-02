<?php
$server="localhost";
$user="root";
$pass="";
$db="bancoimagens";

$conn=mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die("Falha de comunicação " . mysqli_error());
}
?>