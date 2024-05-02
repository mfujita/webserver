<?php
$server="localhost";
$user="root";
$pass="";
$db="estercontabilidade";

$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die("Falha de conexão " . mysqli_error());
}
?>