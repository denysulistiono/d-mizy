<?php
include "koneksi.php";

if (isset($_POST['Input'])) {
	$KTP = addslashes(strip_tags($_POST['ktp']));
	$nama_pembeli = addslashes(strip_tags($_POST['nama']));
	$alamat_pembeli = addslashes(strip_tags($_POST['alamat']));
	$telp_pembeli = addslashes(strip_tags($_POST['tlp']));
	$query = "INSERT INTO pembeli values ('$KTP','$nama_pembeli','$alamat_pembeli','$telp_pembeli')";
	$sql = mysql_query ($query);
	if ($sql) {
		echo "<h2><font color = blue> Proses telah Sukses</font</h2>";
	} else {
		echo "<h2><font color = red> Proses Gagal </font</h2>";
	}
}
?>
<html>
<head><title>INPUT PEMBELI</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body bgcolor="#CCCCCC">
<form action="" method="POST" name="input">
  <table align="center" cellpadding="1" cellspacing="1" border="1">
  <tr>
<td colspan="3" bgcolor="#00FFFF"  align="center"><h2>MASUKKAN DATA</h2></td>
</tr>
<tr>
<td width="100">No. KTP</td>
<td width="12">:</td>
<td width="253"><input type="text" name="ktp" size="20" maxlength="16"></td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama" size="30"></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><input type="text" name="alamat" size="30"></td>
</tr>
<tr>
<td>No. Telp</td>
<td>:</td>
<td><input type="text" name="tlp" size="20" maxlength="12"></td>
</tr>
<td><p align="center"><a href="input.php"> <<Back</a></p></td>
<td></td>
<td><input type="submit" name="Input" value="OK">
 <input type="submit" name="reset" value="Cancel"></p>
 </table></form>
  </body>
</html>