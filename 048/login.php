 
<?php
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<h2><font color="#FF0000">Username dan Password belum diisi!</h3></font>';
    } else if ($_GET['error'] == 2) {
        echo '<h2><font color="#FF0000">Username belum diisi!</h2></font>';
    } else if ($_GET['error'] == 3) {
        echo '<h2><font color="#FF0000">Password belum diisi!</h2></font>';
    } else if ($_GET['error'] == 4) {
        echo '<h2><font color="#FF0000">Username dan Password tidak terdaftar!</h2></font>';
    }
}
?>
<html>
	<head><title>Login</title>
    <style>
.about {
  margin: 70px auto 40px;
  padding: 8px;
  width: 260px;
  font: 10px/18px 'Lucida Grande', Arial, sans-serif;
  color: #666;
  text-align: center;
  text-shadow: 0 1px rgba(255, 255, 255, 0.25);
  background: #eee;
  background: rgba(250, 250, 250, 0.8);
  border-radius: 4px;
  background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.1));
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 0 1px rgba(255, 255, 255, 0.1), 0 0 6px rgba(0, 0, 0, 0.2);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 0 1px rgba(255, 255, 255, 0.1), 0 0 6px rgba(0, 0, 0, 0.2);
}
.lg-container{
	width:375px;
	margin:50px auto;
	padding:20px 40px;
	border:5px solid #f4f4f4;
	background:rgba(255,255,255,.5);
	-webkit-border-radius:15px;
	-moz-border-radius:15px;
	border-radius:90px;
	
	-webkit-box-shadow: 0 0 2px #aaa;
	-moz-box-shadow: 0 0 2px #aaa;
	box-shadow: 0 0 2px #aaa;
	background-image: linear-gradient(bottom, rgb(80,102,127) 50%, rgb(87,109,136) 50%, rgb(106,129,155) 100%);
	background-image: -o-linear-gradient(bottom, rgb(80,102,127) 50%, rgb(87,109,136) 50%, rgb(106,129,155) 100%);
	background-image: -moz-linear-gradient(bottom, rgb(80,102,127) 50%, rgb(87,109,136) 50%, rgb(106,129,155) 100%);
	background-image: -webkit-linear-gradient(bottom, rgb(80,102,127) 50%, rgb(87,109,136) 50%, rgb(106,129,155) 100%);
	background-image: -ms-linear-gradient(bottom, rgb(80,102,127) 50%, rgb(87,109,136) 50%, rgb(106,129,155) 100%);
	
	background-image: -webkit-gradient(
		linear,
		left bottom,
		left top,
		color-stop(0.5, rgb(80,102,127)),
		color-stop(0.5, rgb(87,109,136)),
		color-stop(1, rgb(106,129,155))
	);
}
.lg-container h1{
	font-size:20px;
	text-align:center;
}
</style></head>
<div class="lg-container">
    <body background="images/cute-ghost-smile-24075.jpg">
    <form method="post" action="otentifikasi.php">
 <h4><p align="center"><font face="Times New Roman, Times, serif" size="6" color="#FF0000"><marquee>.::DAFTAR BARU::.</marquee></font></p></h4>
            
            <table align="center" width="269" border="0">
            
            <tr>
            <td width="96"><font color="red" size="5">Username</font></td>
            <td width="3">:</td>
            <td width="156"><input type="text" name="username"></td>
            </tr>
            
            <tr>
            <td><font color="red" size="5">Password</font></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
      </tr>
           </table>
            <p align="center"><input name="login" type="submit" value="Login">
<input type="reset" name="Reset" value="Reset"><br><br>
			<font color="#999999"><a href="index.php"> << Back </a></font>
        	</table>
</FORM>
</div>
<section class="about">
    
   <p class="about-author">
      POLITEKNIK NEGERI JEMBER <br> MANAJEMEN INFORRMATIKA <br> &copy; 2017<br>
  </section><br>
</div>
         </body>
         </html>