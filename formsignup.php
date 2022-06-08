<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Sign-Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Concert+One&family=Mukta:wght@300&family=PT+Sans:ital@1&display=swap"
        rel="stylesheet">
    <style>
    h1 {
        color: black;
        align-items: center;
    }
    </style>
</head>
<body>
    <div class="box-formulir">
        <form action="simpansignup.php" method="POST">
            <div class="box">
                <h1>Sign Up</h1>
                <table border="0" class="table-form">
                    <tr>
                        <td width="40px">Nama</td>
                        <td width="50px">:</td>
                        <td>
                            <input type="text" name="name" class="input-control" placeholder="Masukkan nama Anda">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>
                            <textarea name="address" cols="22" rows="3" class="input-control" placeholder="Masukkan alamat Anda"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control"placeholder="Masukkan email Anda">
                        </td>
                    </tr>
                    <tr>
                        <td>Homepage</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="homepage" class="input-control" placeholder="Masukkan homepage"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type=" text" name="username" class="input-control" placeholder="Masukkan username">
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="password" class="input-control" placeholder="Masukkan password">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="daftar" class="btn-daftar" value="Sign Up">
                        </td>
                    </tr>
                </table>
            </div>
    </div>
    </form>
</body>
</html>