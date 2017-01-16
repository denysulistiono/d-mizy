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
<head><title>HOME</title></head>
<body background="images/2.jpg">
<p align="center"><marquee><h2><font color="#0099FF">Terimaskasih Telah Login</h2></marquee></p>
<p align="center"><br>
				<a href ="home.php">Halaman Awal</a> |
				<a href ="input.php">Menu Input</a> |
    			<a href ="arsip.php">Menu Arsip</a> |
                <a href ="laporan.php">Laporan <a> |
                <a href="../logout.php">Logout</a>  
                
 <br><br>
<br><br>
<p align="center"><font size="+3">Selamat Datang Di Web Dealer Mobil</font></p>
</body>
</html>