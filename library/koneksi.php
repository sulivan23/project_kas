<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "db_kas";

$conn = mysqli_connect($host, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Connected successfully";
    mysqli_close($conn);
    ?>