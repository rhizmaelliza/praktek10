<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Guestbook</title>
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
        <form action="simpanguestbook.php" method="POST">
            <div class="box">
                <h1>Guestbook</h1>
                <table border="0" class="table-form">
                    <tr>
                        <td>Posted</td>
                        <td>:</td>
                        <td>
                            <input type="date" name="posted" class="input-control">
                        </td>
                    </tr>
                    <tr>
                        <td width="40px">Name</td>
                        <td width="50px">:</td>
                        <td>
                            <input type="text" name="name" class="input-control" placeholder="Masukkan nama Anda">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="email" class="input-control" placeholder="Masukkan email Anda">
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>
                            <textarea name="address" cols="19" rows="3" class="input-control" placeholder="Masukkan alamat Anda"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="city" class="input-control" placeholder="Masukkan kota Anda"></input>
                        </td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td>:</td>
                        <td>
                            <textarea name="message" cols="19" rows="5" class="input-control" placeholder="Masukkan pesan"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input type="submit" name="masuk" class="btn-login" value="Log In">
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html>