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
	<table border="5">
			<tr>
				<th>NOMOR</th>
				<th>KD_PROPINSI</th>
				<th>THN_PAJAK_SPPT</th>
				<th>TGL_PEMBAYARAN_SPPT</th>
			</tr>
			<?php 
			$no = 1;

			if(isset($_POST['TGL_PEMBAYARAN_SPPT'])){
				$tgl = $_POST['TGL_PEMBAYARAN_SPPT'];
				$sql = mysqli_query($koneksi,"select * from pembayaran_sppt where TGL_PEMBAYARAN_SPPT='$tgl'");


			}else{
				$sql = mysqli_query($koneksi,"select * from pembayaran_sppt");
				
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $data['KD_PROPINSI']; ?>
				<?php echo $data['KD_DATI2']; ?>
				<?php echo $data['KD_KECAMATAN']; ?>
				<?php echo $data['KD_KELURAHAN']; ?>
				<?php echo $data['KD_BLOK']; ?>
				<?php echo $data['NO_URUT']; ?>
				<?php echo $data['KD_JNS_OP']; ?></td>
				<td><?php echo $data['THN_PAJAK_SPPT']; ?></td>
				<td><?php echo $data['TGL_PEMBAYARAN_SPPT']; ?></td>
				
			</tr>
			<?php 
			}
			?>
		</table>

		<table border="5">
			<tr>
				<th>NOMOR</th>
				<th>KD_KECAMATAN</th>
				<th>NAMA_KECAMATAN</th>

			</tr>
			<?php 
			$no = 1;

			if(isset($_POST['KD_KECAMATAN'])){
				$tgl = $_POST['KD_KECAMATAN'];

			}else{
				$sql = mysqli_query($koneksi,"select * from kecamatan");
				
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++?></td>
				<td><?php echo $data['KD_KECAMATAN']; ?>
				<td><?php echo $data['NM_KECAMATAN']; ?></td>
				
			</tr>
			<?php 
			}
			?>
		</table>

</center>
</body>
</html>