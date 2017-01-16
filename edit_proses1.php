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
//mulai proses edit data

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan1'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id			= $_POST['id'];	//membuat variabel $id dan datanya dari inputan hidden id
	$kode		= $_POST['kode'];	//membuat variabel $nis dan datanya dari inputan NIS
	$merk		= $_POST['merk'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$tipe		= $_POST['tipe'];	//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	$warna		= $_POST['warna'];	
	$harga		= $_POST['harga'];
	$contact	= $_POST['contact'];//membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
	
	//melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE siswa_id='$id' <- diambil dari inputan hidden id
	$update = mysql_query("UPDATE mobil SET kode_mobil='$kode', merk='$merk', type='$tipe', warna='$warna', harga_mobil='$harga', contact='$contact' WHERE kode_mobil='$id'") or die(mysql_error());
	
	//jika query update sukses
	if($update){
		
		echo 'Data berhasil di simpan! ';		//Pesan jika proses simpan sukses
		echo '<a href="arsip_mobil.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}else{
		
		echo 'Gagal menyimpan data! ';		//Pesan jika proses simpan gagal
		echo '<a href="edit_mobil.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman edit
		
	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>