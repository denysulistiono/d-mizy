<html> 
<head><title>LAPORAN INPUT PEMBELI</title> 
</head> 
<body> 
<form action="" method="post" name ="input">
<h1 align="center" >Arsip Pembeli</h1>
<br>
<form method="POST" action="">
    <table>
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
        </table>
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
	$query = mysql_query("SELECT  pembeli.KTP, pembeli.nama_pembeli, pembeli.alamat_pembeli, pembeli.telp_pembeli from pembeli 
				 where $kategori Like'%$tcari%' 
				 ORDER BY KTP") or die(mysql_error());
		}else{
		$query = mysql_query("SELECT * from pembeli ORDER BY KTP") or die(mysql_error());
		}
	if(mysql_num_rows($query) == 0){
		echo '<tr><td colspan="6"> Tidak ada data!</td></tr>';
	}else{
    $no = 1;
    while($row = mysql_fetch_assoc($query)){
		echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$row['KTP'].'</td>';	
					echo '<td>'.$row['nama_pembeli'].'</td>';	
					echo '<td>'.$row['alamat_pembeli'].'</td>';	
					echo '<td>'.$row['telp_pembeli'].'</td>';
		echo '<td><a href="edit_pembeli.php?kode='.$row['KTP'].'">Edit</a> / ><a href="hapus_pembeli.php?kode=<?'.$row['KTP'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				$no++;
        }
	}
?>
   </table>
  <p align="center"><a href="arsip.php"> <<Back</a></p>
</form>
   </body>
   </html>