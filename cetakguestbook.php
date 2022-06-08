<?php
include("koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cetak Guestbook</title>
</head>
<body>
    <table border="1">
        <th>
            <tr>
                <th>Id</th>
                <th>Posted</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </th>
        <tb>
            <?php
            $sql = "SELECT * FROM guestbook";
            $query = mysqli_query($koneksi, $sql);
            while ($result = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . $result['id'] . "</td>";
                echo "<td>" . $result['posted'] . "</td>";
                echo "<td>" . $result['name'] . "</td>";
                echo "<td>" . $result['email'] . "</td>";
                echo "<td>" . $result['address'] . "</td>";
                echo "<td>" . $result['city'] . "</td>";
                echo "<td>" . $result['message'] . "</td>";

                echo "<td>";
                echo "<a href='editguestbook.php?id=".$result['id']."'>Edit</a> | ";
                echo "<a href='deleteguestbook.php?id=".$result['id']."'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>
        </tb>
    </table>
    <br>
    <a href="formguestbook.php">Kembali</a>
</body>
</html>