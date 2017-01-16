<?php
include "koneksi.php";

if (isset($_POST['Input'])) {
	$kode_mobil = addslashes(strip_tags($_POST['kode']));
	$merk = addslashes(strip_tags($_POST['merk']));
	$type = addslashes(strip_tags($_POST['type']));
	$warna = addslashes(strip_tags($_POST['warna']));
	$harga_mobil = addslashes(strip_tags($_POST['harga']));
	$gambar = addslashes(strip_tags($_POST['gambar']));
	$contact = addslashes(strip_tags($_POST['contact']));

	$query = "INSERT INTO mobil values ('$kode_mobil','$merk','$type','$warna','$harga_mobil','$gambar','$contact')";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color = blue> Proses telah Sukses</font</h2>";
	} else {
		echo "<h2><font color = red> Proses Gagal </font</h2>";
	}
}
?>
<html>
<head><title>INPUT MOBIL</title>
</head>
<body bgcolor="#CCCCCC">

<form action="" method="POST" name="input">
  <table align="center" cellpadding="1" cellspacing="1" border="1">
  <tr>
<td colspan="3" bgcolor="#00FFFF"  align="center"><h2>MASUKKAN DATA</h2></td>
</tr>
<tr>
<td width="100">Kode Mobil</td>
<td width="12">:</td>
<td width="253"><input type="text" name="kode" size="15" maxlength="15"></td>
</tr>
<tr>
<td>Merk</td>
<td>:</td>
<td><input type="text" name="merk" size="30"></td>
</tr>
<tr>
<td>Type</td>
<td>:</td>
<td><input type="text" name="type" size="20"></td>
</tr>
<tr>
<td>Warna</td>
<td>:</td>
<td><input type="text" name="warna" size="20"></td>
</tr>
<tr>
<td>Harga</td>
<td>:</td>
<td><input type="text" name="harga" size="20"></td>
</tr>
<tr>
<td>No contact </td>
<td>:</td>
<td><input type="text" name="contact" size="20"></td>
</tr>
<tr>
<td>Gambar</td>
<td>:</td>
<td><input type="file" name="gambar" size="20"></td>
</tr>
<td><p align="center"><a href="input.php"> <<Back</a></p></td>
<td></td>
<td><input type="submit" name="Input" value="OK">
 <input type="submit" name="reset" value="Cancel"></p>
 </table>
</form>
  </body>
</html>