<?php
include "config.php";
if(isset($_GET['id'])){
$id_buku = $_GET['id'];
$query = "SELECT * FROM tbl_buku WHERE kode_buku='$id_buku'";
$data = mysqli_query($id_mysql,$query);
$row = mysqli_fetch_array($data);
}
?>

<form name="edit_data_buku" method="post" action="">
<h2>Edit data Buku</h2>

<table width="300" border="0">
	<tr>
		<td>Kode Buku</td>
		<td><input type="text" name="kd_buku" value="<?php echo "$row[0]"; ?>"></td>
	</tr>
	<tr>
		<td>Judul Buku</td>
		<td><input type="text" name="jdl_buku" value="<?php echo "$row[1]"; ?>"></td>
	</tr>
	<tr>
		<td>Pengarang Buku</td>
		<td><input type="text" name="pengarang_buku" value="<?php echo "$row[2]"; ?>"></td>
	</tr>
	<tr>
		<td>Penerbit Buku</td>
		<td><input type="text" name="penerbit_buku" value="<?php echo "$row[3]"; ?>"></td>
	</tr>
	<tr>
		<td>Nomor ISBN</td>
		<td><input type="text" name="isbn_buku" value="<?php echo "$row[4]"; ?>"></td>
	</tr>
	<tr>
		<td>Jumlah Buku</td>
		<td><input type="text" name="jml_buku" value="<?php echo "$row[5]"; ?>"></td>
	</tr>
	<tr>
		<td><input type="submit" name="edit" value="Edit"></td>
	</tr>
</table>
</form>

<?php
	include "config.php";
    
	if(isset($_POST['edit'])){
		$kode = $_POST['kd_buku'];
		$nama = $_POST['jdl_buku'];
		$pengarang = $_POST['pengarang_buku'];
		$penerbit = $_POST['penerbit_buku'];
		$isbn = $_POST['isbn_buku'];
		$jumlah = $_POST['jml_buku'];

		$edit = "UPDATE tbl_buku set kode_buku='$kode',judul_buku='$nama',pengarang_buku='$pengarang',penerbit_buku='$penerbit',nomor_isbn='$isbn',jumlah_buku='$jumlah' WHERE kode_buku='$id_buku'";
		$update_query = mysqli_query($id_mysql,$edit);
        header("location: index.php");
	}
?>