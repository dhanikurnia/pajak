<!DOCTYPE html>
<html>
<head>
	<title>aaaaaaaaaaaa</title>
</head>
<body>

<center>
	<?php 
		include 'koneksi.php';
		?>
	<table border="1">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
			</tr>
			<?php 
			$no = 1;

			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$sql = mysqli_query($koneksi,"select * from barang_masuk where tanggal='$tgl'");
			}else{
				$sql = mysqli_query($koneksi,"select * from barang_masuk");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['jumlah']; ?></td>
			</tr>
			<?php 
			}
			?>
	</table>

</center>
</body>
</html>