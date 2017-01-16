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
<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM mobil WHERE kode_mobil ='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	<form action="edit_proses1.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<center><table cellpadding="3" cellspacing="0" border ="30">
			<tr>
				<td>Kode Mobil</td>
				<td>:</td>
				<td><input type="text" name="kode" value="<?php echo $data['kode_mobil']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Merk</td>
				<td>:</td>
				<td><input type="text" name="merk" size="30" value="<?php echo $data['merk']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Tipe</td>
				<td>:</td>
			`	<td><input type="text" name="tipe" size="30" value="<?php echo $data['type']; ?>" required></td> <!-- value diambil dari hasil query -->
				</td>
			</tr>
			<tr>
				<td>Warna</td>
				<td>:</td>
					<td><input type="text" name="warna" size="30" value="<?php echo $data['warna']; ?>" required></td> <!-- value diambil dari hasil query -->
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
					<td><input type="text" name="harga" size="30" value="<?php echo $data['harga_mobil']; ?>" required></td> <!-- value diambil dari hasil query -->
				</td>
			</tr>
			<tr>
				<td>Contact</td>
				<td>:</td>
					<td><input type="text" name="contact" size="30" value="<?php echo $data['contact']; ?>" required></td> <!-- value diambil dari hasil query -->
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan1" value="Simpan"></td>
			</tr>
		</table>
		</center>
	</form>
	<br><br><br>
</body>
</html>