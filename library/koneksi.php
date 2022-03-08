<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "db_kas";

$conn = mysqli_connect($host, $username, $password, $db);
if(!$conn){
    echo "Database gagal terhubung";
}