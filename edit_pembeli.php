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
	$show = mysql_query("SELECT * FROM pembeli WHERE KTP ='$id'");
	if(mysql_num_rows($show) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
	<form action="edit-proses.php" method="post">
		<input type="hidden" name="id" value="<?php echo $id; ?>">	<!-- membuat inputan hidden dan nilainya adalah siswa_id -->
		<center><table cellpadding="3" cellspacing="0" border ="30">
			<tr>
				<td>KTP</td>
				<td>:</td>
				<td><input type="text" name="KTP" value="<?php echo $data['KTP']; ?>" required></td>	<!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" value="<?php echo $data['nama_pembeli']; ?>" required></td> <!-- value diambil dari hasil query -->
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
			`	<td><input type="text" name="alamat" size="30" value="<?php echo $data['alamat_pembeli']; ?>" required></td> <!-- value diambil dari hasil query -->
				</td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td>:</td>
					<td><input type="text" name="telp" size="30" value="<?php echo $data['telp_pembeli']; ?>" required></td> <!-- value diambil dari hasil query -->
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="simpan" value="Simpan"></td>
			</tr>
		</table>
		</center>
	</form>
	<br><br><br>
</body>
</html>