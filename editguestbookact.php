<?php

include "koneksi.php";

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['update'])){

    // ambil data dari database
    $id = $_POST['id'];
    $posted = $_POST['posted'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $message = $_POST['message'];

    // buat query update
    $sql = "UPDATE guestbook SET posted='$posted', name='$name', email='$email', address='$address', city='$city', message='$message' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);

    // Mengecek apakah query berhasil
    if( $query ) {
        // pengalihan apabila berhasil
        header('Location: cetakguestbook.php');
    } else {
        // jika gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>