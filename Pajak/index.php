<!DOCTYPE html>
<html>
<head>
	<title>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP</title>
</head>
<body>
	<center>

		<?php 
		include 'koneksi.php';
		?>

		<br/><br/><br/>

		<form method="post">
			<label>PILIH TANGGAL</label>
			<input type="date" name="TGL_PEMBAYARAN_SPPT">
			<a href="result.php"><button class="btn btn-primary">FILTER</button></a>
			<button>back</button>
		</form>
	</center>	
</body>
</html>