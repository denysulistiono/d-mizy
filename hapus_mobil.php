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
if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT kode_mobil FROM mobil WHERE kode_mobil='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM mobil WHERE kode_mobil='$id'");
		if($del){
			
			echo 'Data siswa berhasil di hapus! ';		
			echo '<a href="arsip_mobil.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="arsip_mobil.php">Kembali</a>';	
		
		}	
	}
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>