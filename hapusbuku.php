<?php
include "config.php";
include "index.php";

if(isset($_GET['id'])){
    $id_buku = $_GET['id'];
    $delete="DELETE FROM tbl_buku WHERE kode_buku='$id_buku'";
    mysqli_query($id_mysql,$delete);
}

header("location: index.php");
?>