<?php

session_start();
ini_set("display_errors",0);
$user = $_SESSION['login'];
	if  ($user ==""){
	echo "<script>
		window.location = '../index.php';
		</script>";
	}	
?>
<html> 
<head><title>LAPORAN INPUT PEMBELI</title> 
</head> 
<body> 
<form action="" method="post" name ="input">
<h1 align="center" >Arsip Pembeli</h1>
<br>
<form method="POST" action="">
	<tr>
	<center>
				<td>
					<select name="kategori" required>
						<option value="">Pilih Kategori Pencarian</option>
						<option value="KTP">KTP</option>
						<option value="nama_pembeli">Nama</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>:</td>
				<td><input type="text" name="tcari"  id= "txt_cari" required></td>
			</tr>
			<tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="bcari" value="Cari"></td>
			</tr>
		</center>
		</form>
<table border="1" align="center" class="zebra">
<thead>
<tr>
<th align="center">No</th>
<th align="center">KTP</th>
<th align="center">Nama Lengkap</th>
<th align="center">Alamat</th>
<th align="center">No. Telp</th>
<th align="center" colspan="2">Opsi</th>
</tr>
</thead>
<tfoot>
</tbody>
<?php
   include "koneksi.php"; 
   if (isset($_POST['bcari'])) { 
		$tcari = $_POST['tcari'];
		$kategori = $_POST['kategori'];
	$query = mysql_query("SELECT  pembeli.KTP, pembeli.nama_pembeli , pembeli.alamat_pembeli, pembeli.telp_pembeli from pembeli 
				 where $kategori Like'%$tcari%' 
				 ORDER BY KTP") or die(mysql_error());
		}else{
		$query = mysql_query("SELECT * from pembeli ORDER BY KTP") or die(mysql_error());
		}
	if(mysql_num_rows($query) == 0){
		echo '<tr><td colspan="6"> Tidak ada data!</td></tr>';
	}else{
    $no = 1;
    while($data = mysql_fetch_assoc($query)){
		echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['KTP'].'</td>';	
					echo '<td>'.$data['nama_pembeli'].'</td>';	
					echo '<td>'.$data['alamat_pembeli'].'</td>';	
					echo '<td>'.$data['telp_pembeli'].'</td>';
					echo '<td><a href="edit_pembeli.php?id='.$data['KTP'].'">Edit</a> / <a href="hapus_pembeli.php?id='.$data['KTP'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
					
				echo '</tr>';
				$no++;
		}
		
	}
?>
 </form>
   </table>
  <p align="center"><a href="arsip.php"> <<Back</a></p>

   </body>
   </html>