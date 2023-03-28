<?php
$pengguna = "root";
$password = "";
$host = "localhost";
$database = "perpustakaan";
$id_mysql = mysqli_connect($host,$pengguna,$password,$database) or die("Koneksi error");
?>