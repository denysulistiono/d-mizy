<?php
include "koneksi.php";
?>
<html>
<head>
<title>Dealer Mobil</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_banner"></div>
       <div id="templatemo_menu">
        <ul>
            <li><a href="index.php"><span></span>Home</a></li>
            <li></li>
            <li></li>
            <li><a href="login.php"><span></span>Login</a></li>
          </li>
        </ul>   
	</div> 
    <div class="lg-container">
<p align="center"><h1>Produk Yang Di Jual </h1></p><br>
 <?php
    mysql_select_db($dbnm, $conn);
    $query = mysql_query ("select * from mobil");
    while ($rs = mysql_fetch_array ($query)) {
          
    ?>
   <tr>&nbsp;&nbsp;
     <td width="106"></td> <td width="287" align="center" valign="top"> 
     <img src="<?php echo 'images/' . $rs['gambar']; ?>" width="287" height="175">
     <td width="603"> <p align="center"><h1>&nbsp;&nbsp;<?php echo $rs['merk']; ?></h1></p>
     <p align="center">&nbsp; Type : <?php echo $rs['type']; ?>&nbsp;| Merk : <?php echo $rs['merk']; ?>&nbsp;| Warna : <?php echo $rs['warna']; ?></p>
       	  <p align="center">&nbsp; Harga : Rp. <?php echo number_format($rs['harga_mobil']); ?></p>
		  <p align="center">&nbsp; No Contact : <?php echo ($rs['contact']); ?></p></td>
      <hr>
        
          
      <?php
    }
    ?>
</div>
 <section class="about">
    
   <p class="about-author">
    POLITEKNIK NEGERI JEMBER <br> MANAJEMEN INFORRMATIKA <br> &copy; 2017<br>
  </section><br>
</body>
</html>