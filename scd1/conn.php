<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "cc2024";

$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    die ("Falha de conexão " . mysqli_connect_error());
}
?>