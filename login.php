<?php 
    session_start();

    if (!empty($_SESSION['username'])) {
        header("location:index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php 
        error_reporting(0);
        if ($_GET['pesan']) {
            if ($_GET['pesan'] == "gagal") {
                echo "Login gagal! username dan password salah!";
            }elseif ($_GET['pesan'] == "logout") {
                echo "Anda telah berhasil logout";
            }elseif ($_GET['pesan'] == "belum login") {
                echo "Anda harus login untuk mengakses halaman login";
            }
        }
    ?><br><br>
    <form action="cek_login.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td> <input type="text" name="username" placeholder="Username"> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td> <input type="password" name="password" placeholder="Password"> </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" name="login" value="LOGIN"> </td>
            </tr>
        </table>
    </form>
</body>
</html>