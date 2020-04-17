<?php
$dbServername = "localhost";
$dbUsername = "prod";
$dbPassword = "MctR9@}s";
$dbName = "projeto_php";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
mysqli_set_charset($conn, 'utf8');