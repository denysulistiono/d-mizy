
<head>
<!--
Project      : Data Karyawan CRUD MySQLi (Create, read, Update, Delete) PHP, MySQLi dan Bootstrap
Author		 : Hakko Bio Richard, A.Md
Website		 : http://www.niqoweb.com
Blog         : http://www.acchoblues.blogspot.com
Email	 	 : hakkobiorichard[at]gmail.com
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan MySQLi</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<style>
		body {
			background-color:#eee;
		}
		.content {
			margin-top: 80px;
		}
	</style>
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	
	<div class="row">
		
			<h2>&nbsp;</h2>
			<form class="form-inline" method="POST">
				<div class="form-group">
					<h2>Laporan Data Mobil</h2>
                    <p><a href="print.php" target="_blank" class="btn btn-primary" role="button">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print Laporan
                    </a></p> 
			  </div>
                
                 <div class="table-responsive">
			<table class="table table-hover">
				<tr class="active">
                    <th>No</th>
					<th>kode_mobil</th>
					<th>merk</th>
                    <th>type</th>
					<th>warna</th>
                    <th>harga_mobil</th>
                    <th>gambar</th>
                
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
                            <td>'.$data['gambar'].'</td>
							';
							
						
				}
		}
				?>
			</table>
			</div>
               
	  </form>
</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
