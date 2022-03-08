<?php
session_start();
require '../library/koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($conn, "SELECT * FROM tb_mahasiswa WHERE npm='".$username."' AND password='".$password."' ");

if($query == false){
    echo("Error description: " . mysqli_error($conn));
}else{
    if(mysqli_num_rows($query) == 1){ //jk
    $data = mysqli_fetch_assoc($query); // untuk mengambil data dari query
    //bikin sesion disimpan ke browser
        $_SESSION['npm'] = $data['npm'];
        $_SESSION['role'] = $data['role']; 
        $_SESSION['nama'] = $data['nama'];
        header("location:../dashboard.php");    
    }else{
        //script javacript untuk mengembalikan ke halaman login jika user dan pasword salah
        echo '<script> alert("password yang anda masukan salah!"); window.location.href=",,/index.php"; </script';
    }
}
?>