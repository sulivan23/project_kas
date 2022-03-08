<?php
session_start();
if(isset($_SESSION['role']) == false){
    header("location:index.php");
}
echo "NPM : ". $_SESSION['npm']. "<br>";
echo "role : ". $_SESSION['role']. "<br>";
echo "nama : ". $_SESSION['nama']. "<br>";?>
<a href="proses/proses_logout.php">Logout</a>

