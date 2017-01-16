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
//file yang dipanggil HargaMotor.js
//untuk Mengambil harga Motor pada saat Combo Box Motor terpilih
include("koneksi.php");
$kodeMobil = $_GET['kode_mobil'];
$sql = mysql_query("select harga_mobil from mobil where kode_mobil = '$kodeMobil'");
$i = 1;
$harga = mysql_fetch_array($sql);
echo $harga['harga_mobil'];
?>