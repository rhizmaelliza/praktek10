<?php
//perintah memuat isi koneksi.php ke dalam file
include "koneksi.php";
    $posted = $_POST['posted'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    //Menambahkan data baru ke dalam database
    $sql = "INSERT guestbook set posted='$posted', name='$name', email='$email', address='$address', city='$city', message='$message'";
    mysqli_query($koneksi, $sql) or die("Proses simpan ke database gagal");
    mysqli_close($koneksi);
    header("location:cetakguestbook.php");
?>