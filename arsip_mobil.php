<html> 
<head><title>LAPORAN INPUT MOBIL</title> 
</head> 
<body> 
<form action="" method="post" name ="input">
<h1 align="center" >Arsip Mobil</h1>
    <br>
        <tr>
			<center>
            <td>
					<select name="kategori" required>
						<option value="">Pilih Kategori Pencarian</option>
						<option value="kode_mobil">Kode Mobil</option>
						<option value="merk">Merk</option>
					</select>
				</td>
				<td>:</td>
				<td><input type="text" name="tcari"  id= "txt_cari" required></td>

				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="bcari" value="Cari"></td>
			</tr>
    <br>
            <br>
<table align="center" border="1">
<thead>
<tr>
<th align="center">No</th>
<th align="center">Kode Mobil</th>
<th align="center">Merk</th>
<th align="center">Type</th>
<th align="center">Warna</th>
<th align="center">Harga Mobil</th>
<th align="center">Gambar</th>
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
	$query = mysql_query("SELECT  mobil.kode_mobil,mobil.merk, mobil.type, mobil.warna, mobil.harga_mobil, mobil.gambar from mobil
				 where $kategori Like'%$tcari%' 
				 ORDER BY kode_mobil") or die(mysql_error());
		}else{
		$query = mysql_query("SELECT * from mobil ORDER BY kode_mobil") or die(mysql_error());
		}
	if(mysql_num_rows($query) == 0){
		echo '<tr><td colspan="6"> Tidak ada data!</td></tr>';
	}else{
    $no = 1;
    while($data = mysql_fetch_assoc($query)){
		echo '<tr>';
					echo '<td>'.$no.'</td>';	
					echo '<td>'.$data['kode_mobil'].'</td>';	
					echo '<td>'.$data['merk'].'</td>';	
					echo '<td>'.$data['type'].'</td>';	
					echo '<td>'.$data['warna'].'</td>';
                    echo '<td>'.$data['harga_mobil'].'</td>';
                    echo '<td>'.$data['gambar'].'</td>';
		echo '<td><a href="edit_mobil.php?kode='.$data['kode_mobil'].'">Edit</a> / ><a href="hapus_mobil.php?kode=<?'.$data['kode_mobil'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
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