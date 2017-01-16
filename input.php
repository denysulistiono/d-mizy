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
<head><title>Input</title></head>
<body background="images/2.jpg">
<br>
<p align="center"><font size="+6">INPUT</font></p>
<p align="center">
				<a href ="home.php"> Halaman Awal</a> |
				<a href ="input.php"> Menu Input</a> |
    			<a href ="arsip.php">Menu Arsip</a> |
                <a href ="laporan.php">Laporan <a> |
                <a href="../logout.php">Logout</a>  
                
 <br><br><br><br>
<p align="center"><font size="+5">MENU INPUT</font></p>
<p align="center"><a href="input_pembeli.php">Input Pembeli</a></p>
<p align="center"><a href="mobil1.php">Input Mobil</a></p>
</body>
</html>
