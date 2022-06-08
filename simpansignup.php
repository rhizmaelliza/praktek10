<?php
//perintah memuat isi koneksi.php ke dalam file
include "koneksi.php";
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $homepage = $_POST['homepage'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //query insert data formulir ke dalam database
    $sql = "INSERT user set name='$name', address='$address', email='$email', homepage='$homepage', username='$username', password='$password'";
    mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:formsignup.php");
?>