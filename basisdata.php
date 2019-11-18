<?php 

$database = "toko_dvd";
$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($hostname,$username,$password,$database);

if(mysqli_connect_errno()){
    die('Maaf koneksi gagal :'.$conn->connect_error);
}else{
    //echo 'berhasil';
}


?>