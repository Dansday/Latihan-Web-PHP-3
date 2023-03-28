<?php
include "config.php";
include "index.php";

if (isset($_POST['tambah'])){
    $kode = $_POST['kd_buku'];
    $nama = $_POST['jdl_buku'];
    $pengarang = $_POST['pengarang_buku'];
    $penerbit = $_POST['penerbit_buku'];
    $isbn = $_POST['isbn_buku'];
    $jumlah = $_POST['jml_buku'];

    $insert = "INSERT INTO tbl_buku (kode_buku, judul_buku, pengarang_buku, penerbit_buku, nomor_isbn, jumlah_buku) VALUES ('$kode','$nama','$pengarang','$penerbit','$isbn','$jumlah')";

    $insert_query = mysqli_query($id_mysql,$insert);

    if(!$insert_query)
        die ("Data gagal diinput!");
}

header("location: index.php");

?>