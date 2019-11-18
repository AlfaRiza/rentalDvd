<?php 
    require("session.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Toko film serba ada</title>
    </head>
    <body>
        <center><h2>Selamat datang di toko serba ada</h2></center>
        <h3>Film detail yang anda pilih</h3>
        <?php include("basisdata.php"); 
            $id = $_GET['id'];
                $query = "SELECT * FROM dvd WHERE id_film='$id'";
            $hasil_query = mysqli_query($conn, $query);
        ?>
        <table valign="top">
            <?php while ($baris = mysqli_fetch_array($hasil_query)) { ?>
                <tr>
                    <img src="img/<?= $baris['nama_gmb']; ?>" height="50px" alt="">
                </tr>
                <tr>
                    <td><p><?= $baris['judul'] ?></p>
                        <p><?= $baris['jenis'] ?></p>
                        <p><?= $baris['sutradara'] ?></p>
                        <p><?= $baris['pemain_utama'] ?></p>
                        <p><?= $baris['harga'] ?></p>
                        <p><?= $baris['thn_terbit'] ?></p>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <center>
            <hr><a href="kelola01.php">Pengelolaan</a>
            Alamat : Jln. pelan 2 banyak anak anak
            e-mail : <a href="mailto:dvdstore@serba-ada.com">dvdstore@serba-ada.com</a>
            </center>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>