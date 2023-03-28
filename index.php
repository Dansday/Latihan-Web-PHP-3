<form name="tambah_data_buku" method=POST action="tambahbuku.php">
    
    <table width="300" border=0>
    <h2>Input Data Buku</h2>
	<tr>
		<td>Kode Buku</td>
		<td> : </td>
		<td><input type="text" name="kd_buku" maxlength="100">
	</tr>

    <tr>
		<td>Judul Buku</td>
		<td> : </td>
		<td><input type="text" name="jdl_buku" maxlength="100">
	</tr>

    <tr>
		<td>Pengarang Buku</td>
		<td> : </td>
		<td><input type="text" name="pengarang_buku" maxlength="100">
	</tr>

    <tr>
		<td>Penerbit Buku</td>
		<td> : </td>
		<td><input type="text" name="penerbit_buku" maxlength="100">
	</tr>

    <tr>
		<td>Nomor ISBN</td>
		<td> : </td>
		<td><input type="text" name="isbn_buku" maxlength="13">
	</tr>

    <tr>
		<td>Jumlah Buku</td>
		<td> : </td>
		<td><input type="text" name="jml_buku" maxlength="10">
	</tr>

    <tr>
		<td><input type="submit" name="tambah" value="Tambah">
	</tr>
</form>

<?php
include "config.php";

$result = mysqli_query($id_mysql,"SELECT * FROM tbl_buku");
$jumlah_record = mysqli_num_rows($result);
	
echo "<table border=1>";
echo "<h2>Tabel Data Buku</h2>";
echo "<tr>
<th>Kode Buku</th>
<th>Judul Buku</th>
<th>Pengarang</th>
<th>Penerbit</th>
<th>ISBN</th>
<th>Jumlah</th>
<th>Proses</th>
</tr>";

while ($row = mysqli_fetch_row($result)){
	echo "<tr>
    <td>$row[0]</td>
    <td>$row[1]</td>
    <td>$row[2]</td>
    <td>$row[3]</td>
    <td>$row[4]</td>
	<td>$row[5]</td>					
	<td><a href=editbuku.php?id=$row[0]>Edit</a>
    <a href='hapusbuku.php?id=$row[0]'>Hapus</a></td>
    </tr>";
}
echo "<tr><td colspan='7'>Jumlah Record : $jumlah_record </td></tr>";
echo "</Table>";
?>
