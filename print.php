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
session_start();
?>
<form id="form1" name="form2" method="post" action="">
  <table width="1100" border="0" align="center" cellpadding="0" cellspacing="0" class="tabel">
    <tr>
      <td><table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center">Data Mobil</td>
        </tr>
      </table>
        <br />
  <hr align="center" width="1000" size="2" />
  <table width="1000" border="0" align="center" cellpadding="1" cellspacing="0">
    <tr>
      <th align="left">No</th>
					<th align="left">Kode</th>
					<th align="left">Merk</th>
                    <th align="left">Type</th>
                    <th align="left">Warna</th>
                    <th align="left">Harga</th>
                    <th align="left">Contact</th>
                    <th align="left">Gambar</th>
					
    </tr>
<?php
		include('koneksi.php');
		
			
		
		$query = mysql_query("SELECT * FROM mobil ORDER BY kode_mobil ") or die(mysql_error());
		
		
		if(mysql_num_rows($query) == 0){	
			
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	
			
			$no = 1;
			while($data = mysql_fetch_assoc($query)){
						echo '
						<tr>
							<td>'.$no++.'</td>
							<td>'.$data['kode_mobil'].'</td>
							<td>'.$data['merk'].'</td>
							<td>'.$data['type'].'</td>
                            <td>'.$data['warna'].'</td>
                            <td>'.$data['harga_mobil'].'</td>
                            <td>'.$data['contact'].'</td>
                            <td>'.$data['gambar'].'</td>
							
							';
							
						
				}
		}
				?>
  </table>
  <br />
  <hr align="center" width="1000" /><br />
  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="158" align="center">Pimpinan</td>
      <td width="295">&nbsp;</td>
      <td width="78">&nbsp;</td>
      <td width="40">&nbsp;</td>
      <td width="158" align="center">Petugas</td>
    </tr>
    <tr>
      <td rowspan="3">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>

      <td align="center">(Pimpinan)</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    
      <td align="center">(Admin)</td>
    </tr>
  </table>
  <br />
      </td>
    </tr>
  </table>
</form>
<script>print()</script>
