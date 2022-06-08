<?php
//perintah memuat isi koneksi.php ke dalam file
include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    //query insert data formulir ke dalam database
    $sql = "INSERT user set username='$username', password='$password'";
    mysqli_query($koneksi, $sql) or die("Proses menyimpan gagal");
    mysqli_close($koneksi);
    header("location:beranda.php");
    
?>