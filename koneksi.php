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
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "048";

$conn = mysql_connect ($host,$user,$pass);
if ($conn) {
	$buka = mysql_select_db($dbnm);
	if (!$buka) {
		die ("Database tidak dapat dibuka");
	}
} else {
	die ("Server MySQL tidak terhubung");
}
?>
