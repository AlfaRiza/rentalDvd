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
        <h3></h3>
        <form action="proses.php" method="post">
            <?php 
                include("basisdata.php");
                $action = $_POST['action'];
                error_reporting(0);
                $id = $_POST['id'];
                error_reporting(0);
                if ($action == "tambah") {
                    $id_film = "";
                    $judul = "";
                    $jenis = "";
                    $nama_gmb = "";
                    $sutradara = "";
                    $pemain_utama = "";
                    $harga = "";
                    $thn_terbit = "";
                }else{
                    $query = "SELECT * FROM dvd WHERE id_film = '$id'";
                    error_reporting(0);
                    $hasil_query = mysqli_query($conn, $query);

                    $baris = mysqli_fetch_array($hasil_query);
                    
                    $id_film = $baris['id_film'];
                    $judul = $baris['judul'];
                    $jenis = $baris['jenis'];
                    $nama_gmb = $baris['nama_gmb'];
                    $sutradara = $baris['sutradara'];
                    $pemain_utama = $baris['pemain_utama'];
                    $harga = $baris['harga'];
                    $thn_terbit = $baris['thn_terbit'];
                }
            ?>

            <input type="hidden" name="id_film" value="<?= $id; ?>">
            Judul Film :<input type="text" name="judul" size="20" maxlength="30" value="<?= $judul; ?>"> <br>
            Jenis Film :<input type="text" name="jenis" size="20" maxlength="30" value="<?= $jenis; ?>"> <br>
            Nama file gambar :<input type="text" name="nama_gmb" size="20" maxlength="30" value="<?= $nama_gmb; ?>"> <br>
            Sutradara :<input type="text" name="sutradara" size="20" maxlength="30" value="<?= $sutradara; ?>"> <br>
            Pemain Utama :<input type="text" name="pemain_utama" size="20" maxlength="30" value="<?= $pemain_utama; ?>"> <br>
            Harga :<input type="text" name="harga" size="20" maxlength="30" value="<?= $harga; ?>"> <br>
            Tahun Terbit :<input type="text" name="thn_terbit" size="20" maxlength="30" value="<?= $thn_terbit; ?>"> <br>
            <input type="submit" name="submit" value="<?= $action; ?>" id="">

        </form>
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