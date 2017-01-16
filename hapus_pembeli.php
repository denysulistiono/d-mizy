<?php
if(isset($_GET['id'])){
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysql_query("SELECT KTP FROM pembeli WHERE KTP='$id'") or die(mysql_error());
	if(mysql_num_rows($cek) == 0){
		echo '<script>window.history.back()</script>';
	}else{
		$del = mysql_query("DELETE FROM pembeli WHERE KTP='$id'");
		if($del){
			
			echo 'Data siswa berhasil di hapus! ';		
			echo '<a href="arsip_pembeli.php">Kembali</a>';	
			
		}else{
			
			echo 'Gagal menghapus data! ';		
			echo '<a href="arsip_pembeli.php">Kembali</a>';	
		
		}	
	}
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>