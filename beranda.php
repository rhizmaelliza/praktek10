<?php
include 'koneksi.php';
// set menjadi bahasa Indonesia
setlocale(LC_ALL, 'id-ID', 'id_ID');

// mengambil data nama dari database
$query =mysqli_query($koneksi, "SELECT name FROM user");
$result=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Login Berhasil</title>
</head>

<body>
    <!--bagian box formulir-->
    <section class="box-formulir">
        <div class="box">
            <h2><center>Selamat datang</h2>
            <h2><b><center> <?php echo $result['name'] ?></h2>
            <h3><center> Waktu saat ini <?php echo strftime("%A, %d %B %Y", strtotime('2022-06-09'))?></h3>
                <br>
            <div class="box-kecil"><center>
                <table>
                <tr>
                <td width="175px"><a href="formguestbook.php" type="submit" class="btn-daftar">Input Guestbook</a></td>
                <td width="175px"><a href="cetakguestbook.php" type="submit" class="btn-daftar">Lihat Guestbook</a></td>
                <td width="175px"><a href="formlogout.php" type="submit" class="btn-daftar">Logout</a></td>
                </tr>
            </table>
            </div>
        </div>
    </section>
</body>

</html>