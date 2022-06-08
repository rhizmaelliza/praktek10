<?php
//perintah memuat isi koneksi.php ke dalam file 
include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM guestbook WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    // Mengecek apakah query berhasil
    if( $query ){
        header('Location: cetakguestbook.php');
    // Jika gagal maka akan muncul pesan berikut
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>