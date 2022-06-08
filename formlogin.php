<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Login</title>
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
        <form action="simpanlogin.php" method="POST">
            <div class="box">
                <h1>Log In</h1>
                <table border="0" class="table-form">
                    <tr>
                        <td width="400px">Username</td>
                        <td width="50px">:</td>
                        <td>
                            <input type="text" name="username" class="input-control" placeholder="Masukkan username">
                        </td>
                    </tr>
                    <tr>
                        <td width="400px">Password</td>
                        <td width="50px">:</td>
                        <td>
                            <input type="text" name="password" class="input-control" placeholder="Masukkan password">
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
    </div>
    </form>
</body>
</html>