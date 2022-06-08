<?php
include 'koneksi.php';

// mengambil data nama dari database
$query =mysqli_query($koneksi, "SELECT name FROM user");
$result=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Logout</title>
</head>
<body>
    <!--bagian box formulir-->
    <section class="box-formulir">
        <div class="box">
            <h2><center>Log Out Berhasil!</h2>
            <br>
            <h3><center>Terima kasih <?php echo $result['name'] ?> telah mengunjungi website kami ^-^</h3>
            <h3><center>Sampai jumpa kembali! Have a nice day!</h3>
        </div>
    </section>
</body>
</html>